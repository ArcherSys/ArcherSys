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
		$create_map = wp_create_nonce("map_create");
		$themes_change = wp_create_nonce("map_themes");
		if(isset($_REQUEST["map_id"]))
		{
			if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php";
			}
		}
		$get_themes = $wpdb->get_results
		(
			"SELECT * FROM ". map_bank_marker_themes_table()." ORDER BY themes_value ASC"
		);
		$map_count = $wpdb->get_var
		(
			$wpdb->prepare
			(
				"SELECT count(id) FROM ".map_bank_create_new_map_table()." where map_type=%s",
				"map"
			)
		);
		?>
		<form id="frm_create_new_map" class="layout-form" style="max-width:1000px;">
			<div class="fluid-layout">
				<div class="layout-span12 responsive">
				<?php 
					if(file_exists(MAP_BK_PLUGIN_DIR ."/includes/headers.php"))
					{
						include_once MAP_BK_PLUGIN_DIR ."/includes/headers.php";
					}
					?>
					<div class="widget-layout">
						<div class="widget-layout-title">
							<h4><?php _e("Step 1 - Add New Map", map_bank); ?></h4>
						</div>
						<div class="widget-layout-body">
							<input type="submit" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger " style="float:right; margin-bottom:25px;" value="<?php _e(" Proceed to Next Step >> ", map_bank); ?>"/>
							<div class="separator-doubled" style="margin-top:40px;"></div> 
							<div class="fluid-layout">
								<div class="layout-span12 responsive">
									<div class="widget-layout">
										<div class="widget-layout-title">
											<h4><?php _e("General Settings", map_bank); ?></h4>
										</div>
										<div class="widget-layout-body">
											<div class="fluid-layout">
												<div class="layout-span12 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Map Title", map_bank); ?> : <span class="error">*</span>
															<span class="hovertip" data-original-title ="<?php _e("Map Title is the name of the map to show it uniquely.",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps">
															<input type="text" id="ux_txt_map_title" name="ux_txt_map_title" class="layout-span12" value="<?php echo isset($map_title) ?stripcslashes(htmlspecialchars_decode($map_title)): __("Untitled Map", map_bank);?>" placeholder="<?php _e("Enter Map Title", map_bank); ?>"/>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout">
												<div class="layout-span6 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Map Type", map_bank); ?> : <span class="error">*</span>
															<span class="hovertip" data-original-title="<?php _e(" A Map Type is an interface that defines the display and usage of map tiles and the translation of coordinate systems from screen coordinates to world coordinates (on the map)",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps">
															<select id="ux_ddl_map_type" class="layout-span12" name="ux_ddl_map_type" onchange="map_themes();">
																<option value="1"><?php _e("Road Map", map_bank); ?></option>
																<option value="2"><?php _e("Terrain", map_bank); ?></option>
																<option value="3"><?php _e("Hybrid", map_bank); ?></option>
																<option value="4"><?php _e("Satellite", map_bank); ?></option>
															</select>
														</div>
													</div>
												</div>
												<div class="layout-span6 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Map Language", map_bank); ?> : <span class="error">*</span>
															<span class="hovertip" data-original-title="">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
														</label>
														<div class="layout-controls custom-layout-controls-maps">
															<select id="ux_ddl_map_language" class="layout-span12" name="ux_ddl_map_language" onchange="map_themes();">
																<option value="af"><?php _e("Afrikaans", map_bank); ?></option>
																<option value="sq"><?php _e("Albanian", map_bank); ?></option>
																<option value="eu"><?php _e("Basque", map_bank); ?></option>
																<option value="be"><?php _e("Belarusian", map_bank); ?></option>
																<option value="bg"><?php _e("Bulgarian", map_bank); ?></option>
																<option value=ca><?php _e("Catalan", map_bank); ?></option>
																<option value="zh-cn"><?php _e("Chinese (Simplified)", map_bank); ?></option>
																<option value="zh-tw"><?php _e("Chinese (Traditional)", map_bank); ?></option>
																<option value="hr"><?php _e("Croatian", map_bank); ?></option>
																<option value="cs"><?php _e("Czech", map_bank); ?></option>
																<option value="da"><?php _e("Danish", map_bank); ?></option>
																<option value="nl"><?php _e("Dutch", map_bank); ?></option>
																<option value="nl-be"><?php _e("Dutch (Belgium)", map_bank); ?></option>
																<option value="nl-nl"><?php _e("Dutch (Netherlands)", map_bank); ?></option>
																<option value="en"><?php _e("English", map_bank); ?></option>
																<option value="en-au"><?php _e("English (Australia)", map_bank); ?></option>
																<option value="en-bz"><?php _e("English (Belize)", map_bank); ?></option>
																<option value="en-ca"><?php _e("English (Canada)", map_bank); ?></option>
																<option value="en-ie"><?php _e("English (Ireland)", map_bank); ?></option>
																<option value="en-jm"><?php _e("English (Jamaica)", map_bank); ?></option>
																<option value="en-gb"><?php _e("English (United Kingdom)", map_bank); ?></option>
																<option value="en-us"><?php _e("English (United States)", map_bank); ?></option>
																<option value="et"><?php _e("Estonian", map_bank); ?></option>
																<option value="fo"><?php _e("Faeroese", map_bank); ?></option>
																<option value="fi"><?php _e("Finnish", map_bank); ?></option>
																<option value="fr"><?php _e("French", map_bank); ?></option>
																<option value="gl"><?php _e("Galician", map_bank); ?></option>
																<option value="gd"><?php _e("Gaelic", map_bank); ?></option>
																<option value="de"><?php _e("German", map_bank); ?></option>
																<option value="el"><?php _e("Greek", map_bank); ?></option>
																<option value="haw"><?php _e("Hawaiian", map_bank); ?></option>
																<option value="hu"><?php _e("Hungarian", map_bank); ?></option>
																<option value="is"><?php _e("Icelandic", map_bank); ?></option>
																<option value="in"><?php _e("Indonesian", map_bank); ?></option>
																<option value="ga"><?php _e("Irish", map_bank); ?></option>
																<option value="it"><?php _e("Italian", map_bank); ?></option>
																<option value="ja"><?php _e("Japanese", map_bank); ?></option>
																<option value="ko"><?php _e("Korean", map_bank); ?></option>
																<option value="pl"><?php _e("Polish", map_bank); ?></option>
																<option value="ro"><?php _e("Romanian", map_bank); ?></option>
																<option value="ru"><?php _e("Russian", map_bank); ?></option>
																<option value="sr"><?php _e("Serbian", map_bank); ?></option>
																<option value="sk"><?php _e("Slovak", map_bank); ?></option>
																<option value="sl"><?php _e("Slovenian", map_bank); ?></option>
																<option value="es"><?php _e("Spanish", map_bank); ?></option>
																<option value="sv"><?php _e("Swedish", map_bank); ?></option>
																<option value="tr"><?php _e("Turkish", map_bank); ?></option>
																<option value="uk"><?php _e("Ukranian", map_bank); ?></option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="fluid-layout">
												<div class="layout-span6 responsive">
													<div class="layout-control-group">
														<label class="layout-control-label custom-label-width-maps"><?php _e("Map Themes", map_bank); ?> :
															<span class="hovertip" data-original-title ="<?php _e("Themes are  different color schemes for Google Maps",map_bank) ;?>">
																<img class="tooltip_img" src="<?php echo MAP_BK_TOOLTIP?>"/>
															</span>
															
														</label>
														<div class="layout-controls custom-layout-controls-maps">
															<select id="ux_ddl_map_themes_select" name="ux_ddl_map_themes_select" class="layout-span12" onchange="map_themes();">
																<?php
																foreach ($get_themes as $val)
																{
																	if($val->themes_key != "default1")
																	{
																		?>
																		<option disabled="disabled" value="<?php echo $val->themes_key;?>">
																			<?php echo $val->themes_value;?>
																		</option>
																		<?php
																	}
																	else
																	{
																		?>
																		<option value="<?php echo $val->themes_key;?>">
																			<?php echo $val->themes_value;?>
																		</option>
																		<?php
																	}
																}
																?>
															</select><i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
														</div>
													</div>
												</div>
											</div>
											<div id="map_themes_data">
												<div id="map_canvas" style="width: 100%; height: 345px; border:4px solid #e0dede; margin-top:10px;"></div>
											</div>
										</div>
									</div>
									<div class="separator-doubled"></div> 
									<input type="submit" id="ux_btn_action" name="ux_btn_action" class="btn btn-danger " style="float:right;margin-top:10px;" value="<?php _e(" Proceed to Next Step >> ", map_bank); ?>"/>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script type="text/javascript">
			var map;
			var geocoder;
			
			jQuery(document).ready(function()
			{
				jQuery(".hovertip").tooltip({placement: "right"});
				jQuery("#step_1").addClass("current");
				<?php 
				if(isset($_REQUEST["map_themes"]))
				{
					$map_themes = $_REQUEST["map_themes"];
					$map_type_data = $_REQUEST["map_type"];
					$map_title = $_REQUEST["map_title"];
					$map_language = $_REQUEST["map_language"];
					?>
					jQuery("#ux_txt_map_title").val("<?php echo $map_title ;?>");
					jQuery("#ux_ddl_map_type").val("<?php echo $map_type_data;?>");
					jQuery("#ux_ddl_map_themes_select").val("<?php echo $map_themes ;?>");
					jQuery("#ux_ddl_map_language").val("<?php echo $map_language ;?>");
					<?php 
				}
				?>
				jQuery("#ux_ddl_map_type").val("<?php echo  isset($map_type_data) ? $map_type_data : "1";?>");
				jQuery("#ux_ddl_map_language").val("<?php echo  isset($map_language) ? $map_language : "en";?>");
				jQuery("#ux_ddl_map_themes_select").val("default1");
				initialize(); 
			});
			
			jQuery("#frm_create_new_map").validate
			({	
				rules:
				{	
					ux_txt_map_title:
					{ 
						required: true
					},
					ux_ddl_map_type:
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
					var overlay_opacity = jQuery("<div class=\"opacity_overlay\"></div>");
					jQuery("body").append(overlay_opacity);
					var overlay = jQuery("<div class=\"loader_opacity\"><div class=\"processing_overlay\"></div></div>");
					jQuery("body").append(overlay);
					var themes = jQuery("#ux_ddl_map_themes_select").val();
					var map_type = jQuery("#ux_ddl_map_type").val();
					var map_language = jQuery("#ux_ddl_map_language").val();
					var title= encodeURIComponent(jQuery("#ux_txt_map_title").val());	
					var map_id = "<?php echo isset($map_id) ? $map_id: "0" ; ?>";
					
					jQuery.post(ajaxurl,"map_id="+map_id+"&title="+title+"&map_type="+map_type+"&themes="+themes+"&map_language="+map_language+"&param=create_new_map&action=add_map_library&_wpnonce=<?php echo $create_map;?>", function(data)
					{
						var id = jQuery.trim(data);
						if(id == 0)
						{
							var test = confirm("<?php _e( "Only 2 Maps can created in Lite Edition.", map_bank ); ?>");
							if(test == true || test == false)
							{
								setTimeout(function () 
								{
									jQuery(".loader_opacity").remove();
									jQuery(".opacity_overlay").remove();
									window.location.href = "admin.php?page=gmb_dashboard";
								}, 2000);
							}
						}
						else
						{
							setTimeout(function () 
							{
								jQuery(".loader_opacity").remove();
								jQuery(".opacity_overlay").remove();
								window.location.href = "admin.php?page=gmb_add_location&map_id="+id;
							}, 2000);
						}
					});
				}
			});
			
			function map_themes()
			{
				<?php 
				if(isset($_REQUEST["map_id"]))
				{
					?>
					var map_id = "<?php echo $map_id; ?>";
					<?php 
				}
				?>
				var themes = jQuery("#ux_ddl_map_themes_select").val();
				var map_type = jQuery("#ux_ddl_map_type").val();
				var map_title = jQuery("#ux_txt_map_title").val();
				var map_language = jQuery("#ux_ddl_map_language").val();
				<?php
				if(isset($_REQUEST["map_id"]))
				{
					?>
					window.location.href = "admin.php?page=gmb_create_new_map&map_themes="+themes+"&map_type="+map_type+"&map_title="+map_title+"&map_language="+map_language+"&map_id="+map_id;
					<?php 
				}
				else
				{
					?>
					window.location.href = "admin.php?page=gmb_create_new_map&map_themes="+themes+"&map_type="+map_type+"&map_language="+map_language+"&map_title="+map_title;
					<?php 
				}
				?>
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