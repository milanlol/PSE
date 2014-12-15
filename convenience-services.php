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

    <title>Convenience Services - PSE Credit Union</title>

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
            <h2 class="centered">Convenience Services</h2>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h4>PAL (Phone Access Line)</h4>
                <p>This is our audio response system that allows you to access your accounts 24-hours a day, seven days a week from the privacy of your own telephone. Make withdrawals by check, transfer money between accounts, apply for a loan, check loan rates, access CD, IRA and special savings accounts, review checks cleared and even calculate an approximate loan payment. All you have to do is call 440.843.8300 and press 2.
                </p>
                  

                <h4>Direct Deposits</h4>
                <p>This service enables any company to send your monies directly to the credit union where the funds are deposited into your savings or checking account. It is available to any member who has an account with us whose company participates in the Federal Reserve ACH Program. Besides your regular paycheck, direct deposit can be used for any periodic payments, such as Social Security, pension checks, investment proceeds, etc.</p>



                <h4>ATM/Debit Cards</h4>
                <p>You can access your accounts 24-hours a day, seven days a week from any ATM with the STAR, PLUS, Pulse, Discover/Novus, Jeanie, American Express, CU 24, MoneyPass or Visa® logo. You can also access your accounts with Fifth Third ATMs.</p>


                <h4>Payroll Deductions</h4>
                <p>Payroll deduction lets you deposit a portion of your paycheck automatically to the account you specify. It's a simple way to start saving. You can even arrange to have part of your paycheck go toward the repayment of a credit union loan, into your Christmas Club account, special savings account or a children's account. Payroll deduction is available to those members whose employers are set up on our program.</p>                    

                <h4>Wire Transfers</h4>
                <p>Wire transfers are a fast, easy and safe way to electronically transfer funds from one financial institution to another.</p>                
                <h4>Night Depository</h4>
                <p>Night depositories are located at both the Main Office in Parma (5255 Regency Drive) and the Strongsville Office (12700 Prospect Road).</p>

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