import DeviceInfo from '../tools/DeviceInfo';
import Header from '../partials/Header';
import Footer from '../partials/Footer';

import Home from './Home';
import Single from './Single';

class Main {

    constructor () {
        console.log('init');
        this.ready();
    }

    ready() {
    	DeviceInfo.check();
        if(DeviceInfo.isTouch) document.body.classList.add("touch");
    	if(DeviceInfo.isIE) document.body.classList.add("ie");
    	if(DeviceInfo.isAndroid) document.body.classList.add("android");
    	if(DeviceInfo.isIOS) document.body.classList.add("ios");
        if(DeviceInfo.isFirefox) document.body.classList.add("firefox");
        if(DeviceInfo.isSafari) document.body.classList.add("safari");
        if(DeviceInfo.isChrome) document.body.classList.add("chrome");
        // let preloader = document.getElementById('preloader');
        // TweenLite.to(preloader, 0.5,{css:{autoAlpha:0},delay:0.4});
        // TweenLite.set(preloader,{css:{display:"block"},delay:0.8});
        this.header = new Header();
        this.footer = new Footer();
        
        switch($('body section').attr("data-template")){
            case "home": this.page = new Home();
            break;
            case "single": this.page = new Single();
            break;
        }
    }


}

new Main();