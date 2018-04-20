<?php

function theme_styles() {

	wp_enqueue_style( 'Brazuca_css', get_template_directory_uri() . '/css/Brazuca.css' );

  wp_enqueue_style( 'Mondfit-css/background-image-home_css', get_template_directory_uri() . '/css/background-image-home.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
function theme_js() {

	global $wp_scripts;
  wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.js', array('jquery'), '', true );
  wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery'), '', true );
}


add_action( 'wp_enqueue_scripts', 'theme_js' );
add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}

function register_theme_menus() {


	register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu' ),
			'header-new' 	=> __( 'header-new' ),
      'header-white' 	=> __( 'header-white' ),
		)
	);

}
add_action( 'init', 'register_theme_menus' );

  function create_widget( $name, $id, $description ) {

  	register_sidebar(array(
  		'name' => __( $name ),
  		'id' => $id,
  		'description' => __( $description ),
  		'before_widget' => '<div class="widget">',
  		'after_widget' => '</div>',
  		'before_title' => '<h3">',
  		'after_title' => '</h3>'
  	));

  }
