<?php
/**
 * @package pse
 */
?>
<div class="">
	<article class="postCont" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
	<div class="centered">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

	</div>
		<div class="col-md-4">
			<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}
			?>

			<footer class="entry-footer">
				<?php //pse_entry_footer(); ?>

			
			</footer><!-- .entry-footer -->
		</div>
		<div class="col-md-8">
			<header class="entry-header">
				
				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php pse_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pse' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'pse' ),
					'after'  => '</div>',
				) );
			?>


		</div><!-- .entry-content -->

		
		</div>
	</div>
		

	</article><!-- #post-## -->
</div>