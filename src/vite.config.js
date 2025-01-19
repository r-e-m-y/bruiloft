import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',  // <= important: listen on all interfaces
        port: 5173,       // typical default
        // Force polling if file changes aren't detected inside Docker:
        watch: {
            usePolling: true,
        },
    },
});
