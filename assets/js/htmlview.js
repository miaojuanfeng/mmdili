$(document).ready(function(){
	var pageTop = $("#page-container").offset().top;
	var pageHeight = $("#pf1").height();
	var winHeight = $(window).height();
	$(window).scroll(_.throttle(function(){
		// $('.pf').each(function(){
			var scrollTop = $(window).scrollTop();
			var currPage = parseInt((scrollTop - pageTop)/(pageHeight+100))+1;
			$('.pf').children('.pc').hide();
			$('#pf'+(currPage - 1)).children('.pc').show();
			$('#pf'+(currPage)).children('.pc').show();
			$('#pf'+(currPage + 1)).children('.pc').show();
			console.log('pageTop: ' + pageTop + ' - scrollTop: ' + scrollTop + ' - pageHeight: ' + pageHeight + ' - currPage: ' + currPage);
			// if( ( pageTop <= winHeight || ( pageTop - scrollTop ) < winHeight ) && ( scrollTop <= pageTop || scrollTop < (pageTop + pageHeight + 2) ) ){
			// 	// $('#jump_page').val($(this).attr('page'));
			// }
			// if ( ( pageTop <= ( winHeight + pageHeight ) || ( pageTop - scrollTop ) < ( winHeight + pageHeight ) ) && ( scrollTop <= pageTop || scrollTop < (pageTop + pageHeight * 2 + 2) ) ){
			// 	// if( $(this).children('.pv').length == 1 ){
			// 	// 	// get_page_data($(this).children('.pv').attr('id'), $(this).attr('page'));
			// 	// }
			// 	console.log($(this).attr('id')+"在可视范围");
			// }else{
			// 	// if( $(this).children().length > 0 ){
			// 	// 	$(this).children().remove();
			// 	// 	var page_id = $(this).attr('page');
			// 	// 	var pv_new = document.createElement('div');
			// 	// 	pv_new.className = 'pv';
			// 	// 	pv_new.id = 'pv_' + page_id;
			// 	// 	pv_new.setAttribute('page', page_id);
			// 	// 	//
			// 	// 	var pv_title = document.createElement('p');
			// 	// 	pv_title.className = 'pv-title';
			// 	// 	pv_title.innerHTML = '';
			// 	// 	//
			// 	// 	var pv_link = document.createElement('p');
			// 	// 	pv_link.className = 'pv-link';
			// 	// 	pv_link.innerHTML = '<a href="http://get.adobe.com/cn/flashplayer" target="_blank">点击安装 http://get.adobe.com/cn/flashplayer</a>';
			// 	// 	//
			// 	// 	var pv_pic = document.createElement('p');
			// 	// 	pv_pic.className = 'pv-pic';
			// 	// 	pv_pic.innerHTML = '<a href="http://get.adobe.com/cn/flashplayer" target="_blank"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a>';
			// 	// 	//
			// 	// 	pv_new.appendChild(pv_title);
			// 	// 	pv_new.appendChild(pv_link);
			// 	// 	pv_new.appendChild(pv_pic);
			// 	// 	$(this).append(pv_new);
			// 	// }
			// 	console.log($(this).attr('id')+"不在可视范围");
			// }
		// });
	}, 300));
});