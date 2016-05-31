import minimist from 'minimist';
import defaults from 'defaults';

let options = minimist(process.argv.slice(2));

options = defaults(options, {
	debug : true,
	watch : true
});

if (options.production) {
	options.debug = false;
	options.watch = false;
}

export default options;