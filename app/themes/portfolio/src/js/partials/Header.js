class Header {

    constructor () {
        console.log('Header');
        this.menuresize();
        window.addEventListener('scroll', this.menuresize.bind(this));
        window.addEventListener('scroll', this.activeOnScroll.bind(this));
        this.anchor = document.querySelectorAll('.menu-item > a');
        for (let i = 0; i < this.anchor.length; i++) {
        	this.anchor[i].addEventListener('click', this.anchorJump.bind(this));
        }

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
    	event.preventDefault();
    	$('html, body').animate({ scrollTop: $(event.target.hash).offset().top}, 500);
    }

    activeOnScroll(){
        let pos = window.pageYOffset;
        let sections = document.querySelectorAll('.section');
        for (let i = 0; i < sections.length; i++) {
            let id = sections[i].getAttribute('id');
            let sect = document.getElementById(id);
            if (sect != null) {
                let sectpos = $(sect).position().top - 168;
                if (sectpos <= pos) {
                    $('#navbar ul li.active').removeClass('active');
                    $('#navbar ul li.'+id+'').addClass('active');
                }
            }
        }
    }

}

export default Header;