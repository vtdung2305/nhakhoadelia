<?php
/**
 * Create two taxonomies, genres and writers for the post type "book".
 *
 * @see register_post_type() for registering custom post types.
 */
function wpdocs_create_doctor_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Categories', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categories', 'textdomain' ),
		'all_items'         => __( 'All Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Categories', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Categories:', 'textdomain' ),
		'edit_item'         => __( 'Edit Categories', 'textdomain' ),
		'update_item'       => __( 'Update Categories', 'textdomain' ),
		'add_new_item'      => __( 'Add New Categories', 'textdomain' ),
		'new_item_name'     => __( 'New Categories Name', 'textdomain' ),
		'menu_name'         => __( 'Categories', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'doctor-categories' ),
	);

	register_taxonomy( 'doctor-categories', array( 'bdevs-doctor' ), $args );
}
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'wpdocs_create_doctor_taxonomies', 0 );

function wpdocs_create_service_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'Categories', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search Categories', 'textdomain' ),
		'all_items'         => __( 'All Categories', 'textdomain' ),
		'parent_item'       => __( 'Parent Categories', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Categories:', 'textdomain' ),
		'edit_item'         => __( 'Edit Categories', 'textdomain' ),
		'update_item'       => __( 'Update Categories', 'textdomain' ),
		'add_new_item'      => __( 'Thêm chuyên mục', 'textdomain' ),
		'new_item_name'     => __( 'New Categories Name', 'textdomain' ),
		'menu_name'         => __( 'Chuyên mục dịch vụ', 'textdomain' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'service-categories' ),
	);

	register_taxonomy( 'service-categories', array( 'service' ), $args );
}
// hook into the init action and call create_book_taxonomies when it fires
// add_action( 'init', 'wpdocs_create_service_taxonomies', 0 );