var gulp = require('gulp');
var rename = require('gulp-rename');
var elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

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



gulp.task("copyfiles", function(){
   gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
       .pipe(gulp.dest("resources/assets/js/"));

   gulp.src("vendor/bower_dl/bootstrap/less/**")
       .pipe(gulp.dest("resources/assets/less/bootstrap"));

   gulp.src("vendor/bower_dl/bootstrap-sass-official/assets/stylesheets/**")
       .pipe(gulp.dest("resources/assets/sass/bootstrap"));

   gulp.src("vendor/bower_dl/bootstrap/dist/js/bootstrap.js")
       .pipe(gulp.dest("resources/assets/js/"));

   gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
       .pipe(gulp.dest("public/assets/fonts"));

   gulp.src("vendor/bower_dl/fontawesome/less/**")
       .pipe(gulp.dest("resources/assets/less/fontawesome"));

   gulp.src("vendor/bower_dl/fontawesome/less/**")
       .pipe(gulp.dest("resources/assets/sass/fontawesome"));

   gulp.src("vendor/bower_dl/fontawesome/fonts/**")
       .pipe(gulp.dest("public/assets/fonts"));

    // copy datatables
   var dtDir = "vendor/bower_dl/datatables-plugins/integration/";

   gulp.src("vendor/bower_dl/datatables/media/js/jquery.datatables.js")
       .pipe(gulp.dest('resources/assets/js/'));

   gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.css')
       .pipe(rename('dataTables.bootstrap.less'))
       .pipe(gulp.dest('resources/assets/less/others/'));

   gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.css')
       .pipe(rename('_dataTables.bootstrap.scss'))
       .pipe(gulp.dest('resources/assets/sass/others/'));

   gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.js')
       .pipe(gulp.dest('resources/assets/js/'));

   // Copy Selectize
   gulp.src("vendor/bower_dl/selectize/dist/css/*")
       .pipe(gulp.dest('public/assets/selectize/css/'));

   gulp.src("vendor/bower_dl/selectize/dist/js/standalone/*")
       .pipe(gulp.dest("public/assets/selectize/"));

   // Copy pickadate
   gulp.src("vendor/bower_dl/pickadate/lib/compressed/themes/**")
       .pipe(gulp.dest("public/assets/pickadate/themes/"))

   gulp.src("vendor/bower_dl/pickadate/lib/compressed/picker.js")
       .pipe(gulp.dest("public/assets/pickadate/"));

   gulp.src("vendor/bower_dl/pickadate/lib/compressed/picker.date.js")
       .pipe(gulp.dest("public/assets/pickadate/"));

   gulp.src("vendor/bower_dl/pickadate/lib/compressed/picker.time.js")
       .pipe(gulp.dest("public/assets/pickadate/"));


   //copy redactor
   gulp.src("resources/assets/js/redactor/*")
       .pipe(gulp.dest("public/assets/redactor"));
   gulp.src("resources/assets/sass/redactor/*")
        .pipe(gulp.dest("public/assets/redactor/css/"));
   //Copy clean-blog less files.

   gulp.src("vendor/bower_dl/clean-blog/css/**")
       .pipe(gulp.dest("resources/assets/css/clean-blog"));
   gulp.src("vendor/bower_dl/clean-blog/css/clean-blog.css")
       .pipe(gulp.dest("resources/assets/sass/clean-blog/"));

   gulp.src("vendor/bower_dl/clean-blog/less/**")
       .pipe(gulp.dest("resources/assets/less/clean-blog/"));

    gulp.src("vendor/bower_dl/skrollr/dist/*")
        .pipe(gulp.dest("resources/assets/js/skrollr/"));

});

elixir(function(mix) {
    mix
        .phpUnit()
        .less('app.less')
        .scripts([
            'js/jquery.js',
            'js/bootstrap.js',
            'js/skrollr/skrollr.min.js',
            'js/blog.js'
            ],
            'public/assets/js/blog.js',
            'resources//assets')
        .scripts([
            'js/jquery.js',
            'js/bootstrap.js',
            'js/jquery.dataTables.js',
            'js/dataTables.bootstrap.js'
            ],
            'public/assets/js/admin.js',
            'resources//assets'
        )
        .less(
            'blog.less',
            'public/assets/css/blog.css'
        )
        .version(['public/assets/css/blog.css','public/css/app.css','public/assets/js/blog.js']);






    //mix.version(['public/assets/css/blog.css','public/css/app.css','public/assets/js/blog.js']);
});