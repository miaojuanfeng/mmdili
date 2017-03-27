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
			page_new.style.width = page_width + 'px';
			page_new.style.height = page_height + 'px';
			$('.more-page').before(page_new);
			$('.more-page .page-left').html(page_num-page_curr);
			get_page_data($(page_new).attr('id'), page_curr);
			page_curr++;
			if(page_curr>page_num){
				$('.more-page').remove();
				break;
			}
		}
	});

	$(window).scroll(function (){
		$('.page').each(function(){
			var a = $(this).offset().top;
			console.log('a: '+a);
			console.log('s: '+$(window).scrollTop());
			console.log('h: '+$(window).height());
			if ( ( a <= $(window).height() ) && $(window).scrollTop() <= a || $(window).scrollTop() < (a + $(this).height() + 2) ) {
				console.log($(this).attr('id')+"在可视范围");
			}else{
				console.log($(this).attr('id')+"不在可视范围");
			}
		});
	});
});