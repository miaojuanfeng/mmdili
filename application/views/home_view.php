<!DOCTYPE html>
<html>
<head>
	<title>mmdili</title>
	<?php require_once 'meta_view.php' ?>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<?php var_dump($doc['new']); ?>
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
								<a href="<?=base_url('view/index/'.($value['doc_url']))?>"><h3><?=$value['doc_title']?></h3></a>
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
								<a href="<?=base_url('view/index/'.($value['doc_url']))?>"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
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
								<a href="<?=base_url('view/index/'.($value['doc_url']))?>"><h3><?=$value['doc_title']?></h3></a>
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
								<a href="<?=base_url('view/index/'.($value['doc_url']))?>"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
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
						<h1><b>政治</b> 分类下的最新文档</h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['new'][3] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/index/'.($value['doc_url']))?>"><h3><?=$value['doc_title']?></h3></a>
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
								<a href="<?=base_url('view/index/'.($value['doc_url']))?>"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
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
						<h1><b>文综</b> 分类下的最新文档</h1>
					</div>
					<div class="category">
						<ul>
							<?php
							foreach($doc['new'][4] as $key => $value){
								if( !($key % 2) ){
							?>
							<li>
								<a href="<?=base_url('view/index/'.($value['doc_url']))?>"><h3><?=$value['doc_title']?></h3></a>
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
								<a href="<?=base_url('view/index/'.($value['doc_url']))?>"><h3><?=$value['doc_title']?></h3></a>
							</li>
							<?php
								}
							}
							?>
						</ul>
						<div class="clearfix"></div>
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
		</div>
	</div>
	<?php require_once 'footer_view.php' ?>
</body>
</html>