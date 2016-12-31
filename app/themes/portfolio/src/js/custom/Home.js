class Home {

    constructor () {
        console.log('Home');
        this.controller = new ScrollMagic.Controller();
        this.animation();
        this.slider();
    }

    slider(){
    	$("#slider-home").responsiveSlides({
            manualControls: '#slider-pagination',
            timeout: 4000,
            auto: true,
            before: function(index){
                
            }
        });
    }

    animation(){
        this.homearea    = new TimelineMax();
        this.hometitle   = document.querySelector(".home-content h2");
        
        this.homearea.fromTo(this.hometitle, 0.8, { opacity: 0, y:-40 }, { opacity: 1, y:0 }, 0.4);
       
        let main = new ScrollMagic.Scene({triggerElement: '#home', reverse: false,})
        .setTween(this.homearea)
        .addTo(this.controller);
    }


}

export default Home;