<?php

// Option to load plugin defaults
if ( isset( $_POST['load_defaults'], $_POST['load_defaults_confirm'] ) ) {
    ultimate_tinymce_load_defaults();
}

function ultimate_tinymce_load_defaults() {
	
	$options = get_option('jwl_options_group1');
		$options['jwl_fontselect_field_id'] = '1';
		$options['jwl_fontsizeselect_field_id'] = '1';
		$options['jwl_cut_field_id'] = '1';
		$options['jwl_copy_field_id'] = '1';
		$options['jwl_paste_field_id'] = '1';
		$options['jwl_backcolorpicker_field_id'] = '1';
		$options['jwl_forecolorpicker_field_id'] = '1';
		$options['jwl_advhr_field_id'] = '1';
		$options['jwl_visualaid_field_id'] = '1';
		$options['jwl_anchor_field_id'] = '1';
		$options['jwl_sub_field_id'] = '1';
		$options['jwl_sup_field_id'] = '1';
		$options['jwl_search_field_id'] = '1';
		$options['jwl_replace_field_id'] = '1';
		$options['jwl_datetime_field_id'] = '1';
		$options['jwl_nonbreaking_field_id'] = '1';
		$options['jwl_mailto_field_id'] = '1';
		$options['jwl_layers_field_id'] = '1';
		$options['jwl_span_field_id'] = '1';
		$options['jwl_equation_field_id'] = '1';
		$options['jwl_encode_field_id'] = '1';
		$options['jwl_directionality_field_id'] = '1';
		$options['jwl_ezimage_field_id'] = '1';
		$options['jwl_ptags_field_id'] = '1';
		$options['jwl_mcelinebreak_field_id'] = '1';
		
		
		$options['jwl_styleselect_field_id'] = '1';
		$options['jwl_tableDropdown_field_id'] = '1';
		$options['jwl_emotions_field_id'] = '1';
		$options['jwl_image_field_id'] = '1';
		$options['jwl_preview_field_id'] = '1';
		$options['jwl_cite_field_id'] = '1';
		$options['jwl_abbr_field_id'] = '1';
		$options['jwl_acronym_field_id'] = '1';
		$options['jwl_del_field_id'] = '1';
		$options['jwl_ins_field_id'] = '1';
		$options['jwl_attribs_field_id'] = '1';
		$options['jwl_styleprops_field_id'] = '1';
		$options['jwl_code_field_id'] = '1';
		$options['jwl_codemagic_field_id'] = '1';
		$options['jwl_html5_field_id'] = '1';
		$options['jwl_media_field_id'] = '1';
		$options['jwl_youtube_field_id'] = '1';
		$options['jwl_youtubeIframe_field_id'] = '1';
		$options['jwl_imgmap_field_id'] = '1';
		$options['jwl_visualchars_field_id'] = '1';
		$options['jwl_print_field_id'] = '1';
		$options['jwl_shortcodes_field_id'] = '1';
		$options['jwl_loremipsum_field_id'] = '1';
		$options['jwl_w3cvalidate_field_id'] = '1';
		$options['jwl_clker_field_id'] = '1';
		$options['jwl_acheck_field_id'] = '1';
		$options['jwl_advlink_field_id'] = '1';
		$options['jwl_div_field_id'] = '1';
		$options['jwl_nextpage_field_id'] = '1';
		
		
		
		
		$options['jwl_fontselect_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_fontsizeselect_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_cut_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_copy_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_paste_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_backcolorpicker_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_forecolorpicker_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_advhr_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_visualaid_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_anchor_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_sub_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_sup_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_search_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_replace_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_datetime_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_nonbreaking_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_mailto_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_layers_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_span_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_equation_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_encode_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_directionality_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_ezimage_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_ptags_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		$options['jwl_mcelinebreak_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 3";}');
		
		$options['jwl_styleselect_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_tableDropdown_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_emotions_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_image_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_preview_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_cite_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_abbr_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_acronym_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_del_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_ins_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_attribs_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_styleprops_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_code_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_codemagic_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_html5_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_media_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_youtube_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_youtubeIframe_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_imgmap_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_visualchars_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_print_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_shortcodes_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_loremipsum_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_w3cvalidate_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_clker_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_acheck_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_advlink_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_div_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');
		$options['jwl_nextpage_dropdown'] = unserialize('a:1:{s:3:"row";s:5:"Row 4";}');

		
	$options3 = get_option('jwl_options_group3');
		$options3['jwl_tinycolor_css_field_id'] = unserialize('a:1:{s:9:"tinycolor";s:7:"Default";}');
		$options3['jwl_signoff_field_id'] = 'This is a signoff example.';
		$options3['jwl_shortcode_field_id'] = '1';
		$options3['jwl_php_widget_field_id'] = '1';
		$options3['jwl_columns_field_id'] = '1';
		
	$options4 = get_option('jwl_options_group4');
		$options4['jwl_dashboard_widget'] = '1';
		$options4['jwl_admin_bar_link'] = '1';
		$options4['jwl_tinymce_excerpt'] = '1';
		$options4['jwl_dev_credit'] = '1';
		
		//$options['jwl_dashboard_options'] = unserialize('a:1:{s:28:"jwl_tinymce_dashboard_widget";a:1:{s:5:"items";i:5;}}');
	
	update_option('jwl_options_group1', $options);
	//update_option('jwl_options_group2', $options2);
	update_option('jwl_options_group3', $options3);
	update_option('jwl_options_group4', $options4);
}

function jwl_ultimate_tinymce_load_defaults() {
	?>
    <span class="content_wrapper_title"><?php _e('Load Default Settings','jwl-ultimate-tinymce'); ?></span><br /><br />
    <form method="post">
	<input id="defaults" name="defaults" type="hidden" value="ultimate-tinymce/main.php" /> <?php  // The value must match the folder/file of the plugin.
    if ( isset( $_POST['load_defaults'] ) && ! isset( $_POST['load_defaults_confirm'] ) ) { 
	?><div id="message" class="error">
  			<p><?php _e('You must also check the confirm box before default options will be loaded.','jwl-ultimate-tinymce'); ?></p>
		</div>
 	  <?php
    }
	
	?>
    <div stlye="width:100%">
        <div style="display:block;float:left;width:60%;"><?php
        _e('Basically, two additional rows will be added to the editor (rows 3 and 4).  Each with approximately 15 to 19 buttons. Options are still freely customizable, and can be tweaked after default settings are loaded. Remember you might need to click the "show/hide kitchen sink" button in row 1 of your editor to expand row 2 buttons.','jwl-ultimate-tinymce'); ?>
        </div>
        <div style="display:block;float:left;width:30%;margin-left:40px;">
        <input name="load_defaults_confirm" id="load_defaults_confirm" type="checkbox" value="1" /><label for="load_defaults_confirm"></label> <?php _e('<b>Please confirm before proceeding</b><br /><br />','jwl-ultimate-tinymce'); ?>
        <input class="button-primary" name="load_defaults" type="submit" value="<?php _e('Load Defaults','jwl-ultimate-tinymce'); ?>" />
        </form>
        </div>
    </div>
<?php
}

// admin notice for not verifying to load defaults
if ( isset( $_POST['load_defaults'] ) && ! isset( $_POST['load_defaults_confirm'] ) ) {
	function jwl_top_admin_load_defaults_notice() {
		echo '<div id="message" class="error"><p>';
		_e('You must also check the confirm box before default options will be loaded.','jwl-ultimate-tinymce');
    	echo '</p></div>';
	}
	add_action('admin_notices','jwl_top_admin_load_defaults_notice');
}
?>