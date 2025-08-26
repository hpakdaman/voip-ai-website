#!/bin/bash

# View Optimization Log Script
# Shows optimization history and statistics

set -e

# Colors
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

OPTIMIZATION_LOG="storage/app/images-optimization-history.json"

echo -e "${BLUE}📊 Sawtic Optimization Log Viewer${NC}"
echo "===================================="

if [ ! -f "$OPTIMIZATION_LOG" ]; then
    echo -e "${RED}❌ No optimization log found${NC}"
    echo "Run ./scripts/optimize-images.sh first to create the log"
    exit 1
fi

# Show log statistics
show_stats() {
    local total_files=$(jq '.optimizations | length' "$OPTIMIZATION_LOG")
    local total_original_size=$(jq '.optimizations | to_entries | map(.value.original_size // 0) | add // 0' "$OPTIMIZATION_LOG")
    local total_new_size=$(jq '.optimizations | to_entries | map(.value.new_size // 0) | add // 0' "$OPTIMIZATION_LOG")
    local total_savings=$((total_original_size - total_new_size))
    
    echo -e "${YELLOW}📈 Optimization Statistics:${NC}"
    echo "  Files optimized: $total_files"
    echo "  Original size: $(format_bytes $total_original_size)"
    echo "  Current size: $(format_bytes $total_new_size)"
    echo "  Total savings: $(format_bytes $total_savings)"
    
    if [ $total_original_size -gt 0 ]; then
        local percentage=$((total_savings * 100 / total_original_size))
        echo "  Savings percentage: ${percentage}%"
    fi
    
    echo ""
}

# Show recent optimizations
show_recent() {
    local limit=${1:-10}
    
    echo -e "${YELLOW}🕒 Recent Optimizations (last $limit):${NC}"
    
    jq -r --argjson limit "$limit" '
        .optimizations 
        | to_entries 
        | sort_by(.value.timestamp) 
        | reverse 
        | limit($limit; .[]) 
        | "\(.key): \(.value.timestamp) - Saved \(.value.savings // 0) bytes"
    ' "$OPTIMIZATION_LOG" | while read -r line; do
        local file=$(echo "$line" | cut -d: -f1)
        local timestamp=$(echo "$line" | cut -d: -f2 | cut -d' ' -f2)
        local savings=$(echo "$line" | grep -o '[0-9]* bytes' | cut -d' ' -f1)
        
        echo -e "  ${GREEN}$(basename "$file")${NC}"
        echo -e "    Time: $timestamp"
        echo -e "    Saved: $(format_bytes $savings)"
        echo ""
    done
}

# Show files by savings
show_top_savings() {
    local limit=${1:-5}
    
    echo -e "${YELLOW}🏆 Top $limit Files by Savings:${NC}"
    
    jq -r --argjson limit "$limit" '
        .optimizations 
        | to_entries 
        | sort_by(.value.savings // 0) 
        | reverse 
        | limit($limit; .[]) 
        | "\(.key)|\(.value.original_size // 0)|\(.value.new_size // 0)|\(.value.savings // 0)"
    ' "$OPTIMIZATION_LOG" | while IFS='|' read -r file original new savings; do
        local percentage=0
        if [ "$original" -gt 0 ]; then
            percentage=$((savings * 100 / original))
        fi
        
        echo -e "  ${GREEN}$(basename "$file")${NC}"
        echo -e "    Original: $(format_bytes $original) → New: $(format_bytes $new)"
        echo -e "    Saved: $(format_bytes $savings) (${percentage}%)"
        echo ""
    done
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

# Show help
show_help() {
    echo "View Optimization Log Script"
    echo ""
    echo "Usage: $0 [OPTIONS]"
    echo ""
    echo "Options:"
    echo "  -h, --help        Show this help"
    echo "  -s, --stats       Show statistics only"
    echo "  -r, --recent N    Show N recent optimizations (default: 10)"
    echo "  -t, --top N       Show top N files by savings (default: 5)"
    echo "  --raw             Show raw JSON log"
    echo ""
}

# Parse arguments
case "${1:-}" in
    -h|--help)
        show_help
        exit 0
        ;;
    -s|--stats)
        show_stats
        exit 0
        ;;
    -r|--recent)
        show_stats
        show_recent "${2:-10}"
        exit 0
        ;;
    -t|--top)
        show_stats
        show_top_savings "${2:-5}"
        exit 0
        ;;
    --raw)
        jq '.' "$OPTIMIZATION_LOG"
        exit 0
        ;;
    "")
        # Default: show everything
        show_stats
        show_recent 5
        show_top_savings 5
        exit 0
        ;;
    *)
        echo "Unknown option: $1"
        show_help
        exit 1
        ;;
esac