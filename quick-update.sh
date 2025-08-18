#!/bin/bash

# Quick Update Script for VoIP AI Website
# This script quickly updates the server without full build process

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

echo -e "${BLUE}⚡ Quick Update: VoIP AI Website${NC}"

# Quick update commands
COMMANDS="
cd $SERVER_PATH &&
echo '🔄 Pulling changes...' &&
git pull origin main &&
echo '🧹 Clearing caches...' &&
php artisan config:clear &&
php artisan view:clear &&
echo '✅ Quick update completed!'
"

echo -e "${YELLOW}🚀 Updating server...${NC}"
ssh $SERVER_USER@$SERVER_HOST "$COMMANDS"

echo -e "${GREEN}✅ Quick update completed!${NC}"
echo -e "${GREEN}🌐 Website: http://$SERVER_HOST${NC}"