/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*/*.{html,js,php}", "*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        "dark-teal": "#008080",
        "light-teal": "#b2d8d8",
        "lm-teal": "#66b2b2",
        "lm-teal-hover": "#006666",
      },
    },
  },
  plugins: [],
};
