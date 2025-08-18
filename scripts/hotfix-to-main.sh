#!/bin/bash

# Sawtic Git Workflow: Emergency hotfix directly to main
# ONLY for critical production fixes that can't wait for dev cycle

set -e  # Exit on any error

# Colors for output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

echo -e "${RED}🚨 Sawtic: EMERGENCY HOTFIX to production (main)...${NC}"

# Get current branch
CURRENT_BRANCH=$(git branch --show-current)
echo -e "${YELLOW}📍 Current branch: ${CURRENT_BRANCH}${NC}"

# Confirm this is really a hotfix
echo -e "${YELLOW}⚠️ WARNING: This bypasses the dev branch workflow!${NC}"
echo -e "${YELLOW}📝 This should ONLY be used for critical production fixes.${NC}"
echo -e "${YELLOW}🤔 Are you sure this is an emergency hotfix? (y/N)${NC}"
read -r confirmation

if [[ "$confirmation" != "y" && "$confirmation" != "Y" ]]; then
    echo -e "${BLUE}❌ Hotfix cancelled. Use normal workflow instead:${NC}"
    echo -e "   • ./scripts/sync-to-dev.sh for regular development"
    echo -e "   • ./scripts/merge-to-production.sh for planned releases"
    exit 0
fi

# The commit message will be provided as first argument
COMMIT_MESSAGE="$1"
if [ -z "$COMMIT_MESSAGE" ]; then
    echo -e "${RED}❌ Error: Hotfix description required${NC}"
    echo -e "${YELLOW}💡 Usage: ./scripts/hotfix-to-main.sh \"HOTFIX: Description of critical fix\"${NC}"
    exit 1
fi

# Add HOTFIX prefix if not present
if [[ "$COMMIT_MESSAGE" != HOTFIX:* ]]; then
    COMMIT_MESSAGE="HOTFIX: $COMMIT_MESSAGE"
fi

# Commit current changes if any
if ! git diff-index --quiet HEAD --; then
    echo -e "${BLUE}💾 Committing hotfix changes...${NC}"
    git add .
    git commit -m "$COMMIT_MESSAGE"
fi

echo -e "${BLUE}📤 Pushing ${CURRENT_BRANCH} to origin...${NC}"
git push origin "$CURRENT_BRANCH"

echo -e "${BLUE}🔄 Switching to main branch...${NC}"
git checkout main

echo -e "${BLUE}⬇️ Pulling latest main...${NC}"
git pull origin main

echo -e "${BLUE}🔀 Merging ${CURRENT_BRANCH} hotfix to main...${NC}"
if git merge "$CURRENT_BRANCH" --no-ff -m "$COMMIT_MESSAGE"; then
    echo -e "${GREEN}✅ Hotfix merge to main successful${NC}"
else
    echo -e "${RED}❌ Merge conflicts detected. Please resolve manually.${NC}"
    exit 1
fi

echo -e "${BLUE}📤 Pushing main to origin...${NC}"
git push origin main

# Now sync the hotfix back to dev and feature branches
echo -e "${BLUE}🔄 Syncing hotfix to dev branch...${NC}"
git checkout dev
git pull origin dev
git merge main
git push origin dev

# Sync to hamed and ashkan branches
for branch in hamed ashkan; do
    if git show-ref --verify --quiet refs/remotes/origin/$branch; then
        echo -e "${BLUE}🔄 Syncing hotfix to $branch branch...${NC}"
        git checkout $branch
        git pull origin $branch
        git merge main
        git push origin $branch
    fi
done

# Return to original branch
echo -e "${BLUE}🔄 Switching back to ${CURRENT_BRANCH}...${NC}"
git checkout "$CURRENT_BRANCH"

if [ "$CURRENT_BRANCH" != "main" ]; then
    echo -e "${BLUE}🔀 Merging main changes to ${CURRENT_BRANCH}...${NC}"
    git merge main
    echo -e "${BLUE}📤 Pushing updated ${CURRENT_BRANCH}...${NC}"
    git push origin "$CURRENT_BRANCH"
fi

echo -e "${GREEN}✅ Emergency hotfix completed successfully!${NC}"
echo -e "${GREEN}🚨 Hotfix has been applied to all branches${NC}"
echo -e "${GREEN}📍 You are back on branch: ${CURRENT_BRANCH}${NC}"
echo -e "${BLUE}💡 Deploy immediately: ./scripts/deploy-production.sh${NC}"