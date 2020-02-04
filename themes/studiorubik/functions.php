<?php

// Creates and add the menus
function studiorubik_menus(){
    //Wordpress function
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'social-menu' => 'Social Menu'
    ));
}

// Add Stylesheets and Javascript files
function studiorubik_scripts() {

    // Stylesheets

    wp_enqueue_style('googlefont' , 'https: //fonts.googleapis.com/css?family=Montserrat:900&display=swap&subset=cyrillic-ext', array(), '1.0.0'); //Montserrat Font Family

    wp_enqueue_style('normalize', get_template_directory_uri() . '/vendors/normalize/normalize.min.css', array(), '8.0.1'); //Normalize CSS

    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendors/fonts/fontawesome/font-awesome.min.css', array(), '4.7.0');

    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0'); // Wordpress Stylesheet

    wp_enqueue_style('bundlecss', get_template_directory_uri() . '/dist/bundle.css', array(), '1.0.0'); //Main Style Bundle


    // JavaScript
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true); //jQuery

    // if( is_front_page() ):
    //     // Call cube.js only on the Front Page
    //     wp_enqueue_script('cubejs', get_template_directory_uri() . '/old/js/helpers/cube.js', array('jquery'), true, '1.0.0', ); // 3D Cube JS
    // endif;


    wp_enqueue_script('bundlejs', get_template_directory_uri() . '/dist/bundle.js', array(), null, true); //jQuery

}

add_action('wp_enqueue_scripts', 'studiorubik_scripts');


//Enable custom features
function studiorubik_setup() {

    // Add menus
    add_action('init', 'studiorubik_menus');

    //Add SEO Titles Support
    add_theme_support('title-tag');

    // Add Featured Image
    add_theme_support('post-thumbnails');

    //Register new image size
    // add_image_size('square', 450, 450, true);

}

//When the theme is activated and ready!
add_action('after_setup_theme', 'studiorubik_setup');


?>