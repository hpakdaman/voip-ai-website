/**
 * Lozad.js Integration for Sawtic - Professional Lazy Loading
 * Handles images without src attributes automatically
 */

// Include Lozad.js library (minified)
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self).lozad=t()}(this,function(){"use strict";var e=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var r=arguments[t];for(var o in r)Object.prototype.hasOwnProperty.call(r,o)&&(e[o]=r[o])}return e};return function(t,r){var o={rootMargin:"0px",threshold:0,load:function(e){if("picture"===e.nodeName.toLowerCase()){var t=e.querySelector("img"),r=!1;null===t&&(t=document.createElement("img"),r=!0),t.hasAttribute("data-iesrc")&&(t.src=t.getAttribute("data-iesrc")),t.hasAttribute("data-alt")&&(t.alt=t.getAttribute("data-alt")),r&&e.append(t)}if("video"===e.nodeName.toLowerCase()&&!e.getAttribute("data-src")&&e.children){for(var o=e.children,n=void 0,a=0;a<=o.length-1;a++)(n=o[a].getAttribute("data-src"))&&(o[a].src=n);e.load()}if(e.getAttribute("data-poster")&&(e.poster=e.getAttribute("data-poster")),e.getAttribute("data-src")&&(e.src=e.getAttribute("data-src")),e.getAttribute("data-srcset")&&e.setAttribute("srcset",e.getAttribute("data-srcset")),"IMG"===e.tagName){var s=e.parentNode;s&&"PICTURE"===s.nodeName&&Array.from(s.children).forEach(function(e){if("SOURCE"===e.tagName){var t=e.getAttribute("data-srcset");t&&e.setAttribute("srcset",t)}})}e.getAttribute("data-background-image")?e.style.backgroundImage="url('"+e.getAttribute("data-background-image")+"')":e.getAttribute("data-background-image-set")&&(e.style.backgroundImage="image-set("+e.getAttribute("data-background-image-set")+")");var i=e.getAttribute("data-toggle-class");i&&e.classList.toggle(i)},loaded:function(){},error:function(){},selector:"[data-src],[data-srcset],[data-background-image],[data-background-image-set]",selectorRoot:null,class:"lozad",loadedClass:"loaded",errorClass:"error"},n=e(o,r),a=n.selector,s=n.selectorRoot,i=n.class,l=n.loadedClass,c=n.errorClass,u=n.load,d=n.loaded,f=n.error;function b(e,t){e.setAttribute("data-loaded",!0),e.classList.add(t.loadedClass),t.loaded(e)}var g=function(e){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{};e&&"function"==typeof e.length?function(e,t){for(var r=0;r<e.length;r++)g(e[r],t)}(e,t):function(e,t){var r=2<arguments.length&&void 0!==arguments[2]?arguments[2]:document;if(window.IntersectionObserver){var o=function(e,t){var r=1<arguments.length&&void 0!==t?t:{},o=new IntersectionObserver(function(o){o.forEach(function(o){(0<o.intersectionRatio||o.isIntersecting)&&(e.unobserve(o.target),o.target.hasAttribute("data-loaded")||(r.load(o.target),b(o.target,r)))})},e);return r.selectorRoot?o.observe(r.selectorRoot):r.selector?document.querySelectorAll(r.selector).forEach(function(e){o.observe(e)}):o.observe(e),o}(e,t);t.observeChanges&&function(e,t){return t.selectorRoot?t.selectorRoot.querySelectorAll(t.selector):document.querySelectorAll(t.selector)}().forEach(function(e){e.hasAttribute("data-loaded")||t.observer.observe(e)})}else!function(e,t){function r(){return e.selectorRoot?e.selectorRoot.querySelectorAll(e.selector):document.querySelectorAll(e.selector)}function o(){for(var t=0;t<s.length;t++){var o=s[t];(function(e,t){var r=e.getBoundingClientRect();return r.top<=t.root.innerHeight+t.rootMargin&&r.bottom>=0-t.rootMargin&&r.left<=t.root.innerWidth+t.rootMargin&&r.right>=0-t.rootMargin})(o,e)&&!o.hasAttribute("data-loaded")&&(e.load(o),b(o,e),s.splice(t,1),t--)}s.length||window.removeEventListener("scroll",o)}e.root=e.selectorRoot||document;var n,a,s=Array.prototype.slice.call(r());window.addEventListener("scroll",o),window.addEventListener("resize",o),window.addEventListener("orientationChange",o),(n=e.selector,a=e.selectorRoot||document,new MutationObserver(function(e){e.forEach(function(e){Array.prototype.forEach.call(e.addedNodes||[],function(e){e.matches&&e.matches(n)&&!e.hasAttribute("data-loaded")&&s.push(e)})})})).observe(a,{subtree:!0,childList:!0}),o()}(t,r)}(t,e)};return g.observe=g,g.triggerLoad=function(e){e.hasAttribute("data-loaded")||(u(e),b(e,n))},g.observer=g(),g}});

// Sawtic Lazy Loading Configuration
class SawticLazyLoader {
    constructor() {
        this.observer = null;
        this.init();
    }

    init() {
        // Initialize Lozad with Sawtic-specific configuration
        this.observer = lozad('[data-lazy], .lazy-loading', {
            rootMargin: '50px',
            threshold: 0.1,
            
            // Custom load function with WebP support and fallback
            load: async (element) => {
                try {
                    await this.loadImage(element);
                } catch (error) {
                    console.warn('Lozad load error:', error);
                    this.handleImageError(element);
                }
            },
            
            // Success callback
            loaded: (element) => {
                element.classList.add('lazy-loaded');
                element.classList.remove('lazy-loading', 'lazy-error');
                console.log('✅ Lazy loaded:', element.dataset.lazy || element.dataset.src);
            },
            
            // Error callback
            error: (element) => {
                this.handleImageError(element);
            }
        });

        // Start observing
        this.observer.observe();
        
        console.log('🚀 Sawtic Lozad Lazy Loader initialized');
    }

    async loadImage(element) {
        const originalSrc = element.dataset.lazy || element.dataset.src;
        
        if (!originalSrc) {
            throw new Error('No data-lazy or data-src attribute found');
        }

        // Try WebP first if supported and image is PNG/JPG
        const supportsWebP = await this.checkWebPSupport();
        let finalSrc = originalSrc;
        
        if (supportsWebP && /\.(jpe?g|png)$/i.test(originalSrc)) {
            const webpSrc = originalSrc.replace(/\.(jpe?g|png)$/i, '.webp');
            
            // Test if WebP version exists
            if (await this.imageExists(webpSrc)) {
                finalSrc = webpSrc;
            }
        }

        // Set the final source
        element.src = finalSrc;
        
        // Handle srcset if present
        if (element.dataset.lazySrcset) {
            element.srcset = element.dataset.lazySrcset;
        }

        // Clean up data attributes
        delete element.dataset.lazy;
        delete element.dataset.lazySrcset;
    }

    handleImageError(element) {
        element.classList.add('lazy-error');
        element.classList.remove('lazy-loading', 'lazy-loaded');
        
        // Set fallback image
        const fallback = element.dataset.fallback || '/assets/images/no-image.svg';
        if (element.src !== fallback) {
            element.src = fallback;
        }
        
        console.warn('❌ Image failed to load:', element.dataset.lazy || element.src);
    }

    async checkWebPSupport() {
        if (this._webpSupported !== undefined) {
            return this._webpSupported;
        }

        return new Promise(resolve => {
            const webP = new Image();
            webP.onload = webP.onerror = () => {
                this._webpSupported = webP.height === 2;
                resolve(this._webpSupported);
            };
            webP.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
        });
    }

    async imageExists(url) {
        return new Promise(resolve => {
            const img = new Image();
            img.onload = () => resolve(true);
            img.onerror = () => resolve(false);
            img.src = url;
        });
    }

    // Refresh observer for dynamically added images
    refresh() {
        if (this.observer && this.observer.observe) {
            this.observer.observe();
            console.log('🔄 Lozad observer refreshed');
        }
    }

    // Manually trigger load for specific element
    triggerLoad(element) {
        if (this.observer && this.observer.triggerLoad) {
            this.observer.triggerLoad(element);
        }
    }
}

// Global instance
let sawticLazyLoader;

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    sawticLazyLoader = new SawticLazyLoader();
    
    // Make it globally accessible
    window.sawticLazyLoader = sawticLazyLoader;
    
    // Add WebP class to HTML for CSS targeting
    sawticLazyLoader.checkWebPSupport().then(supported => {
        document.documentElement.classList.toggle('webp-supported', supported);
        console.log('WebP support:', supported);
    });
});

// Handle dynamic content
if (window.MutationObserver) {
    const observer = new MutationObserver((mutations) => {
        let hasNewImages = false;
        
        mutations.forEach(mutation => {
            mutation.addedNodes.forEach(node => {
                if (node.nodeType === 1) {
                    // Check if node has lazy loading attributes or contains lazy images
                    if (node.hasAttribute && (node.hasAttribute('data-lazy') || node.classList.contains('lazy-loading'))) {
                        hasNewImages = true;
                    }
                    
                    if (node.querySelectorAll) {
                        const lazyImages = node.querySelectorAll('[data-lazy], .lazy-loading');
                        if (lazyImages.length > 0) {
                            hasNewImages = true;
                        }
                    }
                }
            });
        });
        
        if (hasNewImages && sawticLazyLoader) {
            setTimeout(() => sawticLazyLoader.refresh(), 100);
        }
    });
    
    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
}

// Export for modules
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { SawticLazyLoader, lozad };
}