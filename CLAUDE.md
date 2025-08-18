# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is "Techwind" - a Laravel 12 SaaS/software landing template purchased from ThemeForest that has been fully transformed into **Sawtic** - a comprehensive **AI call center and business solutions website** targeting UAE and Middle East enterprises. The original template has been extensively customized with AI-powered communication solutions, call center automation, and UAE regulatory compliance features.

**Business Context**: Sawtic (sawtic.com) is a Dubai-based AI solution provider specializing in AI call centers, business automation, and intelligent communication solutions designed specifically for the UAE market. The platform includes advanced AI features, bilingual support (English/Arabic), UAE TDRA compliance, and enterprise-grade functionality.

## Company Information

**Sawtic** is headquartered in Dubai, UAE, serving clients across the MENA region with cutting-edge AI solutions.

### **🇦🇪 Dubai Headquarters (UAE)**
**Address**: Suite 1401, Gate Building, Dubai International Financial Centre (DIFC)  
**City**: Dubai, United Arab Emirates  
**Postal Code**: P.O. Box 74777  
**Phone**: +971 4 864 7245  
**Email**: dubai@sawtic.com  
**Website**: https://sawtic.com

Our Dubai office provides 24/7 support and is equipped with state-of-the-art AI call center technology for live demonstrations and client consultations.

## Current Implementation Status

✅ **COMPLETED - Full Sawtic AI Solution Website**
- **Homepage**: 12-section Grok-inspired layout with interactive demos, currency toggle (USD/AED), and UAE-focused content
- **Features Page**: Comprehensive AI capabilities showcase with UAE-specific optimizations
- **Pricing Page**: Three-tier pricing with USD/AED currency toggle and UAE-focused plans
- **About Page**: Complete company story with UAE journey, team stats, and future vision  
- **Navigation**: Clean navbar with theme toggle, language switcher (EN/AR), and proper alignment
- **Styling**: Custom Sawtic AI theme with animations, floating elements, and premium card effects
- **Functionality**: Interactive JavaScript features, responsive design, and WOW.js animations
- **✨ NEW: Modular Architecture**: Homepage refactored into 14 reusable Blade components for better maintainability

## Design Guidelines for Unique Section Styling

### **🎨 CRITICAL: Unique Design Requirement**
**EVERY section within a page MUST have a completely unique design style. NEVER repeat the same layout patterns, card designs, or visual approaches within the same page.**

**Forbidden Practices:**
- ❌ Using the same card layout for multiple sections on one page
- ❌ Repeating grid patterns with identical styling
- ❌ Copying hover effects, animations, or transitions between sections
- ❌ Reusing the same background patterns or gradients

**Required Approach:**
- ✅ Each section must have its own distinctive visual identity
- ✅ Use different layout approaches: magazine style, dashboard style, timeline style, comparison table style, etc.
- ✅ Vary card designs: some with borders, some with shadows, some with gradients, some with images
- ✅ Mix interaction patterns: different hover effects, animations, and transitions per section
- ✅ Create visual hierarchy through unique typography, spacing, and color usage

**Design Variety Examples:**
1. **Section 1**: Magazine-style layout with side-by-side content and stats
2. **Section 2**: Dashboard-style with live metrics and charts
3. **Section 3**: Timeline/process flow with connected steps
4. **Section 4**: Comparison table with feature highlights
5. **Section 5**: Testimonial carousel with customer stories
6. **Section 6**: Interactive demo with step-by-step walkthrough

This ensures each page section provides a fresh, engaging experience while maintaining overall brand consistency through VoIP theme colors and typography.

## Current Live Pages

1. **Homepage** (`/`) - Complete 12-section AI solution showcase
2. **Features Page** (`/features`) - Comprehensive AI capabilities  
3. **Pricing Page** (`/pricing`) - Complete pricing strategy
4. **About Page** (`/about`) - Full company story
5. **Contact Page** (`/contact-us`) - Contact form (existing)
6. **Privacy Policy** (`/privacy`) - UAE GDPR & TDRA compliance
7. **Terms of Service** (`/terms`) - AI call center legal framework

## Git Workflow for Team Development

### **🌿 4-Branch Structure Overview**
```
📊 Sawtic Git Workflow:
main     → Production branch (live website)
dev      → Shared development branch (hamed ↔ ashkan)  
hamed    → Hamed's personal development branch
ashkan   → Ashkan's personal development branch
```

**Flow Direction:** `hamed/ashkan → dev → main → production server`

### **🚨 CRITICAL: Branch-Specific Commands**

#### **For Hamed & Ashkan (Development Branches)**

**🔄 When user says "sync to dev" or "share work":**
```bash
./scripts/sync-to-dev.sh "commit message"
```
- ✅ Commits changes on current branch (hamed/ashkan)
- ✅ Pushes current branch to origin
- ✅ Merges current branch to dev (shared development)
- ✅ Updates current branch with any dev changes
- ✅ Makes work available to other developer

**⬇️ When user says "pull from dev" or "get updates":**
```bash
./scripts/pull-from-dev.sh
```
- ✅ Stashes uncommitted changes safely
- ✅ Pulls latest dev changes (other developer's work)
- ✅ Merges dev to current branch (hamed/ashkan)
- ✅ Restores stashed changes if any

**📥 When user says "pull" (from production):**
```bash
./scripts/git-pull.sh
```
- ✅ Gets production updates from main branch
- ✅ Same as existing workflow but for any branch

#### **For Dev Branch (Shared Development)**

**🚀 When user says "deploy to production" or "merge to main":**
```bash
./scripts/merge-to-production.sh "production release message"
```
- ✅ Merges dev → main (production ready)
- ✅ Updates all branches with production changes
- ✅ Prepares for server deployment

#### **For Production Deployment**

**📡 When user says "deploy to server" or "go live":**
```bash
./scripts/deploy-production.sh
```
- ✅ Deploys main branch to production server
- ✅ Same as existing production deployment

**🚀 When user says "complete deployment" or "deploy with merge":**
```bash
./scripts/deploy-with-merge.sh "deployment message"
```
- ✅ Complete pipeline: dev → main → production server
- ✅ One command for full deployment workflow

#### **Emergency Procedures**

**🚨 When user says "hotfix" or "emergency fix":**
```bash
./scripts/hotfix-to-main.sh "HOTFIX: critical issue description"
```
- ⚠️ **BYPASS dev workflow** for critical production fixes
- ✅ Direct merge to main from any branch
- ✅ Syncs hotfix back to all branches
- ✅ Interactive confirmation required

### **📊 Branch Status & Navigation**

**🔍 When user says "status" or "check branches":**
```bash
./scripts/branch-status.sh
```
- 📈 Shows status of all 4 branches
- 📍 Current branch and working directory status  
- 💡 Available actions based on current branch
- 📋 Commits ahead/behind main for each branch

### **🎯 Workflow Decision Tree**

```
👤 Current Branch → Recommended Action
├─ hamed/ashkan   → ./scripts/sync-to-dev.sh (share work)
│                 → ./scripts/pull-from-dev.sh (get updates)  
├─ dev            → ./scripts/merge-to-production.sh (deploy)
├─ main           → ./scripts/deploy-production.sh (server)
└─ any branch     → ./scripts/hotfix-to-main.sh (emergency)
```

### **🔒 Safety Features**
- ✅ **Branch Validation**: Scripts only work on appropriate branches
- ✅ **Conflict Detection**: Automatic merge conflict handling
- ✅ **Stash Management**: Auto-stash/restore uncommitted changes
- ✅ **Interactive Confirmation**: For destructive operations
- ✅ **Status Reporting**: Clear success/failure feedback

### **Branch Management Rules**
- **Always work on feature branches** (never directly on main)
- **Main branch** is protected and always deployable
- **All changes** must go through proper merge workflow
- **Never force push** to main or shared branches
- **Pull before push** to avoid conflicts

### **Commit Message Standards**
```
[Type] Brief description

- Detailed change 1
- Detailed change 2
- Impact or reasoning

🤖 Generated with [Claude Code](https://claude.ai/code)

Co-Authored-By: Claude <noreply@anthropic.com>
```

**Types**: feat, fix, style, refactor, docs, test, chore

### **🚀 CRITICAL: Production Deployment Protocol**

#### **When user says "deploy to production" or "deploy live":**
Execute this production deployment workflow:

**Execute production deployment**: `./scripts/deploy-production.sh`

**The deployment script handles:**
- ✅ Builds assets locally (if needed)
- ✅ Deploys main branch to production server (167.235.254.56)
- ✅ Installs production dependencies
- ✅ Optimizes Laravel for production (caches configs, routes, views)
- ✅ Sets proper file permissions
- ✅ Copies fresh build assets to server
- ✅ Tests deployment and confirms website is live

#### **For quick production updates (minor changes):**
**Execute quick deployment**: `./scripts/quick-deploy.sh`

**The quick script handles:**
- ✅ Pulls latest changes from main branch
- ✅ Clears Laravel caches
- ✅ Sets permissions
- ✅ Tests deployment

#### **Production Server Details:**
- **URL**: http://167.235.254.56
- **Server**: Hetzner CentOS Stream 10
- **Path**: /home/sawtic
- **Web Server**: Nginx + PHP 8.3 + Laravel 12

**IMPORTANT**: Only deploy from main branch after proper testing and merging!

## ✨ NEW: Modular Component Architecture

### **🚨 MANDATORY: Page Segmentation Strategy**
**EVERY new page MUST be divided into logical segments and saved as separate Blade files**

#### **Page Organization Rules**
1. **Divide each page** into 3-8 logical segments based on content
2. **Create page-specific folder** in `resources/views/components/[page-name]/`
3. **Save each segment** as separate Blade file in the page folder
4. **Shared components** stay in root `resources/views/components/` folder
5. **All content data** must be stored in `resources/data/` folder

#### **File Structure Pattern**
```
resources/views/
├── [page-name].blade.php           # Main page with @include statements
├── components/
│   ├── [page-name]/                # Page-specific segments folder
│   │   ├── hero-section.blade.php  # Page hero
│   │   ├── content-section.blade.php # Main content
│   │   ├── features-grid.blade.php # Features/benefits
│   │   └── cta-section.blade.php   # Call to action
│   ├── shared/                     # Shared components (across pages)
│   │   ├── navbar.blade.php
│   │   ├── footer.blade.php
│   │   └── pricing-card.blade.php
│   └── background-blurs.blade.php  # Homepage components (legacy)
└── data/
    ├── [page-name]/                # Page-specific data folder
    │   ├── hero.json
    │   ├── features.json
    │   └── testimonials.json
    └── shared/                     # Shared data files
        └── navigation.json
```

#### **Example: Features Page Structure**
```
resources/views/
├── features.blade.php
├── components/features/
│   ├── hero-section.blade.php
│   ├── ai-capabilities.blade.php
│   ├── integration-showcase.blade.php
│   └── feature-comparison.blade.php
└── data/features/
    ├── hero.json
    ├── ai-capabilities.json
    └── integrations.json
```

#### **Reusability Guidelines**
- **Page-specific segments**: Keep in `components/[page-name]/` folder
- **Cross-page components**: Move to `components/shared/` folder
- **When in doubt**: Start page-specific, move to shared if reused later

### Homepage Component System
The Sawtic homepage has been completely refactored from a monolithic 976-line file into **14 reusable, maintainable Blade components**. This modular architecture follows Laravel best practices and significantly improves code organization.

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

## 📊 Data Management with JSON Files

### **🚨 MANDATORY REQUIREMENT: JSON Data Storage**
**ALL new sections, components, and content MUST store data in separate JSON files**

#### **JSON File Structure Requirements**
```
resources/data/
├── faqs.json              # FAQ section data
├── who-we-are.json        # Company information  
└── [section-name].json    # Future section data
```

#### **Required JSON Structure**
```json
{
    "section": {
        "title": "Section Title",
        "subtitle": "Section Subtitle", 
        "description": "Section description"
    },
    "items": [
        {
            "id": 1,
            "title": "Item Title",
            "description": "Item description",
            "priority": 1,
            "delay": "0.1s"
        }
    ],
    "metadata": {
        "version": "1.0",
        "last_updated": "2025-01-14",
        "total_count": 1,
        "section_type": "content_type"
    }
}
```

#### **Component Implementation Pattern**
```php
@php
$data = json_decode(file_get_contents(resource_path('data/section-name.json')), true);
$sectionData = $data['section'] ?? [];
$items = $data['items'] ?? [];

// Sort by priority if available
usort($items, function($a, $b) {
    return ($a['priority'] ?? 999) <=> ($b['priority'] ?? 999);
});
@endphp
```

#### **🚨 CRITICAL: NO FALLBACK CODE POLICY**
**NEVER write fallback data or try-catch blocks for JSON data loading unless explicitly requested by user**

**Forbidden:**
- ❌ `try-catch` blocks around JSON loading
- ❌ Fallback arrays or default data
- ❌ Error handling for missing JSON files
- ❌ Default values like `'Fallback Title'`

**Required:**
- ✅ Direct JSON loading without error handling
- ✅ Trust that JSON files exist and are valid
- ✅ Use null coalescing (`??`) for optional array keys only
- ✅ Let the application fail if JSON is missing (intended behavior)

#### **Client-Side Loading Error Handling**
**ONLY when specifically requested by user, add simple HTML error messages for client-side fetch failures:**

```html
<!-- Only for client-side data fetching -->
<div id="loading-error" class="hidden p-4 rounded-xl border border-red-200 text-red-800" style="background: rgba(239, 68, 68, 0.1);">
    <div class="flex items-center">
        <i class="uil uil-times-circle text-red-600 text-xl mr-3"></i>
        <span>Failed to load content. Please refresh the page.</span>
    </div>
</div>
```

**Note**: This is ONLY for client-side JavaScript fetch operations, NOT for server-side JSON file loading.

#### **🚨 MANDATORY: Page Navigation Integration**
**EVERY time you create a new page, you MUST update navigation links across the site:**

**Required Updates:**
1. **Top Navigation Menu** (`resources/views/includes/navbar.blade.php`)
   - Add page link to main navigation menu
   - Ensure proper active state styling
   - Add mobile menu support if needed

2. **Footer Navigation** (`resources/views/includes/footer.blade.php`) 
   - Add page link to appropriate footer section
   - Update sitemap links if present

3. **Related Pages Cross-Links**
   - Add links from relevant existing pages
   - Update breadcrumb navigation where applicable
   - Add call-to-action buttons pointing to new page

4. **Route Definition** (`routes/web.php`)
   - Ensure proper route is defined and accessible
   - Test route functionality

**Example Integration:**
```php
// In navbar.blade.php navigation menu
<li><a href="{{ url('/new-page') }}" class="sub-menu-item">New Page</a></li>

// In footer.blade.php
<li><a href="{{ url('/new-page') }}">New Page</a></li>

// In related pages - add CTA buttons
<a href="{{ url('/new-page') }}" class="hover-voip-button">Visit New Page</a>
```

**🚨 CRITICAL**: Never create orphaned pages. Every page must be discoverable through site navigation.

## Sawtic AI Brand Theme System

**🚨 CRITICAL REQUIREMENT: ALL new sections, components, and UI elements MUST use Sawtic theme colors**

The Sawtic website uses a custom color scheme defined in `public/assets/css/voip-home.css`:

#### **Sawtic AI Theme CSS Variables**
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

/* Note: CSS variables retain 'voip-' prefix for technical compatibility */
```

#### **MANDATORY Usage Guidelines**

**🎨 Section Background Colors (REQUIRED)**
```html
<!-- Main content sections -->
<section style="background-color: var(--voip-bg);">

<!-- Hero/navbar sections -->  
<section style="background-color: var(--voip-dark-bg);">
```

**🔗 Button & Interactive Elements (REQUIRED)**
```html
<!-- Primary buttons -->
<a style="background-color: var(--voip-primary);" class="hover-voip-button">

<!-- Links and accents -->
<span style="color: var(--voip-link);">
```

**📝 Text Color Standards (MANDATORY)**
- **Section titles**: `text-white` (never use dark colors on VoIP backgrounds)
- **Descriptions**: `text-slate-300` (light gray for readability)
- **Subheadings/labels**: `style="color: var(--voip-link);"` (Sawtic accent color)
- **Icons**: `style="color: var(--voip-link);"` for consistency

**🚨 FORBIDDEN AI DESIGN CLICHÉS - NEVER USE**
- ❌ **Floating dots/bullets** anywhere on backgrounds
- ❌ **Central hub designs** with connecting lines
- ❌ **Hexagon layouts** or geometric pattern backgrounds
- ❌ **Rotating elements** or spinning animations
- ❌ **Glass-morphism overuse** (backdrop-blur everywhere)
- ❌ **Generic "Revolutionary" design patterns**

**✅ UNIQUE DESIGN PRINCIPLES**
- ✅ **Clean, professional layouts** that serve business purposes
- ✅ **Purposeful animations** that enhance user experience
- ✅ **Consistent Sawtic branding** without gimmicky effects
- ✅ **Business-appropriate styling** for UAE corporate market

## Error Checking Protocol

**MANDATORY AFTER EVERY CHANGE:**
1. **Ask user to run project**: "Please run the project now to test the changes"
2. **Wait for confirmation**: User runs `composer run dev` or visits site
3. **Check logs**: "Now shall I check logs to see if any new errors occurred?"
4. **Fix any issues**: Read `storage/logs/laravel.log` for new errors only
5. **Never skip this step**: Essential for maintaining project stability

## Additional Documentation

For detailed information, see:
- **docs/DEVELOPMENT.md** - Development commands, setup, and workflows
- **docs/STYLING.md** - Complete styling guidelines and patterns
- **docs/TEMPLATES.md** - Template pattern library and examples
- **docs/ASSETS.md** - Image library and asset management
