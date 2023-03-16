import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),


    ],
    server: {
        host: '0.0.0.0',
        hmr: {
            host: 'ddd.localhost'
        },
        port: 3000,
        open: false
    }
});
