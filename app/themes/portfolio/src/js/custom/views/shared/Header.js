
/**
 * Header
 */

class Header {

	constructor() {
		this.sidemenu();
	}


	sidemenu() {
		const h = window.innerHeight;
		this.side = document.getElementById('masthead');
		this.side.style.height = h + 'px';
	}

	resize () {
		
	}
}

export default Header;