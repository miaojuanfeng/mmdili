<!DOCTYPE html>
<html>
<head>
	<title>mmdili</title>
	<?php require_once 'meta_view.php' ?>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="view-container">
				<div class="cate-title">
					<h1>Title</h1>
				</div>
				<div class="cate">
					<ul>
						<?php
						for($i=0;$i<15;$i++){
						?>
						<li>
							<a href="<?=base_url('view')?>"><h3>Can we get the Size of each page of Pdf using Php?</h3></a>
						</li>
						<?php
						}
						?>
					</ul>
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
</body>
</html>