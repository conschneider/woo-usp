<?php

function wcusp_options_page() {

	global $wcusp_options;

//	ob_start(); ?>
	<div class="wrap">
		<h2>Woo USP Underneath Add-to-Cart</h2>
		
		<form method="post" action="options.php">
		
			<?php settings_fields('wcusp_settings_group'); ?>
		
			<table class="form-table">
				<tr>
					<th scope="row" rowspan="2">
						USP1</th>
					<td width="10%">
						<label class="icon" for="wcusp_settings_icon1"><?php _e( 'USP Icon' ); ?></label>
					</td>
					<td>
						<input id="wcusp_settings_icon1" name="wcusp_settings[icon1]" class="regular-text" type="hidden" value="<?php if( isset( $wcusp_options['icon1'] ) ) { echo esc_attr( $wcusp_options['icon1'] ); } ?>"/>
						<div id="preview_wcusp_settings[icon1]" data-target="#wcusp_settings_icon1" class="button icon-picker <?php if( isset( $wcusp_options['icon1'] ) ) { $v=explode( '|', $wcusp_options['icon1'] ); echo $v[0].' '.$v[1]; } ?>"></div>
					</td>
				</tr>
				<tr>
					<td>
						<label class="description" for="wcusp_settings[usp1]"><?php _e('USP Text', 'wcusp_domain'); ?></label>
					</td>
					<td>
						<input id="wcusp_settings[usp1]" size="100" name="wcusp_settings[usp1]" type="text" value="<?php echo $wcusp_options['usp1']; ?>"/>
					</td>
				</tr>
				<tr>
					<th scope="row" rowspan="2">
						USP2</th>
					<td>
						<label class="icon" for="wcusp_settings_icon2"><?php _e( 'USP Icon' ); ?></label>
					</td>
					<td>
						<input id="wcusp_settings_icon2" name="wcusp_settings[icon2]" class="regular-text" type="hidden" value="<?php if( isset( $wcusp_options['icon2'] ) ) { echo esc_attr( $wcusp_options['icon2'] ); } ?>"/>
						<div id="preview_wcusp_settings[icon2]" data-target="#wcusp_settings_icon2" class="button icon-picker <?php if( isset( $wcusp_options['icon2'] ) ) { $v=explode( '|', $wcusp_options['icon2'] ); echo $v[0].' '.$v[1]; } ?>"></div>
					</td>
				</tr>
				<tr>
					<td>
						<label class="description" for="wcusp_settings[usp2]"><?php _e('USP Text', 'wcusp_domain'); ?></label>
					</td>
					<td>
						<input id="wcusp_settings[usp2]" size="100" name="wcusp_settings[usp2]" type="text" value="<?php echo $wcusp_options['usp2']; ?>"/>
					</td>
				</tr>
				<tr>
					<th scope="row" rowspan="2">
						USP3</th>
					<td>
						<label class="icon" for="wcusp_settings_icon3"><?php _e( 'USP Icon' ); ?></label>
					</td>
					<td>
						<input id="wcusp_settings_icon3" name="wcusp_settings[icon3]" class="regular-text" type="hidden" value="<?php if( isset( $wcusp_options['icon3'] ) ) { echo esc_attr( $wcusp_options['icon3'] ); } ?>"/>
						<div id="preview_wcusp_settings[icon3]" data-target="#wcusp_settings_icon3" class="button icon-picker <?php if( isset( $wcusp_options['icon3'] ) ) { $v=explode( '|', $wcusp_options['icon3'] ); echo $v[0].' '.$v[1]; } ?>"></div>
					</td>
				</tr>
				<tr>
					<td>
						<label class="description" for="wcusp_settings[usp3]"><?php _e('USP Text', 'wcusp_domain'); ?></label>
					</td>
					<td>
						<input id="wcusp_settings[usp3]" size="100" name="wcusp_settings[usp3]" type="text" value="<?php echo $wcusp_options['usp3']; ?>"/>
					</td>
				</tr>
				<tr>
					<th scope="row" rowspan="2">
						USP4</th>
					<td>
						<label class="icon" for="wcusp_settings_icon4"><?php _e( 'USP Icon' ); ?></label>
					</td>
					<td>
						<input id="wcusp_settings_icon4" name="wcusp_settings[icon4]" class="regular-text" type="hidden" value="<?php if( isset( $wcusp_options['icon4'] ) ) { echo esc_attr( $wcusp_options['icon4'] ); } ?>"/>
						<div id="preview_wcusp_settings[icon4]" data-target="#wcusp_settings_icon4" class="button icon-picker <?php if( isset( $wcusp_options['icon4'] ) ) { $v=explode( '|', $wcusp_options['icon4'] ); echo $v[0].' '.$v[1]; } ?>"></div>
					</td>
				</tr>
				<tr>
					<td>
						<label class="description" for="wcusp_settings[usp4]"><?php _e('USP Text', 'wcusp_domain'); ?></label>
					</td>
					<td>
						<input id="wcusp_settings[usp4]" size="100" name="wcusp_settings[usp4]" type="text" value="<?php echo $wcusp_options['usp4']; ?>"/>
					</td>
				</tr>
				<tr>
					<th scope="row" rowspan="2">
						USP5</th>
					<td>
						<label class="icon" for="wcusp_settings_icon5"><?php _e( 'USP Icon' ); ?></label>
					</td>
					<td>
						<input id="wcusp_settings_icon5" name="wcusp_settings[icon5]" class="regular-text" type="hidden" value="<?php if( isset( $wcusp_options['icon5'] ) ) { echo esc_attr( $wcusp_options['icon5'] ); } ?>"/>
						<div id="preview_wcusp_settings[icon5]" data-target="#wcusp_settings_icon5" class="button icon-picker <?php if( isset( $wcusp_options['icon5'] ) ) { $v=explode( '|', $wcusp_options['icon5'] ); echo $v[0].' '.$v[1]; } ?>"></div>
					</td>
				</tr>
				<tr>
					<td>
						<label class="description" for="wcusp_settings[usp5]"><?php _e('USP Text', 'wcusp_domain'); ?></label>
					</td>
					<td>
						<input id="wcusp_settings[usp5]" size="100" name="wcusp_settings[usp5]" type="text" value="<?php echo $wcusp_options['usp5']; ?>"/>
					</td>
				</tr>
				<tr>
		            <th scope="row"><label for="wcusp_icon_color"><?php echo __('Icon Color'); ?>: </label>
		            </th>
		            <td><input name="wcusp_settings[wcusp_icon_color]" id="wcusp_icon_color" type="text" class="my-input-class" value="<?php if ( isset( $wcusp_options['wcusp_icon_color'] ) ) echo $wcusp_options['wcusp_icon_color']; ?>" >
		                <!-- <input name="wcusp_settings[wcusp_icon_color]" id="wcusp_icon_color" type="text" class="my-color-field" value="<?php if ( isset( $wcusp_options['wcusp_icon_color'] ) ) echo $wcusp_options['wcusp_icon_color']; ?>" />-->
		            </td>
		       </tr>
			</table>
		
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'wcusp_domain'); ?>" />
			</p>
		
		</form>
		
	</div>
	<?php
//	echo ob_get_clean();
}

function wcusp_add_options_link() {
	add_options_page('Woo USPs', 'Woo USPs', 'manage_options', 'wcusp-options', 'wcusp_options_page');
}
add_action('admin_menu', 'wcusp_add_options_link');

function wcusp_register_settings() {
	// creates our settings in the options table
	register_setting('wcusp_settings_group', 'wcusp_settings');
}
add_action('admin_init', 'wcusp_register_settings');

