/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'mainOrange': '#DB6310',
        'mainblack': '#131313',
      },
      padding: {
        'mainPaddingX': '128px'
      }
    },
  },
  plugins: [],
}

