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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'public/website/css/bootstrap.min.css',
    'public/website/css/revolution-slider.css',
    'public/website/css/style.css',
    'public/website/css/responsive.css'
], 'public/css/all.css');


mix.scripts([
    'public/website/js/jquery.js', 
    'public/website/js/bootstrap.min.js',
    'public/website/js/revolution.min.js',
    'public/website/js/jquery-parallax.js',
    'public/website/js/bxslider.js',
    'public/website/js/owl.js',
    'public/website/js/jquery.fancybox.pack.js',
    'public/website/js/wow.js',
    'public/website/js/js-collection.js',
    'public/website/js/script.js',

], 'public/js/all.js');