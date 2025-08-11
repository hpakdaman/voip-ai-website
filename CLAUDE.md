# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is "Techwind" - a Laravel 12 SaaS/software landing template purchased from ThemeForest (https://themeforest.net/item/techwind-laravel-12-app-saas-software-landing-template/58088942) that has been fully transformed into a comprehensive **VoIP AI business website** targeting UAE and Middle East enterprises. The original template has been extensively customized with AI-powered communication solutions, Arabic language support, and TRA compliance features.

**Business Context**: This is now a complete VoIP AI business website showcasing intelligent communication solutions designed specifically for the UAE market. The platform includes advanced AI features, bilingual support (English/Arabic), UAE regulatory compliance, and enterprise-grade functionality targeting Dubai and Abu Dhabi businesses.

## Current Implementation Status

✅ **COMPLETED - Full VoIP AI Website**
- **Homepage**: 12-section Grok-inspired layout with interactive demos, currency toggle (USD/AED), and UAE-focused content
- **Features Page**: Comprehensive AI capabilities showcase with UAE-specific optimizations
- **Pricing Page**: Three-tier pricing with USD/AED currency toggle and UAE-focused plans
- **About Page**: Complete company story with UAE journey, team stats, and future vision  
- **Navigation**: Clean navbar with theme toggle, language switcher (EN/AR), and proper alignment
- **Styling**: Custom VoIP AI theme with animations, floating elements, and premium card effects
- **Functionality**: Interactive JavaScript features, responsive design, and WOW.js animations

## Current Live Pages

1. **Homepage** (`/`) - Complete 12-section AI VoIP showcase
   - Hero banner with UAE optimization
   - UAE advantage spotlight
   - Core benefits and ROI metrics  
   - Live AI demo simulation
   - Industry-specific solutions grid
   - Advanced AI features carousel
   - Success metrics with animated counters
   - Client testimonials
   - Integration hub
   - Pricing preview
   - 2025 AI trends
   - Action-oriented CTA section

2. **Features Page** (`/features`) - Comprehensive AI capabilities  
   - Core AI features grid (9 features)
   - UAE-specific features (TRA compliance, Arabic AI, MENA infrastructure)
   - Advanced AI capabilities showcase
   - Integration compatibility (CRM, Business Tools, E-commerce, Support)
   - API documentation section

3. **Pricing Page** (`/pricing`) - Complete pricing strategy
   - Three pricing tiers (Startup $39, Professional $89, Enterprise $199)
   - USD/AED currency toggle with interactive JavaScript
   - UAE-focused features and descriptions
   - Enterprise solutions section
   - Pricing FAQ with 6 common questions
   - Contact CTA sections

4. **About Page** (`/about`) - Full company story
   - Mission and vision with UAE focus
   - Company journey timeline (2019-2024)
   - Core values (6 principles) 
   - Team statistics and achievements
   - Industry recognition and certifications
   - Future vision and roadmap

5. **Contact Page** (`/contact-us`) - Contact form (existing)
6. **Privacy Policy** (`/privacy`) - UAE compliance-focused policy  
7. **Terms of Service** (`/terms`) - Legal terms for UAE market

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
- `app/Helpers/` - Custom helper classes (ArrayHelpers, CommonHelpers, CompressHelpers, etc.)
- `app/Services/` - Business logic services (InvoiceService, JobService, NotificationService, ResponseService)
- `app/Enums/` - Enumeration classes (Categories, Status)
- `public/assets/` - Static assets (images, CSS, JS, fonts)

### Template Structure Analysis
The template includes 100+ pre-built pages organized in a modular component system:

**Main Template Types:**
- **SaaS/Software**: index-saas, index-software, index-modern-saas, index-classic-saas
- **Business**: index-startup, index-service, index-marketing, index-consulting
- **E-commerce**: index-shop, shop-grid, shop-cart, shop-checkout, shop-item-detail
- **Portfolio**: Multiple layouts (modern, classic, creative, masonry) with detail pages
- **Industry-Specific**: Hotel, restaurant, gym, hospital, law, insurance, yoga, spa, etc.
- **Specialized**: NFT marketplace, crypto, job boards, course platforms, payment, AI, video

**Component System:**
- **Layouts**: `resources/views/layouts/` (main.blade.php, no-header.blade.php)
- **Navigation**: 11 different navbar variations (`navbar.blade.php` to `navbar11.blade.php`)
- **Footers**: 8 different footer styles (`footer.blade.php` to `footer8.blade.php`)
- **Reusable Components**: `resources/views/includes/Landings/[template-name]/` 
  - Each template has modular components (features, pricing, testimonials, etc.)
  - Components are designed for easy reuse and customization

**Key Features:**
- Dark/Light mode support with automatic theme switching
- Animation support via WOW.js and Animate.css
- Responsive design with Tailwind CSS utilities
- Pre-built sections: hero, features, pricing, testimonials, blogs, contacts
- Image galleries and sliders with tiny-slider integration

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

### Styling Guidelines
- **Use Tailwind CSS utilities exclusively** - no custom CSS
- **Reference**: [Tailwind CSS with Vite](https://tailwindcss.com/docs/installation/using-vite)
- **Available Classes**: Utilize existing Tailwind 4.1.6 configuration
- **Dark Mode**: Built-in support via `dark:` prefixes
- **Animations**: Use WOW.js classes and Animate.css for transitions
- **If new styling needed**: Write Tailwind utility classes, never pure CSS

### Page Creation Workflow
1. **Identify similar existing template** from `../examples/Landing/` (e.g., SaaS template for VoIP services)
2. **Copy structure** from closest matching template in examples
3. **Reuse components** from `../examples/Landing/resources/views/includes/Landings/` directories
4. **Create new view** in main project `resources/views/`
5. **Add route** to clean `routes/web.php`
6. **Add controller method** to `HomeController.php`
7. **Customize content** while maintaining Tailwind styling
8. **Test responsive design** using existing breakpoint patterns
9. **CRITICAL: Check for errors** - Always verify changes work correctly

### Error Checking Protocol
**MANDATORY AFTER EVERY CHANGE:**
1. **Ask user to run project**: "Please run the project now to test the changes"
2. **Wait for confirmation**: User runs `composer run dev` or visits site
3. **Check logs**: "Now shall I check logs to see if any new errors occurred?"
4. **Fix any issues**: Read `storage/logs/laravel.log` for new errors only
5. **Never skip this step**: Essential for maintaining project stability

**Log Checking Command:**
- Use `tail -20 storage/logs/laravel.log` to see recent entries
- Focus only on NEW errors since last check
- Fix errors immediately before proceeding

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
  index.blade.php - Updated with VoIP AI content
  layouts/main.blade.php - Main layout (kept)
  includes/navbar.blade.php - Navigation (kept)
  includes/footer.blade.php - Footer (kept)
  
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

### Detailed Template Component Inventory

**Available SaaS Components** (most relevant for AI Call Center, found in `../examples/Landing/resources/views/includes/Landings/`):
- `index-saas/features.blade.php` - Feature showcase with icons
- `index-saas/rates2.blade.php` - Pricing tables
- `index-saas/reviews2.blade.php` - Customer testimonials
- `index-saas/business-partner2.blade.php` - Partner/client logos
- `index-saas/ctr.blade.php` - Call-to-action sections
- `index-saas/get-notified.blade.php` - Newsletter/notification signup
- `index-saas/great-product.blade.php` - Product highlights
- `index-saas/blog.blade.php` - Blog/news sections

**Software Template Components** (found in `../examples/Landing/resources/views/includes/Landings/`):
- `index-software/analytics.blade.php` - Analytics dashboards
- `index-software/enhance-security.blade.php` - Security features
- `index-software/works.blade.php` - How it works sections
- `index-software/pricing.blade.php` - Alternative pricing layouts
- `index-software/frequently-asked2.blade.php` - FAQ sections

**Universal Components** (reusable across templates):
- Hero sections with CTAs
- Feature grids with icons
- Pricing comparison tables
- Team/about sections
- Contact forms
- Blog listing pages
- Testimonial carousels

### Animation and Interaction Patterns
- **WOW.js Integration**: `wow animate__animated animate__fadeIn` classes
- **Timing Controls**: `data-wow-delay` for staggered animations
- **Hover Effects**: Built-in Tailwind hover utilities
- **Dark Mode Toggle**: Automatic theme switching script included
- **Mobile Navigation**: Responsive hamburger menu patterns

### Asset Management
- **Images**: Use `asset('assets/images/...')` helper
- **Icons**: Feather icons, Unicons, Material Design icons available
- **Fonts**: Nunito font family pre-configured
- **Scripts**: jQuery, Swiper, tiny-slider, Jarallax pre-loaded

## Color Scheme & Styling Configuration

### Primary Color System
The template uses **Indigo** as the primary brand color throughout:
- **Primary**: `indigo-600` (#4F46E5) - Main brand color for buttons, links, accents
- **Primary Hover**: `indigo-700` (#4338CA) - Hover states
- **Primary Light**: `indigo-600/5`, `indigo-600/10` - Background overlays and subtle accents
- **Border**: `border-indigo-600` - Primary borders and outlines

### Full Color Palette (Tailwind 4.1.6 OKLCH)
**Complete color system with 50-950 shades for each:**
- **Grays**: `slate`, `gray`, `zinc`, `neutral`, `stone`
- **Colors**: `red`, `orange`, `amber`, `yellow`, `lime`, `green`, `emerald`, `teal`, `cyan`, `sky`, `blue`, `indigo`, `violet`, `purple`, `fuchsia`, `pink`, `rose`
- **Each color has 11 shades**: 50, 100, 200, 300, 400, 500, 600, 700, 800, 900, 950

### Typography & Fonts
- **Primary Font**: `font-nunito` (Nunito family) - Applied to `<body>` element
- **Font Weights**: 200-1000 available (thin to black)
- **Font Families Available**:
  - `font-sans` - Default UI sans-serif stack
  - `font-serif` - Traditional serif stack  
  - `font-mono` - Monospace stack
  - `font-nunito` - Custom Nunito family (primary)
- **Google Fonts Integration**: Nunito, Alex Brush, EB Garamond, Kaushan Script, Work Sans

### Dark Mode Implementation
- **Automatic Theme Detection**: Based on page routes (see main.blade.php:111-125)
- **Dark Mode Classes**: All components use `dark:` prefixes
- **Dark Pages**: Specific pages auto-enable dark mode (ai, crypto, photography, video, etc.)
- **Theme Switcher**: Built-in toggle button in main layout
- **Color Adaptation**: `dark:bg-slate-900`, `dark:text-white`, etc.

### Spacing System
- **Tailwind 4.x Spacing**: Uses CSS custom properties `calc(var(--spacing) * X)`
- **Available Scales**: 0.5, 1, 2, 3, 4, 5, 6, 8, 10, 12, 16, 20, 24, 32, 40, 48, 56, 64, 72, 80, 96
- **Extended Scales**: Up to 854 units for extreme layouts
- **Standard Usage**: `p-4`, `m-6`, `space-y-8`, etc.

### Animation & Effects
- **WOW.js Classes**: `wow animate__animated animate__fadeIn`
- **Delay Controls**: `data-wow-delay="0.1s"` to `data-wow-delay="1.1s"`
- **Transition Utilities**: `duration-500`, `ease-in-out`, `hover:` states
- **Transform Effects**: Available for rotations, scales, translations

### Responsive Design Patterns
- **Breakpoints**: `sm:`, `md:`, `lg:`, `xl:`, `2xl:`
- **Grid Systems**: `grid-cols-1`, `md:grid-cols-2`, `lg:grid-cols-3`
- **Responsive Typography**: `text-4xl lg:text-5xl`
- **Spacing Adjustments**: `mt-32 md:mt-44`

### SCSS/CSS Architecture
- **Vite Integration**: Uses `@tailwindcss/vite` plugin
- **CSS Entry Point**: `resources/css/app.css` with `@import 'tailwindcss'`
- **Source Watching**: Automatic compilation of Blade templates and JS files
- **Theme Customization**: Via `@theme` directive in app.css
- **Font Configuration**: Custom font stack in theme configuration

### Component Styling Guidelines for VoIP
- **Brand Colors**: Stick to indigo palette for consistency
- **Professional Look**: Use slate grays for text, white/dark backgrounds
- **Business CTAs**: `bg-indigo-600 hover:bg-indigo-700 text-white` for primary buttons
- **Secondary Actions**: `border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white`
- **Subtle Accents**: `bg-indigo-600/5` for light backgrounds, `bg-indigo-600/10` for dark mode