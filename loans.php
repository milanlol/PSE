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

    <title>Loans - PSE Credit Union</title>

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
            <h2 class="centered">Loans</h2>
        </div>
    </div>


    <div class="container savings">
        <div class="row">
            <div class="col-md-10">
                <h4>Auto Loans - New, Used and Refinanced </h4>
                <p>The credit union will finance up to 100% of the purchase price of any new car, and up to 100% of the retail value on used vehicles. All rates are fixed, and terms vary from 1-84 months.
                </p>
                <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>                    

                <h4>Home Equity Loans</h4>
                <p>For the most current Home Equity Loans please call 440.545.5135 </p>
                <div class="spacer-25">
                </div>
                

                <h4>Collateral Loans</h4>
                <p>A new or used car, boat, motorcycle, motor home, trailer or truck may be used as collateral on a loan.</p>
                <div class="spacer-25">
                </div>
                
                <h4>Home Equity Lines of Credit</h4>
                <p>Turn the equity in your home into cash. This type of loan is a second mortgage on real estate. A member may borrow up to $100,000 depending on the value of the real estate. Interest may be tax deductible on Federal tax returns. (Check with your tax advisor).</p>
                <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>                    

                <h4>Mortgage Loans</h4>
                <p>For more information on first mortgage rates, please call Woodside Mortgage at 216-591-2202.</p>
                <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>
                <h4>Shared Secured Loans</h4>
                <p>You may qualify for our minimum loan rate by securing your loan with the balance in your prime share (savings) account. This is our most economical loan plan.</p>
                <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>
                <h4>Signature Loans</h4>
                <p>Loans on your signature for almost any purpose are available up to $10,000 depending on your income and ability to repay. Choose the rate and repayment schedule that is best for you.</p>
                <p class="view-rate"><a href="rates.php">View Rates <i class="fa fa-hand-o-right"></i></a></p>                </div>
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