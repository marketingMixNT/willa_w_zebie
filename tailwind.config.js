/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "2200px",
            },
            fontFamily: {
                JazminThin: [
                    "Jazmin-Thin",
                    "Times New Roman",
                    "Times",
                    "serif",
                ],
                JazminNormal: [
                    "Jazmin-ExtraLight",
                    "Times New Roman",
                    "Times",
                    "serif",
                ],
                AktivGrotesk: ["AktivGrotesk", "sans-serif"],
            },
            colors: {
                primary: {
                    400: "#c0b391",
                    600: "#a4897c",
                },
                secondary: {
                    400: "#34251a",
                    600: "#1c140e",
                },
                fontLight: "#fff",
                fontDark: "#000",

                bgLight: {
                    600: "#f6f6f6",
                },
            },
        },
    },
    plugins: [],
};
