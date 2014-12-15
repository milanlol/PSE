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

    <title>Checking - PSE Credit Union</title>

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

       <div class="header atmheader">
         <!-- header of the page - has padding top to fit in nav - add page titles here -->

         <div class="container">
            <h2 class="centered">Checking</h2>
        </div>
    </div>


    <div class="container savings">
        <div class="row">
            <div class="col-md-10">
                <h4>Free Checking</h4>
                <p>Here's a checking account for those who don't like to pay any type of monthly fees!</p>
                <ul>
                    <li>NO monthly service fee</li>
                    <li>N minimum balance requirement</li>
                    <li>NO per check charge</li>
                    <li>Your first 50 checks are FREE</li>
                    <li>FREE Visa&reg; Check Card (Debit/ATM card) gives you 24 hour access to your accoun</li>
                    <li>Platinum Club Members enjoy FREE unlimited ATM access</li>
                    <li>View/print a copy of a cleared check through our FREE, online banking program, Home Financial Services (HFS) </li>
                </ul>
                
                <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>
                

                <h4>Premier Checking</h4>
                <p><a href="#">Sign up for your benefits</a></p>
                <p>Here's a checking account that practically pays for itself and gives you extras you'll really use!
                    For only $5.00 a month, you will receive:</p>
                    <ul>
                        <li>Three FREE boxes of personalized checks per year</li>
                        <li>Hotel Savings Network Discounts at popular lodging chains</li>
                        <li>$10,000 Accidental Death and Dismemberment insurance</li>
                        <li>Payment Card Protection</li>
                        <li> Everyday Rebate Rewards Program - Get cash back - simply by purchasing items you use everyday. Save your receipts from grocery bills, clothing purchases, pet supplies, etc. (up to a $100 per quarter), mail in your receipts and claim form, and you will receive 10% back.</li>
                        <li>Identity Theft Insurance</li>
                        <li>Sojourns&reg; Magazine Subscription</li>
                        <li>Alamo, Avis, Hertz and National Car Rental Discounts</li>
                        <li>Payment Card Protection</li>
                        <li>ID Network Safety Service</li>
                    </ul>
                    <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>

                    <h4>Business Checking</h4>
                    <p>PSE offers sole proprietorship business checking accounts. You need to open a business savings account in order to open a business checking account. A business tax I.D. is required to open a business checking account. These business checking accounts do not earn interest and are not entitled to FREE checks.</p>
                    <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>
                    
                </div>
            </div>
        </div><!-- -->



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