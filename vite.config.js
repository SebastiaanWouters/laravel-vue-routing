import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vuePlugin from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vuePlugin()
    ],
     server: {
        host: '100.86.47.120',
        hmr: {
            host: '100.86.47.120'
        }
    },
    resolve: {
        alias: {
            "vue": "vue/dist/vue.esm-bundler.js"
        }
    }

});
