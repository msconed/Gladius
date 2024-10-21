/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    
    theme: {
      extend: {
        colors: {
          'discord_bg1': "#313338",
          'discord_bg2': '#1E1F22',
          
        },
      },
    },
    plugins: [],
  }