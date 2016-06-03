/**
 * Home
 */

import PageBase from './PageBase';

class Home extends PageBase {

	constructor() {
		super();
		this.sliderSwipe();
		this.menu();
		window.onresize = this.resize();
		console.log('Home');
	}

	display() {

	}

	sliderSwipe(){
		this.slider = $('#slides');
		this.slider.responsiveSlides({
			timeout: 30000,
		});
	}

	menu(){
		this.sidebar = document.getElementById('masthead');
		this.section = document.getElementById('home');
		let sidebarWidth = this.sidebar.offsetWidth;
		TweenLite.to(this.sidebar ,.5, {x:'-'+sidebarWidth+'', ease:Power2.easeOut});
		TweenLite.to(this.sidebar ,.5, {x:"0", ease:Power2.easeOut, delay:0.5});
	}

	resize () {
		const h = window.innerHeight;
		this.sidebar = document.getElementById('masthead');
		this.slider = document.getElementById('slides');
		this.slider.style.height = h +'px';
		this.sidebar.style.height = h +'px';
	}
}

export default Home;