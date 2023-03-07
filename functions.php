<?php
/**
 * Megla Blog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Megla Blog
 */

if ( ! defined( 'MEGLA_BLOG_VERSION' ) ) {
	$megla_blog_theme = wp_get_theme();
	define( 'MEGLA_BLOG_VERSION', $megla_blog_theme->get( 'Version' ) );
}


/**
 * Enqueue scripts and styles.
 */
function megla_blog_scripts() {
    wp_enqueue_style( 'megla-blog-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','slicknav','megla-default-block','megla-style'), '', 'all');
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
    wp_enqueue_style( 'megla-blog-main-style',get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(), MEGLA_BLOG_VERSION, 'all');
}
add_action( 'wp_enqueue_scripts', 'megla_blog_scripts' );

/**
 * Custom excerpt length.
 */
function megla_blog_excerpt_length( $length ) {
    if ( is_admin() ) return $length;
    return 36;
}
add_filter( 'excerpt_length', 'megla_blog_excerpt_length', 999 );

/**
 * Load Doyel Tags files.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';