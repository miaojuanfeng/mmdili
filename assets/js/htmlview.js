$(document).ready(function(){
	var wrapper_offset_top = $(".fix-wrapper").offset().top;
	window.onscroll=function(){
		if( $(document).scrollTop() >= wrapper_offset_top ){
			$(".fix-wrapper").addClass('fix-wrapper-fixed');
		}else{
			$(".fix-wrapper").removeClass('fix-wrapper-fixed');
		}
	}
});