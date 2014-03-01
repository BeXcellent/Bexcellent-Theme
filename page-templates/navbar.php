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
get_header();?>
			</div>
	<div id="primary" class="site-content">
				<iframe src="/wp-content/themes/Bexcellent-Theme/template/template.php" seamless height="100%" width="100%"></iframe>
		<div id="content" role="main">
<link rel="stylesheet" type="text/css" target="_parent" href="css/clearcss.css">
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
