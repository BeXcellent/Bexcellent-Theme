

<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package BeXcellent
 */

  $bg = array('bg1.png', 'bg2.png', 'bg3.png', 'bg4.png', 'bg5.png', 'bg6.png', 'bg7.png', 'bg8.png', 'bg9.png', 'bg10.png', 'bg11.png' );
  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="/wp-content/themes/Bexcellent-Theme/style.css">
<script src="/wp-content/themes/Bexcellent-Theme/js/bubble.js"></script>
<style type="text/css">
body{
background: url('./wp-content/themes/BeXcellent-Theme/backgrounds/<?php echo $selectedBg; ?>') no-repeat;
}
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
