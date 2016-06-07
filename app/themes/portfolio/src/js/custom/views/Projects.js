/**
 * Home
 */

import PageBase from './PageBase';

class Projects extends PageBase {

	constructor() {
		super();
		this.resize();
		this.gridElements();
		console.log('Projects');
	}

	display() {

	}

	gridElements(){
		const h = parseInt(window.innerHeight / 2);
		this.item = document.querySelectorAll('.grid__item');
		for (let i = 0; i < this.item.length; i++) {
			this.item[i].style.height = h+'px'; 
		}
	}

	resize () {
		this.gridElements();
	}
}

export default Projects;