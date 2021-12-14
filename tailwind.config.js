module.exports = {
    content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
    darkMode: false, // or 'media' or 'class'
    separator: ':',
    theme: {
        extend: {
            colors: {},
        },
        container: {
            center: true,
        },
        screens: {
            sm: '640px',
            md: '768px',
            lg: '1024px',
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
