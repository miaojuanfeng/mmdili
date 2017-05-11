<!DOCTYPE html>
<html>
<head>
	<title><?=$cate['title']?>_分类下的所有文档<?=($cate['pn']>1)?'_第'.$cate['pn'].'页':''?> - 缪缪<?=$cate['title']?>文档</title>
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="高中<?=$cate['title']?>,<?=$cate['title']?>文档,文档列表,文档搜索" />
	<meta name="description" content="<?=$cate['title']?>_分类下的所有文档。" />
	<?php require_once 'meta_view.php' ?>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="view-container">
				<div class="cate-title">
					<h1><b><?=$cate['title']?></b> <span class="cate-title-note">分类下的所有文档</span></h1>
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
				<div class="cate">
					<ul>
						<?php
						foreach($cate['doc'] as $k => $v){
						?>
						<li style="background-image:url('<?=base_url('assets/img/'.$v['doc_ext_name'].'.png')?>')">
							<a href="<?=base_url('view/'.$v['doc_url'].'.html')?>" target="_blank">
								<h3><?=$v['doc_title']?><span>P<?=$v['doc_page_num']?></span></h3>
								<?php
								if( $v['doc_desc'] ){
								?>
								<p><?=$v['doc_desc']?> ...</p>
								<?php
								}
								?>
							</a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
				<?php
				//ci
				//echo $this->pagination->create_links()
				?>
				<?=$this->cii_pagination->create_links($this->uri->segment(3))?>
			</div>
			<div class="recommend-container">
				<div class="relative-container">
					<div class="relative-title">
						<h1>推荐的文档</h1>
					</div>
					<ul>
						<?php
						foreach ($cate['hot'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>" target="_blank"><?=$value['doc_title']?></a></li>
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
						<h1>大家都在看</h1>
					</div>
					<ul>
						<?php
						foreach ($cate['rand'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>" target="_blank"><?=$value['doc_title']?></a></li>
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
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php require_once 'footer_view.php' ?>
</body>
</html>