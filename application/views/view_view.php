<!DOCTYPE html>
<html>
<head>
	<title><?=$page['title']?> - mmdili</title>
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
				if( $page['poly2bitmap'] ){
				?>
				<div class="page-notice">
					提示：当前文档包含较多图形，已对图形及部分文字进行压缩以加快载入，下载文档可浏览高清版本。
				</div>
				<?php
				}
				?>
				<?php
				for($i=1;$i<=$page['num'];$i++){
				?>
					<div class="page" id="page_<?=$i?>" page="<?=$i?>" style="width: <?=$page['width']?>px;height: <?=$page['height']?>px;"></div>
				<?php
				}
				?>
				<div class="more-page" style="display:none;">
					<a href="javascript:;" page-swf="<?=$page['swf']?>" page-data="<?=$page['data']?>"><span>There are <span class="page-left"><?=$page['more']?></span> pages left unread, Click to continue reading</span></a>
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
				<div class="left">
					<a class="page-prev" href="javascript:;">< 上一页</a>
					<a class="page-next" href="javascript:;">下一页 ></a>
				</div>
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