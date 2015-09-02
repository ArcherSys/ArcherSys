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
		$marker_one_delete = wp_create_nonce("marker_delete");
		$bulk_marker_delete = wp_create_nonce("marker_delete_bulk");
		$polygon_one_delete = wp_create_nonce("polygon_delete");
		$bulk_polygon_delete = wp_create_nonce("polygon_delete_bulk");
		$polyline_one_delete = wp_create_nonce("polyline_delete");
		$bulk_polyline_delete = wp_create_nonce("polyline_delete_bulk");
		
		$map_data_details = $wpdb->get_results
		(
			$wpdb->prepare
			(
				"SELECT ".map_bank_meta_table().".map_meta_value,".map_bank_create_new_map_table().".id FROM " . map_bank_meta_table(). " INNER JOIN ".map_bank_create_new_map_table().
				" ON ".map_bank_create_new_map_table().".id = ".map_bank_meta_table().".map_id WHERE "
				 . map_bank_create_new_map_table() . ".map_type = %s AND ".map_bank_meta_table().".map_meta_key = %s ORDER BY " .map_bank_create_new_map_table().".id DESC " ,
				"map",
				"map_title"
			)
		);
		if(isset($_REQUEST["map_id"]))
		{
			if(file_exists(MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php"))
			{
				include_once MAP_BK_PLUGIN_DIR ."/lib/get-map-settings.php";
			}
		
			$map_marker_count = $wpdb->get_var
			(
				$wpdb->prepare
				(
					"SELECT count(id) FROM ".map_bank_create_new_map_table()." where  parent_id = %d AND map_type = %s ",
					$map_id,
					"marker"
				)
			);
			$map_polygon_count = $wpdb->get_var
			(
				$wpdb->prepare
				(
					"SELECT count(id) FROM ".map_bank_create_new_map_table()." WHERE parent_id = %d AND map_type = %s ",
					$map_id,
					"polygon"
				)
			);
			$map_polylines_count = $wpdb->get_var
			(
				$wpdb->prepare
				(
					"SELECT count(id) FROM ".map_bank_create_new_map_table()." WHERE parent_id = %d AND map_type = %s ",
					$map_id,
					"polyline"
				)
			);
		}
		?>
		<form id="frm_manage_map" name="frm_manage_map" class="layout-form" style="width:1000px;">
			<div class="fluid-layout">
				<div class="layout-span12 responsive">
					<div class="widget-layout">
						<div class="widget-layout-title">
							<h4><?php _e("Manage Map", map_bank); ?></h4>
						</div>
						<div class="widget-layout-body">
							<div class="fluid-layout">
								<div class="layout-span12">
									<div class="layout-control-group" style="margin-left: 8px;">
										<label class="layout-control-label custom-label-width-maps"><?php _e("Select Map", map_bank); ?> :
											<span class="error">*</span>
										</label>
										<div class="layout-controls custom-layout-controls-maps">
											<select id="ux_ddl_location" name="ux_ddl_location" class="layout-span12" onchange="bind_map_details();">
												<option value="0"><?php _e("Select Map", map_bank); ?></option>
												<?php
												foreach($map_data_details as $details )
												{
													?>
													<option value="<?php echo $details->id; ?>"><?php echo stripcslashes(htmlspecialchars_decode($details->map_meta_value)); ?></option>
													<?php
												}
												?>
											</select>
										</div>
									</div>
									<div class="framework_tabs">
										<ul class="framework_tab-links">
											<li class="active"><a href="#manage_location"><?php _e("Manage Location", map_bank); ?></a></li>
											<li><a href="#manage_marker"><?php _e("Manage Markers", map_bank); ?></a></li>
											<li><a href="#manage_polygon"><?php _e("Manage Polygons", map_bank); ?></a></li>
											<li><a href="#manage_polyline"><?php _e("Manage Polylines", map_bank); ?></a></li>
											<li><a href="#manage_layers"><?php _e("Manage Layers", map_bank); ?></a></li>
											<li><a href="#manage_adv_settings"><?php _e("Manage Advanced Settings", map_bank); ?></a></li>
										</ul>
										<div class="framework_tab-content">
											<div id="manage_location" class="framework_tab active">
												<div class="widget-layout">
													<div class="widget-layout-title">
														<h4><?php _e("Manage Location", map_bank); ?></h4>
													</div>
													<div class="widget-layout-body">
														<div class="fluid-layout">
															<div class="layout-span12">
																<table class="widefat " id="data-table-manage_location" style="background-color:#fff !important;">
																	<thead>
																		<tr>
																			<th style="width: 19%;"><?php _e("Country", map_bank); ?></th>
																			<th style="width: 25%;"><?php _e("Address", map_bank); ?></th>
																			<th style="width: 18%;"><?php _e("Latitude", map_bank); ?></th>
																			<th style="width: 20%;"><?php _e("Longitude", map_bank); ?></th>
																			<th style="width: 18%;"><?php _e("Creation Date", map_bank); ?></th>
																		</tr>
																	</thead>
																	<tbody>
																		<?php 
																		if(isset($_REQUEST["map_id"]))
																		{
																			if(isset($manage_location_data["location_title"])!= "")
																			{
																				?>
																				<tr class="alternate">
																					<td>
																						<?php echo isset($manage_location_data["country"]) ? ($manage_location_data["country"]) : "" ; ?>
																						<span class="check-bottom">
																							<a href="admin.php?page=gmb_edit_location&map_id=<?php echo $map_id;?>" style="color:#0d1ff6;"><?php _e("Edit", map_bank); ?></a>
																						</span>
																					</td>
																					<td>
																					<?php echo isset($manage_location_data["location_title"]) ? stripcslashes(htmlspecialchars_decode($manage_location_data["location_title"])) : "";?>
																					</td>
																					<td>
																					<?php echo isset($manage_location_data["latitude"]) ? ($manage_location_data["latitude"]) : "";?>
																					</td>
																					<td>
																						<?php echo isset($manage_location_data["longitude"]) ? ($manage_location_data["longitude"]) : "";?>
																					</td>
																					<td>
																						<?php echo isset($manage_location_data["creation_date"]) ? date("d M, Y", strtotime($manage_location_data["creation_date"])) : "";?>
																					</td>
																				</tr>
																			<?php 
																			}
																			else 
																			{
																				?>
																				<tr class="odd">
																					<td valign="top" colspan="5" class="dataTables_empty">No data available in table</td>
																				</tr>
																				<?php
																			}
																		}
																		else 
																		{
																			?>
																			<tr class="odd">
																				<td valign="top" colspan="5" class="dataTables_empty">No data available in table</td>
																			</tr>
																			<?php 
																		}
																		?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="manage_marker" class="framework_tab">
												<div class="widget-layout" style="margin-bottom:0px;">
													<div class="widget-layout-title">
														<h4><?php _e("Manage Markers", map_bank); ?></h4>
													</div>
													<div class="widget-layout-body">
														<div class="layout-control-group">
															<select id="ux_ddl_bulk_marker_delete_action" name="ux_ddl_bulk_marker_delete_action" class="layout-span2">
																<option value="0"><?php _e("Bulk Action", map_bank); ?></option>
																<option value="1"><?php _e("Delete", map_bank); ?></option>
															</select>
															<input type="button" id="ux_btn_action" onclick="bulk_delete_marker();" name="ux_btn_action" class="btn btn-danger" value="<?php _e("Apply", map_bank); ?>">
															<?php 
															if(isset($_REQUEST["map_id"]) && ($_REQUEST["map_id"])!="0")
															{
																if($map_marker_count < 5)
																{
																	?>
																	<a href="admin.php?page=gmb_edit_marker&map_id=<?php echo $map_id;?>" class="btn btn-danger"><?php _e("Add New Marker", map_bank); ?></a>
																	<?php 
																}
															}
															?>
														</div>
														<div class="separator-doubled"></div>
														<table class="widefat" id="data-table-add_marker" style="background-color:#fff !important">
															<thead>
																<tr>
																	<th style="width: 10%;"><input style="margin-left: 0px;" type="checkbox" id="chk_selectall_markers"></th>
																	<th style="width: 25%;"><?php _e("Marker Name", map_bank); ?></th>
																	<th style="width: 25%;"><?php _e("Animaton", map_bank); ?></th>
																	<th style="width: 25%;"><?php _e("Creation Date", map_bank); ?></th>
																	<th style="width: 15%;"><?php _e("Marker", map_bank); ?></th>
																</tr>
															</thead>
															<tbody>
															<?php 
																if(isset($_REQUEST["map_id"]) && ($_REQUEST["map_id"])!="0")
																{
																	$flag = 0;
																	foreach ($manage_marker_data as $marker_key)
																	{
																		$alternate_marker = $flag % 2 == 0 ? "alternate" : "";
																		?>
																		<tr class="<?php echo $alternate_marker;?>">
																			<td>
																				<input type="checkbox" value="<?php echo $marker_key["id"]; ?>" id="ux_chk_manage_marker" name="ux_chk_manage_marker" >
																			</td>
																			<td>
																				<?php echo stripcslashes(htmlspecialchars_decode($marker_key["marker_name"])); ?>
																				<span class="check-bottom">
																					<a href="admin.php?page=gmb_edit_marker&map_id=<?php echo $map_id;?>&mid=<?php echo $marker_key["id"]; ?>" style="color:#0d1ff6;"><?php _e("Edit", map_bank); ?></a> | 
																					<a href="#" style="color:#0d1ff6;" onclick="delete_single_marker(<?php echo $marker_key["id"];?>);"><?php _e("Delete", map_bank); ?></a>
																				</span>
																			</td>
																			<td>
																				<?php echo $marker_key["animation"] == "1" ? "BOUNCE" : "DROP"; ?>
																			</td>
																			<td>
																				<?php echo date("d M, Y ", strtotime($marker_key["creation_date"])); ?>
																			</td>
																			<td>
																				<img src="<?php echo $marker_key["map_marker"]; ?>" />
																			</td>
																		</tr>
																		<?php 
																		$flag++;
																	}
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div id="manage_polygon" class="framework_tab">
												<div class="widget-layout">
													<div class="widget-layout-title">
														<h4><?php _e("Manage Polygons", map_bank); ?></h4>
													</div>
													<div class="widget-layout-body">
														<div class="layout-control-group">
															<select id="ux_ddl_bulk_polygon_delete_action" name="ux_ddl_bulk_polygon_delete_action" class="layout-span2">
																<option value="0"><?php _e("Bulk Action", map_bank); ?></option>
																<option value="1"><?php _e("Delete", map_bank); ?></option>
															</select>
															<input type="button" id="ux_btn_action" name="ux_btn_action" onclick="bulk_delete_polygon();" class="btn btn-danger" value="<?php _e("Apply", map_bank); ?>">
															<?php 
															if(isset($_REQUEST["map_id"]) && ($_REQUEST["map_id"])!="0")
															{
																if($map_polygon_count < 1)
																{
																	?>
																	<a href="admin.php?page=gmb_edit_polygon&map_id=<?php echo $map_id;?>" class="btn btn-danger"><?php _e("Add Polygons", map_bank); ?></a>
																	<?php 
																}
															}
															?>
														</div>
														<div class="separator-doubled"></div>
														<table class="widefat " id="data-table-manage-polygons" style="background-color:#fff !important">
															<thead>
																<tr>
																	<th style="width: 10%;"><input style="margin-left: 0px;" type="checkbox" id="selectall_polygons" name="selectall_polygons"></th>
																	<th style="width: 20%;"><?php _e("Polygon Id", map_bank); ?></th>
																	<th style="width: 40%;"><?php _e("Location", map_bank); ?></th>
																	<th style="width: 15%;"><?php _e("Polygon Data", map_bank); ?></th>
																	<th style="width: 15%;"><?php _e("Creation Date", map_bank); ?></th>
																</tr>
															</thead>
															<tbody>
																<?php 
																if(isset($_REQUEST["map_id"]) && ($_REQUEST["map_id"])!="0")
																{
																	$flag = 0;
																	foreach ($manage_polygon_data as $polygon_key)
																	{
																		$alternate_polygon = $flag % 2 == 0 ? "alternate" : "";
																		?>
																		<tr class="<?php echo $alternate_polygon;?>">
																			<td>
																				<input type="checkbox" id="ux_chk_manage_polygon" name="ux_chk_manage_polygon" value="<?php echo $polygon_key["id"];?>">
																			</td>
																			<td>
																				<?php echo $polygon_key["id"]; ?>
																				<span class="check-bottom">
																					<a href="admin.php?page=gmb_edit_polygon&map_id=<?php echo $map_id;?>&pgon_id=<?php echo $polygon_key["id"]; ?>" style="color:#0d1ff6;"><?php _e("Edit", map_bank); ?></a> | 
																					<a href="#" style="color:#0d1ff6;" onclick="delete_single_polygon(<?php echo $polygon_key["id"];?>);"><?php _e("Delete", map_bank); ?></a>
																				</span>
																			</td>
																			<td>
																				<?php echo stripcslashes(htmlspecialchars_decode($polygon_key["polygon_location"])); ?>
																			</td>
																			<td>
																				<?php 
																				$polygon_data =	explode("\n", $polygon_key["polygon_data"]);
																				for($flag1 = 0;$flag1 < count($polygon_data)-1;$flag1++)
																				{
																					echo "[ ".$polygon_data[$flag1]." ]<br>";
																				}
																				?>
																			</td>
																			<td>
																				<?php echo date("d M, Y", strtotime($polygon_key["creation_date"])); ?>
																			</td>
																		</tr>
																	<?php
																	$flag++;
																	}
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div id="manage_polyline" class="framework_tab">
												<div class="widget-layout">
													<div class="widget-layout-title">
														<h4><?php _e("Manage Polylines", map_bank); ?></h4>
													</div>
													<div class="widget-layout-body">
														<div class="layout-control-group">
															<select id="ux_ddl_bulk_polyline_delete_action" name="ux_ddl_bulk_polyline_delete_action" class="layout-span2">
																<option value="0"><?php _e("Bulk Action", map_bank); ?></option>
																<option value="1"><?php _e("Delete", map_bank); ?></option>
															</select>
															<input type="button" id="ux_btn_action" onclick="bulk_delete_polyline();" name="ux_btn_action" class="btn btn-danger" value="<?php _e("Apply", map_bank); ?>">
															<?php 
															if(isset($_REQUEST["map_id"]) && ($_REQUEST["map_id"])!="0")
															{
																if($map_polylines_count < 1)
																{
																	?>
																	<a href="admin.php?page=gmb_edit_polyline&map_id=<?php echo $map_id;?>" class="btn btn-danger"><?php _e("Add Polylines", map_bank); ?></a>
																	<?php
																}
															}
															?>
														</div>
														<div class="separator-doubled"></div>
														<table class="widefat" id="data-table-manage-polyline" style="background-color:#fff !important">
															<thead>
																<tr>
																	<th style="width: 10%;"><input style="margin-left: 0px;" type="checkbox" id="selectall_polylines" name="selectall_polylines"></th>
																	<th style="width: 20%;"><?php _e("Polyline Id", map_bank); ?></th>
																	<th style="width: 40%;"><?php _e("Location", map_bank); ?></th>
																	<th style="width: 15%;"><?php _e("Polyline Data", map_bank); ?></th>
																	<th style="width: 15%;"><?php _e("Creation Date", map_bank); ?></th>
																</tr>
															</thead >
															<tbody>
																<?php 
																if(isset($_REQUEST["map_id"]) && ($_REQUEST["map_id"])!="0")
																{
																	$flag = 0;
																	foreach ($manage_polyline_data as $polyline_key)
																	{
																		$alternate_polyline = $flag % 2 == 0 ? "alternate" : "";
																		?>
																		<tr class="<?php echo $alternate_polyline;?>">
																			<td>
																				<input type="checkbox" value="<?php echo $polyline_key["id"]; ?>" id="ux_chk_manage_polyline" name="ux_chk_manage_polyline" >
																			</td>
																			<td>
																				<?php echo $polyline_key["id"]; ?>
																				<span class="check-bottom">
																					<a href="admin.php?page=gmb_edit_polyline&map_id=<?php echo $map_id;?>&pline_id=<?php echo $polyline_key["id"]; ?>" style="color:#0d1ff6;"><?php _e("Edit", map_bank); ?></a> | 
																					<a href="#" style="color:#0d1ff6;" onclick="delete_single_polyline(<?php echo $polyline_key["id"];?>);"><?php _e("Delete", map_bank); ?></a>
																				</span>
																			</td>
																			<td>
																				<?php echo stripcslashes(htmlspecialchars_decode($polyline_key["polyline_location"])); ?>
																			</td>
																			<td>
																				<?php 
																				$polyline_data = explode("\n", $polyline_key["polyline_data"]);
																				for($flag1 = 0;$flag1 < count($polyline_data)-1;$flag1++)
																				{
																					echo "[ ".$polyline_data[$flag1]." ]<br>";
																				}
																				?>
																			</td>
																			<td>
																				<?php echo date("d M, Y", strtotime($polyline_key["creation_date"])); ?>
																			</td>
																		</tr>
																		<?php 
																		$flag++;
																	}
																}
																?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div id="manage_layers" class="framework_tab">
												<div class="widget-layout">
													<div class="widget-layout-title">
														<h4><?php _e("Manage Layers", map_bank); ?></h4>
													</div>
													<div class="widget-layout-body">
														<div class="layout-control-group">
														<?php 
															if(isset($_REQUEST["map_id"]) && ($_REQUEST["map_id"])!="0")
															{
															?>
															<table class="widefat" id="data-table-manage-layers" style="background-color:#fff !important">
																<tbody>
																	<?php 
																	$flag = 0;
																	$alternate_layers = $flag % 2 == 0 ? "alternate" : "";
																	?>
																	<tr class="<?php echo $alternate_layers;?>">
																		<td>
																			<label class="layout-control-label custom-label-width-maps"><b><?php _e("KML Layer", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage">
																				<?php echo $map_kml_layer_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
																			</div>
																			<?php 
																				if(isset($map_kml_layer_update) && $map_kml_layer_update==1)
																				{
																			?>
																			<label class="layout-control-label custom-label-width-maps"><b><?php _e("KML Link", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage">
																			<?php echo $map_kml_layer_link_update;
																				}
																			?>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="layout-control-label custom-label-width-maps"><b><?php _e("Weather Layer", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage">
																				<?php echo $map_weather_layer_update  == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editionss)", map_bank); ?></i>
																			</div>
																			<?php 
																			if(isset($map_weather_layer_update) && $map_weather_layer_update==1)
																			{
																			?>
																				<label class="layout-control-label custom-label-width-maps"><b><?php _e("Temperature Unit", map_bank); ?></b>:</label>
																				<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_temprature_unit_update == 1 ? __("Fahrenheit", map_bank) : __("Celsius", map_bank);?></div>
																				<label class="layout-control-label custom-label-width-maps"><b><?php _e("Wind Speed Unit", map_bank); ?></b>:</label>
																				<div class="layout-controls custom-layout-controls-maps manage">
																				<?php $wind_speed_unit = isset($map_wind_speed_unit_update) ? $map_wind_speed_unit_update : "";
																				switch($wind_speed_unit)
																					{
																						case "1":
																							?>
																							mph
																							<?php
																						break;
																						case "2":
																							?>
																							km/h
																							<?php
																						break;
																						default:
																							?>
																							m/s
																							<?php
																						break;
																					}
																					?>
																				</div>
																				<?php 
																			}
																			?>
																		</td>
																	</tr>
																	<tr class="<?php echo $alternate_layers;?>">
																		<td>
																			<label class="layout-control-label custom-label-width-maps"><b><?php _e("Fusion Table Layer", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage">
																				<?php echo $map_fussion_table_layer_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i>
																			</div>
																			<?php 
																			if(isset($map_fussion_table_layer_update) && $map_fussion_table_layer_update==1)
																			{
																			?>
																				<label class="layout-control-label custom-label-width-maps"><b><?php _e("Select", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage">
																				<?php echo $map_fussion_layer_key_update;?>
																				</div>
																				<label class="layout-control-label custom-label-width-maps"><b><?php _e("From", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage">
																				<?php echo $map_fussion_layer_table_name_update;?>
																				</div>
																				<?php
																			}
																			?>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="layout-control-label custom-label-width-maps"><b><?php _e("Traffic Layer", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_traffic_layer_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></div>
																		</td>
																	</tr>
																	<tr class="<?php echo $alternate_layers;?>">
																		<td>
																			<label class="layout-control-label custom-label-width-maps"><b><?php _e("Transit Layer", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_transit_layer_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="layout-control-label custom-label-width-maps"><b><?php _e("Bycycling Layer", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_bicycling_layer_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></div>
																		</td>
																	</tr>
																	<tr class="<?php echo $alternate_layers;?>">
																		<td>
																			<label class="layout-control-label custom-label-width-maps"><b><?php _e("Panoramio Layer", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_panoramio_layer_update  == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="layout-control-label custom-label-width-maps"><b><?php _e("Map Engine Layer", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_engine_layer_update  == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></div>
																			<?php 
																			if(isset($map_engine_layer_update) && $map_engine_layer_update==1)
																			{
																			?>
																			<label class="layout-control-label custom-label-width-maps"><b><?php _e("Layer Id", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_layer_id_update;?></div>
																				<?php 
																			}
																			?>
																		</td>
																	</tr>
																	<?php
																	$flag++;
																	?>
																</tbody>
															</table>
															<?php 
															}
															?>
														</div>
													</div>
												</div>
											</div>
											<div id="manage_adv_settings" class="framework_tab">
												<div class="widget-layout">
													<div class="widget-layout-title">
														<h4><?php _e("Manage Advanced Settings", map_bank); ?></h4>
													</div>
													<div class="widget-layout-body">
														<div class="layout-control-group">
														<?php 
															if(isset($_REQUEST["map_id"]) && ($_REQUEST["map_id"])!="0")
															{
															?>
															<a href="admin.php?page=gmb_edit_adv_settings&map_id=<?php echo $map_id;?>" class="btn btn-danger" style="float:right;margin-bottom:10px;"><?php _e("Edit Advanced Settings", map_bank); ?></a>
															<table class="widefat" id="data-table-manage-layers" style="background-color:#fff !important">
																<tbody>
																	<?php 
																	$flag = 0;
																	$alternate_layers = $flag % 2 == 0 ? "alternate" : "";
																	?>
																	<tr class="<?php echo $alternate_layers;?>">
																		<td>
																			<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Center by Nearest Location", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_nearest_location_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?></div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Scale Control", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_scale_control_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> </div>
																		</td>
																	</tr>
																	<tr class="<?php echo $alternate_layers;?>">
																		<td>
																			<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Map Draggable", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_map_dragable_update  == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?></div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Pan Control", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_pan_control_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?></div>
																		</td>
																	</tr>
																	<tr class="<?php echo $alternate_layers;?>">
																		<td>
																			<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Map Type Control", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_map_type_control_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?></div>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Over View Map", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_overview_control_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?></div>
																		</td>
																	</tr>
																	<tr class="<?php echo $alternate_layers;?>">
																		<td>
																			<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Street View", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_street_view_update  == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></div>
																			<?php 
																			if(isset($map_street_view_update) && $map_street_view_update==1)
																			{
																				?>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Close Button", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_close_button_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?></div>
																				<?php 
																			}
																			?>
																			
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Marker Cluster", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_marker_cluster_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></div>
																			<?php 
																			if(isset($map_marker_cluster_update) && $map_marker_cluster_update==1)
																			{
																				?>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Grid", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_cluster_grid_update;?></div>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Max Zoom Level ", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_max_zoom_level_update;?></div>
																				<?php 
																			}
																			?>
																		</td>
																	</tr>
																	<tr class="<?php echo $alternate_layers;?>">
																		<td>
																			<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Circle Overlay", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_circle_overlay_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></div>
																			<?php 
																			if(isset($map_circle_overlay_update) && $map_circle_overlay_update==1)
																			{
																				?>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Radius (Miles)", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_circle_radius_update;?></div>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Stroke Color", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage">
																					<span style="padding: 2px 20px; background-color: <?php echo $map_stroke_color_update;?>;color: #FFF;"><?php echo $map_stroke_color_update;?> </span>
																				</div>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Stroke Weight", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_circle_weight_update;?></div>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Fill Color", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage">
																					<span style="padding: 2px 20px; background-color: <?php echo $map_fill_color_update;?>;color: #FFF;"><?php echo $map_fill_color_update;?></span>
																				</div>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Stroke Opacity", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_circle_opacity_update;?></div>
																				<?php
																			}
																			?>
																		</td>
																	</tr>
																	<tr>
																		<td>
																		<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Directions", map_bank); ?></b> :</label>
																			<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_direction_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?> <i class="widget_premium_feature"><?php _e(" (Available in Premium Editions)", map_bank); ?></i></div>
																			<?php 
																			if(isset($map_direction_update) && $map_direction_update==1)
																			{
																				?>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Displaying Text Directions", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_direction_text_update == 1 ? __("Enabled", map_bank) : __("Disabled", map_bank);?></div>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Travel Modes", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_travel_mode_update;?></div>
																				
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Text Color", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage">
																					<span style="padding: 2px 20px; background-color: <?php echo $map_text_color_update;?>;color: #FFF;"><?php echo $map_text_color_update;?></span>
																				</div>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Background Color", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage">
																					<span style="padding: 2px 20px; background-color: <?php echo $map_background_update;?>;color: #000;"><?php echo $map_background_update;?></span>
																				</div>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Border Color", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage">
																					<span style="padding: 2px 20px; background-color: <?php echo $map_border_color_update;?>;color: #FFF;"><?php echo $map_border_color_update;?></span>
																				</div>
																				<label class="layout-control-label custom-label-width-adv-setting"><b><?php _e("Font Family", map_bank); ?></b> :</label>
																				<div class="layout-controls custom-layout-controls-maps manage"><?php echo $map_font_family_update;?></div>
																				<?php
																			}
																			?>
																		</td>
																	</tr>
																	<?php 
																	$flag++;
																	?>
																</tbody>
															</table>
															<a href="admin.php?page=gmb_edit_adv_settings&map_id=<?php echo $map_id;?>" class="btn btn-danger" style="float:right;margin-top:10px;"><?php _e("Edit Advanced Settings", map_bank); ?></a>
															<?php 
															}
															?>
														</div>	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script type="text/javascript">
			var manage_markers_array = [];
			var manage_polygons_array = [];
			var manage_polylines_array = [];
			jQuery(document).ready(function() 
			{
				<?php 
				if(isset($_REQUEST["map_id"]))
				{
					?>
					jQuery("#ux_ddl_location").val("<?php echo $map_id?>");
					<?php 
				}
				?>
				jQuery("#data-table-add_marker").dataTable  
				({
					"bJQueryUI": false,
					"bAutoWidth": true,
					"sPaginationType": "full_numbers",
					"sDom": '<"datatable-header"fl>t<"datatable-footer"ip>',
					"oLanguage": 
					{
						"sLengthMenu": "<span>Show entries:</span> _MENU_"
					},
					"aaSorting": [[ 3, "desc" ]],
					"aoColumnDefs": [{ "bSortable": false, "aTargets": [4] }]
				});
				
				jQuery("#data-table-manage-polygons").dataTable
				({
					"bJQueryUI": false,
					"bAutoWidth": true,
					"sPaginationType": "full_numbers",
					"sDom": '<"datatable-header"fl>t<"datatable-footer"ip>',
					"oLanguage": {
					"sLengthMenu": "<span>Show entries:</span> _MENU_"
					},
					"aaSorting": [
						[ 4, "desc" ]
					],
					"aoColumnDefs": [
						{ "bSortable": false, "aTargets": [4] }
					]
				});
				
				jQuery("#data-table-manage-polyline").dataTable
				({
					"bJQueryUI": false,
					"bAutoWidth": true,
					"sPaginationType": "full_numbers",
					"sDom": "<\"datatable-header\"fl>t<\"datatable-footer\"ip>",
					"oLanguage": {
						"sLengthMenu": "<span><?php _e("Show entries",map_bank)?>:</span> _MENU_"
					},
					"aaSorting": [
						[ 4 , "desc" ]
					],
					"aoColumnDefs": [
					{ 
						"bSortable": false, "aTargets": [-1] }
					]
				});
				jQuery(".dataTables_length").css("display","none");
				jQuery(".datatable-header").css("float","right");
				jQuery(".datatable-header").css("margin-bottom","8px");
				jQuery(".dataTables_filter").css("margin-top","10px");
			});
			
			jQuery('.framework_tabs .framework_tab-links a').on('click', function(e)  {
				var currentAttrValue = jQuery(this).attr('href');
				jQuery('.framework_tabs ' + currentAttrValue).show().siblings().hide();
				jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
				e.preventDefault();
			});
			
			if (typeof(overlay) != "function")
			{
				function overlay()
				{
					var overlay_opacity = jQuery("<div class=\"opacity_overlay\"></div>");
					jQuery("body").append(overlay_opacity);
					var overlay = jQuery("<div class=\"loader_opacity\"><div class=\"processing_overlay\"></div></div>");
					jQuery("body").append(overlay);
				}
			}
			
			if (typeof(bind_map_details) != "function")
			{
				function bind_map_details()
				{
					var map_id = jQuery("#ux_ddl_location").val();
					window.location.href = "admin.php?page=manage_map&map_id="+map_id;
				}
			}
			
			if (typeof(delete_single_marker) != "function")
			{
				function delete_single_marker(id)
				{
					var confirm_delete = confirm("<?php _e( "Are you sure, you want to delete this Marker ?", map_bank ); ?>");
					if(confirm_delete == true)
					{
						overlay();
						jQuery.post(ajaxurl, "marker_id="+id+"&param=single_marker_delete&action=add_map_library&_wpnonce=<?php echo $marker_one_delete;?>", function()
						{
							setTimeout(function () {
								jQuery(".loader_opacity").remove();
								jQuery(".opacity_overlay").remove();
								window.location.reload();
							}, 2000);
						});
					}
				}
			}
			
			jQuery("#chk_selectall_markers").click(function ()
			{
				var oTable = jQuery("#data-table-add_marker").dataTable();
				var checkProp = jQuery("#chk_selectall_markers").prop("checked");
				jQuery("input[type=checkbox][name=ux_chk_manage_marker]", oTable.fnGetNodes()).each(function () 
				{
					if (checkProp) 
					{
						jQuery(this).attr("checked", "checked");
					}
					else 
					{
						jQuery(this).removeAttr("checked");
					}
				});
			});
			
			if (typeof(bulk_delete_marker) != "function")
			{
				function bulk_delete_marker()
				{
					alert("<?php _e( "This feature is only available in Premium Editions!", map_bank ); ?>");
				}
			}
			
			if (typeof(delete_single_polygon) != "function")
			{
				function delete_single_polygon(id)
				{
					var confirm_delete =  confirm("<?php _e( "Are you sure, you want to delete this Polygon ?", map_bank ); ?>");
					if(confirm_delete == true)
					{
						overlay();
						jQuery.post(ajaxurl, "polygon_id="+id+"&param=single_polygon_delete&action=add_map_library&_wpnonce=<?php echo $polygon_one_delete;?>", function()
						{
							jQuery(".loader_opacity").remove();
							jQuery(".opacity_overlay").remove();
							window.location.reload();
						});
					}
				}
			}
			
			jQuery("#selectall_polygons").click(function ()
			{
				var oTable = jQuery("#data-table-manage-polygons").dataTable();
				var checkProp = jQuery("#selectall_polygons").prop("checked");
				jQuery("input[type=checkbox][name=ux_chk_manage_polygon]", oTable.fnGetNodes()).each(function () 
				{
					if (checkProp) 
					{
						jQuery(this).attr("checked", "checked");
					}
					else 
					{
						jQuery(this).removeAttr("checked");
					}
				});
			});
			
			if (typeof(bulk_delete_polygon) != "function")
			{
				function bulk_delete_polygon()
				{
					alert("<?php _e( "This feature is only available in Premium Editions!", map_bank ); ?>");
				}
			}
		
			jQuery("#selectall_polylines").click(function ()
			{
				var oTable = jQuery("#data-table-manage-polyline").dataTable();
				var checkProp = jQuery("#selectall_polylines").prop("checked");
				jQuery("input[type=checkbox][name=ux_chk_manage_polyline]", oTable.fnGetNodes()).each(function () 
				{
					if (checkProp) 
					{
						jQuery(this).attr("checked", "checked");
					}
					else 
					{
						jQuery(this).removeAttr("checked");
					}
				});
			});
	
			if (typeof(delete_single_polyline) != "function")
			{
				function delete_single_polyline(id)
				{
					var confirm_delete =  confirm("<?php _e( "Are you sure, you want to delete this Polyline ?", map_bank ); ?>");
					if(confirm_delete == true)
					{
						overlay();
						jQuery.post(ajaxurl, "polyline_id="+id+"&param=single_polyline_delete&action=add_map_library&_wpnonce=<?php echo $polyline_one_delete ;?>", function()
						{
							setTimeout(function () {
								jQuery(".loader_opacity").remove();
								jQuery(".opacity_overlay").remove();
								window.location.reload();
							}, 2000);
						});
					}
				}
			}
			
			if (typeof(bulk_delete_polyline) != "function")
			{
				function bulk_delete_polyline()
				{
					alert("<?php _e( "This feature is only available in Premium Editions!", map_bank ); ?>");
				}
			}
			
			if (typeof(error_message_close) != "function")
			{
				function error_message_close()
				{
					jQuery("#top-error").remove();
				}
			}
		</script>
	<?php 
	}
}
?>