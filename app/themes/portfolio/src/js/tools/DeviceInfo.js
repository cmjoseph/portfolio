class DeviceInfo {

	static check() {

		//FF
		DeviceInfo.isFirefox = navigator.userAgent.toLowerCase().indexOf("firefox") > -1 ? true : false;
		DeviceInfo.isChrome = navigator.userAgent.toLowerCase().indexOf("chrome") > -1 ? true : false;
		DeviceInfo.isSafari = navigator.userAgent.toLowerCase().indexOf("chrome") <= -1 && navigator.userAgent.toLowerCase().indexOf("safari") > -1 ? true : false;
		DeviceInfo.isAndroid = navigator.userAgent.toLowerCase().indexOf("android") > -1 ? true : false;
		DeviceInfo.isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;

		//IE
		DeviceInfo.isIE = DeviceInfo.getInternetExplorerVersion() != -1;

		// IS TOUCH
		try {
            document.createEvent("TouchEvent");
            DeviceInfo.isTouch = true;

        } catch (e) {
            DeviceInfo.isTouch = false;
        }

	}

	static getInternetExplorerVersion () {

      	let rv = -1;
      	let re = null;
        const ua = navigator.userAgent;

		if (navigator.appName == 'Microsoft Internet Explorer')
		{

			re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");

			if (re.exec(ua) !== null) rv = parseFloat( RegExp.$1 );

		} else if (navigator.appName == 'Netscape') {

			re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");

			if (re.exec(ua) !== null) rv = parseFloat( RegExp.$1 );
		}

		return rv;
    }

}

export default DeviceInfo;