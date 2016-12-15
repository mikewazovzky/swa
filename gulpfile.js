const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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

elixir(mix => {
    mix
		.sass('app.scss')
		.sass('main.scss')
		.scripts(['service.js', 'user.js', 'location.js', 'script.js'], 'public/js/app.js');
});

elixir(function(mix) {
    mix.browserSync({
        proxy: 'travelblog'
    });
});