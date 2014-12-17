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
	      		<a href="http://www.psecreditunion.org/new"><img src="http://psecreditunion.org/new/blog/wp-content/uploads/2014/11/PSE-Logo.png" class="img-responsive logo" width="200" /></a>
	    	</div>

	    	<!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      		<ul class="nav navbar-nav navbar-right">
			        <li><a href="http://psecreditunion.org/new/blog/" class="scroll-link" data-id="home">Home</a></li>
			        <li><a href="http://www.psecreditunion.org/new/about.php" class="scroll-link" data-id="about">About</a></li>

			        <li class="dropdown">
			          <a href="services.php" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="http://www.psecreditunion.org/new/savings.php">Savings</a></li>
						<li><a href="http://www.psecreditunion.org/new/checking.php">Checking</a></li>
						<li><a href="http://www.psecreditunion.org/new/rates.php">Rates</a></li>
						<li><a href="http://www.psecreditunion.org/new/fees.php">Fees</a></li>
						<!--<li><a href="http://www.psecreditunion.org/new/visa.php">Visa</a></li>-->
						<li><a href="http://www.psecreditunion.org/new/cu-programs.php">CU Programs</a></li>
						<li><a href="http://www.psecreditunion.org/new/loans.php">Loans</a></li>
						<li><a href="http://www.psecreditunion.org/new/member-clubs.php">Member Clubs</a> </li>
						<li><a href="http://www.psecreditunion.org/new/convenience-services.php">Convenience Services</a></li>
						<!--<li><a href="#">SEG</a></li>-->
			            
			          </ul>
			        </li>

			        <li class="dropdown">
			          <a href="locations.php" class="dropdown-toggle" data-toggle="dropdown">Contact <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li><a href="http://www.psecreditunion.org/new/contact.php" data-id="contact">Contact</a></li>
			            <li><a href="http://www.psecreditunion.org/new/locations.php">Locations </a></li>
			            <li><a href="http://www.psecreditunion.org/new/atm.php">ATM</a></li>
			            
			          </ul>
			        </li>
					
					<li class="dropdown">
			          <a href="locations.php" class="dropdown-toggle" data-toggle="dropdown">Connect With Us <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="http://psecreditunion.org/new/blog/">Blog</a></li>
			            <li><a href="http://psecreditunion.org/new/blog/events/">Events</a></li>
			            <li class="divider"></li>
			            <li><a href="newsletter.pdf" data-id="newsletter">Newsletter</a></li>
			            <li class="divider"></li>
			          	<li><a href="https://twitter.com/PSECreditUnion"><i class="fa fa-twitter-square"></i> Twitter</a></li>
			            <li><a href="https://www.facebook.com/PseCreditUnion"><i class="fa fa-facebook-square"></i> Facebook </a></li>
			            <li><a href="//plus.google.com/u/0/117230295060624059572?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;"> <i class="fa fa-google-plus-square"></i> Google +</a></li>
			          </ul>
			        </li>
			        
			        
			        
			        <li class="enrollNav"><a href="#">Enroll</a></li>


			        <li class="logInNav"><a href="#">Log In</a></li>


					<li>
						<a class="siteSearch">
					  		<i class="fa fa-search"></i>
					  	</a>		
				  	</li>

	      		</ul>
	    	</div><!-- /.navbar-collapse -->
	    	

	  	</div>

	  	<script>
		  	$( document ).ready(function() {
				$('#search_form').hide();
				$('.siteSearch').click(function() {
					$('#search_form').toggle( 'slow' );
				});

				$('#searchField').click(function() {
					$('#searchField').val('');
				});

			});
		</script>

	  	

		<div class="container">
			<form method="get" id="search_form" action="<?php bloginfo('home'); ?>"/>
		       <input type="text" class="text" id="searchField" name="s" value="Search PSE..."  >
		       <input type="submit" class="submit" id="searchButton" value="Go"  />
			</form>
		</div>

	</nav>

	

		
	</header><!-- #masthead -->

	<div class="container">
		<div class="row">
			<div id="content" class="site-content">
