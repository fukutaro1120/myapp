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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/index.js', 'public/js')
    .js('resources/js/accordion.js', 'public/js')
    .js('resources/js/accordion.min.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/index.scss', 'public/css')
    .sass('resources/sass/bak.scss', 'public/css')
    .sass('resources/sass/accordion.scss', 'public/css')
    .sass('resources/sass/font.scss', 'public/css')
    .sass('resources/sass/edit.scss', 'public/css');
