/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,jsx,js,php,twig}"],
  theme: {
    extend: {},
  },
  daisyui: {
    themes: ['black'],
  },
  plugins: [require("daisyui")],
}