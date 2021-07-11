const mix = require("laravel-mix");
require("laravel-mix-blade-reload");
var LiveReloadPlugin = require("webpack-livereload-plugin");
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
mix.sass("resources/scss/bootstrap.scss", "public/css");
mix.js("resources/js/app.js", "public/js").bladeReload();
mix.browserSync("127.0.0.1:8000");
