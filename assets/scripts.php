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

/*
//Make sure we only enqueue on our options page //
global $pagenow;
if ($pagenow=="options-general.php" && isset( $_GET['page'] ) && $_GET['page'] == 'admin-options.php'  ) {
add_action( 'admin_enqueue_scripts', 'wcusp_icon_picker_scripts' );
}
*/
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

add_action( 'admin_enqueue_scripts', 'wcusp_add_color_picker' );
function wcusp_add_color_picker( $hook ) {
 
//if( is_admin() ) {
 
        // Add the color picker css file
   		wp_enqueue_style( 'wp-color-picker-css', plugin_dir_url( __FILE__ ) . '/css/icon-picker.css' );
 
 
         wp_enqueue_script( 'color-picker-js', plugin_dir_url( __FILE__ ) . '/js/color-picker.js', array( 'wp-color-picker' ));
//    }
}




