#!/bin/bash

# Sawtic Git Workflow: Pull latest changes from dev branch
# Used by hamed and ashkan to get each other's work via dev branch

set -e  # Exit on any error

# Colors for output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

echo -e "${BLUE}⬇️ Sawtic: Pulling from dev branch...${NC}"

# Get current branch
CURRENT_BRANCH=$(git branch --show-current)
echo -e "${YELLOW}📍 Current branch: ${CURRENT_BRANCH}${NC}"

# Validate branch - only hamed and ashkan can pull from dev
if [[ "$CURRENT_BRANCH" != "hamed" && "$CURRENT_BRANCH" != "ashkan" ]]; then
    echo -e "${RED}❌ Error: Only 'hamed' and 'ashkan' branches can pull from dev${NC}"
    echo -e "${YELLOW}💡 Current workflow:${NC}"
    echo -e "   • hamed/ashkan ↔ dev (shared development)"
    echo -e "   • main ← dev (production updates)"
    exit 1
fi

# Check for uncommitted changes and stash if needed
STASH_CREATED=false
if ! git diff-index --quiet HEAD --; then
    echo -e "${YELLOW}💾 Stashing uncommitted changes...${NC}"
    git stash push -m "Auto-stash before dev pull $(date)"
    STASH_CREATED=true
fi

echo -e "${BLUE}🔄 Switching to dev branch...${NC}"
git checkout dev

echo -e "${BLUE}⬇️ Pulling latest dev from origin...${NC}"
git pull origin dev

echo -e "${BLUE}🔄 Switching back to ${CURRENT_BRANCH}...${NC}"
git checkout "$CURRENT_BRANCH"

echo -e "${BLUE}🔀 Merging dev changes to ${CURRENT_BRANCH}...${NC}"
if git merge dev; then
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

echo -e "${GREEN}✅ Pull from dev completed successfully!${NC}"
echo -e "${GREEN}📍 You are on branch: ${CURRENT_BRANCH} with latest dev changes${NC}"