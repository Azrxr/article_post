/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  
  theme: {
    extend: {
      colors: {
        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"}
      },
      fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        'body': [
      'Inter', 
      'ui-sans-serif', 
      'system-ui', 
      '-apple-system', 
      'system-ui', 
      'Segoe UI', 
      'Roboto', 
      'Helvetica Neue', 
      'Arial', 
      'Noto Sans', 
      'sans-serif', 
      'Apple Color Emoji', 
      'Segoe UI Emoji', 
      'Segoe UI Symbol', 
      'Noto Color Emoji'
    ],
        'sans': [
      'Inter', 
      'ui-sans-serif', 
      'system-ui', 
      '-apple-system', 
      'system-ui', 
      'Segoe UI', 
      'Roboto', 
      'Helvetica Neue', 
      'Arial', 
      'Noto Sans', 
      'sans-serif', 
      'Apple Color Emoji', 
      'Segoe UI Emoji', 
      'Segoe UI Symbol', 
      'Noto Color Emoji'
    ]
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require('flowbite-typography'),
  ],
  safelist: ["bg-red-100", "bg-green-100", "bg-blue-100", "bg-yellow-100", "bg-indigo-100", "bg-purple-100", "bg-pink-100", "bg-red-200", "bg-green-200", "bg-blue-200", "bg-yellow-200", "bg-indigo-200", "bg-purple-200", "bg-pink-200", "bg-red-300", "bg-green-300", "bg-blue-300", "bg-yellow-300", "bg-indigo-300", "bg-purple-300", "bg-pink-300", "bg-red-400", "bg-green-400", "bg-blue-400", "bg-yellow-400", "bg-indigo-400", "bg-purple-400", "bg-pink-400", "bg-red-500", "bg-green-500", "bg-blue-500", "bg-yellow-500", "bg-indigo-500", "bg-purple-500", "bg-pink-500", "bg-red-600", "bg-green-600", "bg-blue-600", "bg-yellow-600", "bg-indigo-600", "bg-purple-600", "bg-pink-600", "bg-red-700", "bg-green-700", "bg-blue-700", "bg-yellow-700", "bg-indigo-700", "bg-purple-700", "bg-pink-700", "bg-red-800", "bg-green-800", "bg-blue-800", "bg-yellow-800", "bg-indigo-800", "bg-purple-800", "bg-pink-800", "bg-red-900", "bg-green-900", "bg-blue-900", "bg-yellow-900", "bg-indigo-900", "bg-purple-900", "bg-pink-900", "bg-red-950", "bg-green-950", "bg-blue-950", "bg-yellow-950", "bg-indigo-950", "bg-purple-950", "bg-pink-950"]
}

