<?php
/**
 * Plugin Name: Woo USP
 * Plugin URI: #
 * Description: This plugin allows you to display up to five unique selling propositions in you WooCommerce store.
 * Version: 1.0.0
 * Author: Anna Werner & Con Schneider
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
include('includes/admin-options.php'); // the plugin options page HTML and save functions

//Add Markup to Single Product Page 
add_action( 'woocommerce_single_product_summary', 'wc_usp_table', 33 );
function wc_usp_table() {
	include("includes/form-markup.php");
}