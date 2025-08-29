import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/bundle.css',  // CSS bundle (separate entry)
                'resources/js/bundle.js'     // JS bundle
            ],
            refresh: false,
        }),
        tailwindcss(),
    ],
    resolve: {
        alias: {
            '@public': path.resolve(__dirname, 'public'),
            '@assets': path.resolve(__dirname, 'public/assets')
        }
    },
    build: {
        sourcemap: false, // Disable source maps to avoid missing .map warnings
        rollupOptions: {
            output: {
                manualChunks: undefined,  // Prevent code splitting
                entryFileNames: 'assets/[name]-[hash].js',
                chunkFileNames: 'assets/[name]-[hash].js',
                assetFileNames: 'assets/[name]-[hash].[ext]'
            }
        },
        cssCodeSplit: true   // Allow CSS to be a separate entry
    },
    server: {
        hmr: false,
        watch: {    
            ignored: ['**/*.blade.php']
        }
    }
});
