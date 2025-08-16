# TEMPLATES.md

Template pattern library and examples for the VoIP AI project.

## Template Structure Analysis
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

## Detailed Template Component Inventory

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

## Animation and Interaction Patterns
- **WOW.js Integration**: `wow animate__animated animate__fadeIn` classes
- **Timing Controls**: `data-wow-delay` for staggered animations
- **Hover Effects**: Built-in Tailwind hover utilities
- **Dark Mode Toggle**: Automatic theme switching script included
- **Mobile Navigation**: Responsive hamburger menu patterns

## Asset Management
- **Images**: Use `asset('assets/images/...')` helper
- **Icons**: Feather icons, Unicons, Material Design icons available
- **Fonts**: Nunito font family pre-configured
- **Scripts**: jQuery, Swiper, tiny-slider, Jarallax pre-loaded

## Available Template Icons (Unicons)

### **Common Business Icons**
- `uil uil-building` - Buildings/Headquarters
- `uil uil-calendar-alt` - Dates/Founded
- `uil uil-map-marker` - Locations/Addresses
- `uil uil-users-alt` - Teams/People
- `uil uil-rocket` - Innovation/Launch
- `uil uil-globe` - Global/International
- `uil uil-shield-check` - Security/Compliance
- `uil uil-server-network` - Technology/Infrastructure

### **Communication & Tech Icons**
- `uil uil-phone` - Phone/Calls
- `uil uil-comments-alt` - Chat/Communication
- `uil uil-headphones-alt` - Support/Customer Service
- `uil uil-microphone` - Voice/Audio
- `uil uil-wifi` - Connectivity/Network
- `uil uil-robot` - AI/Automation
- `uil uil-brain` - Intelligence/Smart
- `uil uil-database` - Data/Storage

### **Business Process Icons**
- `uil uil-chart-growth` - Growth/Analytics
- `uil uil-clock-three` - 24/7/Time
- `uil uil-award` - Achievement/Quality
- `uil uil-thumbs-up` - Approval/Success
- `uil uil-star` - Rating/Excellence
- `uil uil-heart` - Satisfaction/Love

### **UI/UX Icons**
- `uil uil-question-circle` - FAQ/Help
- `uil uil-info-circle` - Information
- `uil uil-check-circle` - Success/Completed
- `uil uil-angle-down` - Dropdown/Expand
- `uil uil-angle-up` - Collapse/Up
- `uil uil-external-link-alt` - External Links

### **Icon Usage Guidelines**
- **Size Classes**: `text-xl`, `text-2xl`, `text-3xl`, `text-4xl`, `text-5xl`, `text-6xl`
- **VoIP Colors**: Always use `style="color: var(--voip-link);"` for consistency
- **Spacing**: Add appropriate margin classes (`mb-4`, `me-4`, etc.)
- **Responsive**: Use responsive sizing (`lg:text-5xl`, `md:text-4xl`)

## Template Styling Pattern Library

### **4-Item Section Layout Patterns (Comprehensive Search Results)**

**Purpose**: Reference library of different styling approaches for displaying 4 feature/advantage items, gathered from template examples.

#### **1. Traditional Grid Cards Pattern**
**File**: `examples/Landing/resources/views/includes/Landings/index-marketing/solutions.blade.php`
- **Layout**: 4-column grid with shadow cards
- **Features**: `rounded-2xl bg-white dark:bg-slate-900` with `hover:shadow-md`
- **Icons**: Feather icons (codesandbox, send, star, bookmark)
- **Animation**: `duration-500` smooth transitions

#### **2. Horizontal Icon Cards with Hover Scale**
**File**: `examples/Landing/resources/views/includes/Landings/index-corporate/key-features1.blade.php`
- **Layout**: Compact horizontal cards with side-by-side icon and text
- **Features**: `hover:scale-105` scale animation on hover
- **Icons**: Rotated feather icons with gradient backgrounds
- **Styling**: `-rotate-45 bg-gradient-to-r from-transparent to-indigo-600/10`

#### **3. Animated Staggered Cards (VoIP Current Style)**
**File**: `examples/Landing/resources/views/includes/Landings/index-saas/features.blade.php`
- **Layout**: Grid with WOW.js animations
- **Features**: `wow animate__animated animate__fadeInUp` with `data-wow-delay`
- **Timing**: Progressive delays from 0.1s to 1.7s
- **Best For**: Current VoIP website approach

#### **4. Split-Screen Layout (6 Items Adaptable to 4)**
**File**: `examples/Landing/resources/views/includes/Landings/index-apps/key-features.blade.php`
- **Layout**: 3 items left, image center, 3 items right
- **Features**: `md:order-2 order-1` responsive reordering
- **Icons**: Circular backgrounds with hover color transitions

#### **5. Hexagon Icon Cards**
**File**: `examples/Landing/resources/views/includes/Landings/index-coworking/our-services1.blade.php`
- **Layout**: Grid with hexagon background shapes
- **Features**: `fill-indigo-600/5` hexagon backgrounds with absolute positioning
- **Icons**: Unicons centered within hexagon shapes

#### **6. AI Process Flow Cards**
**File**: `examples/Landing/resources/views/includes/Landings/index-ai/features3.blade.php`
- **Layout**: Process step cards with connecting arrows
- **Features**: Large gradient text icons with watermark backgrounds
- **Icons**: `bg-gradient-to-tl to-indigo-600 from-red-600` with `opacity-5 text-9xl`

#### **7. Image Overlay Cards with Reveal Effect**
**File**: `examples/Landing/resources/views/includes/Landings/index-gym/features5.blade.php`
- **Layout**: Cards with hidden image overlays
- **Features**: `hidden group-hover:block` hover reveals
- **Border**: `border-t-8 border-indigo-600/50` top accent borders

### **Reusable Styling Techniques**

#### **Color & Effects Patterns:**
- **VoIP Theme Integration**: Replace any `indigo-600` with `style="color: var(--voip-link);"`
- **Gradient Backgrounds**: `bg-gradient-to-r from-transparent to-indigo-600/10`
- **Hover Glows**: `hover:shadow-md dark:hover:shadow-gray-700`
- **Scale Animations**: `hover:scale-105 duration-500`

#### **Icon Presentation Styles:**
- **Circular with Rotation**: `-rotate-45` with `rotate-45` counter-rotation
- **Hexagon Backgrounds**: Feather hexagon shapes with centered icons
- **Gradient Text Icons**: Material Design icons with color gradients
- **Watermark Icons**: Large background icons with low opacity (`opacity-5 text-9xl`)

#### **Border & Accent Techniques:**
- **Top Borders**: `border-t-8 border-indigo-600/50`
- **Dashed Borders**: `border border-dashed border-white/30` (current VoIP style)
- **Left Accent**: `border-left: 4px solid var(--voip-link)`
- **Gradient Outlines**: Subtle gradient border effects

#### **Grid System Options:**
- **Equal 4-Column**: `lg:col-span-3 md:col-span-6`
- **2x2 Grid**: `grid-cols-1 md:grid-cols-2` (current VoIP approach)
- **4-Column**: `grid-cols-1 md:grid-cols-2 lg:grid-cols-4`
- **Split Layout**: 3-image-3 arrangement for 6 items

#### **Animation Approaches:**
- **WOW.js Integration**: `wow animate__animated animate__fadeInUp`
- **Staggered Delays**: `data-wow-delay="{{ 0.1 + ($index * 0.2) }}s"`
- **Hover Transforms**: `hover:scale-105 hover:shadow-md`
- **Progressive Reveals**: Sequential timing delays

### **VoIP-Specific Adaptations:**
When adapting any template pattern for VoIP website:
1. **Replace all `indigo-600` with `var(--voip-link)`**
2. **Use VoIP background**: `style="background-color: var(--voip-dark-bg);"`
3. **Apply VoIP hover effects**: `onmouseover="this.style.backgroundColor='rgba(30, 192, 141, 0.05)'"`
4. **Maintain accessibility**: Ensure proper contrast with VoIP dark themes
5. **Use consistent animations**: Stick with `duration-500` and WOW.js patterns