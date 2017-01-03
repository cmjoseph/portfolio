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
            timeout: 6000,
            auto: true,
            before: function(index){
    			this.hometitle = $(".home-content h2").eq(index);
              	TweenLite.fromTo(this.hometitle, 1, { opacity: 0, y:-40 }, { opacity: 1, y:0 }, 0.4);
            }
        });
    }

    animation(){
        this.homearea    	= new TimelineMax();
        this.projectarea    = new TimelineMax();
        this.skillarea    	= new TimelineMax();

        this.hometitle 		= document.querySelector(".home-content h2");
        this.projectitem 	= document.querySelectorAll(".grid-item");
        this.skillitem 		= document.querySelectorAll(".skill-item");
        
        this.homearea.fromTo(this.hometitle, 1, { opacity: 0, y:-40 }, { opacity: 1, y:0 }, 0.4);
        this.projectarea.staggerFromTo(this.projectitem, 0.2, { scale: 0, y:20}, { scale: 1, y:0 }, 0.2);
        this.skillarea.staggerFromTo(this.skillitem, 0.2, { opacity: 0, x:-20}, { opacity: 1, x:0 }, 0.2);
       
        let main = new ScrollMagic.Scene({triggerElement: '#home', reverse: false,})
        .setTween(this.homearea)
        .addTo(this.controller);

        let project = new ScrollMagic.Scene({triggerElement: '#projects', reverse: false,})
        .setTween(this.projectarea)
        .addTo(this.controller);

        let skill = new ScrollMagic.Scene({triggerElement: '#projects', reverse: false,})
        .setTween(this.skillarea)
        .addTo(this.controller);
    }


}

export default Home;