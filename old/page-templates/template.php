<?php
/**
 * Template Name: Sidebar
 *
 * Description: Includes header and sidebar, Top image of bexcellent
 *
 * @package WordPress
 * @subpackage BeXcellent
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
		<div id="menu"> 
			<ul id="super">
				<li id="superli"> 
<p>Menu</p>
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
		<div id="title"> <img src="/wp-content/themes/Bexcellent-Theme/title.png" alt="BeXcellent"> </div>

		<div id="sidebar">
			<aside>
				<?php get_sidebar(); ?>
			</aside>
		</div>

		<div id="contentmine">

			<div id="primary" class="site-content">
				<div id="content" role="main">
			<?php query_posts('posts_per_page=8'); ?>
			<?php while(have_posts()) : the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="list-group-item">
				<h4 class="list-group-item-heading"><?php the_title(); ?></h4>
				<p class="text-muted list-group-item-text">Posted by <?php the_author(); ?> on <?php the_time('F jS, Y') ?>.</p>
				<p><?php the_content(); ?> </p>
			</a>
			<?php endwhile; wp_reset_query(); ?>

				</div><!-- #content -->
			</div><!-- #primary -->
		</div>
<?php get_footer(); ?>
