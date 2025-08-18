#!/bin/bash

# Sawtic Git Workflow: Sync changes to dev branch
# Used by hamed and ashkan branches to share work via dev branch

set -e  # Exit on any error

# Colors for output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

echo -e "${BLUE}🔄 Sawtic: Syncing to dev branch...${NC}"

# Get current branch
CURRENT_BRANCH=$(git branch --show-current)
echo -e "${YELLOW}📍 Current branch: ${CURRENT_BRANCH}${NC}"

# Validate branch - only hamed and ashkan can sync to dev
if [[ "$CURRENT_BRANCH" != "hamed" && "$CURRENT_BRANCH" != "ashkan" ]]; then
    echo -e "${RED}❌ Error: Only 'hamed' and 'ashkan' branches can sync to dev${NC}"
    echo -e "${YELLOW}💡 Current workflow:${NC}"
    echo -e "   • hamed/ashkan → dev (shared development)"
    echo -e "   • dev → main (production deployment)"
    exit 1
fi

# The commit message will be provided as first argument
COMMIT_MESSAGE="$1"
if [ -z "$COMMIT_MESSAGE" ]; then
    echo -e "${RED}❌ Error: Commit message required${NC}"
    echo -e "${YELLOW}💡 Usage: ./scripts/sync-to-dev.sh \"Your commit message\"${NC}"
    exit 1
fi

# Check if there are changes to commit
if git diff-index --quiet HEAD --; then
    echo -e "${YELLOW}⚠️ No local changes to commit. Syncing with dev anyway...${NC}"
else
    echo -e "${BLUE}💾 Committing changes...${NC}"
    git add .
    git commit -m "$COMMIT_MESSAGE"
fi

echo -e "${BLUE}📤 Pushing ${CURRENT_BRANCH} to origin...${NC}"
git push origin "$CURRENT_BRANCH"

echo -e "${BLUE}🔄 Switching to dev branch...${NC}"
git checkout dev

echo -e "${BLUE}⬇️ Pulling latest dev...${NC}"
git pull origin dev

echo -e "${BLUE}🔀 Merging ${CURRENT_BRANCH} to dev...${NC}"
if git merge "$CURRENT_BRANCH" --no-ff -m "Merge $CURRENT_BRANCH: $COMMIT_MESSAGE"; then
    echo -e "${GREEN}✅ Merge to dev successful${NC}"
else
    echo -e "${RED}❌ Merge conflicts detected in dev. Please resolve manually.${NC}"
    exit 1
fi

echo -e "${BLUE}📤 Pushing dev to origin...${NC}"
git push origin dev

echo -e "${BLUE}🔄 Switching back to ${CURRENT_BRANCH}...${NC}"
git checkout "$CURRENT_BRANCH"

echo -e "${BLUE}🔀 Merging dev changes back to ${CURRENT_BRANCH}...${NC}"
git merge dev

echo -e "${BLUE}📤 Pushing updated ${CURRENT_BRANCH}...${NC}"
git push origin "$CURRENT_BRANCH"

echo -e "${GREEN}✅ Sync to dev completed successfully!${NC}"
echo -e "${GREEN}📍 You are back on branch: ${CURRENT_BRANCH}${NC}"
echo -e "${BLUE}💡 Next steps:${NC}"
echo -e "   • Other developer can now pull dev changes"
echo -e "   • Use ./scripts/merge-to-production.sh to deploy dev → main"