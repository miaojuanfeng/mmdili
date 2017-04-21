<!DOCTYPE html>
<html>
<head>
	<title>缪缪文科 - 专业的文科文档分享平台</title>
	<?php require_once '../meta_view.php' ?>
</head>
<body>
	<?php $this->load->view('../header_view.php'); ?>
	<div class="content">
		<div class="main-container">
			<div class="page-container">
				<h3 class="page-title">很抱歉，您要访问的页面不存在！</h3>
				<p class="page-title2">温馨提示：</p>
				<ul>
					<li>请检查您访问的网址是否正确</li>
					<li>如果您不能确认访问的网址，请<a href="<?=base_url()?>">浏览首页</a>查看更多链接。</li>
					<li>点击顶部菜单重新回到页面</li>
					<li>如有任何意见或建议，请及时反馈给我们。</li>
				</ul>
			</div>
			<div class="recommend-container">

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php require_once '../footer_view.php' ?>
</body>
</html>