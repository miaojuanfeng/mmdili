$(document).ready(function(){
	var userAgent = navigator.userAgent.toLowerCase(); 
    if (userAgent .indexOf('safari')!=-1){ 
		if(userAgent .indexOf('chrome')  > -1){
			//browser is chrome
		}else if((userAgent .indexOf('opera')  > -1)||(userAgent .indexOf('opr')  > -1)){
			//browser is opera 
		}else{
			//browser is safari
			$('#search-form').addClass('safari-search-form');
			$('#search-button').addClass('safari-search-button');
		}
    }

	$('#login-act').click(function(){
		$('.login-form').show();
	});
	$('.login-form-close').click(function(){
		$('.login-form').hide();
	});

	$('#search-input').keydown(function(event){
		if( event.which == 13 ){
			var key = $.trim($('#search-input').val());
			if( key ){
				$('#search-form').submit();
			}else{
				$('#search-input').val('');
				return false;
			}
		}
	});

	$('#search-button').click(function(){
		var key = $.trim($('#search-input').val());
		if( key ){
			$('#search-form').submit();
		}else{
			$('#search-input').val('');
			$('#search-input').focus();
		}
	});
});
$(window).ready(function(){
	var wrapper_offset_top = $(".fix-wrapper").offset().top;
	var body_height = $(document.body).height();
	var fix_wrapper_height = $(".fix-wrapper").height();
	var content = $(".content").height();
	window.onscroll=function(){
		if( $(document).scrollTop() >= wrapper_offset_top ){
			if( ($(document).scrollTop() + fix_wrapper_height) < body_height ){
				$(".recommend-container").css({'height': 'auto'});
				$(".fix-wrapper").removeClass('fix-wrapper-bottom');
				$(".fix-wrapper").addClass('fix-wrapper-fixed');
			}else{
				$(".recommend-container").css({'height': (content-12)+'px'});
				$(".fix-wrapper").removeClass('fix-wrapper-fixed');
				$(".fix-wrapper").addClass('fix-wrapper-bottom');
			}
		}else{
			$(".fix-wrapper").removeClass('fix-wrapper-fixed');
		}
	}
});