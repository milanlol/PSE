<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('blog/wp-blog-header.php');
?>

<?php
require('blog/wp-blog-header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="robots" content="noindex"


   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>ATM Locations - PSE Credit Union</title>

    <link href="assets/css/hover_pack.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for -->
    <link href="assets/css/main.css" rel="stylesheet">
 
    <link href="assets/css/animations.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    

     
    <!-- Main Jquery & Hover Effects. Should load first -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover_pack.js"></script>

    <!-- fotorama.css & fotorama.js. -->
	<link  href="http://fotorama.s3.amazonaws.com/4.6.2/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
	<script src="http://fotorama.s3.amazonaws.com/4.6.2/fotorama.js"></script> <!-- 16 KB -->
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<!== Navigation ==>
		<?php include 'mainHeader.php' ?>

	
	<div class="lostnum">
		<div class="container">
		<strong>
			For lost or stolen ATM/Debit Cards call 1.800.528.2273 and for VISA Credit Cards call 1.800.449.7728 after regular business hours.
		</strong>
		</div>
	</div>

<div class="">
	<div class="atmheader aboutpad">
		<div class="container">
			<h2 class="centered">Our ATMs are Now Online!</h2>
			<h5>What does this mean for our members?</h5>
			<ul>
				<li>
					You will now have increased availability of your funds - for example, when your payroll is direct deposited you will have immediate access to it through the ATM.
				</li>
				<li>
					The balance reflected on your ATM receipt will be your actual (real-time) balance.
				</li>
			</ul>
				
			<p class="disclaimer">
				NOTICE: ALL DEPOSITS going through the ATM will have a 2-day hold placed on them.
			</p>
		</div>
	</div>
	<div class="atmcontainer">
		<div class="container">
			<h4 class="centered">
				Your PSECU Debit Card can be used at any Alliance One or 5/3 Bank ATM location. 
			</h4>

			<div class="row">
				<div class="col-md-4">
					<div class="locpan">
						<img src="assets/img/aoatm.png"><br><br>
						<i class="fa fa-location-arrow fa-1x"></i> Alliance One 
					</div>
				</div>
				<div class="col-md-4">
					<div class="locpan">
						<img src="assets/img/53atm.png"><br><br>
						<i class="fa fa-location-arrow fa-1x"></i> 5/3 Bank
					</div>
				</div>
				<div class="col-md-4">
					<div class="locpan">
						<img src="assets/img/cu24atm.png" ><br><br>
						<i class="fa fa-location-arrow fa-1x"></i> Credit Union 24
					</div>
				</div>
			</div>	
			
			<p>
				Key Bank has notified PSE Credit Union that effective May 1, 2009, they will no longer be honoring the surcharge reductions at their ATM machines. So while your $.25 will no longer get you Key Bank ATM access, you can still use Fifth Third ATMs for only $.25 or you can use the Alliance One ATMs and the CU 24 ATMs for FREE. If you have any questions, please call the ATM/Debit Card Dept. at 440-545-5104.
			</p>

	    </div>
	</div>
</div>	
	<div class="locbutton">
		<div class="container">
			<a href="#"><h3 class="centered">Find Branch Locations</h3></a>
		</div>
	</div>




	

	<!== FOOTER ==>    
	
	<div id="f">
		<div class="container">
			<div class="row">
				<!-- ADDRESS -->
				<div class="col-lg-3">
					<h4>Our Main Office</h4>
					<p>
						5255 Regency Drive,<br/>
						Parma, OH 44140<br/>
					</p>
					<p>
						<i class="fa fa-mobile"></i> 440.843.8300<br/>
						<i class="fa fa-envelope-o"></i> info@psecreditunion.com
					</p>
				</div><!--/col-lg-3 -->
				
				<!-- TWEETS -->
				<div class="col-lg-3">
					<a class="twitter-timeline" href="https://twitter.com/PSECreditUnion" data-widget-id="529324575599759360">Tweets by @PSECreditUnion</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

				</div><!-- /col-lg-3 -->
				
				<!-- LATEST POSTS -->
				<div class="col-lg-3">
					<h4>Latest Posts</h4>
					<p>
						<i class="fa fa-angle-right"></i> Credit Union Magic Minute<br/>
						<i class="fa fa-angle-right"></i> Earn up to 1% Cash Back!<br/>
						<i class="fa fa-angle-right"></i> Earn $500 Back<br/>
						<i class="fa fa-angle-right"></i> Discount Tickets to Cedar Point<br/>
						<i class="fa fa-angle-right"></i> Fund it! Spend it! CUmoney<br/>
					</p>
				</div><!-- /col-lg-3 -->
				
				<!-- NEW PROJECT -->
				<div class="col-lg-3">
					<h4>PSE TV!</h4>
					<a href="#"><i class="fa fafooter fa-youtube-play"></i></a>
				</div><!-- /col-lg-3 -->
				
				
			</div><!--/row -->
		</div><!-- /container -->
	</div><!-- /f -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/retina.js"></script>


  	<script>
		$(window).scroll(function() {
			$('.si').each(function(){
			var imagePos = $(this).offset().top;
	
			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow+400) {
					$(this).addClass("slideUp");
				}
			});
		});
	</script>    
  </body>
</html>