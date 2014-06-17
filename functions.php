<?php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'BeXcellent Theme' ),
) );
// Register Sidebar
function beX_register_sidebar() {

	$args = array(
		'id'            => 'sidebar',
		'name'          => __( 'Sidebar', 'text_domain' ),
		'description'   => __( 'Sidebar shown on all pages except gateway', 'text_domain' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	);
	register_sidebar( $args );

}

// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'beX_register_sidebar' );
?>
