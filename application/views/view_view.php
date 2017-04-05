<!DOCTYPE html>
<html>
<head>
	<title><?=$page['title']?> - 缪缪<?=$page['cate_name']?>文档</title>
	<?php require_once 'meta_view.php' ?>
	<script type="text/javascript" src="<?=base_url('assets/lib/js/swfobject.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/view.js')?>"></script>
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
				<div style="display: flex; border-left: 1px solid #eee; border-right: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2);">
					<img src="<?=base_url('assets/img/view_ad_1.jpg')?>" width="960" />
				</div>
				<?php
				for($i=1;$i<=$page['num'];$i++){
				?>
					<div class="page" id="page_<?=$i?>" page="<?=$i?>" style="width: <?=$page['width']?>px;height: <?=$page['height']?>px; <?php if( $i == 1) echo 'border-top:none;margin-bottom:10px;'; ?>">
						<div class="pv" id="pv_<?=$i?>" page="<?=$i?>"></div>
					</div>
				<?php
					if( $i == 1 ){
				?>
					<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2); margin-bottom: 10px;">
						<img src="<?=base_url('assets/img/view_ad_2.jpg')?>" width="960" />
					</div>
				<?php
					}
				}
				?>
				<div class="more-page" style="display:none;">
					<a href="javascript:;" page-swf="<?=$page['swf']?>" page-data="<?=$page['data']?>" page-width="<?=$page['width']?>" page-height="<?=$page['height']?>"><span>There are <span class="page-left"><?=$page['more']?></span> pages left unread, Click to continue reading</span></a>
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
	<div class="reader-tools-bar-wrap">
		<div class="main-container">
			<div class="reader-tools-bar">
				<div class="left">
					<!-- <a class="page-prev" href="javascript:;">< 上一页</a> -->
					<div class="page-pos">
						<input type="text" id="jump_page" value="1" />
						/
						<span class="page-num"><?=$page['num']?></span>
					</div>
					<!-- <a class="page-next" href="javascript:;">下一页 ></a> -->
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