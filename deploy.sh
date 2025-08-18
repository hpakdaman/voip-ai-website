#!/bin/bash

# VoIP AI Website Deployment Script
# This script deploys changes from local main branch to production server

set -e  # Exit on any error

# Server Configuration
SERVER_HOST="167.235.254.56"
SERVER_USER="root"
SERVER_PATH="/home/sawtic"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

echo -e "${BLUE}🚀 Starting VoIP AI Website Deployment...${NC}"

# Step 1: Check if we're on main branch
echo -e "${YELLOW}📋 Checking current branch...${NC}"
CURRENT_BRANCH=$(git branch --show-current)
if [ "$CURRENT_BRANCH" != "main" ]; then
    echo -e "${RED}❌ Error: You must be on the main branch to deploy${NC}"
    echo -e "${YELLOW}Current branch: $CURRENT_BRANCH${NC}"
    echo -e "${YELLOW}Please switch to main branch: git checkout main${NC}"
    exit 1
fi

# Step 2: Check for uncommitted changes
echo -e "${YELLOW}📋 Checking for uncommitted changes...${NC}"
if [ -n "$(git status --porcelain)" ]; then
    echo -e "${RED}❌ Error: You have uncommitted changes${NC}"
    echo -e "${YELLOW}Please commit or stash your changes before deploying${NC}"
    git status --short
    exit 1
fi

# Step 3: Build assets locally
echo -e "${YELLOW}🔨 Building assets locally...${NC}"
if [ -f "package.json" ]; then
    npm run build
    if [ $? -ne 0 ]; then
        echo -e "${RED}❌ Build failed${NC}"
        exit 1
    fi
else
    echo -e "${YELLOW}⚠️  No package.json found, skipping build${NC}"
fi

# Step 4: Push latest changes to GitHub
echo -e "${YELLOW}📤 Pushing changes to GitHub...${NC}"
git push origin main

# Step 5: Deploy to server
echo -e "${YELLOW}🚀 Deploying to server...${NC}"

# Create deployment commands
DEPLOY_COMMANDS="
cd $SERVER_PATH &&
echo '🔄 Pulling latest changes...' &&
git fetch origin &&
git reset --hard origin/main &&
echo '📦 Installing PHP dependencies...' &&
composer install --no-dev --optimize-autoloader --no-interaction &&
echo '🧹 Clearing caches...' &&
php artisan config:clear &&
php artisan view:clear &&
php artisan route:clear &&
echo '💾 Caching for production...' &&
php artisan config:cache &&
php artisan route:cache &&
php artisan view:cache &&
echo '🔧 Setting permissions...' &&
chown -R apache:apache storage bootstrap/cache &&
chmod -R 775 storage bootstrap/cache &&
echo '✅ Deployment completed successfully!'
"

# Execute deployment on server
ssh $SERVER_USER@$SERVER_HOST "$DEPLOY_COMMANDS"

# Step 6: Copy build assets if they exist
if [ -d "public/build" ]; then
    echo -e "${YELLOW}📁 Copying build assets to server...${NC}"
    scp -r public/build $SERVER_USER@$SERVER_HOST:$SERVER_PATH/public/
    ssh $SERVER_USER@$SERVER_HOST "chown -R apache:apache $SERVER_PATH/public/build"
fi

# Step 7: Test deployment
echo -e "${YELLOW}🧪 Testing deployment...${NC}"
HTTP_STATUS=$(curl -o /dev/null -s -w "%{http_code}" http://$SERVER_HOST)

if [ "$HTTP_STATUS" = "200" ]; then
    echo -e "${GREEN}✅ Deployment successful!${NC}"
    echo -e "${GREEN}🌐 Website is live at: http://$SERVER_HOST${NC}"
else
    echo -e "${RED}❌ Deployment test failed (HTTP $HTTP_STATUS)${NC}"
    echo -e "${YELLOW}Please check the server logs${NC}"
fi

echo -e "${BLUE}🎉 Deployment script completed!${NC}"