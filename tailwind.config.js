/** @type {import('tailwindcss').Config} */
module.exports = {
    mode: 'jit',
    prefix: 'tw-',
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    corePlugins: {
        preflight: false,
    },
    theme: {
      extend: {},
    },
    plugins: [],
  }
