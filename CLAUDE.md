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
- **✨ NEW: Modular Architecture**: Homepage refactored into 14 reusable Blade components for better maintainability

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
- `resources/views/components/` - **NEW: Modular VoIP homepage components (14 components)**
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

### VoIP AI Brand Theme System
**🚨 CRITICAL REQUIREMENT: ALL new sections, components, and UI elements MUST use VoIP theme colors**

**⚠️ NEVER use generic Tailwind colors like `bg-slate-50`, `bg-gray-100`, or `bg-white` for sections**
**✅ ALWAYS use VoIP theme CSS variables for consistent branding**

The VoIP AI website uses a custom color scheme defined in `public/assets/css/voip-home.css`:

#### **VoIP Theme CSS Variables**
```css
:root {
    --voip-bg: #162f3a;           /* Main background color */
    --voip-dark-bg: #0c1b27;     /* Dark background for hero/navbar */
    --voip-primary: #1d7861;     /* Primary button color */
    --voip-dark-font: #085d44;   /* Button hover state */
    --voip-link: #1ec08d;        /* Link and accent color */
    --primary-gradient: linear-gradient(135deg, #1d7861 0%, #1ec08d 100%);
    --voip-gradient: linear-gradient(135deg, #1d7861 0%, #1ec08d 50%, #162f3a 100%);
    --voip-accent: rgba(29, 120, 97, 0.1);
    --voip-hover: rgba(30, 192, 141, 0.2);
}
```

#### **MANDATORY Usage Guidelines for ALL New Components**

**🎨 Section Background Colors (REQUIRED)**
```html
<!-- Main content sections -->
<section style="background-color: var(--voip-bg);">

<!-- Hero/navbar sections -->  
<section style="background-color: var(--voip-dark-bg);">

<!-- Add gradient overlay for depth -->
<div class="absolute inset-0" style="background: linear-gradient(90deg, #162f3a, #0c1b27); opacity: 0.8;"></div>
```

**🔗 Button & Interactive Elements (REQUIRED)**
```html
<!-- Primary buttons -->
<a style="background-color: var(--voip-primary);" class="hover-voip-button">

<!-- Secondary/outline buttons -->
<a style="border-color: var(--voip-primary); color: var(--voip-primary);">

<!-- Links and accents -->
<span style="color: var(--voip-link);">
```

**📝 Text Color Standards (MANDATORY)**
- **Section titles**: `text-white` (never use dark colors on VoIP backgrounds)
- **Descriptions**: `text-slate-300` (light gray for readability)
- **Subheadings/labels**: `style="color: var(--voip-link);"` (VoIP accent color)
- **Icons**: `style="color: var(--voip-link);"` for consistency

**🚫 FORBIDDEN Color Combinations**
- ❌ `bg-slate-50`, `bg-gray-100`, `bg-white` (breaks VoIP branding)
- ❌ `text-slate-900`, `text-gray-900` (invisible on VoIP dark backgrounds)  
- ❌ Generic `bg-indigo-600` (use `var(--voip-primary)` instead)
- ❌ Light backgrounds without VoIP theme integration

**✅ Complete Section Template Example**
```html
<section class="relative py-16" style="background-color: var(--voip-bg);">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, #162f3a, #0c1b27); opacity: 0.8;"></div>
    <div class="container relative z-1">
        <h6 class="text-base font-medium uppercase mb-2" style="color: var(--voip-link);">Section Label</h6>
        <h2 class="text-3xl font-semibold text-white mb-4">Main Heading</h2>
        <p class="text-slate-300 max-w-xl mx-auto">Description text</p>
        
        <a href="#" class="py-3 px-8 text-white rounded-md hover-voip-button" style="background-color: var(--voip-primary);">
            CTA Button
        </a>
    </div>
</section>
```

### Legacy Template Color System  
The original template uses **Indigo** as the primary brand color throughout:
- **Primary**: `indigo-600` (#4F46E5) - Main brand color for buttons, links, accents
- **Primary Hover**: `indigo-700` (#4338CA) - Hover states
- **Primary Light**: `indigo-600/5`, `indigo-600/10` - Background overlays and subtle accents
- **Border**: `border-indigo-600` - Primary borders and outlines

**Note**: VoIP theme overrides these with CSS variables for consistent branding.

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

## ✨ NEW: Modular Component Architecture

### Homepage Component System
The VoIP AI homepage has been completely refactored from a monolithic 976-line file into **14 reusable, maintainable Blade components**. This modular architecture follows Laravel best practices and significantly improves code organization.

#### Component Structure Overview
```
resources/views/
├── index.blade.php (39 lines - clean @include statements)
└── components/
    ├── background-blurs.blade.php      # Animated background elements
    ├── hero-section.blade.php          # Main hero with typewriter & spinning circles  
    ├── business-partners.blade.php     # Partner logos section
    ├── uae-advantage.blade.php         # UAE-specific advantages grid
    ├── core-benefits.blade.php         # Business transformation benefits
    ├── ai-demo.blade.php               # Interactive AI workflow demonstration
    ├── industry-solutions.blade.php    # Industry-specific solutions grid
    ├── ai-features.blade.php           # Advanced AI features showcase
    ├── success-metrics.blade.php       # Performance metrics with trust badges
    ├── testimonials.blade.php          # Customer success stories
    ├── integrations-hub.blade.php      # Integration categories and tools
    ├── pricing-preview.blade.php       # Pricing plans with USD/AED toggle
    ├── trends-section.blade.php        # AI trends and newsletter signup
    └── cta-launchpad.blade.php         # Final call-to-action cluster
```

#### Benefits of Modular Architecture
✅ **Maintainability** - Each section can be edited independently without affecting others
✅ **Reusability** - Components can be easily reused on other pages (features, about, etc.)
✅ **Team Collaboration** - Multiple developers can work on different sections simultaneously
✅ **Testing** - Individual components can be tested and debugged in isolation
✅ **Performance** - Easier to optimize and cache specific sections
✅ **Code Organization** - Logical separation of concerns following Laravel conventions
✅ **Template Consistency** - Each component follows the same structure and naming patterns

#### Component Usage Guidelines
**CRITICAL: When working with components:**

1. **Individual Component Editing**: Each component is self-contained with its own PHP data arrays, styling, and functionality
2. **Consistent Naming**: Use kebab-case for component filenames (e.g., `hero-section.blade.php`)
3. **Include Syntax**: Use dot notation for includes: `@include('components.hero-section')`
4. **Data Isolation**: Each component manages its own `@php` data arrays and variables
5. **Styling Consistency**: All components follow the established VoIP AI design system
6. **Animation Patterns**: Each component uses WOW.js animations with staggered delays
7. **Responsive Design**: All components are mobile-first with consistent breakpoint usage

#### Component Modification Workflow
1. **Identify Target Component**: Locate the specific component file in `resources/views/components/`
2. **Edit Component**: Make changes to the individual component file
3. **Test Component**: Test the specific section without affecting other homepage sections
4. **Verify Integration**: Ensure the component works correctly within the full homepage
5. **Reuse if Needed**: Consider if the component can be reused on other pages

#### Component Reusability Examples
- `hero-section.blade.php` can be adapted for features page
- `pricing-preview.blade.php` can be used on the full pricing page
- `testimonials.blade.php` can be included on about page
- `ai-features.blade.php` can be reused on features page with different data

#### Future Component Development
When adding new sections to any page:
1. **Create New Component**: Add new `.blade.php` file in `resources/views/components/`
2. **Follow Naming Convention**: Use descriptive kebab-case names
3. **Include in Target Page**: Add `@include('components.new-component')` statement
4. **Maintain Consistency**: Follow existing animation, styling, and data patterns
5. **Consider Reusability**: Design components to be flexible for multiple page usage

This modular architecture transforms the codebase from a maintenance nightmare into a clean, scalable, and developer-friendly system that can grow with the business needs.

## 🖼️ Asset Library - Image Categories & Usage Guide

### Overview
The `public/assets/images/` directory contains a comprehensive library of 1000+ sample images organized into **35+ categories** covering various business verticals and use cases. These assets are part of the original ThemeForest Techwind template and provide extensive visual resources for building different types of websites.

### Image Category Classification

#### **1. Business & Corporate**
- **Location**: `business/`, `corporate/`, `company/`
- **Content**: Professional team photos, office environments, meeting rooms, corporate headshots
- **Use Cases**: About pages, team sections, corporate presentations, business consulting websites
- **Key Assets**: Team collaboration images, professional portraits, office buildings

#### **2. SaaS & Software Products**
- **Location**: `saas/`, `app/`, `hosting/`
- **Content**: Dashboard mockups, app screenshots, software interfaces, hosting badges
- **Use Cases**: SaaS landing pages, software product demos, app showcases, hosting providers
- **Key Assets**: `saas/home.png` (dashboard mockup), `app/app.png` (App Store badge), interface screens

#### **3. Professional Portraits & People**
- **Location**: Root level (`hero1.png`, `hero2.png`, `avatar.jpg`), `client/`, `personal/`
- **Content**: Professional headshots, diverse business people, client testimonial photos
- **Use Cases**: Hero sections, testimonials, about pages, team profiles, contact pages
- **Key Assets**: Clean background portraits, smiling professionals, diverse demographics

#### **4. Industry-Specific Verticals**
Comprehensive coverage of specialized business sectors:

**Healthcare & Wellness**
- `hospital/`, `spa/`, `yoga/`
- Medical facilities, wellness centers, fitness equipment, yoga poses

**Food & Hospitality** 
- `food/`, `cafe/`, `hotel/`
- Restaurant imagery, coffee shop aesthetics, hotel rooms, culinary presentations

**E-commerce & Retail**
- `shop/`
- Product photos, shopping categories, e-commerce layouts

**Real Estate & Construction**
- `real/`, `construction/`
- Property listings, building projects, architectural photography

**Creative & Professional Services**
- `photography/`, `studio/`, `portfolio/`, `law/`, `marketing/`
- Creative portfolios, professional service imagery, legal offices

#### **5. Technology & Digital**
- **Location**: `crypto/`, `nft/`, `digital/`, `it/`
- **Content**: Cryptocurrency icons, NFT artworks, digital transformation imagery, IT infrastructure
- **Use Cases**: Fintech websites, blockchain projects, digital agencies, IT services
- **Key Assets**: Bitcoin/Ethereum logos, tech illustrations, digital devices

#### **6. Brand Assets & Client Logos**
- **Location**: `client/`
- **Content**: Major brand logos (Google, Microsoft, Amazon, Netflix, Spotify, PayPal, etc.)
- **Use Cases**: Client showcase sections, partner logos, trust badges, integration displays
- **Key Assets**: SVG and PNG format logos of Fortune 500 companies

#### **7. UI Components & Backgrounds**
- **Location**: Root level (`bg.png`, `bg2.png`, etc.), various subdirectories
- **Content**: Background patterns, overlay graphics, decorative elements
- **Use Cases**: Hero section backgrounds, section dividers, page overlays
- **Key Assets**: Subtle patterns, gradient overlays, geometric shapes

#### **8. Payment & E-commerce**
- **Location**: `payments/`
- **Content**: Payment method logos (Visa, MasterCard, PayPal, American Express)
- **Use Cases**: Checkout pages, payment method displays, e-commerce trust signals
- **Key Assets**: Credit card logos, payment processor badges

#### **9. Educational & Events**
- **Location**: `course/`, `event/`
- **Content**: Educational imagery, event photography, conference materials
- **Use Cases**: Online learning platforms, event websites, educational institutions

#### **10. Specialized Services**
Additional niche categories:
- `cleaner/` - Cleaning services
- `insurance/` - Insurance industry
- `charity/` - Non-profit organizations
- `solar/` - Renewable energy
- `travel/` - Tourism and travel
- `podcast/` - Audio content creation

#### **11. Illustrations & Icons**
- **Location**: `illustrator/`, various `icons/` subdirectories
- **Content**: SVG illustrations, professional icons, service representations
- **Use Cases**: Feature sections, service explanations, process diagrams
- **Key Assets**: SEO illustrations, startup graphics, development icons

### VoIP AI Website Usage Guidelines

#### **Recommended Categories for VoIP Business**
1. **Primary**: `business/`, `saas/`, `corporate/` - Professional B2B imagery
2. **Technology**: `it/`, `digital/` - Tech-focused visuals
3. **People**: Professional portraits from root level and `client/`
4. **Brands**: `client/` logos for integration showcases
5. **Backgrounds**: Subtle `bg*.png` files for section backgrounds

#### **Asset Selection Best Practices**
1. **Professional Consistency**: Use business-appropriate imagery that matches the UAE corporate market
2. **Cultural Sensitivity**: Select diverse, internationally appropriate professional photos
3. **Brand Alignment**: Choose assets that reinforce the premium VoIP AI positioning
4. **Technical Relevance**: Prioritize tech-related imagery for feature demonstrations
5. **Quality Standards**: Use high-resolution images from the `saas/` and `business/` categories

#### **File Format Distribution**
- **JPG**: Photography, team photos, backgrounds (majority of assets)
- **PNG**: Logos, transparent graphics, overlays
- **SVG**: Scalable icons, brand logos, illustrations
- **MP3/MP4**: Audio/video samples for multimedia sections

### Integration with VoIP Components

#### **Current Usage in Modular Components**
- **Hero Section**: Professional portraits for credibility
- **Client Testimonials**: Diverse professional headshots from `client/`
- **Business Partners**: Brand logos from `client/` directory
- **Industry Solutions**: Sector-specific imagery from relevant categories
- **Feature Demonstrations**: SaaS dashboard mockups from `saas/`

#### **Recommended Additions for VoIP Features**
1. **Communication Focus**: Use `business/` team collaboration images
2. **Technology Integration**: Incorporate `saas/` dashboard screenshots
3. **Global Reach**: Utilize diverse professional portraits for international appeal
4. **Trust Signals**: Leverage major brand logos for integration showcases

### Asset Optimization Notes
- All images are optimized for web use
- Multiple size variations available for responsive design
- Consistent naming conventions across categories
- Dark/light theme variations where applicable