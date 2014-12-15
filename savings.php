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

    <title>Savings - PSE Credit Union</title>

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
         <div class="container ">
            <h2 class="centered">Savings</h2>
        </div>
    </div>


    <div class="container savings">
        <div class="row">
            <div class="col-md-12">
                <div class="boxContainer">
                    <h4>Regular Savings</h4>
                    <div class="row">
                        <div class="col-md-9">
                            <p>
                                When you join the credit union and make your first, initial $5 deposit, you have opened a daily interest savings account (referred to as a share account). The dividend rate is set at the close of each quarter by the credit union Board of Directors and is paid quarterly on the last day of December, March, June and September. There is no minimum balance requirement to earn interest on your regular savings account.
                            </p>
                            <p class="small-print">(Associated fees may reduce the earnings on this account.)</p>
                            <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p> 
                        </div>
                        <div class="col-md-3">
                            <img src="assets/img/RegularSavings.jpg" class="img-responsive" alt="">
                        </div>
                    </div>                 
                </div>

                <div class="boxContainer"> 
                    <h4>Certificates </h4>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                Members may choose from several types of certificates. Pick a term that meets your financial goals. Interest is paid monthly, or quarterly, based on the certificate chosen. 
                            </p>
                            <p class="small-print">(Associated fees may reduce the earnings on this account.)</p>
                            <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>
                        </div>
                    </div>                 
                </div>  
                
                <div class="boxContainer"> 
                    <h4>Christmas Club</h4>
                    <div class="row">
                        <div class="col-md-9">
                            <p>
                                Start to save now for your holiday expenses. Your savings, plus interest, is deposited directly into your regular savings account on November 1 each year. The dividend rates are set by the Board of Directors in the month prior to payment, and are calculated by averaging the dividend rates that have been set for the past year. 
                            </p>
                            <p class="small-print">(Associated fees may reduce the earnings on this account.)</p>
                            <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/img/ChristmasClub.jpg" class="img-responsive" alt="">
                        </div>
                    </div>                    
                </div>
                
                <div class="boxContainer"> 
                    <h4>Individual Retirement Accounts (IRAs)</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                Plan for your future with an IRA. Members may choose a variable or fixed rate account. IRA certificates are available at higher rates. Payments to your IRA can be made via payroll deduction, regular deposits, or a lump sum contribution. 
                            </p>
                            <p class="small-print">(Associated fees may reduce the earnings on this account.)</p>
                            <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>    
                        </div>
                    </div>                  
                </div>
                
                <div class="boxContainer"> 
                    <h4>Special Savings</h4>
                    <div class="row">
                        <div class="col-md-9">
                            <p>
                                Start to save for that new computer system you've had your eye on or that dream vacation you've been thinking about. You can open a special savings account and call it anything you want. You decide. To make saving even easier, you can have your money automatically deposited into your special savings account via payroll deduction or direct deposit. 
                            </p>
                            <p class="small-print">(Associated fees may reduce the earnings on this account.)</p>
                            <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/img/SpecialSavings.jpg"  class="img-responsive" alt="">
                        </div>
                    </div>                    
                </div>                    
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