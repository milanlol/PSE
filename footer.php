<!== Important ==>    
	<div class="footerLogos">
		<div class="container">
			<div class="row mt centered ">
				
			</div><!-- /row -->
			<div class="row centered">
				<div class="col-xs-4 pt">
					<img class="img-responsive ftimg" src="assets/img/logos/bbb.png"  alt="">
				</div>
				<div class="col-xs-4 pt">
					<img class="img-responsive ftimg" src="assets/img/logos/ehl.png"  alt="">
				</div>
				<div class="col-xs-4 pt">
					<img class="img-responsive ftimg" src="assets/img/logos/asi.png"  alt="">
				</div>
				
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /grey -->

<!== Footer ==>    
	<div id="f">
		<div class="container">
			<div class="row">
				<!-- ADDRESS -->
				<div class="col-lg-3">
					<h4>Our Main Office</h4>
					<p>
						5255 Regency Drive,<br/>
						Parma, OH 44129<br/>
					</p>
					<p>
						<i class="fa fa-mobile"></i> 440.843.8300<br/>
						<i class="fa fa-envelope-o"></i> info@psecreditunion.com
					</p>
				</div><!--/col-lg-3 -->

				
				<!-- LATEST POSTS -->
				<div class="col-lg-3">
					<h4>Latest Posts</h4>
					<?php
					global $post;
					$args = array( 'posts_per_page' => 5 );
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); ?>

					<i class="fa fa-angle-right"></i> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a><br />
					
					<?php endforeach; ?>
				</div><!-- /col-lg-3 -->
				
				<!-- TWEETS -->
				<div class="col-lg-3">
					<a class="twitter-timeline" href="https://twitter.com/PSECreditUnion" data-widget-id="529324575599759360">Tweets by @PSECreditUnion</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

				</div><!-- /col-lg-3 -->
				
				
				<!-- NEW PROJECT -->
				<div class="col-lg-3">
					<div class="centered">
						<h4>PSE TV!</h4>
						<a href="#"><i class="fa fafooter fa-youtube-play"></i></a>
					</div>
				</div><!-- /col-lg-3 -->
				
				
			</div><!--/row -->
		</div><!-- /container -->
	</div><!-- /f -->