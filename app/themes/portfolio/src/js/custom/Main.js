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

		DeviceInfo.check();

		switch($('body section').attr("data-template")){

			case "home": this.page = new Home();
			break;

			case "projects": this.page = new Projects();
			break;

		}

	}

	resize () {
		this.page.resize();
	}

	
}

let app = new Main();