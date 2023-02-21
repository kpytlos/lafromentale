<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'themefromscratch_support' ) ):

	function themefromscratch_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}


endif;
add_action( 'after_setup_theme', 'themefromscratch_support' );

/*-----------------------------------------------------------
Enqueue Styles
------------------------------------------------------------*/

if ( ! function_exists( 'themefromscratch_styles' ) ) :

	function themefromscratch_styles () {
		//Register stylesheet
		wp_enqueue_style('themefromscratch-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
		wp_enqueue_style('themefromscratch-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css');
	}
	
endif;
add_action( 'wp_enqueue_scripts', 'themefromscratch_styles' );

/*-----------------------------------------------------------
Custom excerpt lenght
------------------------------------------------------------*/

function custom_exerpt_lenght($lenght) {
	return 30;
}
add_filter('excerpt_length', 'custom_exerpt_lenght');