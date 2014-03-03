<?php
/**
 * Template Name: Gateway
 *
 * Description: No header or sidebar
 *
 * @package WordPress
 * @subpackage BeXcellent
 * @since Twenty Twelve 1.0
 */
 get_header(); ?>
<div id="bubble" onload="start();"> 
		<div id ="l1" class="linkbubble" style="left: 145px; top: 155px;">
			<a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/videos"><img class="linkbubble" src="images/video.png" alt="Videos"></a>
		</div> 
		<div id ="l2" class="linkbubble" style="left: 295px; top: 200px;">
			<a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/articles"><img class="linkbubble" src="images/articles.png" alt="Articles"></a>
		</div>
		<div id ="l3" class="linkbubble" style="left: 400px; top: 280px;">
			<a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/about"><img class="linkbubble" src="images/about.png" alt="About"></a>
		</div>
		<div id ="l4" class="linkbubble" style="left: 475px; top: 155px;">
			<a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/photos"><img class="linkbubble" src="images/photos.png" alt="Photos"></a>
		</div>
		<div id ="l5" class="linkbubble" style="left: 270px; top: 415px;">
			<a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/games"><img class="linkbubble" src="images/games.png" alt="Games"></a>
		</div>
		<div id ="l6" class="linkbubble" style="left: 555px; top: 365px;">
			<a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/news"><img class="linkbubble" src="images/news.png" alt="News"></a>
		</div>
		<div id ="l7" class="linkbubble" style="left: 695px; top: 470px;">
			<a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/parents"><img class="linkbubble" src="images/parents.png" alt="Parents"></a>
		</div>
		<div id ="l8" class="linkbubble" style="left: 50px; top: 55px;">
			<a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/5to8"><img class="linkbubble" src="images/5-8.png" alt="5-8"></a>
		</div>
		<div id ="l9" class="linkbubble" style="left: 585px; top: 40px;">
			<a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/8to12"><img class="linkbubble" src="images/8-12.png" alt="8-12"></a>
		</div>
		<div id ="l10" class="linkbubble" style="left: 95px; top: 480px;">
			<a target="_parent" href="<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URL']; ?>/12to18"><img class="linkbubble" src="images/12-18.png" alt="12-18"></a>
		</div> 
</div>
<div id="contentgateway">
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