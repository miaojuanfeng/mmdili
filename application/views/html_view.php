<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?=$page['title']?> - 缪缪<?=$page['cate_name']?>文档</title>
<meta name="robots" content="index,follow" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<?php require_once 'meta_view.php' ?>
<meta charset="utf-8"/>
<meta name="generator" content="pdf2htmlEX"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?=base_url('assets/lib/css/base.min.css')?>"/>
<link rel="stylesheet" href="<?=base_url('assets/lib/css/fancy.min.css')?>"/>
<link rel="stylesheet" href="http://view.mmdili.com/<?=$page['user_url']?>/<?=$page['doc_url']?>/page.min.css"/>
<script type="text/javascript" src="<?=base_url('assets/lib/js/htmlview.js')?>"></script>
<script>
/*
 Copyright 2012 Mozilla Foundation 
 Copyright 2013 Lu Wang <coolwanglu@gmail.com>
 Apache License Version 2.0 
*/
(function(){function b(a,b,e,f){var c=(a.className||"").split(/\s+/g);""===c[0]&&c.shift();var d=c.indexOf(b);0>d&&e&&c.push(b);0<=d&&f&&c.splice(d,1);a.className=c.join(" ");return 0<=d}if(!("classList"in document.createElement("div"))){var e={add:function(a){b(this.element,a,!0,!1)},contains:function(a){return b(this.element,a,!1,!1)},remove:function(a){b(this.element,a,!1,!0)},toggle:function(a){b(this.element,a,!0,!0)}};Object.defineProperty(HTMLElement.prototype,"classList",{get:function(){if(this._classList)return this._classList;
var a=Object.create(e,{element:{value:this,writable:!1,enumerable:!0}});Object.defineProperty(this,"_classList",{value:a,writable:!1,enumerable:!1});return a},enumerable:!0})}})();
</script>
<script>
try{
pdf2htmlEX.defaultViewer = new pdf2htmlEX.Viewer({});
}catch(e){}
</script>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="view-container">
				<div class="title-container" style="background-image:url('<?=base_url('assets/img/'.$page['ext_name'].'.png')?>')">
					<div class="page-title">
						<h1><?=$page['title']?></h1>
					</div>
					<div class="page-notice">提示：已对文档中包含的图片及部分文字进行压缩以加快载入，下载文档可浏览高清版本。</div>
				</div>
				<div id="sidebar">
					<div id="outline"></div>
				</div>
				<div id="page-container">
					<div id="adsense-top" class="adsense">
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
					<?php
					for($i=1;$i<=$page['num'];$i++){
					?>
					<div id="pf<?=dechex($i)?>" class="pf w0 h0" data-page-no="<?=dechex($i)?>" data-page-url="http://view.mmdili.com/<?=$page['user_url']?>/<?=$page['doc_url']?>/<?=sprintf("%03d", $i)?>"></div>
					<?php
						// AddSense
						if( $i == 2 ){
					?>
						<div class="adsense">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- view_page_2 -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:960px;height:90px"
							     data-ad-client="ca-pub-6393601311110091"
							     data-ad-slot="9189826685"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					<?php
						}else if( $i == 4 ){
					?>
						<div class="adsense">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- view_page_3 -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:960px;height:90px"
							     data-ad-client="ca-pub-6393601311110091"
							     data-ad-slot="1666559883"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					<?php
						}else if( $i == 6 ){
					?>
						<div class="adsense">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- view_page_4 -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:960px;height:90px"
							     data-ad-client="ca-pub-6393601311110091"
							     data-ad-slot="3143293083"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					<?php
						}// End AddSense
					?>
					<?php
					}
					?>
				</div>
				<div class="loading-indicator">
					<img alt="" src="img-64x64.png"/>
				</div>
			</div>
			<div class="recommend-container">
				<div class="relative-container">
					<div class="relative-title">
						<h1>最新发布的</h1>
					</div>
					<ul>
						<?php
						foreach ($page['new'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>"><?=$value['doc_title']?></a></li>
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
						foreach ($page['hot'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>"><?=$value['doc_title']?></a></li>
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
				<div class="relative-container">
					<div class="relative-title">
						<h1>大家都在看</h1>
					</div>
					<ul>
						<?php
						foreach ($page['rand'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>"><?=$value['doc_title']?></a></li>
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
	<div class="reader-tools-bar-wrap">
		<div class="main-container">
			<div class="reader-tools-bar">
				<div class="left">
					
				</div>
				<div class="center">
					
					<!-- <div class="page-pos">
						<a class="prev" href="javascript:;"><i></i>上一页</a>
						<a class="next" href="javascript:;"><i></i>下一页</a>
						<p>
							<span class="page-cur">1</span>
							<span class="page-num"><?=$page['num']?></span>
						</p>
					</div>
					<div class="clearfix"></div> -->
				</div>
				<div class="right">
					<?php
					if( $page['dl_forbidden'] ){
					?>
					<div class="download-forbidden">暂不提供下载</div>
					<?php
					}else{
					?>
					<div class="download"><a href="<?=base_url('dl/'.$page['dl'])?>" target="_blank">下载这篇文档</a></div>
					<?php
					}
					?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</body>
</html>