<?php

// =============== Startup Scripts ===============

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0' );
	wp_enqueue_style( 'customized', get_template_directory_uri() . '/css/rapid_bootstrap.css' );

	if (get_theme_mod( 'enable_gsap_animations' ) == 1) {
		wp_enqueue_style( 'gsap', get_template_directory_uri() . '/css/gsap-animations.css' );
    	}
    	if (get_theme_mod( 'enable_scrollmagic' ) == 1) {
		wp_enqueue_style( 'scrollmagic', get_template_directory_uri() . '/wp-content/themes/rapid_bootstrap/css/scrollmagic.css' );
    	}	
}
// ===== Includes =====
include( get_template_directory() . '/includes/bootstrap-customizer.php' );
include( get_template_directory() . '/includes/theme-colors.php' );
require( get_template_directory() . '/includes/textarea.php' );
require( get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php' );

// ===== Actions =====
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );
add_action( 'customize_register', 'bootstrap_customize_register' ); 
add_action( 'wp_head', 'color_head' );


// =============== Custom Functions ===============

// Text Sanitizer
function sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

// ----- Custom Nav Menus -----

function bootstrap_theme_setup(){
	
	add_theme_support( 'post-thumbnails' );
        add_theme_support('menus');
        
        register_nav_menus( array(
            'header-menu' => 'Header Menu',
            'footer-menu'  => 'Footer Menu' ,
            'social-menu'  => 'Social Menu' ,
        ));
    }
    
add_action( 'init', 'bootstrap_theme_setup');
add_theme_support('custom-background');

// WP-Updater to distribute theme updates from wp-updates.com
require_once('wp-updates-theme.php');
new WPUpdatesThemeUpdater_2281( 'http://wp-updates.com/api/2/theme', basename( get_template_directory() ) );