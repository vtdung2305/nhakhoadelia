<?php
/**
 * Delia register post type
 *
 *
 * @package WordPress
 * @subpackage Delia
 * @since Delia 1.0.0
 */

 /**
 * Create two taxonomies, genres and writers for the post type "book".
 *
 * @see register_post_type() for registering custom post types.
 */
function delia_register_custom_post_type_doctor() {
  $labels = array(
      'name'                  => _x( 'Doctor', 'Post type general name', 'bdevs-doctor' ),
      'singular_name'         => _x( 'Doctor', 'Post type singular name', 'bdevs-doctor' ),
      'menu_name'             => _x( 'Doctor', 'Admin Menu text', 'bdevs-doctor' ),
      'name_admin_bar'        => _x( 'Doctor', 'Add New on Toolbar', 'bdevs-doctor' ),
      'add_new'               => __( 'Add New', 'bdevs-doctor' ),
      'add_new_item'          => __( 'Add New doctor', 'bdevs-doctor' ),
      'new_item'              => __( 'New doctor', 'bdevs-doctor' ),
      'edit_item'             => __( 'Edit doctor', 'bdevs-doctor' ),
      'view_item'             => __( 'View doctor', 'bdevs-doctor' ),
      'all_items'             => __( 'All Doctor', 'bdevs-doctor' ),
      'search_items'          => __( 'Search Doctor', 'bdevs-doctor' ),
      'parent_item_colon'     => __( 'Parent Doctor:', 'bdevs-doctor' ),
      'not_found'             => __( 'No Doctor found.', 'bdevs-doctor' ),
      'not_found_in_trash'    => __( 'No Doctor found in Trash.', 'bdevs-doctor' ),
      'featured_image'        => _x( 'Doctor Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'bdevs-doctor' ),
      'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'bdevs-doctor' ),
      'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'bdevs-doctor' ),
      'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'bdevs-doctor' ),
      'archives'              => _x( 'Doctor archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'bdevs-doctor' ),
      'insert_into_item'      => _x( 'Insert into Doctor', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'bdevs-doctor' ),
      'uploaded_to_this_item' => _x( 'Uploaded to this doctor', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'bdevs-doctor' ),
      'filter_items_list'     => _x( 'Filter Doctor list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'bdevs-doctor' ),
      'items_list_navigation' => _x( 'Doctor list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'bdevs-doctor' ),
      'items_list'            => _x( 'Doctor list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'bdevs-doctor' ),
  );     
  $args = array(
      'labels'             => $labels,
      'description'        => 'Doctor custom post type.',
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'bdevs-doctor' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 20,
      'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
      'taxonomies'         => array( 'doctor-categories'),
      'show_in_rest'       => true,
      'show_in_nav_menus'  => true
  );
   
  register_post_type( 'bdevs-doctor', $args );
}
add_action( 'init', 'delia_register_custom_post_type_doctor' );

function delia_register_custom_post_type_service() {
  $labels = array(
      'name'                  => _x( 'Service', 'Post type general name', 'service' ),
      'singular_name'         => _x( 'Service', 'Post type singular name', 'service' ),
      'menu_name'             => _x( 'Dịch vụ', 'Admin Menu text', 'service' ),
      'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'service' ),
      'add_new'               => __( 'Tạo bài viết', 'service' ),
      'add_new_item'          => __( 'Add New Service', 'service' ),
      'new_item'              => __( 'New Service', 'service' ),
      'edit_item'             => __( 'Chỉnh sữa dịch vụ', 'service' ),
      'view_item'             => __( 'Xem dịch vụ', 'service' ),
      'all_items'             => __( 'Tất cả dịch vụ', 'service' ),
      'search_items'          => __( 'Search Service', 'service' ),
      'parent_item_colon'     => __( 'Parent Service:', 'service' ),
      'not_found'             => __( 'No Service found.', 'service' ),
      'not_found_in_trash'    => __( 'No Service found in Trash.', 'service' ),
      'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'service' ),
      'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'service' ),
      'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'service' ),
      'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'service' ),
      'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'service' ),
      'insert_into_item'      => _x( 'Insert into Service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'service' ),
      'uploaded_to_this_item' => _x( 'Uploaded to this service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'service' ),
      'filter_items_list'     => _x( 'Filter Service list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'service' ),
      'items_list_navigation' => _x( 'Service list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'service' ),
      'items_list'            => _x( 'Service list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'service' ),
  );     
  $args = array(
      'labels'             => $labels,
      'description'        => 'Service custom post type.',
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'dich-vu' ),
      'capability_type'    => 'post',
      'has_archive'        => true,
      'hierarchical'       => false,
      'menu_position'      => 20,
      'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
      // 'taxonomies'         => array( 'service-categories'),
      'show_in_rest'       => true,
      'show_in_nav_menus'  => true
  );
   
  register_post_type( 'service', $args );
}
add_action( 'init', 'delia_register_custom_post_type_service' );