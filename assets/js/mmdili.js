$(document).ready(function(){
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