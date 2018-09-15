<?php
/**
 * Loads the child theme textdomain.
 */
function single_page_boxed_child_theme_setup() {
    load_child_theme_textdomain('single-page-boxed');
}
add_action( 'after_setup_theme', 'single_page_boxed_child_theme_setup' );

function single_page_boxed_child_enqueue_styles() {
    $parent_style = 'single-page-boxed-parent';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style( 'single-page-boxed-style',get_stylesheet_directory_uri() . '/singlepageboxed.css');
}
add_action( 'wp_enqueue_scripts', 'single_page_boxed_child_enqueue_styles',99);
?>