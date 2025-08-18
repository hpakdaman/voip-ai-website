#!/bin/bash

# VoIP AI Website - GitHub Codespaces Quick Start
# Sets up the Laravel application in GitHub Codespaces

set -e

GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
NC='\033[0m'

print_status() { echo -e "${BLUE}🔄 $1${NC}"; }
print_success() { echo -e "${GREEN}✅ $1${NC}"; }
print_info() { echo -e "${YELLOW}ℹ️  $1${NC}"; }

echo ""
echo "🐙 VoIP AI Website - GitHub Codespaces Setup"
echo "============================================="
echo ""

# Check if we're in Codespaces
if [ -n "$CODESPACE_NAME" ]; then
    print_success "✅ Running in GitHub Codespaces: $CODESPACE_NAME"
else
    print_info "⚠️  This script is optimized for GitHub Codespaces"
fi

# Setup environment
print_status "Setting up environment..."

# Copy environment file
if [ ! -f .env ]; then
    cp .env.example .env
    print_success "Created .env file"
fi

# Update .env for Codespaces
print_status "Configuring environment for Codespaces..."
cat > .env << EOF
APP_NAME="VoIP AI Solutions"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=https://${CODESPACE_NAME}-8000.${GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN}

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=sqlite
DB_DATABASE=/workspaces/dubai-voip/database/database.sqlite

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@voipai.ae"
MAIL_FROM_NAME="\${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="\${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="\${PUSHER_HOST}"
VITE_PUSHER_PORT="\${PUSHER_PORT}"
VITE_PUSHER_SCHEME="\${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="\${PUSHER_APP_CLUSTER}"
EOF

# Install dependencies
print_status "Installing Composer dependencies..."
composer install

print_status "Installing Node.js dependencies..."
npm install

# Setup database
print_status "Setting up SQLite database..."
touch database/database.sqlite

# Generate application key
print_status "Generating application key..."
php artisan key:generate

# Run migrations
print_status "Running database migrations..."
php artisan migrate --force

# Create storage link
print_status "Creating storage link..."
php artisan storage:link

# Clear caches
print_status "Clearing caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Build assets
print_status "Building frontend assets..."
npm run build

print_success "🎉 VoIP AI Website setup completed!"
echo ""
print_info "📋 Next Steps:"
echo "1. Start the Laravel server:"
echo "   php artisan serve --host=0.0.0.0 --port=8000"
echo ""
echo "2. Make port 8000 public in Codespaces (Ports tab)"
echo ""
echo "3. Visit your site at:"
echo "   https://${CODESPACE_NAME}-8000.${GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN}"
echo ""
echo "4. For development with hot reload:"
echo "   npm run dev"
echo ""
print_success "🌐 Your VoIP AI website is ready for testing!"