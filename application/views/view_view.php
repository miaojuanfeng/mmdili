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
								echo '提示：已对文档中包含的图片进行压缩以加快载入，下载文档可浏览高清版本。';
							}
						?>
					</div>
				</div>
				<?php
				if( $page['is_robot'] ){
					echo '<div class="page-top" style="padding:10px;">'.$page['content'].'</div>';
				}else{
				?>
					<?php
					for($i=1;$i<=$page['num'];$i++){
						if( $i == 1 ){
					?>
						<div class="page-top" style="min-height:<?=($page['height']+300)?>px;">
							<div class="page-top-adsense">
								<div class="left">
									<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
									<!-- view_page_top_left -->
									<ins class="adsbygoogle"
									     style="display:inline-block;width:336px;height:280px"
									     data-ad-client="ca-pub-6393601311110091"
									     data-ad-slot="2753013484"></ins>
									<script>
									(adsbygoogle = window.adsbygoogle || []).push({});
									</script>
								</div>
								<div class="right">
									<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
									<!-- view_page_top_right -->
									<ins class="adsbygoogle"
									     style="display:inline-block;width:336px;height:280px"
									     data-ad-client="ca-pub-6393601311110091"
									     data-ad-slot="4229746685"></ins>
									<script>
									(adsbygoogle = window.adsbygoogle || []).push({});
									</script>	
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="page" id="page_<?=$i?>" page="<?=$i?>" style="width: <?=$page['width']?>px;height: <?=$page['height']?>px; border-top:none; margin-bottom:10px;">
								<div class="pv" id="pv_<?=$i?>" page="<?=$i?>">
									<p class="pv-title"></p>
									<p class="pv-link"><a href="http://get.adobe.com/cn/flashplayer" target="_blank">点击安装 http://get.adobe.com/cn/flashplayer</a></p>
									<p class="pv-pic"><a href="http://get.adobe.com/cn/flashplayer" target="_blank"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
								</div>
							</div>
						</div>
					<?php
						}else{
					?>
						<div class="page" id="page_<?=$i?>" page="<?=$i?>" style="width: <?=$page['width']?>px;height: <?=$page['height']?>px; <?php if( $i == 1 || $i == 2 || $i == 3 || $i == 4 ) echo 'margin-bottom:10px;'; ?>">
							<div class="pv" id="pv_<?=$i?>" page="<?=$i?>">
								<p class="pv-title"></p>
								<p class="pv-link"><a href="http://get.adobe.com/cn/flashplayer" target="_blank">点击安装 http://get.adobe.com/cn/flashplayer</a></p>
								<p class="pv-pic"><a href="http://get.adobe.com/cn/flashplayer" target="_blank"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
							</div>
						</div>
					<?php
						}
						// AddSense
						if( $i == 1 ){
					?>
						<div class="adsense">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- view_page_1 -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:960px;height:90px"
							     data-ad-client="ca-pub-6393601311110091"
							     data-ad-slot="3701696288"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					<?php
						}else if( $i == 2 ){
					?>
						<div class="adsense">
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
						}else if( $i == 3 ){
					?>
						<div class="adsense">
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
						}else if( $i == 4 ){
					?>
						<div class="adsense">
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
					}//for
				}//is_robot
				?>
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