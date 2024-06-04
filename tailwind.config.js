/** @type {import('tailwindcss').Config} */
export default {
  darkMode : 'media',
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors:{
        violet:{
          70: "#EBEFFF",
          110: "#AFB3FF",
        }
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

