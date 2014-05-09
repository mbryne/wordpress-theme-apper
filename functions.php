<?php
/**
 * Apper Base Theme functions and definitions
 *
 * @package Apper Base Theme
 */

#
#   ACTIONS
#

add_action( 'after_setup_theme', 'apper_theme_setup' );

#
#   FUNCTIONS
#

if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/**
 * Enqueue scripts and styles.
 */
function apper_scripts() {

    wp_enqueue_style( 'apper-style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery-placeholder', get_template_directory_uri() . '/js/jquery.placeholder.js', array(), '20120206', true );
    wp_enqueue_script( 'apper-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
    wp_enqueue_script( 'apper-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'apper_scripts' );

function apper_theme_setup() {

	add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
	load_theme_textdomain( 'apper', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'apper' ),
		'footer' => __( 'Footer Menu', 'apper' ),
	) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}



// Remove Admin bar
function remove_admin_bar()
{
    return false;
}




/**
 * Custom template tags for this theme.
 */

/**
 * Review the following
 */

locate_template(array('/inc/template-tags.php'), true);
locate_template(array('/inc/customizer.php'), true);
locate_template(array('/inc/extras.php'), true);

/**
 * Theme Extensions
 */
locate_template(array('/inc/sidebar.php'), true);
locate_template(array('/inc/helpers.php'), true);
locate_template(array('/inc/shortcodes.php'), true);
locate_template(array('/inc/widgets.php'), true);
locate_template(array('/lib/soliliquy.php'), true);
locate_template(array('/inc/types.php'), true);
locate_template(array('/inc/data.php'), true);