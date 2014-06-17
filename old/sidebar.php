<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package BeXcellent
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>
		
			<aside id="meta" class="widget">
				<h1>Sidebar</h1>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
