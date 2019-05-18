const mix = require('laravel-mix');

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

mix.js([
  'resources/js/app.js',
  'resources/js/jquery-3.2.1.min.js',
  'resources/js/bootstrap.min.js',
  'resources/js/jquery.slicknav.min.js',
  'resources/js/owl.carousel.min.js',
  'resources/js/jquery.nicescroll.min.js',
  'resources/js/jquery.zoom.min.js',
  'resources/js/jquery-ui.min.js',
  'resources/js/main.js',
], 'public/js')
  .sass('resources/sass/app.scss', 'public/css')
  .styles([
    'resources/css/bootstrap.min.css',
    'resources/css/font-awesome.min.css',
    'resources/css/flaticon.css',
    'resources/css/slicknav.min.css',
    'resources/css/jquery-ui.min.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/animate.css',
    'resources/css/style.css',
  ], 'public/css/app.css');
