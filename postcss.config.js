module.exports = {
  plugins: [
    require('postcss-import'),
    require('@tailwindcss/postcss')(), // ✅ Tailwind PostCSS plugin for v4
    require('autoprefixer'),
  ],
};
