<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}


function tbics_register_news_post_type() {
    register_post_type('news', array(
        'labels' => array(
            'name' => __('News'),
            'singular_name' => __('News Item')
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'news'),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-megaphone'
    ));
}
add_action('init', 'tbics_register_news_post_type');


add_action('wp_enqueue_scripts', function () {
	$handle   = 'tbics-nav';
	$path_rel = '/js/tbics-nav.js';
	$path_abs = get_stylesheet_directory() . $path_rel;
	$ver      = file_exists($path_abs) ? filemtime($path_abs) : null;
  
	// Enqueue site-wide:
	wp_enqueue_script(
	  $handle,
	  get_stylesheet_directory_uri() . $path_rel,
	  [],      // no deps
	  $ver,    // cache-bust on change
	  true     // load in footer
	);
  
	// If you only want it on the homepage, comment the block above and use:
	/*
	if (is_front_page()) {
	  wp_enqueue_script($handle, get_stylesheet_directory_uri() . $path_rel, [], $ver, true);
	}
	*/
  
	// Optional: add "defer"
	wp_script_add_data($handle, 'defer', true);
  });
  

  add_action('wp_enqueue_scripts', function () {

	// ✅ Bootstrap bundle (includes Popper) for dropdowns
	wp_enqueue_script(
	  'tbics-bootstrap-bundle',
	  get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js',
	  array(),
	  null,
	  true
	);
  
  }, 20);
  

  function tbics_register_keynote_cpt() {
	register_post_type('keynote', [
	  'labels' => [
		'name' => 'Keynotes',
		'singular_name' => 'Keynote',
	  ],
	  'public' => true,
	  'has_archive' => true,
	  'rewrite' => [
		'slug' => 'TBICS2026/keynote',
		'with_front' => false,
	  ],
	  'supports' => ['title', 'editor', 'thumbnail'],
	  'show_in_rest' => true,
	]);
  }
  add_action('init', 'tbics_register_keynote_cpt');
  