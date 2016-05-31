import gulp from 'gulp';
import sass from 'gulp-sass';
import util from 'gulp-util';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import minifyCss from 'gulp-minify-css';
import mqpacker from 'css-mqpacker';
import rename from 'gulp-rename';
import sourcemaps from 'gulp-sourcemaps';
import livereload from 'gulp-livereload';

import notifyError from '../utils/error-notifier';
import options from '../options';
import config from '../config';

gulp.task('sass', () => {
	return compile(config.src.styles, config.dist.filename);
});

const compile = ( entry, filename ) => {
	return gulp.src(entry)
		.pipe(options.debug ? sourcemaps.init() : util.noop())
		.pipe(sass())
		.on('error', notifyError)
		.pipe(options.production ? minifyCss() : util.noop())
		.pipe(postcss([
      		autoprefixer({ browsers: config.browserSupport }),
      		mqpacker
    	]))
		.pipe(rename(filename + '.css'))
		.pipe(options.debug ? sourcemaps.write('./') : util.noop())
		.pipe(gulp.dest(config.dist.styles))
		.pipe(options.debug ? livereload() : util.noop());
};