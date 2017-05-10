<?php

/******************************
* script control
******************************/

function wcusp_load_scripts() {
	if(is_singular()) {
		wp_enqueue_style('main-css', plugin_dir_url( __FILE__ ) . 'css/main.css');
	}

}
add_action('wp_enqueue_scripts', 'wcusp_load_scripts');

/******************************
* enqueue font-awesome icons
******************************/

//Backend

function wcusp_icon_picker_scripts() {   
    $css = plugin_dir_url( __FILE__ ) . 'css/icon-picker.css';
    wp_enqueue_style( 'dashicons-picker', $css, array( 'dashicons' ), '1.0' );

    $js = plugin_dir_url( __FILE__ ) . 'js/icon-picker.js';
    wp_enqueue_script( 'dashicons-picker', $js, array( 'jquery' ), '1.0' );

    $fontawesome = plugin_dir_url( __FILE__ ) . 'fonts/font-awesome/css/font-awesome.css';
    wp_enqueue_style( 'font-awesome', $fontawesome );   
}
add_action( 'admin_enqueue_scripts', 'wcusp_icon_picker_scripts' );


//Frontend

function wcusp_frontend_icon_picker_scripts() {
    wp_enqueue_style( 'dashicons');
    $fontawesome = plugin_dir_url( __FILE__ ) . 'fonts/font-awesome/css/font-awesome.css';
    wp_enqueue_style( 'font-awesome', $fontawesome,'','');
}
add_action( 'wp_enqueue_scripts', 'wcusp_frontend_icon_picker_scripts' );

/******************************
* enqueue color picker
******************************/

function color_picker_assets($hook_suffix) {
    // $hook_suffix to apply a check for admin page.
    wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'my-script-handle', plugin_dir_url( __FILE__ ) . '/js/color-picker.js', array( 'wp-color-picker' ), false, true );
}
add_action( 'admin_enqueue_scripts', 'color_picker_assets' );





