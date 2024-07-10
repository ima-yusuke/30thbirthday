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
            colors:{
                'opening-red':'#812B2D',
                'opening-white':'#F5E9E5',
                'about-orange': '#E95122',
                'about-white': '#F8F5ED',
                'about-black': '#221917',
                'profile-yellow': '#FFCD4D',
                'album-green': '#336341',
                'album-black':'rgb(32,32,32)'
            }

        },
    },

    plugins: [forms],

};
