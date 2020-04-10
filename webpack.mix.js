const mix = require('laravel-mix');
const webpack = require('webpack');

mix.webpackConfig({
    plugins: [
        new webpack.providePlugin({
            '$': 'jquery',
            'jQuery': 'jquery',
            'window.jquery': 'jquery'
        })
    ]
});

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
    .sass('resources/sass/app.scss', 'public/css');
