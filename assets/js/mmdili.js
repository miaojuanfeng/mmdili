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