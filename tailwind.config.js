/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
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

