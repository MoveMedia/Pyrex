/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,jsx,js,php,twig}"],
  theme: {
    extend: {},
  },
  plugins: [require("daisyui")],
}