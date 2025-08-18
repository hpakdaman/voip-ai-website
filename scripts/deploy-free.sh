#!/bin/bash

# VoIP AI Website - FREE Deployment Options
# Deploy to free hosting platforms that support Laravel PHP applications

set -e

GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
NC='\033[0m'

print_status() { echo -e "${BLUE}🔄 $1${NC}"; }
print_success() { echo -e "${GREEN}✅ $1${NC}"; }
print_info() { echo -e "${YELLOW}ℹ️  $1${NC}"; }

echo "🆓 VoIP AI Website - FREE Deployment Options"
echo "============================================="
echo ""

# Railway.app - Best free option for Laravel
deploy_railway() {
    print_status "Deploying to Railway.app (FREE)"
    
    # Check if railway CLI is installed
    if ! command -v railway &> /dev/null; then
        print_info "Installing Railway CLI..."
        npm install -g @railway/cli
    fi
    
    # Login to Railway
    print_status "Login to Railway (browser will open)..."
    railway login
    
    # Initialize project
    print_status "Initializing Railway project..."
    railway init
    
    # Add environment variables
    print_status "Setting environment variables..."
    railway variables set APP_ENV=production
    railway variables set APP_DEBUG=false
    railway variables set APP_KEY=$(php artisan key:generate --show)
    railway variables set DB_CONNECTION=mysql
    
    # Deploy
    print_status "Deploying to Railway..."
    railway up
    
    # Get the URL
    RAILWAY_URL=$(railway domain)
    print_success "🌐 Deployed to Railway: $RAILWAY_URL"
}

# Render.com - Another great free option
deploy_render() {
    print_info "Render.com Free Deployment Instructions:"
    echo ""
    echo "1. Push code to GitHub:"
    echo "   git push origin main"
    echo ""
    echo "2. Go to https://render.com and sign up"
    echo "3. Connect GitHub repository"
    echo "4. Create a Web Service with these settings:"
    echo "   - Build Command: composer install && npm run build"
    echo "   - Start Command: php artisan serve --host=0.0.0.0 --port=\$PORT"
    echo "   - Environment: PHP"
    echo "   - Instance Type: Free"
    echo ""
    echo "5. Add Environment Variables:"
    echo "   APP_ENV=production"
    echo "   APP_DEBUG=false" 
    echo "   APP_KEY=$(php artisan key:generate --show)"
    echo ""
    print_success "Your site will be live at: https://your-app-name.onrender.com"
}

# Heroku free alternative using GitHub Codespaces
deploy_codespaces() {
    print_info "GitHub Codespaces + Tunneling (FREE):"
    echo ""
    echo "1. Open repository in GitHub Codespaces"
    echo "2. Run Laravel development server:"
    echo "   php artisan serve --host=0.0.0.0 --port=8000"
    echo "3. Make port public in Codespaces"
    echo "4. Share the generated public URL for testing"
    echo ""
    print_success "Perfect for development and quick demos!"
}

# Show all options
show_free_options() {
    echo "🆓 FREE Laravel Hosting Options:"
    echo ""
    echo "1. 🚂 Railway.app"
    echo "   • 512MB RAM, 1GB Disk"
    echo "   • $5 credit monthly (enough for small sites)"
    echo "   • PostgreSQL database included"
    echo "   • Custom domains supported"
    echo "   • Deploy: ./scripts/deploy-free.sh railway"
    echo ""
    echo "2. 🎨 Render.com" 
    echo "   • 512MB RAM"
    echo "   • PostgreSQL database (90 days)"
    echo "   • Sleeps after 15min inactivity"
    echo "   • Deploy: ./scripts/deploy-free.sh render"
    echo ""
    echo "3. 🐙 GitHub Codespaces"
    echo "   • 60 hours free monthly"
    echo "   • Perfect for testing/demos"
    echo "   • Deploy: ./scripts/deploy-free.sh codespaces"
    echo ""
    echo "4. 🌐 Vercel (Static Export)"
    echo "   • Convert Laravel to static"
    echo "   • Unlimited bandwidth"
    echo "   • Deploy: ./scripts/deploy-free.sh vercel"
    echo ""
    print_info "👑 RECOMMENDED: Railway.app (most Laravel-friendly)"
}

# Vercel static export (limited functionality)
deploy_vercel() {
    print_info "Vercel Static Export (Limited Laravel functionality):"
    echo ""
    echo "⚠️  Note: This creates a static version (no PHP server-side functionality)"
    echo ""
    echo "1. Install Vercel CLI:"
    echo "   npm i -g vercel"
    echo ""
    echo "2. Build static version:"
    echo "   php artisan config:cache"
    echo "   npm run build"
    echo ""
    echo "3. Deploy:"
    echo "   vercel --prod"
    echo ""
    print_info "Only frontend will work - no contact forms or PHP features"
}

# Parse arguments
case "${1:-}" in
    "railway")
        deploy_railway
        ;;
    "render") 
        deploy_render
        ;;
    "codespaces")
        deploy_codespaces
        ;;
    "vercel")
        deploy_vercel
        ;;
    *)
        show_free_options
        ;;
esac

echo ""
print_success "🎉 Choose your free deployment option above!"
print_info "For full Laravel functionality, use Railway.app or Render.com"