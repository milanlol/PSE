<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pse
 */
?><!DOCTYPE html>
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

	<!== Navigation ==>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	 	<div class="container">
	    	<!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
	      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
	      		</button>
	      		<a href="../../../../../new/index.php"><img src="../../../../../new/assets/img/PSE-Logo.png" class="img-responsive logo" width="200" /></a>
	    	</div>

	    	<!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      		<ul class="nav navbar-nav navbar-right">
			        <li><a href="../../../../../new/blog/" class="scroll-link" data-id="home">Home</a></li>
			        <li><a href="../../../../../new/about.php" class="scroll-link" data-id="about">About</a></li>
			        <li><a href="#" class="scroll-link" data-id="services">Services</a></li>

			        <li class="dropdown">
			          <a href="../../../../../new/locations.php" class="dropdown-toggle" data-toggle="dropdown">Find Us! <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="../../../../../new/locations.php">Locations </a></li>
			            <li><a href="../../../../../new/atm.php">ATM</a></li>
			            
			          </ul>
			        </li>

			        
			        <li><a href="../../../../../new/contact.php" class="scroll-link" data-id="contact">Contact</a></li>
			        <li><a href="../../../../../new/newsletter.pdf" class="scroll-link" data-id="newsletter">Newsletter</a></li>
			        <li><a href="#">Enroll</a></li>
	      		</ul>
	    	</div><!-- /.navbar-collapse -->
	  	</div>
	</nav>

		
	</header><!-- #masthead -->

	<div class="container">
		<div class="row">
			<div id="content" class="site-content">
