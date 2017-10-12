<!DOCTYPE html>
<html>
<head>
	<title>缪缪地理 - 专业的文科文档分享平台</title>
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="高中地理,高中历史,高中政治,高考文综,地理文档,历史文档,政治文档,高考文档,文档下载" />
	<meta name="description" content="缪缪地理，专业的文科文档分享平台。提供高中地理、历史、政治、文综、高考试题文档下载。" />
	<?php require_once 'meta_view.php' ?>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="home-container">
				<div class="category-container">
					<div class="category-title">
						<h1><b>申论精品文章</b> <span class="category-title-note">分类下的最新文档</span><span class="cate_all"><a href="<?=base_url('cate/shenlun')?>">查看所有</a></span></h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['cate'][9] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['cate'][9] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="adsense">
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
				<div class="category-container">
					<div class="category-title">
						<h1><b>地理</b> <span class="category-title-note">分类下的最新文档</span><span class="cate_all"><a href="<?=base_url('cate/dili')?>">查看所有</a></span></h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['cate'][1] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['cate'][1] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="adsense">
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
				<div class="category-container">
					<div class="category-title">
						<h1><b>历史</b> <span class="category-title-note">分类下的最新文档</span><span class="cate_all"><a href="<?=base_url('cate/lishi')?>">查看所有</a></span></h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['cate'][2] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['cate'][2] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="adsense">
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
				<div class="category-container">
					<div class="category-title">
						<h1><b>政治</b> <span class="category-title-note">分类下的最新文档</span><span class="cate_all"><a href="<?=base_url('cate/zhengzhi')?>">查看所有</a></span></h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['cate'][3] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['cate'][3] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="adsense">
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
				<div class="category-container">
					<div class="category-title">
						<h1><b>文综</b> <span class="category-title-note">分类下的最新文档</span><span class="cate_all"><a href="<?=base_url('cate/wenzong')?>">查看所有</a></span></h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['cate'][4] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['cate'][4] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="adsense">
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
				<div class="category-container">
					<div class="category-title">
						<h1><b>语文</b> <span class="category-title-note">分类下的最新文档</span><span class="cate_all"><a href="<?=base_url('cate/yuwen')?>">查看所有</a></span></h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['cate'][5] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['cate'][5] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="adsense">
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
				<div class="category-container">
					<div class="category-title">
						<h1><b>数学</b> <span class="category-title-note">分类下的最新文档</span><span class="cate_all"><a href="<?=base_url('cate/shuxue')?>">查看所有</a></span></h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['cate'][6] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['cate'][6] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="adsense">
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
				<div class="category-container">
					<div class="category-title">
						<h1><b>外语</b> <span class="category-title-note">分类下的最新文档</span><span class="cate_all"><a href="<?=base_url('cate/waiyu')?>">查看所有</a></span></h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['cate'][7] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['cate'][7] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="adsense">
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
				<div class="category-container">
					<div class="category-title">
						<h1><b>计算机</b> <span class="category-title-note">分类下的最新文档</span><span class="cate_all"><a href="<?=base_url('cate/jisuanji')?>">查看所有</a></span></h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['cate'][8] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['cate'][8] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.$value['doc_url'].'.html')?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="recommend-container">
				<div class="relative-container">
					<div class="relative-title">
						<h1>最新发布的</h1>
					</div>
					<ul>
						<?php
						foreach ($doc['new'] as $key => $value) {
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
						<h1>推荐的文档</h1>
					</div>
					<ul>
						<?php
						foreach ($doc['hot'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>" target="_blank"><?=$value['doc_title']?></a></li>
						<?php
						}
						?>
					</ul>
				</div>
				<div class="fix-wrapper">
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
							foreach ($doc['rand'] as $key => $value) {
							?>
							<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>" target="_blank"><?=$value['doc_title']?></a></li>
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
</body>
</html>