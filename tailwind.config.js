import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },

            gap: {
                '13': '3.25rem',
                '15': '3.75rem',
                '128': '32rem',
                '144': '36rem',
            },
            colors: {
                transparent: 'transparent', 
                current: 'currentColor', 
                black: colors.black, 
                white: colors.white, 
                emerald: colors.emerald, 
                indigo: colors.indigo, 
                yellow: colors.yellow, 
                stone: colors.warmGray, 
                sky: colors.lightBlue, 
                neutral: colors.trueGray, 
                gray: colors.coolGray, 
                slate: colors.blueGray, 
                lime: colors.lime, 
                rose: colors.rose, 
                orange: colors.orange
            },
            
        },

    },
plugins: [forms],
};

