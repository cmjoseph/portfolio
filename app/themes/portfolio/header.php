<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#194a40">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#194a40">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#194a40">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- Icons -->
	<!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" /> -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $options['apple_touch_icon_57'] ?>" />
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $options['apple_touch_icon_60'] ?>" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $options['apple_touch_icon_72'] ?>" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $options['apple_touch_icon_76'] ?>" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $options['apple_touch_icon_114'] ?>" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $options['apple_touch_icon_120'] ?>" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $options['apple_touch_icon_144'] ?>" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $options['apple_touch_icon_152'] ?>" />
	<?php if ($options["android_touch_icon_192"]): ?>
	<link rel="icon" type="image/png" href="<?php echo $options["android_touch_icon_192"] ?>" sizes="192x192">
	<?php endif ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="preloader"></div>
	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header desktop" role="banner">
			<div class="sidemenu">
				<div id="logo" class="logo">Claude Marc Joseph<br/>Web Developer</div>
				<div id="navbar" class="navbar">
					<nav id="site-navigation-header" class="navigation main-navigation" role="navigation">
						<?php 
							wp_nav_menu( array('theme_location' => 'menu-header', 'menu_class' => 'nav-menu-header') );
						?>
					</nav>
				</div>
			</div>
		</header>

		<header id="sticky" class="site-header sticky" role="banner">
			<div class="sidemenu">
				<div id="logo-sticky" class="logo">Claude Marc Joseph<br/>Web Developer</div>
				<div id="navbar-sticky" class="navbar">
					<nav id="site-navigation-sticky" class="navigation main-navigation" role="navigation">
						<?php 
							wp_nav_menu( array('theme_location' => 'menu-header', 'menu_class' => 'nav-menu-header-sticky') );
						?>
					</nav>
				</div>
			</div>
		</header>

		<header id="masthead-mobile" class="site-header mobile" role="banner">
			<div class="sidemenu">
				<div id="navbar" class="navbar">
					<div class="nav-control">
						<div class="left" id="logo">Claude Marc Joseph<br/>Web Developer</div>
						<div class="right" id="burger">
							<div id="icon-burger">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
					<nav id="site-navigation-header-mobile" class="navigation main-navigation" role="navigation">
						<?php 
							wp_nav_menu( array('theme_location' => 'menu-header', 'menu_class' => 'nav-menu-header') );
						?>
					</nav>
				</div>
			</div>
		</header>
		<div id="main" class="site-main">
