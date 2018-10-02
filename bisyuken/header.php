<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo '｜'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?KT61kdb8fmU%3D" charset="utf-8"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ScrollMagic.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126650995-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-126650995-1');
		</script>
	</head>
	<body <?php body_class(); ?>>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.1&appId=340133876330398&autoLogAppEvents=1';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<!-- wrapper -->
		<div id="contents" class="wrapper">
			<!-- header -->
			<header id="header" v-bind:class='{open:isOpen}' role="banner">
				<div class="inner">
					<div id="spHead">
						<div id="toggle" v-on:click='isOpen=!isOpen'>
							<div>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
					<a href="<?php echo home_url(); ?>" class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo">
					</a>
					<nav id="nav" role="navigation">
						<ul>
							<li>
								<a href="<?php echo home_url(); ?>">
									<p>HOME</p>
								</a>
							</li>
							<li>
								<a href="<?php echo home_url(); ?>/news">
									<p>新着情報</p>
								</a>
								<ul>
									<li>
										<a href="<?php echo home_url(); ?>/news/category/event">
											<p>イベント</p>
										</a>
									</li>
									<li>
										<a href="<?php echo home_url(); ?>/news/category/product">
											<p>新商品</p>
										</a>
									</li>
									<li>
										<a href="<?php echo home_url(); ?>/news/category/other">
											<p>その他</p>
										</a>
									</li>
								</ul>
								<li>
									<aside class="sns">
										<a href="https://www.facebook.com/bisyukenyamagata/" target="_blank">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
												 y="0px" viewBox="0 0 16.2 30" style="enable-background:new 0 0 16.2 30;" xml:space="preserve">
											<g transform="translate(384 512)">
												<path class="st0" d="M-373.6-512c-3.2,0-5.8,2.6-5.8,5.8v3.5h-4.6v4.6h4.6v16.2h4.6v-16.2h5.2l1.2-4.6h-6.3v-3.5
													c0-0.6,0.5-1.2,1.2-1.2h5.8v-4.6H-373.6z"/>
											</g>
											</svg>
										</a>
										<a href="https://twitter.com/bisyuken_ymgt" target="_blank">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
												 y="0px" viewBox="0 0 36.9 30" style="enable-background:new 0 0 36.9 30;" xml:space="preserve">
											<g transform="translate(544 512)">
												<path class="st0" d="M-507.1-508.4c-1.4,0.6-2.8,1-4.4,1.2c1.6-0.9,2.8-2.4,3.3-4.2c-1.5,0.9-3.1,1.5-4.8,1.8
													c-1.4-1.5-3.4-2.4-5.5-2.4c-4.2,0-7.6,3.4-7.6,7.6c0,0.6,0.1,1.2,0.2,1.7c-6.3-0.3-11.9-3.3-15.6-7.9c-0.7,1.1-1,2.4-1,3.8
													c0,2.6,1.3,4.9,3.4,6.3c-1.2,0-2.4-0.4-3.4-0.9c0,0,0,0.1,0,0.1c0,3.7,2.6,6.7,6.1,7.4c-0.6,0.2-1.3,0.3-2,0.3c-0.5,0-1,0-1.4-0.1
													c1,3,3.8,5.2,7.1,5.3c-2.6,2-5.9,3.2-9.4,3.2c-0.6,0-1.2,0-1.8-0.1c3.4,2.1,7.3,3.4,11.6,3.4c13.9,0,21.6-11.5,21.6-21.6
													c0-0.3,0-0.7,0-1C-509.4-505.6-508.1-506.9-507.1-508.4L-507.1-508.4z"/>
											</g>
											</svg>
										</a>
									</aside>
								</li>
							</li>
							<!--<li>
								<a href="<?php echo home_url(); ?>">
									<p>県産酒一覧</p>
								</a>
							</li>-->
						</ul>
					</nav>
				</div>
			</header>
			<!-- /header -->
