<?php
add_theme_support( 'post-formats', array( 'image', 'gallery' ) );
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );



function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );





// Register Custom Post Type for Konsert-page
function nordholm_konsert() {

	$labels = array(
		'name'                  => _x( 'Konserter', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Konsert', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Konsert', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'konsert',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Konsert', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'konsert', $args );

}
add_action( 'init', 'nordholm_konsert', 0 );

// Register Custom Post Type for Press-page
function nordholm_press() {

	$labels = array(
		'name'                  => _x( 'Press', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Press', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Press', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'press',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Press', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'press', $args );

}
add_action( 'init', 'nordholm_press', 0 );
?>