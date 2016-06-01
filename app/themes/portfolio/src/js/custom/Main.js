$ = jQuery;

import DeviceInfo from './tools/DeviceInfo';
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
		const w = window.innerWidth;
		const h = window.innerHeight;

		this.header.resize(w,h);
		this.page.resize();
	}

	
}

let app = new Main();