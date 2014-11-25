<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package pse
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="sidebarWrap">
<div class="col-md-3">
	<div class="">
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	</div>
</div>
</div>
