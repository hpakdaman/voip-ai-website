/**
 * Image Fallback Handler
 * Automatically replaces broken images with no-image SVG
 */

(function() {
    'use strict';
    
    // No-image SVG path
    const noImageSvg = '/assets/images/no-image.svg';
    
    /**
     * Handle image error event
     * @param {Event} event - The error event
     */
    function handleImageError(event) {
        const img = event.target;
        
        // Prevent infinite loop if the fallback image also fails
        if (img.src === window.location.origin + noImageSvg) {
            return;
        }
        
        // Set the fallback image
        img.src = noImageSvg;
        
        // Add a class to indicate this is a fallback image
        img.classList.add('fallback-image');
        
        // Only apply subtle styling to actual fallback images (no-image.svg)
        // Don't apply opacity reduction to actual content images
        if (img.src.includes('no-image.svg')) {
            img.style.filter = 'grayscale(20%)';
        }
        
        console.log('Image failed to load, replaced with fallback:', {
            originalSrc: img.getAttribute('data-original-src') || 'unknown',
            currentSrc: img.src,
            dataLazy: img.dataset.lazy,
            hasLazyClass: img.classList.contains('lazy-loading')
        });
    }
    
    /**
     * Set up image error handling for existing and future images
     */
    function setupImageFallback() {
        // Handle existing images
        document.querySelectorAll('img').forEach(function(img) {
            // Store original src for debugging
            img.setAttribute('data-original-src', img.src);
            
            // Add error event listener
            img.addEventListener('error', handleImageError);
            
            // Check if image is already broken (complete but no naturalHeight)
            if (img.complete && img.naturalHeight === 0) {
                handleImageError({ target: img });
            }
        });
        
        // Handle dynamically added images using event delegation
        document.addEventListener('error', function(event) {
            if (event.target.tagName === 'IMG') {
                handleImageError(event);
            }
        }, true);
    }
    
    /**
     * Initialize when DOM is ready
     */
    function init() {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', setupImageFallback);
        } else {
            setupImageFallback();
        }
        
        // Also handle images that might be added after page load
        if (window.MutationObserver) {
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    mutation.addedNodes.forEach(function(node) {
                        if (node.nodeType === 1) { // Element node
                            // Check if the added node is an image
                            if (node.tagName === 'IMG') {
                                node.setAttribute('data-original-src', node.src);
                                node.addEventListener('error', handleImageError);
                            }
                            
                            // Check for images within the added node
                            const images = node.querySelectorAll && node.querySelectorAll('img');
                            if (images) {
                                images.forEach(function(img) {
                                    img.setAttribute('data-original-src', img.src);
                                    img.addEventListener('error', handleImageError);
                                });
                            }
                        }
                    });
                });
            });
            
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        }
    }
    
    // Start the initialization
    init();
    
    // Expose function globally for manual use if needed
    window.setupImageFallback = setupImageFallback;
    
})();