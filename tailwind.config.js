/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './admin/*.php',
    './admin/**/*.php',
    './user/*.php',
    './user/**/*.php',
  ],
  theme: {
    extend: {},
    theme: {
      primary: '#43A756',
    },
  },
  plugins: [],
}
