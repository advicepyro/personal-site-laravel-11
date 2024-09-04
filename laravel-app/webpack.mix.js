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
    .styles([
        'resources/assets/external/magnific-popup/magnific-popup.css'
    ], 'public/css/vendor.css')
    .js([
        'resources/assets/js/app.js',
        'resources/assets/external/jquery-easing/jquery.easing.min.js',
        'resources/assets/external/magnific-popup/jquery.magnific-popup.min.js',
        'resources/assets/external/jqBootstrapValidation/jqBootstrapValidation.min.js',
        'resources/assets/js/freelancer.js'
    ], 'public/js/app.js')
    .sass('resources/assets/sass/app.scss', 'public/css/app.css')
    .version();
