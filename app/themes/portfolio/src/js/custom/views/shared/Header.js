import PageBase from './../PageBase';
/**
 * Header
 */

class Header extends PageBase {

	constructor() {
		console.log('header');
		super();
		this.sidemenu();
		this.mobilemenu();
		this.resize();
		this.headerSticky();
		this.anchorScroll();
	}

	anchorScroll() {
		$('a[href^="#"]').on('click',function (e) {
		    e.preventDefault();
		    let target = this.hash;
		    let $target = $(target);
		    $('html, body').stop().animate({'scrollTop': $target.offset().top
		    }, 500, 'swing', function () {
		        window.location.hash = target;
		    });
		});
	}

	headerSticky() {
		this.sticky = document.getElementById('sticky');
        window.addEventListener('scroll', function(e) {
            if ($(this).scrollTop() > 500){  
                TweenMax.to(this.sticky, 0.1 , {y:65, ease:Power2.easeInOut});
            } else{
                TweenMax.to(this.sticky, 0.1 , {y:0, ease:Power2.easeInOut});
            }
        });
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