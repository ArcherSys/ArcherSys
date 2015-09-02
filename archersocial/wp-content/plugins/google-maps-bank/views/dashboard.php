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
		if(!function_exists("get_map_count"))
		{
			function get_map_count($maps, $map_settings)
			{
				$map_data_array = array();
				foreach ($maps as $row)
				{
					$map_data = get_map_details($row->id,$map_settings);
					array_push($map_data_array, $map_data);
				}
				return array_unique($map_data_array, SORT_REGULAR);
			}
		}
		if(!function_exists("get_map_details"))
		{
			function get_map_details($id,$map_settings)
			{
				$map_settings_array = array();
				foreach ($map_settings as $row)
				{
					if ($row->id == $id)
					{
						$map_settings_array["$row->map_meta_key"] = $row->map_meta_value;
						$map_settings_array["id"] = $row->id;
						$map_settings_array["creation_date"] = $row->creation_date;
					}
				}
				return $map_settings_array;
			}
		}
		
		$delete_single_map = wp_create_nonce("one_map_delete");
		$delete_bulk_map = wp_create_nonce("multiple_map_delete");
		$map_data_details = $wpdb->get_results
		(
			$wpdb->prepare
			(
				"SELECT * FROM " . map_bank_meta_table(). " INNER JOIN ".map_bank_create_new_map_table().
				" ON ".map_bank_create_new_map_table().".id = ".map_bank_meta_table().".map_id WHERE ".map_bank_create_new_map_table().
				".parent_id = %d and " . map_bank_create_new_map_table() . ".map_type=%s ORDER BY " .map_bank_create_new_map_table().".id DESC ",
				0,
				"map"
			)
		);
		$maps = $wpdb->get_results
		(
			$wpdb->prepare
			(
				"SELECT id FROM " . map_bank_create_new_map_table(). " WHERE parent_id = %d and map_type = %s",
				0,
				"map"
			)
		);
		$map_count = $wpdb->get_var
		(
			$wpdb->prepare
			(
				"SELECT count(id) FROM ".map_bank_create_new_map_table()." where map_type=%s",
				"map"
			)
		);
		$map_details =  get_map_count($maps, $map_data_details);
		?>
		<form  class="layout-form" style="max-width:1000px;">
			<div class="fluid-layout">
				<div class="layout-span12">
					<div class="widget-layout">
						<div class="widget-layout-title">
							<h4><?php _e("Dashboard", map_bank); ?></h4>
						</div>
						<div class="widget-layout-body">
							<div class="fluid-layout">
								<div class="layout-span12">
									<div class="layout-control-group">
										<select  id="ux_ddl_bulk_action" name="ux_ddl_bulk_action" class="layout-span2">
											<option value="0"><?php _e("Bulk Action", map_bank); ?></option>
											<option value="1"><?php _e("Delete", map_bank); ?></option>
										</select>
										<input type="button" id="ux_btn_action" onclick="bulk_delete();" name="ux_btn_action" class="btn btn-danger" value="<?php _e("Apply", map_bank); ?>"/>
										<?php 
										if($map_count < 2)
										{
											?>
											<a class="btn btn-danger" href="admin.php?page=gmb_create_new_map"><?php _e("Create New Map", map_bank); ?></a>
											<?php 
										}
										?>
									</div>
									<div class="separator-doubled"></div>
									<table class="widefat" id="data-table-dashboard" style="background-color:#fff !important;">
										<thead>
											<tr>
												<th style="width: 10%;"><input style="margin-left: 0px;" type="checkbox" id="chk_selectall" name="selectall" ></th>
												<th style="width: 20%;"><?php _e("Title", map_bank); ?></th>
												<th style="width: 18%;"><?php _e("Type", map_bank); ?></th>
												<th style="width: 16%;"><?php _e("Style", map_bank); ?></th>
												<th style="width: 18%;"><?php _e("Creation Date", map_bank);?></th>
											</tr>
										</thead>
										<tbody>
											<?php
											$flag = 0;
											foreach($map_details as $map)
											{
												$alternate = $flag % 2 == 0 ? "alternate" : "";
												$theme_used = $wpdb->get_var
												(
													$wpdb->prepare
													(
														"SELECT themes_value FROM " . map_bank_marker_themes_table(). " WHERE themes_key = %s",
														$map["map_themes"]
													)
												);
												?>
												<tr class="<?php echo $alternate;?>">
													<td>
														<input type="checkbox" value="<?php echo $map["id"]; ?>" id="ux_chk_manage_map" name="ux_chk_manage_map"/>
													</td>
													<td>
														<?php echo stripcslashes(htmlspecialchars_decode($map["map_title"]));?>
														<span class="check-bottom">
															<a style="color:#0d1ff6;" href="admin.php?page=gmb_create_new_map&map_id=<?php echo $map["id"];?>"><?php _e("Edit", map_bank); ?></a> | 
															<a href="#" style="color:#0d1ff6;" onclick="delete_create_map(<?php echo $map["id"]; ?>);"><?php _e("Delete", map_bank); ?></a>
														</span>
													</td>
													<td>
														<?php 
														switch($map["map_type"])
														{
															case "1":
																echo "Road Map";
															break;
															case "2":
																echo "Terrain";
															break;
															case "3":
																echo "Hybrid";
															break;
															case "4":
																echo "Satellite";
															break;
														}
														?>
													</td>
													<td>
														<?php echo $theme_used ;?>
													</td>
													<td>
														<?php echo date("d M, Y", strtotime($map["creation_date"])); ?>
													</td>
												</tr>
											<?php
											$flag++;
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<script type="text/javascript">
			var manage_map = [];
			jQuery(document).ready(function() 
			{
				oTable = jQuery("#data-table-dashboard").dataTable
				({
					"bJQueryUI": false,
					"bAutoWidth": true,
					"sPaginationType": "full_numbers",
					"sDom": "<\"datatable-header\"fl>t<\"datatable-footer\"ip>",
					"oLanguage": {
					"sLengthMenu": "<span>Show entries:</span> _MENU_"
					},
					"aoColumnDefs": [
						{ "bSortable": false, "aTargets": [4] }
					]
				});
				jQuery(".dataTables_length").css("display","none");
				jQuery(".dataTables_filter").css("float","right");
				jQuery(".dataTables_filter").css("margin-bottom","10px");
				jQuery(".dataTables_filter").css("margin-top","10px");
			});
			
			jQuery("#chk_selectall").click(function ()
			{
				var oTable = jQuery("#data-table-dashboard").dataTable();
				var checkProp = jQuery("#chk_selectall").prop("checked");
				jQuery("input[type=checkbox][name=ux_chk_manage_map]", oTable.fnGetNodes()).each(function () 
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
			
			function bulk_delete()
			{
				alert("<?php _e( "This feature is only available in Premium Editions!", map_bank ); ?>");
			}
			function delete_create_map(map_id)
			{
				var confirm_delete =  confirm("<?php _e( "Are you sure, you want to delete this Map ?", map_bank ); ?>");
				if(confirm_delete == true)
				{
					jQuery.post(ajaxurl, "map_id="+map_id+"&param=single_map_delete&action=add_map_library&_wpnonce=<?php echo $delete_single_map  ;?>", function(data)
					{
						window.location.href = "admin.php?page=gmb_dashboard";
					});
				}
			}
			function error_message_close()
			{
				jQuery("#top-error").remove();
			}
		</script>
	<?php 
	}
}
 ?>	