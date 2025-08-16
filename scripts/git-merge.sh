#!/bin/bash

# VoIP AI Git Merge Script
# Merges current branch changes to main and syncs everything back

set -e  # Exit on any error

# Colors for output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

echo -e "${BLUE}🔄 Starting Git merge workflow...${NC}"

# Get current branch
ORIGINAL_BRANCH=$(git branch --show-current)
echo -e "${YELLOW}📍 Current branch: ${ORIGINAL_BRANCH}${NC}"

# Check if there are changes to commit
if git diff-index --quiet HEAD --; then
    echo -e "${RED}❌ No changes to merge. Working tree is clean.${NC}"
    exit 0
fi

# The commit message will be provided as first argument
COMMIT_MESSAGE="$1"
if [ -z "$COMMIT_MESSAGE" ]; then
    echo -e "${RED}❌ Error: Commit message required as first argument${NC}"
    exit 1
fi

echo -e "${BLUE}💾 Committing changes...${NC}"
git add .
git commit -m "$COMMIT_MESSAGE"

echo -e "${BLUE}📤 Pushing ${ORIGINAL_BRANCH} to origin...${NC}"
git push origin "$ORIGINAL_BRANCH"

echo -e "${BLUE}🔄 Switching to main branch...${NC}"
git checkout main

echo -e "${BLUE}⬇️ Pulling latest main...${NC}"
git pull origin main

echo -e "${BLUE}🔀 Merging ${ORIGINAL_BRANCH} to main...${NC}"
git merge "$ORIGINAL_BRANCH"

echo -e "${BLUE}📤 Pushing main to origin...${NC}"
git push origin main

echo -e "${BLUE}🔄 Switching back to ${ORIGINAL_BRANCH}...${NC}"
git checkout "$ORIGINAL_BRANCH"

echo -e "${BLUE}🔀 Merging main changes back to ${ORIGINAL_BRANCH}...${NC}"
git merge main

echo -e "${BLUE}📤 Pushing updated ${ORIGINAL_BRANCH}...${NC}"
git push origin "$ORIGINAL_BRANCH"

echo -e "${GREEN}✅ Merge workflow completed successfully!${NC}"
echo -e "${GREEN}📍 You are back on branch: ${ORIGINAL_BRANCH}${NC}"