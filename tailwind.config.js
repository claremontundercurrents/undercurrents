/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./**/*.php",
      "./src/**/*.js"
    ],
    theme: {
      extend: {
        "colors": {
            "tred": "red",
            "tdarkred": "#D12229",
            "tdark": "#111111",
        },
        backgroundImage: {
          "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
        }
      },
    },
    plugins: [],
  }
  
  