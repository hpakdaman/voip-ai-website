#!/bin/bash

# Production Deployment Script for Claude Code
# Deploys main branch to production server after merging changes

set -e

# Server Configuration
SERVER_HOST="167.235.254.56"
SERVER_USER="root"
SERVER_PATH="/home/sawtic"

# Colors for output
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
RED='\033[0;31m'
NC='\033[0m'

echo -e "${BLUE}🚀 Claude Code: Deploying to Production Server...${NC}"

# Build assets locally first
echo -e "${YELLOW}🔨 Building assets locally...${NC}"
if [ -f "package.json" ]; then
    npm run build 2>/dev/null || {
        echo -e "${YELLOW}⚠️  NPM build failed or not needed, proceeding...${NC}"
    }
fi

# Deploy to production server
echo -e "${YELLOW}📤 Deploying to production server...${NC}"

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

# Test the deployment
echo -e "${YELLOW}🧪 Testing production deployment...${NC}"
HTTP_STATUS=$(curl -o /dev/null -s -w "%{http_code}" http://$SERVER_HOST)

if [ "$HTTP_STATUS" = "200" ]; then
    echo -e "${GREEN}✅ Production deployment successful!${NC}"
    echo -e "${GREEN}🌐 Live at: http://$SERVER_HOST${NC}"
else
    echo -e "${RED}❌ Deployment test failed (HTTP $HTTP_STATUS)${NC}"
    exit 1
fi

echo -e "${BLUE}🎉 Claude Code: Production deployment completed!${NC}"