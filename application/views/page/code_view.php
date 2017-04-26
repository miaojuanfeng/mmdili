<!DOCTYPE html>
<html>
<head>
	<title>技术架构 - 缪缪地理</title>
	<meta name="robots" content="index,follow" />
	<meta name="keywords" content="技术架构" />
	<meta name="description" content="缪缪地理技术架构。" />
	<?php $this->load->view('meta_view.php'); ?>
</head>
<body>
	<?php $this->load->view('header_view.php'); ?>
	<div class="content">
		<div class="main-container">
			<div class="page-container">
				<h3 class="page-title">技术架构</h3>
				<p class="page-title2">CII 扩展框架：</p>
				<ul>
					<li>本站运行在 CII 高性能扩展框架中，全称为 CodeIgniter Internal Framework 。</li>
					<li>这是根据目前非常流行的开源框架 CodeIgniter 的架构，以 PHP 扩展方式实现的框架。</li>
					<li>完全采用 C 语言编写而成，编译为动态链接库，在 PHP 启动时装载运行。</li>
					<li>经过线下单元测试与线上长期运行，CII 框架运行时不会产生 Segment Fault 与 Memory Leak 。</li>
					<li>采用 CII 框架开发网站的速度和便利不输于 CodeIgniter 。</li>
					<li>运行在 CII 框架上的网站响应速度比采用 CodeIgniter 框架提高近10倍。</li>
				</ul>
				<p class="page-title2">Gulp - 前端自动化工具：</p>
				<ul>
					<li>采用 gulp-sass 编译 SASS 为 CSS 。</li>
					<li>采用 gulp-minify-css 压缩 CSS 。</li>
					<li>采用 gulp-notify 显示报错信息和报错后不终止当前 Gulp 任务。</li>
					<li>采用 gulp-plumber 阻止 gulp 插件发生错误导致进程退出并输出错误日志。</li>
					<li>采用 gulp-uglify 压缩 JavaScript 。</li>
					<li>采用 gulp-concat 合并 JavaScript 。</li>
					<li>采用 gulp-autoprefixer 增加 CSS 前缀，兼容各浏览器。</li>
					<li>采用 gulp-rename 文件重命名。</li>
					<li>采用 browser-sync 浏览器自动刷新。</li>
				</ul>
				<p class="page-title2">其他服务：</p>
				<ul>
					<li>阿里云 ECS 提供高效云计算服务。</li>
					<li>阿里云 OSS 提供海量数据存储服务。</li>
					<li>GoDaddy 提供极速域名解析服务。</li>
					<li>GitHub 提供便捷源码同步服务。</li>
					<li>Microsoft 提供可靠文件转码服务。</li>
				</ul>
			</div>
			<div class="recommend-container">

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php $this->load->view('footer_view.php'); ?>
</body>
</html>