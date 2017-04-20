$(document).ready(function(){
	// var config = {
	// 	 FitPageOnLoad : true,
	// 	 FitWidthOnLoad : true,
	// 	 InitViewMode : 'Portrait'
	// };
	var flashvars = {
	};
	var params = {
		menu: "false",
		scale: "noScale",
		allowFullscreen: "true",
		allowScriptAccess: "always",
		bgcolor: "",
		wmode: "opaque" // can cause issues with FP settings & webcam
	};
	var attributes = {
		id:"pv"
	};
	var page_elem = $('.more-page a');
	var page_swf = page_elem.attr('page-swf');
	var page_data = page_elem.attr('page-data');
	// var page_num = page_elem.attr('page-num');
	var page_width = page_elem.attr('page-width');
	var page_height = page_elem.attr('page-height');
	// var page_curr = 1;

	function get_page_data(elem_id, page_no){

		var v = swfobject.getFlashPlayerVersion();
		if( v["major"] > 0){
            if(v["major"]<10) {
                $(".pv_title").html("您的Flash播放器版本过低，请安装Flash Player最新版本");
                $(".pv").show();
            }
        }else{
            $(".pv_title").html("您的计算机尚未安装Flash Player");
            $(".pv").show();
        }

		flashvars.data = (page_data+page_no);
		swfobject.embedSWF(
			page_swf, 
			elem_id, page_width, page_height, "10.0.0", 
			"expressInstall.swf", 
			flashvars, params, attributes);
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

	$(window).scroll(throttle(function(){
		$('.page').each(function(){
			var pageTop = $(this).offset().top;
			var pageHeight = $(this).height();
			var scrollTop = $(window).scrollTop();
			var winHeight = $(window).height();
			console.log('pageTop: ' + pageTop + ' - scrollTop: ' + scrollTop + ' - winHeight: ' + winHeight);
			if( ( pageTop <= winHeight || ( pageTop - scrollTop ) < winHeight ) && ( scrollTop <= pageTop || scrollTop < (pageTop + pageHeight + 2) ) ){
				$('#jump_page').val($(this).attr('page'));
			}
			if ( ( pageTop <= ( winHeight + pageHeight ) || ( pageTop - scrollTop ) < ( winHeight + pageHeight ) ) && ( scrollTop <= pageTop || scrollTop < (pageTop + pageHeight * 2 + 2) ) ){
				if( $(this).children('.pv').length == 1 ){
					get_page_data($(this).children('.pv').attr('id'), $(this).attr('page'));
				}
				console.log($(this).attr('id')+"在可视范围");
			}else{
				if( $(this).children().length > 0 ){
					$(this).children().remove();
					var page_id = $(this).attr('page');
					var pv_new = document.createElement('div');
					pv_new.className = 'pv';
					pv_new.id = 'pv_' + page_id;
					pv_new.setAttribute('page', page_id);
					//
					var pv_title = document.createElement('p');
					pv_title.className = 'pv-title';
					pv_title.innerHTML = '';
					//
					var pv_link = document.createElement('p');
					pv_link.className = 'pv-link';
					pv_link.innerHTML = '<a href="http://get.adobe.com/cn/flashplayer" target="_blank">点击安装 http://get.adobe.com/cn/flashplayer</a>';
					//
					var pv_pic = document.createElement('p');
					pv_pic.className = 'pv-title';
					pv_pic.innerHTML = '<a href="http://get.adobe.com/cn/flashplayer" target="_blank"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a>';
					//
					pv_new.appendChild(pv_title);
					pv_new.appendChild(pv_link);
					pv_new.appendChild(pv_pic);
					$(this).append(pv_new);
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