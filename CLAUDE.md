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

## Page Title Standards

### **🏷️ MANDATORY: Sawtic Brand Consistency in Page Titles**
**ALL pages MUST start with "Sawtic" in the page title for consistent brand recognition and SEO optimization.**

#### **Page Title Format**
```
Sawtic | [Page-Specific Description]
```

#### **Required Page Titles**
- **Homepage**: `Sawtic | AI Call Agents & Virtual Call Center Solutions in UAE`
- **Features Page**: `Sawtic | Advanced AI Call Center Features & Capabilities`
- **Pricing Page**: `Sawtic | AI Call Center Pricing Plans - UAE Business Solutions`
- **About Page**: `Sawtic | About Us - Leading AI Call Center Provider in Dubai`
- **Contact Page**: `Sawtic | Contact Us - AI Call Center Solutions in UAE`
- **Privacy Policy**: `Sawtic | Privacy Policy - Data Protection & AI Transparency`
- **Terms of Service**: `Sawtic | Terms of Service - AI Call Center Legal Framework`
- **Solutions Pages**: `Sawtic | AI Solutions for [Industry] - [Industry-Specific Benefits]`

#### **SEO Guidelines**
- ✅ **Always start with "Sawtic"** for brand recognition
- ✅ **Include UAE/Dubai** for local SEO targeting
- ✅ **Add AI/Call Center keywords** for search optimization
- ✅ **Keep total length** under 60 characters when possible
- ✅ **Make each title unique** and descriptive

#### **Implementation Requirements**
- Update all existing pages with proper Sawtic titles
- Ensure new pages follow this title format
- Include meta descriptions with Sawtic branding
- Use consistent title structure across all pages

## 🚀 Solutions Landing Pages System

### **📋 CRITICAL: 20+ Industry-Specific AI Solutions**
**Target Industries**: Real Estate ✅, Medical/Spas, Restaurants, Legal, Beauty/Wellness, Dental, Veterinary, Accounting, Construction, Home Services, Fitness, Auto, Travel, Insurance, Education, E-commerce, Events, etc.

**Architecture**: 8 solution components + JSON data files + voice demos + industry-specific images  
**Status**: Real Estate fully implemented and live

📋 **Detailed Specifications**: See [docs/SOLUTIONS-DETAILED.md](docs/SOLUTIONS-DETAILED.md) for complete requirements, architecture, content strategy, and implementation guidelines.

## 🚨 CRITICAL: Laravel Named Routes & SEO
📋 **Named Routes**: ALWAYS use `route('name')` instead of hardcoded URLs  
📋 **SEO Management**: Ask user before updating robots.txt and sitemaps for new pages  
📋 **Dynamic Sitemaps**: Must be generated from actual routes, not static files

📋 **Detailed Guidelines**: See [docs/ROUTES-AND-SEO.md](docs/ROUTES-AND-SEO.md) for complete named routes list, SEO workflow, and dynamic sitemap implementation.

## 🚨 CRITICAL: CSS Management & Responsive Design
📋 **CSS Rules**: NEVER write `<style>` tags in Blade files - use `voip-home.css` for global styles  
📋 **Responsive Buttons**: ALWAYS use `flex flex-wrap gap-3 sm:gap-4 items-center justify-center`  
📋 **Equal Heights**: Use `h-full`, `flex-1`, and proper grid structures for consistent layouts

📋 **Detailed Guidelines**: See [docs/CSS-AND-RESPONSIVE.md](docs/CSS-AND-RESPONSIVE.md) for complete CSS architecture, responsive patterns, and QA checklist.

## 🚨 CRITICAL: Component Architecture & Data Management
📋 **Page Segmentation**: Divide every new page into 3-8 logical Blade components in dedicated folders  
📋 **JSON Data Storage**: ALL content MUST be stored in separate JSON files - NO fallback data  
📋 **Navigation Integration**: ALWAYS update navbar, footer, and cross-links when creating pages

📋 **Detailed Guidelines**: See [docs/COMPONENT-ARCHITECTURE.md](docs/COMPONENT-ARCHITECTURE.md) for complete modular architecture, JSON patterns, and integration requirements.

## Git Workflow for Team Development
📋 **4-Branch Structure**: main → dev → hamed/ashkan (production → shared → personal branches)  
📋 **Deployment Commands**: `./scripts/sync-to-dev.sh`, `./scripts/deploy-production.sh`, `./scripts/hotfix-to-main.sh`  
📋 **Production Server**: http://167.235.254.56 (Hetzner CentOS + Nginx + PHP 8.3 + Laravel 12)

📋 **Detailed Workflow**: See [docs/GIT-WORKFLOW.md](docs/GIT-WORKFLOW.md) for complete commands, branch management, and deployment procedures.

## Sawtic AI Brand Theme System
📋 **Required Colors**: `var(--voip-bg)`, `var(--voip-primary)`, `var(--voip-link)` defined in `voip-home.css`  
📋 **Text Standards**: `text-white` for titles, `text-slate-300` for descriptions, `var(--voip-link)` for accents  
📋 **Forbidden**: Floating dots, hub designs, hexagons, rotating elements, glass-morphism overuse  
📋 **Required**: Clean professional layouts, purposeful animations, consistent Sawtic branding

## 🚨 CRITICAL: Development Best Practices 

### **📋 MANDATORY CODE QUALITY STANDARDS**
**These guidelines MUST be followed for every development task. Failure to follow results in poor quality deliverables.**

#### **🎨 Design & UI Standards**
- ✅ **Responsive Design**: Always test and implement mobile-first responsive design with proper breakpoints
- ✅ **Theme Colors**: Strictly use `var(--voip-primary)`, `var(--voip-link)`, `var(--voip-bg)` - NEVER hardcode colors
- ✅ **Ready Components**: Use existing Tailwind/JS libraries and components - DON'T reinvent the wheel
- ✅ **Clean Structure**: Write well-structured, organized code with proper indentation and naming conventions

#### **💻 Code Architecture Standards** 
- ❌ **NO Inline Styles**: Never write inline `style=""` attributes in HTML/Blade files
- ❌ **NO CSS in Blade**: Never write `<style>` tags in Blade files
- ❌ **NO Content in Blade**: Never write static content directly in Blade files - use JSON data files
- ❌ **NO Solution Blade Content**: Never write content or hardcode image paths in solution Blade files - ALL data MUST be in `resources/data/solutions/[industry]/` JSON files
- ❌ **NO Hardcoded Images**: Never use hardcoded image paths in solution components - use data structure with fallback to `no-image.svg`
- ✅ **Separate CSS Files**: Create dedicated CSS files for each new page/component
- ✅ **Component Reuse**: Don't repeat yourself - use existing components and patterns
- ✅ **Data-Driven Solutions**: All solution pages must be completely data-driven from JSON files

#### **🔗 Navigation & Integration Standards**
- ✅ **Template Integration**: Always check and update header/footer navigation when adding new pages
- ✅ **Named Routes**: Use Laravel named routes `route('name')` instead of hardcoded URLs
- ✅ **Cross-linking**: Ensure all new pages are properly linked from relevant sections
- ✅ **SEO Integration**: Update sitemaps and meta information for new pages

#### **📸 Asset Management Standards**
- ✅ **Existing Resources**: Always check existing image/asset libraries before requesting new ones
- ✅ **Asset Requests**: When new images needed, provide specific search terms or Google search strings
- ✅ **Proper Paths**: Follow established asset organization and naming conventions
- ✅ **Optimization**: Use appropriate image formats and sizes for web performance

#### **🧪 Quality Assurance Standards**
- ✅ **Cross-browser Testing**: Test on multiple browsers and devices
- ✅ **Performance Optimization**: Ensure fast loading times and smooth animations
- ✅ **Error Handling**: Implement proper error handling and fallbacks
- ✅ **Code Validation**: Validate HTML, CSS, and JavaScript syntax

### **⚡ WORKFLOW ENFORCEMENT**
**Every task must follow this checklist:**
1. ✅ **Plan**: Use TodoWrite to break down complex tasks
2. ✅ **Research**: Check existing components and patterns first  
3. ✅ **Develop**: Follow architecture and design standards
4. ✅ **Test**: Verify responsive design and cross-browser compatibility
5. ✅ **Integrate**: Update navigation and cross-links
6. ✅ **Validate**: Ensure code quality and performance standards

## Error Checking Protocol

**MANDATORY AFTER EVERY CHANGE:**
1. **Ask user to run project**: "Please run the project now to test the changes"
2. **Wait for confirmation**: User runs `composer run dev` or visits site
3. **Check logs**: "Now shall I check logs to see if any new errors occurred?"
4. **Fix any issues**: Read `storage/logs/laravel.log` for new errors only and after you fixed the issue remove the log file
5. **Never skip this step**: Essential for maintaining project stability

## Additional Documentation

📋 **Detailed Guidelines**: Reference these files for complete specifications:
- **[docs/SOLUTIONS-DETAILED.md](docs/SOLUTIONS-DETAILED.md)** - Complete solutions architecture, voice demos, and implementation  
- **[docs/ROUTES-AND-SEO.md](docs/ROUTES-AND-SEO.md)** - Named routes, SEO management, and dynamic sitemaps  
- **[docs/CSS-AND-RESPONSIVE.md](docs/CSS-AND-RESPONSIVE.md)** - CSS architecture and responsive design standards  
- **[docs/COMPONENT-ARCHITECTURE.md](docs/COMPONENT-ARCHITECTURE.md)** - Modular components and JSON data management  
- **[docs/GIT-WORKFLOW.md](docs/GIT-WORKFLOW.md)** - Team development and deployment workflows  
- **[docs/DEVELOPMENT.md](docs/DEVELOPMENT.md)** - Development commands, setup, and workflows  
- **[docs/STYLING.md](docs/STYLING.md)** - Complete styling guidelines and patterns  
- **[docs/TEMPLATES.md](docs/TEMPLATES.md)** - Template pattern library and examples  
- **[docs/ASSETS.md](docs/ASSETS.md)** - Image library and asset management
- continue