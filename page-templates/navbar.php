<?php
/**
 * Template Name: NavBar
 *
 * Description: No header or sidebar, Includes Navigation bar
 *
 * @package WordPress
 * @subpackage BeXcellent
 * @since Twenty Twelve 1.0
 */
?>
			</div>
	<div id="primary" class="site-content">
				<iframe src="http://localhost/wp-content/themes/Bexcellent-Theme/navmenu.php" seamless scrolling="no" height="50" width="1209"></iframe>
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
