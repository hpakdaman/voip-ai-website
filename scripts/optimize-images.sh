#!/bin/bash

# Sawtic Image Optimization Script
# Automatically optimizes images for web performance

set -e  # Exit on any error

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Configuration
IMAGES_DIR="public/assets/images"
BACKUP_DIR="storage/image-backups/$(date +%Y-%m-%d_%H-%M-%S)"
OPTIMIZATION_LOG="storage/app/images-optimization-history.json"
MAX_WIDTH=1920
MAX_HEIGHT=1080
JPEG_QUALITY=85
PNG_QUALITY=90
WEBP_QUALITY=80

# Statistics
TOTAL_FILES=0
OPTIMIZED_FILES=0
TOTAL_SAVINGS=0

echo -e "${BLUE}🖼️  Sawtic Image Optimization Script${NC}"
echo "=========================================="

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

# Initialize or load optimization log
load_optimization_log() {
    local log_dir=$(dirname "$OPTIMIZATION_LOG")
    if [ ! -d "$log_dir" ]; then
        mkdir -p "$log_dir"
    fi
    
    if [ ! -f "$OPTIMIZATION_LOG" ]; then
        echo '{"version": "1.0", "optimizations": {}}' > "$OPTIMIZATION_LOG"
        echo -e "${GREEN}📋 Created optimization log: $OPTIMIZATION_LOG${NC}"
    fi
}

# Check if file needs optimization
needs_optimization() {
    local file="$1"
    local relative_path="${file#$IMAGES_DIR/}"
    local file_hash=$(get_file_hash "$file")
    local file_size=$(get_file_size "$file")
    local current_settings="q${JPEG_QUALITY}_w${MAX_WIDTH}_h${MAX_HEIGHT}"
    
    # Check if file exists in log with same hash and settings
    local log_entry=$(jq -r ".optimizations[\"$relative_path\"]" "$OPTIMIZATION_LOG" 2>/dev/null)
    
    if [ "$log_entry" != "null" ] && [ "$log_entry" != "" ]; then
        local logged_hash=$(echo "$log_entry" | jq -r '.hash // empty' 2>/dev/null)
        local logged_settings=$(echo "$log_entry" | jq -r '.settings // empty' 2>/dev/null)
        
        if [ "$logged_hash" = "$file_hash" ] && [ "$logged_settings" = "$current_settings" ]; then
            return 1  # File doesn't need optimization
        fi
    fi
    
    return 0  # File needs optimization
}

# Get file hash (for change detection)
get_file_hash() {
    if command -v shasum >/dev/null 2>&1; then
        shasum -a 256 "$1" | cut -d' ' -f1
    elif command -v sha256sum >/dev/null 2>&1; then
        sha256sum "$1" | cut -d' ' -f1
    else
        # Fallback to file size + modification time
        echo "$(get_file_size "$1")_$(stat -c %Y "$1" 2>/dev/null || stat -f %m "$1")"
    fi
}

# Record optimization in log
record_optimization() {
    local file="$1"
    local original_size="$2"
    local new_size="$3"
    local relative_path="${file#$IMAGES_DIR/}"
    local file_hash=$(get_file_hash "$file")
    local current_settings="q${JPEG_QUALITY}_w${MAX_WIDTH}_h${MAX_HEIGHT}"
    local timestamp=$(date -u +"%Y-%m-%dT%H:%M:%SZ")
    
    # Create optimization record
    local record=$(jq -n \
        --arg hash "$file_hash" \
        --arg settings "$current_settings" \
        --arg timestamp "$timestamp" \
        --argjson original_size "$original_size" \
        --argjson new_size "$new_size" \
        --argjson savings "$((original_size - new_size))" \
        '{
            hash: $hash,
            settings: $settings,
            timestamp: $timestamp,
            original_size: $original_size,
            new_size: $new_size,
            savings: $savings
        }')
    
    # Update log file
    jq --arg path "$relative_path" --argjson record "$record" \
        '.optimizations[$path] = $record' \
        "$OPTIMIZATION_LOG" > "${OPTIMIZATION_LOG}.tmp" && \
    mv "${OPTIMIZATION_LOG}.tmp" "$OPTIMIZATION_LOG"
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
        
        # Record optimization in log
        record_optimization "$file" "$original_size" "$new_size"
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
        
        # Record optimization in log
        record_optimization "$file" "$original_size" "$new_size"
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
    
    if [ ! -d "$IMAGES_DIR" ]; then
        echo -e "${RED}❌ Images directory not found: $IMAGES_DIR${NC}"
        exit 1
    fi
    
    # Find all image files
    while IFS= read -r -d '' file; do
        process_image "$file"
    done < <(find "$IMAGES_DIR" -type f \( -iname "*.jpg" -o -iname "*.jpeg" -o -iname "*.png" -o -iname "*.webp" \) -print0)
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
    
    echo ""
    echo -e "${GREEN}✅ Image optimization complete!${NC}"
    
    # Show backup location
    if [ -d "$BACKUP_DIR" ] && [ "$(ls -A $BACKUP_DIR 2>/dev/null)" ]; then
        echo -e "${YELLOW}📁 Original files backed up to: $BACKUP_DIR${NC}"
    fi
}

# Show help
show_help() {
    echo "Sawtic Image Optimization Script"
    echo ""
    echo "Usage: $0 [OPTIONS]"
    echo ""
    echo "Options:"
    echo "  -h, --help     Show this help message"
    echo "  -q, --quality  Set JPEG quality (1-100, default: $JPEG_QUALITY)"
    echo "  -w, --width    Set maximum width (default: $MAX_WIDTH)"
    echo "  -H, --height   Set maximum height (default: $MAX_HEIGHT)"
    echo "  --webp         Generate WebP versions (default: enabled)"
    echo "  --no-webp      Skip WebP generation"
    echo ""
    echo "Examples:"
    echo "  $0                    # Optimize with default settings"
    echo "  $0 -q 90             # Use 90% JPEG quality"
    echo "  $0 -w 1280 -H 720    # Resize to max 1280x720"
}

# Parse command line arguments
SKIP_WEBP=false

while [[ $# -gt 0 ]]; do
    case $1 in
        -h|--help)
            show_help
            exit 0
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
            echo "Unknown option: $1"
            show_help
            exit 1
            ;;
    esac
done

# Main execution
main() {
    check_dependencies
    create_backup_dir
    load_optimization_log
    optimize_images
    generate_report
}

# Run the script
main "$@"