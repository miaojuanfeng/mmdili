<!DOCTYPE html>
<html>
<head>
	<title>下载文档：<?=$dl['title'].'.'.$dl['ext_name']?> - 缪缪<?=$dl['cate_name']?>文档</title>
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="" />
	<meta name="description" content="<?=$dl['title']?>。" />
	<?php require_once 'meta_view.php' ?>
	<script type="text/javascript" src="<?=base_url('assets/lib/js/swfobject.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/view.js')?>"></script>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="dl-container">
				<div class="page-title">
					<h1>下载文档：<?=$dl['title'].'.'.$dl['ext_name']?></h1>
				</div>
				<div class="page-notice">
					<p>本站内容为网上收集整理与原创撰写，并以研究教师教学方法，提高学生成绩为目的。仅供广大师生参考学习，下载后请不要上传到其他媒体媒介，并在合理范围内合法使用。</p>
					<p><a href="<?=base_url('view/'.$dl['url'].'.html')?>" target="_blank">查看文档 《<?=$dl['title']?>》 的在线预览 >></a></p>
				</div>
				<div class="page-top">
					<div class="page-top-adsense">
						<div class="left">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- view_page_top_left -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:336px;height:280px"
							     data-ad-client="ca-pub-6393601311110091"
							     data-ad-slot="2753013484"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
						<div class="right">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- view_page_top_right -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:336px;height:280px"
							     data-ad-client="ca-pub-6393601311110091"
							     data-ad-slot="4229746685"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>	
						</div>
						<div class="clearfix"></div>
					</div>
					<div style="border:1px solid #eee; padding:10px; margin:18px 0 20px 0;">
						<p style="margin: 2px 0;">当前文档下载链接有效时间为10分钟，超过时间下载链接将失效，请尽快下载。如提示下载链接已经失效，请<a href="javascript:;">刷新本页</a>获取最新下载链接。</p>
						<p style="margin: 2px 0;">支持浏览器下载与迅雷下载，有些文档如迅雷下载失败，请尝试使用浏览器下载。如果您发现本文档已经失效不能下载，请联系缪缪修正。或有其他疑问，欢迎联系我们。</p>
					</div>
					<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2); margin-bottom: 10px;">
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
					<div style="border: 1px solid #eee;margin:18px 0 18px 0;height:60px;over-flow:hidden;">
						<div style="float:left;width:448px; padding: 10px;">
							<p style="margin: 2px 0;">这篇文档是一份 doc 文档，由 MCMM 于公元纪年 2017年04月13日 上传。</p>
							<?php
							if( !$dl['dl_forbidden'] ){
							?>
							<p style="margin: 2px 0;">被归类到了 地理 分类栏目下，并设置了可免费下载的权限。</p>
							<?php
						    }else{
						    ?>
							<p style="margin: 2px 0;">被归类到了 地理 分类栏目下，并设置了不可下载的权限。</p>
						    <?php
						    }
						    ?>
						</div>
						<div style="float:left;width:234px;">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- dl_button_right -->
							<ins class="adsbygoogle"
							     style="display:inline-block;width:234px;height:60px"
							     data-ad-client="ca-pub-6393601311110091"
							     data-ad-slot="7378029489"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
						<div style="float:right;width:258px;height:60px;">
							<?php
							if( !$dl['dl_forbidden'] ){
							?>
							<a href="<?=$dl['link']?>" target="_blank" style="
							color: white;
						    text-shadow: #188062 0px 1px 0px;
						    font-family: 微软雅黑, 冬青黑体, 宋体, arial;
						    background: #2fad85;
						    padding: 0 30px;
						    font-size: 18px;
						    display: block;
						    height: 100%;
						    line-height:60px;
						    text-align: center;
						    white-space: nowrap;">立即下载这篇文档</a>
						    <?php
						    }else{
						    ?>
							<div style="
							height: 100%;
							line-height:60px;
							text-align: center;
						    color: white;
						    text-shadow: #188062 0px 1px 0px;
						    font-family: 微软雅黑, 冬青黑体, 宋体, arial;
						    background: #bbb;
						    padding: 0 30px;
						    font-size: 18px;
						    display: block;
						    white-space: nowrap;">版权所有，暂不提供下载</div>
						    <?php
						    }
						    ?>
						</div>
						<div class="clearfix"></div>
					</div>
					<div style="display: flex; border: 1px solid #eee; box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.2); margin-bottom: 10px;">
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
				</div>
			</div>
			<div class="recommend-container">
				<div style="display: flex; border:1px solid #eee; padding: 9px;">
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
						<h1>最新发布的</h1>
					</div>
					<ul>
						<?php
						foreach ($dl['new'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>"><?=$value['doc_title']?></a></li>
						<?php
						}
						?>
					</ul>
				</div>
				<div style="display: flex; border:1px solid #eee; padding: 9px;">
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
				<!-- <div class="relative-container">
					<div class="relative-title">
						<h1>推荐的文档</h1>
					</div>
					<ul>
						<?php
						foreach ($dl['hot'] as $key => $value) {
						?>
						<li><a href="<?=base_url('view/'.$value['doc_url'].'.html');?>"><?=$value['doc_title']?></a></li>
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