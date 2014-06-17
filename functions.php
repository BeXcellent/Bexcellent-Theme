<?php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'BeXcellent Theme' ),
) );
function bexcellent_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bexcellent' ),
		'id'            => 'sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'bexcellent_widgets_init' );
?>
