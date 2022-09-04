/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        'mobile': '418px',
      },
      colors: {
        'primary': '#421A92',
        'secondary': '#151531',
      }
    },
  },
  plugins: [],
}
