/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php", // Hledá třídy ve všech PHP souborech
    "./templates/**/*.php", // Hledá třídy v podsložkách
    "./js/**/*.js" // Hledá třídy v JS souborech
],
  theme: {
    extend: {},
  },
  plugins: [],
}

