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
		$add_new_layer = wp_create_nonce("add_layer");
		
		if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php"))
		{
			include_once MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php";
		}
		?>
		<form id="frm_map_layers" class="layout-form" style="max-width:1000px;">
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
							<h4><?php _e("Step 6 - Add Layers", map_bank); ?></h4>
						</div>
						<div class="widget-layout-body">
							<div>
								<input type="button" onclick="proceed_to_back();" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" value="<?php _e("<< Back to Previous Step", map_bank); ?>"/>
								<input type="submit" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" value="<?php _e("Proceed to Next Step >>", map_bank); ?>" style="float:right; margin-right:8px"/>
							</div>
							<div class="separator-doubled" style="margin-bottom: 20px;"></div> 
							<div class="fluid-layout">
								<div class="layout-span12">
									<div class="widget-layout">
										<div class="widget-layout-title">
											<h4><?php _e("Layers Settings", map_bank); ?></h4>
										</div>
										<div class="widget-layout-body">
											<div class="fluid-layout">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("KML Layer", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("KML Stands for Keyhole Markup Language. It is geographic information system which is used for expressing geographic annotation and visualization within Internet-based. ",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input disabled="disabled" type="checkbox" id="ux_chk_kml_layer" <?php echo ($map_kml_layer_update  == 1) ? "checked=\"checked\"" : "";?> name="ux_chk_kml_layer" onclick="show_kml_link();" value="1"/>
															<span class="span-custom"><?php _e("Tick to enable the KML Layers to display the Geographic Information given by the KML Link.", map_bank); ?></span><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout" style="display: none;" id="div_kml_link">
												<div class="layout-span6 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("KML Link", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("KML Layers allows you to display the Geographic Information given by the KML Link.",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps">
															<input disabled="disabled" type="text" id="ux_txt_kml_layer_link" onblur="kml_url_impliment();" name="ux_txt_kml_layer_link" value="<?php echo $map_kml_layer_link_update;?>" class="layout-span12"/>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Weather Layer", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("Tick to Represent Weather Conditions including Temperature and Wind Speed of your Location on the Map.",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input disabled="disabled" type="checkbox" id="ux_chk_weather" <?php echo ($map_weather_layer_update  == 1) ? "checked=\"checked\"" : "";?> name="ux_chk_weather" onclick="weather_layer_impliment();" value="1"/>
															<span class="span-custom"><?php _e("Tick to Represent Weather Conditions including Temperature and Wind Speed of your Location on the Map.", map_bank); ?></span></br><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
														</div>
													</div>
												</div>
											</div>
											<div style="display:none;" id=ux_weather_layer>
												<div class="fluid-layout">
													<div class="layout-span6 responsive">
														<div class="layout-control-group">
															<label class="layout-control-label custom-label-width-maps"><?php _e("Temperature Unit", map_bank); ?> :
																<span class="hovertip" data-original-title ="<?php _e("It allows you to represent and Weather Conditions add weather forecasts and cloud imagery to your map including Temperature of your Location on the Map ",map_bank) ;?>">
																	<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
																</span>
															</label>
															<div class="layout-controls custom-layout-controls-maps rdl_maps">
																<input  type="radio" id="ux_rdl_celsius" <?php echo ($map_temprature_unit_update  == 0) ? "checked=\"checked\"" : "";?> name="ux_rdl_temperature" onclick="change_temp_unit()" value="0"/><?php _e("Celsius", map_bank); ?>
																<input type="radio" id="ux_rdl_fahrenheit" <?php echo ($map_temprature_unit_update  == 1) ? "checked=\"checked\"" : "";?> name="ux_rdl_temperature" onclick="change_temp_unit()" value="1"/><?php _e("Fahrenheit", map_bank); ?>
															</div>
														</div>
													</div>
												</div>
												<div class="fluid-layout">
													<div class="layout-span6 responsive">
														<div class="layout-control-group">
															<label class="layout-control-label custom-label-width-maps"><?php _e("Wind Speed Unit", map_bank); ?> :
																<span class="hovertip" data-original-title ="<?php _e(" It allows you to represent and Weather Conditions add weather forecasts and cloud imagery to your map including Wind Speed of your Location on the Map",map_bank) ;?>">
																	<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
																</span>
															</label>
															<div class="layout-controls custom-layout-controls-maps rdl_maps">
																<?php
																$wind_speed_unit = isset($map_wind_speed_unit_update) ? $map_wind_speed_unit_update : "";
																switch($wind_speed_unit)
																{
																	case "1":
																		?>
																		<input type="radio" id="ux_rdl_mph" checked="checked" onclick="change_wind_speed_unit();" name="ux_rdl_wind_speed" value="1"/>mph
																		<input type="radio" id="ux_rdl_kmph" name="ux_rdl_wind_speed" onclick="change_wind_speed_unit();" value="2"/>km/h
																		<input type="radio" id="ux_rdl_mps" name="ux_rdl_wind_speed" onclick="change_wind_speed_unit();" value="3"/>m/s
																		<?php
																	break;
																	case "2":
																		?>
																		<input type="radio" id="ux_rdl_mph"  onclick="change_wind_speed_unit();" name="layer_impliment" value="1"/>mph
																		<input type="radio" id="ux_rdl_kmph" checked="checked" name="ux_rdl_wind_speed" onclick="change_wind_speed_unit();" value="2"/>km/h
																		<input type="radio" id="ux_rdl_mps" name="ux_rdl_wind_speed" onclick="change_wind_speed_unit();" value="3"/>m/s
																		<?php
																	break;
																	default:
																		?>
																		<input type="radio" id="ux_rdl_mph" onclick="change_wind_speed_unit();" name="ux_rdl_wind_speed" value="1"/>mph
																		<input type="radio" id="ux_rdl_kmph" name="ux_rdl_wind_speed" onclick="change_wind_speed_unit();" value="2"/>km/h
																		<input type="radio" id="ux_rdl_mps" checked="checked" name="ux_rdl_wind_speed" onclick="change_wind_speed_unit();" value="3"/>m/s
																		<?php
																	break;
																}
																?>
															</div>
														</div>
													</div>
												</div>
											</div>
											<input type="hidden" id="ux_txt_latitude" class="layout-span12" name="ux_txt_latitude" value="<?php echo $map_location_latitude;?>"/>
											<input type="hidden" id="ux_txt_longitude" class="layout-span12" name="ux_txt_longitude" value="<?php echo $map_location_longitude;?>"/>
											<div class="fluid-layout">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Fusion Table Layer", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("The Fusion Tables layer renders data contained in Google Fusion Tables and allows you to display your Map with its corresponding Locations and their detailed Information.",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input disabled="disabled" type="checkbox" <?php echo ($map_fussion_table_layer_update == 1) ? "checked=\"checked\"" : "";?> id="ux_chk_fusion_table" name="ux_chk_fusion_table" onclick="chk_fusion_table_layer();" value="1"/>
															<span class="span-custom"><?php _e("Tick to display your Map with its corresponding Locations and their detailed Information.", map_bank); ?></span><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
														</div>
													</div>
												</div>
											</div>
											<div id="show_txt_fusion_layer" style="display: none;">
												<div class="fluid-layout">
													<div class="layout-span6 responsive">
														<div class="layout-control-group">
															<label class="layout-control-label custom-label-width-maps"><?php _e("Select", map_bank); ?> :
																<span class="hovertip" data-original-title ="<?php _e("Here you can enter the select place",map_bank) ;?>">
																	<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
																</span>
															</label>
															<div class="layout-controls custom-layout-controls-maps">
																<input disabled="disabled" type="text" id="ux_txt_select_query" name="ux_txt_select_query" class="layout-span12" value="<?php echo $map_fussion_layer_key_update;?>"/>
															</div>
														</div>
													</div>
													<div class="layout-span6 responsive">
														<div class="layout-control-group">
															<label class="layout-control-label custom-label-width-maps"><?php _e("From", map_bank); ?> :
																<span class="hovertip" data-original-title ="<?php _e("Here You can enter the From place",map_bank) ;?>">
																	<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
																</span>
															</label>
															<div class="layout-controls custom-layout-controls-maps">
																<input type="text" id="ux_txt_from_query" name="ux_txt_from_query" class="layout-span12" value="<?php echo $map_fussion_layer_table_name_update;?>"/>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout">
												<div class="layout-span12responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Traffic Layer", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("Allows you to display Real Time Traffic Conditions of supported Locations on the Map.",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input disabled="disabled" type="checkbox" id="ux_chk_traffic" <?php echo ($map_traffic_layer_update  == 1) ? "checked=\"checked\"" : "";?> name="ux_chk_traffic" onclick="traffic_layer_impliment();" value="1"/>
															<span class="span-custom"><?php _e("Tick to display Real Time Traffic Conditions of supported Locations.", map_bank); ?></span><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Transit Layer", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("Allows you to show Public Transit Network of Locations supported by Transit Information on the Map.",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input disabled="disabled" type="checkbox" <?php echo ($map_transit_layer_update  == 1) ? "checked=\"checked\"" : "";?> id="ux_chk_transit" name="ux_chk_transit" onclick="transit_layer_impliment();" value="1"/>
															<span class="span-custom"><?php _e("Tick to show Public Transit Network of Locations supported by Transit Information.", map_bank); ?></span><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Bycycling Layer", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("The Bicycling layer object renders a layer of bike paths and/or bicycle-specific overlays into a common layer.",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input disabled="disabled" type="checkbox" id="ux_chk_bycycling" <?php echo ($map_bicycling_layer_update == 1) ? "checked=\"checked\"" : "";?> name="ux_chk_bycycling" onclick="bycycle_layer_impliment();" value="1"/>
															<span  class="span-custom"><?php _e("Tick to find any Bicycle, Bike Paths or other Bicycling specific Overlays on the Map.", map_bank); ?></span><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Panoramio Layer", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("Allows you to display a Layer of Geo tagged photos in the form of Photos Icons on Map.",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input disabled="disabled" type="checkbox" id="ux_chk_panoramio" <?php echo ($map_panoramio_layer_update == 1) ? "checked=\"checked\"" : "";?> name="ux_chk_panoramio" onclick="panoramio_layer_impliment();" value="1"/>
															<span  class="span-custom"><?php _e("Tick to display a Layer of Geotagged photos in the form of Photos Icons on Map.", map_bank); ?></span><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Map Engine Layer ", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("Allowing you to import Google Maps Engine vector data into your Google Map",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps rdl_maps">
															<input disabled="disabled" type="checkbox" id="ux_chk_engine_layer" <?php echo ($map_engine_layer_update == 1) ? "checked=\"checked\"" : "";?> name="ux_chk_engine_layer" onclick="engine_layer_impliment();" value="1"/>
															<span  class="span-custom"><?php _e("Tick to display a Layer of Map Engine on Map.", map_bank); ?></span><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout" style="display: none;" id="div_layer_id">
												<div class="layout-span7 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Layer Id", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("Here you can enter the Layer id place",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps">
															<input type="text" id="ux_txt_layer_id" name="ux_txt_layer_id" class="layout-span12" value="<?php echo $map_layer_id_update;?>"/>
														</div>
													</div>
												</div>
											</div>
											<div id="map_themes_data">
												<div id="map_canvas" style="width: 100%; height: 345px; border:4px solid #e0dede; margin-top:10px;"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="separator-doubled"></div> 
							<div style="margin-top: 10px;">
								<input type="button" onclick="proceed_to_back();" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" value="<?php _e("<< Back to Previous Step", map_bank); ?>"/>
								<input type="submit" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" value="<?php _e("Proceed to Next Step >>", map_bank); ?>" style="float:right; margin-right:8px"/>
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
				jQuery(".hovertip").tooltip({placement: "right"});
				show_kml_link();
				chk_fusion_table_layer();
				engine_layer_impliment();
				weather_layer_impliment();
				initialize();
				jQuery("#gmb_create_new_map").addClass("nav-tab-active");
				jQuery("#step_2").addClass("current");
				jQuery("#step_3").addClass("current");
				jQuery("#step_4").addClass("current");
				jQuery("#step_5").addClass("current");
				jQuery("#step_6").addClass("current");
			});
	
			function overlay()
			{
				var overlay_opacity = jQuery("<div class=\"opacity_overlay\"></div>");
				jQuery("body").append(overlay_opacity);
				var overlay = jQuery("<div class=\"loader_opacity\"><div class=\"processing_overlay\"></div></div>");
				jQuery("body").append(overlay);
			}
			
			function proceed_to_back()
			{
				overlay();
				setTimeout(function () {
					jQuery(".loader_opacity").remove();
					jQuery(".opacity_overlay").remove();
					window.location.href = "admin.php?page=gmb_add_polyline&map_id=<?php echo $map_id;?>";
				}, 2000);
			}
			
			jQuery("#frm_map_layers").validate
			({
				rules:
				{	
					ux_txt_kml_layer_link:
					{ 
						required: true
					},
					ux_txt_select_query:
					{
						required: true
					},
					ux_txt_from_query:
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
					setTimeout(function () {
						jQuery(".loader_opacity").remove();
						jQuery(".opacity_overlay").remove();
						window.location.href = "admin.php?page=gmb_adv_settings&map_id="+map_id;
					}, 2000);
					
				}
			});
			
			function engine_layer_impliment()
			{
				var engine_layer = jQuery("#ux_chk_engine_layer").prop("checked");
				if(engine_layer == true)
				{
					jQuery("#div_layer_id").css("display","block");
					initialize();
				}
				else
				{
					jQuery("#div_layer_id").css("display","none");
					initialize();
				}
			}
			
			function show_kml_link()
			{
				var kml_layer = jQuery("#ux_chk_kml_layer").prop("checked");
				if(kml_layer == true)
				{
					jQuery("#div_kml_link").css("display","block");
					initialize();
				}
				else
				{
					jQuery("#div_kml_link").css("display","none");
					initialize();
				}
			}
			function chk_fusion_table_layer()
			{
				var kml_layer = jQuery("#ux_chk_fusion_table").prop("checked");
				if(kml_layer == true)
				{
					jQuery("#show_txt_fusion_layer").css("display","block");
					initialize();
				}
				else
				{
					jQuery("#show_txt_fusion_layer").css("display","none");
					initialize();
				}
			}
			
			function kml_url_impliment()
			{
				initialize();
			}
			
			function weather_layer_impliment()
			{
				var weather_layer = jQuery("#ux_chk_weather").prop("checked");
				if(weather_layer == true)
				{
					jQuery("#ux_weather_layer").css("display","block");
					initialize();
				}
				else
				{
					jQuery("#ux_weather_layer").css("display","none");
					initialize();
				}
			}
			
			function change_temp_unit()
			{
				initialize();
			}
			function change_wind_speed_unit()
			{
				initialize();
			}
			function traffic_layer_impliment()
			{
				initialize();
			}
			function transit_layer_impliment()
			{
				initialize();
			}
			function bycycle_layer_impliment()
			{
				initialize();
			}
			function panoramio_layer_impliment()
			{
				initialize();
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