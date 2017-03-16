const { mix } = require('laravel-mix');

var resourcesCss = 'resources/assets/css/';
var resourcesFonts = 'resources/assets/fonts/';
var resourcesJs = 'resources/assets/js/';
var resourcesSass = 'resources/assets/sass/';

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
mix.copy('node_modules/materialize-css/dist/css/materialize.min.css', 'public/css/materialize.css')
  // copy fonts
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Bold.eot', 'public/fonts/roboto/Roboto-Bold.eot')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Bold.ttf', 'public/fonts/roboto/Roboto-Bold.ttf')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Bold.woff', 'public/fonts/roboto/Roboto-Bold.woff')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Bold.woff2', 'public/fonts/roboto/Roboto-Bold.woff2')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Light.eot', 'public/fonts/roboto/Roboto-Light.eot')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Light.ttf', 'public/fonts/roboto/Roboto-Light.ttf')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Light.woff', 'public/fonts/roboto/Roboto-Light.woff')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Light.woff2', 'public/fonts/roboto/Roboto-Light.woff2')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Medium.eot', 'public/fonts/roboto/Roboto-Medium.eot')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Medium.ttf', 'public/fonts/roboto/Roboto-Medium.ttf')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Medium.woff', 'public/fonts/roboto/Roboto-Medium.woff')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Medium.woff2', 'public/fonts/roboto/Roboto-Medium.woff2')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Regular.eot', 'public/fonts/roboto/Roboto-Regular.eot')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Regular.ttf', 'public/fonts/roboto/Roboto-Regular.ttf')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Regular.woff', 'public/fonts/roboto/Roboto-Regular.woff')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Regular.woff2', 'public/fonts/roboto/Roboto-Regular.woff2')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Thin.eot', 'public/fonts/roboto/Roboto-Thin.eot')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Thin.ttf', 'public/fonts/roboto/Roboto-Thin.ttf')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Light.woff', 'public/fonts/roboto/Roboto-Thin.woff')
  .copy('node_modules/materialize-css/dist/fonts/roboto/Roboto-Thin.woff2', 'public/fonts/roboto/Roboto-Thin.woff2')
  // js copy
  .copy('node_modules/materialize-css/dist/js/materialize.min.js', 'public/js/materialize.js')
  .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.js')
