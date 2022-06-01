<?php
/**
 * harringtons functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package harringtons
 */


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/**
 * Enqueue scripts and styles.
 */

 
function harringtons_scripts() {
  
	// wp_enqueue_style( 'harringtons-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	/* Google Fonts */	
	 wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600;1,700&display=swap', false );
	

	/* jQuery */
	wp_enqueue_script( 'harringtons-jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), _S_VERSION, true );


	/* Waypoints */
	wp_enqueue_script( 'harringtons-waypoints', get_template_directory_uri() . '/js/vendor/waypoints.min.js', array(), _S_VERSION, true );

	
	/* Owl Carousel */
	wp_enqueue_script( 'harringtons-owlcarousel', get_template_directory_uri() . '/js/vendor/owl-carousel.js', array('harringtons-jquery'), null, true );

	/* Global Scripts */
	wp_enqueue_script( 'harringtons-global', get_template_directory_uri() . '/js/scripts.js', array(), _S_VERSION, true );

	/* Homepage Carousel */
	if ( is_page_template( 'templates/homepage.php' ) ) {

		wp_enqueue_style( 'harringtons-animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), _S_VERSION, true );

		wp_enqueue_script( 'harringtons-homepage', get_template_directory_uri() . '/js/home.js', array('harringtons-jquery'), _S_VERSION, true );

	}

}
add_action( 'wp_enqueue_scripts', 'harringtons_scripts' );
