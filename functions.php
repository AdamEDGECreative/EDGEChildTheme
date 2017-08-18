<?php

/**
 * Theme Prefix: etc_ (EDGE Template Child)
 */

add_action( 'after_setup_theme', 'etc_setup_theme' );
function etc_setup_theme() {

	/**
	 * Enqueue assets
	 */
	add_action( 'wp_enqueue_scripts', 'etc_enqueue_parent_styles' );
	add_action( 'wp_enqueue_scripts', 'etc_enqueue_child_styles' );

}

/**
 * Enqueue the parent theme's style.css
 */
function etc_enqueue_parent_styles() {
  wp_enqueue_style( 'edge-template-parent-style', get_template_directory_uri().'/src/css/style.css' );
}

/**
 * Enqueue the child theme's style.css
 */
function etc_enqueue_child_styles() {
  wp_enqueue_style( 'edge-template-child-style', get_stylesheet_directory_uri().'/src/css/style.css' );
}
