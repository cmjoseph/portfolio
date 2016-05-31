import gulp from 'gulp';
import watch  from 'gulp-watch';
import livereload from 'gulp-livereload';

import options from '../options';
import config from '../config';

gulp.task('build', () => {

	if ( options.watch ) {
		gulp.start('build:watch');
	} else {
		gulp.start('build:prod');
	}

});


gulp.task('build:watch', ['sass','scripts'], () => {

	livereload.listen();

	// -- Watch styles
	watch(config.watch.styles, () =>{
		gulp.start('sass');
	});

	// -- Watch js libs
	watch(config.watch.scripts.libs, () => {
		gulp.start('scripts:libs');
	});

	// -- Note : the watch of js custom files is handled by watchify in scripts.js
});

gulp.task('build:prod', () => {
	gulp.start('sass');
	gulp.start('scripts');
});