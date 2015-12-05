var elixir = require('laravel-elixir');
var gulp = require('gulp');
var shell = require('gulp-shell');
require('laravel-elixir-vueify');

var Task = elixir.Task;

var paths = {
    "assets": "./resources/assets/",
    "public": "./public/",
    "vendor": "./resources/assets/vendor/",
    "scripts": "./resources/assets/scripts/"
}

elixir.extend('speak', function(message){
    new Task('speak', function(){
        return gulp.src('').pipe(shell('say ' + message));
    });
});

gulp.task('hello', function(){
    console.log('First Gulp Task');
});

elixir(function(mix) {
    mix
        .copy(paths.vendor + 'font-awesome/fonts/**', paths.public + 'fonts')
        .copy(paths.vendor + 'bootstrap/fonts/**', paths.public + 'fonts/bootstrap/')
        .sass('app.scss')
        .scripts([
            paths.vendor + 'jquery/dist/jquery.min.js',
            paths.vendor + 'bootstrap/dist/js/bootstrap.js',
            paths.scripts + 'sidebar_menu.js'
        ], 'public/js/app.js')
        .browserify('main.js')
        //.phpUnit()
        .speak('Compilation complete!');
});