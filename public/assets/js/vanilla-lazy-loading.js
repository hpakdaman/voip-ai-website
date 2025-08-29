/**
 * Vanilla JavaScript Lazy Loading for Sawtic
 * Simple, reliable, no external dependencies
 */

class SawticVanillaLazyLoader {
    constructor(options = {}) {
        this.options = {
            root: null,
            rootMargin: '50px',
            threshold: 0.1,
            selector: '[data-src], [data-lazy]',
            loadedClass: 'lazy-loaded',
            errorClass: 'lazy-error',
            ...options
        };

        this.images = [];
        this.observer = null;
        this.webpSupported = null;

        this.init();
    }

    async init() {
        // Check WebP support first
        this.webpSupported = await this.checkWebPSupport();
        document.documentElement.classList.toggle('webp-supported', this.webpSupported);
        
        // Find all lazy images
        this.images = Array.from(document.querySelectorAll(this.options.selector));
        
        if (this.images.length === 0) {
            console.log('🔍 No lazy loading elements found');
            return;
        }

        console.log(`🚀 Found ${this.images.length} lazy images`);

        // Use IntersectionObserver if supported
        if ('IntersectionObserver' in window) {
            this.observer = new IntersectionObserver(
                this.handleIntersection.bind(this),
                {
                    root: this.options.root,
                    rootMargin: this.options.rootMargin,
                    threshold: this.options.threshold
                }
            );

            // Start observing all images
            this.images.forEach(img => {
                if (this.observer) {
                    this.observer.observe(img);
                }
            });

            console.log('✅ IntersectionObserver initialized');
        } else {
            // Fallback for older browsers
            console.warn('IntersectionObserver not supported, loading all images');
            this.images.forEach(img => this.loadImage(img));
        }
    }

    handleIntersection(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                this.loadImage(img);
                if (this.observer) {
                    this.observer.unobserve(img);
                }
            }
        });
    }

    async loadImage(element) {
        try {
            const originalSrc = element.dataset.src || element.dataset.lazy;
            
            if (!originalSrc) {
                console.warn('No data-src or data-lazy found:', element);
                this.handleError(element);
                return;
            }

            // Determine final source (try WebP if supported)
            let finalSrc = originalSrc;
            if (this.webpSupported && /\.(jpe?g|png)$/i.test(originalSrc)) {
                const webpSrc = originalSrc.replace(/\.(jpe?g|png)$/i, '.webp');
                if (await this.imageExists(webpSrc)) {
                    finalSrc = webpSrc;
                }
            }

            // Load the image
            await this.setImageSource(element, finalSrc);

            // Mark as loaded
            element.classList.add(this.options.loadedClass);
            element.classList.remove('lazy-loading', this.options.errorClass);

            // Clean up data attributes
            delete element.dataset.src;
            delete element.dataset.lazy;

            console.log('✅ Loaded:', finalSrc);

        } catch (error) {
            console.error('❌ Failed to load:', element, error);
            this.handleError(element);
        }
    }

    async setImageSource(element, src) {
        return new Promise((resolve, reject) => {
            if (element.tagName === 'IMG') {
                const onLoad = () => {
                    element.removeEventListener('load', onLoad);
                    element.removeEventListener('error', onError);
                    resolve();
                };

                const onError = () => {
                    element.removeEventListener('load', onLoad);
                    element.removeEventListener('error', onError);
                    reject(new Error('Image failed to load'));
                };

                element.addEventListener('load', onLoad);
                element.addEventListener('error', onError);
                element.src = src;
            } else {
                // Handle background images
                element.style.backgroundImage = `url('${src}')`;
                resolve();
            }
        });
    }

    handleError(element) {
        element.classList.add(this.options.errorClass);
        element.classList.remove('lazy-loading', this.options.loadedClass);

        // Set fallback image
        const fallback = element.dataset.fallback || '/assets/images/no-image.svg';
        
        if (element.tagName === 'IMG' && element.src !== fallback) {
            element.src = fallback;
        } else if (element.tagName !== 'IMG') {
            element.style.backgroundImage = `url('${fallback}')`;
        }
    }

    async checkWebPSupport() {
        if (this.webpSupported !== null) {
            return this.webpSupported;
        }

        return new Promise(resolve => {
            const webP = new Image();
            webP.onload = webP.onerror = () => {
                const supported = webP.height === 2;
                resolve(supported);
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
            
            // Timeout after 3 seconds
            setTimeout(() => resolve(false), 3000);
        });
    }

    // Refresh for dynamically added images
    refresh() {
        const newImages = Array.from(document.querySelectorAll(this.options.selector))
            .filter(img => !this.images.includes(img));

        if (newImages.length > 0) {
            console.log(`🔄 Adding ${newImages.length} new lazy images`);
            this.images.push(...newImages);
            
            if (this.observer) {
                newImages.forEach(img => this.observer.observe(img));
            } else {
                newImages.forEach(img => this.loadImage(img));
            }
        }
    }

    // Manual trigger for specific element
    triggerLoad(element) {
        if (this.images.includes(element)) {
            this.loadImage(element);
        }
    }

    // Destroy the lazy loader
    destroy() {
        if (this.observer) {
            this.observer.disconnect();
            this.observer = null;
        }
        this.images = [];
        console.log('🗑️  Lazy loader destroyed');
    }
}

// Global instance
let sawticLazyLoader;

// Initialize when DOM is ready
function initVanillaLazyLoader() {
    try {
        sawticLazyLoader = new SawticVanillaLazyLoader();
        window.sawticLazyLoader = sawticLazyLoader;
        
        console.log('🚀 Sawtic Vanilla Lazy Loader initialized');
    } catch (error) {
        console.error('❌ Lazy loader initialization failed:', error);
    }
}

// Initialize based on document state
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initVanillaLazyLoader);
} else {
    initVanillaLazyLoader();
}

// Handle dynamic content
if (window.MutationObserver) {
    const observer = new MutationObserver((mutations) => {
        let shouldRefresh = false;
        
        mutations.forEach(mutation => {
            mutation.addedNodes.forEach(node => {
                if (node.nodeType === 1) {
                    if ((node.hasAttribute && (node.hasAttribute('data-src') || node.hasAttribute('data-lazy'))) ||
                        (node.querySelectorAll && node.querySelectorAll('[data-src], [data-lazy]').length > 0)) {
                        shouldRefresh = true;
                    }
                }
            });
        });
        
        if (shouldRefresh && sawticLazyLoader) {
            setTimeout(() => sawticLazyLoader.refresh(), 100);
        }
    });
    
    // Start observing after initialization
    setTimeout(() => {
        if (document.body) {
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        }
    }, 1000);
}

// Export for modules
if (typeof module !== 'undefined' && module.exports) {
    module.exports = SawticVanillaLazyLoader;
}