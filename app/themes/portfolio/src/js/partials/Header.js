class Header {

    constructor () {
        console.log('Header');
        this.menuresize();
        window.addEventListener('scroll', this.menuresize.bind(this));
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

}

export default Header;