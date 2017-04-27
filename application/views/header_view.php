<div class="header">
	<div class="main-container">
		<div style="width:960px;">
			<div class="logo">缪缪地理</div>
			<div class="menu">
				<ul>
					<li>
						<a href="<?=base_url()?>">首页</a>
					</li>
					<li>
						<a href="<?=base_url('cate/dili')?>">地理</a>
					</li>
					<li>
						<a href="<?=base_url('cate/lishi')?>">历史</a>
					</li>
					<li>
						<a href="<?=base_url('cate/zhengzhi')?>">政治</a>
					</li>
					<li>
						<a href="<?=base_url('cate/wenzong')?>">文综</a>
					</li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<div>
				<form method="GET" action="/search" id="zh-top-search-form" class="zu-top-search-form">
					<input type="hidden" name="type" value="content">
					<label for="q" class="hide-text">知乎搜索</label><input type="text" class="zu-top-search-input" id="q" name="q" autocomplete="off" value="" maxlength="100" placeholder="搜索你感兴趣的内容..." role="combobox" aria-autocomplete="list">
					<button type="submit" class="zu-top-search-button"><span class="hide-text">搜索</span><span class="sprite-global-icon-magnifier-dark"></span></button>
				</form>
			</div>
		</div>
		<div class="login">
			<ul>
				<li>
					<a id="login-act" href="#">登录</a>
				</li>
				<li>
					或
				</li>
				<li>
					<a href="#">注册</a>
				</li>
			</ul>
			<div class="login-form">
				<div class="login-form-header">
					<div class="login-title">登录</div>
					<a class="login-form-close" href="javascript:;">×</a>
				</div>
				<div class="login-form-body">
					<div class="form-signin">
						<input type="email" class="form-control" name="email" placeholder="邮箱" />
						<input type="password" class="form-control" name="pwd" placeholder="密码" />
						<div>
							<button type="button" class="btn-primary" >登录</button>
							<div class="login-link">
								<a class="register" href="javascrip:;">还没有账号？注册一个</a>
								<a class="forget" href="javascrip:;">忘记密码？</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>