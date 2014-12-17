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
			For lost or stolen ATM/Debit Cards call <a class="lostnumSpacer" href="tel:+18005282273">1.800.528.2273</a> and for VISA Credit Cards call <a class="lostnumSpacer" href="tel:+18004497728">1.800.449.7728</a> after regular business hours.
		</strong>
			
			<script>
				if ($(window).width() <= 450) {
			        $(".lostnumSpacer").append("<br>");
			        $(".lostnumSpacer").css( "font-size" , "18pt");
			      }
			      else {
			        $('.smallerCont').show();
			      }
				
			</script>
		</div>
	</div>

<div class="">
	<div class="atmheader">
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
				<div class="col-md-4 col-sm-4">
					<div class="locpan">
						<a href="http://www.atmallianceone.org"><img src="assets/img/aoatm.png" class="img-responsive"><br><br>
						<i class="fa fa-location-arrow fa-1x"></i> Alliance One </a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="locpan">
						<a href="https://www.53.com/atm/branchatm">
						<img src="assets/img/53atm.png" class="img-responsive"><br><br>
						<i class="fa fa-location-arrow fa-1x"></i> 5/3 Bank </a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="locpan">
						<a href="http://www.cu24.com/ATMLocator/index.aspx">
						<img src="assets/img/cu24atm.png" class="img-responsive" ><br><br>
						<i class="fa fa-location-arrow fa-1x"></i> Credit Union 24 </a>
					</div>
				</div>
			</div>	
			
			

	    </div>
	</div>
</div>	
<div class="container">
<br>
	<p>	
		Key Bank has notified PSE Credit Union that effective May 1, 2009, they will no longer be honoring the surcharge reductions at their ATM machines. So while your $.25 will no longer get you Key Bank ATM access, you can still use Fifth Third ATMs for only $.25 or you can use the Alliance One ATMs and the CU 24 ATMs for FREE. If you have any questions, please call the ATM/Debit Card Dept. at 440-545-5104.
	</p>
	<p>For assistance with your ATM/Debit Card after business hours, contact 1-800-851-4859.</p>
</div>
	<div class="locbutton">
		<div class="container">
			<a href="locations.php"><h3 class="centered">Find Branch Locations</h3></a>
		</div>
	</div>




	
	
<?php include 'footer.php'; ?>
	
	


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