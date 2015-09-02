<?php

/* Display a plugin update notice that can be dismissed.  This notice is displayed on all admin pages until dismissed. */
add_action('admin_notices', 'jwl_admin_notice_pro');
function jwl_admin_notice_pro() {
	global $current_user ;
		$user_id = $current_user->ID;
		/* Check that the user hasn't already clicked to ignore the message */
	if ( ! get_user_meta($user_id, 'jwl_ignore_notice_pro') ) {
		if ( current_user_can( 'manage_options' ) ) {
			if (jwl_is_my_plugin_screen()) {
				echo '<div class="updated" style="background-color:#FFFFE0 !important; border:1px solid #E6DB55 !important;"><p>';
				printf(__('<span style="font-weight: bold; color:#00BF0C !important;">Thank you for choosing Ultimate Tinymce.</span><br />Interested in checking out the features of the <a target="_blank" href="http://ultimatetinymcepro.com">PRO Version</a>?<span style="margin-left:5px;">Or... <a target="_blank" href="http://plugins.joshlobe.com/wp-content/plugins/wp-affiliate-platform/affiliates/">Become an Affiliate</a> and earn revenue from referrals.</span><br /><br /><a href="admin.php?page=ultimate-tinymce%1$s">Hide this Message</a>'), '&jwl_nag_ignore_pro=0');
				echo "</p></div>";
			}
		}
	}
}
add_action('admin_init', 'jwl_nag_ignore_pro');
function jwl_nag_ignore_pro() {
	global $current_user;
		$user_id = $current_user->ID;
		/* If user clicks to ignore the notice, add that to their user meta */
		if ( isset($_GET['jwl_nag_ignore_pro']) && '0' == $_GET['jwl_nag_ignore_pro'] ) {
			 add_user_meta($user_id, 'jwl_ignore_notice_pro', 'true', true);
	}
}
function jwl_is_my_plugin_screen() {  
    $screen = get_current_screen();  
    if (is_object($screen) && $screen->id == 'settings_page_ultimate-tinymce') {  
        return true;  
    } else {  
        return false;  
    }  
}

// Change our default Tinymce configuration values
function jwl_change_mce_options($initArray) {
	//$initArray['popup_css'] = plugin_dir_url( __FILE__ ) . 'css/popup.css';
	$initArray['theme_advanced_font_sizes'] = '6px=6px,8px=8px,10px=10px,12px=12px,14px=14px,16px=16px,18px=18px,20px=20px,22px=22px,24px=24px,28px=28px,32px=32px,36px=36px,40px=40px,44px=44px,48px=48px,52px=52px,62px=62px,72px=72px';
	$initArray['plugin_insertdate_dateFormat'] = '%B %d, %Y';  // added for inserttimedate proper format
	$initArray['plugin_insertdate_timeFormat'] = '%I:%M:%S %p';  // added for inserttimedate proper format
	//$initArray['nonbreaking_force_tab'] = true; // Enable tab key inserting three character blank spaces
	$initArray['wordpress_adv_hidden'] = false; // Always enable kitchen sink upon page refesh
	
		$options_kitchen_sink = get_option('jwl_options_group4');
		$jwl_kitchen = isset($options_kitchen_sink['jwl_tinymce_kitchen']);
		if ($jwl_kitchen == '1') {
			$initArray['wordpress_adv_hidden'] = true; // If user enabled option of hiding kitchen sink
		}
		
	    $options = get_option('jwl_options_group4');
		$jwl_content_css = isset($options['jwl_content_css']);
		if ($jwl_content_css == "1") {
			if (empty($initArray['content_css'])) {
				$initArray['content_css'] = plugin_dir_url( __FILE__ ) . 'css/content.css'; // Change default editor font and styles
			} else {
				$initArray['content_css'] .= ',' . plugin_dir_url( __FILE__ ) . 'css/content.css'; // Change default editor font and styles
			}
		}
	
	return $initArray;
}
add_filter('tiny_mce_before_init', 'jwl_change_mce_options');

// Set our language localization folder (used for adding translations)
function jwl_ultimate_tinymce() {
 load_plugin_textdomain('jwl-ultimate-tinymce', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'init', 'jwl_ultimate_tinymce' );

// Set languages for all tinymce addons
function jwl_add_mce_addon_langs( $arr )
{
    $arr['UltimateTinyMCE'] = WP_CONTENT_DIR . '/plugins/ultimate-tinymce/includes/mce_langs.php';
    return $arr;
}
add_filter( 'mce_external_languages', 'jwl_add_mce_addon_langs', 10, 1 );

// set field names for using custom fields in edit posts/pages admin panel.
function jwl_field_func($atts) {
   global $post;
   $name = $atts['name'];
   		if (empty($name)) return;
   return get_post_meta($post->ID, $name, true);
}
add_shortcode('field', 'jwl_field_func');

function register_options_button_group_one() {
	
	add_settings_section('jwl_setting_section1', '', 'jwl_setting_section_callback_function1', 'jwl_options_group1');
	
	// Register Settings for Button Group One
 	add_settings_field('jwl_fontselect_field_id', __('Font Select Button','jwl-ultimate-tinymce'), 'jwl_fontselect_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_fontsizeselect_field_id', __('Font Size Button','jwl-ultimate-tinymce'), 'jwl_fontsizeselect_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_cut_field_id', __('Cut Button','jwl-ultimate-tinymce'), 'jwl_cut_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_copy_field_id', __('Copy Button','jwl-ultimate-tinymce'), 'jwl_copy_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_paste_field_id', __('Paste Button','jwl-ultimate-tinymce'), 'jwl_paste_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_backcolorpicker_field_id', __('Background Color Picker Button','jwl-ultimate-tinymce'), 'jwl_backcolorpicker_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_forecolorpicker_field_id', __('Foreground Color Picker Button','jwl-ultimate-tinymce'), 'jwl_forecolorpicker_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_advhr_field_id', __('Horizontal Rule Button','jwl-ultimate-tinymce'), 'jwl_advhr_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_visualaid_field_id', __('Visual Aid Button','jwl-ultimate-tinymce'), 'jwl_visualaid_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_anchor_field_id', __('Anchor Button','jwl-ultimate-tinymce'), 'jwl_anchor_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_sub_field_id', __('Subscript Button','jwl-ultimate-tinymce'), 'jwl_sub_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_sup_field_id', __('Superscript Button','jwl-ultimate-tinymce'), 'jwl_sup_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_search_field_id', __('Search Button','jwl-ultimate-tinymce'), 'jwl_search_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_replace_field_id', __('Replace Button','jwl-ultimate-tinymce'), 'jwl_replace_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_datetime_field_id', __('Insert Date/Time Button','jwl-ultimate-tinymce'), 'jwl_datetime_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_nonbreaking_field_id', __('Insert Nonbreaking Button','jwl-ultimate-tinymce'), 'jwl_nonbreaking_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_mailto_field_id', __('Insert Mailto Button','jwl-ultimate-tinymce'), 'jwl_mailto_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_layers_field_id', __('Insert Layers Buttons','jwl-ultimate-tinymce'), 'jwl_layers_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_span_field_id', __('Insert Span Button','jwl-ultimate-tinymce'), 'jwl_span_callback_function', 'jwl_options_group1', 'jwl_setting_section1');
	add_settings_field('jwl_equation_field_id', __('Insert Equation Button','jwl-ultimate-tinymce'), 'jwl_equation_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_encode_field_id', __('Insert Encode/Decode Buttons','jwl-ultimate-tinymce'), 'jwl_encode_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_directionality_field_id', __('Insert Text Direction Buttons','jwl-ultimate-tinymce'), 'jwl_directionality_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_ezimage_field_id', __('EZ Image Button','jwl-ultimate-tinymce'), 'jwl_ezimage_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_ptags_field_id', __('Paragraph Tags Button','jwl-ultimate-tinymce'), 'jwl_ptags_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_mcelinebreak_field_id', __('Line Break Button','jwl-ultimate-tinymce'), 'jwl_mcelinebreak_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	
	// Register Settings for Button Group Two
	add_settings_field('jwl_styleselect_field_id', __('Style Select Button','jwl-ultimate-tinymce'), 'jwl_styleselect_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_tableDropdown_field_id', __('Table Controls Dropdown Button','jwl-ultimate-tinymce'), 'jwl_tableDropdown_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_emotions_field_id', __('Emotions Button','jwl-ultimate-tinymce'), 'jwl_emotions_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_image_field_id', __('Advanced Image Button','jwl-ultimate-tinymce'), 'jwl_image_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_preview_field_id', __('Preview Button','jwl-ultimate-tinymce'), 'jwl_preview_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_cite_field_id', __('Citations Button','jwl-ultimate-tinymce'), 'jwl_cite_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_abbr_field_id', __('Abbreviations Button','jwl-ultimate-tinymce'), 'jwl_abbr_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_acronym_field_id', __('Acronym Button','jwl-ultimate-tinymce'), 'jwl_acronym_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_del_field_id', __('Delete Button','jwl-ultimate-tinymce'), 'jwl_del_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_ins_field_id', __('Insert Button','jwl-ultimate-tinymce'), 'jwl_ins_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_attribs_field_id', __('Attributes Button','jwl-ultimate-tinymce'), 'jwl_attribs_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_styleprops_field_id', __('Styleprops Box','jwl-ultimate-tinymce'), 'jwl_styleprops_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_code_field_id', __('HTML Code Button','jwl-ultimate-tinymce'), 'jwl_code_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_codemagic_field_id', __('HTML Code Magic Button','jwl-ultimate-tinymce'), 'jwl_codemagic_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_html5_field_id', __('HTML5 Tags Button','jwl-ultimate-tinymce'), 'jwl_html5_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_media_field_id', __('Insert Media Button','jwl-ultimate-tinymce'), 'jwl_media_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_youtube_field_id', __('Insert YouTube Video Button','jwl-ultimate-tinymce'), 'jwl_youtube_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_youtubeIframe_field_id', __('Insert YouTubeIframe Video Button','jwl-ultimate-tinymce'), 'jwl_youtubeIframe_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_imgmap_field_id', __('Image Map Editor Button','jwl-ultimate-tinymce'), 'jwl_imgmap_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_visualchars_field_id', __('Toggle Visual Characters Button','jwl-ultimate-tinymce'), 'jwl_visualchars_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_print_field_id', __('Print Button','jwl-ultimate-tinymce'), 'jwl_print_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_shortcodes_field_id', __('Shortcodes Button','jwl-ultimate-tinymce'), 'jwl_shortcodes_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_loremipsum_field_id', __('Lorem Ipsum Button','jwl-ultimate-tinymce'), 'jwl_loremipsum_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_w3cvalidate_field_id', __('W3C Validate Button','jwl-ultimate-tinymce'), 'jwl_w3cvalidate_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_clker_field_id', __('Cliker ClipArt','jwl-ultimate-tinymce'), 'jwl_clker_callback_function', 'jwl_options_group1', 'jwl_setting_section1'); 
	add_settings_field('jwl_acheck_field_id', __('Accessibility Checker','jwl-ultimate-tinymce'), 'jwl_acheck_callback_function', 'jwl_options_group1', 'jwl_setting_section1');
	add_settings_field('jwl_advlink_field_id', __('Advanced Link Button','jwl-ultimate-tinymce'), 'jwl_advlink_callback_function', 'jwl_options_group1', 'jwl_setting_section1');
	add_settings_field('jwl_div_field_id', __('Clear Div Buttons','jwl-ultimate-tinymce'), 'jwl_div_callback_function', 'jwl_options_group1', 'jwl_setting_section1');
	add_settings_field('jwl_nextpage_field_id', __('Enable NextPage (PageBreak) Button','jwl-ultimate-tinymce'), 'jwl_nextpage_callback_function', 'jwl_options_group1', 'jwl_setting_section1');
	
	register_setting('jwl_options_group1','jwl_options_group1');
	
}
add_action('admin_init', 'register_options_button_group_one');

function register_options_misc_features() {
	
	add_settings_section('jwl_setting_section3', '', 'jwl_setting_section_callback_function3', 'jwl_options_group3');
	
	// Register Settings for Miscellaneous Features
	add_settings_field('jwl_tinycolor_css_field_id', __('Change the color of the Editor','jwl-ultimate-tinymce'), 'jwl_tinycolor_css_callback_function', 'jwl_options_group3', 'jwl_setting_section3');
	add_settings_field('jwl_postid_field_id', __('Add ID Column to page/post admin list','jwl-ultimate-tinymce'), 'jwl_postid_callback_function', 'jwl_options_group3', 'jwl_setting_section3'); 
	add_settings_field('jwl_shortcode_field_id', __('Allow shortcode usage in widget text areas','jwl-ultimate-tinymce'), 'jwl_shortcode_callback_function', 'jwl_options_group3', 'jwl_setting_section3'); 
	add_settings_field('jwl_php_widget_field_id', __('Use PHP Text Widget','jwl-ultimate-tinymce'), 'jwl_php_widget_callback_function', 'jwl_options_group3', 'jwl_setting_section3'); 
	add_settings_field('jwl_linebreak_field_id', __('Enable Line Break Shortcode','jwl-ultimate-tinymce'), 'jwl_linebreak_callback_function', 'jwl_options_group3', 'jwl_setting_section3'); 
	add_settings_field('jwl_columns_field_id', __('Enable Columns Shortcodes','jwl-ultimate-tinymce'), 'jwl_columns_callback_function', 'jwl_options_group3', 'jwl_setting_section3');
	add_settings_field('jwl_autop_field_id', __('Disable wpautop','jwl-ultimate-tinymce'), 'jwl_autop_callback_function', 'jwl_options_group3', 'jwl_setting_section3'); 
	add_settings_field('jwl_remove_pbr_field_id', __('Remove <b>p</b> and <b>br</b> quicktags','jwl-ultimate-tinymce'), 'jwl_remove_pbr_callback_function', 'jwl_options_group3', 'jwl_setting_section3');
	add_settings_field('jwl_cursor_field_id', __('Save scrollbar position in editor','jwl-ultimate-tinymce'), 'jwl_cursor_callback_function', 'jwl_options_group3', 'jwl_setting_section3'); 
	add_settings_field('jwl_signoff_field_id', __('Add a Signoff Shortcode','jwl-ultimate-tinymce'), 'jwl_signoff_callback_function', 'jwl_options_group3', 'jwl_setting_section3'); 
	
	register_setting('jwl_options_group3','jwl_options_group3');
}
add_action('admin_init', 'register_options_misc_features');

function register_options_admin() {
	
	add_settings_section('jwl_setting_section4', '', 'jwl_setting_section_callback_function4', 'jwl_options_group4');
	
	// Register Settings for Admin Options
	add_settings_field('jwl_dev_support', __('Support the Developer','jwl-ultimate-tinymce'), 'jwl_dev_support_callback_function', 'jwl_options_group4', 'jwl_setting_section4');  
	add_settings_field('jwl_tinymce_user_role', '<a target="_blank" href="http://ultimatetinymcepro.com/wiki/select_editor_user_role">'.__('Select Editor User Role','jwl-ultimate-tinymce').'</a>', 'jwl_tinymce_user_role_callback_function', 'jwl_options_group4', 'jwl_setting_section4');
	add_settings_field('jwl_menu_location', __('Change the Ultimate Tinymce Menu Location','jwl-ultimate-tinymce'), 'jwl_menu_location_callback_function', 'jwl_options_group4', 'jwl_setting_section4');  
	add_settings_field('jwl_tinymce_add_stylesheet', __('Load editor-style.css file','jwl-ultimate-tinymce'), 'jwl_tinymce_add_stylesheet_callback_function', 'jwl_options_group4', 'jwl_setting_section4');  
	add_settings_field('jwl_tinymce_add_widgets', '<a target="_blank" href="http://ultimatetinymcepro.com/wiki/creating_widgets">'.__('Enable Ultimate Tinymce Widget Builder','jwl-ultimate-tinymce').'</a>', 'jwl_tinymce_add_widgets_callback_function', 'jwl_options_group4', 'jwl_setting_section4');  
	add_settings_field('jwl_tinymce_add_context_menu', '<a target="_blank" href="http://ultimatetinymcepro.com/wiki/enabling_context_menu">'.__('Enable Editor Context Menu','jwl-ultimate-tinymce').'</a>', 'jwl_tinymce_add_context_menu_callback_function', 'jwl_options_group4', 'jwl_setting_section4');  
	add_settings_field('jwl_tinymce_custom_users', '<a target="_blank" href="http://ultimatetinymcepro.com/wiki/user_specific_options">'.__('Enable Custom User Settings','jwl-ultimate-tinymce').'</a>', 'jwl_tinymce_custom_users_callback_function', 'jwl_options_group4', 'jwl_setting_section4');  
	add_settings_field('jwl_tinymce_excerpt', __('Enable Ultimate Tinymce Excerpt (Posts)','jwl-ultimate-tinymce'), 'jwl_tinymce_excerpt_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_tinymce_excerpt_page', __('Enable Ultimate Tinymce Excerpt (Pages)','jwl-ultimate-tinymce'), 'jwl_tinymce_excerpt_page_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_tinymce_post_revisions', '<a target="_blank" href="http://ultimatetinymcepro.com/wiki/set_max_post_revisions">'.__('Set Max Post Revisions','jwl-ultimate-tinymce').'</a>', 'jwl_post_revisions_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_tinymce_page_revisions', '<a target="_blank" href="http://ultimatetinymcepro.com/wiki/set_max_page_revisions">'.__('Set Max Page Revisions','jwl-ultimate-tinymce').'</a>', 'jwl_page_revisions_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_tinymce_rev_deletions', '<a target="_blank" href="http://ultimatetinymcepro.com/wiki/delete_database_revisions">'.__('Delete All Revisions','jwl-ultimate-tinymce').'</a>', 'jwl_del_revisions_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_hide_html_tab', __('Disable content editor TEXT tab','jwl-ultimate-tinymce'), 'jwl_hide_html_tab_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_dashboard_widget', __('Enable dashboard widget','jwl-ultimate-tinymce'), 'jwl_dashboard_widget_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_admin_bar_link', __('Enable admin bar link','jwl-ultimate-tinymce'), 'jwl_admin_bar_link_callback_function', 'jwl_options_group4', 'jwl_setting_section4');  
	add_settings_field('jwl_hide_posts_list', '<a target="_blank" href="http://ultimatetinymcepro.com/wiki/hide_admin_posts">'.__('Hide Selected Posts','jwl-ultimate-tinymce').'</a>', 'jwl_hide_posts_list_callback_function', 'jwl_options_group4', 'jwl_setting_section4');  
	add_settings_field('jwl_hide_pages_list', '<a target="_blank" href="http://ultimatetinymcepro.com/wiki/hide_admin_pages">'.__('Hide Selected Pages','jwl-ultimate-tinymce').'</a>', 'jwl_hide_pages_list_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_content_css', __('Enable content.css file','jwl-ultimate-tinymce'), 'jwl_content_css_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_disable_styles', __('Disable all plugin "beautifications"','jwl-ultimate-tinymce'), 'jwl_disable_styles_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_tinymce_refresh', __('Disable "force" refresh of tinymce','jwl-ultimate-tinymce'), 'jwl_tinymce_refresh_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_tinymce_kitchen', __('Disable "force" open kitchen sink','jwl-ultimate-tinymce'), 'jwl_tinymce_kitchen_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_qr_code', __('Enable QR (Quick Response) code on posts','jwl-ultimate-tinymce'), 'jwl_qr_code_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_qr_code_pages', __('Enable QR (Quick Response) code on pages','jwl-ultimate-tinymce'), 'jwl_qr_code_pages_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_qr_code_text', __(' ','jwl-ultimate-tinymce'), 'jwl_qr_code_text_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_qr_code_bg', __(' ','jwl-ultimate-tinymce'), 'jwl_qr_code_bg_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_qr_code_bg_main', __(' ','jwl-ultimate-tinymce'), 'jwl_qr_code_bg_main_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	add_settings_field('jwl_qr_code_content', __(' ','jwl-ultimate-tinymce'), 'jwl_qr_code_content_callback_function', 'jwl_options_group4', 'jwl_setting_section4'); 
	
	register_setting('jwl_options_group4','jwl_options_group4');
}
add_action('admin_init', 'register_options_admin');

function register_options_tinymce() {
	
	add_settings_section('jwl_setting_section8', '', 'jwl_setting_section_callback_function8', 'jwl_options_group8');
	
	// Register Settings for Tinymce Overrides
	add_settings_field('jwl_tinymce_modifications', __('Enable Over-Rides','jwl-ultimate-tinymce'), 'jwl_tinymce_modifications_callback_function', 'jwl_options_group8', 'jwl_setting_section8'); 
	add_settings_field('jwl_tinymce_background_color', __('Tinymce Background Color','jwl-ultimate-tinymce'), 'jwl_tinymce_background_color_callback_function', 'jwl_options_group8', 'jwl_setting_section8'); 
	add_settings_field('jwl_tinymce_font_color', __('Tinymce Font Color','jwl-ultimate-tinymce'), 'jwl_tinymce_font_color_callback_function', 'jwl_options_group8', 'jwl_setting_section8'); 
	add_settings_field('jwl_tinymce_fontsize', __('Tinymce Font Size','jwl-ultimate-tinymce'), 'jwl_tinymce_fontsize_callback_function', 'jwl_options_group8', 'jwl_setting_section8'); 
	add_settings_field('jwl_tinymce_font', __('Tinymce Default Font','jwl-ultimate-tinymce'), 'jwl_tinymce_font_callback_function', 'jwl_options_group8', 'jwl_setting_section8'); 
	add_settings_field('jwl_tinymce_lineheight', __('Tinymce Line Height','jwl-ultimate-tinymce'), 'jwl_tinymce_lineheight_callback_function', 'jwl_options_group8', 'jwl_setting_section8'); 
	add_settings_field('jwl_tinymce_direction', __('Tinymce Text Direction','jwl-ultimate-tinymce'), 'jwl_tinymce_direction_callback_function', 'jwl_options_group8', 'jwl_setting_section8'); 
	add_settings_field('jwl_tinymce_padding', __('Tinymce Padding','jwl-ultimate-tinymce'), 'jwl_tinymce_padding_callback_function', 'jwl_options_group8', 'jwl_setting_section8'); 
	add_settings_field('jwl_tinymce_margin', __('Tinymce Margin','jwl-ultimate-tinymce'), 'jwl_tinymce_margin_callback_function', 'jwl_options_group8', 'jwl_setting_section8');
	
	register_setting('jwl_options_group8','jwl_options_group8');
}
add_action('admin_init', 'register_options_tinymce');

?>