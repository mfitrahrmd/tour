/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.php",
    "./auth/**/*.php",
    "./cart/**/*.php",
    "./tour/**/*.php",
    "./component/**/*.php",
    "./src/**/*.{js,jsx}"
  ],
  theme: {
    extend: {
      colors: {
        jaffa: {
          50: "#fef6ee",
          100: "#fcead8",
          200: "#f8d1b0",
          300: "#f4b07d",
          400: "#ef8b52",
          500: "#ea6525",
          600: "#db4c1b",
          700: "#b63818",
          800: "#912f1b",
          900: "#752819",
          950: "#3f110b",
        },
        "puerto-rico": {
          50: "#effefb",
          100: "#c7fff4",
          200: "#90ffe9",
          300: "#50f8dd",
          400: "#1de4cc",
          500: "#04bfab",
          600: "#00a193",
          700: "#058076",
          800: "#0a655f",
          900: "#0d544f",
          950: "#003332",
        },
      },
    },
  },
  plugins: [],
}

