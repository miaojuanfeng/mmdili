<!DOCTYPE html>
<html>
<head>
	<title>缪缪地理 - 专业的文科文档分享平台</title>
	<?php require_once 'meta_view.php' ?>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="category-container-wrap">
				<div class="category-container">
					<div class="category-title">
						<h1><b>地理</b> 分类下的最新文档</h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['new'][1] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.($value['doc_url']))?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['new'][1] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.($value['doc_url']))?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
						<img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" />
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
							<li>list</li>
							<li>list</li>
							<li>list</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="category-container-wrap">
				<div class="category-container">
					<div class="category-title">
						<h1><b>历史</b> 分类下的最新文档</h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['new'][2] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.($value['doc_url']))?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['new'][2] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.($value['doc_url']))?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
						<img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" />
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
			<div class="category-container-wrap">
				<div class="category-container">
					<div class="category-title">
						<h1><b>政治</b> 分类下的最新文档</h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['new'][3] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.($value['doc_url']))?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['new'][3] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.($value['doc_url']))?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
						<img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" />
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
			<div class="category-container-wrap">
				<div class="category-container">
					<div class="category-title">
						<h1><b>文综</b> 分类下的最新文档</h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['new'][4] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.($value['doc_url']))?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<ul>
							<?php
							foreach($doc['new'][4] as $key => $value){
								if( ($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/'.($value['doc_url']))?>" target="_blank"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
						<img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" />
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
	</div>
	<?php require_once 'footer_view.php' ?>
</body>
</html>