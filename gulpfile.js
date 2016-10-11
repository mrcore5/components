const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// original
/*elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});*/


/*elixir(mix => {
    mix.webpack('app.js');
});*/


/*elixir(function(mix) {

    mix.styles([
        "yamm.css",
    ], 'Assets/css/theme-bundle.css', 'Assets/css');

    mix.scripts([
        "jquery-2.1.4.min.js",
    ], 'Assets/js/theme-bundle.js', 'Assets/js');

    mix.scripts([
        "html5shiv.js",
        "respond.min.js"
    ], 'Assets/js/shiv-bundle.js', 'Assets/js');

});
*/
