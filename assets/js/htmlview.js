$(document).ready(function(){
	$(window).scroll(_.throttle(function(){
		console.log('s');
	}, 100));
});