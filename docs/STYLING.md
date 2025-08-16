# STYLING.md

Complete styling guidelines and patterns for the VoIP AI project.

## VoIP AI Brand Theme System

**🚨 CRITICAL REQUIREMENT: ALL new sections, components, and UI elements MUST use VoIP theme colors**

**⚠️ NEVER use generic Tailwind colors like `bg-slate-50`, `bg-gray-100`, or `bg-white` for sections**
**✅ ALWAYS use VoIP theme CSS variables for consistent branding**

The VoIP AI website uses a custom color scheme defined in `public/assets/css/voip-home.css`:

### **VoIP Theme CSS Variables**
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

### **MANDATORY Usage Guidelines for ALL New Components**

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

**✨ Hover Effects & Glowing (CRITICAL REQUIREMENT)**
```html
<!-- VoIP theme glow effects -->
<div onmouseover="this.style.boxShadow='0 0 20px rgba(30, 192, 141, 0.3)'" 
     onmouseout="this.style.boxShadow='none'">

<!-- Border hover with VoIP colors -->
<a onmouseover="this.style.borderColor='var(--voip-link)'" 
   onmouseout="this.style.borderColor='rgba(255,255,255,0.1)'">

<!-- Background hover effects -->
<button onmouseover="this.style.backgroundColor='var(--voip-primary)'" 
        onmouseout="this.style.backgroundColor='transparent'">
```

**🚨 FORBIDDEN AI DESIGN CLICHÉS - NEVER USE**
- ❌ **Floating dots/bullets** anywhere on backgrounds
- ❌ **Central hub designs** with connecting lines
- ❌ **Hexagon layouts** or geometric pattern backgrounds
- ❌ **Rotating elements** or spinning animations
- ❌ **Glass-morphism overuse** (backdrop-blur everywhere)
- ❌ **Flag-themed headers** with colored bars
- ❌ **Hub-and-spoke layouts** with central focal points
- ❌ **Connection lines** between elements
- ❌ **Floating icon badges** positioned above cards
- ❌ **Map silhouettes** or geographic patterns
- ❌ **Gradient text effects** on every title
- ❌ **Generic "Revolutionary" design patterns**
- ❌ **Pulsing animations** on decorative elements

**✅ UNIQUE DESIGN PRINCIPLES**
- ✅ **Clean, professional layouts** that serve business purposes
- ✅ **Purposeful animations** that enhance user experience
- ✅ **Consistent VoIP branding** without gimmicky effects
- ✅ **Readable typography** with proper contrast
- ✅ **Functional hover states** that provide clear feedback
- ✅ **Business-appropriate styling** for UAE corporate market

## ♿ ACCESSIBILITY REQUIREMENTS (MANDATORY)

**🔥 CRITICAL: Never Remove Focus Outlines**
```css
/* FORBIDDEN - Never do this */
*:focus { outline: none; }
button:focus { outline: none; }

/* REQUIRED - Global focus override (implemented in voip-home.css) */
*:focus,
*:focus-visible,
button:focus,
a:focus,
input:focus,
textarea:focus,
select:focus {
    outline: 2px solid var(--voip-link) !important;
    outline-offset: 2px !important;
    box-shadow: 0 0 0 4px rgba(30, 192, 141, 0.15) !important;
}
```

**🚨 BLUE GLOW ISSUE RESOLVED GLOBALLY & PERMANENTLY**
The website now has comprehensive focus outline overrides that:
- ✅ **Override all browser defaults** (Chrome blue, Firefox orange, Safari blue)
- ✅ **Override Tailwind focus utilities** (.focus:ring-blue-500, .focus:outline-indigo-500, etc.)
- ✅ **Use VoIP theme colors consistently** (#1ec08d green instead of blue)
- ✅ **Maintain accessibility** with proper contrast and visibility
- ✅ **Apply with !important** to ensure precedence over all other styles

**🎭 ANIMATION CLASSES BLUE GLOW - PERMANENT SOLUTION**
**CRITICAL**: Animation wrapper classes (`.wow`, `.group`, `.animated`, `.premium-card`) were causing blue focus outlines. This is now permanently resolved with:

```css
/* Remove focus from animation wrappers */
.wow:focus,
.group:focus,
[class*="animate__"]:focus,
.premium-card:focus,
.uae-card:focus {
    outline: none !important;
    box-shadow: none !important;
}

/* VoIP focus ONLY on interactive elements inside */
.wow a:focus, .group button:focus, etc. {
    outline: 2px solid var(--voip-link) !important;
    box-shadow: 0 0 0 4px rgba(30, 192, 141, 0.15) !important;
}
```

**⚠️ FUTURE DEVELOPMENT RULE**
When adding new components with animation classes:
- ❌ **NEVER** allow focus on wrapper divs with `.wow`, `.group`, `.animated` classes
- ✅ **ALWAYS** ensure only interactive elements (a, button, input) within can receive focus
- ✅ **TEST** all new animated components by pressing Tab key to check for blue glows

**🎨 JAVASCRIPT COLOR THEME INTEGRATION**
**CRITICAL**: When applying colors in JavaScript, ALWAYS use CSS variables to maintain theme consistency:

```javascript
// CORRECT: Use setProperty() with CSS variables
this.style.setProperty('box-shadow', '0 25px 50px -12px var(--voip-hover)');

// ALTERNATIVE: Use getComputedStyle() for complex cases
const voipLinkColor = getComputedStyle(document.documentElement).getPropertyValue('--voip-link').trim();
this.style.boxShadow = `0 25px 50px -12px ${voipLinkColor}`;

// FORBIDDEN: Hardcoded colors in JavaScript
this.style.boxShadow = '0 25px 50px -12px rgba(79, 70, 229, 0.25)'; // Blue hardcoded

// NOTE: You CANNOT use var(--voip-link) directly in JavaScript strings
// this.style.boxShadow = '0 25px 50px -12px var(--voip-link)'; // WON'T WORK
```

**Available VoIP CSS Variables for JavaScript:**
- `--voip-bg` - Main background color
- `--voip-dark-bg` - Dark background color  
- `--voip-primary` - Primary button color
- `--voip-link` - Link and accent color (most common for glows)
- `--primary-gradient` - Full gradient definition

**Focus Style Implementation:**
- ✅ **Universal focus styles** applied via `*:focus` selector
- ✅ **VoIP theme colors** for focus indicators (`var(--voip-link)`)
- ✅ **Enhanced focus** for interactive elements with box-shadow
- ✅ **Proper contrast** - VoIP green (#1ec08d) provides excellent visibility
- ✅ **Consistent offset** (2px) for all focus indicators

**Keyboard Navigation Requirements:**
- ✅ **All interactive elements** must be keyboard accessible
- ✅ **Logical tab order** through components
- ✅ **Clear focus indicators** on all focusable elements
- ✅ **No focus traps** without proper escape mechanisms

**Testing Checklist:**
- [ ] Tab through entire page using keyboard only
- [ ] All buttons, links, and form elements have visible focus
- [ ] Focus indicators use VoIP theme colors
- [ ] No elements have `outline: none` without alternative focus styles
- [ ] Focus indicators have sufficient contrast (WCAG AA: 3:1 minimum)

**🚨 NEVER USE GENERIC BLUE/INDIGO GLOWS**
- ❌ `hover:shadow-blue-500/50` (generic blue glow)
- ❌ `hover:border-blue-400` (generic blue border)
- ❌ `shadow-lg shadow-indigo-500/50` (Tailwind default glow)
- ✅ **ALWAYS use VoIP theme colors**: `rgba(30, 192, 141, 0.3)` for glows

**🚫 FORBIDDEN Color Combinations**
- ❌ `bg-slate-50`, `bg-gray-100`, `bg-white` (breaks VoIP branding)
- ❌ `text-slate-900`, `text-gray-900` (invisible on VoIP dark backgrounds)  
- ❌ Generic `bg-indigo-600` (use `var(--voip-primary)` instead)
- ❌ Light backgrounds without VoIP theme integration
- ❌ **Any blue/indigo glow effects** (use VoIP green: #1ec08d)

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

## Legacy Template Color System  
The original template uses **Indigo** as the primary brand color throughout:
- **Primary**: `indigo-600` (#4F46E5) - Main brand color for buttons, links, accents
- **Primary Hover**: `indigo-700` (#4338CA) - Hover states
- **Primary Light**: `indigo-600/5`, `indigo-600/10` - Background overlays and subtle accents
- **Border**: `border-indigo-600` - Primary borders and outlines

**Note**: VoIP theme overrides these with CSS variables for consistent branding.

## Full Color Palette (Tailwind 4.1.6 OKLCH)
**Complete color system with 50-950 shades for each:**
- **Grays**: `slate`, `gray`, `zinc`, `neutral`, `stone`
- **Colors**: `red`, `orange`, `amber`, `yellow`, `lime`, `green`, `emerald`, `teal`, `cyan`, `sky`, `blue`, `indigo`, `violet`, `purple`, `fuchsia`, `pink`, `rose`
- **Each color has 11 shades**: 50, 100, 200, 300, 400, 500, 600, 700, 800, 900, 950

## Typography & Fonts
- **Primary Font**: `font-sans` (Poppins family) - Applied to `<body>` element
- **Current Font Configuration**: Poppins with all weights (100-900) normal and italic
- **Font Weights**: 100-900 available (thin to black)
- **Font Families Available**:
  - `font-sans` - Poppins (current primary font)
  - `font-serif` - Traditional serif stack  
  - `font-mono` - Monospace stack
- **Optimized Font Loading**: Poppins only (streamlined for performance)
- **🚨 CRITICAL: NEVER BREAK FONT LOADING LOGIC**: The system uses `is_localhost()` function for smart environment detection - DO NOT modify this logic

### Previous Font Configuration (Backup for Future Reference)
**Original Nunito Configuration** (saved 2025-08-15):
- **Google Fonts URL**: `https://fonts.googleapis.com/css2?family=Alex+Brush&family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Kaushan+Script&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap`
- **Tailwind Theme**: `--font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif`
- **Body Class**: `font-nunito`

### Complete Font Change Process (Step-by-Step Guide)

**CRITICAL: The website has a complex font loading system with multiple override layers. Follow ALL steps below to ensure fonts apply correctly.**

**Step 1: Update Font Loading (🚨 RESPECT is_localhost() LOGIC)**
- **File**: `resources/views/layouts/main.blade.php`
- **Location**: Lines 29-37 (Font loading conditional)
- **🚨 WARNING**: NEVER remove the `@if(is_localhost())` conditional logic
- **Action**: Update only the font family name within the existing conditional structure
- **Local Path**: Update `local-fonts.css` for localhost fonts
- **Production Path**: Update Google Fonts URL for production
- **CRITICAL**: Maintain the is_localhost() function for environment detection

**Step 2: Update Tailwind Font Configuration**
- **File**: `resources/css/app.css`
- **Location**: Lines 8-11 (`@theme` section)
- **Action**: Update `--font-sans` variable to use new font family
- **Example**: `--font-sans: 'Poppins', ui-sans-serif, system-ui, sans-serif, 'Apple Color Emoji'...`

**Step 3: Update Body Font Class**
- **File**: `resources/views/layouts/main.blade.php`
- **Location**: Line 46 (body tag)
- **Action**: Change body class to use appropriate font utility
- **Standard**: Use `font-sans` for custom fonts defined in Tailwind theme
- **Legacy**: Use `font-[fontname]` for specific font classes (e.g., `font-nunito`)

**Step 4: Override CSS Conflicts (CRITICAL)**
- **File**: `public/assets/css/voip-home.css`
- **Location**: `:root` section (around line 18)
- **Action**: Add font override with `!important` to ensure precedence
- **Code**: `--font-sans: 'YourFont', ui-sans-serif, system-ui, sans-serif !important;`
- **Why**: The main `tailwind.css` file loads after `app.css` and overrides font settings

**Step 5: Environment-Specific Font Loading (OPTIMIZED SYSTEM)**
- **Localhost**: Uses `local-fonts.css` for instant loading during development
- **Production**: Uses Google Fonts CDN for reliability and performance
- **Logic**: Controlled by `is_localhost()` helper function in main.blade.php
- **🚨 NEVER BREAK**: The conditional font loading system is optimized for both environments

**Step 6: Clear Browser Cache**
- Browser caches can prevent new fonts from loading
- Hard refresh (Ctrl+F5 / Cmd+Shift+R) or clear browser cache
- Check Network tab in DevTools to verify font files are loading

**Font Loading Order (Critical Understanding):**
1. Google Fonts load in `<head>`
2. `app.css` sets initial `--font-sans` variable
3. `tailwind.css` overwrites with default Tailwind fonts
4. `voip-home.css` provides final override with `!important`
5. Body uses `font-sans` class which references final `--font-sans` value

## Dark Mode Implementation
- **Automatic Theme Detection**: Based on page routes (see main.blade.php:111-125)
- **Dark Mode Classes**: All components use `dark:` prefixes
- **Dark Pages**: Specific pages auto-enable dark mode (ai, crypto, photography, video, etc.)
- **Theme Switcher**: Built-in toggle button in main layout
- **Color Adaptation**: `dark:bg-slate-900`, `dark:text-white`, etc.

## Spacing System
- **Tailwind 4.x Spacing**: Uses CSS custom properties `calc(var(--spacing) * X)`
- **Available Scales**: 0.5, 1, 2, 3, 4, 5, 6, 8, 10, 12, 16, 20, 24, 32, 40, 48, 56, 64, 72, 80, 96
- **Extended Scales**: Up to 854 units for extreme layouts
- **Standard Usage**: `p-4`, `m-6`, `space-y-8`, etc.

## Animation & Effects
- **WOW.js Classes**: `wow animate__animated animate__fadeIn`
- **Delay Controls**: `data-wow-delay="0.1s"` to `data-wow-delay="1.1s"`
- **Transition Utilities**: `duration-500`, `ease-in-out`, `hover:` states
- **Transform Effects**: Available for rotations, scales, translations

## Responsive Design Patterns
- **Breakpoints**: `sm:`, `md:`, `lg:`, `xl:`, `2xl:`
- **Grid Systems**: `grid-cols-1`, `md:grid-cols-2`, `lg:grid-cols-3`
- **Responsive Typography**: `text-4xl lg:text-5xl`
- **Spacing Adjustments**: `mt-32 md:mt-44`

## SCSS/CSS Architecture
- **Vite Integration**: Uses `@tailwindcss/vite` plugin
- **CSS Entry Point**: `resources/css/app.css` with `@import 'tailwindcss'`
- **Source Watching**: Automatic compilation of Blade templates and JS files
- **Theme Customization**: Via `@theme` directive in app.css
- **Font Configuration**: Custom font stack in theme configuration

## Component Styling Guidelines for VoIP
- **Brand Colors**: Stick to VoIP theme variables for consistency
- **Professional Look**: Use slate grays for text, VoIP backgrounds
- **Business CTAs**: `style="background-color: var(--voip-primary);"` for primary buttons
- **Secondary Actions**: `style="border-color: var(--voip-primary); color: var(--voip-primary);"`
- **Subtle Accents**: Use VoIP theme variables for all accents and overlays