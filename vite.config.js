/**
 * vite.config.js
 *
 * WHY THIS FILE EXISTS:
 * Vite is the build tool that compiles Vue components and JS into a single
 * bundle (public/js/app.js). Laravel's Vite plugin handles:
 *   - Hot Module Replacement (HMR) in development
 *   - Asset fingerprinting for cache busting in production
 *   - Automatic injection of the <script> tag in Blade via @vite()
 *
 * IMPORTANT: This config uses laravel-vite-plugin which outputs to
 * public/build/ and generates a manifest.json for Laravel to reference.
 * However, for maximum simplicity (no asset pipeline complications),
 * the build output is configured to go directly to public/js/app.js
 * so the Blade template can reference it with asset('js/app.js').
 */

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import { resolve } from 'path'

export default defineConfig({
    plugins: [
        vue(),
    ],

    // Resolve Vue aliases
    resolve: {
        alias: {
            '@': resolve(__dirname, 'resources/js'),
            'vue': 'vue/dist/vue.esm-bundler.js'
        }
    },

    // Build configuration
    build: {
        // Output directory — goes into Laravel's public/js folder
        outDir: 'public/js',
        emptyOutDir: false,

        rollupOptions: {
            input: {
                // Entry point: resources/js/app.js
                app: resolve(__dirname, 'resources/js/app.js'),
            },
            output: {
                // Output as a single file: public/js/app.js
                entryFileNames: 'app.js',
                chunkFileNames: '[name].js',
                assetFileNames: '[name].[ext]',
            }
        },

        // Target modern browsers (ES2020+)
        target: 'es2020',

        // Minify in production
        minify: 'esbuild',
    },

    // Dev server configuration
    server: {
        host: 'localhost',
        port: 5173,
        // Proxy API calls to Laravel's PHP dev server
        proxy: {
            '/api': {
                target: 'http://127.0.0.1:8000',
                changeOrigin: true,
            },
            '/sanctum': {
                target: 'http://127.0.0.1:8000',
                changeOrigin: true,
            }
        }
    }
})
