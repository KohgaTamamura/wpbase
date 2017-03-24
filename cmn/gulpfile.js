var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var plumber = require('gulp-plumber');


gulp.task('sass', function(){
  gulp.src('./css/scss/*.scss')
  .pipe(sass().on('error', sass.logError))
  .pipe(plumber())
  .pipe(gulp.dest('./css/'));
});


gulp.task('watchTask', function(){
  gulp.watch(['.scss', './css/scss/*.scss','./css/scss/**/*.scss'], ['sass']);
});


gulp.task('default',['sass','watchTask']);