const mix = require('laravel-mix');
const fs = require('fs');
const path = require('path');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Create temporary CSS files with fixed paths
const tempDir = 'public/temp-css';
if (!fs.existsSync(tempDir)) {
    fs.mkdirSync(tempDir, { recursive: true });
}

// Function to fix CSS URLs - simplified approach
function fixCssUrls(inputPath, outputPath) {
    let css = fs.readFileSync(inputPath, 'utf8');
    
    // Fix paths for optimized unicons CSS
    if (inputPath.includes('unicons-optimized')) {
        css = css.replace(/url\(['"]?\.\.\/libs\/@iconscout\/unicons\/fonts\//g, "url('/assets/libs/@iconscout/unicons/fonts/");
    }
    
    // Fix paths for original unicons CSS (if used)
    if (inputPath.includes('unicons') && !inputPath.includes('optimized')) {
        css = css.replace(/url\(['"]?\.\.\/fonts\//g, "url('/assets/libs/@iconscout/unicons/fonts/");
    }
    
    // Fix image paths: ../../assets/images/ -> /assets/images/
    css = css.replace(/url\(['"]?\.\.\/\.\.\/assets\/images\//g, "url('/assets/images/");
    
    fs.writeFileSync(outputPath, css);
}

// Create fixed CSS files
const cssFiles = [
    'public/assets/libs/animate.css/animate.min.css',  // USED: WOW.js animations
    'public/assets/libs/tobii/css/tobii.min.css',      // USED: Lightbox galleries
    'public/assets/libs/tiny-slider/tiny-slider.css',  // USED: Legacy carousels
    // 'public/assets/libs/swiper/swiper-bundle.min.css',  // UNUSED: No swiper instances found
    'public/assets/libs/js-datepicker/datepicker.min.css',  // USED: Date inputs
    'public/assets/libs/choices.js/public/assets/styles/choices.min.css',  // USED: Enhanced selects
    'public/assets/libs/@iconscout/unicons/css/line.css',  // USED: Full library needed for all icons
    'public/assets/libs/@mdi/font/css/materialdesignicons.min.css',  // USED: 193 instances (mdi- icons)
    // 'public/assets/libs/@mantine/spotlight/styles.css',  // UNUSED: Search not implemented
    // 'public/assets/libs/aos/dist/aos.css',  // UNUSED: Using WOW.js instead
    'public/assets/css/tailwind.css',
    'public/assets/css/voip-home.css'
];

const fixedCssFiles = cssFiles.map((file, index) => {
    const outputPath = path.join(tempDir, `file-${index}.css`);
    fixCssUrls(file, outputPath);
    return outputPath;
});

// Combine and minify all fixed CSS files
mix.styles(fixedCssFiles, 'public/css/app.min.css');

// Combine and minify all JavaScript files
mix.scripts([
    // 'public/assets/libs/jarallax/jarallax.min.js',  // UNUSED: Parallax not implemented
    'public/assets/libs/particles.js/particles.js',     // MINIMAL: Only particles-snow effect
    'public/assets/libs/wow.js/wow.min.js',            // USED: Main animation library
    'public/assets/libs/tobii/js/tobii.min.js',        // USED: Lightbox functionality
    // 'public/assets/libs/swiper/swiper-bundle.min.js',  // UNUSED: No swiper instances
    'public/assets/js/easy_background.js',             // USED: Background effects
    'public/assets/libs/shufflejs/shuffle.min.js',     // USED: Portfolio filtering
    'public/assets/libs/js-datepicker/datepicker.min.js',  // USED: Date picker
    'public/assets/libs/choices.js/public/assets/scripts/choices.min.js',  // USED: Enhanced selects
    // 'public/assets/libs/gumshoejs/gumshoe.min.js',  // UNUSED: Scroll spy not implemented
    'public/assets/libs/feather-icons/feather.min.js', // USED: 148 instances (data-feather)
    'public/assets/libs/tiny-slider/min/tiny-slider.js',  // USED: Legacy sliders
    'public/assets/js/plugins.init.js',                // USED: Plugin initialization
    'public/assets/js/app.js',                         // USED: Core app functionality
    'public/assets/js/voip-home.js',                   // USED: Custom VoIP functionality
    'public/assets/js/image-fallback.js',              // USED: Image error handling
    'public/assets/js/vanilla-lazy-loading.js',        // USED: Lazy loading images
    // 'public/assets/libs/@mantine/spotlight/dist/spotlight.umd.js',  // UNUSED: Search not implemented
    // 'public/assets/libs/aos/dist/aos.js'  // UNUSED: Using WOW.js instead
], 'public/js/app.min.js');

// Enable versioning in production for cache busting
if (mix.inProduction()) {
    mix.version();
}

// Configure Mix options for optimization  
mix.options({
    processCssUrls: true, // Enable CSS URL processing with webpack resolve
    terser: {
        terserOptions: {
            compress: {
                drop_console: true, // Remove console.log in production
                drop_debugger: true, // Remove debugger statements
                pure_funcs: ['console.log', 'console.info', 'console.debug', 'console.warn'],
                passes: 2, // Run terser twice for better optimization
            },
            mangle: true, // Mangle variable names for smaller size
            format: {
                comments: false, // Remove all comments
            },
        },
    },
    cssNano: {
        discardComments: {
            removeAll: true,
        },
        discardDuplicates: true,
        discardEmpty: true,
        minifyFontValues: true,
        minifySelectors: true,
        normalizeCharset: true,
        normalizePositions: true,
        normalizeWhitespace: true,
        orderedValues: true,
        reduceIdents: true,
        reduceInitial: true,
        reduceTransforms: true,
    },
});

// Configure webpack to resolve font paths properly
mix.webpackConfig({
    resolve: {
        alias: {
            '@fonts': path.resolve('public/assets/fonts'),
            '@unicons-fonts': path.resolve('public/assets/libs/@iconscout/unicons/fonts'),  // USED: 1257 instances
            // '@fa-webfonts': path.resolve('public/assets/libs/font-awesome/webfonts'),  // UNUSED: Font Awesome not used
            // '@bootstrap-fonts': path.resolve('public/assets/libs/bootstrap-icons/fonts'),  // UNUSED: Bootstrap icons not used
            // '@material-fonts': path.resolve('public/assets/libs/material-icons/iconfont'),  // UNUSED: Only MDI webfont is used
        }
    }
});

// Set the public path for assets
mix.setPublicPath('public');

// Note: CSS and JS are already minified by mix.styles() and mix.scripts()