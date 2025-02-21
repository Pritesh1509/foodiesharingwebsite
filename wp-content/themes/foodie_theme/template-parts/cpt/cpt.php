<?php
/*Add custom post type in admin side */

add_action( 'init', 'recepi_custom_post_custom' );
function recepi_custom_post_custom() {
    $labels = array(
        'name'               => __( 'Receipe' ),
        'singular_name'      => __( 'Receipe' ),
        'add_new'            => __( 'Add New Receipe' ),
        'add_new_item'       => __( 'Add New Receipe' ),
        'edit_item'          => __( 'Edit Receipe' ),
        'new_item'           => __( 'New Receipe' ),
        'all_items'          => __( 'All Receipes' ),
        'view_item'          => __( 'View Receipe' ),
        'search_items'       => __( 'Search Receipe' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    );
    $args = array(
        'labels'            => $labels,
        'description'       => 'Holds our custom receipe post specific data',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'thumbnail','author','custom-fields' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
		'show_in_rest'=>true
    );
    register_post_type('receipes', $args);
}

add_action( 'init', 'reels_custom_post_type' );
function reels_custom_post_type() {
    $labels = array(
        'name'               => __( 'Reels' ),
        'singular_name'      => __( 'Reel' ),
        'add_new'            => __( 'Add New Reel' ),
        'add_new_item'       => __( 'Add New Reel' ),
        'edit_item'          => __( 'Edit Reel' ),
        'new_item'           => __( 'New Reel' ),
        'all_items'          => __( 'All Reels' ),
        'view_item'          => __( 'View Reel' ),
        'search_items'       => __( 'Search Reel' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    );
    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'thumbnail','comments','custom-fields' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
		'show_in_rest'=>true
    );
    register_post_type('reel', $args);
}

// Create Custom Taxonomy for Receipies
function receipe_custom_taxonomy() {
    // Set the taxonomy name and labels
    $labels = array(
        'name'              => 'Receipe Types',  // Name of the taxonomy
        'singular_name'     => 'Receipe Types',  // Singular name for one term
        'search_items'      => 'Search Receipe Types',  // Search text
        'all_items'         => 'All Receipe Types',  // All items text
        'parent_item'       => 'Parent Receipe Types',  // Parent item text
        'parent_item_colon' => 'Parent Receipe Types:',  // Parent item colon
        'edit_item'         => 'Edit Receipe Types',  // Edit text
        'update_item'       => 'Update Receipe Types',  // Update text
        'add_new_item'      => 'Add New Receipe Types',  // Add new text
        'new_item_name'     => 'New Receipe Types Name',  // New name text
        'menu_name'         => 'Receipe Types',  // Menu text
    );

    // Register the custom taxonomy
    register_taxonomy(
        'receipe_types',  // Slug for the custom taxonomy
        'receipes',   // Post type this taxonomy is associated with (you can change 'post' to any custom post type)
        array(
            'hierarchical' => true,  // Set to true if you want a hierarchical taxonomy like categories
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
        )
    );
}

add_action('init', 'receipe_custom_taxonomy');