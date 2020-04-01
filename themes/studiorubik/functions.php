<?php

// Link to the classes file in /inc
require get_template_directory() . '/inc/queries.php';

// Creates and add the menus
function studiorubik_menus() {
	register_nav_menus( array(
		'main-menu'   => 'Main Menu',
		'social-menu' => 'Social Menu',
		'services'    => 'Services Footer Menu',
		'the-studio'  => 'The Studio Footer Menu',
		'legal'       => 'Legals Menu'
	) );
}

// Add Stylesheets and Javascript files
function studiorubik_scripts() {

	/* Stylesheets */
	wp_enqueue_style( 'googlefont', 'https://fonts.googleapis.com/css?family=Montserrat:900&display=swap&subset=cyrillic-ext', array(), '1.0.0' ); //Montserrat Font Family
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/vendors/normalize/normalize.min.css', array(), '8.0.1' ); //Normalize CSS
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/vendors/fonts/fontawesome/font-awesome.min.css', array(), '4.7.0' ); //Font Awesome
	wp_enqueue_style( 'aoscss', get_template_directory_uri() . '/vendors/aos/sass/aos.css', array(), '3.0.0' ); //AOS.js

	//Run only on the Front Page
	if ( is_front_page() ):
		wp_enqueue_style( 'bxslidercss', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', array(), '4.2.12' ); // Bx Slider
	endif;

	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0' ); // Wordpress Stylesheet
	wp_enqueue_style( 'bundlecss', get_template_directory_uri() . '/dist/bundle.css', array(), '1.0.0' ); //Webpack Main Style Bundle

	/* JavaScript */
	wp_deregister_script( 'jquery' ); //Deregister old jQuery
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, true ); //register external jQuery
	wp_enqueue_script( 'aosjs', get_template_directory_uri() . '/vendors/aos/js/aos.min.js', array(), '3.0.0', true ); //AOS.js

	//Run Only on the Front Page
	if ( is_front_page() ):
		// Call Bx Slider only on the Front Page
		wp_enqueue_script( 'bxsliderjs', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', array(), '4.2.12' ); //BxSlider.js
	endif;

	// IsotopeJS & Images Loaded
	if ( is_post_type_archive( 'jetpack-portfolio' ) || basename( get_page_template() ) === 'page-case-studies.php' || is_home() || is_front_page() ) {
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/vendors/isotope/isotope.pkgd.min.js', array(), '3.0.6', true );
		wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/vendors/isotope/imagesloaded.pkgd.min.js', array(), '4.1.4', true );
	}

	// Runs only on Contact Page
	if ( basename( get_page_template() ) === 'contacts-page.php' ):
		//Google Maps Scripts
		wp_enqueue_script( 'googleapikey', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA6d0WAlGXpG9XRGySXBMk8ojaqvnYhqqQ', array(), '1.1.1', true ); //API Key
		wp_enqueue_script( 'googleapi', 'https://maps.googleapis.com/maps/api/js', array(), '1.1.1', true ); //Google Maps API
	endif;

	wp_enqueue_script( 'bundlejs', get_template_directory_uri() . '/dist/bundle.js', array(), null, true ); //Webpack Compiled Javascript File

}

add_action( 'wp_enqueue_scripts', 'studiorubik_scripts' );

//Create the Widget Zone
function studiorubik_widgets() {
	register_sidebar( array(
		'name'         => 'Sidebar',
		'id'           => 'sidebar',
		'before_title' => '<h5 class="text-upper">',
		'after_title'  => '</h5>'
	) );
}

add_action( 'widgets_init', 'studiorubik_widgets' );

//Enable custom features
function studiorubik_setup() {

	// Add menus
	add_action( 'init', 'studiorubik_menus' );

	//Add SEO Titles Support
	add_theme_support( 'title-tag' );

	// Add Featured Image
	add_theme_support( 'post-thumbnails' );

	// Register new image size
	add_image_size( 'square', 450, 450, true );
	add_image_size( 'mediumSize', 700, 400, true );
	add_image_size( 'portrait', 350, 724, true );
}

//When the theme is activated and ready!
add_action( 'after_setup_theme', 'studiorubik_setup' );

@ini_set( 'upload_max_size', '1024M' );
@ini_set( 'post_max_size', '50M' );
@ini_set( 'max_execution_time', '300' );

?>