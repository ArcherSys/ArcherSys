<?php
require_once(ABSPATH . "wp-admin/includes/upgrade.php");
update_option("tech-banker-updation-check-url","http://tech-banker.com/wp-admin/admin-ajax.php");
$version = get_option("google-maps-bank-version-number");
if(!class_exists("save_settings"))
{
	class save_settings
	{
		function insert_data($tbl, $data)
		{
			global $wpdb;
			$wpdb->insert($tbl,$data);
		}
	}
}

if(!function_exists("create_new_map_bank"))
{
	function create_new_map_bank()
	{
		$sql = "CREATE TABLE IF NOT EXISTS " . map_bank_create_new_map_table()." (
				`id` int(10) NOT NULL AUTO_INCREMENT,
				`parent_id` int(11) NOT NULL,
				`map_type` varchar(100) NOT NULL,
				`creation_date` DATE NOT NULL,
				PRIMARY KEY (`id`)
				) DEFAULT CHARSET=utf8 COLLATE utf8_general_ci";
		dbDelta($sql);
	}
}

if(!function_exists("create_maps_meta"))
{
	function create_maps_meta()
	{
		$sql = "CREATE TABLE IF NOT EXISTS ".map_bank_meta_table()." (
				`meta_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
				`map_id` int(10) NOT NULL,
				`map_meta_key` varchar(255) NOT NULL,
				`map_meta_value` longtext NOT NULL,
				PRIMARY KEY (`meta_id`)
				) DEFAULT CHARSET=utf8 COLLATE utf8_general_ci";
		dbDelta($sql);
	}
}

if(!function_exists("marker_category_map_bank"))
{
	function marker_category_map_bank()
	{
		$sql= "CREATE TABLE IF NOT EXISTS ". map_bank_marker_category_table()." (
			`id` int(10) NOT NULL AUTO_INCREMENT,
			`marker_category` varchar(100) NOT NULL,
			PRIMARY KEY (`id`)
		 ) DEFAULT CHARSET=utf8 COLLATE utf8_general_ci";
		dbDelta($sql);	
	}
}

if(!function_exists("map_themes_category_map_bank"))
{
	function map_themes_category_map_bank()
	{
		$sql= "CREATE TABLE IF NOT EXISTS ". map_bank_marker_themes_table(). " (
			`id` INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
			`themes_key` varchar(100) NOT NULL,
			`themes_value` varchar(100) NOT NULL,
			PRIMARY KEY (`id`)
		 ) DEFAULT CHARSET=utf8 COLLATE utf8_general_ci";
		dbDelta($sql);
	}
}

if(!function_exists("create_table_plugin_settings_gmb"))
{
	function create_table_plugin_settings_gmb()
	{
		global $wpdb;
		$sql = "CREATE TABLE IF NOT EXISTS " . map_bank_plugin_settings_table() ." (
				`plugin_settings_id` INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
				`plugin_settings_key` TEXT NOT NULL,
				`plugin_settings_value` TEXT NOT NULL,
				PRIMARY KEY (`plugin_settings_id`)
				) DEFAULT CHARSET=utf8 COLLATE utf8_general_ci";
		dbDelta($sql);
	}
}

switch($version)
{
	case "":
		create_new_map_bank();
		create_maps_meta();
		marker_category_map_bank();
		map_themes_category_map_bank();
		create_table_plugin_settings_gmb();
		
		$obj = new save_settings();
		
		$plugin_category_value = array();
		$themes_value = array();
		$map_themes = array();
		$plugin_setting_value = array();
		$plugin_settings = array();
		
		$new_map = array();
		$meta_map_array = array();
		$meta_map_value = array();
		$meta_map_key = array();
		
		$new_map_marker = array();
		$meta_map_array_marker = array();
		$meta_map_value_marker = array();
		$meta_map_key_marker = array();
		
		$new_map_polygon = array();
		$meta_map_array_polygon = array();
		$meta_map_value_polygon = array();
		$meta_map_key_polygon = array();
		
		$new_map_polyline = array();
		$meta_map_array_polyline = array();
		$meta_map_value_polyline = array();
		$meta_map_key_polyline = array();
		
		$categories = array("Culture",
				"Entertainment",
				"Crime",
				"Natural Disasters",
				"Education",
				"Health",
				"Electric Power",
				"Military",
				"Miscellaneous",
				"Media",
				"Days",
				"Numbers",
				"Letters",
				"Special Characters",
				"Agriculture",
				"Animals",
				"Natural Marvels",
				"Weather",
				"City Services",
				"Interior",
				"Real Estate",
				"Kids",
				"People",
				"Home",
				"Bars",
				"Hotels",
				"Restaurants",
				"Takeaway",
				"Sports",
				"Apparel",
				"Brands Chains",
				"Computer Electronics",
				"Food Drinks",
				"General Merchandise",
				"Aerial Transportation",
				"Directions",
				"Other Transportation",
				"Road Signs",
				"Road Transportation",
				"Religion",
				"Tourism");
		foreach ($categories as $row)
		{
			$plugin_category_value["marker_category"] = $row;
			$obj->insert_data(map_bank_marker_category_table(),$plugin_category_value);
		}
	
		$map_themes["subtle_grayscale"] = "Subtle Grayscale";
		$map_themes["pale_dawn"] = "Pale Dawn";
		$map_themes["blue_water"] = "Blue Water";
		$map_themes["shades_of_grey"] = "Shades of Grey";
		$map_themes["midnight_commander"] = "Midnight Commander";
		$map_themes["retro"] = "Retro";
		$map_themes["light_monochrome"] = "Light Monochrome";
		$map_themes["paper"] = "Paper";
		$map_themes["gowalla"] = "Gowalla";
		$map_themes["greyscale"] = "Greyscale";
		$map_themes["apple_maps_esque"] = "Apple Maps-esque";
		$map_themes["subtle"] = "Subtle";
		$map_themes["flat_map"] = "Flat Map";
		$map_themes["neutral_blue"] = "Neutral Blue";
		$map_themes["shift_worker"] = "Shift Worker";
		$map_themes["mapbox"] = "Mapbox";
		$map_themes["routeXL"] = "RouteXL";
		$map_themes["avocado_world"] = "Avocado World";
		$map_themes["lunar_landscape"] = "Lunar Landscape";
		$map_themes["bright_bubbly"] = "Bright & Bubbly";
		$map_themes["countries"] = "Countries";
		$map_themes["bentley"] = "Bentley";
		$map_themes["old_timey"] = "Old Timey";
		$map_themes["icy_blue"] = "Icy Blue";
		$map_themes["snazzy_maps"] = "Snazzy Maps";
		$map_themes["cool_grey"] = "Cool Grey";
		$map_themes["becomeadinosaur"] = "Becomeadinosaur";
		$map_themes["blue_gray"] = "Blue Gray";
		$map_themes["subtle_greyscale_map"] = "Subtle Greyscale Map";
		$map_themes["blue_essence"] = "Blue Essence";
		$map_themes["cobalt"] = "Cobalt";
		$map_themes["hopper"] = "Hopper";
		$map_themes["red_hues"] = "Red Hues";
		$map_themes["nature"] = "Nature";
		$map_themes["unimposed_topography"] = "Unimposed Topography";
		$map_themes["flat_green"] = "Flat Green";
		$map_themes["red_alert"] = "Red Alert";
		$map_themes["turquoise_water"] = "Turquoise Water";
		$map_themes["vintage"] = "Vintage";
		$map_themes["clean_cut"] = "Clean Cut";
		$map_themes["black_and_white"] = "Black And White";
		$map_themes["souldisco"] = "Souldisco";
		$map_themes["bluish"] = "Bluish";
		$map_themes["simple_labels"] = "Simple Labels";
		$map_themes["homage_to_toner"] = "Homage to Toner";
		$map_themes["muted_blue"] = "Muted Blue";
		$map_themes["vintage_blue"] = "Vintage Blue";
		$map_themes["chilled"] = "Chilled";
		$map_themes["hints_of_gold"] = "Hints of Gold";
		$map_themes["vitamin_c"] = "Vitamin C";
		$map_themes["hot_pink"] = "Hot Pink";
		$map_themes["just_places"] = "Just Places";
		$map_themes["tripitty"] = "Tripitty";
		$map_themes["shade_of_green"] = "Shade of Green";
		$map_themes["hard_edges"] = "Hard Edges";
		$map_themes["Aqua"] = "Aqua";
		$map_themes["grass_is_greener_Water_is_bluer"] = "Grass is Greener Water is Bluer";
		$map_themes["pastel_tones"] = "Pastel Tones";
		$map_themes["the_endless_atlas"] = "The Endless Atlas";
		$map_themes["neon_world"] = "Neon World";
		$map_themes["blue"] = "Blue";
		$map_themes["unsaturated_browns"] = "Unsaturated Browns";
		$map_themes["clean_grey"] = "Clean Grey";
		$map_themes["mixed"] = "Mixed";
		$map_themes["light_green"] = "Light Green";
		$map_themes["muted_monotone"] = "Muted Monotone";
		$map_themes["a_dark_world"] = "A Dark World";
		$map_themes["hashtagnineninenine"] = "Hashtagnineninenine";
		$map_themes["candy_colours"] = "Candy Colours";
		$map_themes["light_blue_water"] = "Light Blue Water";
		$map_themes["bates_green"] = "Bates Green";
		$map_themes["roadtrip_at_night"] = "Road Trip At Night";
		$map_themes["old_dry_mud"] = "Old Dry Mud";
		$map_themes["transport_for_london"] = "Transport For London";
		$map_themes["deep_green"] = "Deep Green";
		$map_themes["subtle_green"] = "Subtle Green";
		$map_themes["esperanto"] = "Esperanto";
		$map_themes["holiday"] = "Holiday";
		$map_themes["military_flat"] = "Military Flat";
		$map_themes["jane_iredale"] = "Jane Iredale";
		$map_themes["caribbean_mountain"] = "Caribbean Mountain";
		$map_themes["roadie"] = "Roadie";
		$map_themes["blueprint"] = "Blueprint (No Labels)";
		$map_themes["old_map"] = "Old Map";
		$map_themes["ilustracao"] = "Ilustra";
		$map_themes["night_vision"] = "Night Vision";
		$map_themes["blueprint"] = "Blueprint";
		$map_themes["red_green"] = "Red & Green";
		$map_themes["lost_in_the_desert"] = "Lost in the Desert";
		$map_themes["blue_cyan"] = "Blue Cyan";
		$map_themes["pink_blue"] = "Pink & Blue";
		$map_themes["purple_rain"] = "Purple Rain";
		$map_themes["bobbys_world"] = "Bobbys World";
		$map_themes["brownie"] = "Brownie";
		$map_themes["bright_dessert"] = "Bright Dessert";
		$map_themes["totally_pink"] = "Totally Pink";
		$map_themes["san_andreas"] = "San Andreas";
		$map_themes["jazzygreen"] = "Jazzy Green";
		$map_themes["manushka"] = "Manushka";
		$map_themes["overseas"] = "Overseas";
		$map_themes["nature_highlight"] = "Nature Highlight";
		$map_themes["blueish"] = "Blue-Ish";
		$map_themes["the_Propia_effect"] = "The Propia Effect";
		$map_themes["dark_grey_on_light_grey"] = "Dark Grey on Light Grey";
		$map_themes["golden_crown"] = "Golden Crown";
		$map_themes["veins"] = "Veins";
		$map_themes["beige_white_and_blue"] = "Beige White and Blue";
		$map_themes["lemon_tree"] = "Lemon Tree";
		$map_themes["swiss_cheese"] = "Swiss Cheese";
		$map_themes["colorblind_friendly"] = "colorblind_friendly";
		$map_themes["default1"] = "Default";
		$map_themes["mikiwat"] = "Mikiwat";
		$map_themes["towalk"] = "Towalk";
		
		foreach ($map_themes as $val => $innerKey)
		{
			$themes_value["themes_key"] = $val;
			$themes_value["themes_value"] = $innerKey;
			$obj->insert_data(map_bank_marker_themes_table(),$themes_value);
		}
		
		$plugin_settings["show_map_plugin_menu_admin"] = "1";
		$plugin_settings["show_map_plugin_menu_editor"] = "1";
		$plugin_settings["show_map_plugin_menu_author"] = "1";
		$plugin_settings["show_map_plugin_menu_contributor"] = "0";
		$plugin_settings["show_map_plugin_menu_subscriber"] = "0";
		$plugin_settings["map_menu_top_bar"] = "1";
	
		foreach ($plugin_settings as $val => $innerKey)
		{
			$plugin_setting_value["plugin_settings_key"] = $val;
			$plugin_setting_value["plugin_settings_value"] = $innerKey;
			$obj->insert_data(map_bank_plugin_settings_table(),$plugin_setting_value);
		}
		
		$new_map["parent_id"] = 0;
		$new_map["map_type"] = "map";
		$new_map["creation_date"] = date("Y-m-d");
		
		$meta_map_array["map_title"] = "Demo";
		$meta_map_array["map_language"] = "en";
		$meta_map_array["map_type"] = "1";
		$meta_map_array["map_themes"] = "default1";
		$meta_map_array["location_title"] = "35311 Westech Road, Shawnee, OK 74804, USA";
		$meta_map_array["country"] = "USA";
		$meta_map_array["longitude"] = "-97.03259696914063";
		$meta_map_array["latitude"] = "35.38453628611739";
		
		$meta_map_array["nearest_location"] = "1";
		$meta_map_array["map_dragable"] = "1";
		$meta_map_array["pan_control"] = "1";
		$meta_map_array["map_type_control"] =  "1";
		$meta_map_array["scale_control"] = "1";
		$meta_map_array["overview_control"] = "1";
		
		$obj->insert_data(map_bank_create_new_map_table(),$new_map);
		$lastid = $wpdb->insert_id;
		foreach ($meta_map_array as $key => $val)
		{
			$meta_map_value["map_id"] = $lastid;
			$meta_map_value["map_meta_key"] = $key;
			$meta_map_value["map_meta_value"] = $val;
			$obj->insert_data(map_bank_meta_table(),$meta_map_value,$meta_map_key);
		}
		
		$new_map_marker["parent_id"] = $lastid;
		$new_map_marker["map_type"] = "marker";
		
		$map_icon = plugins_url("/assets/images/map-icons/aboriginal.png",dirname(__FILE__));
		$meta_map_array_marker["marker_location"] = "35311 Westech Road, Shawnee, OK 74804, USA";
		$meta_map_array_marker["map_marker"] = $map_icon;
		$meta_map_array_marker["marker_category"] = "1";
		$meta_map_array_marker["marker_name"] = "Demo";
		$meta_map_array_marker["marker_latitude"] = "35.38453628611739";
		$meta_map_array_marker["marker_longitude"] = "-97.03259696914063";
		$meta_map_array_marker["animation"] = "0";
		$meta_map_array_marker["info_window"] = "0";
		
		$new_map_marker["creation_date"] = date("Y-m-d");
		$obj->insert_data(map_bank_create_new_map_table(),$new_map_marker);
		$lastid_marker = $wpdb->insert_id;
		foreach ($meta_map_array_marker as $key => $val)
		{
			$meta_map_value_marker["map_id"] = $lastid_marker;
			$meta_map_value_marker["map_meta_key"] = $key;
			$meta_map_value_marker["map_meta_value"] = $val;
			$obj->insert_data(map_bank_meta_table(),$meta_map_value_marker,$meta_map_key_marker);
		}
		
		$new_map_polygon["parent_id"] = $lastid;
		$new_map_polygon["map_type"] = "polygon";
		$new_map_polygon["creation_date"] = date("Y-m-d");
		
		$meta_map_array_polygon["polygon_location"] = "35311 Westech Road, Shawnee, OK 74804, USA";
		$meta_map_array_polygon["polygon_longitute"] = "-97.03259696914063";
		$meta_map_array_polygon["polygon_latitude"] = "35.38453628611739";
		$meta_map_array_polygon["polygon_line_color"] = "#d8fecb";
		$meta_map_array_polygon["polygon_line_opacity"] = "1";
		$meta_map_array_polygon["polygon_data"] = "35.39866,-97.05631
35.35947,-97.04842
35.39502,-96.99348
35.39894,-96.98833
35.40034,-97.05906
35.39922,-97.06215";
		$meta_map_array_polygon["polygon_color"] = "#ffb3b3";
		$meta_map_array_polygon["polygon_opacity"] = "0.35";
		
		$obj->insert_data(map_bank_create_new_map_table(),$new_map_polygon);
		$lastid_polygon = $wpdb->insert_id;
		foreach ($meta_map_array_polygon as $key => $val)
		{
			$meta_map_value_polygon["map_id"] = $lastid_polygon;
			$meta_map_value_polygon["map_meta_key"] = $key;
			$meta_map_value_polygon["map_meta_value"] = $val;
			$obj->insert_data(map_bank_meta_table(),$meta_map_value_polygon,$meta_map_key_polygon);
		}
		
		$new_map_polyline["parent_id"] = $lastid;
		$new_map_polyline["map_type"] = "polyline";
		$new_map_polyline["creation_date"] = date("Y-m-d");
		
		$meta_map_array_polyline["polyline_location"] = "35311 Westech Road, Shawnee, OK 74804, USA";
		$meta_map_array_polyline["polyline_longitute"] = "-97.03259696914063";
		$meta_map_array_polyline["polyline_latitude"] = "35.38453628611739";
		$meta_map_array_polyline["polyline_color"] = "#fa92df";
		$meta_map_array_polyline["polyline_opacity"] = "1";
		$meta_map_array_polyline["polyline_thickness"] = "2";
		$meta_map_array_polyline["polyline_type"] = "1";
		$meta_map_array_polyline["polyline_data"] = "35.39726,-97.05975
35.35947,-97.04842
35.39502,-96.99348
35.39894,-96.98833
35.40034,-97.05906
35.39922,-97.06215";
		$obj->insert_data(map_bank_create_new_map_table(),$new_map_polyline);
		$lastid_polyline = $wpdb->insert_id;
		foreach ($meta_map_array_polyline as $key => $val)
		{
			$meta_map_value_polyline["map_id"] = $lastid_polyline;
			$meta_map_value_polyline["map_meta_key"] = $key;
			$meta_map_value_polyline["map_meta_value"] = $val;
			$obj->insert_data(map_bank_meta_table(),$meta_map_value_polyline,$meta_map_key_polyline);
		}
		
		
	break;
	case "1.0":
		$obj = new save_settings();
		$get_maps_id = $wpdb->get_col
		(
			"SELECT id FROM " . map_bank_create_new_map_table(). " WHERE parent_id = 0 "
		);
		for($flag = 0 ; $flag < count($get_maps_id); $flag++)
		{
			$map_language_value = array();
			$map_language_value["map_id"] = $get_maps_id[$flag];
			$map_language_value["map_meta_key"] = "map_language";
			$map_language_value["map_meta_value"] = "en";
			$obj->insert_data(map_bank_meta_table(),$map_language_value);
		}
	break;
}
update_option("google-maps-bank-version-number","1.1");
$plugin_updation = get_option("google-maps-bank-automatic-update");
if($plugin_updation == "")
{
	update_option("google-maps-bank-automatic-update",1);
}
?>