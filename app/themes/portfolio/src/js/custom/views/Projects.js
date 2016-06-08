/**
 * Home
 */

import PageBase from './PageBase';

class Projects extends PageBase {

	constructor() {
		super();
		this.resize();
		this.gridElements();
		this.openContent();
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

	openContent(){
		let single = $('.grid__item');
		single.on('click', function(e){
			this.panel = document.getElementById('grid-panel');
			this.overlay = document.getElementById('overlay');
			this.panel.classList.add('is-open');
			this.overlay.classList.add('is-open');
		});
	}

	resize () {
		this.gridElements();
	}
}

export default Projects;