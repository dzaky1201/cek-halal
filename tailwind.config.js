module.exports = {
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                primary: {
                    100: "#209777",
                    200: "#BEEF71",
                },
                lavender_rose: "#FB8B73",
                gray: {
                    primary: "#F8F9FA",
                    secondary: "#ACB5BD",
                },
                black_ori: "#212429",
                bg_large: "#f7f7f7",
            },
            fontFamily: {
                primary: ["Inter"],
            },
            maxWidth: {
                mobile: "30rem",
            },
        },
    },
    variants: {
        extend: {
            backgroundColor: ["active"],
        },
    },
    plugins: [],
};
