#!/bin/bash

# Sawtic Image Restoration Script
# Restores images from hierarchical backup structure

set -e

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

IMAGES_DIR="public/assets/images"
BACKUPS_BASE="storage/image-backups"

echo -e "${BLUE}🔄 Sawtic Image Restoration Script${NC}"
echo "=========================================="

# List available backups
list_backups() {
    echo -e "${YELLOW}📁 Available backup dates:${NC}"
    if [ -d "$BACKUPS_BASE" ]; then
        ls -1 "$BACKUPS_BASE" | sort -r | nl -w2 -s'. '
    else
        echo -e "${RED}❌ No backups found in $BACKUPS_BASE${NC}"
        exit 1
    fi
}

# Restore from specific backup
restore_backup() {
    local backup_date="$1"
    local backup_path="$BACKUPS_BASE/$backup_date"
    
    if [ ! -d "$backup_path" ]; then
        echo -e "${RED}❌ Backup not found: $backup_date${NC}"
        exit 1
    fi
    
    echo -e "${YELLOW}🔄 Restoring from backup: $backup_date${NC}"
    
    local restored_files=0
    
    # Find all files in backup and restore them
    while IFS= read -r -d '' backup_file; do
        local relative_path="${backup_file#$backup_path/}"
        local target_file="$IMAGES_DIR/$relative_path"
        local target_dir=$(dirname "$target_file")
        
        # Create target directory if it doesn't exist
        mkdir -p "$target_dir"
        
        # Restore file
        cp "$backup_file" "$target_file"
        echo -e "${GREEN}  ✅ Restored: $relative_path${NC}"
        
        restored_files=$((restored_files + 1))
    done < <(find "$backup_path" -type f -print0)
    
    # Clear optimization log since files have been restored
    local optimization_log="storage/app/images-optimization-history.json"
    if [ -f "$optimization_log" ]; then
        echo '{\"version\": \"1.0\", \"optimizations\": {}}' > "$optimization_log"
        echo -e "${YELLOW}🗑️  Cleared optimization log (files restored to originals)${NC}"
    fi
    
    echo ""
    echo -e "${GREEN}✅ Restoration complete!${NC}"
    echo -e "   Files restored: ${GREEN}$restored_files${NC}"
    echo -e "   From backup: ${YELLOW}$backup_date${NC}"
    echo -e "${BLUE}💡 Optimization log cleared - files ready for fresh optimization${NC}"
}

# Compare backup with current files
compare_backup() {
    local backup_date="$1"
    local backup_path="$BACKUPS_BASE/$backup_date"
    
    if [ ! -d "$backup_path" ]; then
        echo -e "${RED}❌ Backup not found: $backup_date${NC}"
        exit 1
    fi
    
    echo -e "${YELLOW}🔍 Comparing current files with backup: $backup_date${NC}"
    echo ""
    
    local different_files=0
    local missing_files=0
    local identical_files=0
    
    while IFS= read -r -d '' backup_file; do
        local relative_path="${backup_file#$backup_path/}"
        local current_file="$IMAGES_DIR/$relative_path"
        
        if [ ! -f "$current_file" ]; then
            echo -e "${RED}  ❌ MISSING: $relative_path${NC}"
            missing_files=$((missing_files + 1))
        elif ! cmp -s "$backup_file" "$current_file"; then
            local backup_size=$(get_file_size "$backup_file")
            local current_size=$(get_file_size "$current_file")
            echo -e "${YELLOW}  📝 MODIFIED: $relative_path${NC}"
            echo -e "       Backup: $(format_bytes $backup_size), Current: $(format_bytes $current_size)"
            different_files=$((different_files + 1))
        else
            echo -e "${GREEN}  ✅ IDENTICAL: $relative_path${NC}"
            identical_files=$((identical_files + 1))
        fi
    done < <(find "$backup_path" -type f -print0)
    
    echo ""
    echo -e "${BLUE}📊 Comparison Summary:${NC}"
    echo -e "   Identical files: ${GREEN}$identical_files${NC}"
    echo -e "   Modified files: ${YELLOW}$different_files${NC}"
    echo -e "   Missing files: ${RED}$missing_files${NC}"
}

# Get file size
get_file_size() {
    if [[ "$OSTYPE" == "darwin"* ]]; then
        stat -f%z "$1"
    else
        stat -c%s "$1"
    fi
}

# Format bytes
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

# Interactive restoration
interactive_restore() {
    list_backups
    echo ""
    echo -e "${YELLOW}📝 Enter backup number to restore (or 'q' to quit):${NC}"
    read -r selection
    
    if [ "$selection" = "q" ] || [ "$selection" = "Q" ]; then
        echo -e "${BLUE}👋 Restoration cancelled${NC}"
        exit 0
    fi
    
    # Get backup date by line number
    local backup_date=$(ls -1 "$BACKUPS_BASE" | sort -r | sed -n "${selection}p")
    
    if [ -z "$backup_date" ]; then
        echo -e "${RED}❌ Invalid selection${NC}"
        exit 1
    fi
    
    echo ""
    echo -e "${YELLOW}⚠️  This will overwrite current images with backup from: $backup_date${NC}"
    echo -e "${YELLOW}📋 Do you want to continue? (y/N):${NC}"
    read -r confirm
    
    if [ "$confirm" = "y" ] || [ "$confirm" = "Y" ]; then
        restore_backup "$backup_date"
    else
        echo -e "${BLUE}👋 Restoration cancelled${NC}"
    fi
}

# Show help
show_help() {
    echo "Sawtic Image Restoration Script"
    echo ""
    echo "Usage: $0 [OPTIONS] [BACKUP_DATE]"
    echo ""
    echo "Options:"
    echo "  -h, --help       Show this help message"
    echo "  -l, --list       List available backups"
    echo "  -i, --interactive Interactive restoration"
    echo "  -c, --compare    Compare current files with backup"
    echo ""
    echo "Examples:"
    echo "  $0 -l                              # List backups"
    echo "  $0 -i                              # Interactive restore"
    echo "  $0 2024-01-15_14-30-25             # Restore specific backup"
    echo "  $0 -c 2024-01-15_14-30-25          # Compare with backup"
}

# Simple restore function (just provide backup folder name)
simple_restore() {
    local backup_date="$1"
    
    if [ -z "$backup_date" ]; then
        echo -e "${RED}❌ Please provide backup folder name${NC}"
        echo -e "${YELLOW}💡 Usage: $0 BACKUP_FOLDER_NAME${NC}"
        echo -e "${YELLOW}📁 Example: $0 2024-01-15_14-30-25${NC}"
        echo ""
        list_backups
        exit 1
    fi
    
    restore_backup "$backup_date"
}

# Parse command line arguments
if [ $# -eq 0 ]; then
    interactive_restore
    exit 0
fi

# Check if first argument is not an option (simple restore)
if [[ ! "$1" =~ ^- ]]; then
    simple_restore "$1"
    exit 0
fi

while [[ $# -gt 0 ]]; do
    case $1 in
        -h|--help)
            show_help
            exit 0
            ;;
        -l|--list)
            list_backups
            exit 0
            ;;
        -i|--interactive)
            interactive_restore
            exit 0
            ;;
        -c|--compare)
            if [ -n "$2" ] && [[ ! "$2" =~ ^- ]]; then
                compare_backup "$2"
                shift 2
            else
                echo -e "${RED}❌ Backup date required for compare option${NC}"
                exit 1
            fi
            ;;
        -*)
            echo "Unknown option: $1"
            show_help
            exit 1
            ;;
        *)
            simple_restore "$1"
            exit 0
            ;;
    esac
done