import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import ViteSassPlugin from 'vite-plugin-sass';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/app.scss','resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        ViteSassPlugin(),
    ],
    build: {
        assetsInlineLimit: 0,
      },
});
