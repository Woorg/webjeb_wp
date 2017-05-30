import gulp from 'gulp';
import plumber from 'gulp-plumber';
import gulpIf from 'gulp-if';
import rupture from 'rupture';
import stylint from 'gulp-stylint';
import stylus from 'gulp-stylus';
import importIfExist from 'stylus-import-if-exist';
import autoprefixer from 'autoprefixer';
import postcss from 'gulp-postcss';
import mqpacker from 'css-mqpacker';
import oldie from 'oldie';
import postcssfixes from 'postcss-fixes';
import dib from 'postcss-display-inline-block';
import gcmq from 'gulp-group-css-media-queries';
import cssnano from 'cssnano';
import rename from 'gulp-rename';
import sourcemaps from 'gulp-sourcemaps';
import errorHandler from 'gulp-plumber-error-handler';

const isDebug = process.env.NODE_ENV !== 'production';

gulp.task('styles', () => (
	gulp.src('app/styles/*.styl')
		.pipe(plumber({errorHandler: errorHandler(`Error in \'styles\' task`)}))
		.pipe(gulpIf(isDebug, sourcemaps.init()))
		.pipe(stylus({
			use: [
				importIfExist(),
				rupture()
			],
			'include css': true
		}))
		.pipe(postcss([
			autoprefixer({browsers: [
				'> 0.2%',
				'last 8 versions',
				'Firefox ESR',
				'android 4',
				'Firefox < 20'
			]}),
			cssnano({zindex: false}),
			mqpacker(),
			// oldie(),
			postcssfixes(),
			dib()
		]))
		// .pipe(gulpIf(!isDebug, gcmq()))
		// .pipe(gulpIf(!isDebug, nano({zindex: false})))

		.pipe(rename({suffix: '.min'}))
		.pipe(gulpIf(isDebug, sourcemaps.write()))
		.pipe(gulp.dest('../assets/styles'))
));

gulp.task('styles:lint', () => (
	gulp.src(['app/**/*.styl', '!app/styles/**'])
		.pipe(stylint({
			reporter: 'stylint-stylish',
			reporterOptions: {verbose: true}
		}))
		.pipe(stylint.reporter())
		.pipe(stylint.reporter('fail', {failOnWarning: true}))
));
