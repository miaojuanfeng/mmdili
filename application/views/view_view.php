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
				<div class="page-title">
					<h1><?=$page['title']?></h1>
				</div>
				<?php
				if( $page['poly2bitmap'] ){
				?>
				<div class="page-notice">
					提示：当前文档包含较多图形，已对图形及部分文字进行压缩以加快载入，下载文档可浏览高清版本。
				</div>
				<?php
				}else{
				?>
				<div class="page-notice">
					提示：已对文档中包含的图片进行压缩以加快载入，下载文档可浏览高清版本。
				</div>
				<?php
				}
				?>
				<div style="height:90px; position:relative; border-left: 1px solid #eee; border-right: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
					<!-- <div style="display: flex; position:absolute;z-index:9;"> -->
						<!-- <img src="<?=base_url('assets/img/view_ad_1.jpg')?>" width="960" /> -->
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- view_page_1 -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:960px;height:90px"
						     data-ad-client="ca-pub-6393601311110091"
						     data-ad-slot="3701696288"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					<!-- </div> -->
				</div>
				<?php
				for($i=1;$i<=$page['num'];$i++){
				?>
					<div class="page" id="page_<?=$i?>" page="<?=$i?>" style="background-image: url('<?=base_url('assets/img/page-loading.gif')?>'); width: <?=$page['width']?>px;height: <?=$page['height']?>px; <?php if( $i == 1) echo 'border-top:none;margin-bottom:10px;'; ?>">
						<div class="pv" id="pv_<?=$i?>" page="<?=$i?>">
							<p class="pv-title"></p>
							<p class="pv-link"><a href="http://get.adobe.com/cn/flashplayer" target="_blank">点击安装 http://get.adobe.com/cn/flashplayer</a></p>
							<p class="pv-pic"><a href="http://get.adobe.com/cn/flashplayer" target="_blank"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
						</div>
					</div>
				<?php
					if( $i == 1 ){
				?>
					<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2); margin-bottom: 10px;">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- view_page_2 -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:960px;height:90px"
						     data-ad-client="ca-pub-6393601311110091"
						     data-ad-slot="9189826685"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				<?php
					}else if( $i == 2 ){
				?>
					<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2); margin-bottom: 10px;">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- view_page_3 -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:960px;height:90px"
						     data-ad-client="ca-pub-6393601311110091"
						     data-ad-slot="1666559883"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				<?php
					}else if( $i == 3 ){
				?>
					<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2); margin-bottom: 10px;">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- view_page_4 -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:960px;height:90px"
						     data-ad-client="ca-pub-6393601311110091"
						     data-ad-slot="3143293083"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
				<?php
					}
				}
				?>
				<div class="more-page" style="display:none;">
					<a href="javascript:;" page-swf="<?=$page['swf']?>" page-data="<?=$page['data']?>" page-width="<?=$page['width']?>" page-height="<?=$page['height']?>"><span>There are <span class="page-left">1</span> pages left unread, Click to continue reading</span></a>
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
				<div style="display: flex; border:1px solid #eee; padding: 9px;">
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
				<div style="display: flex; border:1px solid #eee; padding: 9px;">
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
					<div class="download-forbidden">版权所有，暂不提供下载</div>
					<?php
					}else{
					?>
					<div class="download"><a href="<?=base_url('dl/'.$page['dl'])?>" target="_blank">下载此文档</a></div>
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