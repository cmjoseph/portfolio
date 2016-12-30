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
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="hdr-wrapper">
				<div id="logo" class="logo">
					<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<h1 class="site-title">
							<span class="top">Claude Marc Joseph <br/>Web Developer Extraordinaire</span>
							<span class="bottom">CMJ WD Extraordinaire</span>
						</h1>
					</a>
				</div>
				<div id="navbar" class="navbar">
					<nav id="site-navigation" class="navigation main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-header', 'menu_class' => 'header-menu' ) ); ?>
					</nav>
				</div>
				<div id="social" class="social">
					<a href="">facebook</a>
					<a href="">email</a>
				</div>
			</div>
		</header>

		<div id="main" class="site-main">
