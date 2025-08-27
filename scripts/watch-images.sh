#!/bin/bash

# Sawtic Image Watch Script
# Automatically optimizes new images when they are added

set -e

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

IMAGES_DIR="public/assets/images"
WATCH_FILE=".image_watch_last_run"

echo -e "${BLUE}👀 Sawtic Image Watch - Monitoring new images${NC}"
echo "=================================================="

# Check if fswatch is available
if ! command -v fswatch &> /dev/null; then
    echo -e "${YELLOW}⚠️  fswatch not found. Installing with Homebrew...${NC}"
    if command -v brew &> /dev/null; then
        brew install fswatch
    else
        echo -e "${RED}❌ Please install fswatch manually:${NC}"
        echo "   macOS: brew install fswatch"
        echo "   Linux: sudo apt-get install fswatch"
        exit 1
    fi
fi

# Check if images directory exists
if [ ! -d "$IMAGES_DIR" ]; then
    echo -e "${RED}❌ Images directory not found: $IMAGES_DIR${NC}"
    exit 1
fi

# Function to optimize new images
optimize_new_images() {
    echo -e "${YELLOW}🔍 Checking for new images...${NC}"
    
    local new_files=0
    
    # Find images newer than last run
    if [ -f "$WATCH_FILE" ]; then
        while IFS= read -r -d '' file; do
            if [ "$file" -nt "$WATCH_FILE" ]; then
                echo -e "${GREEN}🆕 New image detected: $(basename "$file")${NC}"
                ./scripts/optimize-images.sh "$file"
                new_files=$((new_files + 1))
            fi
        done < <(find "$IMAGES_DIR" -type f \( -iname "*.jpg" -o -iname "*.jpeg" -o -iname "*.png" \) -print0)
    else
        echo -e "${YELLOW}📋 First run - optimizing all images${NC}"
        ./scripts/optimize-images.sh
        new_files=-1
    fi
    
    # Update timestamp
    touch "$WATCH_FILE"
    
    if [ $new_files -eq 0 ]; then
        echo -e "${GREEN}✅ No new images to optimize${NC}"
    elif [ $new_files -gt 0 ]; then
        echo -e "${GREEN}✅ Optimized $new_files new images${NC}"
    fi
}

# Function to watch for changes
start_watching() {
    echo -e "${BLUE}🚀 Starting image monitoring...${NC}"
    echo -e "${YELLOW}💡 Add new images to: $IMAGES_DIR${NC}"
    echo -e "${YELLOW}⏹️  Press Ctrl+C to stop${NC}"
    echo ""
    
    # Run initial check
    optimize_new_images
    
    # Watch for file changes
    fswatch -o "$IMAGES_DIR" | while read num; do
        if [ $num -gt 0 ]; then
            sleep 2  # Wait for file to be fully written
            optimize_new_images
        fi
    done
}

# Show help
show_help() {
    echo "Sawtic Image Watch Script"
    echo ""
    echo "Usage: $0 [OPTIONS]"
    echo ""
    echo "Options:"
    echo "  -h, --help     Show this help message"
    echo "  --once         Check for new images once and exit"
    echo "  --watch        Start continuous monitoring (default)"
    echo ""
    echo "This script monitors the images directory for new files"
    echo "and automatically optimizes them using the main optimization script."
}

# Parse command line arguments
MODE="watch"

while [[ $# -gt 0 ]]; do
    case $1 in
        -h|--help)
            show_help
            exit 0
            ;;
        --once)
            MODE="once"
            shift
            ;;
        --watch)
            MODE="watch"
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
if [ "$MODE" = "once" ]; then
    optimize_new_images
else
    start_watching
fi