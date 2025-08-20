# Component Architecture and Data Management

This document contains detailed specifications for modular component architecture, page segmentation, and JSON data management.

## ✨ NEW: Modular Component Architecture

### 🚨 MANDATORY: Page Segmentation Strategy
**EVERY new page MUST be divided into logical segments and saved as separate Blade files**

#### Page Organization Rules
1. **Divide each page** into 3-8 logical segments based on content
2. **Create page-specific folder** in `resources/views/components/[page-name]/`
3. **Save each segment** as separate Blade file in the page folder
4. **Shared components** stay in root `resources/views/components/` folder
5. **All content data** must be stored in `resources/data/` folder

#### File Structure Pattern
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

#### Example: Features Page Structure
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

#### Reusability Guidelines
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

### 🚨 MANDATORY REQUIREMENT: JSON Data Storage
**ALL new sections, components, and content MUST store data in separate JSON files**

#### JSON File Structure Requirements
```
resources/data/
├── faqs.json              # FAQ section data
├── who-we-are.json        # Company information  
└── [section-name].json    # Future section data
```

#### Required JSON Structure
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

#### Component Implementation Pattern
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

#### 🚨 CRITICAL: NO FALLBACK CODE POLICY
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

#### Client-Side Loading Error Handling
**ONLY when specifically requested by user, add simple HTML error messages for client-side fetch failures:**

```html
<!-- Only for client-side data fetching -->
<div id="loading-error" class="hidden p-4 rounded-xl border border-red-200 text-red-800" style="background: rgba(239, 239, 239, 0.1);">
    <div class="flex items-center">
        <i class="uil uil-times-circle text-red-600 text-xl mr-3"></i>
        <span>Failed to load content. Please refresh the page.</span>
    </div>
</div>
```

**Note**: This is ONLY for client-side JavaScript fetch operations, NOT for server-side JSON file loading.

#### 🚨 MANDATORY: Page Navigation Integration
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