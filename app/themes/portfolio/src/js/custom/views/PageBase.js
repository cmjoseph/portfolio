/**
 * Page Base
 */

class PageBase {

	constructor() {
		this.preload();
	}

	preload(){
		TweenLite.to($("#preloader"), 0.8,{css:{autoAlpha:0},delay:0.4});
		TweenLite.set($("#preloader"),{css:{display:"block"},delay:0.8});
	}


	display() {

	}

	
}

export default PageBase;