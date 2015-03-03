
(function(){
	var myNameIs = 'James';

	function sayHello(name) {
    	console.log(name + " is still figgering out functions on his own! :)");
	}

	sayHello(myNameIs)
}();

(function(){
	var random = Math.floor((Math.random()*100)+1);

	function isOdd(random) {
		var random = Math.floor((Math.random()*100)+1);
		var message = (random % 2 != 0) ? random + ' Is odd' : random + ' is even';
		console.log(message)
	}
	isOdd(random)
}();