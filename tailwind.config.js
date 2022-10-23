/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'roboto': ['Roboto', 'sans-serif'] ,
        'raleway': ['Raleway', 'sans-serif'] ,
      },
    },
  },
  plugins: [require('flowbite/plugin')],
}