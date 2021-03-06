import runSequence from 'run-sequence';
import gulp from 'gulp';

gulp.task('styles:dependencies', () => (
	runSequence(
		'sprites',
		'icons',
		'styles'
	)
));

gulp.task('default', () => (
	runSequence(
		[
			'styles:dependencies',
			'templates',
			'copy'

		],
		'server',
		'watch'
	)
));

gulp.task('build', () => (
	runSequence(
		'styles:dependencies',
		'scripts',
		'copy',
		'templates'
	)
));
