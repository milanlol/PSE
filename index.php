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

    <title>PSE Credit Union</title>

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
    <script src="assets/js/jquery-1.11.1.min.js"></script>
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


	<!== HEADERWRAP ==>


	<div class="header">
		<div class="container">
		<div class="row">
			<div class="logIn col-md-4">
				<h3>Bank Online</h3>
				<div class="OB">
					
					<div class="obbuttons row">
						<div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
							<button type="button" class="btn btn-cta" onclick="location.href='https://www.financial-net.com/psecreditunion'">Log In</button>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
							<button type="button" class="btn btn-cta btn-cta2" onclick="location.href='https://www.financial-net.com/psecreditunion/enrollment/OlbCmdSit249'">Sign Up For Online Banking</button>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-12 col-lg-12">
							<button type="button" class="btn btn-cta btn-cta3" onclick="location.href='https://mrp1.cunetbranch.com/swk/mrp_8377/App.aspx?AppID=11001'">Not a member? Enroll Now!</button>
						</div>
						
					   	
				   	</div>
				   	<p class="OB-links"> 
				   		<a href="#" data-toggle="modal" data-target="#myModal">PSE-Biz Pay</a> 
				   	</p>
				   	<div class="container">
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        <h4 class="modal-title" id="myModalLabel">PSE-Biz Pay</h4>
						      </div>
						      <div class="modal-body">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="button" class="btn btn-primary" onclick="location.href='https://www.businessbillpay-e.com/V2/Tutorial/Overview/BusinessDemo.aspx?instID=38449'">Demo</button>
						        <button type="button" class="btn btn-primary" onclick="location.href='https://www.businessbillpay-e.com/v2/login.aspx?instid=38449'">Log In</button>
						      </div>
						      <div class="modal-footer">
						        
						        
						      </div>
						    </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
		


			<div class="promoSlider col-md-8">
				<div class="fotorama" data-width="100%" data-loop="true" data-autoplay="7000" data-arrows="true" data-click="false" data-swipe="true" data-transition="crossfade" nav="false">
					
					<img src="assets/img/bg/1.jpg">
					<img src="assets/img/bg/2.jpg" height="288" width="864">

				

					

				</div>
			</div>
		</div>
		</div>
	</div>



	<!== BLOG POSTS ==>    
	<div class="container">	



		
		
		

		<div class="row mt">
			<?php
			global $post;
			$args = array( 'posts_per_page' => 3 );
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post); ?>
			
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
				<div class="blogPostWrap">
					<a class="b-link-fade b-animate-go" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?>
						<div class="b-wrapper">
						  	<h4 class="b-from-left b-animate b-delay03"><?php the_title(); ?></h4>
						  	<p class="b-from-right b-animate b-delay03">Read More</p>
						</div>
					</a>
					<p class="desctitle">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a><br />
					</p>
					
					<div class="lead">
						<?php the_excerpt(); ?>
					</div>
					
					<p class="time">
						<a href="<?php the_permalink() ?>">
							<i class="fa fa-comment-o"></i>  | <i class="fa fa-calendar"></i> <?php echo get_the_date( 'M jS' ); ?>
						</a>
					</p>
					
				</div>
			</div><!-- col-lg-4 -->
			<?php endforeach; ?>
			
			
		</div><!-- /row -->

		<a href="blog/index.php">
			<h4 class="centered readMoreBtn">Read More</h4>
		</a>
		


		
	</div><!-- /container -->
	
	<!== Membership, Savings, & Checking Accounts ==>    
    <div id="cta01">
    	<div class="container">
    		<div class="row ctapad">
    			<div class="col-lg-6">
    				<div class="videoWrapper">
    					<iframe width="560" height="315" src="//www.youtube.com/embed/7At4zfJXoGg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    				</div>
    			</div>
    			<div class="col-lg-6">
    				<h2 class="section-heading">Membership</h2>
    				<p>
    					PSE Credit Union membership is open to anyone who lives, works, worships, or attends school in Cuyahoga or Medina County; any employee or group member from one of PSECU's 200 different Select Employee Groups; or any family member living in the same household as a current PSECU member.
    				</p>
    				<div class="centered"> <button type="button" class="btn btn-cta btn-lg" onclick="location.href='https://mrp1.cunetbranch.com/swk/mrp_8377/App.aspx?AppID=11001'" >Enroll Now! ></button> </div>
    				
    			</div>
    		</div><!-- /row -->

    		<div class="row ctapad">
    			<div class="col-lg-6 col-md-6 col-sm-12 savingsAcc">
    				<div class="centered"><i class="fa fa-5x fa-lock"></i></div>
    				
    				<h2 class="section-heading centered">Savings Account</h2>
    				<p>
    					When you join the credit union and make your initial $5 deposit, you have opened a daily interest savings account.  There is no minimum balance requirement to earn interest on your regular savings account!
    				</p>
    				<div class="centered"><button type="button" class="btn btn-cta btn-lg" onclick="location.href='savings.php'">Learn More ></button></div>
    				
    			</div>
    			<div class="col-lg-6 col-md-6 col-sm-12 checkingAcc">
    				<div class="centered"><i class="fa fa-5x fa-university"></i></div>
    				
    				<h2 class="section-heading centered">Checking Account</h2>
    				<p>
    					NO monthly service fee, NO minimum balance requirement, NO per check charge, your first 50 checks are FREE, and FREE Visa® Check Card (Debit/ATM card) gives you 24 hour access to your account. 
    				</p>
    				<div class="centered"><button type="button" class="btn btn-cta btn-lg" onclick="location.href='checking.php'">Learn More ></button></div>
    				
    			</div>
    		</div><!-- /row -->

			
    	</div><!-- /container -->
    </div><!--/cta01 -->

	<!== Loans ==>    
    <div class="container loans">
    	<div class="row mt centered">
			<div class="col-lg-4 col-lg-offset-4">
				<h3>Loan Options</h3>
				<hr>
			</div><!-- /col-lg-4 -->
		</div><!-- /row -->
		<div class="row mt">
			<p>
				Lending products to help you manage cash flow and prepare for opportunities!
			</p>
		</div><!-- /row -->
    	<div class="row mt loanBoxes">
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 centered si loanBox">
    			<a href="loans.php"><i class="fa fa-car"></i>
    			<h4>Auto Loans</h4></a>
    			<p>The credit union will finance up to 100% of the purchase price of any new car, and up to 100% of the retail value on used vehicles. All rates are fixed, and terms vary from 1-84 months.</p>
    		</div>
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 centered si loanBox">
    			<a href="loans.php"><i class="fa fa-truck"></i>
    			<h4>Collateral Loans</h4></a>
    			<p>A new or used car, boat, motorcycle, motor home, trailer, or truck may be used as collateral on a loan.</p>
    		</div>
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 centered si loanBox">
    			<a href="loans.php"><i class="fa fa-home"></i>
    			<h4>Home Equity Lines of Credit</h4></a>
    			<p>This type of loan is a second mortgage on real estate. A member may borrow up to $100,000 depending on the value of the real estate. Interest may be tax deductible on Federal tax returns.</p>
    		</div>    	

    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 centered si loanBox">
    			<a href="loans.php"><i class="fa fa-key"></i>
    			<h4>Mortgage Loans</h4></a>
    			<p>For more information on first mortgage rates, please call Woodside Mortgage at 216-591-2202.</p>
    		</div>
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 centered si loanBox">
    			<a href="loans.php"><i class="fa fa-lock"></i>
    			<h4>Shared Secured Loans</h4></a>
    			<p>You may qualify for our minimum loan rate by securing your loan with the balance in your prime share (savings) account. This is our most economical loan plan.</p>
    		</div>
    		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 centered si loanBox">
    			<a href="loans.php"><i class="fa fa-pencil"></i>
    			<h4>Signature Loans</h4></a>
    			<p>Loans on your signature for almost any purpose are available up to $10,000 depending on your income and ability to repay.</p>
    		</div>  

    	</div><!-- /row -->
    </div><!-- /container -->

	<!== Visa ==>    
    <div id="cta02">
    	<div class="container">
    		<div class="row">
    			<div class="visaPromo">
    				<h2>Shop around and compare our VISA cards to all the rest. You'll soon discover that you've found the best deal in town right here at PSE Credit Union.</h2>
    				<button type="button" class="btn btn-cta btn-lg" onclick="location.href='visa.php'">LEARN MORE</button>
    			</div>
    		</div><!-- /row -->
    	</div><!-- /container -->
    </div><! --/cta02 -->

	

	<!== Map ==>    
	<div id="white">
		
	<div id="map"></div>	
	</div><!-- /white -->


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

		$('.fotorama').fotorama({
		  
		  nav: false
		});
		
	</script>    
  </body>
</html>