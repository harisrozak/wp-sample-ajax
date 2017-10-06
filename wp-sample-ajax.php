<?php
/**
 * Plugin Name: Sample Ajax
 * Plugin URI: 
 * Description: Sample WordPress Ajax
 * Version: 1.0
 * Author: Haris Ainur Rozak
 * Author URI: https://github.com/harisrozak
 */

require_once( plugin_dir_path( __FILE__ ) . 'ajax.php');

/**
 * admin menu
 */
add_action( 'admin_menu', 'sample_ajax_menu' );
function sample_ajax_menu() {	
	add_menu_page('Sample Ajax','Sample Ajax','moderate_comments','wp-sample-ajax/admin-page.php');
}

/**
 * admin_enqueue_scripts
 */
add_action('admin_enqueue_scripts', 'sample_ajax_admin_enqueue_scripts', 100);
function sample_ajax_admin_enqueue_scripts() {
	wp_enqueue_script('sample-ajax-admin-js',plugin_dir_url( __FILE__ )."script.js");
}