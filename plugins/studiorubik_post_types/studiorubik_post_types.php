<?php
    /*
        Plugin Name: Studio Rubik - Custom Post Types
        Plugin URI:
        Description: Adds new Custom Post Types into WordPress [Testimonials & Client List]
        Version: 1.0
        Author: Studio Rubik
        Author URI: studiorubik.com
        Text Domain: studiorubik
    */

    if(!defined('ABSPATH')) die();


    // Studio Rubik Testimonials
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


    // Register new Custom Post Type for the Client List
    function studiorubik_client_post_type() {

        $labels = array(
            'name' => _x('Clients', 'Post Type General Name', 'gymfitness'),
            'singular_name' => _x('Client', 'Post Type Singular Name', 'gymfitness'),
            'menu_name' => __('Clients', 'gymfitness'),
            'name_admin_bar' => __('Clients', 'gymfitness'),
            'archives' => __('Archive', 'gymfitness'),
            'attributes' => __('Attributes', 'gymfitness'),
            'parent_item_colon' => __('Parent Client', 'gymfitness'),
            'all_items' => __('All Clients', 'gymfitness'),
            'add_new_item' => __('Add Client', 'gymfitness'),
            'add_new' => __('Add Client', 'gymfitness'),
            'new_item' => __('New Client', 'gymfitness'),
            'edit_item' => __('Edit Client', 'gymfitness'),
            'update_item' => __('Update Client', 'gymfitness'),
            'view_item' => __('View Client', 'gymfitness'),
            'view_items' => __('View Client', 'gymfitness'),
            'search_items' => __('Search Client', 'gymfitness'),
            'not_found' => __('Not found', 'gymfitness'),
            'not_found_in_trash' => __('Not found in trash', 'gymfitness'),
            'featured_image' => __('Featured Image', 'gymfitness'),
            'set_featured_image' => __('Save Featured Image', 'gymfitness'),
            'remove_featured_image' => __('Remove Featured Image', 'gymfitness'),
            'use_featured_image' => __('Use as Featured Image', 'gymfitness'),
            'insert_into_item' => __('Insert in Client', 'gymfitness'),
            'uploaded_to_this_item' => __('Add in Client', 'gymfitness'),
            'items_list' => __('Clients List', 'gymfitness'),
            'items_list_navigation' => __('Navigate to Clients', 'gymfitness'),
            'filter_items_list' => __('Filter Clients', 'gymfitness'),
        );
        $args = array(
            'label' => __('Client', 'gymfitness'),
            'description' => __('Clients for StudioRubik Website', 'gymfitness'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-groups',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
            // 'show_in_rest' => true
        );
        register_post_type('studiorubik_clients', $args);

    }
    add_action('init', 'studiorubik_client_post_type', 0);

    // Register new Custom Post Type for the Careers Page
    function studiorubik_careers_post_type() {

        $labels = array(
            'name' => _x('Careers', 'Post Type General Name', 'gymfitness'),
            'singular_name' => _x('Career', 'Post Type Singular Name', 'gymfitness'),
            'menu_name' => __('Careers', 'gymfitness'),
            'name_admin_bar' => __('Careers', 'gymfitness'),
            'archives' => __('Archive', 'gymfitness'),
            'attributes' => __('Attributes', 'gymfitness'),
            'parent_item_colon' => __('Parent Career', 'gymfitness'),
            'all_items' => __('All Careers', 'gymfitness'),
            'add_new_item' => __('Add Career', 'gymfitness'),
            'add_new' => __('Add Career', 'gymfitness'),
            'new_item' => __('New Career', 'gymfitness'),
            'edit_item' => __('Edit Career', 'gymfitness'),
            'update_item' => __('Update Career', 'gymfitness'),
            'view_item' => __('View Career', 'gymfitness'),
            'view_items' => __('View Career', 'gymfitness'),
            'search_items' => __('Search Career', 'gymfitness'),
            'not_found' => __('Not found', 'gymfitness'),
            'not_found_in_trash' => __('Not found in trash', 'gymfitness'),
            'featured_image' => __('Featured Image', 'gymfitness'),
            'set_featured_image' => __('Save Featured Image', 'gymfitness'),
            'remove_featured_image' => __('Remove Featured Image', 'gymfitness'),
            'use_featured_image' => __('Use as Featured Image', 'gymfitness'),
            'insert_into_item' => __('Insert in Career', 'gymfitness'),
            'uploaded_to_this_item' => __('Add in Career', 'gymfitness'),
            'items_list' => __('Career List', 'gymfitness'),
            'items_list_navigation' => __('Navigate to Careers', 'gymfitness'),
            'filter_items_list' => __('Filter Careers', 'gymfitness'),
        );

        $args = array(
            'label' => __('Career', 'gymfitness'),
            'description' => __('Careers for StudioRubik Website', 'gymfitness'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail'),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-id',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
            // 'show_in_rest' => true
        );
        register_post_type('studiorubik_careers', $args);
    }
    add_action('init', 'studiorubik_careers_post_type', 0);


?>