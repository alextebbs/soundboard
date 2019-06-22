var gulp    = require('gulp'),
rename      = require('gulp-rename'),
insert      = require('gulp-insert'),
fileinclude = require('gulp-file-include');

function do_sounds()
{
    return gulp.src(['src/sounds/**/*'])
        .pipe(gulp.dest('./www/assets/sounds/'))
}

gulp.task('do_sounds', do_sounds);

module.exports = {
    do_sounds: do_sounds,
};
