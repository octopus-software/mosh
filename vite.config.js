import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    base: '',
    server: {
        https: true, // 開発サーバーがHTTPSを使用するように設定
    },
    plugins: [
        laravel({
            input: ['resources/js/app.ts', 'resources/css/app.css'], // CSSファイルを追加
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
});
