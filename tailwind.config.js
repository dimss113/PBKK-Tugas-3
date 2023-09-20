/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", "sans-serif"],
                montserrat: ["Montserrat", "sans-serif"],
                poppins: ["Poppins", "sans-serif"],
                inter: ["Inter", "sans-serif"],
            },
        },
        colors: {
            main: "#F9F1E7",
            grey: "#111827",
            "grey-light": "#6B7280",
            "grey-lighter": "#E5E7EB",
        },
    },
    plugins: [],
};
