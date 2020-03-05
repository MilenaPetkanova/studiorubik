<?php
/**
 * Plugin Name: Dark Mode
 * Plugin URI: https://wordpress.org/plugins/dark-mode/
 * Description: Lets your users make the WordPress admin dashboard darker.
 * Author: David Gwyer
 * Author URI: https://www.wpgoplugins.com/
 * Text Domain: dark-mode
 * Version: 3.2.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

require 'class-dark-mode.php';

$dark_mode = new Dark_Mode();
