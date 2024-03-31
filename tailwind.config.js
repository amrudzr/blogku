/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php"],
    theme: [
        "dark",
        {
            mytheme: {
                primary: "#b200ff",

                secondary: "#00e900",

                accent: "#004fff",

                neutral: "#282c42",

                "base-100": "#2c272b",

                info: "#0098ff",

                success: "#00ffe1",

                warning: "#ff6f00",

                error: "#ff4b6c",
            },
        },
    ],
    plugins: [require('@tailwindcss/typography'), require("daisyui")],
};
