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

    <title>Member Clubs - PSE Credit Union</title>

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

	<?php include 'mainHeader.php' ?>

		<div class="header">
			<!-- header of the page - has padding top to fit in nav - add page titles here -->

			<div class="container">
				<h2 class="centered">Member Clubs</h2>
			</div>
		</div>


		<div class="container">
            <div class="row">
                <div class="col-md-3 centered">
                    <img src="assets/img/timeline/pennie.png"  class="img-responsive">
                </div>

                <div class="col-md-9">
                    <h4>Pennie the Puppy Kids Club</h4>
                    <p>Enroll your child in the Pennie the Puppy Kids Club and let the magic begin! With an initial deposit of $5.00, kids can begin to learn the value of saving money. As they make deposits they get stamps that can be redeemed for special gifts. Children 12 and under may join.
                    </p>
              
                    <h4>Platinum Club</h4>
                    <p>Join the Platinum Club and receive special member benefits such as, preferred one-hour loan service with a discount on certain loans (members must meet certain credit qualifications), unlimited ATM usage, FREE PS Easy Pay service (online/telephone bill payer program) and discounts on credit union services such as FREE travelers checks and 10% off of safe deposit box rental. To qualify, you must have a PSECU checking account, VISA card, ATM/Debit card and put $250 on hold in your regular savings account.</p>
               
                    <h4>CU Succeed Club</h4>
                    <p>The CU Succeed Club is a program for members age 13-22 years-old who are students. The program offers customized accounts and services such as a Student VISA&reg; card, a FREE checking account and an ATM/Debit card. CU Succeed also offers entertaining quarterly newsletters and an <a href="#">interactive website</a> to help young people learn about money and credit. Enroll your student today! 
                    </p>

                    <h4>Share Savers</h4>
                    <p>We've given you totally FREE checking, with no minimum balance requirement, no monthly service fee and no per check charge. How would you like to get FREE checks to go along with that? Members who join the Share Savers Club and agree to put $2,000 on hold in their regular savings account can get up to three boxes of FREE, complimentary checks per year.</p>
                    
              </div>  
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