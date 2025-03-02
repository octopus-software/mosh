import forms from '@tailwindcss/forms';
import flowbitePlugin from "flowbite/plugin";

/** @type {import('tailwindcss').Config} */
export default {
    mode: 'jit',
    darkMode: 'class',
    plugin: [flowbitePlugin],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['"M PLUS Rounded 1c"', 'sans-serif'],
            },
            colors: {
                main: '#bbe8fe', // ブランドカラー
                background: '#fafdff', // 背景色
                lightBlue: '#7ccaff', // ボタンホバー色
            },
        },
    },

    plugins: [
        forms,
    ],
};
