/**
 * Page Base
 */

class PageBase {

	constructor() {
		this.preload();
		$(window).on('resize', this.resize.bind(this) );
	}

	preload(){
		TweenLite.to($("#preloader"), 0.8,{css:{autoAlpha:0},delay:0.4});
		TweenLite.set($("#preloader"),{css:{display:"block"},delay:0});
	}


	display() {

	}

	resize() {

	}

	
}

export default PageBase;