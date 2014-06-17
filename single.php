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

<div id="menu"> 
	<ul id="super">
		<li id="superli"> 
			<p>Menu</p>
			<?php
				$options = array(
					'theme_location'  => '',
					'menu'            => 'side-navbar',
					'container'       => 'false',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'sub',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				wp_nav_menu( $options );
			?>
		</li>
	</ul>
</div>
<div id="title"> 
	<img src="<?php echo get_template_directory_uri(); ?>/img/title.png" alt="BeXcellent"> 
</div>
<div id="contentmine">
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while(have_posts()) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(''); ?></p>
			<?php endwhile; wp_reset_query(); ?>			
		</div><!-- #content -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
?>
