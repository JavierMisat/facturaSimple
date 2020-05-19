var elixir = require('laravel-elixir');

/*
|--------------------------------------------------------------------------
| Elixir Asset Management
|--------------------------------------------------------------------------
|
| Elixir provides a clean, fluent API for defining some basic Gulp tasks
| for your Laravel application. By default, we are compiling the Less
| file for our application, as well as publishing vendor resources.
|
*/

elixir(function(mix) {

    mix.copy('bower_components/bootstrap/dist/fonts', 'public/fonts');
    mix.copy('bower_components/fontawesome/fonts', 'public/fonts');
    mix.copy('bower_components/ckeditor', 'public/vendor/ckeditor');
    mix.copy('resources/assets/img', 'public/img');
    mix.copy('resources/assets/fonts', 'public/fonts');

    mix.styles([
        'bower_components/fontawesome/css/font-awesome.css',
        'bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css',
        'bower_components/growl/stylesheets/jquery.growl.css',
        'bower_components/perfect-scrollbar/css/perfect-scrollbar.css',
        'bower_components/loaders.css/loaders.css',
        'bower_components/c3/c3.css',
        'bower_components/fullcalendar/dist/fullcalendar.css'
    ], 'public/css/vendor.css', './');

    mix.less([
        'resources/assets/less/app-green.less'
    ], 'public/css/app-green.css', './');

    mix.less([
        'resources/assets/less/app-red.less'
    ], 'public/css/app-red.css', './');

    mix.less([
        'resources/assets/less/app-blue.less'
    ], 'public/css/app-blue.css', './');

    mix.less([
        'resources/assets/less/app-orange.less'
    ], 'public/css/app-orange.css', './');



    mix.scripts([
        'bower_components/jquery/dist/jquery.js',
        'bower_components/bootstrap/dist/js/bootstrap.js',
        'bower_components/underscore/underscore.js',
        'bower_components/moment/min/moment.min.js',
        'bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.js',
        'bower_components/fullcalendar/dist/fullcalendar.js',
        'bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
        'bower_components/Chart.js/Chart.js',
        'bower_components/growl/javascripts/jquery.growl.js',
        'bower_components/d3/d3.min.js',
        'bower_components/c3/c3.min.js',
        'bower_components/circles/circles.js',
    ],  'public/js/vendor.js', './');

    mix.scripts([
        'resources/assets/js/app.js'
    ],  'public/js/app.js', './');


});