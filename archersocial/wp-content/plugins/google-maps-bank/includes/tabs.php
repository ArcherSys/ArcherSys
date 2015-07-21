<?php
global $wpdb,$current_user,$user_role_permission;
$cpo_role = $wpdb->prefix . "capabilities";
$current_user->role = array_keys($current_user->$cpo_role);
$cpo_role = $current_user->role[0];

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
	?>
	<div id="welcome-panel" class="welcome-panel" style="width:1000px;padding:0px !important;background-color: #f9f9f9 !important">
		<div class="welcome-panel-content">
			<img src="<?php echo plugins_url("/assets/images/GOOGLE-MAP.png" , dirname(__FILE__)); ?>" style="margin-top:10px;"></img>
			<div class="welcome-panel-column-container">
				<div class="welcome-panel-column" style="width:240px !important;">
					<h4 class="welcome-screen-margin">
						<?php _e("Get Started", map_bank); ?>
					</h4>
						<a class="button button-primary button-hero" href="#">
							<?php _e("Watch Google Video!", map_bank); ?>
						</a>
						<p>or, 
							<a target="_blank" href="http://tech-banker.com/products/wp-google-maps-bank/knowledge-base/">
								<?php _e("read documentation here", map_bank); ?>
							</a>
						</p>
				</div>
				<div class="welcome-panel-column" style="width:250px !important;">
					<h4 class="welcome-screen-margin"><?php _e("Go Premium", map_bank); ?></h4>
					<ul>
						<li>
							<a href="http://tech-banker.com/products/wp-google-maps-bank/" target="_blank" class="welcome-icon">
								<?php _e("Features", map_bank); ?>
							</a>
						</li>
						<li>
							<a href="http://tech-banker.com/products/wp-google-maps-bank/demo/" target="_blank" class="welcome-icon">
								<?php _e("Online Demos", map_bank); ?>
							</a>
						</li>
						<li>
							<a href="http://tech-banker.com/products/wp-google-maps-bank/pricing/" target="_blank" class="welcome-icon">
								<?php _e("Premium Pricing Plans ?", map_bank); ?>
							</a>
						</li>
					</ul>
				</div>
				<div class="welcome-panel-column" style="width:240px !important;">
					<h4 class="welcome-screen-margin">
						<?php _e("Knowledge Base", map_bank); ?>
					</h4>
					<ul>
						<li>
							<a href="http://tech-banker.com/forums/forum/google-maps-bank-support/" target="_blank" class="welcome-icon">
								<?php _e("Support Forum", map_bank); ?>
							</a>
						</li>
						<li>
							<a href="http://tech-banker.com/products/wp-google-maps-bank/knowledge-base/" target="_blank" class="welcome-icon">
								<?php _e("FAQ's", map_bank); ?>
							</a>
						</li>
						<li>
							<a href="http://tech-banker.com/products/renew-premium-support-wp-google-maps-bank/" target="_blank" class="welcome-icon">
								<?php _e("Renew Premium Support", map_bank); ?>
							</a>
						</li>
					</ul>
				</div>
				<div class="welcome-panel-column welcome-panel-last" style="width:250px !important;">
					<h4 class="welcome-screen-margin"><?php _e("More Actions", map_bank); ?></h4>
					<ul>
						<li>
							<a href="admin.php?page=gmb_recommended_plugins" class="welcome-icon">
								<?php _e("Recommendations", map_bank); ?>
							</a>
						</li>
						<li>
							<a href="admin.php?page=gmb_other_services" class="welcome-icon">
								<?php _e("Our Other Services", map_bank); ?>
							</a>
						</li>
						<li>
							<a href="http://tech-banker.com/shop/uncategorized/order-customization-wp-google-maps-bank" target="_blank" class="welcome-icon">
								<?php _e("Plugin Customization", map_bank); ?>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script>
	jQuery(document).ready(function()
	{
		jQuery(".nav-tab-wrapper > a#<?php echo $_REQUEST["page"];?>").addClass("nav-tab-active");
	});
	</script>
	<h2 class="nav-tab-wrapper" style="max-width: 1000px;">
		<a style="display:none;" class="nav-tab" id="gmb_dashboard" href=""><?php _e("Dashboard", map_bank);?></a>
		<a class="nav-tab" id="gmb_dashboard" href="admin.php?page=gmb_dashboard"><?php _e("Dashboard", map_bank);?></a>
		<?php 
		$map_count = $wpdb->get_var
		(
			$wpdb->prepare
			(
				"SELECT count(id) FROM ".map_bank_create_new_map_table()." where map_type=%s",
				"map"
			)
		);
		if($map_count < 2)
		{
			?>
			<a class="nav-tab" id="gmb_create_new_map" href="admin.php?page=gmb_create_new_map"><?php _e("Create Map", map_bank);?></a>
			<?php 
		}
		?>
		<a class="nav-tab" id="manage_map" href="admin.php?page=manage_map"><?php _e("Manage Maps", map_bank);?></a>
		<a class="nav-tab" id="short_code_map" href="admin.php?page=short_code_map"><?php _e("Short Codes", map_bank);?></a>
		<a class="nav-tab" id="gmb_recommended_plugins" href="admin.php?page=gmb_recommended_plugins"><?php _e("Recommendations", map_bank);?></a>
		<a class="nav-tab" id="gmb_pro_version" href="admin.php?page=gmb_pro_version"><?php _e("Premium Editions", map_bank);?></a>
		<a class="nav-tab" id="gmb_other_services" href="admin.php?page=gmb_other_services"><?php _e("Our Other Services", map_bank);?></a>
	</h2>
	<?php
	if($_REQUEST["page"] != "gmb_feature_requests")
	{
		?>
		<div class="custom-message green" style="display: block;margin-top:30px;max-width:965px;">
			<div style="padding: 4px 0;">
				<p style="font:12px/1.0em Arial !important;font-weight:bold;">If you don't find any features you were looking for in this Plugin, 
					please write us <a target="_self" href="admin.php?page=gmb_feature_requests">here</a> and we shall try to implement this for you as soon as possible! We are looking forward for your valuable <a target="_self" href="admin.php?page=gmb_feature_requests">Feedback</a></p>
			</div>
		</div>
		<?php
	}
}
?>