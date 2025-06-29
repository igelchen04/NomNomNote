import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            borderRadius: {
                 '36': '36px',
                     },

            colors: {
                nomblue: {
                    pastel: '#afc1d0',
                    azur:'#1c3f60',
                    dark: '#0b1320',
                    },
                nomgrey: '#d9d9d9',
                nomred: '#e46f56',
                 },

             fontFamily: {
                inter: ['Inter', 'sans-serif'],
                },
        },
    },

    plugins: [forms],
};
