const src = './src';
const app = '.';

const config = {
	browserSupport : ['last 2 versions'],
	src : {
		path 	: src,
		custom 	: src + '/js/custom/Main.js',
		libs 	: src + '/js/libs/*.js',
		styles 	: src + '/scss/application.scss'
	},
	watch : {
		styles 	: src + '/scss/**/*.scss',
		scripts : {
			all 	: src + '/js/**/*.js',
			libs 	: src + '/js/libs/*.js',
			custom 	: src + '/js/custom/**/*.js'
		}
	},
	dist : {
		filename 	: 'build',
		styles 		: app + '/css',
		custom 		: app + '/js',
		vendors 	: app + '/js/vendors'
	}
};

export default config;