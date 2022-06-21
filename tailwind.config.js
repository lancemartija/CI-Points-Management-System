/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.{html, php}',
    './admin/*.{html, php}',
    './admin/**/*.{html, php}',
    './user/*.{html, php}',
    './user/**/*.{html, php}',
  ],
  theme: {
    extend: {},
    theme: {
      primary: '#43A756',
    },
  },
  plugins: [],
}
