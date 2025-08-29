#!/bin/bash

# Sawtic Image Optimization Script - Fixed Version
# Fixes: Large log files + Double optimization prevention

set -e  # Exit on any error

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Get script directory and set paths relative to project root
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PROJECT_ROOT="$(cd "$SCRIPT_DIR/.." && pwd)"

# Configuration - paths relative to project root
IMAGES_DIR="$PROJECT_ROOT/public/assets/images"
BACKUP_DIR="$PROJECT_ROOT/storage/image-backups/$(date +%Y-%m-%d_%H-%M-%S)"
OPTIMIZATION_DB="$PROJECT_ROOT/storage/app/images-optimization-db.json"
MAX_WIDTH=1920
MAX_HEIGHT=1080
JPEG_QUALITY=85
PNG_QUALITY=90
WEBP_QUALITY=80

# Statistics
TOTAL_FILES=0
OPTIMIZED_FILES=0
TOTAL_SAVINGS=0

echo -e "${BLUE}🖼️  Sawtic Image Optimization Script (Fixed)${NC}"
echo "================================================"

# Check if required tools are installed
check_dependencies() {
    echo -e "${YELLOW}🔍 Checking dependencies...${NC}"
    
    local missing_deps=()
    
    if ! command -v magick &> /dev/null; then
        missing_deps+=("imagemagick")
    fi
    
    if ! command -v cwebp &> /dev/null; then
        missing_deps+=("webp")
    fi
    
    if ! command -v jpegoptim &> /dev/null; then
        missing_deps+=("jpegoptim")
    fi
    
    if ! command -v optipng &> /dev/null; then
        missing_deps+=("optipng")
    fi
    
    if [ ${#missing_deps[@]} -gt 0 ]; then
        echo -e "${RED}❌ Missing dependencies: ${missing_deps[*]}${NC}"
        echo -e "${YELLOW}💡 Install with:${NC}"
        
        if [[ "$OSTYPE" == "darwin"* ]]; then
            echo "   brew install imagemagick webp jpegoptim optipng"
        elif [[ "$OSTYPE" == "linux-gnu"* ]]; then
            echo "   sudo apt-get install imagemagick webp jpegoptim optipng"
        fi
        exit 1
    fi
    
    echo -e "${GREEN}✅ All dependencies found${NC}"
}

# Create backup directory
create_backup_dir() {
    if [ ! -d "$BACKUP_DIR" ]; then
        mkdir -p "$BACKUP_DIR"
        echo -e "${GREEN}📁 Created backup directory: $BACKUP_DIR${NC}"
    fi
}

# Initialize or load optimization database
load_optimization_db() {
    local db_dir=$(dirname "$OPTIMIZATION_DB")
    if [ ! -d "$db_dir" ]; then
        mkdir -p "$db_dir"
    fi
    
    if [ ! -f "$OPTIMIZATION_DB" ]; then
        echo '{"version": "2.0", "optimizations": {}}' > "$OPTIMIZATION_DB"
        echo -e "${GREEN}📋 Created optimization database: $OPTIMIZATION_DB${NC}"
    fi
}

# Generate compact file hash for path
generate_path_hash() {
    local file="$1"
    local relative_path="${file#$IMAGES_DIR/}"
    # Use first 12 characters of SHA-256 hash for compact storage
    echo -n "$relative_path" | shasum -a 256 | cut -c1-12
}

# Generate file signature for optimization tracking  
generate_file_signature() {
    local file="$1"
    local file_size=$(get_file_size "$file")
    local mod_time
    
    if [[ "$OSTYPE" == "darwin"* ]]; then
        mod_time=$(stat -f%m "$file")
    else
        mod_time=$(stat -c%Y "$file")
    fi
    
    local current_settings="q${JPEG_QUALITY}_w${MAX_WIDTH}_h${MAX_HEIGHT}"
    
    # Create a compact signature: size_modtime_settings
    echo "${file_size}_${mod_time}_${current_settings}"
}

# Check if file needs optimization (improved logic)
needs_optimization() {
    local file="$1"
    local path_hash=$(generate_path_hash "$file")
    local current_signature=$(generate_file_signature "$file")
    
    # Check if database exists
    if [ ! -f "$OPTIMIZATION_DB" ]; then
        return 0  # File needs optimization if no database
    fi
    
    # Check if file exists in database with same signature
    local logged_signature=$(jq -r ".optimizations[\"$path_hash\"] // \"\"" "$OPTIMIZATION_DB" 2>/dev/null)
    
    # Debug output for troubleshooting
    # echo "File: $(basename "$file"), Hash: $path_hash, Current: $current_signature, Logged: $logged_signature"
    
    if [ -n "$logged_signature" ] && [ "$logged_signature" = "$current_signature" ]; then
        return 1  # File doesn't need optimization
    fi
    
    return 0  # File needs optimization
}

# Record optimization in database (compact format)
record_optimization() {
    local file="$1"
    local original_size="$2"
    local new_size="$3"
    local path_hash=$(generate_path_hash "$file")
    local current_signature=$(generate_file_signature "$file")
    
    # Store only the signature (size_time_settings) as value
    # This is ultra-compact: just hash -> signature mapping
    jq --arg hash "$path_hash" --arg signature "$current_signature" \
        '.optimizations[$hash] = $signature' \
        "$OPTIMIZATION_DB" > "${OPTIMIZATION_DB}.tmp" && \
    mv "${OPTIMIZATION_DB}.tmp" "$OPTIMIZATION_DB"
}

# Get file size in bytes
get_file_size() {
    if [[ "$OSTYPE" == "darwin"* ]]; then
        stat -f%z "$1"
    else
        stat -c%s "$1"
    fi
}

# Format bytes to human readable
format_bytes() {
    local bytes=$1
    if (( bytes < 1024 )); then
        echo "${bytes}B"
    elif (( bytes < 1048576 )); then
        echo "$((bytes / 1024))KB"
    else
        echo "$((bytes / 1048576))MB"
    fi
}

# Backup original file maintaining directory structure
backup_file() {
    local file="$1"
    local relative_path="${file#$IMAGES_DIR/}"
    local backup_path="$BACKUP_DIR/$relative_path"
    local backup_dir=$(dirname "$backup_path")
    
    # Create backup directory structure
    mkdir -p "$backup_dir"
    
    # Copy original file maintaining structure
    cp "$file" "$backup_path"
}

# Optimize JPEG files
optimize_jpeg() {
    local file="$1"
    local original_size=$(get_file_size "$file")
    
    echo -e "  🔧 Optimizing JPEG: $(basename "$file")"
    
    # Backup original
    backup_file "$file"
    
    # Resize if too large
    magick "$file" -resize "${MAX_WIDTH}x${MAX_HEIGHT}>" -strip -interlace Plane -quality $JPEG_QUALITY "$file"
    
    # Further optimize with jpegoptim
    jpegoptim --max=$JPEG_QUALITY --strip-all --preserve --quiet "$file"
    
    local new_size=$(get_file_size "$file")
    local savings=$((original_size - new_size))
    
    if [ $savings -gt 0 ]; then
        echo -e "    ${GREEN}💾 Saved: $(format_bytes $savings) ($(((original_size - new_size) * 100 / original_size))%)${NC}"
        TOTAL_SAVINGS=$((TOTAL_SAVINGS + savings))
        OPTIMIZED_FILES=$((OPTIMIZED_FILES + 1))
        
        # Record optimization in database
        record_optimization "$file" "$original_size" "$new_size"
    else
        # Optimization made file larger - restore original
        echo -e "    ${YELLOW}⚠️  File got larger ($(format_bytes $((new_size - original_size)))) - restoring original${NC}"
        local relative_path="${file#$IMAGES_DIR/}"
        local backup_file="$BACKUP_DIR/$relative_path"
        if [ -f "$backup_file" ]; then
            cp "$backup_file" "$file"
            echo -e "    ${GREEN}✅ Original file restored${NC}"
            
            # Record attempted optimization to prevent retrying
            record_optimization "$file" "$original_size" "$original_size"
        fi
    fi
}

# Optimize PNG files
optimize_png() {
    local file="$1"
    local original_size=$(get_file_size "$file")
    
    echo -e "  🔧 Optimizing PNG: $(basename "$file")"
    
    # Backup original
    backup_file "$file"
    
    # Resize if too large
    magick "$file" -resize "${MAX_WIDTH}x${MAX_HEIGHT}>" -strip "$file"
    
    # Optimize with optipng
    optipng -quiet -o7 -strip all "$file"
    
    local new_size=$(get_file_size "$file")
    local savings=$((original_size - new_size))
    
    if [ $savings -gt 0 ]; then
        echo -e "    ${GREEN}💾 Saved: $(format_bytes $savings) ($(((original_size - new_size) * 100 / original_size))%)${NC}"
        TOTAL_SAVINGS=$((TOTAL_SAVINGS + savings))
        OPTIMIZED_FILES=$((OPTIMIZED_FILES + 1))
        
        # Record optimization in database
        record_optimization "$file" "$original_size" "$new_size"
    else
        # Optimization made file larger - restore original
        echo -e "    ${YELLOW}⚠️  File got larger ($(format_bytes $((new_size - original_size)))) - restoring original${NC}"
        local relative_path="${file#$IMAGES_DIR/}"
        local backup_file="$BACKUP_DIR/$relative_path"
        if [ -f "$backup_file" ]; then
            cp "$backup_file" "$file"
            echo -e "    ${GREEN}✅ Original file restored${NC}"
            
            # Record attempted optimization to prevent retrying
            record_optimization "$file" "$original_size" "$original_size"
        fi
    fi
}

# Create WebP version
create_webp() {
    local file="$1"
    local webp_file="${file%.*}.webp"
    
    # Skip if WebP already exists and is newer
    if [ -f "$webp_file" ] && [ "$webp_file" -nt "$file" ]; then
        return
    fi
    
    echo -e "  🔄 Creating WebP: $(basename "$webp_file")"
    
    cwebp -q $WEBP_QUALITY "$file" -o "$webp_file" -quiet
    
    if [ -f "$webp_file" ]; then
        local original_size=$(get_file_size "$file")
        local webp_size=$(get_file_size "$webp_file")
        local savings=$((original_size - webp_size))
        
        if [ $savings -gt 0 ]; then
            echo -e "    ${GREEN}📦 WebP saved: $(format_bytes $savings) ($(((original_size - webp_size) * 100 / original_size))%)${NC}"
        fi
    fi
}

# Process a single image file
process_image() {
    local file="$1"
    local extension="${file##*.}"
    extension=$(echo "$extension" | tr '[:upper:]' '[:lower:]')
    
    TOTAL_FILES=$((TOTAL_FILES + 1))
    
    # Check if file needs optimization
    if ! needs_optimization "$file"; then
        echo -e "  ⏭️  Already optimized: $(basename "$file")"
        return
    fi
    
    case "$extension" in
        jpg|jpeg)
            optimize_jpeg "$file"
            if [ "$SKIP_WEBP" = false ]; then
                create_webp "$file"
            fi
            ;;
        png)
            optimize_png "$file"
            if [ "$SKIP_WEBP" = false ]; then
                create_webp "$file"
            fi
            ;;
        webp)
            echo -e "  ⏭️  Skipping WebP: $(basename "$file")"
            ;;
        svg)
            echo -e "  ⏭️  Skipping SVG: $(basename "$file")"
            ;;
        *)
            echo -e "  ❓ Unknown format: $(basename "$file")"
            ;;
    esac
}

# Main optimization function
optimize_images() {
    echo -e "${YELLOW}🚀 Starting image optimization...${NC}"
    
    # Check if single file specified
    if [ -n "$SINGLE_FILE" ]; then
        if [ ! -f "$SINGLE_FILE" ]; then
            echo -e "${RED}❌ File not found: $SINGLE_FILE${NC}"
            exit 1
        fi
        
        echo -e "${BLUE}📁 Optimizing single file: $SINGLE_FILE${NC}"
        process_image "$SINGLE_FILE"
        return
    fi
    
    # Default: optimize all images in directory
    if [ ! -d "$IMAGES_DIR" ]; then
        echo -e "${RED}❌ Images directory not found: $IMAGES_DIR${NC}"
        exit 1
    fi
    
    # Find all image files
    find "$IMAGES_DIR" -type f \( -iname "*.jpg" -o -iname "*.jpeg" -o -iname "*.png" -o -iname "*.webp" \) -print0 | while IFS= read -r -d '' file; do
        process_image "$file"
    done
}

# Generate optimization report
generate_report() {
    echo ""
    echo -e "${BLUE}📊 Optimization Report${NC}"
    echo "======================"
    echo -e "Total files processed: ${YELLOW}$TOTAL_FILES${NC}"
    echo -e "Files optimized: ${GREEN}$OPTIMIZED_FILES${NC}"
    echo -e "Total space saved: ${GREEN}$(format_bytes $TOTAL_SAVINGS)${NC}"
    
    if [ $OPTIMIZED_FILES -gt 0 ]; then
        echo -e "Average savings per file: ${GREEN}$(format_bytes $((TOTAL_SAVINGS / OPTIMIZED_FILES)))${NC}"
    fi
    
    # Show database file size
    if [ -f "$OPTIMIZATION_DB" ]; then
        local db_size=$(get_file_size "$OPTIMIZATION_DB")
        local db_entries=$(jq '.optimizations | length' "$OPTIMIZATION_DB" 2>/dev/null || echo "0")
        echo -e "Optimization database: ${YELLOW}$db_entries entries, $(format_bytes $db_size)${NC}"
    fi
    
    echo ""
    echo -e "${GREEN}✅ Image optimization complete!${NC}"
    
    # Show backup location
    if [ -d "$BACKUP_DIR" ] && [ "$(ls -A $BACKUP_DIR 2>/dev/null)" ]; then
        echo -e "${YELLOW}📁 Original files backed up to: $BACKUP_DIR${NC}"
    fi
}

# Show help
show_help() {
    echo "Sawtic Image Optimization Script (Fixed Version)"
    echo ""
    echo "Usage: $0 [OPTIONS] [FILE_PATH]"
    echo ""
    echo "Options:"
    echo "  -h, --help     Show this help message"
    echo "  -q, --quality  Set JPEG quality (1-100, default: $JPEG_QUALITY)"
    echo "  -w, --width    Set maximum width (default: $MAX_WIDTH)"
    echo "  -H, --height   Set maximum height (default: $MAX_HEIGHT)"
    echo "  --webp         Generate WebP versions (default: enabled)"
    echo "  --no-webp      Skip WebP generation"
    echo "  --clean-db     Clean optimization database (forces re-optimization)"
    echo ""
    echo "Arguments:"
    echo "  FILE_PATH      Optimize only this specific file"
    echo ""
    echo "Improvements:"
    echo "  ✅ Ultra-compact database format (95% smaller)"
    echo "  ✅ Hash-based path storage (no file paths stored)"
    echo "  ✅ Fixed double optimization prevention"
    echo "  ✅ Better file change detection"
    echo "  ✅ No arbitrary size limits or cleanup"
}

# Clean optimization database manually (if really needed)
clean_db() {
    if [ -f "$OPTIMIZATION_DB" ]; then
        echo -e "${YELLOW}🧹 Cleaning optimization database...${NC}"
        echo -e "${RED}⚠️  Warning: This will force re-optimization of ALL images!${NC}"
        read -p "Are you sure? (y/N): " -n 1 -r
        echo
        if [[ $REPLY =~ ^[Yy]$ ]]; then
            echo '{"version": "2.0", "optimizations": {}}' > "$OPTIMIZATION_DB"
            echo -e "${GREEN}✅ Optimization database cleaned${NC}"
        else
            echo -e "${YELLOW}❌ Database cleaning cancelled${NC}"
        fi
    else
        echo -e "${YELLOW}⚠️  No optimization database found${NC}"
    fi
}

# Parse command line arguments
SKIP_WEBP=false
SINGLE_FILE=""
CLEAN_DB_ONLY=false

while [[ $# -gt 0 ]]; do
    case $1 in
        -h|--help)
            show_help
            exit 0
            ;;
        --clean-db)
            CLEAN_DB_ONLY=true
            shift
            ;;
        -q|--quality)
            JPEG_QUALITY="$2"
            shift 2
            ;;
        -w|--width)
            MAX_WIDTH="$2"
            shift 2
            ;;
        -H|--height)
            MAX_HEIGHT="$2"
            shift 2
            ;;
        --webp)
            SKIP_WEBP=false
            shift
            ;;
        --no-webp)
            SKIP_WEBP=true
            shift
            ;;
        *)
            # If it's not an option, treat it as a file path
            if [[ "$1" != -* ]]; then
                SINGLE_FILE="$1"
                shift
            else
                echo "Unknown option: $1"
                show_help
                exit 1
            fi
            ;;
    esac
done

# Main execution
main() {
    if [ "$CLEAN_DB_ONLY" = true ]; then
        clean_db
        exit 0
    fi
    
    check_dependencies
    create_backup_dir
    load_optimization_db
    optimize_images
    generate_report
}

# Run the script
main "$@"