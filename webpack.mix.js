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

// mix
//     .setPublicPath('/public/home')
//     .styles([
//     'resources/assets/front/css/bootstrap.css',
//     'resources/assets/front/css/flexslider.css',
//     'resources/assets/front/css/memenu.css',
//
// ], 'front.css');

mix.styles([
       'resources/assets/user/css/bootstrap.css',
       'resources/assets/user/css/mdb.css',
       'resources/assets/user/css/modules/animations-extended.css',
       'resources/assets/user/css/style.css',
    ], 'public/user/css/user.css');

mix.js([
        'resources/assets/user/js/jquery-3.3.1.min.js',
        'resources/assets/user/js/popper.min.js',
        'resources/assets/user/js/bootstrap.min.js',
        'resources/assets/user/js/mdb.min.js',
    ], 'public/user/js/user.js');