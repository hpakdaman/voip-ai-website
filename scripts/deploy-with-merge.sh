#!/bin/bash

# Sawtic Git Workflow: Complete deployment pipeline
# Merges dev → main → deploys to production server

set -e  # Exit on any error

# Colors for output
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No Color

echo -e "${BLUE}🚀 Sawtic: Complete deployment pipeline${NC}"
echo -e "${BLUE}======================================${NC}"

# The commit message will be provided as first argument
COMMIT_MESSAGE="$1"
if [ -z "$COMMIT_MESSAGE" ]; then
    echo -e "${RED}❌ Error: Deployment message required${NC}"
    echo -e "${YELLOW}💡 Usage: ./scripts/deploy-with-merge.sh \"Production deployment message\"${NC}"
    exit 1
fi

# Step 1: Merge dev to main
echo -e "${BLUE}📋 Step 1: Merging dev to production...${NC}"
./scripts/merge-to-production.sh "$COMMIT_MESSAGE"

if [ $? -ne 0 ]; then
    echo -e "${RED}❌ Production merge failed. Deployment cancelled.${NC}"
    exit 1
fi

echo -e "${GREEN}✅ Step 1 completed: dev merged to main${NC}"

# Step 2: Deploy to production server
echo -e "${BLUE}📋 Step 2: Deploying to production server...${NC}"
./scripts/deploy-production.sh

if [ $? -ne 0 ]; then
    echo -e "${RED}❌ Production deployment failed.${NC}"
    echo -e "${YELLOW}💡 Main branch was updated but server deployment failed.${NC}"
    echo -e "${YELLOW}💡 You can retry with: ./scripts/deploy-production.sh${NC}"
    exit 1
fi

echo -e "${GREEN}✅ Step 2 completed: deployed to production server${NC}"

# Final status
echo -e "\n${GREEN}🎉 Complete deployment pipeline successful!${NC}"
echo -e "${GREEN}✅ dev → main → production server${NC}"
echo -e "${BLUE}🌐 Live at: http://167.235.254.56${NC}"

# Show final branch status
echo -e "\n${BLUE}📊 Final Status:${NC}"
echo -e "${YELLOW}📍 Current branch: $(git branch --show-current)${NC}"
echo -e "${GREEN}🚀 Production is now live with latest changes${NC}"