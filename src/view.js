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

	$('.page').each(function(){
		get_page_data($(this).attr('id'), (page_curr++));
	});

	$('.more-page a').click(function(){
		for(i=0;i<3;i++){
			var page_new = document.createElement('div');
			page_new.className = 'page';
			page_new.id = 'page_'+page_curr;
			page_new.setAttribute('page', page_curr);
			page_new.style.width = page_width + 'px';
			page_new.style.height = page_height + 'px';
			$('.more-page').before(page_new);
			$('.more-page .page-left').html(page_num-page_curr);
			// get_page_data($(page_new).attr('id'), page_curr);
			page_curr++;
			if(page_curr>page_num){
				$('.more-page').remove();
				break;
			}
		}
		$(window).scroll();
	});

	/**
	  * 频率控制函数， fn执行次数不超过 1 次/delay
	  * @param fn{Function}     传入的函数
	  * @param delay{Number}    时间间隔
	  * @param options{Object}  如果想忽略开始边界上的调用则传入 {leading:false},
	  *                         如果想忽略结束边界上的调用则传入 {trailing:false},
	  * @returns {Function}     返回调用函数
	  */
	_.throttle = function(func, wait, options) {
	    var context, args, result;
	    var timeout = null;
	    var previous = 0;
	    if (!options) options = {};
	    var later = function() {
	        previous = options.leading === false ? 0 : _.now();
	        timeout = null;
	        result = func.apply(context, args);
	        if (!timeout) context = args = null;
	    };
	    return function() {
	        var now = _.now();
	        if (!previous && options.leading === false) previous = now;
	        var remaining = wait - (now - previous);
	        context = this;
	        args = arguments;
	        if (remaining <= 0 || remaining > wait) {
	            clearTimeout(timeout);
	            timeout = null;
	            previous = now;
	            result = func.apply(context, args);
	            if (!timeout) context = args = null;
	        } else if (!timeout && options.trailing !== false) {
	            timeout = setTimeout(later, remaining);
	        }
	        return result;
	    };
	};
	/**
	 * 空闲控制函数， fn仅执行一次
	 * @param fn{Function}     传入的函数
	 * @param delay{Number}    时间间隔
	 * @param options{Object}  如果想忽略开始边界上的调用则传入 {leading:false},
	 *                         如果想忽略结束边界上的调用则传入 {trailing:false},
	 * @returns {Function}     返回调用函数
	 */
	_.debounce = function(func, wait, immediate) {
	    var timeout, args, context, timestamp, result;

	    var later = function() {
	        var last = _.now() - timestamp;
	        if (last < wait && last > 0) {
	            timeout = setTimeout(later, wait - last);
	        } else {
	            timeout = null;
	            if (!immediate) {
	                result = func.apply(context, args);
	                if (!timeout) context = args = null;
	            }
	        }
	    };

	    return function() {
	        context = this;
	        args = arguments;
	        timestamp = _.now();
	        var callNow = immediate && !timeout;
	        if (!timeout) timeout = setTimeout(later, wait);
	        if (callNow) {
	            result = func.apply(context, args);
	            context = args = null;
	        }
	        return result;
	    };
	};

	$(window).scroll(_.throttle(function(){
		// var tur = true; 
		// if(tur){ 
		// 	setTimeout(function(){
				$('.page').each(function(){
					var pageTop = $(this).offset().top;
					var scrollTop = $(window).scrollTop();
					var winHeight = $(window).height();
					console.log('pageTop: ' + pageTop + ' - scrollTop: ' + scrollTop + ' - winHeight: ' + winHeight);
					if ( ( pageTop <= winHeight || ( pageTop - scrollTop ) < winHeight ) && ( scrollTop <= pageTop || scrollTop < (pageTop + winHeight + 2) ) ){
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
				// tur = true;
		// 	}, 500); 
		// 	tur = false;
		// }
	}, 800));
	
	$('#login-act').click(function(){
		$('.login-form').show();
	});
	$('.login-form-close').click(function(){
		$('.login-form').hide();
	});
});