# Named Routes and SEO Management

This document contains detailed specifications for Laravel named routes, SEO management, robots.txt and sitemap requirements.

## 🚨 CRITICAL: Laravel Named Routes Requirement

### MANDATORY: Always Use Named Routes
**ALL links in Blade templates MUST use Laravel named routes instead of hardcoded URLs.**

#### ❌ FORBIDDEN URL Patterns:
```blade
<!-- NEVER USE hardcoded URLs -->
<a href="{{ url('/contact-us') }}">Contact</a>
<a href="{{ url('/features') }}">Features</a>
<a href="/pricing">Pricing</a>
```

#### ✅ REQUIRED Named Route Usage:
```blade
<!-- ALWAYS USE named routes -->
<a href="{{ route('contact-us') }}">Contact</a>
<a href="{{ route('features') }}">Features</a>
<a href="{{ route('pricing') }}">Pricing</a>
<a href="{{ route('solutions.real-estate') }}">Real Estate</a>
```

#### Available Named Routes:
- `route('home')` - Homepage (/)
- `route('about')` - About page (/about)  
- `route('features')` - Features page (/features)
- `route('pricing')` - Pricing page (/pricing)
- `route('contact-us')` - Contact page (/contact-us)
- `route('privacy')` - Privacy policy (/privacy)
- `route('terms')` - Terms of service (/terms)
- `route('solutions.real-estate')` - Real estate solutions (/solutions/real-estate)
- `route('solutions.spa-massage')` - Spa & massage solutions (/solutions/spa-massage)

#### Benefits of Named Routes:
- ✅ **Maintainability**: Easy to update URLs without changing templates
- ✅ **Error Prevention**: Laravel validates route existence
- ✅ **URL Generation**: Automatic URL generation based on route definitions
- ✅ **Consistency**: Centralized route management in routes/web.php
- ✅ **Refactoring Safety**: IDE support and better code organization

#### Implementation Requirements:
- Update ALL existing hardcoded URLs to use named routes
- Check navbar.blade.php, footer.blade.php, and all component files
- Verify all buttons, links, and navigation elements
- Test route functionality after updates

**This rule ensures maintainable, scalable URL management across the entire application.**

## 🚨 CRITICAL: SEO Management - Robots.txt & Sitemaps

### MANDATORY: Update SEO Files for New Pages
**EVERY time you create a new page or landing page, you MUST ask the user to update robots.txt and sitemap files.**

#### 🤖 New Page Creation Workflow:
```
1. Create new page/route
2. Update navigation links  
3. Test page functionality
4. → ASK USER: "Should I add this new page to robots.txt and sitemap?"
5. Update SEO files based on user response
```

#### 📋 Required Questions for New Pages:
```
🔍 SEO Update Required:
- "Should the new [PAGE_NAME] page be indexed by search engines?"
- "Should I add /[new-route] to robots.txt Allow list?"
- "Should this page be included in the sitemap for better SEO?"
- "Any specific crawl directives needed for this page?"
```

#### 🗺️ DYNAMIC SITEMAP REQUIREMENTS
**All sitemaps MUST be dynamic and generated from actual routes, not static files.**

##### Required Dynamic Sitemap Structure:
```php
// routes/web.php - Add sitemap routes
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');
Route::get('/sitemap-solutions.xml', [SitemapController::class, 'solutions'])->name('sitemap.solutions');
Route::get('/sitemap-pages.xml', [SitemapController::class, 'pages'])->name('sitemap.pages');
```

##### SitemapController Implementation:
```php
// app/Http/Controllers/SitemapController.php
class SitemapController extends Controller {
    public function index() {
        // Main sitemap index linking to sub-sitemaps
        // Dynamic generation based on available routes
    }
    
    public function solutions() {
        // All solution landing pages automatically
        // Generated from routes starting with 'solutions.'
    }
    
    public function pages() {
        // All main pages (home, about, features, pricing, contact)
        // Dynamic last-modified dates based on file changes
    }
}
```

#### 🚨 FORBIDDEN Static Sitemaps:
- ❌ Never create static XML sitemap files
- ❌ Never hardcode URLs in sitemap files
- ❌ Never manually update sitemap content

#### ✅ REQUIRED Dynamic Features:
- ✅ **Auto-discovery**: Automatically find all routes
- ✅ **Last-modified dates**: Based on actual file modification times
- ✅ **Priority calculation**: Higher priority for main pages
- ✅ **Change frequency**: Based on page type (daily for solutions, weekly for static pages)
- ✅ **Multi-language support**: Include both EN and AR versions if implemented

#### 📊 Sitemap Categories:
```xml
<!-- Main Sitemap Index -->
/sitemap.xml (links to sub-sitemaps)

<!-- Sub-sitemaps -->
/sitemap-pages.xml (home, about, features, pricing, contact)
/sitemap-solutions.xml (all solution landing pages)
/sitemap-blog.xml (if blog is implemented)
```

#### 🔧 Implementation Example:
```php
// Dynamic solution pages discovery
public function solutions() {
    $solutions = collect(Route::getRoutes())
        ->filter(fn($route) => str_starts_with($route->getName() ?? '', 'solutions.'))
        ->map(fn($route) => [
            'url' => url($route->uri()),
            'lastmod' => $this->getLastModified($route),
            'priority' => 0.8,
            'changefreq' => 'weekly'
        ]);

    return response()->view('sitemaps.solutions', compact('solutions'))
        ->header('Content-Type', 'application/xml');
}
```

#### 🎯 SEO Benefits of Dynamic Sitemaps:
- ✅ **Always up-to-date**: Automatically includes new pages
- ✅ **Accurate last-modified**: Based on real file changes  
- ✅ **Better crawling**: Search engines discover new content faster
- ✅ **Reduced maintenance**: No manual updates required
- ✅ **Error prevention**: Eliminates broken sitemap links

#### 📝 Implementation Tasks:
1. **Create SitemapController** with dynamic route discovery
2. **Create sitemap Blade templates** (XML format)
3. **Add sitemap routes** to web.php
4. **Update robots.txt** to reference dynamic sitemaps
5. **Test sitemap accessibility** and XML validation

### 🚨 MANDATORY: Ask Before SEO Updates
**NEVER automatically update robots.txt or sitemaps. ALWAYS ask the user first:**

```
"I've created a new [PAGE_TYPE] page at /[route]. 
Should I:
1. Add this page to robots.txt Allow list for search engine indexing?
2. Include it in the dynamic sitemap?
3. Apply any specific SEO directives (noindex, nofollow, etc.)?

Please confirm your SEO preferences for this page."
```

**This ensures proper SEO control and prevents unwanted search engine indexing.**