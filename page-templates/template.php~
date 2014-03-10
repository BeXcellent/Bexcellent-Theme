<?php
/**
 * Template Name: Template
 *
 * Description: New navbar testing stuff
 *
 * @package WordPress
 * @subpackage BeXcellent
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
		<div id="menu"> 
			<ul id="super">
				<li id="superli"> <p>Menu</p>
					<ul class="sub">
						<li><a href="/">Home</a></li>
						<li><a href="<?php echo 'http://' . $_SERVER['SERVER_NAME']; ?>/about">About</a></li>
						<li><a href="<?php echo 'http://' . $_SERVER['SERVER_NAME']; ?>/age-selection">Age</a></li>
						<li><a href="<?php echo 'http://' . $_SERVER['SERVER_NAME']; ?>/news">News</a></li>
						<li><a href="<?php echo 'http://' . $_SERVER['SERVER_NAME']; ?>/gallery">Gallery</a></li>
						<li><a href="<?php echo 'http://' . $_SERVER['SERVER_NAME']; ?>/articles">Articles</a></li>
						<li><a href="<?php echo 'http://' . $_SERVER['SERVER_NAME']; ?>/games">Games</a></li>
						<li><a href="<?php echo 'http://' . $_SERVER['SERVER_NAME']; ?>/parents">Parents</a></li>
					</ul>
				</li>
			</ul>
		 </div>
		<div id="title"> <img src="/wp-content/themes/Bexcellent-Theme/title.jpg" alt="BeXcellent"> </div>

		<div id="sidebar">
			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>
			<aside>
				<?php get_sidebar(); ?>
			</aside>
		</div>

		<div id="contentmine">

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
