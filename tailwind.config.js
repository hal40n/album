/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            boxShadow: {
                'hover-shadow': '0 2px 3px rgba(0, 0, 0, 0.3)',
            },
            translate: {
                '-3': '-0.1875rem',
            },
            transitionProperty: {
                'height': 'height',
                'spacing': 'margin, padding',
                'position': 'top, left',
                'shadow': 'box-shadow',
            },
        },
    },
    variants: {
        extend: {
            boxShadow: ['hover'],
            translate: ['hover'],
            position: ['hover'],
        },
    },
    plugins: [],
}

