/* ==========================================
   SAWTIC AI - BUNDLED JAVASCRIPT FILE
   All JS files combined into single bundle for performance
   ========================================== */

// CSS is loaded separately via blade template to prevent FOUC
// import '../css/bundle.css';

// Third Party Libraries - Import and expose globally for compatibility
import '@assets/libs/jarallax/jarallax.min.js';
import '@assets/libs/particles.js/particles.js';

// Import WOW.js and AOS for animations - WOW.js will self-register globally
// Don't import WOW.js here as it has module issues, let plugins.init.js handle it

// Create AOS compatibility shim since not used
window.AOS = {
    init: function() { console.log('AOS not available - using WOW.js instead'); }
};

// Import Tobii and expose globally for compatibility
import '@assets/libs/tobii/js/tobii.min.js';

import '@assets/libs/swiper/swiper-bundle.min.js';
import '@assets/libs/shufflejs/shuffle.min.js';
import '@assets/libs/js-datepicker/datepicker.min.js';
import '@assets/libs/choices.js/public/assets/scripts/choices.min.js';
import '@assets/libs/gumshoejs/gumshoe.min.js';

// Import Feather and expose globally
import '@assets/libs/feather-icons/feather.min.js';

import '@assets/libs/tiny-slider/min/tiny-slider.js';

// Import Application Scripts
import '@assets/js/easy_background.js';
import '@assets/js/plugins.init.js';
import '@assets/js/app.js';
import '@assets/js/image-fallback.js';
import '@assets/js/vanilla-lazy-loading.js';
import '@assets/js/voip-home.js';

// Initialize bundled scripts when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    console.log('Sawtic AI - Bundled scripts loaded successfully');
    
    // Force dark theme permanently (from original inline script)
    const htmlElement = document.documentElement;
    htmlElement.classList.add('dark');
    htmlElement.classList.remove('light');
    
    // All application scripts are now imported directly above
    console.log('All application scripts bundled and ready');
});