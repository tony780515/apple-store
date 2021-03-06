const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .postCss('resources/css/applestore.css', 'public/css')
    .postCss('resources/css/template.css', 'public/css')
    .postCss('resources/css/shoppingcart.css', 'public/css')
    .postCss('resources/css/orderlist.css', 'public/css')
    .postCss('resources/css/searchlist.css', 'public/css');
