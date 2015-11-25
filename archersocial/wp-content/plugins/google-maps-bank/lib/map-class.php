<?php
if (!is_user_logged_in())
{
	return;
}
else
{
	switch($gmb_role)
	{
		case "administrator":
			$user_role_permission = "manage_options";
		break;
		case "editor":
			$user_role_permission = "publish_pages";
		break;
		case "author":
			$user_role_permission = "publish_posts";
		break;
	}
	if (!current_user_can($user_role_permission))
	{
		return;
	}
	else
	{
		if(!class_exists("save_data"))
		{
			class save_data
			{
				function insert_data($tbl, $data)
				{
					global $wpdb;
					$wpdb->insert($tbl,$data);
				}
				function update_data($tbl,$data,$where)
				{
					global $wpdb;
					$wpdb->update($tbl,$data,$where);
				}
				function delete_data($tbl,$where)
				{
					global $wpdb;
					$wpdb->delete($tbl, $where);
				}
				
			}
		}
		if(isset($_REQUEST["param"]))
		{
			switch($_REQUEST["param"])
			{
				case "create_new_map":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "map_create") )
					{
						$insert = new save_data();
						$new_map = array();
						$meta_map_array = array();
						$meta_map_value = array();
						$meta_map_key = array();
						
						$new_map["parent_id"] = 0;
						$new_map["map_type"] = "map";
						$new_map["creation_date"] = date("Y-m-d");
						$map_id = intval($_REQUEST["map_id"]);
						
						$meta_map_array["map_title"] = htmlspecialchars(esc_attr($_REQUEST["title"]));
						$meta_map_array["map_language"] = esc_attr($_REQUEST["map_language"]);
						$meta_map_array["map_type"] = intval($_REQUEST["map_type"]);
						$meta_map_array["map_themes"] = esc_attr($_REQUEST["themes"]);
						$map_count = $wpdb->get_var
						(
							$wpdb->prepare
							(
								"SELECT count(id) FROM ".map_bank_create_new_map_table()." where map_type=%s",
								"map"
							)
						);
						
						if($map_id != 0)
						{
							foreach ($meta_map_array as $key => $val)
							{
								$meta_map_key["map_id"] = $map_id;
								$meta_map_key["map_meta_key"] = $key;
								$meta_map_value["map_meta_value"] = $val;
								$insert->update_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
							}
							echo $map_id;
						}
						else
						{
							if($map_count < 2)
							{
								$insert->insert_data(map_bank_create_new_map_table(),$new_map);
								$lastid = $wpdb->insert_id;
								foreach ($meta_map_array as $key => $val)
								{
									$meta_map_value["map_id"] = $lastid;
									$meta_map_value["map_meta_key"] = $key;
									$meta_map_value["map_meta_value"] = $val;
									$insert->insert_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
								}
								echo $lastid;
							}
							else 
							{
								echo "0";
							}
							
						}
						die();
					}
				break;
				case "add_location_db":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "add_new_location"))
					{
						$insert = new save_data();
						$meta_map_array = array();
						$meta_map_value = array();
						$meta_map_key = array();
						
						$meta_map_array["location_title"] = htmlspecialchars_decode(esc_attr($_REQUEST["geocomplete"]));
						$meta_map_array["country"] = esc_attr($_REQUEST["country"]);
						$meta_map_array["longitude"] = doubleval($_REQUEST["longitude"]);
						$meta_map_array["latitude"] = doubleval($_REQUEST["latitude"]);
						$map_id = intval($_REQUEST["map_id"]);
						$location_count = $wpdb->get_var
						(
							$wpdb->prepare
							(
								"SELECT count(map_meta_key) FROM " .map_bank_meta_table() . " WHERE map_id = %d AND map_meta_key = %s ",
								$map_id,
								"location_title"
							)
						);
						if($location_count != 0)
						{
							foreach ($meta_map_array as $key => $val)
							{
								$meta_map_key["map_id"] = $map_id;
								$meta_map_key["map_meta_key"] = $key;
								$meta_map_value["map_meta_value"] = $val;
								$insert->update_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
							}
						}
						else
						{
							foreach ($meta_map_array as $key => $val)
							{
								$meta_map_value["map_id"] = $map_id;
								$meta_map_value["map_meta_key"] = $key;
								$meta_map_value["map_meta_value"] = $val;
								$insert->insert_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
							}
						}
						die();
					}
				break;
				case "add_marker_db":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "new_marker_add"))
					{
						$insert = new save_data();
						$new_map = array();
						$new_map["parent_id"] = intval($_REQUEST["map_id"]);
						$new_map["map_type"] = "marker";
					
						$meta_map_array = array();
						$meta_map_value = array();
						$meta_map_key = array();
						$map_icon = plugins_url("/assets/images/map-icons/aboriginal.png",dirname(__FILE__));
						$meta_map_array["marker_location"] = esc_attr($_REQUEST["geocomplete_marker"]);
						$meta_map_array["map_marker"] = esc_attr($_REQUEST["marker_icon_image"]) != "" ? esc_attr($_REQUEST["marker_icon_image"]) :$map_icon;
						$meta_map_array["marker_category"] = intval($_REQUEST["ux_ddl_Marker"]);
						$meta_map_array["marker_name"] = isset($_REQUEST["marker_name"]) ? htmlspecialchars(esc_attr($_REQUEST["marker_name"])) : "";
						echo $meta_map_array["marker_latitude"] = esc_attr($_REQUEST["ux_txt_latitude"]);
						echo $meta_map_array["marker_longitude"] = esc_attr($_REQUEST["ux_txt_longitude"]);
						$meta_map_array["animation"] = isset($_REQUEST["ux_rdl_animation"]) ? intval($_REQUEST["ux_rdl_animation"]) : 0;
						$meta_map_array["info_window"] = isset($_REQUEST["ux_rdl_info_window"]) ? intval($_REQUEST["ux_rdl_info_window"]) : 0;
						
						$new_map["creation_date"] = date("Y-m-d");
						$insert->insert_data(map_bank_create_new_map_table(),$new_map);
						$lastid = $wpdb->insert_id;
						foreach ($meta_map_array as $key => $val)
						{
							$meta_map_value["map_id"] = $lastid;
							$meta_map_value["map_meta_key"] = $key;
							$meta_map_value["map_meta_value"] = $val;
							$insert->insert_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
						}
						die();
					}
				break;
				case "update_marker_db":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "marker_update"))
					{
						$update_marker = new save_data();
						$meta_map_array = array();
						$meta_map_value = array();
						$meta_map_key = array();
						$map_icon = plugins_url("/assets/images/map-icons/aboriginal.png",dirname(__FILE__));
						$meta_map_array["marker_location"] = esc_attr($_REQUEST["geocomplete_marker"]);
						$meta_map_array["map_marker"] = esc_attr($_REQUEST["marker_icon_image"]) != "0" ? esc_attr($_REQUEST["marker_icon_image"]) :$map_icon;
						$meta_map_array["marker_category"] = intval($_REQUEST["ux_ddl_Marker"]);
						$meta_map_array["marker_name"] = isset($_REQUEST["marker_name"]) ? htmlspecialchars(esc_attr($_REQUEST["marker_name"])) : "";
						$meta_map_array["marker_latitude"] = esc_attr($_REQUEST["ux_txt_latitude"]);
						$meta_map_array["marker_longitude"] = esc_attr($_REQUEST["ux_txt_longitude"]);
						$meta_map_array["animation"] = isset($_REQUEST["ux_rdl_animation"]) ? intval($_REQUEST["ux_rdl_animation"]) : 0;
						$meta_map_array["info_window"] = isset($_REQUEST["ux_rdl_info_window"]) ? intval($_REQUEST["ux_rdl_info_window"]) : 0;
						
						foreach ($meta_map_array as $key => $val)
						{
							$meta_map_key["map_id"] = intval($_REQUEST["marker_id"]);;
							$meta_map_key["map_meta_key"] = $key;
							$meta_map_value["map_meta_value"] = $val;
							$update_marker->update_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
						}
						die();
					}
				break;
				case "single_marker_delete":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "marker_delete"))
					{
						$delete_single_marker = new save_data();
						$where = array();
						$where["map_id"] = intval($_REQUEST["marker_id"]);
						$delete_single_marker->delete_data(map_bank_meta_table(),$where);
						$where = array();
						$where["id"] = intval($_REQUEST["marker_id"]);
						$delete_single_marker->delete_data(map_bank_create_new_map_table(),$where);
						die();
					}
				break;
				case "add_polygon_db":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "new_polygon_add"))
					{
						$insert_polygon = new save_data();
						$new_map = array();
						$meta_map_array = array();
						$meta_map_value = array();
						$meta_map_key = array();
						$new_map["parent_id"] = intval($_REQUEST["map_id"]);
						$new_map["map_type"] = "polygon";
						$new_map["creation_date"] = date("Y-m-d");
						
						$meta_map_array["polygon_location"] = esc_attr($_REQUEST["geocomplete"]);
						$meta_map_array["polygon_longitute"] = doubleval($_REQUEST["ux_txt_longitude"]);
						$meta_map_array["polygon_latitude"] = doubleval($_REQUEST["ux_txt_latitude"]);
						$meta_map_array["polygon_line_color"] = esc_attr($_REQUEST["ux_clr_font_color"]);
						$meta_map_array["polygon_line_opacity"] = doubleval($_REQUEST["ux_txt_line_opacity"]);
						$meta_map_array["polygon_data"] = esc_attr($_REQUEST["ux_txt_polygon_data"]);
						$meta_map_array["polygon_color"] = esc_attr($_REQUEST["ux_clr_Polygon_color"]);
						$meta_map_array["polygon_opacity"] = doubleval($_REQUEST["ux_txt_polygon_opacity"]);
						
						$insert_polygon->insert_data(map_bank_create_new_map_table(),$new_map);
						$lastid = $wpdb->insert_id;
						foreach ($meta_map_array as $key => $val)
						{
							$meta_map_value["map_id"] = $lastid;
							$meta_map_value["map_meta_key"] = $key;
							$meta_map_value["map_meta_value"] = $val;
							$insert_polygon->insert_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
						}
						die();
					}
				break;
				case "update_polygon_db":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "polygon_update"))
					{
						$update_polygon = new save_data();
						$meta_map_array = array();
						$meta_map_value = array();
						$meta_map_key = array();
						
						$meta_map_array["polygon_location"] = esc_attr($_REQUEST["geocomplete"]);
						$meta_map_array["polygon_longitute"] = doubleval($_REQUEST["ux_txt_longitude"]);
						$meta_map_array["polygon_latitude"] = doubleval($_REQUEST["ux_txt_latitude"]);
						$meta_map_array["polygon_line_color"] = esc_attr($_REQUEST["ux_clr_font_color"]);
						$meta_map_array["polygon_line_opacity"] = doubleval($_REQUEST["ux_txt_line_opacity"]);
						$meta_map_array["polygon_data"] = esc_attr($_REQUEST["ux_txt_polygon_data"]);
						$meta_map_array["polygon_color"] = esc_attr($_REQUEST["ux_clr_Polygon_color"]);
						$meta_map_array["polygon_opacity"] = doubleval($_REQUEST["ux_txt_polygon_opacity"]);
						
						foreach ($meta_map_array as $key => $val)
						{
							$meta_map_key["map_id"] = intval($_REQUEST["polygon_id"]);;
							$meta_map_key["map_meta_key"] = $key;
							$meta_map_value["map_meta_value"] = $val;
							$update_polygon->update_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
						}
						die();
					}
				break;
				case "single_polygon_delete":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "polygon_delete"))
					{
						$delete_single_polygon = new save_data();
						$where = array();
						$where["map_id"] = intval($_REQUEST["polygon_id"]);
						$delete_single_polygon->delete_data(map_bank_meta_table(),$where);
						$where = array();
						$where["id"] = intval($_REQUEST["polygon_id"]);
						$delete_single_polygon->delete_data(map_bank_create_new_map_table(),$where);
						die();
					}
				break;
				case "add_polyline_db":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "new_polyline_add" ))
					{
						$new_map = array();
						$meta_map_array = array();
						$meta_map_value = array();
						$meta_map_key = array();
						$insert_polyline = new save_data();
						$new_map["parent_id"] = intval($_REQUEST["map_id"]);
						$new_map["map_type"] = "polyline";
						$new_map["creation_date"] = date("Y-m-d");
						
						$meta_map_array["polyline_location"] = esc_attr($_REQUEST["geocomplete"]);
						$meta_map_array["polyline_longitute"] = doubleval($_REQUEST["ux_txt_longitude"]);
						$meta_map_array["polyline_latitude"] = doubleval($_REQUEST["ux_txt_latitude"]);
						$meta_map_array["polyline_color"] = esc_attr($_REQUEST["ux_clr_polyline_color"]);
						$meta_map_array["polyline_opacity"] = doubleval($_REQUEST["ux_txt_polyline_opacity"]);
						$meta_map_array["polyline_thickness"] = intval($_REQUEST["ux_txt_polyline_thicknes"]);
						$meta_map_array["polyline_type"] = intval($_REQUEST["ux_ddl_polyline_type"]);
						$meta_map_array["polyline_data"] = esc_attr($_REQUEST["ux_txt_polyline_data"]);
						
						$insert_polyline->insert_data(map_bank_create_new_map_table(),$new_map);
						$lastid = $wpdb->insert_id;
						foreach ($meta_map_array as $key => $val)
						{
							$meta_map_value["map_id"] = $lastid;
							$meta_map_value["map_meta_key"] = $key;
							$meta_map_value["map_meta_value"] = $val;
							$insert_polyline->insert_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
						}
						die();
					}
				break;
				case "update_polyline_db":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "polyline_update" ))
					{
						$update_polyline = new save_data();
						$meta_map_array = array();
						$meta_map_value = array();
						$meta_map_key = array();
							
						$meta_map_array["polyline_location"] = esc_attr($_REQUEST["geocomplete"]);
						$meta_map_array["polyline_longitute"] = doubleval($_REQUEST["ux_txt_longitude"]);
						$meta_map_array["polyline_latitude"] = doubleval($_REQUEST["ux_txt_latitude"]);
						$meta_map_array["polyline_color"] = esc_attr($_REQUEST["ux_clr_polyline_color"]);
						$meta_map_array["polyline_opacity"] = doubleval($_REQUEST["ux_txt_polyline_opacity"]);
						$meta_map_array["polyline_thickness"] = intval($_REQUEST["ux_txt_polyline_thicknes"]);
						$meta_map_array["polyline_type"] = intval($_REQUEST["ux_ddl_polyline_type"]);
						$meta_map_array["polyline_data"] = esc_attr($_REQUEST["ux_txt_polyline_data"]);
							
						foreach ($meta_map_array as $key => $val)
						{
							$meta_map_key["map_id"] = intval($_REQUEST["polyline_id"]);;
							$meta_map_key["map_meta_key"] = $key;
							$meta_map_value["map_meta_value"] = $val;
							$update_polyline->update_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
						}
						die();
					}
				break;
				case "single_polyline_delete":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "polyline_delete" ))
					{
						$delete_single_polyline = new save_data();
						$where = array();
						$where["map_id"] = intval($_REQUEST["polyline_id"]);
						$delete_single_polyline->delete_data(map_bank_meta_table(),$where);
						$where = array();
						$where["id"] = intval($_REQUEST["polyline_id"]);
						$delete_single_polyline->delete_data(map_bank_create_new_map_table(),$where);
						die();
					}
				break;
				case "add_adv_settings_db":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "adv_settings" ))
					{
						$insert = new save_data();
						$meta_map_array = array();
						$meta_map_value = array();
						$meta_map_key = array();
				
						$map_id = intval($_REQUEST["map_id"]);
						$meta_map_array["nearest_location"] = isset($_REQUEST["ux_rdl_nearest_location"]) ? intval($_REQUEST["ux_rdl_nearest_location"]) : "0";
						$meta_map_array["map_dragable"] = isset($_REQUEST["ux_rdl_map_draggable"]) ? intval($_REQUEST["ux_rdl_map_draggable"]) : "0";
						$meta_map_array["pan_control"] = isset($_REQUEST["ux_rdl_pan_control"]) ? intval($_REQUEST["ux_rdl_pan_control"]) : "0";
						$meta_map_array["map_type_control"] = isset($_REQUEST["ux_rdl_map_control"]) ? intval($_REQUEST["ux_rdl_map_control"]) : "0";
						$meta_map_array["scale_control"] = isset($_REQUEST["ux_rdl_scale_control"]) ? intval($_REQUEST["ux_rdl_scale_control"]) : "0";
						$meta_map_array["overview_control"] = isset($_REQUEST["ux_rdl_overview"]) ? intval($_REQUEST["ux_rdl_overview"]) : "0";
				
						$count_settings = $wpdb->get_var
						(
							$wpdb->prepare
							(
								"SELECT count(map_meta_key) FROM " .map_bank_meta_table() . " where map_id = %d AND map_meta_key=%s ",
								$map_id,
								"nearest_location"
							)
						);
						if($count_settings != 0)
						{
							foreach ($meta_map_array as $key => $val)
							{
								$meta_map_key["map_id"] = intval($_REQUEST["map_id"]);
								$meta_map_key["map_meta_key"] = $key;
								$meta_map_value["map_meta_value"] = $val;
								$insert->update_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
							}
						}
						else
						{
							foreach ($meta_map_array as $key => $val)
							{
								$meta_map_value["map_id"] = intval($_REQUEST["map_id"]);
								$meta_map_value["map_meta_key"] = $key;
								$meta_map_value["map_meta_value"] = $val;
								$insert->insert_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
							}
						}
						die();
					}
				break;
				case "edit_adv_settings_db":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "edit_adv_settings" ))
					{
						$insert = new save_data();
						$meta_map_array = array();
						$meta_map_value = array();
						$meta_map_key = array();
							
						$map_id = intval($_REQUEST["map_id"]);
						$meta_map_array["nearest_location"] = isset($_REQUEST["ux_rdl_nearest_location"]) ? intval($_REQUEST["ux_rdl_nearest_location"]) : "0";
						$meta_map_array["map_dragable"] = isset($_REQUEST["ux_rdl_map_draggable"]) ? intval($_REQUEST["ux_rdl_map_draggable"]) : "0";
						$meta_map_array["pan_control"] = isset($_REQUEST["ux_rdl_pan_control"]) ? intval($_REQUEST["ux_rdl_pan_control"]) : "0";
						$meta_map_array["map_type_control"] = isset($_REQUEST["ux_rdl_map_control"]) ? intval($_REQUEST["ux_rdl_map_control"]) : "0";
						$meta_map_array["scale_control"] = isset($_REQUEST["ux_rdl_scale_control"]) ? intval($_REQUEST["ux_rdl_scale_control"]) : "0";
						$meta_map_array["overview_control"] = isset($_REQUEST["ux_rdl_overview"]) ? intval($_REQUEST["ux_rdl_overview"]) : "0";
				
						foreach ($meta_map_array as $key => $val)
						{
							$meta_map_key["map_id"] = intval($_REQUEST["map_id"]);
							$meta_map_key["map_meta_key"] = $key;
							$meta_map_value["map_meta_value"] = $val;
							$insert->update_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
						}
						die();
					}
				break;
				case "single_map_delete":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "one_map_delete" ))
					{
						$wpdb->query
						(
							$wpdb->prepare
							(
								"DELETE FROM " .map_bank_meta_table()." WHERE map_id IN (SELECT id FROM ".map_bank_create_new_map_table()." WHERE parent_id = %d)",
								intval($_REQUEST["map_id"])
							)
						);
						$wpdb->query
						(
							$wpdb->prepare
							(
								"DELETE FROM " .map_bank_create_new_map_table()." WHERE parent_id = %d)",
								intval($_REQUEST["map_id"])
							)
						);
						$delete_single_map = new save_data();
						$where = array();
						$where["map_id"] = intval($_REQUEST["map_id"]);
						$delete_single_map->delete_data(map_bank_meta_table(),$where);
						$where = array();
						$where["parent_id"] = intval($_REQUEST["map_id"]);
						$delete_single_map->delete_data(map_bank_create_new_map_table(),$where);
						$where = array();
						$where["id"] = intval($_REQUEST["map_id"]);
						$delete_single_map->delete_data(map_bank_create_new_map_table(),$where);
						die();
					}
				break;
				case "google_map_plugin_updates":
					if(wp_verify_nonce( $_REQUEST["_wpnonce"], "update_plugin_nonce"))
					{
						$plugin_update = esc_attr($_REQUEST["google_map_updates"]);
						update_option("google-maps-bank-automatic-update",$plugin_update);
						die();
					}
				break;
			}
		}
	}
}
?>