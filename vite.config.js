import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',   // Pastikan file JS ada
                'resources/sass/app.scss' // Pastikan file SCSS ada
            ],
            refresh: true,
        }),
    ],
});
