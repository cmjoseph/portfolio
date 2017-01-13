class Header {

    constructor () {
        console.log('Header');
        this.hamburger = document.getElementById('hamburger');
        this.anchor = document.querySelectorAll('.menu-item > a');
        for (let i = 0; i < this.anchor.length; i++) {
        	this.anchor[i].addEventListener('click', this.anchorJump.bind(this));
        }
        this.menuresize = this.menuresize.bind(this);
        this.menuresize();
        window.addEventListener('scroll', this.menuresize.bind(this));
        window.addEventListener('scroll', this.activeOnScroll.bind(this));
        this.hamburger.addEventListener('click', this.togglemenumobile.bind(this));
        this.click = false;
    }

    menuresize(){
        const start = 100;
        this.nav = document.getElementById('masthead');
        if (window.pageYOffset > start){ 
            this.nav.classList.add('small'); 
        } 
        if (window.pageYOffset <= start){
            this.nav.classList.remove('small'); 
        }
    }

    anchorJump(event){
        console.log(home);
        let page = document.body.classList.contains('single');
        if (!page) {
        	event.preventDefault();
        	$('html, body').animate({ scrollTop: $(event.target.hash).offset().top - 44}, 500);
        } else {
            window.location.href = home + event.target.hash;
        }
    }

    activeOnScroll(){
        let pos = window.pageYOffset;
        let sections = document.querySelectorAll('.section');
        for (let i = 0; i < sections.length; i++) {
            let id = sections[i].getAttribute('id');
            let sect = document.getElementById(id);
            if (sect != null) {
                let sectpos = $(sect).position().top - 100;
                if (sectpos <= pos) {
                    $('#navbar ul li.active').removeClass('active');
                    $('#navbar ul li.'+id+'').addClass('active');
                }
            }
        }
    }

    togglemenumobile(event){
        if (!this.click) {
            TweenLite.to(this.panel, 0, {className:'+=open', css:'transform: translateX(-100%)'});
            this.click = true;
        } else {
            TweenLite.to(this.panel, 0, {className:'-=open', css:'transform: translateX(-100%)'});
            this.click = false;
        }
    }

}

export default Header;