<?php
/**
 * Template Name: Template
 *
 * Description: blabla
 *
 * @package WordPress
 * @subpackage BeXcellent
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
		<div id="menu">
			<?php include 'navmenu.php'; ?>
		</div>
		<div id="title"> <img src="http://95.85.42.215/wp-content/uploads/2014/03/title.jpg" alt="BeXcellent"> </div>
		<div id="sidebar"> <?php get_sidebar(); ?> </div>
		<div id="contentmine"

			<div id="primary" class="site-content">
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
		</div>