/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js}"],
  darkMode: 'class',
  theme: {
    extend: {
      "colors": {
        'navbar-bg': '#1B5BDF',
      },
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

