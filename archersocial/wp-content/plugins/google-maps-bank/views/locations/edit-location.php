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
		$location_add = wp_create_nonce("add_new_location");
		if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php"))
		{
			include_once MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php";
		}
		?>
		<form id="frm_edit_location" class="layout-form" style="max-width:1000px;">
			<div class="fluid-layout">
				<div class="layout-span12">
					<div class="widget-layout">
						<div class="widget-layout-title">
							<h4><?php _e("Edit Location", map_bank); ?></h4>
						</div>
						<div class="widget-layout-body">
							<div class="fluid-layout">
								<input type="button" onclick="proceed_to_back();" id="ux_btn_action" name="ux_btn_action"  class="btn btn-danger" value="<?php _e("Back to Manage Maps", map_bank); ?>"/>
								<input type="submit" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" style="float:right;" value="<?php _e("Update Location", map_bank); ?>" />
							</div>
							<div class="separator-doubled" style="margin-bottom: 20px;"></div> 
							<div class="fluid-layout">
								<div class="layout-span6 responsive">
									<div class="layout-control-group">
										<label class="layout-control-label-location layout-control-label"><?php _e("Formatted Address", map_bank); ?> :
											<span class="error">*</span>
											<span class="hovertip" data-original-title ="<?php _e("Formatted Address are used for points of interest and Geo codes plus a slight variant is used for streets.",map_bank) ;?>">
												<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
											</span>
										</label>
										<div class="layout-controls-location custom-layout-controls-map-location">
											<input type="text" id="geocomplete" name="geocomplete" class="layout-span12" value="<?php echo stripcslashes(htmlspecialchars_decode($map_location_title));?>" placeholder="<?php _e("Enter the Location Title here", map_bank); ?>"/>
										</div>
									</div>
								</div>
								<div class="layout-span6 responsive">
									<div class="layout-control-group">
										<label class="layout-control-label-location layout-control-label"><?php _e("City / Country", map_bank); ?> : 
										<span class="error">*</span>
										<span class="hovertip" data-original-title ="<?php _e("When you type and select the Formatted Address then City/Country would be set automatically.",map_bank) ;?>">
											<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
										</span>
										</label>
										<div class="layout-controls-location custom-layout-controls-map-location">
											<input type="text" readonly="readonly" class="layout-span12" id="country" name="country" value="<?php echo stripcslashes(htmlspecialchars_decode($map_location_country)) ;?>" placeholder="<?php _e("Enter here the City / Country", map_bank); ?>"/>
										</div>
									</div>
								</div>
							</div>
							<div class="fluid-layout">
								<div class="layout-span6 responsive">
									<div class="layout-control-group">
										<label class="layout-control-label-location layout-control-label"><?php _e("Latitude", map_bank); ?> : 
											<span class="error">*</span>
											<span class="hovertip" data-original-title ="<?php _e("Here you can enter Latitude then Formatted Address,City/Country and Longitude would be set automatically.",map_bank) ;?>">
												<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
											</span>
										</label>
										<div class="layout-controls-location custom-layout-controls-map-location">
											<input type="text" id="lat" class="layout-span12" onblur="codeLatLng();" name="lat" value="<?php echo stripcslashes(htmlspecialchars_decode($map_location_latitude));?>" placeholder="<?php _e("Enter the Latitude", map_bank); ?>"/>
										</div>
									</div>
								</div>
								<div class="layout-span6 responsive">	
									<div class="layout-control-group">
										<label class="layout-control-label-location layout-control-label"><?php _e("Longitude", map_bank); ?> : 
											<span class="error">*</span>
											<span class="hovertip" data-original-title ="<?php _e("Here you can enter Longitude then Formatted Address,City/Country and Latitude would be set automatically.",map_bank) ;?>">
												<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
											</span>
										</label>
										<div class="layout-controls-location custom-layout-controls-map-location">
											<input type="text" id="lng" class="layout-span12" onblur="codeLatLng();" name="lng" value="<?php echo stripcslashes(htmlspecialchars_decode($map_location_longitude)) ;?>" placeholder="<?php _e("Enter the Longitude", map_bank); ?>"/>
										</div>
									</div>
								</div>
							</div>
							<div class="fluid-layout">
								<?php 
									if(file_exists(MAP_BK_PLUGIN_DIR ."/views/themes.php"))
									{
										include_once MAP_BK_PLUGIN_DIR ."/views/themes.php";
									}
								?>
								<div id="map_themes_data">
									<div id="map_canvas" style="width: 100%; height: 345px; border:4px solid #e0dede; margin-top:10px;"></div>
								</div>
								<div class="fluid-layout">
									<input type="button" onclick="proceed_to_back();" id="ux_btn_action" name="ux_btn_action" style="margin-top: 10px;" class="btn btn-danger" value="<?php _e("Back to Manage Maps", map_bank); ?>"/>
									<input type="submit" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger" style="float:right;margin-top: 10px;" value="<?php _e("Update Location", map_bank); ?>" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script type="text/javascript">
			jQuery(document).ready(function()
			{
				initialize();
				jQuery(".dataTables_length").attr("style","float:right");
				jQuery("#manage_map").addClass("nav-tab-active");
				jQuery(".hovertip").tooltip({placement: "right"});
			});
			
			jQuery("#frm_edit_location").validate
			({
				rules:
				{	
					geocomplete:
					{ 
						required: true
					},
					country:
					{ 
						required: true
					},
					lat:
					{ 
						required: true
					},
					lng:
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
					var map_id = "<?php echo $map_id;?>";
					var geocomplete= encodeURIComponent(jQuery("#geocomplete").val());
					var country = jQuery("#country").val();
					var longitude = jQuery("#lng").val();
					var latitude = jQuery("#lat").val();
					overlay();
					jQuery.post(ajaxurl, "map_id="+map_id+"&geocomplete="+geocomplete+"&country="+country+"&longitude="+longitude+"&latitude="+latitude+"&param=add_location_db&action=add_map_library&_wpnonce=<?php echo $location_add;?>", function()
					{
						setTimeout(function () {
							jQuery(".loader_opacity").remove();
							jQuery(".opacity_overlay").remove();
							window.location.href = "admin.php?page=manage_map&map_id="+map_id;
						}, 2000);
					});
				}
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
					window.location.href = "admin.php?page=manage_map";
				}, 2000);
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