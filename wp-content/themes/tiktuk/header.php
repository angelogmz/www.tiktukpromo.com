<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
	<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	    <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

			<!-- header -->
			<header class="header clear" role="banner">

					<div class="header-inner col-lg-11 offset-lg-1 col-md-12 offset-md-0">

						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
							</a>

							<div class="header-menu-btn">
								<button class="menu-btn" type="button" class="right navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
										<span class="menu-btn-title">Menu</span>
										<span class="menu-icon left">
											<span class="icon-bar top"></span>
											<span class="icon-bar mid"></span>
											<span class="icon-bar bottom"></span>
										</span>
								</button>
							</div>

						</div>
						<!-- /logo -->


						<div class="menu-section">
							<div class="main-menu">
								<!-- nav -->
								<nav class="nav" role="navigation">
									<?php html5blank_nav(); ?>
								</nav>
								<!-- /nav -->
							</div>

							<div class="search-smo">
								<div class="header-contact"><a href="tel:#'?>"><?php echo ('124567890');?></a></div>
									<div class="sm-links">
											<a href="#" class="" target="_blank"><i class="fab fa-facebook-f"></i></a>
									</div>
							</div>						
						</div>





					</div>
			</div>
			</header>
			<!-- /header -->
