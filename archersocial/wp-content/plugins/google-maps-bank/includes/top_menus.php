<?php 
///////////////////////////////////  Map Bank Menus Icons   /////////////////////////////////////////////////////
if (!is_user_logged_in())
{
	return;
}
else 
{
	$wp_admin_bar->add_menu( array(
		"id" => "map_bank_links",
		"title" =>"<span class=\"color_map\">Google Maps</span>",
		"href" => site_url() ."/wp-admin/admin.php?page=gmb_dashboard",
	));
	$wp_admin_bar->add_menu( array(
		"parent" => "map_bank_links",
		"id"     => "gmb_dashboard_links",
		"href"  => site_url() ."/wp-admin/admin.php?page=gmb_dashboard",
		"title" => __("Dashboard", map_bank))/* set the sub-menu name */
	);
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
		$wp_admin_bar->add_menu( array(
			"parent" => "map_bank_links",
			"id"     => "create_new_map_links",
			"href"  => site_url() ."/wp-admin/admin.php?page=gmb_create_new_map",
			"title" => __("Create New Map", map_bank))/* set the sub-menu name */
		);
	}
	$wp_admin_bar->add_menu( array(
		"parent" => "map_bank_links",
		"id"     => "manage_map_links",
		"href"  => site_url() ."/wp-admin/admin.php?page=manage_map",
		"title" => __("Manage Maps", map_bank))/* set the sub-menu name */
	);
	$wp_admin_bar->add_menu( array(
		"parent" => "map_bank_links",
		"id"     => "gmb_short_code_links",
		"href"  => site_url() ."/wp-admin/admin.php?page=short_code_map",
		"title" => __("Short Codes", map_bank))/* set the sub-menu name */
	);
	$wp_admin_bar->add_menu( array(
		"parent" => "map_bank_links",
		"id"     => "gmb_plugin_updates_links",
		"href"  => site_url() ."/wp-admin/admin.php?page=gmb_plugin_updates",
		"title" => __("Plugin Updates", map_bank))/* set the sub-menu name */
	);
	$wp_admin_bar->add_menu( array(
		"parent" => "map_bank_links",
		"id"     => "gmb_feature_request_links",
		"href"  => site_url() ."/wp-admin/admin.php?page=gmb_feature_requests",
		"title" => __("Feature Requests", map_bank))/* set the sub-menu name */
	);
	$wp_admin_bar->add_menu( array(
		"parent" => "map_bank_links",
		"id"     => "gmb_system_status_links",
		"href"  => site_url() ."/wp-admin/admin.php?page=gmb_system_status",
		"title" => __( "System Status", map_bank))/* set the sub-menu name */
	);
	$wp_admin_bar->add_menu( array(
		"parent" => "map_bank_links",
		"id"     => "gmb_recommended_plugins_links",
		"href"  => site_url() ."/wp-admin/admin.php?page=gmb_recommended_plugins",
		"title" => __("Recommendations", map_bank))/* set the sub-menu name */
	);
	$wp_admin_bar->add_menu( array(
		"parent" => "map_bank_links",
		"id"     => "gmb_pro_version_link",
		"href"  => site_url() ."/wp-admin/admin.php?page=gmb_pro_version",
		"title" => __("Premium Editions", map_bank))/* set the sub-menu name */
	);
	$wp_admin_bar->add_menu( array(
		"parent" => "map_bank_links",
		"id"     => "gmb_other_services_linkes",
		"href"  => site_url() ."/wp-admin/admin.php?page=gmb_other_services",
		"title" => __("Our Other Services", map_bank))/* set the sub-menu name */
	);
	
}
?>