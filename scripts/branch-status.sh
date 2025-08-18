#!/bin/bash

# Sawtic Git Workflow: Branch status checker
# Shows current status of all branches and provides workflow guidance

set -e  # Exit on any error

# Colors for output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
CYAN='\033[0;36m'
PURPLE='\033[0;35m'
NC='\033[0m' # No Color

echo -e "${CYAN}📊 Sawtic Git Workflow Status${NC}"
echo -e "${CYAN}==============================${NC}"

# Current branch info
CURRENT_BRANCH=$(git branch --show-current)
echo -e "${YELLOW}📍 Current branch: ${CURRENT_BRANCH}${NC}"

# Fetch latest info from remote
echo -e "${BLUE}🔄 Fetching latest from origin...${NC}"
git fetch origin --quiet

# Check status of each branch
echo -e "\n${CYAN}📋 Branch Status:${NC}"

# Function to get branch status
get_branch_status() {
    local branch=$1
    local current_marker=""
    
    if [ "$branch" = "$CURRENT_BRANCH" ]; then
        current_marker=" ${GREEN}← YOU ARE HERE${NC}"
    fi
    
    if git show-ref --verify --quiet refs/remotes/origin/$branch; then
        local ahead=$(git rev-list --count origin/$branch..origin/main 2>/dev/null || echo "0")
        local behind=$(git rev-list --count origin/main..origin/$branch 2>/dev/null || echo "0")
        local last_commit=$(git log -1 --format="%h %s" origin/$branch 2>/dev/null || echo "No commits")
        local last_date=$(git log -1 --format="%ar" origin/$branch 2>/dev/null || echo "Unknown")
        
        echo -e "${PURPLE}🌿 $branch${NC}$current_marker"
        echo -e "   📈 $ahead commits ahead of main, $behind commits behind"
        echo -e "   💾 Last: $last_commit"
        echo -e "   📅 $last_date"
    else
        echo -e "${RED}🌿 $branch${NC}$current_marker"
        echo -e "   ❌ Branch does not exist on remote"
    fi
    echo ""
}

# Check all branches
get_branch_status "main"
get_branch_status "dev" 
get_branch_status "hamed"
get_branch_status "ashkan"

# Check for uncommitted changes
echo -e "${CYAN}🔍 Working Directory Status:${NC}"
if git diff-index --quiet HEAD --; then
    echo -e "${GREEN}✅ Working directory clean${NC}"
else
    echo -e "${YELLOW}⚠️ Uncommitted changes detected:${NC}"
    git status --short
fi

# Check for stashes
STASH_COUNT=$(git stash list | wc -l)
if [ "$STASH_COUNT" -gt 0 ]; then
    echo -e "${YELLOW}📦 $STASH_COUNT stashed changes${NC}"
fi

echo ""

# Workflow guidance based on current branch
echo -e "${CYAN}💡 Available Actions for '$CURRENT_BRANCH':${NC}"

case $CURRENT_BRANCH in
    "main")
        echo -e "${RED}⚠️ You are on PRODUCTION branch!${NC}"
        echo -e "   • Switch to hamed/ashkan for development"
        echo -e "   • Use ./scripts/hotfix-to-main.sh only for emergencies"
        echo -e "   • Deploy: ./scripts/deploy-production.sh"
        ;;
    "dev")
        echo -e "${BLUE}🔄 You are on SHARED DEVELOPMENT branch${NC}"
        echo -e "   • Switch to hamed/ashkan for feature work"
        echo -e "   • Deploy to production: ./scripts/merge-to-production.sh"
        ;;
    "hamed"|"ashkan")
        echo -e "${GREEN}✅ You are on DEVELOPMENT branch${NC}"
        echo -e "   • Share work: ./scripts/sync-to-dev.sh \"message\""
        echo -e "   • Get updates: ./scripts/pull-from-dev.sh"
        echo -e "   • Get production updates: ./scripts/git-pull.sh"
        ;;
    *)
        echo -e "${YELLOW}❓ Unknown branch workflow${NC}"
        echo -e "   • Standard branches: main, dev, hamed, ashkan"
        echo -e "   • Switch to appropriate branch first"
        ;;
esac

echo -e "\n${CYAN}🔧 Branch Management:${NC}"
echo -e "   • git checkout hamed/ashkan/dev/main"
echo -e "   • ./scripts/branch-status.sh (this command)"

echo -e "\n${CYAN}📚 Workflow Summary:${NC}"
echo -e "${GREEN}   hamed/ashkan${NC} → ${BLUE}dev${NC} → ${PURPLE}main${NC} → ${YELLOW}production${NC}"
echo ""