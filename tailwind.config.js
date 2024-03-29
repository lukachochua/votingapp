const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'gray-background': '#f7f8fc',
                current: colors.current,
                transparent: colors.transparent,
                black: colors.black,
                white: colors.white,
                slate: colors.slate,
                gray: colors.neutral,
                'blue-hover': '#2879bd',
                'yellow': '#ffc73c',
                'red': '#ec454f',
                'red-100': '#fee2e2',
                'green': '#1aab8b',
                'green-50': '#f0fdf4',
                'purple': '#8b60ed',
                'blue': '#328af1'
            },
            maxWidth: {
                custom: '68.5rem'
            },
            boxShadow: {
                card: '4px 4px 15px 0 rgba(36, 37, 38, 0.08)',
                dialog: '3px 4px 15px 0 rgba(36, 37, 38, 0.22)',
            },
            spacing: {
                22: '5.5rem',
                70: '17.5rem',
                76: '19rem',
                104: '26rem',
                128: '32rem',
                175: '43.75rem'
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },

            fontSize: {
                xxs: ['0.625rem', {lineHeight: '1rem'}],
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp'),
    ],

    purge: {
        content: [
            './storage/framework/views/*.php',
            './resources/**/*.blade.php',
        ],
        safelist: [
            'bg-purple',
            'bg-yellow',
            'bg-green',
            'bg-red',
        ],
    }, 
};
