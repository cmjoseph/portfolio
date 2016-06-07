$ = jQuery;

import DeviceInfo from './tools/DeviceInfo';
import Animation from './tools/Animation';
import PageBase from './views/PageBase';
import Header from "./views/shared/Header";
import Home from "./views/Home";
import Projects from "./views/Projects";

class Main {

	constructor () {
		$(this.init.bind(this));
	}

	init() {

		this.header = new Header();
		this.page = new Home();
		this.projects = new Projects();

		DeviceInfo.check();

	}

	resize () {
		this.page.resize();
	}

	
}

let app = new Main();