<?php
/**
 * @package BeXcellent
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php bexcellent_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bexcellent' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<h1>Hi</h1>

					<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'bexcellent' ) );
				if ( $categories_list && bexcellent_categorized_blog() ) :
			?>
			<span class="cat-links">
				<li class="dropdown">Categories
        				<ul class="dropdown">
            					<?php
							foreach ( $tags_list as $tag ) {
								echo '<li class="dropdown">' . $tag . '</li>';
							}
							unset($tag);
						?>
       					</ul>
    				</li>
			</span>
			<?php endif; // End if categories ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'bexcellent' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<li class="dropdown">Tags
        				<ul class="dropdown">
            					<?php
						foreach ( $tags_list as $tag ) {
							echo '<li class="dropdown">' . $tag . '</li>';
						}
						unset($tag);
						?>
       					</ul>
    				</li>
			</span>
			<?php endif; // End if $tags_list ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
