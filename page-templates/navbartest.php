<?php
/**
 * Template Name: NavBar Test
 *
 * Description: No header or sidebar, Does show NavBar
 *
 * @package WordPress
 * @subpackage BeXcellent
 * @since Twenty Twelve 1.0
 */
?>

	<div id="primary" class="site-content">
<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
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
