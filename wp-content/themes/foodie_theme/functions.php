<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
function foodie_theme_setup() {
	load_theme_textdomain( 'foodie_theme', get_template_directory() . '/languages' );
    add_theme_support('post-thumbnails');
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'foodie_theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'foodie_theme_setup' );

function foodie_theme_scripts() {
	wp_enqueue_style( 'foodie_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'boostrap-css', get_template_directory_uri().'/assets/css/bootstrap.css', _S_VERSION );
    wp_enqueue_style( 'slick-css', get_template_directory_uri().'/assets/css/slick.css', _S_VERSION );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri().'/assets/css/slick-theme.css', _S_VERSION );
	wp_style_add_data( 'foodie_theme-style', 'rtl', 'replace' );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.js', NULL, 1.0, true );
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.js', NULL, 1.0, true );
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom.js', NULL, 1.0, true );
    wp_localize_script('custom-js', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
	wp_enqueue_script( 'foodie_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'foodie_theme_scripts' );

require get_template_directory() . '/inc/template-tags.php';

require get_template_directory() . '/cpt/cpt.php';

require get_template_directory() . '/shortcode/shortcodes.php';

//Ajax Callback Functions
function reel_like_func() {
    $current_count = isset($_POST['c']) ? intval($_POST['c']) : 0;
    $new_count = $current_count + 1;
    // Echo the new count as our AJAX response.
    echo $new_count;
}
add_action('wp_ajax_reel_like_func', 'reel_like_func');
add_action('wp_ajax_nopriv_reel_like_func', 'reel_like_func');