# DEVELOPMENT.md

Development commands, setup, and workflows for the VoIP AI project.

## Development Commands

### Prerequisites
- PHP >= 8.2 
- Composer installed
- Node.js with npm, yarn, or bun

### Initial Setup
1. `composer install` - Install PHP dependencies
2. `cp .env.example .env` - Copy environment file
3. `php artisan key:generate` - Generate application key
4. `php artisan migrate` - Run database migrations
5. Install frontend dependencies with one of:
   - `npm install` or `npm i`
   - `yarn install` or `yarn`
   - `bun install` or `bun i`

### Primary Development
- `composer run dev` - Start complete development environment (Laravel server, queue worker, logs, and Vite)
- `php artisan serve` - Start Laravel development server only (http://127.0.0.1:8000)
- Frontend asset compilation:
  - `npm run dev` / `yarn dev` / `bun dev` - Start Vite development server
  - `npm run build` / `yarn build` / `bun run build` - Build production assets

### Testing and Quality
- `composer run test` - Run the test suite (clears config and runs PHPUnit/Pest tests)
- `php artisan test` - Run tests directly
- `php artisan pint` - Format PHP code (Laravel Pint)

### Database
- `php artisan migrate` - Run database migrations
- `php artisan migrate:fresh` - Fresh migration (drops all tables and recreates)
- `php artisan tinker` - Laravel REPL

### Other Useful Commands
- `php artisan config:clear` - Clear configuration cache
- `php artisan route:list` - View all registered routes
- `php artisan queue:listen --tries=1` - Run queue worker
- `php artisan pail --timeout=0` - View real-time logs

## Architecture Overview

### Core Structure
- **Framework**: Laravel 12.14.1 with PHP 8.4.3+ requirement
- **Frontend**: Blade templates + Tailwind CSS 4.1.6 + Vite 5.0
- **Testing**: Pest framework
- **Package Management**: Composer (PHP) + npm (JS)
- **Build Tool**: Vite 5.0 with Laravel Vite Plugin 1.0
- **Additional Libraries**: tiny-slider 2.9.4, sass 1.77.6

### Key Plugin Versions
| Plugin | Version |
|--------|--------|
| Tailwind CSS | 4.1.6 |
| Laravel | 12.14.1 |
| PHP | 8.4.3 |
| Vite | 5.0 |
| Laravel Vite Plugin | 1.0 |
| tiny-slider | 2.9.4 |
| sass | 1.77.6 |

### Tailwind CSS Configuration
- Reference: [Tailwind CSS Installation with Vite](https://tailwindcss.com/docs/installation/using-vite)
- Custom configuration in `tailwind.config.js`
- Main CSS file: `resources/css/app.css`
- Compiled via Vite build process

### Key Directories
- `app/Http/Controllers/` - Route controllers, primarily the large HomeController with 100+ template methods
- `resources/views/` - Blade templates for all pages (100+ template files)
- `resources/views/includes/` - Shared components (navbars, footers)
- `resources/views/layouts/` - Base layouts (main.blade.php, no-header.blade.php)
- `resources/views/components/` - **NEW: Modular VoIP homepage components (14 components)**
- `app/Helpers/` - Custom helper classes (ArrayHelpers, CommonHelpers, CompressHelpers, etc.)
- `app/Services/` - Business logic services (InvoiceService, JobService, NotificationService, ResponseService)
- `app/Enums/` - Enumeration classes (Categories, Status)
- `public/assets/` - Static assets (images, CSS, JS, fonts)

### Route Patterns
- Most routes follow `/index-{theme}` pattern handled by HomeController methods
- Detail pages use `/page-type-detail/{title}` with dedicated controllers
- Contact form at `/contact` with GET/POST routes

### Helper System
Custom helpers are auto-loaded via composer.json:
- `app/helper.php` - Global helper functions
- `app/Helpers/Register.php` - Helper registration
- Various specialized helper classes for arrays, formatting, compression, etc.

### Asset Pipeline
- Vite handles asset compilation
- Tailwind CSS for styling with custom configuration
- Assets compiled from `resources/css/app.css` and `resources/js/app.js`

## Development Guidelines for VoIP AI Customization

### Template Usage Policy
**CRITICAL**: When creating new pages or components:
1. **Always use existing template structure and components first**
2. **Never write custom CSS - use Tailwind classes only**
3. **Leverage pre-built components** from `resources/views/includes/Landings/`
4. **Reuse existing layouts** (`main.blade.php` or `no-header.blade.php`)
5. **Follow naming patterns** used in existing templates

### Component Reuse Strategy
- **Template Source**: All template examples available in `../examples/Landing/`
- **SaaS Templates**: Use `index-saas`, `index-software`, `index-modern-saas` as base for VoIP pages
- **Feature Sections**: Reuse components like `features.blade.php`, `pricing.blade.php`, `reviews.blade.php`
- **Navigation**: Select appropriate navbar from 11 available options (in `../examples/Landing/resources/views/includes/`)
- **Footers**: Choose from 8 footer variations (in `../examples/Landing/resources/views/includes/`)
- **Modular Components**: Each landing has reusable components in `../examples/Landing/resources/views/includes/Landings/[template]/`

### Page Creation Workflow
1. **Identify similar existing template** from `../examples/Landing/` (e.g., SaaS template for VoIP services)
2. **Copy structure** from closest matching template in examples
3. **Reuse components** from `../examples/Landing/resources/views/includes/Landings/` directories
4. **🚨 CRITICAL: Create JSON data file** - ALL new section content MUST be stored in `resources/data/`
5. **Create new view** in main project `resources/views/`
6. **Add route** to clean `routes/web.php`
7. **Add controller method** to `HomeController.php`
8. **Customize content** while maintaining Tailwind styling
9. **Test responsive design** using existing breakpoint patterns
10. **CRITICAL: Check for errors** - Always verify changes work correctly

### Current Clean Project Structure

**Main VoIP Project** (`/main/`):
```
routes/web.php - Clean VoIP-focused routes only:
  / (home)
  /features  
  /pricing
  /about
  /contact
  /privacy
  /terms

app/Http/Controllers/HomeController.php - VoIP methods only:
  index()     - VoIP home page
  features()  - VoIP features 
  pricing()   - VoIP pricing
  about()     - About VoIP AI
  privacy()   - Privacy policy
  terms()     - Terms of service

resources/views/ - VoIP views:
  index.blade.php - **NEW: Clean 39-line modular homepage with @include statements**
  layouts/main.blade.php - Main layout (kept)
  includes/navbar.blade.php - Navigation (kept)
  includes/footer.blade.php - Footer (kept)
  components/ - **NEW: 14 modular homepage components:**
    background-blurs.blade.php - Animated background elements
    hero-section.blade.php - Main hero with typewriter & spinning circles
    business-partners.blade.php - Partner logos section
    uae-advantage.blade.php - UAE-specific advantages grid
    core-benefits.blade.php - Business transformation benefits
    ai-demo.blade.php - Interactive AI workflow demonstration
    industry-solutions.blade.php - Industry-specific solutions grid
    ai-features.blade.php - Advanced AI features showcase
    success-metrics.blade.php - Performance metrics with trust badges
    testimonials.blade.php - Customer success stories
    integrations-hub.blade.php - Integration categories and tools
    pricing-preview.blade.php - Pricing plans with USD/AED toggle
    trends-section.blade.php - AI trends and newsletter signup
    cta-launchpad.blade.php - Final call-to-action cluster
  
  // Template demo views still present as reference
  // Will be cleaned up gradually as VoIP pages are created
```

**Template Examples** (`../examples/Landing/`):
- Complete template reference library
- All 100+ demo views and components
- Use as source for new VoIP pages

### AI Call Center Specific Adaptations
- **Primary Templates**: Focus on SaaS, software, and business templates
- **Key Sections**: Features, pricing tiers, testimonials, integration demos
- **Business Focus**: B2B messaging, customer service automation, call center efficiency
- **AI Features**: Highlight intelligent agents, natural language processing, 24/7 availability, cost reduction