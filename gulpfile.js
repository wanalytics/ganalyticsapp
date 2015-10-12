var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass(['app.scss'], 'public/css');
    mix.scripts(['jquery.easing.1.3.js', 'cbpAnimatedHeader.js', 'classie.js', 
        'contact_me.js', 'jqBootstrapValidation.js', 'app.js'], 'public/js');
	
});
