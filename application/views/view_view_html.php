<!DOCTYPE html>
<html>
<head>
	<title><?=$page['title']?> - 缪缪<?=$page['cate_name']?>文档</title>
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="" />
	<meta name="description" content="<?=$page['title']?>。" />
	<?php require_once 'meta_view.php' ?>
	<script type="text/javascript" src="<?=base_url('assets/lib/js/swfobject.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/view.js')?>"></script>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="view-container">
				<div class="title-container" style="background-image:url('<?=base_url('assets/img/'.$page['ext_name'].'.png')?>')">
					<div class="page-title">
						<h1><?=$page['title']?></h1>
					</div>
					<div class="page-notice">
						<?php
							if( $page['poly2bitmap'] ){
								echo '提示：当前文档包含较多图形，已对图形及部分文字进行压缩以加快载入，下载文档可浏览高清版本。';
							}else{
								echo '提示：已对文档中包含的图片及部分文字进行压缩以加快载入，下载文档可浏览高清版本。';
							}
						?>
					</div>
				</div>
				<div id="pf1" class="pf w0 h0" data-page-no="1" data-page-url="http://view.mmdili.com/test/14591239888-001.page"></div>
				<div id="pf2" class="pf w0 h0" data-page-no="2" data-page-url="14591239888-002.page"></div>
				<div id="pf3" class="pf w0 h0" data-page-no="3" data-page-url="14591239888-003.page"></div>
				<div id="pf4" class="pf w0 h0" data-page-no="4" data-page-url="14591239888-004.page"></div>
				<div id="pf5" class="pf w0 h0" data-page-no="5" data-page-url="14591239888-005.page"></div>
				<div id="pf6" class="pf w0 h0" data-page-no="6" data-page-url="14591239888-006.page"></div>
				<div id="pf7" class="pf w0 h0" data-page-no="7" data-page-url="14591239888-007.page"></div>
				<div id="pf8" class="pf w0 h0" data-page-no="8" data-page-url="14591239888-008.page"></div>
				<div id="pf9" class="pf w0 h0" data-page-no="9" data-page-url="14591239888-009.page"></div>
				<div id="pfa" class="pf w0 h0" data-page-no="a" data-page-url="14591239888-010.page"></div>
				<div id="pfb" class="pf w0 h0" data-page-no="b" data-page-url="14591239888-011.page"></div>
				<div id="pfc" class="pf w0 h0" data-page-no="c" data-page-url="14591239888-012.page"></div>
				<div id="pfd" class="pf w0 h0" data-page-no="d" data-page-url="14591239888-013.page"></div>
				<div id="pfe" class="pf w0 h0" data-page-no="e" data-page-url="14591239888-014.page"></div>
				<div id="pff" class="pf w0 h0" data-page-no="f" data-page-url="14591239888-015.page"></div>
				<div id="pf10" class="pf w0 h0" data-page-no="10" data-page-url="14591239888-016.page"></div>
				<div id="pf11" class="pf w0 h0" data-page-no="11" data-page-url="14591239888-017.page"></div>
				<div id="pf12" class="pf w0 h0" data-page-no="12" data-page-url="14591239888-018.page"></div>
				</div>
				<div class="more-page" style="display:none;">
					<a href="javascript:;" page-swf="<?=$page['swf']?>" page-data="<?=$page['data']?>" page-width="<?=$page['width']?>" page-height="<?=$page['height']?>"></a>
				</div>
			</div>
			<div class="recommend-container">
				<div class="relative-container">
					<div class="relative-title">
						<h1>最新发布的</h1>
					</div>
					<ul>
						<?php
						foreach ($page['new'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>"><?=$value['doc_title']?></a></li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="recommend-adsense">
					<!-- <img src="<?=base_url('assets/img/right_ad_1.jpg')?>" width="220" /> -->
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- view_right_1 -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:200px;height:200px"
					     data-ad-client="ca-pub-6393601311110091"
					     data-ad-slot="7852694281"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				<div class="relative-container">
					<div class="relative-title">
						<h1>推荐的文档</h1>
					</div>
					<ul>
						<?php
						foreach ($page['hot'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>"><?=$value['doc_title']?></a></li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="recommend-adsense">
					<!-- <img src="<?=base_url('assets/img/right_ad_1.jpg')?>" width="220" /> -->
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- view_right_2 -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:200px;height:200px"
					     data-ad-client="ca-pub-6393601311110091"
					     data-ad-slot="1806160682"></ins>
					<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				<div class="relative-container">
					<div class="relative-title">
						<h1>大家都在看</h1>
					</div>
					<ul>
						<?php
						foreach ($page['rand'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>"><?=$value['doc_title']?></a></li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php require_once 'footer_view.php' ?>
	<div class="reader-tools-bar-wrap">
		<div class="main-container">
			<div class="reader-tools-bar">
				<div class="left">
					<!-- <a class="page-prev" href="javascript:;">< 上一页</a> -->
					<div class="page-pos">
						<input type="text" id="jump_page" value="1" />
						/
						<span class="page-num"><?=$page['num']?></span>
					</div>
					<!-- <a class="page-next" href="javascript:;">下一页 ></a> -->
				</div>
				<div class="center"></div>
				<div class="right">
					<?php
					if( $page['dl_forbidden'] ){
					?>
					<div class="download-forbidden">暂不提供下载</div>
					<?php
					}else{
					?>
					<div class="download"><a href="<?=base_url('dl/'.$page['dl'])?>" target="_blank">下载这篇文档</a></div>
					<?php
					}
					?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</body> 
</html>