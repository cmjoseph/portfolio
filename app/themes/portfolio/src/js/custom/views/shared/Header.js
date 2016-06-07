import PageBase from './../PageBase';
/**
 * Header
 */

class Header extends PageBase {

	constructor() {
		super();
		this.sidemenu();
		this.mobilemenu();
		this.resize();
	}

	sidemenu() {
		const h = window.innerHeight;
		this.side = document.getElementById('masthead');
		this.side.style.height = h + 'px';
	}

	mobilemenu(){
		this.mobiletrigger = document.getElementById('burger');
		this.mobiletrigger.onclick = function(event){
			event.preventDefault();
			this.icon = document.getElementById('icon-burger');
			this.submenu = document.getElementById('site-navigation-header-mobile');
           
            if (this.submenu.classList.contains('open')){
                TweenLite.to(this.submenu, 0.2, {height:0});
                this.icon.classList.remove('open');
                this.submenu.classList.remove('open');
            } else {
                TweenLite.set(this.submenu, {height:"auto"});
                TweenLite.from(this.submenu, 0.2, {height:0});
               	this.icon.classList.add('open');
               	this.submenu.classList.add('open');
            }
		}
       
	}

	resize () {
		this.submenu = document.getElementById('site-navigation-header-mobile');
		this.icon = document.getElementById('icon-burger');
		const w = window.innerWidth;
		if (w > 1024) {
			TweenLite.to(this.submenu, 0.2, {height:0});
            this.submenu.classList.remove('open');
             this.icon.classList.remove('open');
		}
	}
}

export default Header;