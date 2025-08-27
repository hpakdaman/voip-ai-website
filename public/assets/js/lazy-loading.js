/**
 * Sawtic Lazy Loading Implementation
 * Improves website performance by loading images only when needed
 */

class SawticLazyLoader {
    constructor(options = {}) {
        this.options = {
            root: null,
            rootMargin: '50px',
            threshold: 0.1,
            loadingClass: 'lazy-loading',
            loadedClass: 'lazy-loaded',
            errorClass: 'lazy-error',
            ...options
        };

        this.images = [];
        this.observer = null;
        
        this.init();
    }

    init() {
        // Check for Intersection Observer support
        if (!window.IntersectionObserver) {
            console.warn('Intersection Observer not supported. Loading all images immediately.');
            this.loadAllImages();
            return;
        }

        // Find all lazy images
        this.images = Array.from(document.querySelectorAll('[data-lazy]'));
        
        if (this.images.length === 0) {
            return;
        }

        // Create observer
        this.observer = new IntersectionObserver(
            this.handleIntersection.bind(this),
            {
                root: this.options.root,
                rootMargin: this.options.rootMargin,
                threshold: this.options.threshold
            }
        );

        // Start observing
        this.images.forEach(img => {
            this.observer.observe(img);
            img.classList.add(this.options.loadingClass);
        });

        console.log(`Sawtic Lazy Loader: Initialized with ${this.images.length} images`);
    }

    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                this.loadImage(entry.target);
                this.observer.unobserve(entry.target);
            }
        });
    }

    async loadImage(img) {
        const src = img.dataset.lazy;
        const srcset = img.dataset.lazySrcset;

        // Add loading state
        img.classList.remove(this.options.loadingClass);
        
        // Try WebP version first if browser supports it
        let finalSrc = src;
        const supportsWebP = await WebPSupport.detect();
        if (supportsWebP && src && /\.(jpe?g|png)$/i.test(src)) {
            const webpSrc = src.replace(/\.(jpe?g|png)$/i, '.webp');
            finalSrc = webpSrc;
        }
        
        // Handle load success
        const onLoad = () => {
            img.classList.add(this.options.loadedClass);
            img.removeEventListener('load', onLoad);
            img.removeEventListener('error', onError);
            console.log('Lazy loaded:', finalSrc);
        };

        // Handle load error - try original if WebP fails
        const onError = () => {
            // If WebP failed, try original image
            if (finalSrc !== src && src) {
                console.log('WebP failed, trying original:', src);
                img.removeEventListener('load', onLoad);
                img.removeEventListener('error', onError);
                
                // Try original image
                const onOriginalLoad = () => {
                    img.classList.add(this.options.loadedClass);
                    img.removeEventListener('load', onOriginalLoad);
                    img.removeEventListener('error', onOriginalError);
                    console.log('Loaded original after WebP failed:', src);
                };
                
                const onOriginalError = () => {
                    img.classList.add(this.options.errorClass);
                    img.removeEventListener('load', onOriginalLoad);
                    img.removeEventListener('error', onOriginalError);
                    
                    // Try fallback image if available
                    const fallback = img.dataset.fallback || '/assets/images/no-image.svg';
                    if (img.src !== fallback) {
                        img.src = fallback;
                    }
                };
                
                img.addEventListener('load', onOriginalLoad);
                img.addEventListener('error', onOriginalError);
                img.src = src;
                return;
            }
            
            // Direct fallback
            img.classList.add(this.options.errorClass);
            img.removeEventListener('load', onLoad);
            img.removeEventListener('error', onError);
            
            const fallback = img.dataset.fallback || '/assets/images/no-image.svg';
            if (img.src !== fallback) {
                img.src = fallback;
            }
        };

        img.addEventListener('load', onLoad);
        img.addEventListener('error', onError);

        // Set the source
        if (srcset) {
            img.srcset = srcset;
        }
        img.src = finalSrc;

        // Remove data attributes
        delete img.dataset.lazy;
        if (img.dataset.lazySrcset) {
            delete img.dataset.lazySrcset;
        }
    }

    loadAllImages() {
        // Fallback for browsers without Intersection Observer
        this.images = Array.from(document.querySelectorAll('[data-lazy]'));
        this.images.forEach(img => this.loadImage(img));
    }

    // Public method to refresh and find new lazy images
    refresh() {
        const newImages = Array.from(document.querySelectorAll('[data-lazy]'))
            .filter(img => !this.images.includes(img));

        if (newImages.length > 0 && this.observer) {
            newImages.forEach(img => {
                this.observer.observe(img);
                img.classList.add(this.options.loadingClass);
            });
            
            this.images.push(...newImages);
            console.log(`Sawtic Lazy Loader: Added ${newImages.length} new images`);
        }
    }

    // Destroy the lazy loader
    destroy() {
        if (this.observer) {
            this.observer.disconnect();
        }
        this.images = [];
        console.log('Sawtic Lazy Loader: Destroyed');
    }
}

// WebP Support Detection
class WebPSupport {
    static async detect() {
        if (WebPSupport._supported !== undefined) {
            return WebPSupport._supported;
        }

        return new Promise(resolve => {
            const webP = new Image();
            webP.onload = webP.onerror = () => {
                WebPSupport._supported = webP.height === 2;
                resolve(WebPSupport._supported);
            };
            webP.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
        });
    }
}

// Enhanced Image Helper for Sawtic
class SawticImageHelper {
    static async createOptimizedImg(src, alt = '', options = {}) {
        const {
            lazy = true,
            webp = true,
            fallback = '/assets/images/no-image.svg',
            classes = '',
            loading = 'lazy'
        } = options;

        const img = document.createElement('img');
        img.alt = alt;
        
        if (classes) {
            img.className = classes;
        }

        // WebP support check
        let imageSrc = src;
        if (webp && await WebPSupport.detect()) {
            const webpSrc = src.replace(/\.(jpe?g|png)$/i, '.webp');
            // Check if WebP version exists (you might want to implement this check)
            imageSrc = webpSrc;
        }

        if (lazy && window.IntersectionObserver) {
            img.dataset.lazy = imageSrc;
            img.dataset.fallback = fallback;
            img.loading = loading;
            
            // Transparent placeholder while loading - no visible content
            img.src = 'data:image/svg+xml;base64,' + btoa(`
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300">
                    <rect width="400" height="300" fill="rgba(248, 250, 252, 0.1)"/>
                </svg>
            `);
        } else {
            img.src = imageSrc;
            img.onerror = () => {
                if (img.src !== fallback) {
                    img.src = fallback;
                }
            };
        }

        return img;
    }

    // Convert existing images to lazy loading
    static convertToLazy(selector = 'img:not([data-lazy])') {
        const images = document.querySelectorAll(selector);
        
        images.forEach(img => {
            if (!img.dataset.lazy && img.src) {
                img.dataset.lazy = img.src;
                img.dataset.fallback = '/assets/images/no-image.svg';
                img.src = 'data:image/svg+xml;base64,' + btoa(`
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300">
                        <rect width="400" height="300" fill="rgba(248, 250, 252, 0.1)"/>
                    </svg>
                `);
            }
        });

        return images.length;
    }
}

// Auto-initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    // Initialize lazy loader
    window.sawticLazyLoader = new SawticLazyLoader({
        rootMargin: '100px', // Start loading 100px before image enters viewport
        threshold: 0.1
    });

    // Detect WebP support and store for later use
    WebPSupport.detect().then(supported => {
        document.documentElement.classList.toggle('webp-supported', supported);
        console.log('WebP support:', supported);
    });
});

// Export for use in modules
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { SawticLazyLoader, WebPSupport, SawticImageHelper };
}