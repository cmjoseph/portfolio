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
		this.closeContent();
		this.panelHeight();
		console.log('Projects');
	}

	display() {

	}

	gridElements() {
		const h = parseInt(window.innerHeight / 2);
		this.item = document.querySelectorAll('.grid__item');
		for (let i = 0; i < this.item.length; i++) {
			this.item[i].style.height = h+'px'; 
		}
	}

	openContent() {
		let single = $('.grid__item');
		single.on('click', function(event){
			document.getElementById('grid-panel').classList.add('is-open');
			document.getElementById('overlay').classList.add('is-open');
			this.title = event.currentTarget.getAttribute('data-title');
			this.image = event.currentTarget.getAttribute('data-image');
			this.content = event.currentTarget.getAttribute('data-content');
			this.web = event.currentTarget.getAttribute('data-web');
		});
	}

	closeContent() {
		this.overlay = document.getElementById('overlay');
		this.overlay.onclick = function(event){
			this.panel = document.getElementById('grid-panel');	
			this.panel.classList.remove('is-open');
			event.target.classList.remove('is-open');
			console.log(event);
		}
	}

	panelHeight() {
		const h = window.innerHeight;
		this.panel = document.getElementById('grid-panel');
		this.panel.style.height = h+'px'; 
	}

	resize () {
		this.gridElements();
		this.panelHeight();
	}
}

export default Projects;