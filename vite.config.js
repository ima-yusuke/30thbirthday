import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/index-top.css',
                'resources/css/index-about.css',
                'resources/css/index-profile.css',
                'resources/css/index-album.css',
                'resources/css/side-menu.css',
                'resources/css/admin.css',
                'resources/js/app.js',
                'resources/js/scroll-animation.js',
                'resources/js/modal.js',
                'resources/js/side-menu.js',
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
                appStyles: 'resources/css/app.css',
                indexTopStyles: 'resources/css/index-top.css',
                indexAboutStyles: 'resources/css/index-about.css',
                indexProfileStyles: 'resources/css/index-profile.css',
                indexAlbumStyles: 'resources/css/index-album.css',
                sideMenuStyles: 'resources/css/side-menu.css',
                adminStyles: 'resources/css/admin.css',
                app: 'resources/js/app.js',
                scrollAnimation: 'resources/js/scroll-animation.js',
                modal: 'resources/js/modal.js',
                sideMenu: 'resources/js/side-menu.js',
                dashPost: 'resources/js/admin/dash-post.js',
            }
        }
    }
});
