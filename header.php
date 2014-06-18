<?php
/**
* The Header for our theme.
*
* Displays all of the <head> section and everything up till <div id="content">
*
* @package BeXcellent
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="container content">

