import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resource/sass/app.scss'],
            refresh: true,
        }),
        react(),
    ],
    resolve: {
        alias: {
            '@' : 'resource/js',
        },
    }
});
