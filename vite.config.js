import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/sass/app.css',
                'resources/js/app.js',
                'resources/css/sass/home.scss'
            ],
            refresh: true,
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                api: 'modern-compiler',
                quietDeps: true,
                silenceDeprecations: ['color-functions', 'import', 'global-builtin','if-function']
            }
        }
    },
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js', // <-- Agrega esta línea
        },
    },
});