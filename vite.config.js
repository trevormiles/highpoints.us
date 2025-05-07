import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                // Use the modern Sass API
                implementation: 'sass',
                sassOptions: {
                    outputStyle: 'compressed',
                },
            },
        },
    },
});
