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
//
// mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/front/css/bootstrap.css',
    'resources/assets/front/css/flexslider.css',
    'resources/assets/front/css/memenu.css',
    'resources/assets/front/css/style.css',

], 'public/css/front.css');