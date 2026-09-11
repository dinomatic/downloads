<?php
/**
 * Akurai Child Theme functions and definitions.
 *
 * @package Akurai
 */

/**
 * Enqueue parent theme styles.
 */
function akurai_child_enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'akurai_child_enqueue_parent_styles' );
