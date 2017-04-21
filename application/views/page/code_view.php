<!DOCTYPE html>
<html>
<head>
	<title>缪缪文科 - 专业的文科文档分享平台</title>
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
					<li>本站运行在 M.J.F 研发的 CII 高性能扩展框架中，全称为 CodeIgniter Internal Framework 。</li>
					<li>这是根据目前非常流行的开源框架 CodeIgniter 的架构，以 PHP 扩展方式实现的框架。</li>
					<li>完全采用 C 语言编写而成，编译为动态链接库，在 PHP 启动时装载运行。</li>
					<li>经过线下单元测试与线上长期运行，CII 框架运行时不会产生 Segment Fault 与 Memory Leak 。</li>
					<li>采用 CII 框架开发网站的速度和便利不输于 CodeIgniter 。</li>
					<li>运行在 CII 框架上的网站响应速度比采用 CodeIgniter 框架提高近10倍。</li>
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