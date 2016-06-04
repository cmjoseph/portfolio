/**
 * Device Info
 */


class DeviceInfo {

	static check() {

		const deviceInfo = new DeviceInfo();

		//devices
		window.isTablet 	= $('body').hasClass('tablet');
		window.isDesktop 	= !window.isTablet;

		//browsers
		const nua = window.navigator.userAgent.toLowerCase();

		window.isIE       = deviceInfo.getInternetExplorerVersion() !== -1 ? true : false;
      	window.isOpera    = ( nua.indexOf("opr/") > -1 ) ? true : false;
      	window.isChrome   = !window.isOpera && ( nua.indexOf("chrome") > -1 ) ? true : false;
      	window.isSafari   = !window.isOpera && !window.isChrome && ( nua.indexOf("safari") > -1 ) ? true : false;
      	window.isFirefox  = ( nua.indexOf("firefox") > -1 ) ? true : false;
      	window.isIOS 	  = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
      	window.isAndroid  = nua.indexOf("android") > -1 ? true : false;

      	if(window.isIE) $('body').addClass('ie');
      	if(window.isIOS) $('body').addClass('ios');
      	if(window.isAndroid) $('body').addClass('android');

    }

    getInternetExplorerVersion () {

		let rv = -1;
		let re = null;
		let ua = window.navigator.userAgent;

		if (window.navigator.appName === 'Microsoft Internet Explorer') {

			re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
			if (re.exec(ua) !== null) rv = parseFloat( RegExp.$1 );

		} else if (window.navigator.appName === 'Netscape') {

			re  = new RegExp("Trident/.*rv:([0-9]{1,}[\.0-9]{0,})");
			if (re.exec(ua) !== null) rv = parseFloat( RegExp.$1 );
		}

		return rv;
	}

}

export default DeviceInfo;