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
	?>
		<form id="frm_manage_map" name="frm_manage_map" class="layout-form" style="width:1000px;">
			<div class="fluid-layout">
				<div class="layout-span12 responsive">
					<div class="widget-layout">
						<div class="widget-layout-title">
							<h4><?php _e("Google Maps Bank", map_bank); ?></h4>
						</div>
						<div class="widget-layout-body">
							<div class="fluid-layout">
								<div class="layout-span12">
									<div class="framework_tabs">
										<ul class="framework_tab-links">
											<li class="active"><a href="#short-code"><?php _e("Short Codes for Page/Post", map_bank); ?></a></li>
											<li><a href="#map-widget"><?php _e("Short Codes for Widget", map_bank); ?></a></li>
										</ul>
										<div class="framework_tab-content">
											<div id="short-code" class="framework_tab active">
												<div class="widget-layout">
													<div class="widget-layout-title">
														<h4><?php _e("Page/Post", map_bank); ?></h4>
													</div>
													<div class="widget-layout-body">
														<div class="fluid-layout">
															<div class="layout-span12">
																<img src="<?php echo plugins_url("/assets/images/google_maps_bank_short_code.png",dirname(__FILE__));?>" />
															</div>
														</div>
													</div>
												</div>
											</div>
											<div id="map-widget" class="framework_tab">
												<div class="widget-layout">
													<div class="widget-layout-title">
														<h4><?php _e("Widget", map_bank); ?></h4>
													</div>
													<div class="widget-layout-body">
														<div class="fluid-layout">
															<div class="layout-span12">
																<img src="<?php echo plugins_url("/assets/images/google-maps-widget.png",dirname(__FILE__));?>" />
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
			</div>
		</form>
		<script type="text/javascript">
			jQuery(document).ready(function()
			{
				jQuery(".nav-tab-wrapper > a#gallery_bank").addClass("nav-tab-active");
				jQuery(".framework_tabs .framework_tab-links a").on("click", function(e)
				{
					var currentAttrValue = jQuery(this).attr("href");
					jQuery(".framework_tabs " + currentAttrValue).show().siblings().hide();
					jQuery(this).parent("li").addClass("active").siblings().removeClass("active");
					e.preventDefault();
				});
			});
		</script>
	<?php 
	}
}
?>