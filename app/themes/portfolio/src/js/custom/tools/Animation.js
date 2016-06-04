class Animation {

	static textAnimFadeTop(target){
		TweenMax.from(target, 1, {y:-200, ease:Power2.easeOut});
		TweenMax.to(target, 2, {y:0, ease:Power2.easeOut});
		TweenLite.from(target ,.5, {css:{autoAlpha:0},delay:1});
		TweenLite.to(target ,.5, {css:{autoAlpha:1},delay:1});
	}

	static textAnimFadeLeft(target){
		this.text = document.querySelectorAll('.text');
		TweenMax.from(this.text, 1, {x:-200, ease:Power2.easeOut});
		TweenMax.to(this.text, 2, {x:0, ease:Power2.easeOut});
		TweenLite.from(this.text ,.5, {css:{autoAlpha:0},delay:1});
		TweenLite.to(this.text ,.5, {css:{autoAlpha:1},delay:1});
	}

	static textAnimFadeLeft(target){
		this.text = document.querySelectorAll('.text');
		TweenMax.from(this.text, 1, {x:-200, ease:Power2.easeOut});
		TweenMax.to(this.text, 2, {x:0, ease:Power2.easeOut});
		TweenLite.from(this.text ,.5, {css:{autoAlpha:0},delay:1});
		TweenLite.to(this.text ,.5, {css:{autoAlpha:1},delay:1});
	}

	
}

export default Animation;