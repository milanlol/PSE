
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
	      		<a href="index.php"><img src="assets/img/PSE-Logo.png" class="img-responsive logo" width="200" /></a>
	    	</div>

	    	<!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      		<ul class="nav navbar-nav navbar-right">
			        <li><a href="index.php" class="scroll-link" data-id="home">Home</a></li>
			        <li><a href="about.php" class="scroll-link" data-id="about">About</a></li>

			        <li class="dropdown">
			          <a href="services.php" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="savings.php">Savings</a></li>
						<li><a href="checking.php">Checking</a></li>
						<li><a href="rates.php">Rates</a></li>
						<li><a href="fees.php">Fees</a></li>
						<!--<li><a href="visa.php">Visa</a></li>-->
						<li><a href="cu-programs.php">CU Programs</a></li>
						<li><a href="loans.php">Loans</a></li>
						<li><a href="member-clubs.php">Member Clubs</a> </li>
						<li><a href="convenience-services.php">Convenience Services</a></li>
						<!--<li><a href="#">SEG</a></li>-->
			            
			          </ul>
			        </li>

			        <li class="dropdown">
			          <a href="locations.php" class="dropdown-toggle" data-toggle="dropdown">Contact <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			          	<li><a href="contact.php" data-id="contact">Contact</a></li>
			            <li><a href="locations.php">Locations </a></li>
			            <li><a href="atm.php">ATM</a></li>
			            
			          </ul>
			        </li>
					
					<li class="dropdown">
			          <a href="locations.php" class="dropdown-toggle" data-toggle="dropdown">Connect With Us <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="blog/index.php">Blog</a></li>
			            <li><a href="http://psecreditunion.org/new/blog/events/">Events</a></li>
			            <li class="divider"></li>
			            <li><a href="assets/newsletter/PSEOct2014.pdf" data-id="newsletter">Newsletter</a></li>
			            <li class="divider"></li>
			          	<li><a href="https://twitter.com/PSECreditUnion"><i class="fa fa-twitter-square"></i> Twitter</a></li>
			            <li><a href="https://www.facebook.com/PseCreditUnion"><i class="fa fa-facebook-square"></i> Facebook </a></li>
			            <li><a href="//plus.google.com/u/0/117230295060624059572?prsrc=3" rel="publisher" target="_top" style="text-decoration:none;"> <i class="fa fa-google-plus-square"></i> Google +</a></li>
			          </ul>
			        </li>
			        
			        
			        
			        <li class="enrollNav"><a href="https://mrp1.cunetbranch.com/swk/mrp_8377/App.aspx?AppID=11001">Enroll</a></li>


			        <li class="logInNav"><a href="https://www.financial-net.com/psecreditunion">Log In</a></li>


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

	