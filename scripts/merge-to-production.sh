#!/bin/bash

# Sawtic Git Workflow: Merge dev branch to production (main)
# Used to deploy shared development work to production

set -e  # Exit on any error

# Colors for output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

echo -e "${BLUE}🚀 Sawtic: Merging dev to production (main)...${NC}"

# Get current branch
CURRENT_BRANCH=$(git branch --show-current)
echo -e "${YELLOW}📍 Current branch: ${CURRENT_BRANCH}${NC}"

# The commit message will be provided as first argument
COMMIT_MESSAGE="$1"
if [ -z "$COMMIT_MESSAGE" ]; then
    echo -e "${RED}❌ Error: Commit message required for production merge${NC}"
    echo -e "${YELLOW}💡 Usage: ./scripts/merge-to-production.sh \"Production release message\"${NC}"
    exit 1
fi

# Switch to dev first to ensure it's up to date
echo -e "${BLUE}🔄 Switching to dev branch...${NC}"
git checkout dev

echo -e "${BLUE}⬇️ Pulling latest dev...${NC}"
git pull origin dev

echo -e "${BLUE}🔄 Switching to main branch...${NC}"
git checkout main

echo -e "${BLUE}⬇️ Pulling latest main...${NC}"
git pull origin main

echo -e "${BLUE}🔀 Merging dev to main...${NC}"
if git merge dev --no-ff -m "Production Release: $COMMIT_MESSAGE"; then
    echo -e "${GREEN}✅ Merge to main successful${NC}"
else
    echo -e "${RED}❌ Merge conflicts detected in main. Please resolve manually.${NC}"
    exit 1
fi

echo -e "${BLUE}📤 Pushing main to origin...${NC}"
git push origin main

# Switch back to dev and update it with any main changes
echo -e "${BLUE}🔄 Switching back to dev...${NC}"
git checkout dev

echo -e "${BLUE}🔀 Merging main changes back to dev...${NC}"
git merge main

echo -e "${BLUE}📤 Pushing updated dev...${NC}"
git push origin dev

# Return to original branch if it wasn't main or dev
if [[ "$CURRENT_BRANCH" != "main" && "$CURRENT_BRANCH" != "dev" ]]; then
    echo -e "${BLUE}🔄 Switching back to ${CURRENT_BRANCH}...${NC}"
    git checkout "$CURRENT_BRANCH"
    
    echo -e "${BLUE}🔀 Merging main changes to ${CURRENT_BRANCH}...${NC}"
    git merge main
    
    echo -e "${BLUE}📤 Pushing updated ${CURRENT_BRANCH}...${NC}"
    git push origin "$CURRENT_BRANCH"
fi

echo -e "${GREEN}✅ Production merge completed successfully!${NC}"
echo -e "${GREEN}📍 You are back on branch: $(git branch --show-current)${NC}"
echo -e "${BLUE}💡 Next step: Deploy to server using ./scripts/deploy-production.sh${NC}"