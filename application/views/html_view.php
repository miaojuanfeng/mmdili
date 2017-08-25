<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$page['title']?> - 缪缪<?=$page['cate_name']?>文档</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="robots" content="index,follow" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<?php require_once 'meta_view.php' ?>
<script type="text/javascript" src="<?=base_url('assets/js/htmlview.js')?>"></script>
<link rel="stylesheet" href="<?=base_url('assets/lib/css/base.min.css')?>"/>
<link rel="stylesheet" href="<?=base_url('assets/lib/css/fancy.min.css')?>"/>
<link rel="stylesheet" href="http://view.mmdili.com/<?=$page['user_url']?>/<?=$page['doc_url']?>/page.min.css"/>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="view-container">
				<div class="title-container">
					<div class="page-title-top"></div>
					<div class="page-title">
						<h1><?=$page['title']?></h1>
					</div>
					<div class="page-title-notice">
						<div class="page-info">馆藏编号：<a href="<?=base_url('view/'.$page['doc_url'].'.html')?>"><?=$page['doc_url']?></a></div>
						<div class="page-info">文档归类：<a href="<?=base_url('cate/'.$page['cate_url']?>" target="_blank"><?=$page['cate_name']?></a></div>
						<div class="page-info">文档类型：<?=$page['ext_name']?></div>
						<div class="page-info">文档页数：<?=$page['num']?>页</div>
						<span>提示：已对文档中包含的图片进行压缩以加快载入，下载文档可浏览清晰版本</span>
						<div class="clearfix"></div>
					</div>
					<div class="page-title-bottom"></div>
				</div>
				<div id="page-container">
					<?php
					$page_arr = explode('#[page]#', $page['content']);
					foreach($page_arr as $key => $value){
					?>
						<div id="pf<?=dechex($key+1)?>" class="pf w0 h0" data-page-no="<?=dechex($key+1)?>"><?=$value?></div>
						<?php
						if( $key % 8 == 0 ){
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
						}else if( $key % 8 == 2 ){
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
						}else if( $key % 8 == 4 ){
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
						}else if( $key % 8 == 6 ){
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
						?>
					<?php
					}
					?>
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
				<div class="fix-wrapper">
					<div class="recommend-adsense">
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
					<div class="recommend-adsense">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- view_right_bottom -->
						<ins class="adsbygoogle"
						     style="display:inline-block;width:200px;height:200px"
						     data-ad-client="ca-pub-6393601311110091"
						     data-ad-slot="3971988856"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					</div>
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
					
				</div>
				<div class="center">
					<!-- <div class="page-pos">
						<a class="prev" href="javascript:;"><i></i>上一页</a>
						<a class="next" href="javascript:;"><i></i>下一页</a>
						<p>
							<span class="page-cur">1</span>
							<span class="page-num"><?=$page['num']?></span>
						</p>
					</div>
					<div class="clearfix"></div> -->
				</div>
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