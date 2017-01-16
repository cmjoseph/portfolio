class Single {

    constructor () {
        console.log('Single');
        this.panel = document.getElementById("panel");
        this.controller = new ScrollMagic.Controller();
        this.animationsingle = this.animationsingle.bind(this);
        this.animationsingle();
        this.slider = this.slider.bind(this);
        this.slider();
    }

    slider(){
    	$("#slider-single").responsiveSlides({
            manualControls: '#slider-pagination',
            timeout: 6000,
            auto: true,
            before: function(index){
    			this.hometitle = $(".slider-content h2").eq(index);
              	TweenLite.fromTo(this.hometitle, 1, { opacity: 0, y:-40 }, { opacity: 1, y:0 }, 0.4);
            }
        });
    }

    animationsingle(){
        this.panelarea = new TimelineMax();
        this.panel = document.querySelector("#panel");
        this.elements = document.querySelectorAll("#panel .elem");
        this.panelarea.fromTo(this.panel, 1, { left: -100% }, { left:100% }, {ease:'Cubic.easeOut'});
        this.panelarea.staggerFromTo(this.elements, 0.5, { opacity: 0, y:-40 }, { opacity: 1, y:0}, 0.2);

        let single = new ScrollMagic.Scene({triggerElement: '#main', reverse: false,})
        .setTween(this.panelarea)
        .addTo(this.controller);
    }
}

export default Single;