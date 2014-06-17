<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BeXcellent
 */

get_header(); 
?>

<div id="contentmine">
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while(have_posts()) : the_post(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_content(''); ?></p>
			<?php endwhile; wp_reset_query(); ?>			
		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<?php wp_sidebar(); ?>	
<?php
get_footer();
?>
