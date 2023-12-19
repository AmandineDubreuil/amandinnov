/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    // couleurs
    colors: {
      primary: "#99d959",
      primary_light: "#ccf294",
      primary_extralight: "#e7f2bd",
      secondary: "#5a6273",
      secondary_light: "#f2f2f2",
      white: "#ffffff"
    },

    //extend


      extend: {
        fontFamily: {
          sans: ["Roboto", "Helvetica", "Arial", "sans-serif"],
          mono: ["RobotoMono","Liberation Mono", "Courier New"]
        },

    },
  },
  plugins: [],
};
