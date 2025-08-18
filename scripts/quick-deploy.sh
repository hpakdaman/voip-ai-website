#!/bin/bash

# Quick Production Update Script for Claude Code
# Fast deployment for minor changes without full build process

set -e

# Server Configuration
SERVER_HOST="167.235.254.56"
SERVER_USER="root"
SERVER_PATH="/home/sawtic"

# Colors
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m'

echo -e "${BLUE}⚡ Claude Code: Quick Production Update...${NC}"

# Quick deployment commands
COMMANDS="
cd $SERVER_PATH &&
echo '🔄 Pulling latest changes from main...' &&
git pull origin main &&
echo '🧹 Clearing caches...' &&
php artisan config:clear &&
php artisan view:clear &&
echo '🔧 Setting permissions...' &&
chown -R apache:apache storage bootstrap/cache &&
chmod -R 775 storage bootstrap/cache &&
echo '✅ Quick update completed!'
"

echo -e "${YELLOW}🚀 Updating production server...${NC}"
ssh $SERVER_USER@$SERVER_HOST "$COMMANDS"

# Test the update
HTTP_STATUS=$(curl -o /dev/null -s -w "%{http_code}" http://$SERVER_HOST)
if [ "$HTTP_STATUS" = "200" ]; then
    echo -e "${GREEN}✅ Quick update successful!${NC}"
    echo -e "${GREEN}🌐 Live at: http://$SERVER_HOST${NC}"
else
    echo -e "${YELLOW}⚠️  Update completed but got HTTP $HTTP_STATUS${NC}"
fi

echo -e "${BLUE}⚡ Claude Code: Quick update completed!${NC}"