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
		$map_details = $wpdb->get_results
		(
			$wpdb->prepare
			(
				"SELECT * FROM " . map_bank_meta_table(). " INNER JOIN ".map_bank_create_new_map_table().
				" ON ".map_bank_create_new_map_table().".id = ".map_bank_meta_table().".map_id WHERE ".map_bank_create_new_map_table().
				".parent_id = %d and " . map_bank_create_new_map_table() . ".map_type=%s and ".map_bank_meta_table().".map_meta_key=%s ORDER BY " .map_bank_create_new_map_table().".id DESC ",
				0,
				"map",
				"map_title"
			)
		);
		?>
		<div id="map-bank" style="display:none;">
			<div class="fluid-layout responsive">
				<div style="padding:0px 0 3px 10px;">
					<h3 class="label-shortcode"><?php _e("Insert Google Map Bank Shortcode", map_bank); ?></h3>
					<span>
						<i><?php _e("Select a map below to add it to your post or page.", map_bank); ?></i>
					</span>
				</div>
				<div class="layout-span12 responsive" style="padding:15px 15px 0 0;">
					<div class="layout-control-group">
						<label class="custom-layout-labe-shortcode" for="ux_map_name"><?php _e("Map Name", map_bank); ?> : 
							<span class="hovertip" data-original-title ="<?php _e("Click on dropdown to choose Map.",map_bank) ;?>">
								<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
							</span>
						</label>
						<select id="add_map_id" class="layout-span9">
							<option value="0"><?php _e("Select a Map", map_bank); ?> </option>
							<?php
							foreach ($map_details as $map)
							{
								?>
								<option value="<?php echo $map->id; ?>"><?php echo stripcslashes(htmlspecialchars_decode($map->map_meta_value));?></option>
								<?php
							}
							?>
						</select>
					</div>
					<div class="layout-control-group">
						<label class="custom-layout-labe-shortcode"><?php _e("Map Width", map_bank); ?> :
							<span class="hovertip" data-original-title ="<?php _e("Here you can set Width for Map.",map_bank) ;?>">
								<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
							</span>
						</label>
						<input type="text" id="ux_txt_map_width" name="ux_txt_map_width" class="layout-span6" value="<?php echo isset($count_maps->map_width) ? $count_maps->map_width : "400";?>"/>
					</div>
					<div class="layout-control-group">
						<label class="custom-layout-labe-shortcode"><?php _e("Map Height", map_bank); ?> :
							<span class="hovertip" data-original-title ="<?php _e("Here you can set Height for Map.",map_bank) ;?>">
								<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
							</span>
						</label>
						<input type="text" id="ux_txt_map_height" name="ux_txt_map_height"  class="layout-span6" value="<?php echo isset($count_maps->map_height) ? $count_maps->map_height : "300";?>"/>
					</div>
					<div class="fluid-layout">
						<div class="layout-span6 responsive">
							<div class="layout-control-group">
								<label class="custom-layout-labe-shortcode"><?php _e("Zoom Level", map_bank); ?> :
									<span class="hovertip" data-original-title ="<?php _e("Select Map Zoom level from here.",map_bank) ;?>">
										<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
									</span>
								</label>
								<select id="slider_zoom" class="layout-span6" name="slider_zoom">
									<?php
									for($flag1 = 1;$flag1 <=21;$flag1++)
									{
										?>
										<option value="<?php echo $flag1;?>"  <?php echo $flag1 == 12 ? "selected=\"selected\"" : ""; ?>><?php echo $flag1 . "";?></option>
										<?php 
									}
									?>
								</select>
							</div>
						</div>
						<div class="layout-span6 responsive">
							<div class="layout-control-group">
								<label class="custom-layout-labe-shortcode rdl_maps"><?php _e("Scrolling Wheel", map_bank); ?> :
									<span class="hovertip" data-original-title ="<?php _e("Tick this checkbox if you want to enble Scrolling Wheel in your Map.",map_bank) ;?>">
										<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
									</span>
								</label>
									<input type="checkbox" checked="checked" name="ux_map_scroll_wheel" id="ux_map_scroll_wheel" style="margin-top: 10px;"/>
							</div>
						</div>
					</div>
					<div class="layout-control-group">
						<label class="custom-layout-labe-shortcode"><?php _e("Map Border", map_bank); ?> :
							<span class="hovertip" data-original-title ="<?php _e("Tick this checkbox if you want to set Scrolling Wheel Map Border on Map.",map_bank) ;?>">
								<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
							</span>
						</label>
						<input type="radio" disabled="disabled" checked="checked" disabled="disabled" id="ux_rdl_map_border_on" name="ux_rdl_map_border" onclick="show_border_settings();" value="1" /><?php _e("Enable", map_bank); ?>
						<input type="radio" disabled="disabled" id="ux_rdl_map_border_off" disabled="disabled" style="margin-left: 10px;" name="ux_rdl_map_border" onclick="show_border_settings();" value="0" /><?php _e("Disable", map_bank); ?>
						<i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
					</div>
					<div id="map_border_settings" style="display: block;">
						<div class="layout-control-group">
							<label class="custom-layout-labe-shortcode"><?php _e("Map Border Width", map_bank); ?> :
							<span class="hovertip" data-original-title ="<?php _e("Select Border Width for Map from drop-down.",map_bank) ;?>">
								<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
							</span>
							</label>
							<select disabled="disabled" id="ux_ddl_map_border_width" name="ux_ddl_map_border_width" class="layout-span9">
							<?php
								for($flag = 1;$flag <=20;$flag++)
								{
									?>
									<option style="color: #FF0000;" value="<?php echo $flag;?>"><?php echo $flag. " px";?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></option>
									<?php
								}
							?>
							</select>
						</div>
						<div class="layout-control-group">
							<label class="custom-layout-labe-shortcode"><?php _e("Map Border Style", map_bank); ?> :
							<span class="hovertip" data-original-title ="<?php _e("Select Border Style for Map from drop-down.",map_bank) ;?>">
								<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
							</span>
							</label>
							<select disabled="disabled" id="ux_ddl_map_border_style" name="ux_ddl_map_border_style" class="layout-span9">
								<option value="Solid" class="widget_premium_feature"><?php _e("Solid", map_bank); ?> <i ><?php _e(" (Available in Premium Editions)", map_bank); ?></i></option>
								<option value="Dotted" style="color: #FF0000;"><?php _e("Dotted", map_bank); ?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></option>
								<option value="Dashed" style="color: #FF0000;"><?php _e("Dashed", map_bank); ?><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></option>
							</select>
						</div>
						<div class="layout-control-group">
							<label class="custom-layout-labe-shortcode"><?php _e("Map Border Color", map_bank); ?> :
								<span class="hovertip" data-original-title ="<?php _e("Specify Border Color for Map.",map_bank) ;?>">
									<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
								</span>
							</label>
							<input type="text"  class="layout-span8" id="ux_clr_map_border_color" value="#000000" name="ux_clr_map_border_color" onclick="ux_clr_font_color_label_setting();"  style="background-color:#000000;color:#fff;" />
							<img onclick="ux_clr_map_border_color_setting();" style="vertical-align: middle;margin-left: 5px;" src="<?php echo  plugins_url("/assets/images/color.png",dirname(__FILE__)); ?>" />
							<div id="clr_map_border_color"></div>
						</div>
						<div class="layout-control-group">
							<label class="custom-layout-labe-shortcode"><?php _e("Map Border Radius", map_bank); ?> :
								<span class="hovertip" data-original-title ="<?php _e("Select Border Radius for Map from drop-down.",map_bank) ;?>">
									<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
								</span>
							</label>
							<select disabled="disabled" id="ux_txt_map_radius" name="ux_txt_map_radius" class="layout-span9">
								<?php
									for($flag = 1;$flag <=20;$flag++)
									{
										?>
										<option  value="<?php echo $flag;?>"><?php echo $flag. " px";?><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></option>
										<?php
									}
								?>
							</select>
						</div>
					</div>
					<div class="layout-control-group">
						<label class="custom-layout-labe-shortcode"><?php _e("Show map Title", map_bank); ?> : 
							<span class="hovertip" data-original-title ="<?php _e("Tick this checkbox if you want to show map Title on Map.",map_bank) ;?>">
								<img class="tooltip_img" src="<?php echo plugins_url("/assets/images/questionmark_icon.png",dirname(__FILE__))?>"/>
							</span>
						</label>
						<input type="checkbox" checked="checked" name="ux_map_title" id="ux_map_title"/>
					</div>
					<div class="layout-control-group">
						<label class="custom-layout-labe-shortcode"></label>
						<input type="button" class="button-primary" value="<?php _e("Insert Map", map_bank); ?>"
							onclick="Insert_map_Form();"/>&nbsp;&nbsp;&nbsp;
						<a class="button" style="color:#bbb;" href="#"
							onclick="tb_remove(); return false;"><?php _e("Cancel", map_bank); ?></a>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function()
			{
				jQuery(".hovertip").tooltip({placement: "right"});
				show_border_settings();
			});
			function Insert_map_Form()
			{
				var map_id = jQuery("#add_map_id").val();
				var map_width = jQuery("#ux_txt_map_width").val();
				var map_width_type = jQuery("#ux_ddl_map_width").val();
				var map_height = jQuery("#ux_txt_map_height").val();
				var map_height_type = jQuery("#ux_ddl_map_height").val();
				var map_zoom = jQuery("#slider_zoom").val();
				var scrolling_wheel = jQuery("#ux_map_scroll_wheel").prop("checked");
				var show_title = jQuery("#ux_map_title").prop("checked");
				
				if(map_id == 0)
				{
					var error_message = jQuery("<div id=\"top-error\" class=\"top-right top-error\" style=\"display: block;z-index: 999999;\"><div class=\"top-error-notification\"></div><div class=\"top-error-notification ui-corner-all growl-top-error\" ><div onclick=\"error_message_close();\" id=\"close-top-error\" class=\"top-error-close\">x</div><div class=\"top-error-header\"><?php _e("Error!",  map_bank); ?></div><div class=\"top-error-top-error\"><?php _e("Please choose a Map to insert into Shortcode.", map_bank) ?></div></div></div>");
					jQuery("body").append(error_message);
					return;
				}
				else
				{
					error_message_close();
				}
				window.send_to_editor("[map_bank map_id=\"" + map_id + "\" map_width=\"" + map_width +"\" map_width_type=\"\" map_height=\"" + map_height +"\" map_height_type=\"\" map_zoom= \"" + map_zoom +"\" scrolling_wheel=\"" + scrolling_wheel +"\" map_border=\"\" border_width=\"\" border_style=\"\" border_color=\"\" border_radius=\"\" show_title=\"" + show_title +"\"]");
			}
	
			function error_message_close()
			{
				jQuery("#top-error").remove();
			}
	
			function show_border_settings()
			{
				var show_border_settings_val = jQuery("#ux_rdl_map_border_on").prop("checked");
				if(show_border_settings_val == true)
				{
					jQuery("#map_border_settings").css("display","block");
				}
				else
				{
					jQuery("#map_border_settings").css("display","none");
				}
			}
			
			function ux_clr_map_border_color_setting()
			{
				alert("<?php _e( "This feature is only available in Premium Editions!", map_bank ); ?>");
			}
			
		</script>
		<?php 
	}
}
?>