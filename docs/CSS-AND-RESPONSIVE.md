# CSS Management and Responsive Design Standards

This document contains detailed specifications for CSS file management, responsive design requirements, and layout standards.

## 🚨 CRITICAL: CSS File Management Guidelines

### FORBIDDEN: Never Write CSS in Blade Files
**ABSOLUTELY NEVER write `<style>` tags or inline CSS directly in Blade template files.**

#### ❌ FORBIDDEN PRACTICES:
```blade
<!-- NEVER DO THIS -->
<style>
.custom-class {
    color: red;
}
</style>

<!-- NEVER DO THIS -->
<div style="color: red; background: blue;">Content</div>
```

#### ✅ REQUIRED CSS LOCATION:
**ALL custom CSS MUST be written in the appropriate CSS files:**

1. **Global Styling**: `public/assets/css/voip-home.css` (for site-wide components like audio players, buttons)
2. **Landing Page Specific**: `public/assets/css/solutions/[page-name].css` (for page-specific styles)
3. **Tailwind Utilities**: Use existing Tailwind classes when possible

#### 🏗️ CSS Architecture Structure
```
public/assets/css/
├── voip-home.css                    # Global styles (audio players, buttons, etc.)
├── solutions/
│   ├── real-estate.css             # Real estate landing page specific
│   ├── medical.css                 # Medical landing page specific
│   ├── restaurant.css              # Restaurant landing page specific
│   └── [industry].css              # Other industry-specific styles
└── features/
    ├── pricing.css                 # Pricing page specific
    ├── features.css                # Features page specific
    └── about.css                   # About page specific
```

#### 📋 CSS File Inclusion Guidelines
**Each landing page MUST include its specific CSS file:**
```blade
@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/solutions/real-estate.css') }}">
@endpush
```

#### 🎯 CSS Separation Rules
- **Global Components**: Audio players, navigation, footers → `voip-home.css`
- **Page-Specific**: ROI calculators, industry demos → `solutions/[page].css`  
- **Reusable Elements**: Buttons, cards, forms → `voip-home.css`
- **Animations**: Page-specific animations → individual CSS files

#### ✅ PROPER CSS IMPLEMENTATION:
```css
/* In public/assets/css/voip-home.css */

/* Regular CSS classes */
.custom-button {
    background-color: var(--voip-primary);
    color: white;
    padding: 1rem 2rem;
    border-radius: 0.5rem;
}

/* Responsive CSS with media queries when needed */
@media (min-width: 900px) and (max-width: 1024px) {
    .hero-heading-960 {
        font-size: 2.25rem !important;
        line-height: 2.5rem !important;
    }
}

/* CSS Variables */
:root {
    --custom-color: #1ec08d;
}
```

#### ✅ PROPER BLADE USAGE:
```blade
<!-- Use CSS classes, not inline styles -->
<h1 class="hero-heading-960 font-bold text-white">Title</h1>

<!-- Use Tailwind utilities when possible -->
<div class="bg-voip-primary text-white p-4">Content</div>
```

#### CSS Organization Rules:
- ✅ **Separation of Concerns**: Keep styling separate from markup
- ✅ **Maintainability**: Centralized CSS files for easier updates
- ✅ **Performance**: Avoid inline styles that can't be cached
- ✅ **Consistency**: Use CSS variables and Tailwind utilities
- ✅ **Debugging**: Easier to debug and modify styles

**This rule ensures clean, maintainable, and professional code architecture.**

## 🚨 CRITICAL: Responsive Layout & Design Standards

### 📱 Responsive Button Layouts - MANDATORY REQUIREMENTS

#### ❌ FORBIDDEN Button Container Patterns:
```html
<!-- NEVER USE - Not responsive on all screen sizes -->
<div class="flex flex-col sm:flex-row gap-4 justify-center">
    <button>Button 1</button>
    <button>Button 2</button>
</div>

<!-- NEVER USE - Fixed layouts that break on medium screens -->
<div class="grid grid-cols-2 gap-4">
    <button>Button 1</button>
    <button>Button 2</button>
</div>
```

#### ✅ REQUIRED Button Container Pattern:
```html
<!-- ALWAYS USE - Handles all screen sizes properly -->
<div class="flex flex-wrap gap-3 sm:gap-4 items-center justify-center">
    <button class="px-8 py-4">Primary Button</button>
    <button class="px-8 py-4">Secondary Button</button>
</div>
```

#### 🔧 Responsive Button Guidelines:
1. **Always use `flex-wrap`**: Allows buttons to wrap to new lines on small screens
2. **Use progressive gaps**: `gap-3 sm:gap-4` for better spacing control
3. **Include `items-center`**: Ensures proper vertical alignment
4. **Add `justify-center`**: Centers button groups horizontally
5. **Consistent padding**: Use standard `px-8 py-4` for all CTA buttons

### 📏 Consistent Item Heights - MANDATORY REQUIREMENTS

#### ❌ COMMON HEIGHT PROBLEMS:
- Cards with different content lengths creating uneven layouts
- Grid items with varying heights causing misalignment
- Feature boxes that don't maintain consistent proportions
- Testimonial cards with different heights breaking the visual flow

#### ✅ REQUIRED Height Consistency Solutions:

**Method 1: CSS Grid with Equal Heights**
```html
<div class="grid lg:grid-cols-3 gap-6">
    <div class="flex flex-col h-full"> <!-- h-full ensures equal height -->
        <div class="flex-1"> <!-- flex-1 for content area -->
            <h3>Title</h3>
            <p>Variable content...</p>
        </div>
        <div class="mt-4"> <!-- Fixed position for buttons/actions -->
            <button>Action</button>
        </div>
    </div>
</div>
```

**Method 2: Fixed Height Containers**
```html
<!-- For content that should be consistent -->
<div class="h-64 p-6 rounded-xl"> <!-- Fixed height: h-64 -->
    <h3 class="text-xl font-bold mb-3">Title</h3>
    <p class="text-sm line-clamp-3">Content...</p> <!-- Clamp text -->
</div>
```

**Method 3: CSS Height Standardization**
```css
/* Add to voip-home.css for consistent card heights */
.uniform-card {
    min-height: 320px; /* Standardized minimum height */
    display: flex;
    flex-direction: column;
}

.uniform-card-content {
    flex: 1; /* Takes remaining space */
}

.uniform-card-footer {
    margin-top: auto; /* Pushes to bottom */
}
```

#### 🎯 Implementation Requirements:
1. **Test all screen sizes**: Desktop, tablet, mobile layouts
2. **Use equal height utilities**: `h-full`, `min-h-[XXX]`, `flex-1`
3. **Plan content containers**: Separate content from actions/buttons
4. **Limit text with clamps**: Use `line-clamp-3`, `line-clamp-4` for descriptions
5. **Visual testing**: Check all items align properly in grids

### 🔍 Quality Assurance Checklist:

**Before committing any section with buttons or cards:**
- [ ] **Responsive Test**: Check mobile (375px), tablet (768px), desktop (1024px+)
- [ ] **Button Wrapping**: Ensure buttons wrap properly on all screen sizes
- [ ] **Height Consistency**: All items in the same row have equal heights
- [ ] **Content Overflow**: Long content doesn't break layout
- [ ] **Visual Alignment**: Items align properly in grid/flex containers

### 📚 Reference Implementation:
**Good Example**: `resources/views/components/faq-section.blade.php` lines 104-111
- Uses `flex flex-wrap gap-3 sm:gap-4 items-center justify-center`
- Responsive across all screen sizes
- Maintains proper button alignment

**Apply this pattern to ALL sections with multiple buttons or cards.**