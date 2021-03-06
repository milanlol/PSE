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

    <title>CU Programs - PSE Credit Union</title>

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
        
         <div class="container">
            <h2 class="centered">CU Programs</h2>

            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="hidden-xs col-sm-4 col-md-3">
                    <img src="assets/img/safe.jpg" class="img-responsive img-left">
                </div>
                <div class="col-sm-8 col-md-9 cu-list">
                    <ul>
                        <li><a href="http://lineweaver.net/">Lineweaver Financial Group</a></li>
                        <li><a href="https://www.idprotectme247.com/sec/">ID Protect</a></li>
                        <li><a href="http://travelers.com/psecu/">Travelers Insurance</a></li>
                        <li><a href="http://www.lovemycreditunion.org/Sprint-169.html">Love My Credit Union Rewards</a></li>
                        <li><a href="https://www.cardcash.us/psecreditunion/enrollment_landing.aspx">Card Cash</a></li>
                        <li><a href="https://psec.myprewards.com/">Prewards Program</a></li>
                    </ul>

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