/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  darkMode: 'class',
  theme: {
    extend: {
      "space": {
        "13": "width: 8px"
      },
      "fontFamily": {
        'poppins': 'Poppins'
      }
    },
  },
  plugins: [],
}

