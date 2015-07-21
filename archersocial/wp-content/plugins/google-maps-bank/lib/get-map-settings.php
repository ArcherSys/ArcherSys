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
		if(isset($_REQUEST["map_id"]))
		{
			$map_id = intval($_REQUEST["map_id"]);
		}
		$map_settings = $wpdb->get_results
		(
			$wpdb->prepare
			(
				"SELECT * FROM " . map_bank_meta_table(). " INNER JOIN ".map_bank_create_new_map_table().
				" ON ".map_bank_create_new_map_table().".id = ".map_bank_meta_table().".map_id WHERE ".map_bank_create_new_map_table().
				".id = %d or ".map_bank_create_new_map_table().".parent_id = %d ORDER BY " .map_bank_create_new_map_table().".id DESC " ,
				$map_id,
				$map_id
			)
		);
		
		if(!function_exists("get_map_settings"))
		{
			function get_map_settings($id,$map_settings,$map_type)
			{
				$map_settings_array = array();
				foreach ($map_settings as $row)
				{
					if ($row->map_id == $id)
					{
						$map_settings_array["$row->map_meta_key"] = $row->map_meta_value;
						$map_settings_array["creation_date"] = $row->creation_date;
						if($map_type != "map")
						{
							$map_settings_array["id"] = $row->id;
						}
					}
				}
				return $map_settings_array;
			}
		}
		
		if(!function_exists("get_geo_settings"))
		{
			function get_geo_settings($id,$map_settings,$match)
			{
				$ids = array();
				foreach ($map_settings as $row)
				{
					if ($row->parent_id == $id && $row->map_type == $match)
					{
						if(!in_array($row->id,$ids))
						{
							array_push($ids, $row->id);
						}
					}
				}
				
				$map_marker_array = array();
				foreach ($ids as $row)
				{
					$map_marker = get_map_settings($row,$map_settings,$match);
					array_push($map_marker_array, $map_marker);
				}
				return array_unique($map_marker_array, SORT_REGULAR);
			}
		}
		$map_settings_data = get_map_settings($map_id,$map_settings,"map");
		if(isset($_REQUEST["page"]))
		{
			$marker = array();
			if(isset($_REQUEST["map_id"]))
			{
				$marker = get_geo_settings($map_id,$map_settings,"marker");
				$polygon = get_geo_settings($map_id,$map_settings,"polygon");
				$polyline = get_geo_settings($map_id,$map_settings,"polyline");
				$map_type_data= isset($map_settings_data["map_type"]) ? $map_settings_data["map_type"] : "1";
				$map_themes = isset($map_settings_data["map_themes"]) ? $map_settings_data["map_themes"] : "default1";
				$map_language = isset($map_settings_data["map_language"]) ? $map_settings_data["map_language"] : "en";
				$map_location_longitude = isset($map_settings_data["longitude"]) ? $map_settings_data["longitude"] : "-97.03259696914063";
				$map_location_latitude = isset($map_settings_data["latitude"]) ? $map_settings_data["latitude"] : "35.38453628611739";
					
				$map_kml_layer_update = "0";
				$map_kml_layer_link_update = "";
				$map_weather_layer_update =  "";
				$map_temprature_unit_update = "0";
				$map_wind_speed_unit_update =  "0";
				$map_fussion_table_layer_update = "";
				$map_fussion_layer_key_update =  "Geocodable address";
				$map_fussion_layer_table_name_update = "1mZ53Z70NsChnBMm-qEYmSDOvLXgrreLTkQUvvg";
				$map_traffic_layer_update =  "";
				$map_transit_layer_update = "";
				$map_bicycling_layer_update = "";
				$map_panoramio_layer_update =  "";
				$map_engine_layer_update =  "0";
				$map_layer_id_update = "10446176163891957399-12677872887550376890";
				
				$map_nearest_location_update = isset($map_settings_data["nearest_location"]) ? $map_settings_data["nearest_location"] : "1";
				$map_map_dragable_update = isset($map_settings_data["map_dragable"]) ? $map_settings_data["map_dragable"] : "1";
				$map_pan_control_update = isset($map_settings_data["pan_control"]) ? $map_settings_data["pan_control"] : "1";
				$map_map_type_control_update = isset($map_settings_data["map_type_control"]) ? $map_settings_data["map_type_control"] : "1";
				$map_scale_control_update = isset($map_settings_data["scale_control"]) ? $map_settings_data["scale_control"] : "1";
				$map_overview_control_update = isset($map_settings_data["overview_control"]) ? $map_settings_data["overview_control"] : "1";
				$map_direction_update = "0";
				$map_direction_text_update ="0";
				$map_travel_mode_update = "DRIVING";
				$map_text_color_update = "#000000";
				$map_background_update ="#ffffff";
				$map_border_color_update = "#000000";
				$map_font_family_update = "inherit";
				
				$map_street_view_update = "0";
				$map_close_button_update = "0";
				$map_marker_cluster_update = "0";
				$map_cluster_grid_update = "80";
				$map_max_zoom_level_update ="1";
				$map_circle_overlay_update ="0";
				$map_circle_radius_update ="10";
				$map_stroke_color_update ="#e65765";
				$map_circle_weight_update = "2";
				$map_fill_color_update = "#f8c1c3";
				$map_circle_opacity_update = "0.8";
			}
			if(esc_attr($_REQUEST["page"]) != "manage_map")
			{
				switch($map_type_data)
				{
					case "1":
						$map_type = "ROADMAP";
						break;
					case "2":
						$map_type = "TERRAIN";
						break;
					case "3":
						$map_type = "HYBRID";
						break;
					case "4":
						$map_type = "SATELLITE";
						break;
				}
			}
			switch(esc_attr($_REQUEST["page"]))
			{
				case "gmb_create_new_map":
					$map_title = $map_settings_data["map_title"];
				break;
				case "gmb_add_location":
					$map_location_title = isset($map_settings_data["location_title"]) ? $map_settings_data["location_title"] : "35311 Westech Road, Shawnee, OK 74804, USA";
					$map_location_country = isset($map_settings_data["country"]) ? $map_settings_data["country"] : "USA";
				break;
				case "gmb_add_marker":
					$map_location_title= isset($map_settings_data["location_title"]) ? $map_settings_data["location_title"] : "35311 Westech Road, Shawnee, OK 74804, USA";
					$map_marker_icon_update = "";
					$map_marker_category_update = "1";
					$map_marker_name_update = "";
					$map_marker_animation_update = "0";
					$map_info_window_update = "0";
					$map_info_window_width_update = "400";
					$map_info_title_update = "";
					$map_description_update = "";
					$map_info_dragable_update = "0";
					$map_info_add_image_update = "1";
					$map_info_hyperlink_update = "0";
					$map_info_window_image_url_update = plugins_url("/assets/images/album-cover.png",dirname(__FILE__));
					$map_info_hyperlink_text_update = "";
					$map_info_hyperlink_url_update = "";
					
				break;
				case "gmb_add_polygon":
					$map_location_title= isset($map_settings_data["location_title"]) ? $map_settings_data["location_title"] : "";
					$map_location_latitude = isset($polygon_settings["polygon_latitude"]) ? $polygon_settings["polygon_latitude"] : $map_settings_data["latitude"];
					$map_polygon_line_color_update = "#d00108";
					$map_polygon_line_opacity_update ="1.0";
					$map_polygon_data_update = "";
					$map_polygon_color_update = "#ffb3b3";
					$map_polygon_opacity_update = "0.35";
				break;
				case "gmb_add_polyline":
					$map_location_title= isset($map_settings_data["location_title"]) ? $map_settings_data["location_title"] : "";
					$map_location_title = isset($polyline_settings["polyline_location"]) ? $polyline_settings["polyline_location"] : $map_settings_data["location_title"];
					$map_polyline_color_update = "#000000";
					$map_polyline_opacity_update = "1.0";
					$map_polyline_thickness_update = "2";
					$map_polyline_type_update = "1";
					$map_polyline_data_update = "";
				break;
				case "gmb_edit_location":
					$map_location_title = isset($map_settings_data["location_title"]) ? $map_settings_data["location_title"] : "Unnamed Road, Singapore";
					$map_location_country = isset($map_settings_data["country"]) ? $map_settings_data["country"] : "Singapore";
				break;
				case "gmb_edit_marker":
					$map_location_title= isset($map_settings_data["location_title"]) ? $map_settings_data["location_title"] : "35311 Westech Road, Shawnee, OK 74804, USA";
					$map_marker_icon_update = "";
					$map_marker_category_update = "1";
					$map_marker_name_update = "";
					$map_marker_animation_update = "0";
					$map_info_window_update = "0";
					
					if(isset($_REQUEST["mid"]))
					{
						$marker_id = intval($_REQUEST["mid"]);
						$marker_settings = get_map_settings($marker_id,$map_settings,"marker");
						$map_location_title = isset($marker_settings["marker_location"]) ? $marker_settings["marker_location"] : $map_settings_data["location_title"];
						$map_location_latitude = isset($marker_settings["marker_latitude"]) ? $marker_settings["marker_latitude"] : $map_settings_data["latitude"];
						$map_location_longitude = isset($marker_settings["marker_longitude"]) ? $marker_settings["marker_longitude"] : $map_settings_data["longitude"];
						$map_marker_icon_update = isset($marker_settings["map_marker"]) ? $marker_settings["map_marker"] : "";
						$map_marker_category_update = isset($marker_settings["marker_category"]) ? $marker_settings["marker_category"] : "1";
						$map_marker_name_update = isset($marker_settings["marker_name"]) ? stripcslashes(htmlspecialchars_decode($marker_settings["marker_name"])) :"";
						$map_marker_animation_update = isset($marker_settings["animation"]) ? $marker_settings["animation"] : "0";
						$map_info_window_update = isset($marker_settings["info_window"]) ? $marker_settings["info_window"] : "0";
						$map_info_window_width_update = isset($marker_settings["info_window_width"]) ? $marker_settings["info_window_width"] : "400";
						$map_info_title_update = isset($marker_settings["info_title"]) ? stripcslashes(htmlspecialchars_decode($marker_settings["info_title"])) : "";
						$map_description_update = isset($marker_settings["description"]) ? stripcslashes(htmlspecialchars_decode(html_entity_decode($marker_settings["description"]))) : "";
						$map_info_dragable_update = isset($marker_settings["info_dragable"]) ? $marker_settings["info_dragable"] : "0";
						$map_info_add_image_update = isset($marker_settings["info_add_image"]) ? $marker_settings["info_add_image"] : "1";
						$map_info_hyperlink_update = isset($marker_settings["info_hyperlink"]) ? $marker_settings["info_hyperlink"] : "0";
						$map_info_window_image_url_update = isset($marker_settings["info_window_image_url"]) ? $marker_settings["info_window_image_url"] : "";
						$map_info_hyperlink_text_update = isset($marker_settings["info_hyperlink_text"]) ? stripcslashes(htmlspecialchars_decode($marker_settings["info_hyperlink_text"])) : "";
						$map_info_hyperlink_url_update = isset($marker_settings["info_hyperlink_url"]) ? $marker_settings["info_hyperlink_url"] : "";
					}
				break;
				case "gmb_edit_polygon":
					$map_location_title= isset($map_settings_data["location_title"]) ? $map_settings_data["location_title"] : "";
					$map_polygon_line_color_update = "#d00108";
					$map_polygon_line_opacity_update ="1.0";
					$map_polygon_data_update = "";
					$map_polygon_color_update = "#ffb3b3";
					$map_polygon_opacity_update = "0.35";
					if(isset($_REQUEST["pgon_id"]))
					{
						$pgon_id = intval($_REQUEST["pgon_id"]);
						$polygon_settings = get_map_settings($pgon_id,$map_settings,"polygon");
						$map_location_latitude = isset($polygon_settings["polygon_latitude"]) ? $polygon_settings["polygon_latitude"] : $map_settings_data["latitude"];
						$map_location_longitude = isset($polygon_settings["polygon_longitute"]) ? $polygon_settings["polygon_longitute"] : $map_settings_data["longitude"];
						$map_location_title = isset($polygon_settings["polygon_location"]) ? $polygon_settings["polygon_location"] : $map_settings_data["location_title"];
						$map_polygon_line_color_update = isset($polygon_settings["polygon_line_color"]) ? $polygon_settings["polygon_line_color"] : "#d00108";
						$map_polygon_line_opacity_update = isset($polygon_settings["polygon_line_opacity"]) ? $polygon_settings["polygon_line_opacity"] : "1.0";
						$map_polygon_data_update = isset($polygon_settings["polygon_data"]) ? $polygon_settings["polygon_data"] : "";
						$map_polygon_color_update = isset($polygon_settings["polygon_color"]) ? $polygon_settings["polygon_color"] : "#ffb3b3";
						$map_polygon_opacity_update = isset($polygon_settings["polygon_opacity"]) ? $polygon_settings["polygon_opacity"] : "0.35";
					}
				break;
				case "gmb_edit_polyline":
					$map_location_title= isset($map_settings_data["location_title"]) ? $map_settings_data["location_title"] : "";
					$map_polyline_color_update = "#000000";
					$map_polyline_opacity_update = "1.0";
					$map_polyline_thickness_update = "2";
					$map_polyline_type_update = "1";
					$map_polyline_data_update = "";
					if(isset($_REQUEST["pline_id"]))
					{
						$pline_id = intval($_REQUEST["pline_id"]);
						$polyline_settings = get_map_settings($pline_id,$map_settings,"polyline");
						$map_location_latitude = isset($polyline_settings["polyline_latitude"]) ? $polyline_settings["polyline_latitude"] : $map_settings_data["latitude"];
						$map_location_longitude = isset($polyline_settings["polyline_longitute"]) ? $polyline_settings["polyline_longitute"] : $map_settings_data["longitude"];
						$map_location_title = isset($polyline_settings["polyline_location"]) ? $polyline_settings["polyline_location"] : $map_settings_data["location_title"];
						$map_polyline_color_update = isset($polyline_settings["polyline_color"]) ? $polyline_settings["polyline_color"] : "#000000";
						$map_polyline_opacity_update = isset($polyline_settings["polyline_opacity"]) ? $polyline_settings["polyline_opacity"] : "1.0";
						$map_polyline_thickness_update = isset($polyline_settings["polyline_thickness"]) ? $polyline_settings["polyline_thickness"] : "2";
						$map_polyline_type_update = isset($polyline_settings["polyline_type"]) ? $polyline_settings["polyline_type"] : "1";
						$map_polyline_data_update = isset($polyline_settings["polyline_data"]) ? $polyline_settings["polyline_data"] : "";
					}
				break;
				case "manage_map":
					$manage_location_data = get_map_settings($map_id,$map_settings,"map");
					$manage_marker_data = get_geo_settings($map_id,$map_settings,"marker");
					$manage_polygon_data = get_geo_settings($map_id,$map_settings,"polygon");
					$manage_polyline_data = get_geo_settings($map_id,$map_settings,"polyline");
				break;
			}
		}
	}
}
?>