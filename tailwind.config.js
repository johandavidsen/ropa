module.exports = {
  purge: {
    content:[
    './resources/**/*.blade.php',
    './resources/**/*.js'
    ],
    options: {
      safelist: ['container', 'sm:container', 'md:container', 'lg:container', 'xl:container', '2xl:container'],
    }
  },
  darkMode: false, // or 'media' or 'class'
  separator: ':',
  theme: {
    extend: {},
    container: {
      center: true,
    },
    screens: {
      sm: '640px',
      md: '768px',
      lg: '1024px'
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
