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
            colors: {
                wolqedark: '#001437',
                wolqedarkopacity: 'rgba(0, 20, 55, 0.5)',
                wolqedark77: 'rgba(0, 20, 55, 0.77)',
                wolqelight: '#bfc4cd',
                wolqelightopacity: 'rgba(191, 196, 205, 0.7)',
            },
            borderRadius: {
                'w51': '51px',
                'w42': '42px',
                'w27': '27px',
                'w21': '21px',
            },
        },
    },

    plugins: [forms],
};
