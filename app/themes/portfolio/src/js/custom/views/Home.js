/**
 * Home
 */

import PageBase from './PageBase';
import Animation from '../tools/Animation';

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
		this.text = document.querySelectorAll('.text');

		TweenMax.delayedCall(1, function(){
			TweenLite.lagSmoothing(0);
			Animation.textAnimFadeTop(this.text);
		}.bind(this));

		this.slider.responsiveSlides({
			timeout: 5000,
			auto: true,
			before: function(){
				this.text = document.querySelectorAll('.text');
				Animation.textAnimFadeTop(this.text);
			}
		});
	}

	menu(){
		this.sidebar = document.getElementById('masthead');
		this.section = document.getElementById('home');
		let sidebarWidth = this.sidebar.offsetWidth;
		TweenLite.to(this.sidebar ,.5, {x:'-'+sidebarWidth+'', ease:Power2.easeOut});
		TweenLite.to(this.sidebar ,.5, {x:"0", ease:Power2.easeOut, delay:2});
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