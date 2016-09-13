<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700" rel="stylesheet"> 
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="swapper">
<div id="page" class="hfeed site">
	<!--<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>-->

	<header id="masthead" class="site-header" role="banner">
		<div class="header-top">
			<div class="header-left">
				<?php if (is_front_page() && is_home() ): ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Nấm lim xanh" />
					</a></h1>
				<?php else :?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Nấm lim xanh" /></a></p>
				<?php endif?>
			</div>
			<div class="header-middle">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slogan.png" alt="slogan" />
			</div>
			<div class="header-right">
				<img src="<?php echo get_template_directory_uri(); ?>/images/image-top-right.png" alt="slogan" />
			</div>
		</div>
		<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
			<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
	</header><!-- #masthead -->
	<?php echo do_shortcode('[wonderplugin_slider id=2]'); ?>
	<div class="support">
		<ul>
			<li class="first">
				<span class="line-1">Tư vấn về nấm lim xanh</span><br>
				<span class="line-2">Hãy liên hệ ngay với chúng tôi</span>
			</li>
			<li><a href="tel:+4.3797.0138">
				<span class="line-1">Tổng đài tư vấn</span><br>
				<span class="line-2">04.3797.0138</span>
			</a></li>
			<li><a href="tel:+936.476.588">
				<span class="line-1">Dược sỹ dung</span><br>
				<span class="line-2">0936.476.588</span>
			</a></li>
			<li><a href="tel:+919.257.838">
				<span class="line-1">Dược sỹ hoa</span><br>
				<span class="line-2">0919.257.838</span>
			</a></li>
			<li class="last"><a href="tel:+4.85878602">
				<span class="line-1">Hỗ trợ hậu mãi</span><br>
				<span class="line-2">04.85878602</span>
			</a></li>
		</ul>
	</div>
	<div class="main-container">
		<div id="main" class="site-main">
