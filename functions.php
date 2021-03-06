<?php
// wp_enqueue_style( 'style', get_stylesheet_uri() );
// wp_enqueue_style('styleCSS', get_stylesheet_directory_uri(). 'style.css');

add_theme_support( 'post-formats', array( 'image', 'gallery' ) );
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );

include ('inc/mediaSize.php');

$defaults = array(
	'default-image'          => '',
	'width'                  => 100,
	'height'                 => 500,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

//Custom background (funkar ej, men kanske i framtiden) 

// $args = array(
// 	'default-color' => '000000',
// 	'default-image' => '/img/koala.png',
// );
// add_theme_support( 'custom-background', $args );

// $defaults = array(
// 	'default-color'          => '000000',
// 	'default-image' 		 => '/img/koala.png',
// 	'default-repeat'         => 'repeat',
// 	'default-position-x'     => 'left',
//     'default-position-y'     => 'top',
//     'default-size'           => 'auto',
// 	'default-attachment'     => 'scroll',
// 	'wp-head-callback'       => '_custom_background_cb',
// 	'admin-head-callback'    => '',
// 	'admin-preview-callback' => '',
// 	'uploads'       => true,
// );
// add_theme_support( 'custom-background', $defaults );


//Menu 
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Front Page
function nordholm_fram() {

	$labels = array(
		'name'                  => _x( 'Framme', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Fram', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Fram', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'fram', 
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Fram', 'text_domain' ),
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
	register_post_type( 'fram', $args );

}
add_action( 'init', 'nordholm_fram', 0 );


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
function nordholm_publicering() {

	$labels = array(
		'name'                  => _x( 'Publuceringar', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Publicering', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Publicering', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'publicering',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Publicering', 'text_domain' ),
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
	register_post_type( 'publicering', $args );

}
add_action( 'init', 'nordholm_publicering', 0 );

// Musik page
function nordholm_musik() {

	$labels = array(
		'name'                  => _x( 'Musiker', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Musik', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Musik', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'musik',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Musik', 'text_domain' ),
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
	register_post_type( 'musik', $args );

}
add_action( 'init', 'nordholm_musik', 0 );

function nordholm_music() {

	$labels = array(
		'name'                  => _x( 'Musicer', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Music', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Music', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'music',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Music', 'text_domain' ),
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
	register_post_type( 'music', $args );

}
add_action( 'init', 'nordholm_music', 0 );
//Galleri page
function nordholm_galleri() {

	$labels = array(
		'name'                  => _x( 'Galleriet', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Galleri', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Galleri', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'galleri',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Galleri', 'text_domain' ),
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
	register_post_type( 'galleri', $args );

}

add_action( 'init', 'nordholm_galleri', 0 );

// Dett kopierade jag och döpte om alla namnen. På detta sätt kommer det fram en ny "postype" i dashboard
function nordholm_om() {

	$labels = array(
		'name'                  => _x( 'Ome', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Om', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Om', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'om',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Om', 'text_domain' ),
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
	register_post_type( 'om', $args );

}

add_action( 'init', 'nordholm_om', 0 );

//Footer widgets
function nordholm_widgets_init() {
	register_sidebar( array(
	'name' => 'Footer Sidebar 1',
	'id' => 'footer-sidebar-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 2',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
	register_sidebar( array(
	'name' => 'Footer Sidebar 3',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'nordholm_widgets_init');
?>