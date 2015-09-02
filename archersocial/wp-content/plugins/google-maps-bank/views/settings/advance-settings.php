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
		$save_adv_settings= wp_create_nonce("adv_settings");
		if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php"))
		{
			include_once MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php";
		}
		?>
		<form id="frm_advance_settings" class="layout-form" style="max-width:1000px;">
			<div class="fluid-layout">
				<div class="layout-span12">
					<?php 
						if(file_exists(MAP_BK_PLUGIN_DIR ."/includes/headers.php"))
						{
							include_once MAP_BK_PLUGIN_DIR ."/includes/headers.php";
						}
					?>
					<div class="widget-layout">
						<div class="widget-layout-title">
							<h4><?php _e("Step 7 - Advanced Settings", map_bank); ?></h4>
						</div>
						<div class="widget-layout-body">
							<div>
								<input type="button" onclick="proceed_to_back();" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" value="<?php _e("<< Back to Previous Step", map_bank); ?>"/>
								<input type="submit" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" value="<?php _e("Submit Changes", map_bank); ?>" style="float:right; margin-right:8px"/>
							</div>
							<div class="separator-doubled" style="margin-bottom: 20px;"></div> 
							<div class="fluid-layout">
								<div class="layout-span12">
									<div class="widget-layout">
										<div class="widget-layout-title">
											<h4>
												<?php _e("Google Map Preview", map_bank); ?>
											</h4>
										</div>
										<div class="widget-layout-body">
											<div id="map_canvas" style="width: 100%; height: 345px; border:4px solid #e0dede; margin-top:10px;"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-layout">
								<div class="widget-layout-title">
									<h4>
										<?php _e("Map Control Settings", map_bank); ?>
									</h4>
								</div>
								<div class="widget-layout-body">
									<div class="fluid-layout">
										<div class="layout-span6 responsive">
											<div class="layout-control-group">
												<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Center by Nearest Location", map_bank); ?> :
													<span class="hovertip" data-original-title ="<?php _e("You can enable this feature to center the map by nearest location.",map_bank) ;?>">
														<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
													</span>
												</label>
												<div class="layout-controls custom-layout-controls-maps rdl_maps">
													<input type="radio" <?php echo ($map_nearest_location_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_nearest_location_on" name="ux_rdl_nearest_location" onclick="Circle_Overlay();" value="1"/><?php _e("Enable", map_bank); ?>
													<input type="radio" <?php echo ($map_nearest_location_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_nearest_location_off" style="margin-left: 10px;" name="ux_rdl_nearest_location" onclick="Circle_Overlay();" value="0"/><?php _e("Disable", map_bank); ?>
												</div>
											</div>
										</div>
										<div class="layout-span6 responsive">
											<div class="layout-control-group">
												<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Scale Control", map_bank); ?> :
													<span class="hovertip" data-original-title ="<?php _e("This feature allows you to displays a map scale element.",map_bank) ;?>">
														<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
													</span>
												</label>
												<div class="layout-controls custom-layout-controls-maps rdl_maps">
													<input type="radio" <?php echo ($map_scale_control_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_scale_control_on" name="ux_rdl_scale_control" onclick="Circle_Overlay();" value="1"/><?php _e("Enable", map_bank); ?>
													<input type="radio" <?php echo ($map_scale_control_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_scale_control_off" style="margin-left: 10px;" name="ux_rdl_scale_control" onclick="Circle_Overlay();" value="0"/><?php _e("Disable", map_bank); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="fluid-layout">
										<div class="layout-span6 responsive">
											<div class="layout-control-group">
												<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Map Draggable", map_bank); ?> :
													<span class="hovertip" data-original-title ="<?php _e("You can enable this feature to make map draggable.",map_bank) ;?>">
														<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
													</span>
												</label>
												<div class="layout-controls custom-layout-controls-maps rdl_maps">
													<input type="radio" <?php echo ($map_map_dragable_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_map_draggable_on" name="ux_rdl_map_draggable" onclick="Circle_Overlay();" value="1"/><?php _e("Enable", map_bank); ?>
													<input type="radio" <?php echo ($map_map_dragable_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_map_draggable_off" style="margin-left: 10px;" name="ux_rdl_map_draggable" onclick="Circle_Overlay();" value="0"/><?php _e("Disable", map_bank); ?>
												</div>
											</div>
										</div>
										<div class="layout-span6 responsive">
											<div class="layout-control-group">
												<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Pan Control", map_bank); ?> :
													<span class="hovertip" data-original-title ="<?php _e("This feature allows you to displays a pan control for panning the map.",map_bank) ;?>">
														<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
													</span>
												</label>
												<div class="layout-controls custom-layout-controls-maps rdl_maps">
													<input type="radio" <?php echo ($map_pan_control_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_pan_control_on" name="ux_rdl_pan_control" onclick="Circle_Overlay();" value="1"/><?php _e("Enable", map_bank); ?>
													<input type="radio" <?php echo ($map_pan_control_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_pan_control_off" style="margin-left: 10px;" name="ux_rdl_pan_control" onclick="Circle_Overlay();" value="0"/><?php _e("Disable", map_bank); ?>
												</div>
											</div>
										</div>
									</div>
									<div class="fluid-layout">
										<div class="layout-span6 responsive">
											<div class="layout-control-group">
												<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Map Type Control", map_bank); ?> :
													<span class="hovertip" data-original-title ="<?php _e("This feature lets the user toggle between map types (roadmap and satellite).",map_bank) ;?>">
														<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
													</span>
												</label>
												<div class="layout-controls custom-layout-controls-maps rdl_maps">
													<input type="radio" <?php echo ($map_map_type_control_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_map_control_on" name="ux_rdl_map_control" onclick="Circle_Overlay();" value="1"/><?php _e("Enable", map_bank); ?>
													<input type="radio" <?php echo ($map_map_type_control_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_map_control_off" style="margin-left: 10px;" name="ux_rdl_map_control" onclick="Circle_Overlay();" value="0"/><?php _e("Disable", map_bank); ?>
												</div>
											</div>
										</div>
										<div class="layout-span6 responsive">
											<div class="layout-control-group">
												<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Over View Map", map_bank); ?> :
													<span class="hovertip" data-original-title ="<?php _e("This feature allows you to displays a thumbnail overview map reflecting the current map viewport within a wider area.",map_bank) ;?>">
														<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
													</span>
												</label>
												<div class="layout-controls custom-layout-controls-maps rdl_maps">
													<input type="radio" <?php echo ($map_overview_control_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_overview_on" name="ux_rdl_overview" onclick="Circle_Overlay();" value="1"/><?php _e("Enable", map_bank); ?>
													<input type="radio" <?php echo ($map_overview_control_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_overview_off" name="ux_rdl_overview" onclick="Circle_Overlay();" style="margin-left: 10px;" value="0"/><?php _e("Disable", map_bank); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="fluid-layout">
								<div class="layout-span6 responsive">
									<div class="widget-layout">
										<div class="widget-layout-title">
											<h4>
												<?php _e("Street View Settings", map_bank); ?><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
											</h4>
										</div>
										<div class="widget-layout-body">
											<div class="fluid-layout">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Street View", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("Street View provides panoramic 360 degree views from designated roads throughout its coverage area.it is most useful when indicating a location on a map",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input type="radio" disabled="disabled" <?php echo ($map_street_view_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_street_view_on" onclick="street_Overlay();" name="ux_rdl_street_view" value="1"/><?php _e("Enable", map_bank); ?>
															<input type="radio" disabled="disabled" <?php echo ($map_street_view_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_street_view_off" onclick="street_Overlay();" name="ux_rdl_street_view" style="margin-left: 10px;"  value="0"/><?php _e("Disable", map_bank); ?>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout">
												<div class="layout-span12 responsive" id="ux_street_view" style="display:block;">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Close Button", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("You can enable this feature to displays close button on street view map.",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input type="radio" disabled="disabled" <?php echo ($map_close_button_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_close_button_on" name="ux_rdl_close_button" value="1"/><?php _e("Enable", map_bank); ?>
															<input type="radio" disabled="disabled" <?php echo ($map_close_button_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_close_button_off" name="ux_rdl_close_button" style="margin-left: 10px;"  value="0"/><?php _e("Disable", map_bank); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="widget-layout">
										<div class="widget-layout-title">
											<h4>
												<?php _e("Circle Overlay Settings", map_bank); ?><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
											</h4>
										</div>
										<div class="widget-layout-body">
											<div class="layout-control-group">
												<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Circle Overlay", map_bank); ?> :
													<span class="hovertip" data-original-title="<?php _e("A Circle is similar to a Polygon in that you can define custom colors, weights, and opacities for the edge of the circle (the stroke) and custom colors and opacities for the area within the circle (the fill).", map_bank) ;?>">
														<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
													</span>
												</label>
												<div class="layout-controls custom-layout-controls-maps rdl_maps">
													<input type="radio" disabled="disabled" <?php echo ($map_circle_overlay_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_circle_on" onclick="Circle_Overlay_Settings();" name="ux_rdl_circle" value="1"/><?php _e("Enable", map_bank); ?>
													<input type="radio" disabled="disabled" <?php echo ($map_circle_overlay_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_circle_off" onclick="Circle_Overlay_Settings();" name="ux_rdl_circle" style="margin-left: 10px;"  value="0"/><?php _e("Disable", map_bank); ?>
												</div>
											</div>
											<div id="circle_overlay_button" style="display:block;">
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Radius (Miles)", map_bank); ?> : <span class="error">*</span>
														<span class="hovertip" data-original-title ="<?php _e("This option allows you to specify the area (in miles) to cover around the specific location. The range is from 1 to 1000 miles.",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-adv-setting">
														<label>
															<input type="text" disabled="disabled" class="layout-span12" name="ux_txt_radius" maxlength="3" onblur="Circle_Overlay();" onkeyup="this.value = minmax_radius(this.value, 0, 100)" onkeypress ="return OnlyDigitsDots(event);" id="ux_txt_radius" value="<?php echo $map_circle_radius_update;?>">
														</label>
													</div>
												</div>
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-maps"><?php _e("Stroke Weight", map_bank); ?> :
														<span class="error">*</span>
														<span class="hovertip" data-original-title ="<?php _e("This option allows you to specify the thickness of the circle border.",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-adv-setting">
														<input type="text" disabled="disabled" class="layout-span12" name="ux_txt_weight" onkeypress ="return OnlyDigitsDots(event);" onblur="Circle_Overlay();" id="ux_txt_weight" value="<?php echo $map_circle_weight_update;?>"/>
													</div>	
												</div>
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-maps"><?php _e("Stroke Opacity", map_bank); ?> :
														<span class="error">*</span>
														<span class="hovertip" data-original-title ="<?php _e("This option allows you to specify the opacity for the border color of the circle on the map as per your requirement.",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-adv-setting">
														<input type="text" disabled="disabled" class="layout-span12" name="ux_txt_opacity" maxlength="4" onkeyup="this.value = minmax(this.value)" onblur="Circle_Overlay();" onkeypress ="return OnlyDigitsDots(event);" id="ux_txt_opacity" value="<?php echo $map_circle_opacity_update;?>"/>
													</div>	
												</div>
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-maps"><?php _e("Stroke Color", map_bank); ?> :
														<span class="error">*</span>
														<span class="hovertip" data-original-title ="<?php _e("This option allows you to specify the border color for the circle on the map.",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-adv-setting">
														<input type="text" class="layout-span10" id="ux_clr_stroke_color" name="ux_clr_stroke_color" onblur="Circle_Overlay();" onclick="ux_clr_stroke_color_setting();" value="<?php echo $map_stroke_color_update;?>" style="background-color:<?php echo isset($map_stroke_color_update) ? $map_stroke_color_update : "#e65765";?>;color:#fff;"/>
														<img onclick="ux_clr_stroke_color_setting();" style="vertical-align: middle;margin-left: 5px;" src="<?php echo  plugins_url("/assets/images/color.png",dirname(dirname(__FILE__))); ?>"/>
														<div id="clr_stroke_color"></div>
													</div>	
												</div>
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-maps"><?php _e("Fill Color", map_bank); ?> :
														<span class="error">*</span>
														<span class="hovertip" data-original-title ="<?php _e("This option allows you to specify the inner color of the circle on the map as per your requirement.",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-adv-setting">
														<input type="text" class="layout-span10" id="ux_clr_fill_color" onblur="Circle_Overlay();" name="ux_clr_fill_color" onclick="ux_clr_fill_color_setting();" value="<?php echo $map_fill_color_update;?>" style="background-color:<?php echo isset($map_fill_color_update) ? $map_fill_color_update : "#f8c1c3";?>;color:#fff;"/>
														<img onclick="ux_clr_fill_color_setting();" style="vertical-align: middle;margin-left: 5px;" src="<?php echo  plugins_url("/assets/images/color.png",dirname(dirname(__FILE__))); ?>" />
														<div id="clr_fill_color"></div>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="layout-span6 responsive">
									<div class="widget-layout">
										<div class="widget-layout-title">
											<h4>
												<?php _e("Marker Cluster Settings", map_bank); ?><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
											</h4>
										</div>
										<div class="widget-layout-body">
											<div class="fluid-layout">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Marker Cluster", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("Clustering is usually done by dividing map to squares. Square size depends on map zoom level. Markers inside a square are then grouped into cluster.",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input disabled="disabled" type="radio" <?php echo ($map_marker_cluster_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_marker_cluster_on" onclick="marker_cluster();" name="ux_rdl_marker_cluster" value="1"/><?php _e("Enable", map_bank); ?>
															<input disabled="disabled" type="radio" <?php echo ($map_marker_cluster_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_marker_cluster_off" onclick="marker_cluster();" name="ux_rdl_marker_cluster" style="margin-left: 10px;"  value="0"/><?php _e("Disable", map_bank); ?>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout">
												<div class="layout-span12 responsive" id="grid_marker" style="dislpay:block;">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Grid", map_bank); ?> : <span class="error">*</span>
															<span class="hovertip" data-original-title ="<?php _e("Here you can specify the Grid distance between the cluster Markers. ",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-adv-setting">
															<label>
																<input type="text" disabled="disabled" class="layout-span12" name="ux_txt_grid" id="ux_txt_grid" onkeypress ="return OnlyDigitsDots(event);" value="<?php echo $map_cluster_grid_update;?>">
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout" id="grid_max_zoom_level" style="dislpay:block;">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Max Zoom Level", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("Here you can select the max Zoom level for cluster. ",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-adv-setting ">
															<select disabled="disabled" class="layout-span12" name="ux_ddl_max_zoom_level" id="ux_ddl_max_zoom_level">
																<?php
																for($flag = 1;$flag <=21;$flag++)
																{
																	?>
																	<option value="<?php echo $flag;?>"><?php echo $flag;?></option>
																	<?php
																}
																?>	
															</select>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="widget-layout">
										<div class="widget-layout-title">
											<h4>
												<?php _e("Directions Settings", map_bank); ?><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
											</h4>
										</div>
										<div class="widget-layout-body">
											<div class="layout-control-group">
												<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Directions", map_bank); ?> :
													<span class="hovertip" data-original-title ="<?php _e("You can calculate directions (using a variety of methods of transportation) by using the DirectionsService object.",map_bank) ;?>">
														<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
													</span>
												</label>
												<div class="layout-controls custom-layout-controls-maps rdl_maps">
													<input disabled="disabled" type="radio" <?php echo ($map_direction_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_direction_on" name="show_direction" onclick="direction_display();" value="1"/><?php _e("Enable", map_bank); ?>
													<input disabled="disabled" type="radio" <?php echo ($map_direction_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_direction_on_off" name="show_direction" onclick="direction_display();" style="margin-left: 10px;" value="0"/><?php _e("Disable", map_bank); ?>
												</div>
											</div>
											<div id="direction_settings" style="display:block;">
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Displaying Text Directions", map_bank); ?> :
														<span class="hovertip" data-original-title ="<?php _e("This feature allows you to displays Text Directions .",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-controls-maps rdl_maps">
														<input type="radio" disabled="disabled" <?php echo ($map_direction_text_update == 1) ? "checked=\"checked\"" : "";?> id="ux_rdl_direction_text_on" name="show_direction_text" value="1"/><?php _e("Enable", map_bank); ?>
														<input type="radio" disabled="disabled" <?php echo ($map_direction_text_update == 0) ? "checked=\"checked\"" : "";?> id="ux_rdl_direction_text_on_off" name="show_direction_text" style="margin-left: 10px;" value="0"/><?php _e("Disable", map_bank); ?>
													</div>
												</div>
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Travel Modes", map_bank); ?> :
														<span class="hovertip" data-original-title="<?php _e("Here you can specify the transportation mode to use",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-adv-setting ">
														<select disabled="disabled" id="ux_ddl_travel_mode" class="layout-span12" name="ux_ddl_travel_mode">
															<option value="DRIVING"><?php _e("Driving", map_bank); ?></option>
															<option value="WALKING"><?php _e("Walking", map_bank); ?></option>
															<option value="BICYCLING"><?php _e("Bicycling", map_bank); ?></option>
															<option value="TRANSIT"><?php _e("Transit", map_bank); ?></option>
														</select>
													</div>
												</div>
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Text Color", map_bank); ?> :
														<span class="hovertip" data-original-title ="<?php _e("Here you can specify the Text Color for Text Directions",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-adv-setting">
														<input type="text" class="layout-span10" id="ux_clr_fill_color_text" onblur="Circle_Overlay();" name="ux_clr_fill_color_text" onclick="ux_clr_fill_color_text_setting();" value="<?php echo $map_text_color_update;?>" style="background-color:<?php echo isset($map_text_color_update) ? $map_text_color_update : "#000000";?>;color:#fff;"/>
														<img onclick="ux_clr_fill_color_text_setting();" style="vertical-align: middle;margin-left: 5px;" src="<?php echo  plugins_url("/assets/images/color.png",dirname(dirname(__FILE__))); ?>" />
														<div id="clr_fill_color_text"></div>
													</div>	
												</div>
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Background Color", map_bank); ?> :
														<span class="hovertip" data-original-title ="<?php _e("Here you can specify the Background Color for Text Directions",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-adv-setting">
														<input type="text" class="layout-span10" id="ux_background_color" onblur="Circle_Overlay();" name="ux_background_color" onclick="ux_background_color_setting();" value="<?php echo $map_background_update;?>" style="background-color:<?php echo isset($map_background_update) ? $map_background_update : "#ffffff";?>;color:#fff;"/>
														<img onclick="ux_background_color_setting();" style="vertical-align: middle;margin-left: 5px;" src="<?php echo  plugins_url("/assets/images/color.png",dirname(dirname(__FILE__))); ?>" />
														<div id="background_color"></div>
													</div>	
												</div>
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Border Color", map_bank); ?> :
														<span class="hovertip" data-original-title ="<?php _e("Here you can specify the Border Color for Text Directions",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-adv-setting">
														<input type="text" class="layout-span10" id="ux_border_color" onblur="Circle_Overlay();" name="ux_border_color" onclick="ux_border_color_setting();" value="<?php echo $map_border_color_update;?>" style="background-color:<?php echo isset($map_border_color_update) ? $map_border_color_update : "#000000";?>;color:#fff;"/>
														<img onclick="ux_border_color_setting();" style="vertical-align: middle;margin-left: 5px;" src="<?php echo  plugins_url("/assets/images/color.png",dirname(dirname(__FILE__))); ?>" />
														<div id="border_color"></div>
													</div>	
												</div>
												<div class="layout-control-group">
													<label class="layout-control-label custom-label-width-adv-setting"><?php _e("Font Family", map_bank); ?> :
														<span class="hovertip" data-original-title="<?php _e("Here you can specify the Font Family for Text Directions",map_bank) ;?>">
															<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
														</span>
													</label>
													<div class="layout-controls custom-layout-adv-setting ">
														<select disabled="disabled" id="ux_ddl_font_family" class="layout-span12" name="ux_ddl_font_family">
															<option value="cursive"><?php _e("Cursive", map_bank); ?></option>
															<option value="fantasy"><?php _e("Fantasy", map_bank); ?></option>
															<option value="inherit"><?php _e("Inherit", map_bank); ?></option>
															<option value="initials"><?php _e("Initials", map_bank); ?></option>
															<option value="monospace"><?php _e("Monospace", map_bank); ?></option>
															<option value="sans-serif"><?php _e("Sans-Serif", map_bank); ?></option>
															<option value="serif"><?php _e("Serif", map_bank); ?></option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="separator-doubled"></div> 
							<div style="margin-top: 10px;">
								<input type="button" onclick="proceed_to_back();" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" value="<?php _e("<< Back to Previous Step", map_bank); ?>"/>
								<input type="submit" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" value="<?php _e("Create Map", map_bank); ?>" style="float:right; margin-right:8px"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script type="text/javascript">
			
			var layer;
		
			jQuery(document).ready(function()
			{
				Circle_Overlay_Settings();
				marker_cluster();
				street_Overlay();
				direction_display();
				initialize();
				jQuery(".hovertip").tooltip({placement: "right"});
				jQuery("#gmb_create_new_map").addClass("nav-tab-active");
				jQuery("#step_2").addClass("current");
				jQuery("#step_3").addClass("current");
				jQuery("#step_4").addClass("current");
				jQuery("#step_5").addClass("current");
				jQuery("#step_6").addClass("current");
				jQuery("#step_7").addClass("current");
				jQuery("#ux_ddl_max_zoom_level").val("<?php echo isset($map_max_zoom_level_update) ? $map_max_zoom_level_update : "1";?>");
				jQuery("#ux_ddl_travel_mode").val("<?php echo isset($map_travel_mode_update) ? $map_travel_mode_update : "DRIVING";?>");
				jQuery("#ux_ddl_font_family").val("<?php echo isset($map_font_family_update) ? $map_font_family_update : "inherit";?>");
			})
			
			function overlay()
			{
				var overlay_opacity = jQuery("<div class=\"opacity_overlay\"></div>");
				jQuery("body").append(overlay_opacity);
				var overlay = jQuery("<div class=\"loader_opacity\"><div class=\"processing_overlay\"></div></div>");
				jQuery("body").append(overlay);
			}
			
			jQuery("#frm_advance_settings").validate
			({
				rules:
				{
					ux_txt_grid:
					{
						required: true
					},
					ux_txt_radius:
					{
						required: true,
						digits: true
					},
					ux_txt_weight:
					{
						required: true,
						digits: true
					},
					ux_txt_opacity:
					{
						required: true
					}
				},
				errorPlacement: function(error, element)
				{
					jQuery(element).css("background-color","#FFCCCC");
					jQuery(element).css("border","1px solid red");
				},
				submitHandler: function(form)
				{
					overlay();
					var map_id = "<?php echo $map_id; ?>";
					jQuery.post(ajaxurl, jQuery("#frm_advance_settings").serialize() +"&map_id="+map_id+"&param=add_adv_settings_db&action=add_map_library&_wpnonce=<?php echo $save_adv_settings;?>", function()
					{
						setTimeout(function () {
							jQuery(".loader_opacity").remove();
							jQuery(".opacity_overlay").remove();
							window.location.href = "admin.php?page=gmb_dashboard";
						}, 2000);
					});
				}
			});
			
			function Circle_Overlay_Settings()
			{
				
			}
			function street_Overlay()
			{
				
			}
			
			function direction_display()
			{
				
			}
			
			function Circle_Overlay()
			{
				initialize();
			}
			
			function minmax(value) 
			{
				if(parseInt(value) < 0 || isNaN(value)) 
					return 0; 
				else if(value > 1) 
					return 1; 
				else return value;
			}
			
			function minmax_radius(value, min, max) 
			{
				if(parseInt(value) < 0 || isNaN(value)) 
					return 0; 
				else if(parseInt(value) > 100) 
					return 100; 
				else return value;
			}
			
			function marker_cluster()
			{
				
			}
			function OnlyDigitsDots(evt) 
			{
				var theEvent = evt || window.event;
				var key = theEvent.keyCode || theEvent.which;
				key = String.fromCharCode( key );
				var regex = /[0-9]|\./;
				if( !regex.test(key) ) 
				{
					theEvent.returnValue = false;
					if(theEvent.preventDefault) theEvent.preventDefault();
				}
			}
			
			function proceed_to_back()
			{
				overlay();
				setTimeout(function () {
					jQuery(".loader_opacity").remove();
					jQuery(".opacity_overlay").remove();
					window.location.href = "admin.php?page=gmb_add_layers&map_id=<?php echo $map_id;?>";
				}, 2000);
			}
			
			function ux_clr_stroke_color_setting()
			{
				alert("<?php _e( "This feature is only available in Premium Editions!", map_bank ); ?>");
			}
			
			function ux_clr_fill_color_setting()
			{
				alert("<?php _e( "This feature is only available in Premium Editions!", map_bank ); ?>");
			}
			
			function ux_clr_fill_color_text_setting()
			{
				alert("<?php _e( "This feature is only available in Premium Editions!", map_bank ); ?>");
			}
			
			function ux_background_color_setting()
			{
				alert("<?php _e( "This feature is only available in Premium Editions!", map_bank ); ?>");
			}
			
			function ux_border_color_setting()
			{
				alert("<?php _e( "This feature is only available in Premium Editions!", map_bank ); ?>");
			}
		</script>
		<?php
		if(file_exists(MAP_BK_PLUGIN_DIR ."/views/map-preview.php"))
		{
			include_once MAP_BK_PLUGIN_DIR ."/views/map-preview.php";
		}
	}
}
?>