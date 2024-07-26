import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/scroll-animation.js',
                'resources/js/modal.js',
                'resources/js/admin/dash-post.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: 'localhost'
        }
    },
    build: {
        manifest: 'manifest.json',
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                appStyles: 'resources/css/app.css',
                scrollAnimation: 'resources/js/scroll-animation.js',
                modal: 'resources/js/modal.js',
                dashPost: 'resources/js/admin/dash-post.js',
            }
        }
    }
});
