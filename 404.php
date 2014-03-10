<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package BeXcellent
 */

get_header(); 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Uh oh.</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<h1 color="#C00000" align="center">Well this is embarrasing...</h1>
					<h2 color="#484848" align="center">We couldn't find that page!</h2>
					<h3 color="#484848" align="center">Try searching for it.</h3>
					<h3 color="#484848" align="center">Or (If you want to) You can look at this picture about CfE instead...</h3>
					<img src="cfe.jpg" align="center" />
					<?php get_search_form(); ?>
				</div>
			</section>

		</main>
	</div>
<?php get_footer(); ?>
