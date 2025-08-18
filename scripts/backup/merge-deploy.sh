#!/bin/bash

# Merge Dev to Main and Deploy Script for Claude Code
# Merges dev branch to main, then automatically deploys to production

set -e

# Colors for output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
RED='\033[0;31m'
NC='\033[0m'

# Get commit message parameter
COMMIT_MESSAGE="$1"

if [ -z "$COMMIT_MESSAGE" ]; then
    echo -e "${RED}❌ Error: Commit message required${NC}"
    echo -e "${YELLOW}Usage: ./scripts/merge-deploy.sh \"Your commit message\"${NC}"
    exit 1
fi

echo -e "${BLUE}🚀 Claude Code: Merge Dev → Main → Deploy${NC}"

# Get current branch
ORIGINAL_BRANCH=$(git branch --show-current)
echo -e "${YELLOW}📍 Current branch: $ORIGINAL_BRANCH${NC}"

# Check if we're on dev branch
if [ "$ORIGINAL_BRANCH" != "dev" ]; then
    echo -e "${RED}❌ Error: Must be on dev branch to merge to main${NC}"
    echo -e "${YELLOW}Current branch: $ORIGINAL_BRANCH${NC}"
    echo -e "${YELLOW}Please switch to dev branch: git checkout dev${NC}"
    exit 1
fi

# Check for uncommitted changes
if [ -n "$(git status --porcelain)" ]; then
    echo -e "${YELLOW}💾 Committing changes on dev branch...${NC}"
    git add .
    git commit -m "$COMMIT_MESSAGE"
fi

# Step 1: Push dev branch
echo -e "${BLUE}📤 Pushing dev to origin...${NC}"
git push origin dev

# Step 2: Switch to main and pull latest
echo -e "${BLUE}🔄 Switching to main branch...${NC}"
git checkout main
git pull origin main

# Step 3: Merge dev to main
echo -e "${BLUE}🔀 Merging dev to main...${NC}"
git merge dev --no-ff -m "Merge dev to main: $COMMIT_MESSAGE"

# Step 4: Push main
echo -e "${BLUE}📤 Pushing main to origin...${NC}"
git push origin main

# Step 5: Build assets locally
echo -e "${YELLOW}🔨 Building assets for production...${NC}"
if [ -f "package.json" ]; then
    npm run build 2>/dev/null || {
        echo -e "${YELLOW}⚠️  NPM build failed or not needed, proceeding...${NC}"
    }
fi

# Step 6: Deploy to production
echo -e "${BLUE}🚀 Deploying to production server...${NC}"

SERVER_HOST="167.235.254.56"
SERVER_USER="root"
SERVER_PATH="/home/sawtic"

DEPLOY_COMMANDS="
cd $SERVER_PATH &&
echo '🔄 Pulling latest from main branch...' &&
git fetch origin &&
git reset --hard origin/main &&
echo '📦 Installing dependencies...' &&
composer install --no-dev --optimize-autoloader --no-interaction &&
echo '🧹 Clearing all caches...' &&
php artisan config:clear &&
php artisan view:clear &&
php artisan route:clear &&
echo '💾 Optimizing for production...' &&
php artisan config:cache &&
php artisan route:cache &&
php artisan view:cache &&
echo '🔧 Setting proper permissions...' &&
chown -R apache:apache storage bootstrap/cache public/build &&
chmod -R 775 storage bootstrap/cache &&
echo '✅ Production deployment completed!'
"

# Execute deployment
ssh $SERVER_USER@$SERVER_HOST "$DEPLOY_COMMANDS"

# Copy fresh build assets
if [ -d "public/build" ]; then
    echo -e "${YELLOW}📁 Updating build assets on server...${NC}"
    scp -r public/build $SERVER_USER@$SERVER_HOST:$SERVER_PATH/public/
    ssh $SERVER_USER@$SERVER_HOST "chown -R apache:apache $SERVER_PATH/public/build"
fi

# Step 7: Switch back to dev and merge main changes
echo -e "${BLUE}🔄 Switching back to dev branch...${NC}"
git checkout dev

echo -e "${BLUE}🔀 Merging main changes back to dev...${NC}"
git merge main

echo -e "${BLUE}📤 Pushing updated dev...${NC}"
git push origin dev

# Step 8: Test deployment
echo -e "${YELLOW}🧪 Testing production deployment...${NC}"
HTTP_STATUS=$(curl -o /dev/null -s -w "%{http_code}" http://$SERVER_HOST)

if [ "$HTTP_STATUS" = "200" ]; then
    echo -e "${GREEN}✅ Merge and deployment successful!${NC}"
    echo -e "${GREEN}🌐 Live at: http://$SERVER_HOST${NC}"
    echo -e "${GREEN}📍 You are back on branch: dev${NC}"
else
    echo -e "${RED}❌ Deployment test failed (HTTP $HTTP_STATUS)${NC}"
    exit 1
fi

echo -e "${BLUE}🎉 Claude Code: Merge-deploy workflow completed!${NC}"