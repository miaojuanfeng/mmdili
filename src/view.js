$(document).ready(function(){
	var config = {
		 FitPageOnLoad : true,
		 FitWidthOnLoad : true,
		 InitViewMode : 'Portrait'
	};
	var page_elem = $('.more-page a');
	var page_swf = page_elem.attr('page-swf');
	var page_data = page_elem.attr('page-data');
	var page_num = page_elem.attr('page-num');
	var page_width = page_elem.attr('page-width');
	var page_height = page_elem.attr('page-height');
	var page_curr = 1;

	function get_page_data(elem_id, page_no){
		config.SwfFile = (page_data+page_no);
		new FlexPaperViewer(page_swf, elem_id, {config: config});
	}

	// $('.page').each(function(){
	// 	get_page_data($(this).attr('id'), (page_curr++));
	// });

	// $('.more-page a').click(function(){
	// 	for(i=0;i<3;i++){
	// 		var page_new = document.createElement('div');
	// 		page_new.className = 'page';
	// 		page_new.id = 'page_'+page_curr;
	// 		page_new.setAttribute('page', page_curr);
	// 		page_new.style.width = page_width + 'px';
	// 		page_new.style.height = page_height + 'px';
	// 		$('.more-page').before(page_new);
	// 		$('.more-page .page-left').html(page_num-page_curr);
	// 		// get_page_data($(page_new).attr('id'), page_curr);
	// 		page_curr++;
	// 		if(page_curr>page_num){
	// 			$('.more-page').remove();
	// 			break;
	// 		}
	// 	}
	// 	$(window).scroll();
	// });

	// 	简单的节流函数
	function throttle(func, wait, mustRun) {
	    var timeout,
	        startTime = new Date();
	 
	    return function() {
	        var context = this,
	            args = arguments,
	            curTime = new Date();
	 
	        clearTimeout(timeout);
	        // 如果达到了规定的触发时间间隔，触发 handler
	        if(curTime - startTime >= mustRun){
	            func.apply(context,args);
	            startTime = curTime;
	        // 没达到触发间隔，重新设定定时器
	        }else{
	            timeout = setTimeout(func, wait);
	        }
	    }
	}
	// 	简单的防抖函数
	function debounce(func, wait, immediate) {
	    var timeout;
	    return function() {
	        var context = this, args = arguments;
	        var later = function() {
	            timeout = null;
	            if (!immediate) func.apply(context, args);
	        };
	        var callNow = immediate && !timeout;
	        clearTimeout(timeout);
	        timeout = setTimeout(later, wait);
	        if (callNow) func.apply(context, args);
	    }
	}

	$(window).scroll(debounce(function(){
		$('.page').each(function(){
			var pageTop = $(this).offset().top;
			var pageHeight = $(this).height();
			var scrollTop = $(window).scrollTop();
			var winHeight = $(window).height();
			console.log('pageTop: ' + pageTop + ' - scrollTop: ' + scrollTop + ' - winHeight: ' + winHeight);
			if ( ( pageTop <= winHeight || ( pageTop - scrollTop ) < winHeight ) && ( scrollTop <= pageTop || scrollTop < (pageTop + pageHeight + 2) ) ){
				if( $(this).children().length == 0 ){
					get_page_data($(this).attr('id'), $(this).attr('page'));
				}
				console.log($(this).attr('id')+"在可视范围");
			}else{
				if( $(this).children().length > 0 ){
					$(this).children().remove();
				}
				console.log($(this).attr('id')+"不在可视范围");
			}
		});
	}, 500));

	$(window).scroll();
	
	$('#login-act').click(function(){
		$('.login-form').show();
	});
	$('.login-form-close').click(function(){
		$('.login-form').hide();
	});
});