<?php

function wcusp_add_content () {
	
    //Include Options
    $wcusp_options = get_option('wcusp_settings');
    //Remove Pipe from Icon Class
    $pipe_weg = "|";
    $leerzeichen_hin = " ";  

    $wcusp_options_front = str_replace ( $pipe_weg , $leerzeichen_hin , $wcusp_options );

    //Define Markup as Variables
    //Div Container
    $my_usps_start = '<div class="product-usps-wrapper">
        <div class="product-usps">';
    
    //First USP  
    $my_first_usp = '<div class="product-usp-block">
                    	<div class="usp-image">
                    		<i style="color:' . $wcusp_options['wcusp_icon_color'] . '" class="' . $wcusp_options_front['icon1'] . '"></i>
                    	</div>
                    	<div class="usp-title">
                    		<span> ' . $wcusp_options['usp1'] . ' </span> 
                        </div>
        	          </div> ';
    //Second USP
    $my_second_usp = ' <div class="product-usp-block">
                    	<div class="usp-image">
                    		<i style="color:' . $wcusp_options['wcusp_icon_color'] . '" class=" ' . $wcusp_options_front['icon2'] . ' "></i>
                        </div>
                    	<div class="usp-title">
                    		<span> ' . $wcusp_options['usp2'] . ' </span> 
                    	</div>
        	           </div>';
    //Third USP
    $my_third_usp = ' <div class="product-usp-block">
                    	<div class="usp-image">
                    	   <i style="color:' . $wcusp_options['wcusp_icon_color'] . '" class=" ' . $wcusp_options_front['icon3'] . ' "></i>
                    	</div>
                    	<div class="usp-title">
                    	   	<span> ' . $wcusp_options['usp3'] . ' </span> 
                    	</div>
        	           </div>';
    //Fourth USP
    $my_fourth_usp = ' <div class="product-usp-block">
                    	<div class="usp-image">
                    		<i style="color:' . $wcusp_options['wcusp_icon_color'] . '" class=" ' . $wcusp_options_front['icon4'] . ' "></i>
                    	</div>
                    	<div class="usp-title">
                    		<span> ' . $wcusp_options['usp4'] . ' </span> 
                    	</div>
        	           </div> ';
    //Fifth USP
    $my_fifth_usp = ' <div class="product-usp-block">
                        <div class="usp-image">
                            <i style="color:' . $wcusp_options['wcusp_icon_color'] . '" class=" ' . $wcusp_options_front['icon5'] . ' "></i>
                        </div>
                        <div class="usp-title">
                            <span> ' . $wcusp_options['usp5'] . ' </span> 
                        </div>
                       </div>';
    //End USP Div Container
    $my_usps_end = '</div>
    </div>';

    //Output Markup as defined in Variables
    echo $my_usps_start;
    if (!empty($wcusp_options['usp1'])) {
        echo $my_first_usp;
    }
    if (!empty($wcusp_options['usp2'])) {
        echo $my_second_usp;
    }
    if (!empty($wcusp_options['usp3'])) {
        echo $my_third_usp;
    }
    if (!empty($wcusp_options['usp4'])) {
        echo $my_fourth_usp;
    }
    if (!empty($wcusp_options['usp5'])) {
        echo $my_fifth_usp;
    }
    echo $my_usps_end;
}

add_action('woocommerce_single_product_summary', 'wcusp_add_content', 34);


?>