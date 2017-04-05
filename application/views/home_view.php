<!DOCTYPE html>
<html>
<head>
	<title>缪缪文科 - 专业的文科文档分享平台</title>
	<?php require_once 'meta_view.php' ?>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="home-container">
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
				</div>
				<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
					<img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" />
				</div>
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
				</div>
				<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
					<img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" />
				</div>
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
				</div>
				<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
					<img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" />
				</div>
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
			</div>
			<div class="recommend-container">
				<div class="relative-container">
					<div class="relative-title">
						<h1>最新发布的</h1>
					</div>
					<ul>
						<?php
						foreach ($doc['new'][1] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url']);?>" target="_blank"><?=$value['doc_title']?></a></li>
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
						<h1>推荐的文档</h1>
					</div>
					<ul>
						<?php
						foreach ($doc['hot'][2] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url']);?>" target="_blank"><?=$value['doc_title']?></a></li>
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
						foreach ($doc['rand'][4] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url']);?>" target="_blank"><?=$value['doc_title']?></a></li>
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
</body>
</html>