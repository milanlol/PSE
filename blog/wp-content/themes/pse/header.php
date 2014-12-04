<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pse
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<link href="../../../../../new/assets/css/hover_pack.css" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="../../../../../new/assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for -->
<link href="../../../../../new/assets/css/main.css" rel="stylesheet">

<link href="../../../../../new/assets/css/animations.css" rel="stylesheet">
<link href="../../../../../new/assets/css/font-awesome.min.css" rel="stylesheet">

<!-- Main Jquery & Hover Effects. Should load first -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../../../../../new/assets/js/hover_pack.js"></script>
    <script src="../../../../../new/assets/js/bootstrap.min.js"></script>
    <script src="../../../../../new/assets/js/retina.js"></script>


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'pse' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

	
		<?php wp_nav_menu(); ?>
	

		
	</header><!-- #masthead -->

	<div class="container">
		<div class="row">
			<div id="content" class="site-content">
