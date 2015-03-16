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
		break;;
	}
	if (!current_user_can($user_role_permission))
	{
		return;
	}
	else
	{
		$add_new_polygon = wp_create_nonce("new_polygon_add");
		$update_polygon = wp_create_nonce("polygon_update");
		
		if(isset($_REQUEST["map_id"]))
		{
			if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php";
			}
			$map_polygon_count = $wpdb->get_var
			(
				$wpdb->prepare
				(
					"SELECT count(id) FROM ".map_bank_create_new_map_table()." WHERE parent_id = %d AND map_type = %s ",
					$map_id,
					"polygon"
				)
			);
		}
		?>
		<form id="frm_edit_polygon" class="layout-form" style="max-width:1000px;">
			<div class="fluid-layout">
				<div class="layout-span12">
					<div class="widget-layout">
						<div class="widget-layout-title">
							<h4>
								<?php _e("Polygon Settings", map_bank); ?>
							</h4>
						</div>
						<div class="widget-layout-body">
							<div class="fluid-layout">
								<input type="button" onclick="proceed_to_back();" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" value="<?php _e("Back to Manage Map", map_bank); ?>">
								<?php	
									if(isset($_REQUEST["pgon_id"]))
									{
										?>
										<input type="submit" id="ux_btn_action" value="<?php _e("Update Polygon", map_bank); ?>" name="ux_btn_action" class="btn btn-danger" style="float:right;"/>
										<?php
									}
									else 
									{
										if($map_polygon_count < 1)
										{
											?>
											<input type="submit" id="ux_btn_action" value="<?php _e("Add Polygon", map_bank); ?>" name="ux_btn_action" class="btn btn-danger" style="float:right;"/>
											<?php
										}
									}
								?>
							</div>
							<div class="separator-doubled" style="margin-bottom: 20px;"></div> 
							<div class="fluid-layout">
								<div class="layout-span12 responsive">
									<div class="layout-control-group">
										<label class="layout-control-label-location layout-control-label"><?php _e("Formatted Address", map_bank); ?> :
											<span class="error">*</span>
											<span class="hovertip" data-original-title ="<?php _e("Formatted Address are used for points of interest and geocodes as below, plus a slight variant is used for streets.",map_bank) ;?>">
												<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
											</span>
										</label>
										<div class="layout-controls-location custom-layout-controls-map-location">
											<input type="text" id="geocomplete" name="geocomplete" class="layout-span12" value="<?php echo stripcslashes(htmlspecialchars_decode($map_location_title));?>" placeholder="<?php _e("Enter the Location Title here", map_bank); ?>"/>
										</div>
									</div>
								</div>
							</div>
							<div class="fluid-layout">
								<div class="layout-span6 responsive">
									<div class="layout-control-group">
										<label class="layout-control-label-location layout-control-label"><?php _e("Line Color", map_bank); ?> :
											<span class="error">*</span>
											<span class="hovertip" data-original-title ="<?php _e("Here you can set line color for your polygon.",map_bank) ;?>">
												<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
											</span>
										</label>
										<div class="layout-controls-location custom-layout-controls-map-location">
											<input type="text" class="layout-span10" id="ux_clr_font_color" onblur="polygon_onblur();" name="ux_clr_font_color" onclick="ux_clr_font_color_label_setting();" value="<?php echo $map_polygon_line_color_update ;?>" style="background-color:<?php echo $map_polygon_line_color_update;?>;color:#fff;"/>
											<img onclick="ux_clr_font_color_label_setting();" style="vertical-align: middle;margin-left: 5px;" src="<?php echo  plugins_url("/assets/images/color.png",dirname(dirname(__FILE__))); ?>"/>
											<div id="clr_font_color"></div>
										</div>	
									</div>
								</div>
								<div class="layout-span6 responsive">
									<div class="layout-control-group">
										<label class="layout-control-label-location layout-control-label"><?php _e("Line Opacity", map_bank); ?> :
											<span class="error">*</span>
											<span class="hovertip" data-original-title ="<?php _e("Here you can set line opacity for your polygon.",map_bank) ;?>">
												<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
											</span>	
										</label>
										<div class="layout-controls-location custom-layout-controls-map-location">
											<input type="text" id="ux_txt_line_opacity" class="layout-span12" onblur="polygon_onblur();" maxlength="4" onkeyup="this.value = minmax(this.value)" onkeypress ="return OnlyDigitsDots(event);" name="ux_txt_line_opacity" placeholder="<?php _e("Enter line opacity ", map_bank); ?>" value="<?php echo $map_polygon_line_opacity_update;?>"/>
										</div>
									</div>
								</div>
							</div>
							<div class="fluid-layout">
								<div class="layout-span6 responsive">
									<div class="layout-control-group">
										<label class="layout-control-label-location layout-control-label"><?php _e("Polygon Color", map_bank); ?> :
											<span class="error">*</span>
											<span class="hovertip" data-original-title ="<?php _e("Here you can set color for your polygon.",map_bank) ;?>">
												<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
											</span>
										</label>
										<div class="layout-controls-location custom-layout-controls-map-location">
											<input type="text" class="layout-span10" id="ux_clr_Polygon_color" onblur="polygon_onblur();" name="ux_clr_Polygon_color" onclick="ux_clr_Polygon_color_label_setting();" value="<?php echo $map_polygon_color_update;?>" style="background-color:<?php echo $map_polygon_color_update;?>;color:#fff;"/>
											<img onclick="ux_clr_Polygon_color_label_setting();" style="vertical-align: middle;margin-left: 5px;" src="<?php echo  plugins_url("/assets/images/color.png",dirname(dirname(__FILE__))); ?>"/>
											<div id="clr_Polygon_color"></div>
										</div>
									</div>
								</div>
								<div class="layout-span6 responsive">
									<div class="layout-control-group">
										<label class="layout-control-label-location layout-control-label"><?php _e("Polygon Opacity", map_bank); ?> :
											<span class="error">*</span>
											<span class="hovertip" data-original-title ="<?php _e("Here you can set opacity for your polygon.",map_bank) ;?>">
												<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
											</span>
										</label>
										<div class="layout-controls-location custom-layout-controls-map-location">
											<input type="text" id="ux_txt_polygon_opacity" class="layout-span12" onblur="polygon_onblur();" maxlength="4" onkeyup="this.value = minmax(this.value)" onkeypress ="return OnlyDigitsDots(event);" name="ux_txt_polygon_opacity" placeholder="<?php _e("Enter polygon opacity ", map_bank); ?>" value="<?php echo $map_polygon_opacity_update;?>"/>
										</div>
									</div>
								</div>
							</div>
							<?php 
								if(!isset($_REQUEST["pgon_id"]))
								{
								?>
									<div class="fluid-layout">
										<div class="layout-span6 responsive">
											<div class="layout-control-group">
												<label class="layout-control-label-location layout-control-label"><?php _e("Latitude", map_bank); ?> : 
													<span class="error">*</span>
													<span class="hovertip" data-original-title ="<?php _e("",map_bank) ;?>">
														<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
													</span>
												</label>
												<div class="layout-controls-location custom-layout-controls-map-location">
													<input type="text" id="polygon_lat" class="layout-span12" onkeypress ="return OnlyDigitsDots(event);" name="polygon_lat" value="" placeholder="<?php _e("Enter the Latitude", map_bank); ?>"/>
												</div>
											</div>
										</div>
										<div class="layout-span6 responsive">	
											<div class="layout-control-group">
												<label class="layout-control-label-location layout-control-label"><?php _e("Longitude", map_bank); ?> : 
													<span class="error">*</span>
													<span class="hovertip" data-original-title ="<?php _e("",map_bank) ;?>">
														<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
													</span>
												</label>
												<div class="layout-controls-location custom-layout-controls-map-location">
													<input type="text" id="polygon_lng" class="layout-span12" onkeypress ="return OnlyDigitsDots(event);" name="polygon_lng" value="" placeholder="<?php _e("Enter the Longitude", map_bank); ?>"/>
												</div>
											</div>
										</div>
									</div>
									<div class="fluid-layout">
										<input type="button" id="ux_btn_add_data" onclick="polygon_data();" name="ux_btn_add_data" class="btn btn-danger" value="<?php _e("Add Polygon Data", map_bank); ?>" style="float:right;display:block; margin-right: 5px;"/>
									</div>
								<?php 
								}
							?>
							<div class="fluid-layout">
								<div class="layout-span12 responsive">
									<div class="layout-control-group">
										<label class="layout-control-label-location layout-control-label"><?php _e("Polygon Data", map_bank); ?> : <span class="error">*</span>
										<span class="hovertip" data-original-title ="<?php _e("Polygon Data is the set of co-ordinates representing your polygon on the map.",map_bank) ;?>">
											<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
										</span>
										</label>
										<div class="layout-controls-location custom-layout-controls-map-location">
											<textarea  readonly="readonly" id="ux_txt_polygon_data" rows="4" name="ux_txt_polygon_data" class="layout-span12"><?php echo isset($map_polygon_data_update) ? $map_polygon_data_update : "" ;?></textarea>
										</div>
									</div>
								</div>
								<input type="hidden" id="ux_txt_latitude" class="layout-span12" name="ux_txt_latitude" value="<?php echo $map_location_latitude ; ?>"/>
								<input type="hidden" id="ux_txt_longitude" class="layout-span12" name="ux_txt_longitude" value="<?php echo $map_location_longitude ; ?>"/>
							</div>
							<div class="fluid-layout">
								<div style="max-height: 370px;">
									<?php 
									if(file_exists(MAP_BK_PLUGIN_DIR ."/views/themes.php"))
									{
										include_once MAP_BK_PLUGIN_DIR ."/views/themes.php";
									}
									?>
									<div id="map_canvas" style="width: 100%; height: 345px; border:4px solid #e0dede; margin-top:10px;"></div>
								</div>
								<div class="fluid-layout">
									<input type="button" onclick="proceed_to_back();" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" value="<?php _e("Back to Manage Map", map_bank); ?>">
									<?php	
										if(isset($_REQUEST["pgon_id"]))
										{
											?>
											<input type="submit" id="ux_btn_action" value="<?php _e("Update Polygon", map_bank); ?>" name="ux_btn_action" class="btn btn-danger" style="float:right;"/>
											<?php
										}
										else 
										{
											if($map_polygon_count < 1)
											{
												?>
												<input type="submit" id="ux_btn_action" value="<?php _e("Add Polygon", map_bank); ?>" name="ux_btn_action" class="btn btn-danger" style="float:right;"/>
												<?php
											}
										}
									?>
									<input type="button" id="ux_btn_clear_polygon" onclick="clearpolygon();" name="ux_btn_clear_polygon" class="btn btn-danger" value="<?php _e("Clear polygon", map_bank); ?>" style="float:right;margin-right: 5px;"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script type="text/javascript">
		
			var polygon_data_array = [];
			var geocoder;
			var map;
			
			jQuery(document).ready(function()
			{
				initialize();
				jQuery("#manage_map").addClass("nav-tab-active");
				jQuery("#step_2").addClass("current");
				jQuery("#step_3").addClass("current");
				jQuery("#step_4").addClass("current");
				jQuery(".hovertip").tooltip({placement: "right"});
			});
			
			jQuery("#frm_edit_polygon").validate
			({
				rules:
				{	
					ux_clr_font_color:
					{ 
						required: true
					},
					ux_txt_line_opacity:
					{ 
						required: true
					},
					ux_clr_Polygon_color:
					{
						required: true
					},
					ux_txt_polygon_opacity:
					{
						required: true
					},
					ux_txt_polygon_data:
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
					<?php
					if(isset($_REQUEST["pgon_id"]))
					{
						?>
						var polygon_id = "<?php echo intval($_REQUEST["pgon_id"])?>";
						jQuery.post(ajaxurl, jQuery("#frm_edit_polygon").serialize()+"&polygon_id="+polygon_id+"&param=update_polygon_db&action=add_map_library&_wpnonce=<?php echo $update_polygon;?>", function()
						{
							setTimeout(function () {
								jQuery(".loader_opacity").remove();
								jQuery(".opacity_overlay").remove();
								window.location.href = "admin.php?page=manage_map&map_id="+map_id;
							}, 2000);
						});
						<?php
					}
					else
					{
						?>
						jQuery.post(ajaxurl, jQuery("#frm_edit_polygon").serialize()  +"&map_id="+map_id+"&param=add_polygon_db&action=add_map_library&_wpnonce=<?php echo $add_new_polygon;?>", function()
						{
							setTimeout(function () {
								jQuery(".loader_opacity").remove();
								jQuery(".opacity_overlay").remove();
							}, 2000);
							window.location.href = "admin.php?page=gmb_edit_polygon&map_id="+map_id;
						});
						<?php
					}
					?>
				}
			});
			
			function minmax(value) 
			{
				if(parseInt(value) < 0 || isNaN(value)) 
					return 0; 
				else if(value > 1) 
					return 1; 
				else return value;
			}
			
			function overlay()
			{
				var overlay_opacity = jQuery("<div class=\"opacity_overlay\"></div>");
				jQuery("body").append(overlay_opacity);
				var overlay = jQuery("<div class=\"loader_opacity\"><div class=\"processing_overlay\"></div></div>");
				jQuery("body").append(overlay);
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
			
			function polygon_data()
			{
				var polygon_lat_data = jQuery("#polygon_lat").val();
				var polygon_lng_data = jQuery("#polygon_lng").val();
				
				if(polygon_lat_data == "")
				{
					jQuery("#polygon_lat").css("background-color","#FFCCCC");
					jQuery("#polygon_lat").css("border","1px solid red");
				}
				else if(polygon_lng_data == "")
				{
					jQuery("#polygon_lng").css("background-color","#FFCCCC");
					jQuery("#polygon_lng").css("border","1px solid red");
				}
				else
				{
					var latlng = new google.maps.LatLng(polygon_lat_data, polygon_lng_data);
					geocoder.geocode({'latLng': latlng}, function(results, status)
					{
						if (status == google.maps.GeocoderStatus.OK)
						{
							if (results[1])
							{
								var polygon_txt_area_data = jQuery("#ux_txt_polygon_data").val();
								var polygon_txt_area_data_array = jQuery("#ux_txt_polygon_data").val();
								polygon_txt_area_data += polygon_lat_data+","+ polygon_lng_data + "\n";
								polygon_data_array.push(polygon_lat_data+","+ polygon_lng_data);
								jQuery("#ux_txt_polygon_data").val(polygon_txt_area_data);
								jQuery("#polygon_lat").val("");
								jQuery("#polygon_lng").val("");
								initialize();
							}
							else 
							{
								alert("<?php _e( "Invalid Logitute/Latitude.", map_bank ); ?>");
								jQuery("#polygon_lat").val("");
								jQuery("#polygon_lng").val("");
							}
						}
						else 
						{
							alert('Geocoder failed due to: ' + status);
						}
					
					});
				}
			}
			
			function proceed_to_back()
			{
				overlay();
				setTimeout(function () {
					jQuery(".loader_opacity").remove();
					jQuery(".opacity_overlay").remove();
					window.location.href = "admin.php?page=manage_map";
				}, 2000);
			}
			
			function ux_clr_font_color_label_setting()
			{
				jQuery("#clr_font_color").farbtastic("#ux_clr_font_color").slideDown();
				jQuery("#ux_clr_font_color").focus();
			}
			
			function ux_clr_Polygon_color_label_setting ()
			{
				jQuery("#clr_Polygon_color").farbtastic("#ux_clr_Polygon_color").slideDown();
				jQuery("#ux_clr_Polygon_color").focus();
			}
			
			jQuery("#ux_clr_font_color").blur(function(){jQuery("#clr_font_color").slideUp()});
			jQuery("#ux_clr_Polygon_color").blur(function(){jQuery("#clr_Polygon_color").slideUp()});
			
			function polygon_onblur()
			{
				jQuery("#ux_txt_polygon_data").empty();
				initialize();
			}
			
			function error_message_close()
			{
				jQuery("#top-error").remove();
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