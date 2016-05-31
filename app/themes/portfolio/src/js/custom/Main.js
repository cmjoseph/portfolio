class Main {

	constructor () {
		$( this.init.bind(this) );
	}

	init() {
		DeviceInfo.check();
	}

	resize () {

	}
	
}

let app = new Main();