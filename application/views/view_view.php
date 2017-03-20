<!DOCTYPE html>
<html>
<head>
	<title>mmdili</title>
	<?php require_once 'meta_view.php' ?>
	<script type="text/javascript" src="<?=base_url('assets/lib/js/flexpaper_flash_debug.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/view.min.js')?>"></script>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="view-container">
				<div class="page-title">
					<h1><?=$page['title']?></h1>
				</div>
				<?php
				for($i=1;$i<=$page['init'];$i++){
				?>
					<div class="page" id="page_<?=$i?>" style="width: <?=$page['width']?>px;height: <?=$page['height']?>px;"></div>
				<?php
				}
				?>
				<div class="more-page">
					<a href="javascript:;" page-swf="<?=$page['swf']?>" page-data="<?=$page['data']?>" page-init="<?=$page['init']?>" page-more="<?=$page['more']?>" page-num="<?=$page['num']?>" page-width="<?=$page['width']?>" page-height="<?=$page['height']?>"><span>There are <span class="page-left"><?=$page['more']?></span> pages left unread, Click to continue reading</span></a>
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
	<div class="reader-tools-bar-wrap">
		<div class="main-container">
			<div class="reader-tools-bar">
				<div class="left"></div>
				<div class="center"></div>
				<div class="right">
					<div class="download"><a href="<?=base_url('dl/index/'.$dl['view_id'].'/'.$dl['link'])?>" target="_blank">Download</a></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</body>
</html>