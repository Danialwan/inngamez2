/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resource/*",
    "./public/*",

  ],
  theme: {
    extend: {},
    pagination: theme => ({
        // Customize the color only. (optional)
        color: theme('colors.teal.600'),

        // Customize styling using @apply. (optional)
        wrapper: 'flex justify-center list-reset',

        // Customize styling using CSS-in-JS. (optional)
        wrapper: {
            'display': 'flex',
            'justify-items': 'center',
            '@apply list-reset': {},
        },
    })
  },
  plugins: [
    // require('tailwindcss-plugins/pagination'),
  ],
}

