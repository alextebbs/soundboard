var gulp    = require('gulp'),
rename      = require('gulp-rename'),
insert      = require('gulp-insert'),
fileinclude = require('gulp-file-include');

function do_data()
{
    return gulp.src(['src/data/**/*'])
        .pipe(gulp.dest('./www/assets/data/'))
}

gulp.task('do_data', do_data);

module.exports = {
    do_data: do_data,
};
