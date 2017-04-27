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
		<div class="main-container">
			<div class="search-container">
				<div class="search-title">
					<h1>包含 <b><?=$search['key']?></b> <span class="search-title-note">关键字的所有文档</span></h1>
				</div>
				<div style="display: flex; border-left: 1px solid #eee; border-right: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
					<img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" />
				</div>
				<div class="search">
					<ul>
						<?php
						foreach($search['doc'] as $k => $v){
						?>
						<li>
							<a href="<?=base_url('view/'.$v['doc_url'].'.html')?>" target="_blank"><h3><?=$v['doc_title']?><span class="page_num">P<?=$v['doc_page_num']?></span></h3></a>
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
				<!-- <div class="relative-container">
					<div class="relative-title">
						<h1>推荐的文档</h1>
					</div>
					<ul>
						<?php
						foreach ($search['hot'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>" target="_blank"><?=$value['doc_title']?></a></li>
						<?php
						}
						?>
					</ul>
				</div>
				<div style="display: flex;">
					<img src="<?=base_url('assets/img/right_ad_1.jpg')?>" width="220" />
				</div>
				<div class="relative-container">
					<div class="relative-title">
						<h1>大家都在看</h1>
					</div>
					<ul>
						<?php
						foreach ($search['rand'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>" target="_blank"><?=$value['doc_title']?></a></li>
						<?php
						}
						?>
					</ul>
				</div> -->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php require_once 'footer_view.php' ?>
</body>
</html>