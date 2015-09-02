<?php
global $wpdb;
$unique_id = rand(100, 10000);
$frontend_map = $wpdb->get_results
(
	$wpdb->prepare
	(
		"SELECT * FROM " . map_bank_meta_table(). " INNER JOIN ".map_bank_create_new_map_table().
		" ON ".map_bank_create_new_map_table().".id = ".map_bank_meta_table().".map_id WHERE ".map_bank_create_new_map_table().
		".id = %d or ".map_bank_create_new_map_table().".parent_id = %d",
		$map_id,
		$map_id
	)
);
if(!function_exists("get_frontend_map_settings"))
{
	function get_frontend_map_settings($id,$map_settings,$map_type)
	{
		$map_settings_array = array();
		foreach ($map_settings as $row)
		{
			if ($row->map_id == $id)
			{
				$map_settings_array["$row->map_meta_key"] = $row->map_meta_value;
				if($map_type != "map")
				{
					$map_settings_array["id"] = $row->id;
				}
			}
		}
		return $map_settings_array;
	}
}

if(!function_exists("get_frontend_geo_settings"))
{
	function get_frontend_geo_settings($id,$map_settings,$match)
	{
		$map_marker_array = array();
		foreach ($map_settings as $row)
		{
			if ($row->parent_id == $id && $row->map_type == $match)
			{
				$marker = get_frontend_map_settings($row->id,$map_settings,$match);
				array_push($map_marker_array, $marker);
			}
		}
		return array_unique($map_marker_array, SORT_REGULAR);
	}
}
$border_radius = "1";
$frontend_settings_data = get_frontend_map_settings($map_id,$frontend_map,"map");
$marker = get_frontend_geo_settings($map_id,$frontend_map,"marker");
$polygon = get_frontend_geo_settings($map_id,$frontend_map,"polygon");
$polyline = get_frontend_geo_settings($map_id,$frontend_map,"polyline");
$map_language= isset($frontend_settings_data["map_language"]) ? $frontend_settings_data["map_language"]:"en";
$map_type_data= isset($frontend_settings_data["map_type"]) ? $frontend_settings_data["map_type"]:"1";
$map_themes= isset($frontend_settings_data["map_themes"]) ? $frontend_settings_data["map_themes"]:"default1";
$map_location_longitude= isset($frontend_settings_data["longitude"]) ? $frontend_settings_data["longitude"]:"";
$map_location_latitude= isset($frontend_settings_data["latitude"]) ? $frontend_settings_data["latitude"]:"";
$map_pan_control_update= isset($frontend_settings_data["pan_control"]) ? $frontend_settings_data["pan_control"]:"";
$map_map_dragable_update= isset($frontend_settings_data["map_dragable"]) ? $frontend_settings_data["map_dragable"]:"";
$map_scale_control_update= isset($frontend_settings_data["scale_control"]) ? $frontend_settings_data["scale_control"]:"";
$map_map_type_control_update= isset($frontend_settings_data["map_type_control"]) ? $frontend_settings_data["map_type_control"]:"";
$map_overview_control_update= isset($frontend_settings_data["overview_control"]) ? $frontend_settings_data["overview_control"]:"";

if(isset($map_type_data))
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
?>
<style type="text/css">
.map_canvas_class_<?php echo $map_id;?>_<?php echo $unique_id;?>
{
	max-width: none !important;
	width:<?php echo $map_width . "px"; ?>;
	height:<?php echo  $map_height. "px"; ?>;
}
.gmnoprint img 
{
	max-width: none; 
}
img
{
	max-width:none!important;
}
.scrollFix 
{
	line-height: 1.35;
	overflow: hidden;
	word-wrap: break-word;
}
</style>
<?php
if(file_exists(MAP_BK_PLUGIN_DIR ."/views/themes.php"))
{
	include_once MAP_BK_PLUGIN_DIR ."/views/themes.php";
}?>
<script type="text/javascript">
	window.google = window.google || {};
	google.maps = google.maps || {};
	(function() {
	function getScript(src) {
		document.write('<' + 'script src="' + src + '"s' +
			' type="text/javascript"><' + '/script>');
		}
		
	var modules = google.maps.modules = {};
	google.maps.__gjsload__ = function(name, text) {
			modules[name] = text;
		};
		google.maps.Load = function(apiLoad) {
			delete google.maps.Load;
		apiLoad([0.009999999776482582,[[["http://mt0.googleapis.com/vt?lyrs=m@271000000\u0026src=api\u0026hl=en\u0026","http://mt1.googleapis.com/vt?lyrs=m@271000000\u0026src=api\u0026hl=en\u0026"],null,null,null,null,"m@271000000",["https://mts0.google.com/vt?lyrs=m@271000000\u0026src=api\u0026hl=en\u0026","https://mts1.google.com/vt?lyrs=m@271000000\u0026src=api\u0026hl=en\u0026"]],[["http://khm0.googleapis.com/kh?v=156\u0026hl=en\u0026","http://khm1.googleapis.com/kh?v=156\u0026hl=en\u0026"],null,null,null,1,"156",["https://khms0.google.com/kh?v=156\u0026hl=en\u0026","https://khms1.google.com/kh?v=156\u0026hl=en\u0026"]],[["http://mt0.googleapis.com/vt?lyrs=h@271000000\u0026src=api\u0026hl=en\u0026","http://mt1.googleapis.com/vt?lyrs=h@271000000\u0026src=api\u0026hl=en\u0026"],null,null,null,null,"h@271000000",["https://mts0.google.com/vt?lyrs=h@271000000\u0026src=api\u0026hl=en\u0026","https://mts1.google.com/vt?lyrs=h@271000000\u0026src=api\u0026hl=en\u0026"]],[["http://mt0.googleapis.com/vt?lyrs=t@132,r@271000000\u0026src=api\u0026hl=en\u0026","http://mt1.googleapis.com/vt?lyrs=t@132,r@271000000\u0026src=api\u0026hl=en\u0026"],null,null,null,null,"t@132,r@271000000",["https://mts0.google.com/vt?lyrs=t@132,r@271000000\u0026src=api\u0026hl=en\u0026","https://mts1.google.com/vt?lyrs=t@132,r@271000000\u0026src=api\u0026hl=en\u0026"]],null,null,[["http://cbk0.googleapis.com/cbk?","http://cbk1.googleapis.com/cbk?"]],[["http://khm0.googleapis.com/kh?v=84\u0026hl=en\u0026","http://khm1.googleapis.com/kh?v=84\u0026hl=en\u0026"],null,null,null,null,"84",["https://khms0.google.com/kh?v=84\u0026hl=en\u0026","https://khms1.google.com/kh?v=84\u0026hl=en\u0026"]],[["http://mt0.googleapis.com/mapslt?hl=en\u0026","http://mt1.googleapis.com/mapslt?hl=en\u0026"]],[["http://mt0.googleapis.com/mapslt/ft?hl=en\u0026","http://mt1.googleapis.com/mapslt/ft?hl=en\u0026"]],[["http://mt0.googleapis.com/vt?hl=en\u0026","http://mt1.googleapis.com/vt?hl=en\u0026"]],[["http://mt0.googleapis.com/mapslt/loom?hl=en\u0026","http://mt1.googleapis.com/mapslt/loom?hl=en\u0026"]],[["https://mts0.googleapis.com/mapslt?hl=en\u0026","https://mts1.googleapis.com/mapslt?hl=en\u0026"]],[["https://mts0.googleapis.com/mapslt/ft?hl=en\u0026","https://mts1.googleapis.com/mapslt/ft?hl=en\u0026"]],[["https://mts0.googleapis.com/mapslt/loom?hl=en\u0026","https://mts1.googleapis.com/mapslt/loom?hl=en\u0026"]]],["en","GB",null,0,null,null,"http://maps.gstatic.com/mapfiles/","http://csi.gstatic.com","https://maps.googleapis.com","http://maps.googleapis.com",null,"https://maps.google.com"],["http://maps.gstatic.com/maps-api-v3/api/js/17/13","3.17.13"],[2448734379],1,null,null,null,null,null,"",["panoramio","places","weather"],null,0,"http://khm.googleapis.com/mz?v=156\u0026",null,"https://earthbuilder.googleapis.com","https://earthbuilder.googleapis.com",null,"http://mt.googleapis.com/vt/icon",[["http://mt0.googleapis.com/vt","http://mt1.googleapis.com/vt"],["https://mts0.googleapis.com/vt","https://mts1.googleapis.com/vt"],[null,[[0,"m",271000000]],[null,"en","GB",null,18,null,null,null,null,null,null,[[47],[37,[["smartmaps"]]]]],0],[null,[[0,"m",271000000]],[null,"en","GB",null,18,null,null,null,null,null,null,[[47],[37,[["smartmaps"]]]]],3],[null,[[0,"m",271000000]],[null,"en","GB",null,18,null,null,null,null,null,null,[[50],[37,[["smartmaps"]]]]],0],[null,[[0,"m",271000000]],[null,"en","GB",null,18,null,null,null,null,null,null,[[50],[37,[["smartmaps"]]]]],3],[null,[[4,"t",132],[0,"r",132000000]],[null,"en","GB",null,18,null,null,null,null,null,null,[[63],[37,[["smartmaps"]]]]],0],[null,[[4,"t",132],[0,"r",132000000]],[null,"en","GB",null,18,null,null,null,null,null,null,[[63],[37,[["smartmaps"]]]]],3],[null,null,[null,"en","GB",null,18],0],[null,null,[null,"en","GB",null,18],3],[null,null,[null,"en","GB",null,18],6],[null,null,[null,"en","GB",null,18],0],["https://mts0.google.com/vt","https://mts1.google.com/vt"],"/maps/vt",271000000,132],2,500,["http://geo0.ggpht.com/cbk","http://www.gstatic.com/landmark/tour","http://www.gstatic.com/landmark/config","/maps/preview/reveal?authuser=0","/maps/preview/log204","/gen204?tbm=map","http://static.panoramio.com.storage.googleapis.com/photos/"],["https://www.google.com/maps/api/js/widget?pb=!1m2!1u17!2s13!2sen!3sGB","https://www.google.com/maps/api/js/slave_widget?pb=!1m2!1u17!2s13"],0], loadScriptTime);
		};
		var loadScriptTime = (new Date).getTime();
		getScript("http://maps.google.com/maps/api/js?libraries=places,&language=<?php echo $map_language ;?>&sensor=false");
	})();
	
	function initialize_<?php echo $map_id;?>_<?php echo $unique_id;?>()
	{
		var bounds = new google.maps.LatLngBounds();
		var latlng = new google.maps.LatLng("<?php echo $map_location_latitude; ?>", "<?php echo $map_location_longitude; ?>");
		var mapOptions = 
		{
			scrollwheel: <?php echo $scrolling_wheel ;?>,
			panControl: <?php echo $map_pan_control_update == "1" ? "true" : "false" ;?>,
			draggable: <?php echo $map_map_dragable_update == "1"? "true" : "false" ;?>,
			scaleControl: <?php echo $map_scale_control_update == "1" ? "true" : "false" ;?>,
			mapTypeControl:<?php echo $map_map_type_control_update == "1"? "true" : "false" ;?>,
			styles : <?php echo $map_themes;?>,
			center: latlng,
			zoomControl: true,
			zoomControlOptions: 
			{
				style: google.maps.ZoomControlStyle.LARGE
			},
			streetViewControl:false,
			overviewMapControl:<?php echo $map_overview_control_update == "1" ? "true" : "false" ;?>,
			visible:true,
			zoom: 12,
			mapTypeId: google.maps.MapTypeId.<?php echo $map_type;?>,
		}
		map_<?php echo $map_id;?>_<?php echo $unique_id;?> = new google.maps.Map(document.getElementById("map_canvas_<?php echo $map_id;?>_<?php echo $unique_id;?>"), mapOptions);
		<?php
		if(!empty($marker))
		{
			foreach ($marker as $marker_key )
			{
				?>
				var position = new google.maps.LatLng("<?php echo $marker_key["marker_latitude"]; ?>", "<?php echo $marker_key["marker_longitude"]; ?>");
				bounds.extend(position);
				marker<?php echo $marker_key["id"];?> = new google.maps.Marker(
				{
					position: position,
					map: map_<?php echo $map_id;?>_<?php echo $unique_id;?>,
					animation: google.maps.Animation.<?php echo $marker_key["animation"] == 1 ? "BOUNCE" : "DROP";?>,
					icon : "<?php echo $marker_key["map_marker"];?>",
					title: "<?php echo esc_attr(stripslashes(htmlspecialchars_decode($marker_key["marker_name"])));?>"
				});
				<?php
			}
		}
		foreach ($polygon as $polygon_key )
		{
		?>
			var polygon_cords = [
			<?php
				$polygon_data_latlng = explode("\n", $polygon_key["polygon_data"]);
				for($polygon_latlng = 0; $polygon_latlng < count($polygon_data_latlng)-1; $polygon_latlng++)
				{
					if($polygon_latlng == count($polygon_data_latlng) - 2)
					{
						?>
							new google.maps.LatLng(<?php echo $polygon_data_latlng[$polygon_latlng];?>)
						<?php
					}
					else
					{
						?>
							new google.maps.LatLng(<?php echo $polygon_data_latlng[$polygon_latlng];?>),
						<?php
					}
				}
			?>
			];
			shape = new google.maps.Polygon({
				paths: polygon_cords,
				strokeColor: "<?php echo $polygon_key["polygon_line_color"];?>",
				strokeOpacity: <?php echo $polygon_key["polygon_line_opacity"];?>,
				fillColor: "<?php echo $polygon_key["polygon_color"];?>",
				fillOpacity: <?php echo $polygon_key["polygon_opacity"];?>
			});
			shape.setMap(map_<?php echo $map_id;?>_<?php echo $unique_id;?>);
			<?php
		}
		foreach ($polyline as $polyline_key )
		{
		?>
			var polyline_cords = [
			<?php
				$polyline_data_lat = explode("\n", $polyline_key["polyline_data"]);
				for($flag1=0;$flag1<count($polyline_data_lat)-1;$flag1++)
				{
					if($flag1 == count($polyline_data_lat) - 2)
					{
						?>
						new google.maps.LatLng(<?php echo $polyline_data_lat[$flag1];?>)
						<?php
					}
					else
					{
						?>
						new google.maps.LatLng(<?php echo $polyline_data_lat[$flag1];?>),
						<?php
					}
				}
			?>
			];
			<?php 
			switch($polyline_key["polyline_type"])
			{
				case "2":
				?>
					var lineSymbol = {
						path: "M 0,-1 0,1 0,-1",
						strokeWeight: <?php echo $polyline_key["polyline_thickness"];?>,
						strokeOpacity: <?php echo $polyline_key["polyline_opacity"];?>,
						scale: 3
					};
					var polyline_draw = new google.maps.Polyline({
						path: polyline_cords,
						strokeColor: "<?php echo $polyline_key["polyline_color"];?>",
						strokeOpacity: 0,
						icons: [{
							icon: lineSymbol,
							offset: "0",
							repeat: "20px"}],
							map: map_<?php echo $map_id;?>_<?php echo $unique_id;?>
						});
					polyline_draw.setMap(map_<?php echo $map_id;?>_<?php echo $unique_id;?>);
				<?php
				break;
				case "1":
					?>
					var lineSymbol = {
						path: "M 0,-0.1 0,0.1",
						strokeWeight: <?php echo $polyline_key["polyline_thickness"];?>,
						strokeOpacity: <?php echo $polyline_key["polyline_opacity"];?>,
						scale: 3
						};
					var polyline_draw = new google.maps.Polyline({
						path: polyline_cords,
						strokeColor: "<?php echo $polyline_key["polyline_color"];?>",
						strokeOpacity: 0,
						icons: [{
							icon: lineSymbol,
							offset: "100%",
							repeat: "10px"}],
							map: map_<?php echo $map_id;?>_<?php echo $unique_id;?>
						});
					polyline_draw.setMap(map_<?php echo $map_id;?>_<?php echo $unique_id;?>);
						<?php
				break;
				default:
					?>
					var polyline_draw = new google.maps.Polyline({
						path: polyline_cords,
						strokeColor: "<?php echo $polyline_key["polyline_color"];?>",
						strokeOpacity: <?php echo $polyline_key["polyline_opacity"];?>,
						map: map_<?php echo $map_id;?>_<?php echo $unique_id;?>
						});
					polyline_draw.setMap(map_<?php echo $map_id;?>_<?php echo $unique_id;?>);
						<?php
				break;
			}
		}
		?>
	}
</script>
<div id="map_canvas_<?php echo $map_id;?>_<?php echo $unique_id;?>" class="map_canvas_class_<?php echo $map_id;?>_<?php echo $unique_id;?>"></div>
<script type="text/javascript">
jQuery(document).ready(function()
{
	initialize_<?php echo $map_id;?>_<?php echo $unique_id;?>();
});
</script>
