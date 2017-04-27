$(document).ready(function(){
	$('#login-act').click(function(){
		$('.login-form').show();
	});
	$('.login-form-close').click(function(){
		$('.login-form').hide();
	});

	$('#search-button').click(function(){
		var key = $('#search-input').val();
		if( key ){
			$('#search-form').submit();
		}
	});
});