#!/bin/bash

# VoIP AI Git Pull Script
# Safely pulls latest main changes and merges to current branch

set -e  # Exit on any error

# Colors for output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

echo -e "${BLUE}⬇️ Starting Git pull workflow...${NC}"

# Get current branch
CURRENT_BRANCH=$(git branch --show-current)
echo -e "${YELLOW}📍 Current branch: ${CURRENT_BRANCH}${NC}"

# Check if we're on main branch
if [ "$CURRENT_BRANCH" = "main" ]; then
    echo -e "${RED}❌ Cannot run pull workflow on main branch. Switch to feature branch first.${NC}"
    exit 1
fi

# Check for uncommitted changes and stash if needed
STASH_CREATED=false
if ! git diff-index --quiet HEAD --; then
    echo -e "${YELLOW}💾 Stashing uncommitted changes...${NC}"
    git stash push -m "Auto-stash before pull workflow $(date)"
    STASH_CREATED=true
fi

echo -e "${BLUE}🔄 Switching to main branch...${NC}"
git checkout main

echo -e "${BLUE}⬇️ Pulling latest main from origin...${NC}"
git pull origin main

echo -e "${BLUE}🔄 Switching back to ${CURRENT_BRANCH}...${NC}"
git checkout "$CURRENT_BRANCH"

echo -e "${BLUE}🔀 Merging main changes to ${CURRENT_BRANCH}...${NC}"
if git merge main; then
    echo -e "${GREEN}✅ Merge successful${NC}"
else
    echo -e "${RED}❌ Merge conflicts detected. Please resolve conflicts manually.${NC}"
    exit 1
fi

echo -e "${BLUE}📤 Pushing updated ${CURRENT_BRANCH} to origin...${NC}"
git push origin "$CURRENT_BRANCH"

# Restore stashed changes if any
if [ "$STASH_CREATED" = true ]; then
    echo -e "${BLUE}🔄 Restoring stashed changes...${NC}"
    if git stash pop; then
        echo -e "${GREEN}✅ Stashed changes restored${NC}"
    else
        echo -e "${YELLOW}⚠️ Stash conflicts detected. Check 'git stash list' and resolve manually.${NC}"
    fi
fi

echo -e "${GREEN}✅ Pull workflow completed successfully!${NC}"
echo -e "${GREEN}📍 You are on branch: ${CURRENT_BRANCH} with latest main changes${NC}"