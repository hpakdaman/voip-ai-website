#!/bin/bash

# Force Commit to Dev & Main + Deploy Script for Claude Code
# Force commits current changes to both dev and main, then deploys to production

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
    echo -e "${YELLOW}Usage: ./scripts/force-deploy.sh \"Your commit message\"${NC}"
    exit 1
fi

echo -e "${BLUE}🚀 Claude Code: Force Commit → Dev & Main → Deploy${NC}"

# Get current branch
ORIGINAL_BRANCH=$(git branch --show-current)
echo -e "${YELLOW}📍 Current branch: $ORIGINAL_BRANCH${NC}"

# Step 1: Force add and commit all changes
echo -e "${BLUE}💾 Force committing all changes...${NC}"
git add -A
git commit -m "$COMMIT_MESSAGE" --allow-empty

# Step 2: Push current branch
echo -e "${BLUE}📤 Pushing $ORIGINAL_BRANCH to origin...${NC}"
git push origin $ORIGINAL_BRANCH --force

# Step 3: Force update dev branch
echo -e "${BLUE}🔄 Force updating dev branch...${NC}"
git checkout dev 2>/dev/null || git checkout -b dev
git reset --hard $ORIGINAL_BRANCH
git push origin dev --force

# Step 4: Force update main branch
echo -e "${BLUE}🔄 Force updating main branch...${NC}"
git checkout main
git reset --hard $ORIGINAL_BRANCH
git push origin main --force

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
echo '🔄 Force pulling latest from main branch...' &&
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

# Step 7: Return to original branch
echo -e "${BLUE}🔄 Returning to original branch: $ORIGINAL_BRANCH${NC}"
git checkout $ORIGINAL_BRANCH

# Step 8: Test deployment
echo -e "${YELLOW}🧪 Testing production deployment...${NC}"
HTTP_STATUS=$(curl -o /dev/null -s -w "%{http_code}" http://$SERVER_HOST)

if [ "$HTTP_STATUS" = "200" ]; then
    echo -e "${GREEN}✅ Force deployment successful!${NC}"
    echo -e "${GREEN}🌐 Live at: http://$SERVER_HOST${NC}"
    echo -e "${GREEN}📍 You are back on branch: $ORIGINAL_BRANCH${NC}"
    echo -e "${GREEN}🔧 Both dev and main branches updated${NC}"
else
    echo -e "${RED}❌ Deployment test failed (HTTP $HTTP_STATUS)${NC}"
    exit 1
fi

echo -e "${BLUE}🎉 Claude Code: Force deployment workflow completed!${NC}"