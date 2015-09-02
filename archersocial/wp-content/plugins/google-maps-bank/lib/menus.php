<?php
//--------------------------------------------------------------------------------------------------------------//
// CODE FOR CREATING MENUS
//---------------------------------------------------------------------------------------------------------------//
if (!is_user_logged_in())
{
	return;
}
else 
{
	add_menu_page("Google Maps", __("Google Maps", map_bank), "read", "gmb_dashboard","","dashicons-location-alt");
	add_submenu_page("gmb_dashboard", "Dashboard", __("Dashboard", map_bank), "read", "gmb_dashboard","gmb_dashboard");
	$map_count = $wpdb->get_var
	(
		$wpdb->prepare
		(
			"SELECT count(id) FROM ".map_bank_create_new_map_table()." where map_type=%s",
			"map"
		)
	);
	if($map_count < 2)
	{
		add_submenu_page("gmb_dashboard", "Create New Map", __("Create New Map", map_bank), "read", "gmb_create_new_map", "gmb_create_new_map");
	}
	add_submenu_page("gmb_dashboard", "Manage Maps", __("Manage Maps", map_bank), "read", "manage_map","manage_map");
	add_submenu_page("gmb_dashboard", "Short Codes", __("Short Codes", map_bank), "read", "short_code_map","short_code_map");
	add_submenu_page("gmb_dashboard", "Plugin Updates", __("Plugin Updates",map_bank), "read", "gmb_plugin_updates", "gmb_plugin_updates");
	add_submenu_page("gmb_dashboard", "Feature Requests", __("Feature Requests",map_bank), "read", "gmb_feature_requests", "gmb_feature_requests");
	add_submenu_page("gmb_dashboard", "System Status", __("System Status", map_bank), "read", "gmb_system_status", "gmb_system_status");
	add_submenu_page("gmb_dashboard", "Recommendations", __("Recommendations", map_bank), "read", "gmb_recommended_plugins", "gmb_recommended_plugins");
	add_submenu_page("gmb_dashboard", "Premium Editions", __("Premium Editions", map_bank), "read", "gmb_pro_version", "gmb_pro_version");
	add_submenu_page("gmb_dashboard", "Our Other Services", __("Our Other Services", map_bank), "read", "gmb_other_services", "gmb_other_services");
	add_submenu_page("", "", "", "read", "gmb_create_new_map", "gmb_create_new_map");
	add_submenu_page("", "","", "read", "gmb_add_location", "gmb_add_location");
	add_submenu_page("", "","", "read", "gmb_add_marker", "gmb_add_marker");
	add_submenu_page("", "","", "read", "gmb_add_polygon", "gmb_add_polygon");
	add_submenu_page("", "","", "read", "gmb_add_polyline", "gmb_add_polyline");
	add_submenu_page("", "","", "read", "gmb_add_layers", "gmb_add_layers");
	add_submenu_page("", "","", "read", "gmb_adv_settings", "gmb_adv_settings");
	add_submenu_page("", "","", "read", "gmb_edit_location", "gmb_edit_location");
	add_submenu_page("", "","", "read", "gmb_edit_marker", "gmb_edit_marker");
	add_submenu_page("", "","", "read", "gmb_edit_polygon", "gmb_edit_polygon");
	add_submenu_page("", "","", "read", "gmb_edit_polyline", "gmb_edit_polyline");
	add_submenu_page("", "","", "read", "gmb_edit_adv_settings", "gmb_edit_adv_settings" );
	add_submenu_page("", "","", "read", "map_preview", "map_preview" );
	
	if(!function_exists( "gmb_create_new_map" ))
	{
		function gmb_create_new_map()
		{
			global $wpdb,$current_user;
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
			$map_count = $wpdb->get_var
			(
				$wpdb->prepare
				(
					"SELECT count(id) FROM ".map_bank_create_new_map_table()." where map_type=%s",
					"map"
				)
			);
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if($map_count < 3)
			{
				if (file_exists(MAP_BK_PLUGIN_DIR ."/views/create-map.php"))
				{
					include_once MAP_BK_PLUGIN_DIR ."/views/create-map.php";
				}
			}
			else
			{
				header("Location: ".admin_url()."admin.php?page=gmb_dashboard");
			}
		}
	}
	
	if(!function_exists( "gmb_add_location" ))
	{
		function gmb_add_location()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/locations/add-location.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/locations/add-location.php";
			}
		}
	}
	
	if(!function_exists( "gmb_add_marker" ))
	{
		function gmb_add_marker()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/markers/add-marker.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/markers/add-marker.php";
			}
		}
	}
	
	if(!function_exists( "gmb_add_polygon" ))
	{
		function gmb_add_polygon()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/polygons/add-polygon.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/polygons/add-polygon.php";
			}
		}
	}
	
	if(!function_exists( "gmb_add_polyline" ))
	{
		function gmb_add_polyline()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/polylines/add-polyline.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/polylines/add-polyline.php";
			}
		}
	}
	
	if(!function_exists( "gmb_add_layers" ))
	{
		function gmb_add_layers()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/layers/add-layers.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/layers/add-layers.php";
			}
		}
	}
	
	if(!function_exists( "gmb_adv_settings" ))
	{
		function gmb_adv_settings()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/settings/advance-settings.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/settings/advance-settings.php";
			}
		}
	}
	
	if(!function_exists( "gmb_dashboard" ))
	{
		function gmb_dashboard()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/dashboard.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/dashboard.php";
			}
		}
	}
	
	if(!function_exists( "gmb_system_status" ))
	{
		function gmb_system_status()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/system-report.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/system-report.php";
			}
		}
	}
	
	
	if(!function_exists( "gmb_edit_location" ))
	{
		function gmb_edit_location()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/locations/edit-location.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/locations/edit-location.php";
			}
		}
	}
	
	if(!function_exists( "gmb_edit_marker" ))
	{
		function gmb_edit_marker()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/markers/edit-marker.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/markers/edit-marker.php";
			}
		}
	}
	
	if(!function_exists( "gmb_edit_polygon" ))
	{
		function gmb_edit_polygon()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/polygons/edit-polygon.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/polygons/edit-polygon.php";
			}
		}
	}
	
	if(!function_exists( "gmb_edit_polyline" ))
	{
		function gmb_edit_polyline()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/polylines/edit-polyline.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/polylines/edit-polyline.php";
			}
		}
	}
	
	if(!function_exists( "gmb_recommended_plugins" ))
	{
		function gmb_recommended_plugins()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/recommended-plugins.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/recommended-plugins.php";
			}
		}
	}
	
	if(!function_exists( "gmb_other_services" ))
	{
		function gmb_other_services()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/other-services.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/other-services.php";
			}
		}
	}
	
	if(!function_exists( "manage_map" ))
	{
		function manage_map()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/manage-tab.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/manage-tab.php";
			}
		}
	}
	
	if(!function_exists( "short_code_map" ))
	{
		function short_code_map()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/short-code-tab.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/short-code-tab.php";
			}
		}
	}
	
	if(!function_exists( "gmb_edit_adv_settings" ))
	{
		function gmb_edit_adv_settings()
		{
			global $wpdb,$current_user;
			$gmb_role = $wpdb->prefix . "capabilities";
			$current_user->role = array_keys($current_user->$gmb_role);
			$gmb_role = $current_user->role[0];
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/settings/edit-advance-settings.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/settings/edit-advance-settings.php";
			}
		}
	}
	
	if(!function_exists( "map_preview" ))
	{
		function map_preview()
		{
			global $wpdb,$current_user;
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
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/map-preview.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/map-preview.php";
			}
		}
	}
	
	if(!function_exists( "gmb_pro_version" ))
	{
		function gmb_pro_version()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/gmb-purchase-pro-version.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/gmb-purchase-pro-version.php";
			}
		}
	}
	
	if(!function_exists( "gmb_plugin_updates" ))
	{
		function gmb_plugin_updates()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/automatic-plugin-update.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/automatic-plugin-update.php";
			}
		}
	}
	
	if(!function_exists( "gmb_feature_requests" ))
	{
		function gmb_feature_requests()
		{
			global $wpdb,$current_user;
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
			if(file_exists(MAP_BK_PLUGIN_DIR."/includes/tabs.php"))
			{
				include_once MAP_BK_PLUGIN_DIR."/includes/tabs.php";
			}
			if (file_exists(MAP_BK_PLUGIN_DIR ."/views/google-map-feedback.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/views/google-map-feedback.php";
			}
		}
	}
	
}
?>