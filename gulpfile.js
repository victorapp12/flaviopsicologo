var gulp = require('gulp');
var concat = require('gulp-concat');
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var livereload = require('gulp-livereload');

var paths = {
    sass: ['assets/stylesheets/**/*.sass']
};

function swallowError(error) {
    console.log(error.toString());
    this.emit('end');
}

gulp.task('default', ['sass']);

gulp.task('sass', function (done) {
     gulp.src('assets/stylesheets/application.sass')
         .pipe(sass().on('error', sass.logError))
         .pipe(gulp.dest('assets/stylesheets/'))
         .pipe(livereload())
         .on('end', done);
});

gulp.task('watch', ['sass'], function () {
    livereload.listen();
    gulp.watch(paths.sass, ['sass']);
});
