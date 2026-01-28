@type {import('tailwindcss').Config}
export default {
  content: [
    "./index.html",
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.{js,ts,jsx,tsx,vue}",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        poppins: ['Poppins', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
