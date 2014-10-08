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
<!--[if !(IE 7) | !(IE 8) ]><!-->
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
	<link rel='stylesheet' id='s5-css'  href='/wp-content/themes/twentyfourteen/css/flexslider.css' type='text/css' media='all' />
	<?php wp_head(); ?>
</head>

<body>
	<header id="header">
		<div class="container"> <a href="http://www.vitaminstore.com.au/landingpage/" class="logo"> <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="澳洲最大的保健品连锁店" /> </a>
			<h1>澳洲最大的保健品连锁店</h1>
		</div>
	</header>