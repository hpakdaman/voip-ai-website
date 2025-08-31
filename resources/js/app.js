/*
 |--------------------------------------------------------------------------
 | VoIP AI Solutions - JavaScript Bundle Entry Point
 |--------------------------------------------------------------------------
 |
 | This file imports all JavaScript libraries and custom code in the correct
 | order. Vite will bundle everything into a single optimized file.
 |
 */

// Core Libraries (in dependency order)
import './libs/particles.js';           // Particle effects
import './libs/wow.min.js';            // Animation library
import './libs/tobii.min.js';          // Lightbox functionality
import './libs/shuffle.min.js';        // Portfolio filtering
import './libs/datepicker.min.js';     // Date picker
import './libs/choices.min.js';        // Enhanced selects
import './libs/feather.min.js';        // Feather icons
import './libs/tiny-slider.js';        // Legacy sliders

// Custom JavaScript files
import './custom/easy_background.js';   // Background effects
import './custom/plugins.init.js';      // Plugin initialization
import './custom/app.js';              // Core app functionality
import './custom/voip-home.js';         // Custom VoIP functionality
import './custom/image-fallback.js';    // Image error handling
import './custom/vanilla-lazy-loading.js'; // Lazy loading images

// Initialize everything after DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('VoIP AI Solutions - JavaScript loaded successfully');
});