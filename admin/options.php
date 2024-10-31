<?php
// Add sub page to the Settings Menu
add_action('admin_menu', 'twb_settings');
add_action('admin_init', 'twb_settings_register' );
function twb_settings() {
	add_options_page( __('TWB Woocommerce Reviews Option Page', 'twb-wc-reviews'), __('TWB Woocommerce Reviews', 'twb-wc-reviews'), 'administrator', __FILE__, 'twb_wcr');
}
// Register our settings. Add the settings section, and settings fields
function twb_settings_register(){
	register_setting('twb_wc_reviews_settings', 'twb_wc_reviews_option', '' );
		add_settings_section('twb_section', __('Customize Layout', 'twb-wc-reviews'), 'twb_section_fn', __FILE__);		
		add_settings_field( 'twb_hide_pimg',  __('Hide Product Image?', 'twb-wc-reviews'),  'twb_hide_pimg_fn',  __FILE__,  'twb_section' );
		add_settings_field( 'twb_hide_pname',  __('Hide Product Name?', 'twb-wc-reviews'),  'twb_hide_pname_fn',  __FILE__,  'twb_section' );
		add_settings_field( 'twb_remove_p_link',  __('Remove Product link from title and image?', 'twb-wc-reviews'),  'twb_remove_p_link_fn',  __FILE__,  'twb_section' );
		add_settings_field('twb_hide_star', __('Hide Star Ratings?', 'twb-wc-reviews'), 'twb_hide_star_fn', __FILE__, 'twb_section');
		add_settings_field( 'twb_remove_review_link',  __('Remove link from review text?', 'twb-wc-reviews'),  'twb_remove_review_link_fn',  __FILE__,  'twb_section' );
		add_settings_field( 'twb_limit_review_txt',  __('Limit review text? (Number of words to show in each review)', 'twb-wc-reviews'),  'twb_limit_review_txt_fn',  __FILE__,  'twb_section' );
		add_settings_field( 'twb_hide_avatar',  __('Hide Review Author Avatar?', 'twb-wc-reviews'),  'twb_hide_vatar_fn',  __FILE__,  'twb_section' );
		add_settings_field('twb_hide_author', __('Hide Review Author Name?', 'twb-wc-reviews'), 'twb_hide_author_fn', __FILE__, 'twb_section');
		add_settings_field('twb_show_date', __('Display Review Date?', 'twb-wc-reviews'), 'twb_show_date_fn', __FILE__, 'twb_section');
		add_settings_field('twb_random_order', __('Randomize Comments Display?', 'twb-wc-reviews'), 'twb_random_order_fn', __FILE__, 'twb_section');
		add_settings_field('twb_wcr_layout', __('Select Layout', 'twb-wc-reviews'), 'twb_layout_select_fn', __FILE__, 'twb_section');
		add_settings_field('twb_wcr_slider_effect', __('Slider Effect', 'twb-wc-reviews'), 'twb_layout_slider_effect_fn', __FILE__, 'twb_section', array( 'class' => 'twb_slider' ));
		add_settings_field('twb_wcr_slider_speed', __('Slider/Fade Effect Speed (in milliseconds)', 'twb-wc-reviews'), 'twb_layout_slider_speed_fn', __FILE__, 'twb_section', array( 'class' => 'twb_slider' ));
		add_settings_field('twb_wcr_layout_col', __('Select Columns', 'twb-wc-reviews'), 'twb_layout_col_fn', __FILE__, 'twb_section', array( 'class' => 'twb_list' ));
		add_settings_field('twb_wcr_layout_ms_col', __('Masonry Columns', 'twb-wc-reviews'), 'twb_layout_ms_col_fn', __FILE__, 'twb_section', array( 'class' => 'twb_ms' ) );
		add_settings_field('twb_wcr_ms_gutter', __('Masonry Gutter Size', 'twb-wc-reviews'), 'twb_layout_ms_gutter_fn', __FILE__, 'twb_section', array( 'class' => 'twb_ms' ));
		add_settings_field('twb_wcr_ms_external_lib', __('Load External Masonry Library (leave unchecked if not sure)', 'twb-wc-reviews'), 'twb_wcr_ms_external_lib_fn', __FILE__, 'twb_section', array( 'class' => 'twb_ms' ));
		add_settings_field('twb_wcr_bgcolor', __('Background Color', 'twb-wc-reviews'), 'twb_bgcolor_fn', __FILE__, 'twb_section');
		add_settings_field('twb_wcr_txtcolor', __('Text Color', 'twb-wc-reviews'), 'twb_txtcolor_fn', __FILE__, 'twb_section');	
		add_settings_field('twb_wcr_custom_css', __('Custom CSS', 'twb-wc-reviews'), 'twb_custom_css_fn', __FILE__, 'twb_section');
}

function twb_section_fn() {
	echo'';	
}

function twb_hide_pimg_fn() {	
	
	$options = (array) get_option( 'twb_wc_reviews_option' ) ;

	if ( !isset( $options['twb_hide_pimg'] ) )

	$options['twb_hide_pimg'] = 0;

	echo'<input type="checkbox" id="'.esc_attr('twb_hide_pimg').'" name="'.esc_attr('twb_wc_reviews_option[twb_hide_pimg]').'" value="1" ' . checked(1, $options['twb_hide_pimg'], false) . '/>';
}

function twb_hide_pname_fn() {	
	
	$options = (array) get_option( 'twb_wc_reviews_option' ) ;

	if (!isset( $options['twb_hide_pname'] ) )
	$options['twb_hide_pname'] = 0;
 
	echo'<input type="checkbox" id="'.esc_attr('twb_hide_pname').'" name="'.esc_attr('twb_wc_reviews_option[twb_hide_pname]').'" value="1" ' . checked(1, $options['twb_hide_pname'], false) . '/>';
}

function twb_remove_p_link_fn() {	
	
	$options =  (array) get_option( 'twb_wc_reviews_option' ) ;
	
	if (!isset( $options['twb_remove_p_link'] )) 
  	$options['twb_remove_p_link'] = 0;
	
	echo'<input type="checkbox" id="'.esc_attr('twb_remove_p_link').'" name="'.esc_attr('twb_wc_reviews_option[twb_remove_p_link]').'" value="1" ' . checked(1, $options['twb_remove_p_link'], false) . '/>';
}

function twb_hide_vatar_fn() {	
	
	$options = (array) get_option( 'twb_wc_reviews_option' ) ;
	
	if (!isset( $options['twb_hide_avatar'] )) 
  	$options['twb_hide_avatar'] = 0;
	
	echo'<input type="checkbox" id="'.esc_attr('twb_hide_avatar').'" name="'.esc_attr('twb_wc_reviews_option[twb_hide_avatar]').'" value="1" ' . checked(1, $options['twb_hide_avatar'], false) . '/>';

}

function twb_hide_star_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;

	if (!isset( $options['twb_hide_star'] )) 
  	$options['twb_hide_star'] = 0;
	
	echo'<input type="checkbox" id="'.esc_attr('twb_hide_star').'" name="'.esc_attr('twb_wc_reviews_option[twb_hide_star]').'" value="1" ' . checked(1, $options['twb_hide_star'], false) . '/>';

}

function twb_remove_review_link_fn() {	
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;
	
	if (!isset( $options['twb_remove_review_link'] )) 
  	$options['twb_remove_review_link'] = 0;
	
	echo'<input type="checkbox" id="'.esc_attr('twb_remove_review_link').'" name="'.esc_attr('twb_wc_reviews_option[twb_remove_review_link]').'" value="1" ' . checked(1, $options['twb_remove_review_link'], false) . '/>';
}

function twb_limit_review_txt_fn() {	
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;
	
	if (!isset( $options['twb_limit_review_txt'] )) 
  	$options['twb_limit_review_txt'] = "";
	
	echo'<input type="number" id="'.esc_attr('twb_limit_review_txt').'" class="" name="'.esc_attr('twb_wc_reviews_option[twb_limit_review_txt]').'" value="'.intval($options['twb_limit_review_txt']). '" /> '.esc_html_e( 'Number Only - Leave Empty to display full review text.', 'twb-wc-reviews');

}

function twb_hide_author_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;

	if (!isset( $options['twb_hide_author'] )) 
  	$options['twb_hide_author'] = 0;
	
	echo'<input type="checkbox" id="'.esc_attr('twb_hide_author').'" name="'.esc_attr('twb_wc_reviews_option[twb_hide_author]').'" value="1" ' . checked(1, $options['twb_hide_author'], false) . '/>';

}

function twb_show_date_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;

	if (!isset( $options['twb_show_date'] )) 
  	$options['twb_show_date'] = 0;
	
	echo'<input type="checkbox" id="'.esc_attr('twb_show_date').'" name="'.esc_attr('twb_wc_reviews_option[twb_show_date]').'" value="1" ' . checked(1, $options['twb_show_date'], false) . '/>';

}

function twb_random_order_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;

	if (!isset( $options['twb_random_order'] )) 
  	$options['twb_random_order'] = 0;
	
	echo'<input type="checkbox" id="'.esc_attr('twb_random_order').'" name="'.esc_attr('twb_wc_reviews_option[twb_random_order]').'" value="1" ' . checked(1, $options['twb_random_order'], false) . '/> '.esc_html_e('Select this checkbox if you want to display comments in random order.', 'twb-wc-reviews');

}

function twb_layout_select_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;
	
	$items = array("Slider", "List", "Masonry" );
	
	if (!isset( $options['twb_wcr_layout'] )) 
  	$options['twb_wcr_layout'] = esc_attr('Slider');

	echo "<select id='".esc_attr('twb_wcr_layout')."' name='".esc_attr('twb_wc_reviews_option[twb_wcr_layout]')."'>";
	foreach($items as $item) {
		$selected = ($options['twb_wcr_layout']==$item) ? 'selected="selected"' : '';
		echo "<option id='$item' value='$item' $selected>$item</option>";
	}
	echo "</select>";
}

function twb_layout_slider_effect_fn() {
	
	$options =  (array) get_option( 'twb_wc_reviews_option' ) ;
	
	$items = array("Slide", "Fade" );
	
	if (!isset( $options['twb_wcr_slider_effect'] )) 
  	$options['twb_wcr_slider_effect'] = esc_attr('Slide');
	
	echo "<select id='".esc_attr('twb_wcr_slider_effect')."' class='' name='".esc_attr('twb_wc_reviews_option[twb_wcr_slider_effect]')."'>";
	foreach($items as $item) {
		$selected = ($options['twb_wcr_slider_effect']==$item) ? 'selected="selected"' : '';
		echo "<option value='$item' $selected>$item</option>";
	}
	echo "</select>";
	
	echo esc_html_e('(Only applicable if slider layout is selected)', 'twb-wc-reviews');

}

function twb_layout_slider_speed_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;
	
	if (!isset( $options['twb_wcr_slider_speed'] )) 
  	$options['twb_wcr_slider_speed'] = esc_attr('300');
	
	echo'<input type="number" id="'.esc_attr('twb_wcr_slider_speed').'" class="" name="'.esc_attr('twb_wc_reviews_option[twb_wcr_slider_speed]').'" value="'.intval( $options['twb_wcr_slider_speed'] ).'" />';
	
	echo esc_html_e('Default = 300 (Only applicable if slider layout is selected)', 'twb-wc-reviews');
	
}

function twb_layout_col_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;
	
	$items = array("One", "Two", "Three" );
	
	if (!isset( $options['twb_wcr_layout_col'] )) 
  	$options['twb_wcr_layout_col'] = esc_attr( 'One' );

	echo"<select id='".esc_attr('twb_wcr_layout_col')."' class='' name='".esc_attr('twb_wc_reviews_option[twb_wcr_layout_col]')."'>";
	foreach($items as $item) {
		$selected = ($options['twb_wcr_layout_col']==$item) ? 'selected="selected"' : '';
		echo "<option value='$item' $selected>$item</option>";
	}
	echo "</select>";
	echo esc_html_e('(Only applicable if List layout is selected)', 'twb-wc-reviews');

}

function twb_layout_ms_col_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;
	
	$items = array( "3", "2" );
	
	if (!isset( $options['twb_wcr_layout_ms_col'] )) 
  	$options['twb_wcr_layout_ms_col'] = esc_attr('3');

	echo"<select id='".esc_attr('twb_wcr_layout_ms_col')."' class='' name='".esc_attr('twb_wc_reviews_option[twb_wcr_layout_ms_col]')."'>";
	foreach($items as $item) {
		$selected = ($options['twb_wcr_layout_ms_col']==$item) ? 'selected="selected"' : '';
		echo "<option value='$item' $selected>$item</option>";
	}
	echo "</select>";
	echo esc_html_e('(Only applicable if Masonry layout is selected)', 'twb-wc-reviews');

}

function twb_layout_ms_gutter_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;
	
	if (!isset( $options['twb_wcr_ms_gutter'] )) 
  	$options['twb_wcr_ms_gutter'] = esc_attr('20');
	
	echo'<input type="number" id="'.esc_attr('twb_wcr_ms_gutter').'" class="" name="'.esc_attr('twb_wc_reviews_option[twb_wcr_ms_gutter]').'" value="'.intval( $options['twb_wcr_ms_gutter'] ). '" />';
	
	echo esc_html_e('Default = 20 (Only change if necessary.)', 'twb-wc-reviews');

}

function twb_wcr_ms_external_lib_fn() {	
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;
	
	if (!isset( $options['twb_wcr_ms_external_lib'] )) 
  	$options['twb_wcr_ms_external_lib'] = 0;
	
	echo'<input type="checkbox" id="'.esc_attr('twb_wcr_ms_external_lib').'" name="'.esc_attr('twb_wc_reviews_option[twb_wcr_ms_external_lib]').'" value="1" ' . checked(1, $options['twb_wcr_ms_external_lib'], false) . '/>';
	
	echo esc_html_e('Default is Disabled (Only check this box if wordpress masonry library not working.)', 'twb-wc-reviews');
}

function twb_bgcolor_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;
	
	if (!isset( $options['twb_wcr_bgcolor'] )) 
  	$options['twb_wcr_bgcolor'] = esc_attr( '#a6946e' );
	
	echo'<input type="text" id="'.esc_attr('twb_wcr_bgcolor').'" class="twb-color-picker" name="'.esc_attr('twb_wc_reviews_option[twb_wcr_bgcolor]').'" data-default-color="'.esc_attr('#a6946e').'" value="'.esc_attr($options['twb_wcr_bgcolor']).'" />';
}

function twb_txtcolor_fn() {
	
	$options =   (array) get_option( 'twb_wc_reviews_option' ) ;
	
	if (!isset( $options['twb_wcr_txtcolor'] )) 
  	$options['twb_wcr_txtcolor'] = esc_attr('#fff');

	echo'<input type="text" id="'.esc_attr('twb_wcr_txtcolor').'" class="twb-color-picker" name="'.esc_attr('twb_wc_reviews_option[twb_wcr_txtcolor]').'" data-default-color="'.esc_attr('#fff').'" value="'.esc_attr($options['twb_wcr_txtcolor']).'" />';
}

function twb_custom_css_fn() {
	
	$options =  (array) get_option( 'twb_wc_reviews_option' );
	
	if ( !isset( $options['twb_wcr_custom_css'] ) ) {
		$options['twb_wcr_custom_css'] = "";
	} else {
		echo'<div style="display:block;max-width:500px;min-height:100px;color:#bcbcbc;padding:10px;background-color:#fff;border:1px solid #ccc;">'.wp_strip_all_tags($options['twb_wcr_custom_css']).'</div>';
	}
	
	echo'<p style="color:red;">Security Update: This section is no longer supported for entering Custom CSS and will be removed in future updates. Please use Wordpress\'s default <a title="Add custom css here" href="customize.php">Custom CSS</a> section under Appearance > Customize > Additional CSS</p>';
}

// Display the admin options page
function twb_wcr() {
?>
<style type="text/css">
.twb_left_col, .twb_right_col {
	display: block;
}
.form-table th {
	min-width: 200px;
}
</style>
<script type="text/javascript">
	jQuery(document).ready(function($){   
		$('.twb_list, .twb_ms').hide();  
		
		$('#twb_wcr_layout').change(function(){
			if($('#twb_wcr_layout').val() == 'List' ) {
				$('.twb_list').show();
				$('.twb_slider, .twb_ms').hide();
				
			} else if($('#twb_wcr_layout').val() == 'Masonry' ) {
				
				$('.twb_ms').show();
				$('.twb_slider, .twb_list').hide();
				
			}else{
				$('.twb_slider').show();
				$('.twb_list, .twb_ms').hide();  
			} 
		});
	
		<?php
			$options =   get_option( 'twb_wc_reviews_option' );
			if(isset( $options['twb_wcr_layout']) ) {
				if($options['twb_wcr_layout'] == 'List') : ?>
					$('.twb_list').show();
					$('.twb_slider, .twb_ms').hide();				
			<?php endif; 
			if($options['twb_wcr_layout'] == 'Masonry') : ?>
				$('.twb_ms').show();
				$('.twb_slider, .twb_list').hide();				
			<?php endif; 
		}?>
	});
</script>

<div class="wrap">
  <div class="icon32" id="icon-options-general"><br>
  </div>
  <h2><?php echo esc_html_e('TWB Woocommerce Reviews', 'twb-wc-reviews'); ?></h2>
  <div class="" style="float:left; width: 70%; overflow:hidden; ">
    <form action="options.php" method="post" id="twb_form">
	<input style="float:right; margin-right:15px;" name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes', 'twb-wc-reviews'); ?>" />
      <?php settings_fields('twb_wc_reviews_settings'); ?>
      <?php do_settings_sections(__FILE__); ?>
	  <p class="submit">
        <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes', 'twb-wc-reviews'); ?>" />
      </p>
    </form>

	<div class="wrap">
		<div class="">
			<p class="submit"></p> 
			<h1><?php echo esc_html_e('Reset Defaults','twb-wc-reviews'); ?></h1>
			<form method="post" action="">
				<p><strong><?php echo esc_html_e('Click the button below to load Default Settings: (After resetting, refresh the page to load default values.)', 'twb-wc-reviews'); ?></strong></p> 
				<input type="hidden" name="action" value="twb_wcr_reset" />
				<input name="twb_wcr_reset" class="button button-secondary" type="submit" value="<?php esc_attr_e('Reset to default settings', 'twb-wc-reviews'); ?>" >
			</form>
		</div>
	</div>
	<?php 
		if( isset($_POST['twb_wcr_reset']) ) {
			delete_option('twb_wc_reviews_option');
			echo '<p style="color:red">Plugins settings have been reset. Please refresh the page to load default values.</p>';
		}
	?>
</div>

<div class="postbox" style="float:right; width: 25%; padding:10px;">
	<p>
		<strong>
			<a href="https://wordpress.org/support/view/plugin-reviews/twb-woocommerce-reviews" target="_blank">Rate This Plugin</a>
		</strong>
	</p>
	
	<p>
		<strong>
			<a href="https://wordpress.org/plugins/twb-woocommerce-reviews/" target="_blank">Read Documentaion</a>
		</strong>
	</p>

	<p>
		<strong>
			<a href="https://wordpress.org/support/plugin/twb-woocommerce-reviews/" target="_blank">Support Forum</a>
		</strong>
	</p>

	<p>
		<strong>
			<a href="https://wppatch.com/contact/" target="_blank">Need Extra Help? Contact here.</a>
		</strong>
	</p>
	
    <br />
    
	<p>
		<strong>Please Donate</strong>
	</p>
    
	<p>Please donate to keep this plugin updated and bugs free. It takes a lot of time and hard work to keep this plugin up to date and your donations really makes a difference. Thank you.</p>

    <p><a href="https://wppatch.com/plugins/" target="_blank">Click here to Donate.</a></p>
</div>

<div class="postbox" style="float:right; width: 25%; padding:10px;">
	<h1>Additional Services</h1>
	<h2 style="line-height:1.5;">Monthly WordPress Maintenance including WP/Plugins/Themes Updates, Cloud Backups, Security Setup, Speed Optimization and Analytics Installation.</h2>
	<h5>Only $50 per month per site.</h5>
	<h4><a href="https://wppatch.com/wmo/" target="_blank">Click here for more details.</a></h4>
</div>
</div>
<?php
}