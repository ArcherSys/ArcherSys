<?php
/**
 * @package Ultimate TinyMCE
 * @version 5.7
 */
/*
Plugin Name: Ultimate TinyMCE
Plugin URI: http://www.plugins.joshlobe.com/
Description: Beef up your visual tinymce editor with a plethora of advanced options.
Author: Josh Lobe
Version: 5.7
Author URI: http://joshlobe.com

*/

/*  Copyright 2011  Josh Lobe  (email : joshlobe@joshlobe.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details and information.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//********************************************************************************************
//
// Check WP version... and alert user to switch to WP Edit
//
//********************************************************************************************

		
function alert_user_switch_wpedit_admin_notice() {
	
	global $current_user;
	$user_id = $current_user->ID;
	if(!get_user_meta($user_id, 'switch_utmce_to_wpep')) {
	
		echo '<div class="error"><p>';
		echo 'The Ultimate Tinymce plugin is becoming outdated.  Please consider switching to <a title="WP Edit" target="_blank" href="https://wordpress.org/plugins/wp-edit/">WP Edit</a>.';
		echo '<br />';
		echo 'WP Edit is the successor to Ultimate Tinymce.';
		echo '<br /><br />';
		echo 'Please deactivate and delete Ultimate Tinymce; then download and activate WP Edit.';
		echo '<br />';
		echo 'If any issues are experienced during the transition, support is offered on the <a title="WP Edit Support" target="_blank" href="https://wordpress.org/support/plugin/wp-edit">WP Edit Support Page</a>.';
		echo '</p><p>';
		echo 'Alternatively, please visit the <a title="WP Edit Pro" target="_blank" href="https://wpeditpro.com">WP Edit PRO</a> website.';
		echo '<br />';
		echo 'WP Edit PRO offers additional, powerful enhancements over the free version.';
		echo '<br /><br />';
		printf(__('<a href="%1$s">Hide Notice</a>'), '?switch_wpep_hide_notice=0');
		echo '</p></div>';
	}
}
add_action('admin_notices', 'alert_user_switch_wpedit_admin_notice');

function switch_wpep_hide_notice() {
	
	global $current_user;
	$user_id = $current_user->ID;
	if(isset($_GET['switch_wpep_hide_notice']) && $_GET['switch_wpep_hide_notice'] == '0') {
		
		add_user_meta($user_id, 'switch_utmce_to_wpep', 'true', true);
	}
}
add_action('admin_init', 'switch_wpep_hide_notice');



include WP_CONTENT_DIR . '/plugins/ultimate-tinymce/admin_functions.php';
include WP_CONTENT_DIR . '/plugins/ultimate-tinymce/options_functions.php';
include WP_CONTENT_DIR . '/plugins/ultimate-tinymce/options_callback_functions.php';
include WP_CONTENT_DIR . '/plugins/ultimate-tinymce/includes/defaults.php';
include WP_CONTENT_DIR . '/plugins/ultimate-tinymce/includes/import_export.php';

//
//
// Let's fix the BBPress issue with tinymce set to "teeny"
/*
******************************************************
Used for BBPress.  Editor breaks in BBPress otherwise.
******************************************************
*/
function jwl_ult_bbpress_mceallow( $args = array() ) {
    $args['teeny'] = false;
    return $args;
}
add_filter( 'bbp_after_get_the_content_parse_args', 'jwl_ult_bbpress_mceallow' );

// Let's check for options which throw errors if not set... If they are not set, let's set them!
// Check if tinycolor (used for changing color of post/page editor) is empty.. if so, set to true
$options_mce_css = get_option('jwl_options_group3');
$options_empty_mce_css = isset($options_mce_css['jwl_tinycolor_css_field_id']['tinycolor']);
if (empty($options_empty_mce_css)) {	
	$opts_mce_css = get_option('jwl_options_group3');	
	$opts_mce_css['jwl_tinycolor_css_field_id']['tinycolor'] = 'Default';
	update_option('jwl_options_group3', $opts_mce_css);
}
$options_menu_location = get_option('jwl_options_group4');
$options_empty_menu_location = isset($options_menu_location['jwl_menu_location']);
if (empty($options_empty_menu_location)) {	
	$opts_menu_location = get_option('jwl_options_group4');	
	$opts_menu_location['jwl_menu_location'] = 'Main';
	update_option('jwl_options_group4', $opts_menu_location);
}
$options_tmce_ur = get_option('jwl_options_group4');
$options_empty_tmce_ur = isset($options_tmce_ur['jwl_tinymce_user_role']);
if (empty($options_empty_tmce_ur)) {	
	$opts_tmce_ur = get_option('jwl_options_group4');	
	$opts_tmce_ur['jwl_tinymce_user_role'] = 'Administrator';
	update_option('jwl_options_group4', $opts_tmce_ur);
}

//  Add settings link to plugins page menu
//  This can be duplicated to add multiple links
function jwl_add_ultimatetinymce_settings_link($links, $file) {
	static $this_plugin;
	if (!$this_plugin) $this_plugin = plugin_basename(__FILE__);
		if ($file == $this_plugin){
			
			$loc = get_option('jwl_options_group4');
			$get_loc = $loc['jwl_menu_location'];
			
			switch ($get_loc)
			 {
			 case "Main":
			 $act_loc = 'admin.php?page=ultimate-tinymce';
			   break;
			 case "Appearance":
			 $act_loc = 'themes.php?page=ultimate-tinymce';
			   break;
			 case "Tools":
			 $act_loc = 'tools.php?page=ultimate-tinymce';
			   break;
			 case "Settings":
			 $act_loc = 'options-general.php?page=ultimate-tinymce';
			   break;
			 default:
			 $act_loc = 'admin.php?page=ultimate-tinymce';
			   break;
			 } 
			
			$settings_link = '<a href="'.$act_loc.'" title="Plugin Settings Page">'.__("Settings",'jwl-ultimate-tinymce').'</a>';
			$settings_link2 = '<a href="http://forum.joshlobe.com/member.php?action=register&referrer=1" title="Dedicated Ultimate Tinymce Free Support Forum">'.__("Support Forum",'jwl-ultimate-tinymce').'</a>';
			array_unshift($links, $settings_link, $settings_link2);
		}
	return $links;
}
add_filter('plugin_action_links', 'jwl_add_ultimatetinymce_settings_link', 10, 2 );

// Change the CSS for active plugin on admin plugins page
function jwl_admin_style() {
	global $pagenow;
	if ($pagenow == "plugins.php") {
		require('includes/style.php');
	}
}
add_action('admin_print_styles', 'jwl_admin_style');
// Remove the styles if option is selected
$options = get_option('jwl_options_group4');
$jwl_pluginslist = isset($options['jwl_disable_styles']);
if ($jwl_pluginslist == "1"){
	remove_action('admin_print_styles', 'jwl_admin_style');
}

// Donate link on manage plugin page
function jwl_execphp_donate_link($links, $file) { 
	if ($file == plugin_basename(__FILE__)) { 
		$donate_link = '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=A9E5VNRBMVBCS" target="_blank" title="Donate via Paypal">Donate</a>'; 
		$addons_link = '<a target="_blank" href="http://www.plugins.joshlobe.com" title="View Premium Ultimate Tinymce Addons">Premium Addons</a>';
		$support_link = '<a target="_blank" href="http://forum.joshlobe.com/member.php?action=register&referrer=1" class="jwl_support" title="Dedicated Ultimate Tinymce Free Support Forum"></a>';
		$fbook_link = '<a target="_blank" href="http://www.facebook.com/joshlobe" class="jwl_fbook" title="Connect with me on Facebook"></a>';
		$twitter_link = '<a target="_blank" href="http://twitter.com/#!/joshlobe" class="jwl_twitt" title="Follow me on twitter"></a>';
		$ultimate_pro = '<span style="margin-left:20px;"><a target="_blank" href="http://ultimatetinymcepro.com">Ultimate Tinymce PRO</a></span>';
			$options = get_option('jwl_options_group4');
			$jwl_pluginslinks = isset($options['jwl_pluginslist_css']);
			if ($jwl_pluginslinks == "0"){
				$links[] = $donate_link . ' | ' . $addons_link . ' | ' . $support_link . ' | ' . $fbook_link . ' | ' . $twitter_link . $ultimate_pro; 
			}
	} 
	return $links; 
} add_filter('plugin_row_meta', 'jwl_execphp_donate_link', 10, 2);
// Remove Donate Links if option is selected
$options_remove_donate = get_option('jwl_options_group4');
$jwl_remove_donate = isset($options_remove_donate['jwl_disable_styles']);
if ($jwl_remove_donate == "1"){
	remove_filter('plugin_row_meta', 'jwl_execphp_donate_link', 10, 2);
}

/*
 * Here we are generating the admin options page.
 * This will allow us to include all scripts and code to mimic the main dashboard admin page.
*/
// Avoid direct calls to this file where wp core files not present
if (!function_exists ('add_action')) {
		header('Status: 403 Forbidden');
		header('HTTP/1.1 403 Forbidden');
		exit();
}

define('JWL_ADMIN_PAGE_NAME', 'ultimate-tinymce');

//class that reperesents the plugins complete admin options page.
class jwl_metabox_admin {

		//constructor of class, PHP4 compatible construction for backward compatibility
		function jwl_metabox_admin() {
			//register callback for admin menu  setup
			add_action('admin_menu', array(&$this, 'jwl_on_admin_menu')); 
			//register the callback been used if options of page been submitted and needs to be processed
			add_action('admin_post_save_ultimate-tinymce-general', array(&$this, 'jwl_on_save_changes'));
		}
		
		
		//extend the admin menu
		function jwl_on_admin_menu() {
			//add our own option page, you can also add it to different sections or use your own one
			$options = get_option('jwl_options_group4');
			if (isset($options['jwl_menu_location'])) {
				$location = $options['jwl_menu_location'];
			} else {
				$location = 'Main';
			}
			switch ($location)
			 {
			 case "Appearance":
			   $this->pagehook = add_submenu_page( 'themes.php', __('Ultimate TinyMCE','jwl-ultimate-tinymce'), __('Ultimate TinyMCE','jwl-ultimate-tinymce'), 'manage_options', JWL_ADMIN_PAGE_NAME, array(&$this, 'jwl_options_page') );
			   break;
			 case "Tools":
			   $this->pagehook = add_submenu_page( 'tools.php', __('Ultimate TinyMCE','jwl-ultimate-tinymce'), __('Ultimate TinyMCE','jwl-ultimate-tinymce'), 'manage_options', JWL_ADMIN_PAGE_NAME, array(&$this, 'jwl_options_page') );
			   break;
			 case "Settings":
			   $this->pagehook = add_submenu_page( 'options-general.php', __('Ultimate TinyMCE','jwl-ultimate-tinymce'), __('Ultimate TinyMCE','jwl-ultimate-tinymce'), 'manage_options', JWL_ADMIN_PAGE_NAME, array(&$this, 'jwl_options_page') );
			   break;
			 default:
			   $this->pagehook = add_menu_page('Ultimate TinyMCE Plugin Page',  __('Ultimate TinyMCE','jwl-ultimate-tinymce'), 'manage_options', JWL_ADMIN_PAGE_NAME, array(&$this, 'jwl_options_page'));
			 }
			
			//register  callback gets call prior your own page gets rendered
			
			add_action('load-'.$this->pagehook, array(&$this, 'jwl_on_load_page'));
			add_action("load-{$this->pagehook}",array(&$this,'jwl_help_screen'));
			add_action('admin_print_styles-'.$this->pagehook, array(&$this, 'jwl_admin_register_head_styles'));
			add_action('admin_print_scripts-'.$this->pagehook, array(&$this, 'jwl_admin_register_head_scripts'));
		}
		
		function jwl_restart_tour() {
			if (isset ($_POST['jwl_tour_submit'])) {
				$user_id = get_current_user_id ();
				$dismissed = explode (',', get_user_meta ($user_id, 'dismissed_wp_pointers', true));
				$key = array_search ('jwl_utmce_pointer', $dismissed);
				if ($key !== false) {
					unset ($dismissed[$key]);
					update_user_meta ($user_id, 'dismissed_wp_pointers', implode (',', $dismissed));
				}
            }
		}
		
			
		// Register (and Enqueue) our styles only for admin settings page
		function jwl_admin_register_head_styles() {
    		wp_register_style('jwl-admin-panel-css', plugins_url('css/admin_panel.css', __FILE__), array(), '1.0.0', 'all');  // CSS for admin panel presentation
    		wp_enqueue_style('jwl-admin-panel-css');
			echo "<link href='http://fonts.googleapis.com/css?family=Unlock' rel='stylesheet' type='text/css'>"; // Added for title font
		}
		// Register our scripts only for admin settings page
		function jwl_admin_register_head_scripts() {			
			wp_register_script('jwl-color-picker', plugin_dir_url( __FILE__ ) . 'js/jscolor/jscolor.js', array(), '1.0.0', 'all' );  // Javascript color picker
			wp_enqueue_script('jwl-color-picker');
			
			wp_register_script('jwl-admin-panel-js', plugin_dir_url( __FILE__ ) . 'js/admin_panel.js', array(), '1.0.0', 'all' ); // All admin panel javascript
			wp_enqueue_script('jwl-admin-panel-js');
			
		}
		// Creates the help tab at the top right of the admin settings page
		function jwl_help_screen() {
			/** 
			 * Create the WP_Screen object against your admin page handle
			 * This ensures we're working with the right admin page
			 */
			$this->admin_screen = WP_Screen::get($this->pagehook);
			// Content specified inline
			$this->admin_screen->add_help_tab( array( 'title' => __('Help Documentation','jwl-ultimate-tinymce'), 'id' => 'help_tab', 'content' => '<div class="help_wrapper">'.__('<ul><li class="help_tab_list_image">The best resource for expedited help is my <a target="_blank" href="http://www.forum.joshlobe.com/">Support Forum</a>.</li><li class="help_tab_list_image">Additional information on each option may be found on the <a target="_blank" href="http://docs.joshlobe.com/">Ultimate Tinymce WIKI</a>.</li><li class="help_tab_list_image">You can also visit the <a target="_blank" href="http://www.plugins.joshlobe.com/">Plugin Page</a> to read user comments.</li></ul>','jwl-ultimate-tinymce').'</div>', 'callback' => false ));
			/**
			 * Content generated by callback
			 * The callback fires when tab is rendered - args: WP_Screen object, current tab
			 */
			//$this->admin_screen->add_help_tab(
				//array( 'title' => 'Info on this Page', 'id' => 'page_info', 'content' => '', 'callback' => create_function('','echo "<p>This is my generated content.</p>";' )));
			$this->admin_screen->set_help_sidebar( '<p>'.__('Ultimate Tinymce Help<br /><br /><a target="_blank" href="http://www.forum.joshlobe.com/">Support Forum</a>','jwl-ultimate-tinymce').'</p><p><a target="_blank" href="http://docs.joshlobe.com/">'.__('Ultimate Tinymce WIKI','jwl-ultimate-tinymce').'</a></p>' );
		}
		
		//will be executed if wordpress core detects this page has to be rendered
		function jwl_on_load_page() {
			//ensure, that the needed javascripts been loaded to allow drag/drop, expand/collapse and hide/show of boxes
			wp_enqueue_script('common');
			wp_enqueue_script('wp-lists');
			wp_enqueue_script('postbox');
		
			//add metaboxes now, all metaboxes registered during load page can be switched off/on at "Screen Options" automatically, nothing special to do therefore
			// Can use 'normal', 'side', or 'additional' when defining metabox positions
			
			if (isset ($_POST['jwl_tour_submit'])) {
                //if (check_admin_referer ('wp-biographia-restart-tour')) {
                    $user_id = get_current_user_id ();
                    $dismissed = explode (',', get_user_meta ($user_id, 'dismissed_wp_pointers', true));
                    $key = array_search ('jwl_utmce_pointer', $dismissed);
                    if ($key !== false) {
                        unset ($dismissed[$key]);
                        update_user_meta ($user_id, 'dismissed_wp_pointers', implode (',', $dismissed));
                    }
                //}
            }
			
			if (isset($_GET['settings-updated'])) {
				if($_GET['settings-updated']=='true'){
					
					$options = get_option('jwl_options_group4');
					$location = $options['jwl_menu_location'];
					
					switch ($location)
					 {
					 case "Main":
						wp_redirect( admin_url('/admin.php?page=ultimate-tinymce') );
						exit;
					   break;
					 case "Appearance":
						wp_redirect( admin_url('/themes.php?page=ultimate-tinymce') );
						exit;
					   break;
					 case "Tools":
						wp_redirect( admin_url('/tools.php?page=ultimate-tinymce') );
						exit;
					   break;
					 case "Settings":
						wp_redirect( admin_url('/options-general.php?page=ultimate-tinymce') );
						exit;
					   break;
					 default:
						wp_redirect( admin_url('/admin.php?page=ultimate-tinymce') );
						exit;
					   break;
					 } 
				}
			}
			
			// Unintall Plugin / Delete Databse Options
			if ( isset( $_POST['uninstall'], $_POST['uninstall_confirm'] ) ) {  // Was uninstall button clicked?
	
				if( is_admin() && current_user_can('manage_options') ) {  // Verify User
				
					if ( !isset($_POST['utmce_uninstall_nonce']) || !wp_verify_nonce($_POST['utmce_uninstall_nonce'],'utmce_uninstall_nonce_check') ) {  // Verify nonce
					
						print 'Sorry, your nonce did not verify.';
  						exit;
						
					} else {

						delete_option('jwl_options_group','jwl_options_group'); // From prior plugin single array
						delete_option('jwl_options_group1','jwl_options_group1');
						delete_option('jwl_options_group2','jwl_options_group2');
						delete_option('jwl_options_group3','jwl_options_group3');
						delete_option('jwl_options_group4','jwl_options_group4');
						delete_option('jwl_options_group9','jwl_options_group9');
						delete_option('jwl_utmce_load_defaults', 'jwl_utmce_load_defaults');
					 
						// Do not change (this deactivates the plugin)
						$current = get_option('active_plugins');
						array_splice($current, array_search( $_POST['plugin'], $current), 1 ); // Array-function!
						update_option('active_plugins', $current);
						
						// Redirect to plugins page with 'plugin deactivated' status message
						wp_redirect( admin_url('/plugins.php?deactivate=true') );
						exit;
					}
				}
			}
		}
		
		//executed to show the plugins complete admin page
		function jwl_options_page() {
				
			// Display notice if trying to uninstall but forget to check box
			if ( isset( $_POST['uninstall'] ) && ! isset( $_POST['uninstall_confirm'] ) ) {
				echo '<div id="message" class="error"><p>';
				_e('You must also check the confirm box before options will be uninstalled and deleted.','jwl-ultimate-tinymce');
				echo '</p></div>';
			}
			?>
     
<div id="ultimate-tinymce-general" class="wrap">

	<?php
	// This will remove the title section if the user selects the plugin disable styling option
	$options_remove_title = get_option('jwl_options_group4');
	$jwl_remove_title = isset($options_remove_title['jwl_disable_styles']);
	if ($jwl_remove_title == "1"){ 
		screen_icon('options-general');
		?><h2><?php _e('Ultimate Tinymce Admin Settings Page','jwl-ultimate-tinymce'); ?></h2><?php
	} else {
		?>
		<span style="margin-top:10px;">
			<img src="<?php echo plugins_url('img/settings.png', __FILE__ ) ?>" title="Ultimate Tinymce Settings Page" style="margin-top:10px;margin-bottom:-10px;"/>
			<span style="margin-left:10px;color:#0E5EBA;font-size:22px;font-family:'Unlock', cursive;"><?php _e('Ultimate Tinymce ','jwl-ultimate-tinymce'); ?>
			</span>
			<span style="color:#5F95EF;font-size:18px;font-family:'Unlock', cursive;"><?php _e('Admin Settings Page','jwl-ultimate-tinymce'); ?>
			</span>
		</span>
        
        <div style="margin-top:20px;"></div>
        
        <form method="post" name="jwl_restart_tour">
        <input type="submit" class="button-primary" name="jwl_tour_submit" value="<?php _e('Restart Plugin Tour','jwl-ultimate-tinymce'); ?>" />
         <span style="margin-left:20px;">
         <input type="button" class="button-primary" name="jwl_pro_demo" value="<?php _e('Visit PRO Demo','jwl-ultimate-tinymce'); ?>" onclick="window.open('http://utmce.joshlobe.com/demo/wp-login.php')" />
         </span>
        </form>
    <?php
	}
	?>
    
    <form action="admin-post.php" method="post">
    <?php wp_nonce_field('ultimate-tinymce-general'); ?>
    <?php //wp_nonce_field('closedpostboxes', 'closedpostboxesnonce', false ); ?>
    <?php //wp_nonce_field('meta-box-order', 'meta-box-order-nonce', false ); ?>
    <input type="hidden" name="action" value="save_ultimate-tinymce_general" />
    </form>
    
    
    <?php
	// This will remove all of the main tabbed section content if the user selects the plugin disable styling option
	$options_remove_main_tabs = get_option('jwl_options_group4');
	$jwl_remove_main_tabs = isset($options_remove_main_tabs['jwl_disable_styles']);
	if ($jwl_remove_main_tabs != "1"){ // Closing bracket is directly after closing #container div
	?>
	                 
    <div id="container"> 
     
        <ul class="menu">  
            <li id="news" class="active" style="font-size:14px;"><?php _e('Plugin Addons','jwl-ultimate-tinymce'); ?></li>
            <li id="tutorials" style="font-size:14px;"><?php _e('Donations','jwl-ultimate-tinymce'); ?></li>  
            <li id="spread" style="font-size:14px;"><?php _e('Spread the Word','jwl-ultimate-tinymce'); ?></li>
            <li id="defaults" style="font-size:14px;"><?php _e('Default Settings','jwl-ultimate-tinymce'); ?></li>
            <li id="links" style="font-size:14px;"><?php _e('Uninstall Plugin','jwl-ultimate-tinymce'); ?></li>    
            <li id="whypro" style="font-size:14px;"><?php _e('Why Go Pro','jwl-ultimate-tinymce'); ?></li>
        </ul>  
        <span class="clear"></span> 
         
        <div class="content news"> 
            <div class="main_help_wrapper">
                <span style="margin-left:10px;">
					<?php _e('These addons provide additional features for Ultimate TinyMCE.  Click a button to view more details.','jwl-ultimate-tinymce'); ?>
                </span><br />
                
                <a target="_blank" href="http://www.plugins.joshlobe.com/ultimate-tinymce-google-webfonts/"><span class="jwl_addon_button"><?php _e('Google Webfonts','jwl-ultimate-tinymce'); ?></span></a>
                <a target="_blank" href="http://www.plugins.joshlobe.com/ultimate-tinymce-classes-and-ids/"><span class="jwl_addon_button"><?php _e('Classes & ID\'s','jwl-ultimate-tinymce'); ?></span></a>
                <a target="_blank" href="http://www.plugins.joshlobe.com/ultimate-tinymce-advanced-configuration/"><span class="jwl_addon_button"><?php _e('Advanced Configuration','jwl-ultimate-tinymce'); ?></span></a>
                <a target="_blank" href="http://www.plugins.joshlobe.com/ultimate-tinymce-custom-styles/"><span class="jwl_addon_button"><?php _e('Custom Styles','jwl-ultimate-tinymce'); ?></span></a>
                <a target="_blank" href="http://www.plugins.joshlobe.com/predefined-custom-styles/"><span class="jwl_addon_button"><?php _e('Pre-Defined Styles','jwl-ultimate-tinymce'); ?></span></a>
                <a target="_blank" href="http://www.plugins.joshlobe.com/wp-admin-colors/"><span class="jwl_addon_button"><?php _e('Admin Colors','jwl-ultimate-tinymce'); ?></span></a>
                
                <div style="clear:both"></div>
             </div> <!-- End Div .main_help_wrapper -->
        </div> <!-- End Div .content news -->
        
        
        
        <div class="content tutorials">
        	<div class="main_help_wrapper">
            	<div class="content_wrapper_tips">
                    <span class="content_wrapper_title"><?php _e('Support the Developer','jwl-ultimate-tinymce'); ?></span>
                    <br /><br />
                    <?php _e('Developing this awesome plugin took a lot of effort and time; months and months of continuous voluntary unpaid work.','jwl-ultimate-tinymce'); ?>&nbsp;
                    <?php _e('If you like this plugin or if you are using it for commercial websites, please consider a donation to the author to help support future updates and development.','jwl-ultimate-tinymce'); ?>
            	</div> <!-- End Div .content_wrapper_tips -->
        
                <div class="content_wrapper_tips">
					<?php _e('<span class="content_wrapper_title">Main uses of Donations</span>','jwl-ultimate-tinymce'); ?>
                    <br /><br />
                    <?php _e('Web Hosting Fees | Cable Internet Fees | Time/Value Reimbursement | Motivation for Continuous Improvements | Sunday Father-Daughter Day','jwl-ultimate-tinymce'); ?>
                </div> <!-- End Div .content_wrapper_tips -->
                
                <div class="content_wrapper_tips">
                	<span class="content_wrapper_title"><?php _e('Donate Securely via Paypal','jwl-ultimate-tinymce'); ?></span>
                	<br /><br />
                	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="A9E5VNRBMVBCS">
                    <input type="image" src="<?php echo plugin_dir_url( __FILE__ ) ?>img/donate.png" border="0" name="submit" alt="Thank you for your donation!">
                    <img alt="Thank you for your donation!" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                </div> <!-- End Div .content_wrapper_tips -->
        	</div> <!-- End Div .main_help_wrapper -->
        </div> <!-- End Div .content tutorials -->
        
        
        
        <div class="content spread">
        	<div class="main_help_wrapper">
            	<div class="content_wrapper_tips">
                    <span class="content_wrapper_title"><?php _e('Blog about this Plugin','jwl-ultimate-tinymce'); ?></span>
                    <br /><br />
                    <?php _e('Do you like this plugin, and use it regularly on your site? Why not write a brief article recommending it to your readers and other wordpress blogger buddies? Include a link to the plugin download page to make it easy for your readers to access.','jwl-ultimate-tinymce'); ?>
                </div> <!-- End Div .content_wrapper_tips -->
                
                <div class="content_wrapper_tips">
                    <span class="content_wrapper_title"><?php _e('Vote and Click Works','jwl-ultimate-tinymce'); ?></span>
                    <br /><br />
                    <?php _e('Please take a few moments to visit the plugin download page to vote and click "Works".  You must have an account on wordpress to rate and vote. Signing up is quick and easy.<br /><a target="_blank" href="http://wordpress.org/extend/plugins/ultimate-tinymce/">Ultimate Tinymce Wordpress Page</a>','jwl-ultimate-tinymce'); ?>
                </div> <!-- End Div .content_wrapper_tips -->
                
                <div class="content_wrapper_tips">
                <span class="content_wrapper_title"><?php _e('Twitter & Facebook','jwl-ultimate-tinymce'); ?></span>
                <br /><br />
                <?php _e('Social Networking is a great way to share the awesomeness of Ultimate Tinymce with your friends!','jwl-ultimate-tinymce'); ?>
                </div> <!-- End Div .content_wrapper_tips -->
            </div> <!-- End Div .main_help_wrapper -->
        </div> <!-- End Div .content spread -->
        
        
        <div class="content defaults"> 
        	<div class="main_help_wrapper">
                <div class="content_wrapper_tips" style="width:60%;">
               	 <?php jwl_ultimate_tinymce_load_defaults(); ?>
                </div> <!-- End Div .content_wrapper_tips -->
        	</div> <!-- End Div .main_help_wrapper -->
        </div> <!-- End Div .content defaults -->
        
        
        
        <div class="content links"> 
        	<div class="main_help_wrapper">
            	<div class="content_wrapper_tips" style="width:60%;">
                
            		<!-- PLUGIN UNINSTALL FORM -->
                    <span class="content_wrapper_title"><?php _e('Uninstall Ultimate Tinymce','jwl-ultimate-tinymce'); ?></span><br /><br />
					<?php
                    if ( isset( $_POST['uninstall'] ) && ! isset( $_POST['uninstall_confirm'] ) ) { 
                    ?><div id="message" class="error">
                            <p>
                            <?php _e('You must also check the confirm box before options will be uninstalled and deleted.','jwl-ultimate-tinymce'); ?>
                            </p>
                        </div>
                      <?php
                    }
                    ?>
                    <div style="width:100%;">
                        <div style="width:60%;float:left;display:block;">
                            <?php _e('The options for this plugin are not removed upon deactivation to ensure that no data is lost unintentionally. If you wish to remove all plugin information from your database be sure to run this uninstall utility first.<br /><br />This is a great way to "reset" the plugin, in case you experience problems with the editor. This option is NOT reversible. Ultimate Tinymce plugin settings will need to be re-configured if deleted.','jwl-ultimate-tinymce'); ?>
                        </div>
                        <div style="width:30%;float:left;display:block;margin-left:40px;">
                            <form method="post">
                            <?php wp_nonce_field('utmce_uninstall_nonce_check','utmce_uninstall_nonce'); ?>
                            <input id="plugin" name="plugin" type="hidden" value="ultimate-tinymce/main.php" />
                            <input name="uninstall_confirm" id="uninstall_confirm" type="checkbox" value="1" /><label for="uninstall_confirm"></label> <strong><?php _e('Please confirm before proceeding<br /><br />','jwl-ultimate-tinymce'); ?></strong>
                            <input class="button-primary" name="uninstall" type="submit" value="<?php _e('Uninstall','jwl-ultimate-tinymce'); ?>" />
                            </form>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                    <!-- END PLUGIN UNINSTALL FORM -->
    
                </div> <!-- End Div .content_wrapper_tips -->
            </div> <!-- End Div .main_help_wrapper -->
        </div> <!-- End Div .content links -->
        
        
        <div class="content whypro"> 
        	<div class="main_help_wrapper">
            	<div class="content_wrapper_tips" style="width:35%;">
                    <span class="content_wrapper_title"><?php _e('Upgrading to Pro','jwl-ultimate-tinymce'); ?></span>
                    <br /><br />
            		1. <?php _e('A super-awesome drag and drop interface for button selection (try the demo link above).','jwl-ultimate-tinymce'); ?><br />
                    2. <?php _e('Custom button arrangements for each site user.','jwl-ultimate-tinymce'); ?><br />
                    3. <?php _e('User issues and/or suggestions are handled as top priority.','jwl-ultimate-tinymce'); ?><br />
                    4. <?php _e('Some of the more powerful features are only available in Pro.','jwl-ultimate-tinymce'); ?><br />
                    5. <?php _e('Import/Export all plugin options with a single click.','jwl-ultimate-tinymce'); ?>
                </div> <!-- End Div .content_wrapper_tips -->
                <div class="content_wrapper_tips" style="width:30%;margin-left:20px;">
                    <span class="content_wrapper_title"><?php _e('New Website','jwl-ultimate-tinymce'); ?></span>
                    <br />
            		<a target="_blank" href="http://ultimatetinymcepro.com/"><img src="http://utmce.joshlobe.com/wp-content/themes/oxygen-theme/images/utmce-logo-small.png" title="Ultimate Tinymce Pro" /></a>
                </div> <!-- End Div .content_wrapper_tips -->
            </div> <!-- End Div .main_help_wrapper -->
        </div> <!-- End Div .content links -->
        
    </div> <!-- End Div #container -->
    
    
    <?php
	// Closes the styling conditional if the user enables the option to remove plugin author styling
	}
	?>
        
        
    
    <div id="poststuff" class="metabox-holder has-right-sidebar">
    
        <div id="side-info-column" class="inner-sidebar">  
        
        
        <?php
		// This will remove all the sidebar content if the user enables the option to remove plugin styling
		$options_remove_sidebar = get_option('jwl_options_group4');
		$jwl_remove_sidebar = isset($options_remove_sidebar['jwl_disable_styles']);
		if ($jwl_remove_sidebar != "1"){ // Closing bracket is just before closing #side-info-column div
		?>                      
            <div class="jwl_pro_sidebar">
            	<h3><?php _e('Enjoy PRO Features?', 'jwl-ultimate-tinymce'); ?></h3>
                <p><a target="_blank" href="http://ultimatetinymcepro.com"><?php _e('Ultimate Tinymce PRO', 'jwl-ultimate-tinymce'); ?></a></p>
            </div> <!-- End Div .jwl_pro_sidebar -->
            
            <div class="jwl_support_sidebar">
            	<h3><?php _e('Need Support?', 'jwl-ultimate-tinymce'); ?></h3>
                <p><a target="_blank" href="http://ultimatetinymcepro.com/wiki"><?php _e('Ultimate Tinymce WIKI', 'jwl-ultimate-tinymce'); ?></a></p>
                <p><a target="_blank" href="http://forum.joshlobe.com/member.php?action=register&referrer=1"><?php _e('Dedicated Support Forum', 'jwl-ultimate-tinymce'); ?></a></p>
                <p><a target="_blank" href="http://www.plugins.joshlobe.com/contact/"><?php _e('Contact Me', 'jwl-ultimate-tinymce'); ?></a></p>
                <p><a target="_blank" href="http://ultimatetinymcepro.com/button-definitions/"><?php _e('Button Definitions', 'jwl-ultimate-tinymce'); ?></a></p>
                <p><a target="_blank" href="http://ultimatetinymcepro.com/other-plugin-features/"><?php _e('Other Plugin Features', 'jwl-ultimate-tinymce'); ?></a></p>
            </div> <!-- End Div .jwl_support_sidebar -->
            
            <div class="jwl_follow_sidebar">
            	<h3><?php _e('Like to Follow?', 'jwl-ultimate-tinymce'); ?></h3>
                <p><a target="_blank" href="http://www.facebook.com/joshlobe"><?php _e('Facebook', 'jwl-ultimate-tinymce'); ?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>css/img/facebook_sidebar.png" style="margin-bottom:-13px;margin-left:5px;width:30px;height:30px;" /></a></p>
                <p><a target="_blank" href="http://twitter.com/#!/joshlobe"><?php _e('Twitter', 'jwl-ultimate-tinymce'); ?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>css/img/twitter_sidebar.png" style="margin-bottom:-13px;margin-left:23px;" /></a></p>
                <p><a target="_blank" href="http://www.youtube.com/user/kygirlhighlands"><?php _e('YouTube', 'jwl-ultimate-tinymce'); ?><img src="<?php echo plugin_dir_url( __FILE__ ) ?>css/img/youtube_sidebar.png" style="margin-bottom:-13px;margin-left:10px;" /></a></p>
            </div> <!-- End Div .jwl_follow_sidebar -->
            
            <div class="jwl_rate_sidebar">
            	<h3><?php _e('New Rating System!', 'jwl-ultimate-tinymce'); ?></h3>
                <p><a target="_blank" href="http://wordpress.org/support/view/plugin-reviews/ultimate-tinymce"><img src="<?php echo plugin_dir_url( __FILE__ ) ?>css/img/fivestars.png" style="margin-left:-3px;margin-bottom:-10px;" /></a></p>
                <p><?php _e('<a target="_blank" href="http://wordpress.org/support/view/plugin-reviews/ultimate-tinymce"><strong>Ultimate Tinymce Ratings Page</strong></a><br /><br />Wordpress has implemented a new plugin ratings system.  Comments are now required to "justify" a rating.<br /><br />Please visit the link above and leave a rating and a comment to help others in the future.', 'jwl-ultimate-tinymce'); ?></p>
            </div> <!-- End Div .jwl_rate_sidebar -->
            
            <div class="jwl_signup_sidebar">
            	<h3><?php _e('Want to Signup?', 'jwl-ultimate-tinymce'); ?></h3>
                <form method="post" action="http://ymlp.com/subscribe.php?id=gjwmeubgmgb" target="signup_popup" onsubmit="window.open( 'http://ymlp.com/subscribe.php?id=gjwmeubgmgb','signup_popup','scrollbars=yes,width=600,height=450'); return true;">
                	<?php $jwl_admin_email = get_option('admin_email'); $jwl_blog_title = get_bloginfo('name'); ?>
                    <br /><br />
                    <table cellpadding="5" cellspacing="0" align="center" border="0">
                    <tbody>
                    <tr>
                    <td colspan="2"><span style="font-size:14px;font-weight:bold;"><?php _e('Subscribe to the Ultimate Tinymce Newsletter!', 'jwl-ultimate-tinymce'); ?></span></td>
                    </tr>
                    <tr>
                    <td valign="top"><span style="font-family: &quot;verdana&quot;, &quot;geneva&quot;; font-size: 10pt;"><?php _e('Name:', 'jwl-ultimate-tinymce'); ?></span></td>
                    <td valign="top"><input value="<?php echo $jwl_blog_title; ?>" size="25" name="YMP1" type="text" /></td>
                    </tr>
                    <tr>
                    <td valign="top"><span style="font-family: &quot;verdana&quot;, &quot;geneva&quot;; font-size: 10pt;"><?php _e('Email:', 'jwl-ultimate-tinymce'); ?></span></td>
                    <td valign="top"><input value="<?php echo $jwl_admin_email; ?>" size="25" name="YMP0" type="text" /></td>
                    </tr>
                    <tr>
                    <td colspan="2"><input checked="checked" value="subscribe" name="action" type="radio" /> <span style="font-family: &quot;verdana&quot;, &quot;geneva&quot;; font-size: 10pt;"><?php _e('Subscribe', 'jwl-ultimate-tinymce'); ?></span><input style="margin-left:20px;" value="unsubscribe" name="action" type="radio" /> <span style="font-family: &quot;verdana&quot;, &quot;geneva&quot;; font-size: 10pt;"><?php _e('Unsubscribe', 'jwl-ultimate-tinymce'); ?></span></td>
                    </tr>
                    <tr>
                    <td colspan="2"><input class="button-primary" value="Submit" type="submit" />&nbsp;</td>
                    </tr>
                    </tbody>
                    </table>
                </form>
                <p><?php _e('Receive news about new features, links to tutorials and videos, and other "first-response" emails regarding this plugin.', 'jwl-ultimate-tinymce'); ?></p>
            </div> <!-- End Div .jwl_signup_sidebar -->
            
        <?php
		// Closes the styling conditional if the user enables the option to remove plugin author styling
		}
		?>
            
        </div> <!-- End Div #side-info-column -->
        
        
        
        <div id="post-body" class="has-sidebar">
        
            <div id="post-body-content" class="has-sidebar-content">
            
            <?php
            global $current_user ;
		    $user_id = $current_user->ID;
			
			?>
            
			<div id="container2">
     
				<ul class="menu2">  
					<li id="buttons1_tab" class="active" style="font-size:14px;"><?php _e('Buttons Options','jwl-ultimate-tinymce'); ?></li>
					<li id="misc_tab" style="font-size:14px;"><?php _e('Misc Options','jwl-ultimate-tinymce'); ?></li> 
					<li id="admin_tab" style="font-size:14px;"><?php _e('Admin Options','jwl-ultimate-tinymce'); ?></li>
					<li id="editor_tab" style="font-size:14px;"><?php _e('Over-ride Options','jwl-ultimate-tinymce'); ?></li>
				</ul>  
				<span class="clear"></span>
                
                <div class="content buttons1_tab">
                	<form action="options.php" method="post" name="jwl_main_options1">
					<input class="button-primary" type="submit" name="Save" style="padding-left:40px;padding-right:40px;" value="<?php _e('Update Buttons Options','jwl-ultimate-tinymce'); ?>" id="submitbutton" /><?php
					do_settings_sections('jwl_options_group1');
					settings_fields('jwl_options_group1'); ?>
					
					<input class="button-primary" type="submit" name="Save" style="padding-left:40px;padding-right:40px;margin-top:40px;" value="<?php _e('Update Buttons Options','jwl-ultimate-tinymce'); ?>" id="submitbutton" />
					</form>
                </div> <!-- End Div .content buttons1_tab -->
                
                <div class="content misc_tab">
                	<form action="options.php" method="post" name="jwl_main_options3">
					<input class="button-primary" type="submit" name="Save" style="padding-left:40px;padding-right:40px;" value="<?php _e('Update Miscellaneous Options','jwl-ultimate-tinymce'); ?>" id="submitbutton" /><?php
					do_settings_sections('jwl_options_group3');
					settings_fields('jwl_options_group3');
					
					$options = get_option('jwl_options_group3');
					if (isset($options['jwl_signoff_field_id'])) {
					wp_editor( $options["jwl_signoff_field_id"], 'signoff-id', array( 'textarea_name' => 'jwl_options_group3[jwl_signoff_field_id]', 'media_buttons' => false ) );
					} else {
					wp_editor( 'Setup your signoff text here...', 'signoff-id', array( 'textarea_name' => 'jwl_options_group3[jwl_signoff_field_id]', 'media_buttons' => false ) );
					}
					
					?>
					<input class="button-primary" type="submit" name="Save" style="padding-left:40px;padding-right:40px;margin-top:40px;" value="<?php _e('Update Miscellaneous Options','jwl-ultimate-tinymce'); ?>" id="submitbutton" />
					</form>
                </div> <!-- End Div .content misc_tab -->
                
                <div class="content admin_tab">
                	<form id="jwl_main_options4" action="options.php" method="post" name="jwl_main_options4">
					<input class="button-primary" type="submit" name="Save" style="padding-left:40px;padding-right:40px;" value="<?php _e('Update Admin Options','jwl-ultimate-tinymce'); ?>" id="submitbutton" /><?php
					do_settings_sections('jwl_options_group4');
					settings_fields('jwl_options_group4');
					
					
					echo '<div class="jwl_hide">';
					$options = get_option('jwl_options_group4');
					if (isset($options['jwl_qr_code_content'])) {
						wp_editor( $options["jwl_qr_code_content"], 'content-id', array( 'textarea_name' => 'jwl_options_group4[jwl_qr_code_content]', 'media_buttons' => false, 'tinymce' => array( 'theme_advanced_buttons1' => 'formatselect,forecolor,|,bold,italic,underline,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,|,spellchecker,wp_adv', 'theme_advanced_buttons3' => '', 'theme_advanced_buttons4' => '' ) ) );
						} else {
						wp_editor( 'Use this unique QR (Quick Response) code with your smart device. The code will save the url of this webpage to the device for mobile sharing and storage.', 'content-id', array( 'textarea_name' => 'jwl_options_group4[jwl_qr_code_content]', 'media_buttons' => false, 'tinymce' => array( 'theme_advanced_buttons1' => 'formatselect,forecolor,|,bold,italic,underline,|,bullist,numlist,blockquote,|,justifyleft,justifycenter,justifyright,justifyfull,|,link,unlink,|,spellchecker,wp_adv', 'theme_advanced_buttons3' => '', 'theme_advanced_buttons4' => '' ) ) );
					}
					echo '</div>';
					echo '<br /><br />';
					
					?>
					<input class="button-primary" type="submit" name="Save" style="padding-left:40px;padding-right:40px;" value="<?php _e('Update Admin Options','jwl-ultimate-tinymce'); ?>" id="submitbutton" />
					</form>
                </div> <!-- End Div .content admin_tab -->
                
                <div class="content editor_tab">
                	<form action="options.php" method="post" name="jwl_main_options8">
					<input class="button-primary" type="submit" name="Save" style="padding-left:40px;padding-right:40px;" value="<?php _e('Update Tinymce Options','jwl-ultimate-tinymce'); ?>" id="submitbutton" /><?php
					do_settings_sections('jwl_options_group8');
					settings_fields('jwl_options_group8');
					?>
					<input class="button-primary" type="submit" name="Save" style="padding-left:40px;padding-right:40px;margin-top:40px;" value="<?php _e('Update Tinymce Options','jwl-ultimate-tinymce'); ?>" id="submitbutton" />
					</form>
                </div> <!-- End Div .content editor_tab -->
                
            </div>
            <?php
			
			//do_meta_boxes($this->pagehook, 'normal', $data);
			//do_meta_boxes($this->pagehook, 'additional', $data); 
			
			?>
            </div> <!-- End Div #post-body-content -->
        </div> <!-- End Div #post-body -->
        <br class="clear"/>		
        
   </div> <!-- End Div #poststuff -->    

</div> <!-- End Div #ultimate-tinymce-general -->

<script type="text/javascript" language="javascript">
//<![CDATA[
jQuery(document).ready( 
	function($) { 
		$(".if-js-closed").removeClass("if-js-closed").addClass("closed"); 
		postboxes.add_postbox_toggles("<?php echo $this->pagehook; ?>"); 
	}
);
//]]>
</script>

<?php
		}
		
		// Executed if the post arrives initiated by pressing the submit button of form
		function jwl_on_save_changes() {
			//user permission check
			if ( !current_user_can('manage_options') )
				wp_die( __('Cheatin&#8217; uh?') );	
			//cross check the given referer
			check_admin_referer('ultimate-tinymce-general');
			//process here your on $_POST validation and / or option saving
		
			//lets redirect the post request into get request (you may add additional params at the url, if you need to show save results
			wp_redirect($_POST['_wp_http_referer']);		
		}
		
}
$my_jwl_metabox_admin = new jwl_metabox_admin();



global $pagenow;
if ( 'plugins.php' === $pagenow )
{
    // Better update message
    $file   = basename( __FILE__ );
    $folder = basename( dirname( __FILE__ ) );
    $hook = "in_plugin_update_message-{$folder}/{$file}";
    add_action( $hook, 'jwl_update_message_cb', 20, 2 );
}

function jwl_update_message_cb( /* $plugin_data, $r */ )
{
    // readme contents
    //$data       = file_get_contents( 'http://plugins.trac.wordpress.org/browser/ultimate-tinymce/trunk/readme.txt?format=txt' );

    // assuming you've got a Changelog section
    // @example == Changelog ==
    //$changelog  = stristr( $data, '== Changelog ==' );

    // assuming you've got a Screenshots section
    // @example == Screenshots ==
    //$changelog  = stristr( $changelog, '== Screenshots ==', true );

    // only return for the current & later versions
	//$plugin_data = get_plugin_data( __FILE__ );
    //$curr_ver = $plugin_data['Version'];
    //$curr_ver   = get_plugin_data('Version');

    // assuming you use "= v" to prepend your version numbers
    // @example = v0.2.1 =
    //$changelog  = stristr( $changelog, "= {$curr_ver} =" );

    // uncomment the next line to var_export $var contents for dev:
    # echo '<pre>'.var_export( $plugin_data, false ).'<br />'.var_export( $r, false ).'</pre>';

    // echo stuff....
    $output = '<span style="margin-left:10px;color:#FF0000;">Ultimate Tinymce will NOT function properly with WordPress 3.9 and above.  Please switch to <a href="http://wordpress.org/plugins/wp-edit/" target="_blank">WP Edit</a> instead.</span>';
	
    return print $output;
}



/*
******************************************************
Ultimate Tinymce Admin Tour using WP-Pointers
******************************************************
*/
/*
 * Name: wp-plugin-base
 *
 * Description: Base class for developing WordPress plugins; contains helper functions to
 * add WordPress hooks consistently and sanitise hook method names.
 *
 * Acknowledgements: Based on WPS_Plugin_Base_v1 by Travis Smith (http://wpsmith.net)
 */
 
define ('JWL_ULTIMATETINYMCE_PATH', plugin_dir_path (__FILE__));

if (!class_exists ('WP_PluginBase')) {
	class WP_PluginBase {
		function hook ($hook) {
			$priority = 10;
			$method = $this->sanitise_method ($hook);
			$args = func_get_args ();
			unset ($args[0]);
			foreach ((array)$args as $arg) {
				if (is_int ($arg)) {
					$priority = $arg;
				}
				else {
					$method = $arg;
				}
			}	// end-foreach
			return add_action ($hook, array ($this, $method), $priority, 999);
		}
		
		private function sanitise_method ($method) {
			return str_replace (array ('.', '-'), array ('_DOT_', '_DASH'), $method);
		}
	}	// end-class WP_PluginBase
}

// Extend WP_PluginBase
if (!class_exists ('JWL_UtmcePointers')) {
	class JWL_UtmcePointers extends WP_PluginBase {
	
		private static $instance;
		
		private function __construct () {
			$this->hook ('admin_enqueue_scripts');
		}

		public static function get_instance () {
			if (!isset (self::$instance)) {
				$c = __CLASS__;
				self::$instance = new $c ();
			}
			
			return self::$instance;
		}
		
		const DISPLAY_VERSION = 'v5.2';
		const VERSION = '52';
		
		function admin_enqueue_scripts () {
			$dismissed = explode (',', get_user_meta (wp_get_current_user ()->ID, 'dismissed_wp_pointers', true));
			$do_tour = !in_array ('jwl_utmce_pointer', $dismissed);
			if ($do_tour) {
				wp_enqueue_style ('wp-pointer');
			
				wp_enqueue_script ('jquery-ui');
				wp_enqueue_script ('wp-pointer');
				wp_enqueue_script ('utils');
			
				$this->hook ('admin_print_footer_scripts');
				$this->hook ('admin_head');
			}
		}

		function admin_head () {
			?>
		<style type="text/css" media="screen">
            #pointer-primary {
                margin: 0 5px 0 0;
            }
		</style>
			<?php
		}

		function admin_print_footer_scripts () {
			global $pagenow;
			global $current_user;
		
			$tour = array (
				'tinymce' => array (
					'id' => '#toplevel_page_ultimate-tinymce',
					'content' => '<h3>' . __('Congratulations!', 'jwl-ultimate-tinymce') . '</h3>'
						. '<p><strong>' . __('Welcome to Ultimate Tinymce', 'jwl-ultimate-tinymce') . '</strong></p>'
						. '<p>' . sprintf (__('Before you do anything else; go to your <a href="%s">user profile</a> and ensure the top option to "Disable the visual editor when writing" is NOT checked.  Then, restart the tour.', 'jwl-ultimate-tinymce'), admin_url ('profile.php'), admin_url ('options-discussion.php')) . '</p>'
						. '<p><strong>' . __('Ultimate Tinymce Settings Page', 'jwl-ultimate-tinymce') . '</strong></p>'
						. '<p>' . __('Here you\'ll find all of the options to control Ultimate Tinymce. Each option is disabled by default to minimize conflicts with other themes and plugins.', 'jwl-ultimate-tinymce') . '</p>',
					'button2' => __('Next', 'jwl-ultimate-tinymce'),
					'function' => 'window.location="' . $this->get_tab_url ('uninstall') . '"'
					),
				'uninstall' => array (
					'id' => '#links',
					'content' => '<h3>' . __('Uninstalling Ultimate Tinymce', 'jwl-ultimate-tinymce') . '</h3>'
					. '<p><strong>' . __('Understanding the Difference', 'jwl-ultimate-tinymce') . '</strong></p>'
					. '<p>' . __('Ultimate Tinymce uses an extensive options array for storing the settings. To protect stored options in the database, simply deactivating the plugin will NOT remove the options. It is often necessary to deactivate plugins for debugging purposes.', 'jwl-ultimate-tinymce') . '</p>'
					. '<p>' . __('To fully remove the options from the database, please use this uninstall utility. This option will remove all database entries... and is NOT reversable.', 'jwl-ultimate-tinymce') . '</p>',
					'button2' => __('Next', 'jwl-ultimate-tinymce'),
					'function' => 'window.location="' . $this->get_tab_url ('settings') . '"'
					),
				'settings' => array (
					'id' => '#buttons1_tab',
					'content' => '<h3>' . __('Buttons Options', 'jwl-ultimate-tinymce') . '</h3>'
					. '<p><strong>' . __('Setting up the Content Editor', 'jwl-ultimate-tinymce') . '</strong></p>'
					. '<p>' . __('The heart of Ultimate Tinymce. This is the main interface for configuring options. To get started, go ahead and enable a few buttons by placing a check in the corresponding box, then select the row you would like the button to appear from the dropdown.', 'jwl-ultimate-tinymce') . '</p>'
					. '<p>' . __('This is a tabbed interface, so each tab has additional options. For a full list of option descriptions, please visit the <a target="_blank" href="http://utmce.joshlobe.com/button-definitions/">Ultimate Tinymce Options Descriptions Page.</a>', 'jwl-ultimate-tinymce') . '</p>',
					'button2' => __('Next', 'jwl-ultimate-tinymce'),
					'function' => 'window.location="' . $this->get_tab_url ('buttons') . '"'
					),
				'buttons' => array (
					'id' => '#fontselect',
					'content' => '<h3>' . __('Setting up Buttons', 'jwl-ultimate-tinymce') . '</h3>'
					. '<p><strong>' . __('First, Enable the Button', 'jwl-ultimate-tinymce') . '</strong></p>'
					. '<p>' . __('All buttons are disabled by default. Simply "check" the boxes to activate buttons.', 'jwl-ultimate-tinymce') . '</p>'
					. '<p><strong>' . __('Second, Select the Row', 'jwl-ultimate-tinymce') . '</strong></p>'
					. '<p>' . __('Next, the row the button appears in the editor may be selected. Simply choose the row from the dropdown list.', 'jwl-ultimate-tinymce') . '</p>',
					'button2' => __('Next', 'jwl-ultimate-tinymce'),
					'function' => 'window.location="' . $this->get_tab_url ('donate') . '"'
					),
				'donate' => array (
					'id' => '#tutorials',
					'content' => '<h3>' . __('Donations', 'jwl-ultimate-tinymce') . '</h3>'
					. '<p><strong>' . __('Support Future Development', 'jwl-ultimate-tinymce') . '</strong></p>'
					. '<p>' . __('If you like Ultimate Tinymce, please show your appreciation here.', 'jwl-ultimate-tinymce') . '</p>'
					. '<p><strong>' . __('Plugin Tour End', 'jwl-ultimate-tinymce') . '</strong></p>'
					. '<p>' . __('This concludes the tour of Ultimate Tinymce. Please end the tour by clicking "Close" below.', 'jwl-ultimate-tinymce') . '</p>'
					)
				);
			
			$tab = '';
			if (isset ($_GET['tab'])) {
				$tab = $_GET['tab'];
			}

			$sub_page = '';
			if (isset ($_GET['page'])) {
				$sub_page = $_GET['page'];
			}
			
			$restart_tour = false;
			if (isset ($_GET['jwl_tour_submit'])) {
				//if (check_admin_referer ('wp-biographia-restart-tour')) {
					$restart_tour = true;
				//}
			}
			
			$page = '';
			if ( isset( $_GET['page'] ) )
				$page = $_GET['page'];
		
			$function = '';
			$button2 = '';
			$options = array ();
			$show_pointer = false;
		
			//if ($restart_tour || ('options-general.php' != $pagenow || !array_key_exists ($tab, $tour))) {
			if ($restart_tour || ('admin.php' != $pagenow || !array_key_exists ($tab, $tour))) {
				$show_pointer = true;
				$file_error = true;
				$id = '#toplevel_page_ultimate-tinymce';
				$content = '<h3>' . sprintf (__('What\'s New In Ultimate Tinymce %s?', 'jwl-ultimate-tinymce'), self::DISPLAY_VERSION) . '</h3>';

				$whatsnew_file = JWL_ULTIMATETINYMCE_PATH . 'help/whatsnew-' . self::VERSION . '.html';
				if (file_exists ($whatsnew_file)) {
					$whatsnew = file_get_contents ($whatsnew_file);
					if (isset ($whatsnew) && !empty ($whatsnew)) {
						$file_error = false;
						$content .= $whatsnew;
					}
				}
				
				if ($file_error) {
					$content .= '<p>' . sprintf (__('Something seems to be wrong with your Ultimate Tinymce installation; the file %s could not be found', 'jwl-ultimate-tinymce'), $whatsnew_file) . '</p>';
				}

				$content .= '<p>' . __('Want to know more? Look in the plugin\'s <code>readme.txt</code> or just click the <em>Begin Tour</em> button below.', 'jwl-ultimate-tinymce' ) . '</p>';

				$options = array (
					'content' => $content,
					'position' => array ('edge' => 'left', 'align' => 'center')
					);
				$button2 = __( "Begin Tour", 'jwl-ultimate-tinymce' );
				//$function = 'document.location="' . $this->get_tab_url ('display') . '";';
				$function = 'document.location="' . $this->get_tab_url ('tinymce') . '";'; //jwl
			}
			else {
				if ($tab != '' && in_array ($tab, array_keys ($tour))) {
					$show_pointer = true;
					//$id = "#wp-biographia-tab-$tab";
					if (isset ($tour[$tab]['id'])) {
						$id = $tour[$tab]['id'];
					}
					$options = array (
						'content' => $tour[$tab]['content'],
						'position' => array ('edge' => 'top', 'align' => 'left')
						);
					$button2 = false;
					$function = '';
					if (isset ($tour[$tab]['button2'])) {
						$button2 = $tour[$tab]['button2'];
					}
					if (isset ($tour[$tab]['function'])) {
						$function = $tour[$tab]['function'];
					}
				}
			}
		
			if ($show_pointer) {
				$this->make_pointer_script ($id, $options, __('Close', 'jwl-ultimate-tinymce'), $button2, $function);
			}
		}
	
		function make_pointer_script ($id, $options, $button1, $button2=false, $function='') {
			?>
			<script type="text/javascript">
				(function ($) {
					var jwl_utmce_tour_opts = <?php echo json_encode ($options); ?>, setup;
				
					jwl_utmce_tour_opts = $.extend (jwl_utmce_tour_opts, {
						buttons: function (event, t) {
							button = jQuery ('<a id="pointer-close" class="button-secondary">' + '<?php echo $button1; ?>' + '</a>');
							button.bind ('click.pointer', function () {
								t.element.pointer ('close');
							});
							return button;
						},
						close: function () {
							$.post (ajaxurl, {
								pointer: 'jwl_utmce_pointer',
								action: 'dismiss-wp-pointer'
							});
						}
					});
				
					setup = function () {
						$('<?php echo $id; ?>').pointer(jwl_utmce_tour_opts).pointer('open');
						<?php if ($button2) { ?>
							jQuery ('#pointer-close').after ('<a id="pointer-primary" class="button-primary">' + '<?php echo $button2; ?>' + '</a>');
							jQuery ('#pointer-primary').click (function () {
								<?php echo $function; ?>
							});
							jQuery ('#pointer-close').click (function () {
								$.post (ajaxurl, {
									pointer: 'jwl_utmce_pointer',
									action: 'dismiss-wp-pointer'
								});
							})
						<?php } ?>
					};
				
					if (jwl_utmce_tour_opts.position && jwl_utmce_tour_opts.position.defer_loading) {
						$(window).bind('load.wp-pointers', setup);
					}
					else {
						setup ();
					}
				}) (jQuery);
			</script>
			<?php
		}
	
		function get_tab_url ($tab) {
			//$url = admin_url ('options-general.php');
			$url = admin_url ('admin.php'); //jwl
			//$url .= '?page=wp-biographia/wp-biographia.php&tab=' . $tab;
			$url .= '?page=ultimate-tinymce&tab=' . $tab; //jwl
		
			return $url;
		}
	}	// end-class JWL_UtmcePointers
}	// end-if (!class_exists ('JWL_UtmcePointers'))

JWL_UtmcePointers::get_instance ();
?>