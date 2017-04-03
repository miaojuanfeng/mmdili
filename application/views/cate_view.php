<!DOCTYPE html>
<html>
<head>
	<title>mmdili</title>
	<?php require_once 'meta_view.php' ?>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="view-container">
				<div class="cate-title">
					<h1><b><?=$cate['title']?></b> 分类下的所有文档</h1>
				</div>
				<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
					<img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" />
				</div>
				<div class="cate">
					<ul>
						<?php
						foreach($cate['doc'] as $k => $v){
						?>
						<li>
							<a href="<?=base_url('view/index/'.$v['doc_url'])?>" target="_blank"><h3><?=$v['doc_title']?></h3></a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>
			</div>
			<div class="recommend-container">
				<div class="relative-container">
					<div class="relative-title">
						<h1>Title</h1>
					</div>
					<ul>
						<li>list</li>
						<li>list</li>
						<li>list</li>
						<li>list</li>
						<li>list</li>
					</ul>
				</div>
				<div style="display: flex;">
					<img src="<?=base_url('assets/img/right_ad_1.jpg')?>" width="220" />
				</div>
				<div class="relative-container">
					<div class="relative-title">
						<h1>Title</h1>
					</div>
					<ul>
						<li>list</li>
						<li>list</li>
						<li>list</li>
						<li>list</li>
						<li>list</li>
					</ul>
				</div>
				<div style="display: flex;">
					<img src="<?=base_url('assets/img/right_ad_1.jpg')?>" width="220" />
				</div>
				<div class="relative-container">
					<div class="relative-title">
						<h1>Title</h1>
					</div>
					<ul>
						<li>list</li>
						<li>list</li>
						<li>list</li>
						<li>list</li>
						<li>list</li>
					</ul>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php require_once 'footer_view.php' ?>
</body>
</html>