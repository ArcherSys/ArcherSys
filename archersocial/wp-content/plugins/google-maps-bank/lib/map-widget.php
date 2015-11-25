<?php
class MapWidget extends WP_Widget
{
	function MapWidget()
	{
		$widget_ops = array("classname" => "MapWidget", "description" => "Display Google Map");
		$this->WP_Widget("MapWidget", "Google Maps Bank", $widget_ops);
	}
	function form($instance)
	{
		global $wpdb;
		$unique_id = rand(100, 10000);
		$instance = wp_parse_args((array)$instance, array("title" => "","map_id" => "0","mapWidth" => "200","mapHeight" => "300",
		"zoomlevel" => "7", "mapscrollwheel" => TRUE,"mapborder" => TRUE,"mappx" => "px", "mapborderwidth" =>"2","mappx_h" => "px", "mapborderstyle" => "1",
		"mapborderradius" =>"1", "mapbordercolor" => "#000000", "show_title"=> TRUE));
		$title = $instance["title"];
		$maps = $wpdb->get_results
		(
			$wpdb->prepare
			(
				"SELECT * FROM " . map_bank_meta_table(). " INNER JOIN ".map_bank_create_new_map_table().
				" ON ".map_bank_create_new_map_table().".id = ".map_bank_meta_table().".map_id WHERE ".map_bank_create_new_map_table().
				".parent_id = %d and " . map_bank_create_new_map_table() . ".map_type=%s and ".map_bank_meta_table().".map_meta_key=%s ORDER BY " .map_bank_create_new_map_table().".id DESC " ,
				0,
				"map",
				"map_title"
			)
		);
		?>
		<p>
			<label for="<?php echo $this->get_field_id("title"); ?>"><?php _e("Title", map_bank); ?>:</label> <input
			 class="widefat" id="<?php echo $this->get_field_id("title"); ?>"
			 name="<?php echo $this->get_field_name("title"); ?>" type="text"
			 value="<?php echo esc_attr($title); ?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id("map_id"); ?>"><?php _e("Select Map", map_bank); ?> : </label>
			<select size="1" name="<?php echo $this->get_field_name("map_id"); ?>"
				 id="<?php echo $this->get_field_id("map_id"); ?>" class="widefat">
				<option value="0"><?php _e("Select a Map", map_bank); ?> </option>
				<?php
				if ($maps) {
					foreach ($maps as $map) 
					{
						echo "<option value=\"" . $map->id . "\"";
						if ($map->id == $instance["map_id"]) echo "selected=\"selected\"";
						echo ">" . stripslashes(html_entity_decode($map->map_meta_value)) . "</option>" . "\n\t";
					}
				}
				?>
			</select>
		</p>
		<p>
			<label><?php _e("Width", map_bank); ?>:</label>
			<br>
			<input type="text" size="5"  name="<?php echo $this->get_field_name("mapWidth"); ?>" id="<?php echo $this->get_field_id("mapWidth"); ?>" 
			 value="<?php echo intval($instance["mapWidth"]);?>" class="widefat" />
		</p>
		<p>
			<label><?php _e("Height", map_bank); ?>:</label><br>
			<input type="text" size="5" name="<?php echo $this->get_field_name("mapHeight"); ?>" id="<?php echo $this->get_field_id("mapHeight"); ?>" 
			value="<?php echo intval($instance["mapHeight"]);?>" class="widefat" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id("zoomlevel"); ?>"><?php _e("Zoom Level", map_bank); ?>
			:</label>
			<select name="<?php echo $this->get_field_name("zoomlevel"); ?>" 
				id="<?php echo $this->get_field_id("zoomlevel"); ?>" class="widefat">
				<?php
				for($flag = 1;$flag <=20;$flag++)
				{
					?>
					<option value="<?php echo $flag;?>" <?php echo $flag == 12 ? "selected=\"selected\"" : ""; ?>><?php echo $flag . "";?></option>
					<?php 
				}
				?>
			</select>
		</p>
		<p>
			<label  for="<?php echo $this->get_field_id("mapscrollwheel"); ?>"><?php _e("Scrolling Wheel", map_bank); ?>
				:</label>
			<input type="checkbox" class="widefat" name="<?php echo $this->get_field_name("mapscrollwheel"); ?>" 
			id="<?php echo $this->get_field_id("mapscrollwheel"); ?>" value="1" <?php checked(TRUE, $instance["mapscrollwheel"]); ?>/>
		</p>
		<p>
			<label style="padding-right: 20px;" for="<?php echo $this->get_field_id("mapborder"); ?>"><?php _e("Map Border", map_bank); ?>
				:</label>
			<input type="checkbox" disabled="disabled" onclick="show_map_settings<?php echo $unique_id;?>();" class="widefat" name="<?php echo $this->get_field_name("mapborder"); ?>" 
			 id="<?php echo $this->get_field_id("mapborder"); ?>" value="1" <?php checked(TRUE, $instance["mapborder"]); ?>/></br>
			 <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
		</p>
		<div id="div_map_settings<?php echo $unique_id;?>" style="display: none;">
			<p>
				<label for="<?php echo $this->get_field_id("mapborderwidth"); ?>"><?php _e("Map Border Width", map_bank); ?>
				:</label>
				<select disabled="disabled" name="<?php echo $this->get_field_name("mapborderwidth"); ?>" 
					id="<?php echo $this->get_field_id("mapborderwidth"); ?>" class="widefat">
					<?php
						for($flag = 1;$flag <=20;$flag++)
						{
							?>
							<option value="<?php echo $flag;?>"><?php echo $flag. " px";?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></option>
							<?php 
						}
						?>
				</select>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id("mapborderstyle"); ?>"><?php _e("Map Border Style", map_bank); ?>
				:</label>
				<select disabled="disabled" name="<?php echo $this->get_field_name("mapborderstyle"); ?>" 
					id="<?php echo $this->get_field_id("mapborderstyle"); ?>" class="widefat">
					<option value="Solid"><?php _e("Solid", map_bank); ?><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></option>
					<option value="Dotted"><?php _e("Dotted", map_bank); ?><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></option>
					<option value="Dashed"><?php _e("Dashed", map_bank); ?><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></option>
				</select>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id("mapbordercolor"); ?>"><?php _e("Map Border Color", map_bank); ?>
				:</label>
				<input disabled="disabled" type="text" size="5"  name="<?php echo $this->get_field_name("mapbordercolor"); ?>" id="<?php echo $this->get_field_id("mapbordercolor"); ?>" 
				value="<?php echo esc_attr($instance["mapbordercolor"]);?><?php _e(" (Available in Premium Editions)", map_bank); ?>" class="widefat" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id("mapborderradius"); ?>"><?php _e("Map Border Radius", map_bank); ?>
				:</label>
				<select disabled="disabled" name="<?php echo $this->get_field_name("mapborderradius"); ?>" 
					id="<?php echo $this->get_field_id("mapborderradius"); ?>" class="widefat">
					<?php
					for($flag = 1;$flag <=20;$flag++)
					{
						?>
						<option value="<?php echo $flag;?>"><?php echo $flag. " px";?><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></option>
						<?php 
					}
					?>
				</select>
			</p>
		</div>
		<p>
			<label style="padding-right: 27px;" for="<?php echo $this->get_field_id("show_title"); ?>"><?php _e("Show_Title", map_bank); ?>
			:</label>
			<input type="checkbox" class="widefat" name="<?php echo $this->get_field_name("show_title"); ?>"  
			id="<?php echo $this->get_field_id("show_title"); ?>" value="1" <?php checked(TRUE, $instance["show_title"]); ?>/>
		</p>
		<script type="text/javascript">
			jQuery(document).ready(function () {
				jQuery("#<?php echo $this->get_field_id("zoomlevel"); ?>").val("<?php echo $instance["zoomlevel"]; ?>");
				jQuery("#<?php echo $this->get_field_id("mapborderwidth"); ?>").val("<?php echo $instance["mapborderwidth"]; ?>");
				jQuery("#<?php echo $this->get_field_id("mapborderstyle"); ?>").val("<?php echo $instance["mapborderstyle"]; ?>");
				jQuery("#<?php echo $this->get_field_id("mapborderradius"); ?>").val("<?php echo $instance["mapborderradius"]; ?>");
				jQuery("#<?php echo $this->get_field_id("mappx"); ?>").val("<?php echo $instance["mappx"]; ?>");
				show_map_settings<?php echo $unique_id;?>();
			});
			
			function show_map_settings<?php echo $unique_id;?>()
			{
				var mapBorder = jQuery("#<?php echo $this->get_field_id("mapborder");?>").prop("checked");
				if(mapBorder == true)
				{
					jQuery("#div_map_settings<?php echo $unique_id;?>").css("display","block");
				}
				else
				{
					jQuery("#div_map_settings<?php echo $unique_id;?>").css("display","none");
				}
				
			}
		</script>
		<?php 
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;
		$instance["title"] = $new_instance["title"];
		$instance["map_id"] = (int)$new_instance["map_id"];
		$instance["mapWidth"] = (int)$new_instance["mapWidth"];
		$instance["mapHeight"] = (int)$new_instance["mapHeight"];
		$instance["zoomlevel"] = (int)$new_instance["zoomlevel"];
		$instance["mapscrollwheel"] = (bool)$new_instance["mapscrollwheel"];
		$instance["mapborder"] = (bool)$new_instance["mapborder"];
		$instance["mappx"] = $new_instance["mappx"];
		$instance["mappx_h"] = $new_instance["mappx_h"];
		$instance["mapborderwidth"] = (int)$new_instance["mapborderwidth"];
		$instance["mapborderstyle"] = $new_instance["mapborderstyle"];
		$instance["mapbordercolor"] = $new_instance["mapbordercolor"];
		$instance["mapborderradius"] = (int)$new_instance["mapborderradius"];
		$instance["show_title"] = (bool)$new_instance["show_title"];
		
		return $instance;
	}
	
	function widget($args, $instance)
	{
		global $wpdb,$showtitle;
		$maps = $wpdb->get_var
		(
			$wpdb->prepare
			(
				"SELECT count(*) FROM " . map_bank_create_new_map_table() . " WHERE id = %d and map_type=%s",
				$instance["map_id"],
				"map"
			)
		);
		extract($args, EXTR_SKIP);
		echo $before_widget;
		$title = empty($instance["title"]) ? " " : apply_filters("widget_title", $instance["title"]);
		
		$showtitle = ($instance["show_title"] == 1)? "show_title = \"true\"" : "show_title = \"false\"";
		$map_border = ($instance["mapborder"] == 1) ? "map_border = \"true\"" : "map_border = \"false\"";
		$map_scrollwheel = ($instance["mapscrollwheel"] == 1) ? "scrolling_wheel = \"true\"" : "scrolling_wheel = \"false\"";
		
		if ($maps > 0) 
		{
			if ($instance["map_id"] != 0) 
			{
				echo $before_title . $title . $after_title;
				$shortcode_for_maps = "[map_bank map_id=\"" . $instance["map_id"] . "\" map_width=\"".$instance["mapWidth"]."\" map_width_type=\"".$instance["mappx"]."\" 
				map_height=\"".$instance["mapHeight"]."\" map_height_type=\"".$instance["mappx_h"]."\" map_zoom=\"".$instance["zoomlevel"]."\" ".$map_scrollwheel." ".$map_border." 
				border_width=\"".$instance["mapborderwidth"]."\" border_style=\"".$instance["mapborderstyle"]."\" border_color=\"".$instance["mapbordercolor"]."\" border_radius=\"".$instance["mapborderradius"]."\" 
				".$showtitle."]";
			}
		}
		echo do_shortcode($shortcode_for_maps);
		echo $after_widget;
	}
}
?>