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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            
                gap: {
                    '13': '3.25rem',
                    '15': '3.75rem',
                    '128': '32rem',
                    '144': '36rem',
                }
            
            },
            colors: {
                'black': '#000000' 
              }
        },
        
    },

    plugins: [forms],
};
