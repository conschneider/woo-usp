<?php
/**
 * Plugin Name: Woo USP
 * Plugin URI: #
 * Description: This plugin allows you to display up to five unique selling propositions in you WooCommerce store.
 * Version: 1.0.0
 * Author: Anna Werner
 * Author URI: https://www.annawerner.de
 * License: GPL2
 */

/******************************
* global variables
******************************/

// retrieve  plugin settings from the options table
$wcusp_prefix = 'wcusp_';
$wcusp_options = get_option('wcusp_settings');

/******************************
* includes
******************************/

include('assets/scripts.php'); // this controls all JS / CSS
include('includes/data-processing.php'); // this controls all saving of data
//include('includes/form-markup.php'); // display content functions
include('includes/admin-options.php'); // the plugin options page HTML and save functions

//Add Markup to Single Product Page 
add_action( 'woocommerce_single_product_summary', 'wc_usp_table', 33 );
function wc_usp_table() {
	include("includes/form-markup.php");
}


/*
add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );
function wpb_load_fa() {
	wp_enqueue_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
}
*/






?>