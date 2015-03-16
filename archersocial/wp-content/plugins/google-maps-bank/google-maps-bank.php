<?php
/*
Plugin Name: Google Maps Bank Lite Edition
Plugin URI: http://tech-banker.com
Description: Google Maps Bank provides directions, interactive maps, and satellite/aerial imagery of anything. It's more than a Map.
Author: Tech Banker
Version: 1.0.12
Author URI: http://tech-banker.com
*/
/////////////////////////////////////  Define  Google Maps Bank  Constants  ////////////////////////////////////////

if (!defined("MAP_BK_PLUGIN_DIR")) define("MAP_BK_PLUGIN_DIR",  plugin_dir_path(__FILE__));
if (!defined("MAP_MAIN_DIR")) define("MAP_MAIN_DIR",  content_url()."/google-maps-bank/");
if (!defined("MAP_PLUGIN_DIRNAME")) define("MAP_PLUGIN_DIRNAME", plugin_basename(dirname(__file__)));
if (!defined("MAP_MAIN_UPLOAD_DIR")) define("MAP_MAIN_UPLOAD_DIR", dirname(dirname(dirname(__FILE__)))."/google-maps-bank");
if (!defined("MAP_BK_TOOLTIP")) define("MAP_BK_TOOLTIP", plugins_url(plugin_basename(dirname(__FILE__))."/assets/images/questionmark_icon.png" , dirname(__FILE__)));
if (!defined("MAP_BK_MARKER_ICON")) define("MAP_BK_MARKER_ICON", plugins_url(plugin_basename(dirname(__FILE__))."/assets/images/map-icons" ));
if (!defined("MAP_FILE")) define("MAP_FILE","google-maps-bank/google-maps-bank.php");
if (!defined("map_bank")) define("map_bank", "map-bank");
if (!defined("tech_bank")) define("tech_bank", "tech-banker");

///////////////////////////////////// This Function created for using Cascade Style Sheet at Frontend. ////////////////////////////////////////

if(!function_exists("frontend_plugin_js_scripts_map_bank"))
{
	function frontend_plugin_js_scripts_map_bank()
	{
		wp_enqueue_script("jquery");
	}
}

///////////////////////////////////// This Function created for using JavaScript at Backend. ////////////////////////////////////////

if(!function_exists("backend_plugin_js_scripts_map_bank"))
{
	function backend_plugin_js_scripts_map_bank()
	{
		wp_enqueue_script("jquery");
		wp_enqueue_script("farbtastic");
		wp_enqueue_script("jquery.dataTables.min.js", plugins_url("/assets/js/jquery.dataTables.min.js",__FILE__));
		wp_enqueue_script("jquery.validate.min.js", plugins_url("/assets/js/jquery.validate.min.js",__FILE__));
		wp_enqueue_script("jquery.Tooltip.js", plugins_url("/assets/js/jquery.Tooltip.js",__FILE__));
	}
}

///////////////////////////////////// This Function created for using Cascade Style Sheet at Backend. ////////////////////////////////////////

if(!function_exists("backend_plugin_css_styles_map_bank"))
{
	function backend_plugin_css_styles_map_bank()
	{
		wp_enqueue_style("farbtastic");
		wp_enqueue_style("tech_banker_framework.css", plugins_url("/assets/css/framework.css",__FILE__));
		wp_enqueue_style("global.css", plugins_url("/assets/css/global.css",__FILE__));
		wp_enqueue_style("modern.css", plugins_url("/assets/css/modern.css",__FILE__));
		wp_enqueue_style("colors.css", plugins_url("/assets/css/colors.css",__FILE__));
		wp_enqueue_style("map_bank.css", plugins_url("/assets/css/map_bank.css",__FILE__));
		wp_enqueue_style("premium-edition.css", plugins_url("/assets/css/premium-edition.css", __file__));
		wp_enqueue_style("google-fonts-roboto", "//fonts.googleapis.com/css?family=Roboto Condensed:300|Roboto Condensed:300|Roboto Condensed:300|Roboto Condensed:regular|Roboto Condensed:300");
		wp_enqueue_style("responsive.css", plugins_url("/assets/css/responsive.css", __file__));
	}
}
/////////////////////////////////////  This Function creates menus on the admin bar. ////////////////////////////////////////

if(!function_exists("create_admin_bar_menus_for_google_map_bank"))
{
	function create_admin_bar_menus_for_google_map_bank($meta = true)
	{
		global $wp_admin_bar, $wpdb, $current_user;
		if (!is_user_logged_in())
		{
			return;
		}
		if(is_super_admin())
		{
			$gmb_role = "administrator";
		}
		else
		{
			$gmb_role = $wpdb->prefix . "capabilities";
			$current_user->role = array_keys($current_user->$gmb_role);
			$gmb_role = $current_user->role[0];
		}
		switch($gmb_role)
		{
			case "administrator":
				if (file_exists(MAP_BK_PLUGIN_DIR . "/includes/top_menus.php"))
				{
					include_once MAP_BK_PLUGIN_DIR . "/includes/top_menus.php";
				}
			break;
			case "editor":
				if (file_exists(MAP_BK_PLUGIN_DIR . "/includes/top_menus.php"))
				{
					include_once MAP_BK_PLUGIN_DIR . "/includes/top_menus.php";
				}
			break;
			case "author":
				if (file_exists(MAP_BK_PLUGIN_DIR . "/includes/top_menus.php"))
				{
					include_once MAP_BK_PLUGIN_DIR . "/includes/top_menus.php";
				}
			break;
		}
	}
}

/////////////////////////////////////  Include Menus on Dashboard ////////////////////////////////////////

if(!function_exists("create_global_menus_for_google_map_bank"))
{
	function create_global_menus_for_google_map_bank()
	{
		global $wp_admin_bar, $wpdb, $current_user;
		if(is_super_admin())
		{
			$gmb_role = "administrator";
		}
		else
		{
			$gmb_role = $wpdb->prefix . "capabilities";
			$current_user->role = array_keys($current_user->$gmb_role);
			$gmb_role = $current_user->role[0];
		}
		
		switch($gmb_role)
		{
			case "administrator":
				if (file_exists(MAP_BK_PLUGIN_DIR . "/lib/menus.php"))
				{
					include_once MAP_BK_PLUGIN_DIR . "/lib/menus.php";
				}
			break;
			case "editor":
				if (file_exists(MAP_BK_PLUGIN_DIR . "/lib/menus.php"))
				{
					include_once MAP_BK_PLUGIN_DIR . "/lib/menus.php";
				}
			break;
			case "author":
				if (file_exists(MAP_BK_PLUGIN_DIR . "/lib/menus.php"))
				{
					include_once MAP_BK_PLUGIN_DIR . "/lib/menus.php";
				}
			break;
		}
	}
}
/////////////////////////////////////  Functions for Returing Table Names  /////////////////////////////////

function map_bank_create_new_map_table()
{
	global $wpdb;
	return $wpdb->prefix . "gmb_maps";
}

function map_bank_meta_table()
{
	global $wpdb;
	return $wpdb->prefix . "gmb_maps_meta";
}

function map_bank_marker_category_table()
{
	global $wpdb;
	return $wpdb->prefix . "gmb_marker_category";
}

function map_bank_marker_themes_table()
{
	global $wpdb;
	return $wpdb->prefix . "gmb_marker_themes";
}

function map_bank_plugin_settings_table()
{
	global $wpdb;
	return $wpdb->prefix . "gmb_plugin_settings";
}

function google_maps_bank_licensing()
{
	global $wpdb;
	return $wpdb->prefix . "gmb_licensing_settings";
}
/////////////////////////////////////  Call Install Script on Plugin Activation ////////////////////////////////////////
if(!function_exists("plugin_install_script_for_map_bank"))
{
	function plugin_install_script_for_map_bank()
	{
		global $wpdb;
		if (is_multisite())
		{
			$blog_ids = $wpdb->get_col("SELECT blog_id FROM $wpdb->blogs");
			foreach($blog_ids as $blog_id)
			{
				switch_to_blog($blog_id);
				if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/install-script.php"))
				{
					include MAP_BK_PLUGIN_DIR. "/lib/install-script.php";
				}
				restore_current_blog();
			}
		}
		else
		{
			if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/install-script.php"))
			{
				include MAP_BK_PLUGIN_DIR. "/lib/install-script.php";
			}
		}
	}
}

///////////////////////////////////  Call Shortcodes for Front End ////////////////////////////////////////
if(!function_exists("map_bank_short_code"))
{
	function map_bank_short_code($atts)
	{
		extract(shortcode_atts(array(
		"map_id" => "",
		"map_width" => "",
		"map_width_type" => "",
		"map_height" => "",
		"map_height_type" => "",
		"map_zoom" => "",
		"scrolling_wheel" => "",
		"map_title" => "",
		), $atts));
		return extract_map_short_code($map_id,$map_width,$map_width_type,$map_height,$map_height_type,$map_zoom,$scrolling_wheel,$map_title);
	}
}

/////////////////////////////////////  Extract Shortcodes called by Front End Function ////////////////////////////////////////
if(!function_exists("extract_map_short_code"))
{
	function extract_map_short_code($map_id,$map_width,$map_width_type,$map_height,$map_height_type,$map_zoom,$scrolling_wheel,$map_title)
	{
		ob_start();
		require MAP_BK_PLUGIN_DIR."/frontend/view.php";
		$map_bank_output = ob_get_clean();
		wp_reset_query();
		return $map_bank_output;
	}
}

///////////////////////////////////// Register Ajax Based Functions /////////////////////////////////////

if(isset($_REQUEST["action"]))
{
	switch($_REQUEST["action"])
	{
		case "add_map_library":
			add_action("admin_init", "add_map_library");
			if(!function_exists("add_map_library"))
			{
				function add_map_library()
				{
					global $wpdb,$current_user,$user_role_permission;
					$gmb_role = $wpdb->prefix . "capabilities";
					$current_user->role = array_keys($current_user->$gmb_role);
					$gmb_role = $current_user->role[0];
					if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/map-class.php"))
					{
						include_once MAP_BK_PLUGIN_DIR . "/lib/map-class.php";
					}
				}
			}
		break;
	}
}
///////////////////////////////////// Shortcodes Generator Functions /////////////////////////////////////
if(!function_exists("add_map_shortcode_button"))
{
	function add_map_shortcode_button($context) {
		add_thickbox();
		$context .= "<a href=\"#TB_inline?width=800&height=850&inlineId=map-bank\"  class=\"button thickbox\" title=\"" . __("Add Google Maps Bank Shortcode", map_bank) . "\">
		<span class=\"contact_icon\"></span> Add Google Maps Bank Shortcode</a>";
		return $context;
	}
}

if(!function_exists("add_map_mce_popup"))
{
	function add_map_mce_popup()
	{
		add_thickbox();
		global $wpdb,$current_user,$user_role_permission;
		$gmb_role = $wpdb->prefix . "capabilities";
		$current_user->role = array_keys($current_user->$gmb_role);
		$gmb_role = $current_user->role[0];
		if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/shortcode.php"))
		{
			include MAP_BK_PLUGIN_DIR."/lib/shortcode.php";
		}
	}
}
///////////////////////////////////  Make Directory To uploads   /////////////////////////////////////////////////////
if(!is_dir(MAP_MAIN_UPLOAD_DIR))
{
	wp_mkdir_p(MAP_MAIN_UPLOAD_DIR);
}

/////////////////////////////////////Language Convertions//////////////////////////////////////////////////////////

if(!function_exists( "plugin_load_textdomain_google_map_bank" ))
{
	function plugin_load_textdomain_google_map_bank()
	{
		if(function_exists( "load_plugin_textdomain" ))
		{
			load_plugin_textdomain(map_bank, false, MAP_PLUGIN_DIRNAME ."/languages");
		}
	}
}

function google_maps_bank_plugin_update_message($args)
{
	$response = wp_remote_get( 'https://plugins.svn.wordpress.org/google-maps-bank/trunk/readme.txt' );
	if ( ! is_wp_error( $response ) && ! empty( $response['body'] ) )
	{
		// Output Upgrade Notice
		$matches        = null;
		$regexp         = '~==\s*Changelog\s*==\s*=\s*[0-9.]+\s*=(.*)(=\s*' . preg_quote($args['Version']) . '\s*=|$)~Uis';
		$upgrade_notice = '';
		if ( preg_match( $regexp, $response['body'], $matches ) ) {
			$changelog = (array) preg_split('~[\r\n]+~', trim($matches[1]));
			$upgrade_notice .= '<div class="framework_plugin_message">';
			foreach ( $changelog as $index => $line ) {
				$upgrade_notice .= "<p>".$line."</p>";
			}
			$upgrade_notice .= '</div> ';
			echo $upgrade_notice;
		}
	}
}

$is_option_auto_update = get_option("google-maps-bank-automatic-update");

if($is_option_auto_update == "" || $is_option_auto_update == "1")
{
	if (!wp_next_scheduled("google_maps_bank_auto_update"))
	{
		wp_schedule_event(time(), "daily", "google_maps_bank_auto_update");
	}
	add_action("google_maps_bank_auto_update", "google_maps_bank_plugin_autoUpdate");
}
else
{
	wp_clear_scheduled_hook("google_maps_bank_auto_update");
}
if(!function_exists( "google_maps_bank_plugin_autoUpdate" ))
{
	function google_maps_bank_plugin_autoUpdate()
	{
		try
		{
			require_once(ABSPATH . "wp-admin/includes/class-wp-upgrader.php");
			require_once(ABSPATH . "wp-admin/includes/misc.php");
			define("FS_METHOD", "direct");
			require_once(ABSPATH . "wp-includes/update.php");
			require_once(ABSPATH . "wp-admin/includes/file.php");
			wp_update_plugins();
			ob_start();
			$plugin_upgrader = new Plugin_Upgrader();
			$plugin_upgrader->upgrade("google-maps-bank/google-maps-bank.php");
			$output = @ob_get_contents();
			@ob_end_clean();
		}
		catch(Exception $e)
		{
		}
	}
}

if(!function_exists( "plugin_uninstall_hook_for_google_maps_bank" ))
{
	function plugin_uninstall_hook_for_google_maps_bank()
	{
		delete_option("google-maps-bank-automatic-update");
		wp_clear_scheduled_hook("google_maps_bank_auto_update");
	}
}

///////////////////////////////////  Call Hooks   /////////////////////////////////////////////////////
add_filter( "wp_default_editor", create_function( '', 'return "html";' ));
// activation Hook called for installation_for_google_map_bank
register_activation_hook(__FILE__,"plugin_install_script_for_map_bank");

// uninstall Hook called for installation_for_google_map_bank
register_uninstall_hook(__FILE__, "plugin_uninstall_hook_for_google_maps_bank");

// add_action Hook called for function backend_plugin_css_styles_for_google_map_bank
add_action("admin_init","backend_plugin_css_styles_map_bank");

// add_action Hook called for languages for_for_google_map_bank
add_action("plugins_loaded", "plugin_load_textdomain_google_map_bank");

// add_action Hook called for function backend_plugin_java_script_for_google_map_bank
add_action("admin_init","backend_plugin_js_scripts_map_bank");

// add_action Hook called for function frontend_plugin__java_script_for_google_map_bank
add_action("wp_head","frontend_plugin_js_scripts_map_bank"); 

// add_action Hook called for function create_admin_bar_for_google_map_bank
add_action("admin_bar_menu", "create_admin_bar_menus_for_google_map_bank", 100);

// add_action Hook called for function create_global_menus_for_google_map_bank
add_action("admin_menu", "create_global_menus_for_google_map_bank");

// add_action Hook called for function create_short_code_for_google_map_bank
add_shortcode("map_bank", "map_bank_short_code");

// add_action Hook called for create_widget_for_google_map_bank
add_filter("widget_text", "do_shortcode");
add_action("widgets_init", create_function("", "return register_widget(\"MapWidget\");"));
if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/map-widget.php"))
{
	include_once MAP_BK_PLUGIN_DIR ."lib/map-widget.php";
}

// add_action Hook called for create_shortcode_for_google_map_bank
add_action( "media_buttons_context", "add_map_shortcode_button", 1);
add_action("admin_footer","add_map_mce_popup");
add_action("in_plugin_update_message-".MAP_FILE,"google_maps_bank_plugin_update_message");
$version = get_option("google-maps-bank-version-number");
if($version == "" || $version == "1.0"  || $version == "1.1")
{
	add_action("admin_init", "plugin_install_script_for_map_bank");
}
?>