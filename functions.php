<?php

function theme_styles() {

	wp_enqueue_style( 'Brazuca_css', get_template_directory_uri() . '/css/Brazuca.css' );
  wp_enqueue_style( 'Brazuca-css/nav_css', get_template_directory_uri() . '/css/nav.css' );
  wp_enqueue_style( 'Brazuca-css/pages_css', get_template_directory_uri() . '/css/pages.css' );
  wp_enqueue_style( 'Brazuca-css/sections_css', get_template_directory_uri() . '/css/sections.css' );

  wp_enqueue_style( 'Brazuca-css/rens_css', get_template_directory_uri() . '/css/rens.css' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'theme_styles' );
function theme_js() {

	global $wp_scripts;
  wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/Js/jquery.js', array('jquery'), '', true );
  wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/Js/theme.js', array('jquery'), '', true );
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

function create_widget( $name, $id, $description )
{

    register_sidebar(array(
        'name' => __($name),
        'id' => $id,
        'description' => __($description),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3">',
        'after_title' => '</h3>'
    ));
}

/* --- DATABASE FUNCTIONS --- */

function get_establishments() {
    global $wpdb;
    $result = $wpdb->get_results( $wpdb->prepare(
        'SELECT * FROM establishments', array()) );

    foreach ($result as $item) {
        echo "
                <ul>
                    <li id='street'>".$item->street." ".$item->streetNumber." ".$item->streetNumberSuffix."</li>
                    <li id='postalcode'>".$item->postalcode."</li>
                    <li id='city'>".$item->city."</li>
                    <li id='empty'><br /></li>
                    <li id='phone-number'>".$item->phoneNumberPrefix."-".$item->phoneNumber."</li>
                    <li id='email'>".$item->emailAddress."</li>
                </ul>
            ";
    }
}

function get_streets() {
    global $wpdb;
    $result = $wpdb->get_results( $wpdb->prepare(
        'SELECT street FROM establishments', array()) );

    return $result;
}

function random_string($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function get_establishment($establishment_street) {
    global $wpdb;
    // FATAL SQL INJECTION CAN BE DONE
    $result = $wpdb->get_results( $wpdb->prepare(
        "SELECT * FROM establishments WHERE street = \"{$establishment_street}\";", array()) );

    if($result) {
        $item = $result[0];

        echo "
            <div class='location-details'>
                <ul>
                    <li id='street'>".$item->street." ".$item->streetNumber." ".$item->streetNumberSuffix."</li>
                    <li id='postalcode'>".$item->postalcode."</li>
                    <li id='city'>".$item->city."</li>
                    <li id='empty'><br /></li>
                    <li id='phone-number'>".$item->phoneNumberPrefix."-".$item->phoneNumber."</li>
                    <li id='email'>".$item->emailAddress."</li>
                </ul>
            </div>
        ";
    } else {
        echo "<p>no data...</p>";
    }
}
