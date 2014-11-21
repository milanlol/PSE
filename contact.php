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

    <title>Contact - PSE Credit Union</title>

    <link href="assets/css/hover_pack.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for -->
    <link href="assets/css/main.css" rel="stylesheet">
 
    <link href="assets/css/animations.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    

    <!-- MAP SCRIPT - ALL CONFIGURATION IS PLACED HERE -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
   	<script type="text/javascript" src="assets/js/map.js"></script>
     
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
	<div class="lostnum">
		<div class="container">
		<strong>
			For lost or stolen ATM/Debit Cards call 1.800.528.2273 and for VISA Credit Cards call 1.800.449.7728 after regular business hours.
		</strong>
		</div>
	</div>

<div class="contactheader aboutpad">
	<div class="container">
				<fieldset id="contact_form">
					<div class="row">
						<div class="col-sm-4 form-short">
							<input class="form-control" type="text" name="name" id="name" placeholder="Name">
						</div>
						<div class="col-sm-4 form-short">
							<input class="form-control" type="text" name="email" id="email" placeholder="Email">
						</div>
						<div class="col-sm-4 form-short">
							<input class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-12 form-short">
							<textarea name="message" id="message" placeholder="Type your message here..." class="form-control" rows="6"></textarea>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<div id="result"></div>
						</div>
						<div class="col-sm-6 text-right">
							<button class="btn btn-danger no-cssgradients" type="button" id="submit_btn">Send message</button>
						</div>
					</div>
				</fieldset> <!-- /Form -->
				
				<p class="disclosure">
					Disclosure/Privacy Notice: Please do not include account numbers or social security numbers on the form below.  PSE Credit Union, Inc. assumes no liability or responsibility for information included on the Contact Information Form. Any and all information included is sent via email and cannot be assumed as completely secure. Please only include information listed and a short message of your request. 
				</p>
			<div class="locall">
				<div class="row locrow">
					<div class="col-md-4">
						<div class="locpan">
							<h3>Main Office</h3>
							 <i class="fa fa-location-arrow fa-2x"></i>
							<p>
								5255 Regency Drive<br>
								Parma, OH 44129<br>
								440.843.8300
							</p>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="locpan">
						<h3>Strongsville Office</h3>
						<i class="fa fa-location-arrow fa-2x"></i>
							<p>
								12700 Prospect Road<br>
								Strongsville, OH 44149<br>
								440.572.3830
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="locpan">
							<h3>Medina Office</h3>
							<i class="fa fa-location-arrow fa-2x"></i>
							<p>
								3845 Pearl Road<br>
								Medina Township, OH 44256<br>
								330.661.0160
							</p>
						</div>
					</div>
				</div>


				<div class="row locrow">
					<div class="col-md-4">
						<div class="locpan">
							<h3>Tri-C West</h3>
							<i class="fa fa-location-arrow fa-2x"></i>
							<p>
								11000 Pleasant Valley Rd. Room G109<br>
								Parma, OH 44130<br>
								216.987.5250
							</p>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="locpan">
						<h3>Tri-C Metro</h3>
						<i class="fa fa-location-arrow fa-2x"></i>
							<p>
								2900 Community College Ave. Room 88E<br>
								Cleveland, OH 44115<br>
								216.987.4250
							</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="locpan">
							<h3>Tri-C East</h3>
							<i class="fa fa-location-arrow fa-2x"></i>
							<p>
								4250 Richmond Road<br>
								Highland Hills Village, OH 44122<br>
								216.987.2250
							</p>
						</div>
					</div>
				</div>
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