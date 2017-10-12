﻿<div class="header">
	<div class="main-container">
		<div class="main-header">
			<div class="logo">缪缪地理</div>
			<div class="menu">
				<ul>
					<li>
						<a <?php if( $this->router->class == 'home' ) echo "class='active'"; ?> href="<?=base_url()?>">首页</a>
					</li>
					<li>
						<a <?php if( $this->router->method == 'yuwen' || ( isset($page['cate_url']) && $page['cate_url'] == 'yuwen' ) ) echo "class='active'"; ?> href="<?=base_url('cate/yuwen')?>">语文</a>
					</li>
					<li>
						<a <?php if( $this->router->method == 'shuxue' || ( isset($page['cate_url']) && $page['cate_url'] == 'shuxue' ) ) echo "class='active'"; ?> href="<?=base_url('cate/shuxue')?>">数学</a>
					</li>
					<li>
						<a <?php if( $this->router->method == 'waiyu' || ( isset($page['cate_url']) && $page['cate_url'] == 'waiyu' ) ) echo "class='active'"; ?> href="<?=base_url('cate/waiyu')?>">外语</a>
					</li>
					<li>
						<a <?php if( $this->router->method == 'zhengzhi' || ( isset($page['cate_url']) && $page['cate_url'] == 'zhengzhi' ) ) echo "class='active'"; ?> href="<?=base_url('cate/zhengzhi')?>">政治</a>
					</li>
					<li>
						<a <?php if( $this->router->method == 'lishi' || ( isset($page['cate_url']) && $page['cate_url'] == 'lishi' ) ) echo "class='active'"; ?> href="<?=base_url('cate/lishi')?>">历史</a>
					</li>
					<li>
						<a <?php if( $this->router->method == 'dili' || ( isset($page['cate_url']) && $page['cate_url'] == 'dili' ) ) echo "class='active'"; ?> href="<?=base_url('cate/dili')?>">地理</a>
					</li>
					<li>
						<a <?php if( $this->router->method == 'wenzong' || ( isset($page['cate_url']) && $page['cate_url'] == 'wenzong' ) ) echo "class='active'"; ?> href="<?=base_url('cate/wenzong')?>">文综</a>
					</li>
					<li>
						<a <?php if( $this->router->method == 'jisuanji' || ( isset($page['cate_url']) && $page['cate_url'] == 'jisuanji' ) ) echo "class='active'"; ?> href="<?=base_url('cate/jisuanji')?>">计算机</a>
					</li>
					<li>
						<a <?php if( $this->router->method == 'shenlun' || ( isset($page['cate_url']) && $page['cate_url'] == 'shenlun' ) ) echo "class='active'"; ?> href="<?=base_url('cate/shenlun')?>">申论精品文章</a>
					</li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<form method="GET" action="/search" id="search-form" class="search-form">
				<input type="text" id="search-input" class="search-input" name="k" value="<?=!empty($this->input->get('k', true))?str_replace(array('\'','"'), '', $this->input->get('k', true)):''?>" maxlength="100" placeholder="从海量文档中搜索...">
				<button type="button" id="search-button" class="search-button"><span class="search-button-text">搜索</span></button>
			</form>
			<div class="clearfix"></div>
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
	<div class="header-bottom-bg"></div>
</div>