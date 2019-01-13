let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .scripts([
    'resources/assets/js/main.js',
    'resources/assets/js/optional.js',
  ], 'public/js/all.js')
  .scripts([
    'resources/assets/js/slick/slick.min.js',
  ], 'public/js/slick.js')
  .styles([
    'resources/assets/css/main.css',
    'resources/assets/css/optional.css',
    'resources/assets/css/additional.css',
  ], 'public/css/all.css')
  .styles([
    'resources/assets/js/slick/slick.css',
  ], 'public/css/slick.css')
  .version()
  .copyDirectory('resources/assets/img', 'public/img')
  .copyDirectory('resources/assets/fonts', 'public/fonts')
  .copyDirectory('resources/assets/html', 'public/html');
