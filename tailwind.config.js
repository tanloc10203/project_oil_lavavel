/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            boxShadow: {
                "3xl": "0 0 14px 6px rgba(0, 0, 0, 0.05)",
            },
            backgroundColor: {
                main: "#2aca68",
                transparent: "rgba(245,245,245,0.5)",
            },
            textColor: {
                main: "#2aca68",
            },
            borderColor: {
                main: "#2aca68",
            },
        },
    },
    plugins: [],
};
