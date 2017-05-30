var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

gulp.task('watch', function() {
	browserSync.init({
	files: [
		'./**/*.php',
		'./*.php'
	],
	proxy: 'http://webjeb.local',
	notify: false
	});
  gulp.watch('./**/*.php', [reload]);
  // gulp.watch('./**/*.js', ['js', reload]);
  // gulp.watch('images/src/*', ['images', reload]);
});


gulp.task('default', ['watch']);
