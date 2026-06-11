// File: vite.config.js

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            // Daftar file aset yang akan diproses Vite
            input: [
                'resources/css/app.css',
                'resources/js/app.js'
            ],
            // Hot module replacement - otomatis refresh browser saat kode berubah
            refresh: true,
        }),
    ],
});

