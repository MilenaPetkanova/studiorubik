<?php
    /*
        Plugin Name: Studio Rubik - Post Types
        Plugin URI:
        Description: Adds a new Testimonials Post Type into WordPress
        Version: 1.0
        Author: Georgi Karadzhov
        Author URI: studiorubik.com
        Text Domain: studiorubik
    */

    if(!defined('ABSPATH')) die();



function studiorubik_testimonials() {

$labels = array(
	'name'                  => _x( 'Testimonials', 'Post Type General Name', 'studiorubik' ),
	'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'studiorubik' ),
	'menu_name'             => __( 'Testimonials', 'studiorubik' ),
	'name_admin_bar'        => __( 'Testimonial', 'studiorubik' ),
	'archives'              => __( 'Archive', 'studiorubik' ),
	'attributes'            => __( 'Attributes', 'studiorubik' ),
	'parent_item_colon'     => __( 'Parent Testimonial ', 'studiorubik' ),
	'all_items'             => __( 'All Testimonials', 'studiorubik' ),
	'add_new_item'          => __( 'Add Testimonial', 'studiorubik' ),
	'add_new'               => __( 'Add Testimonial', 'studiorubik' ),
	'new_item'              => __( 'New Testimonial', 'studiorubik' ),
	'edit_item'             => __( 'Edit Testimonial', 'studiorubik' ),
	'update_item'           => __( 'Update Testimonial', 'studiorubik' ),
	'view_item'             => __( 'View Testimonial', 'studiorubik' ),
	'view_items'            => __( 'View Testimonials', 'studiorubik' ),
	'search_items'          => __( 'Search Testimonial', 'studiorubik' ),
	'not_found'             => __( 'Not found in Trash', 'studiorubik' ),
	'featured_image'        => __( 'Featured Image', 'studiorubik' ),
	'set_featured_image'    => __( 'Save Featured Image', 'studiorubik' ),
	'remove_featured_image' => __( 'Remove Featured Image', 'studiorubik' ),
	'use_featured_image'    => __( 'Use as Featured Image', 'studiorubik' ),
	'insert_into_item'      => __( 'Insert Into Testimonial', 'studiorubik' ),
	'uploaded_to_this_item' => __( 'Add At Testimonial', 'studiorubik' ),
	'items_list'            => __( 'Testimonial List', 'studiorubik' ),
	'items_list_navigation' => __( 'Navigate toTestimonials', 'studiorubik' ),
	'filter_items_list'     => __( 'Filter Testimonials', 'studiorubik' ),
);
$args = array(
	'label'                 => __( 'Testimonials', 'studiorubik' ),
	'description'           => __( 'Testimonials para el Sitio Web', 'studiorubik' ),
	'labels'                => $labels,
	'supports'              => array( 'title', 'editor', 'thumbnail' ),
	'hierarchical'          => false,
	'public'                => true,
	'show_ui'               => true,
	'show_in_menu'          => true,
	'menu_position'         => 8,
	'menu_icon'             => 'dashicons-editor-quote',
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
	'can_export'            => true,
	'has_archive'           => false,
	'exclude_from_search'   => false,
	'publicly_queryable'    => true,
	'capability_type'       => 'page',
);
register_post_type( 'testimonials', $args );

}
add_action( 'init', 'studiorubik_testimonials', 0 );