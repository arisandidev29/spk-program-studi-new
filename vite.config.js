import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/chart.js',
                'resources/js/presentaseNilaiVektorChart.js',
            ],
            refresh: true,
        }),
        tailwindcss()
    ],
    // server: {
    //     host: 'localhost', // Izinkan akses dari semua IP
    //     port: 5173, // Pastikan port sesuai
    //     strictPort: true, // Paksa menggunakan port 5173
    //     hmr: {
    //         host: 'localhost', // Sesuaikan dengan domain Laravel Anda
    //         port: 5173,
    //     },
    // },
});
