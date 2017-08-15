$(document).ready(function(){
	window.onscroll=function(){
		if( $(document).scrollTop() > 250 ){
			$(".fix-wrapper").addClass('fix-wrapper-fixed');
		}else{
			$(".fix-wrapper").removeClass('fix-wrapper-fixed');
		}
	}
});