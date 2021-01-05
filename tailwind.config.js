module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        bgColor: "#F9FBFB",
        borderLine: "E8E8E8", 
        inputBorder: {
          light: "#356EFF",
          dark: "#BDBDBD"
        },
        brand: {
          gray: {
            light: "#B5B5B5",
            medium: "#AEAEAE",
            dark: "#3A3A3A"
          },
          green: {
            light: "#D5F5E2"
          }
        }
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
