const colors = require("tailwindcss/colors");

module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        // textColor: theme => theme('colors'),
        backgroundColor: (theme) => theme("colors"),
        extend: {
            colors: {
                blue: {
                    1: "#989FFE",
                    2: "#5372e7",
                },
                red: {
                    1: "#e8264f",
                },
                green: {
                    1: "#1D907E",
                },
                yellow: {
                    1: "#FDB815",
                },
                utama: "#FA1F35",
                utamaHover: "#C81022",
                kedua: "#222649",
                keduaHover: "#171A39",
                lightBlue: "#00B2FF",
                softBlue: "#41C6FF",
                lightYellow: "#FFED00",
                softYellow: "#FBEE4D",
                lightGreen: "#00FF43",
                softGreen: "#53FF80",
                smoothGreen: "#6AC34F",
                lightRed: "#E60202",
                softRed: "#FE3838",
                darkGray: "#333333",
                lightGray: "#A6A6A6",
                softGray: "#E9EDF2",
                dark: "#1D1D1D",
                lime: "#FFD470",
                orangeRed: "#FA7E1F",
            },
            width: {
                sideOpen: "calc(100% - theme('spacing.72'))",
                sideClose: "calc(100% - theme('spacing.20'))",
            },
            height: {
                sideLG: "calc(100vh - 250px)",
                sideXL: "calc(100vh - 200px)",
            },
            backgroundImage: {
                checklist:
                    "url('https://www.pikpng.com/pngl/m/602-6020368_get-free-digital-training-worth-147-black-checklist.png')",
            },
            outline: {
                primary: `2px solid #FA1F35`,
            },
        },
        colors: {
            transparent: "transparent",
            black: colors.black,
            white: colors.white,
            purple: colors.purple,
            green: colors.green,
            blue: colors.blue,
            gray: colors.trueGray,
            indigo: colors.indigo,
            rose: colors.rose,
            yellow: colors.amber,
            lime: colors.lime,
            red: colors.red,
            warmGray: colors.warmGray,
        },
        zIndex: {
            0: 0,
            10: 10,
            20: 20,
            30: 30,
            40: 40,
            50: 50,
            25: 25,
            75: 75,
            100: 100,
            999: 999,
            auto: "auto",
        },
    },
    variants: {
        extend: {
            backgroundColor: ["checked"],
            borderColor: ["checked"],
            backgroundImage: ["checked"],
        },
    },
    plugins: [],
};
