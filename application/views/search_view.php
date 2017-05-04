<!DOCTYPE html>
<html>
<head>
	<title>包含_<?=$search['key']?>_关键字的所有文档 - 缪缪<?=$search['key']?>文档</title>
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="高中<?=$search['key']?>,<?=$search['key']?>文档,文档列表,文档搜索" />
	<meta name="description" content="包含_<?=$search['key']?>_关键字的所有文档。" />
	<?php require_once 'meta_view.php' ?>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container pb-60">
			<div class="search-container">
				<div class="search-title">
					<h1>包含 <b><?=$search['key']?></b> <span class="search-title-note">关键字的所有文档</span></h1>
				</div>
				<div class="cate-adsense">
					<!-- <img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" /> -->
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
				<div class="search">
					<ul>
						<?php
						if( count($search['doc']) ){
							foreach($search['doc'] as $k => $v){
						?>
						<li>
							<a href="<?=base_url('view/'.$v['doc_url'].'.html')?>" target="_blank"><h3><?=$v['doc_title']?><span class="page_num">P<?=$v['doc_page_num']?></span></h3></a>
						</li>
						<?php
							}
						}else{
						?>
						<li class="no-result">抱歉，没有找到相关文档</li>
						<?php
						}
						?>
					</ul>
				</div>
				<?php
				//ci
				//echo $this->pagination->create_links()
				?>
				<?=$this->cii_pagination->create_links($search['pn'])?>
			</div>
			<div class="recommend-container">
				
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php require_once 'footer_view.php' ?>
</body>
</html>