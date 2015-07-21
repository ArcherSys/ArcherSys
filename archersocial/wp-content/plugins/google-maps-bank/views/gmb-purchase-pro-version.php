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
		?>
<form id="frm_purchase_pro" class="layout-form"
	style="max-width: 1000px;">
	<div class="fluid-layout">
		<div class="layout-span12">
			<div class="widget-layout">
				<div class="widget-layout-title">
					<h4>
						<?php _e("Premium Editions", map_bank);?>
					</h4>
				</div>
				<div class="widget-layout-body">
					<div class="wpb_row wf-container"
						style="margin-top: 0px; margin-bottom: 0px; min-height: 0px;">
						<div class="vc_col-sm-12 wpb_column column_container ">
							<div class="wpb_wrapper">
								<div class="wpb_text_column wpb_content_element ">
									<div class="wpb_wrapper">
										<h1 style="text-align: center; margin-bottom: 40px">
											<?php _e("Google Maps Bank is an one time Investment. Its Worth it!", map_bank); ?>
										</h1>
									</div>
								</div>
								<div class="gap" style="line-height: 20px;"></div>
								<div class="hr-thick" style="width: 100%;"></div>
								<div class="gap" style="line-height: 40px; height: 40px;"></div>
								<div id="google_map_bank_pricing"
									class="p_table_responsive p_table_hide_caption_column p_table_1 p_table_1_1 css3_grid_clearfix">
									<div class="caption_column column_0_responsive"
										style="width: 22.5%;">
										<ul>
											<li
												class="css3_grid_row_0 header_row_1 align_center css3_grid_row_0_responsive radius5_topleft"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"></span></span></li>
											<li
												class="css3_grid_row_1 header_row_2 css3_grid_row_1_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><h2 class="caption">
															choose <span>your</span> plan
														</h2></span></span></li>
											<li
												class="css3_grid_row_2 row_style_4 css3_grid_row_2_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Installation per License</span><span
															class="css3_grid_tooltip"><span>Number of websites that can use the plugin on purchase of a License.</span>Installation
																per License</span></span></span></span></li>
											<li
												class="css3_grid_row_3 row_style_2 css3_grid_row_3_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Multisite Compatibility*</span><span
															class="css3_grid_tooltip"><span>Allows you to use this
																	Plugin with network of sites / Multisites WordPress.
																	But you need to have separate license for each domain.</span>Multisite
																Compatibility*</span></span></span></span></li>
											<li
												class="css3_grid_row_4 row_style_4 css3_grid_row_4_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Technical Support</span><span
															class="css3_grid_tooltip"><span>Technical Support by the
																	Development Team for Installation, Bug Fixing, Plugin
																	Compatibility Issues.</span>Technical Support</span></span></span></span></li>
											<li
												class="css3_grid_row_5 row_style_2 css3_grid_row_5_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Updates</span><span
															class="css3_grid_tooltip"><span>Automatic Plugin Update
																	Notification with New Features, Bug Fixing and much
																	more.</span>Plugin Updates</span></span></span></span></li>
											<li
												class="css3_grid_row_6 row_style_4 css3_grid_row_6_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Number of Maps</span><span
															class="css3_grid_tooltip"><span>Number of Maps allowed to
																	be Published.</span>Number of Maps</span></span></span></span></li>
											<li
												class="css3_grid_row_7 row_style_2 css3_grid_row_7_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Markers</span><span
															class="css3_grid_tooltip"><span>Markers are small icons
																	that identifies a location on the map.</span>Map
																Markers</span></span></span></span></li>
											<li
												class="css3_grid_row_8 row_style_4 css3_grid_row_8_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polygons</span><span
															class="css3_grid_tooltip"><span>You can add colorful
																	polygons (generate automatic latitude and longitude on
																	the basis of locations) to your map to highlight or
																	show a specific area on the map.</span>Map Polygons</span></span></span></span></li>
											<li
												class="css3_grid_row_9 row_style_2 css3_grid_row_9_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polylines</span><span
															class="css3_grid_tooltip"><span>You can add colorful
																	polylines (generate automatic latitude and longitude on
																	the basis of locations) to your map to highlight or
																	show a specific path on the map.</span>Map Polylines</span></span></span></span></li>
											<li
												class="css3_grid_row_10 row_style_4 css3_grid_row_10_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Different Maps Type</span><span
															class="css3_grid_tooltip"><span>With WP Google Map you
																	can use different map types like Road Map, Terrain,
																	Hybrid, and Satellite.</span>Different Maps Type</span></span></span></span></li>
											<li
												class="css3_grid_row_11 row_style_2 css3_grid_row_11_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Locations</span><span
															class="css3_grid_tooltip"><span>You can add location on
																	you map with auto generated latitude and longitude on
																	the basis of the location you entered.</span>Map
																Locations</span></span></span></span></li>
											<li
												class="css3_grid_row_12 row_style_4 css3_grid_row_12_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Icons</span><span
															class="css3_grid_tooltip"><span>Add custom marker to the
																	marker list in order to have markers of your choice in
																	Google Maps Bank Plugin.</span>Marker Icons</span></span></span></span></li>
											<li
												class="css3_grid_row_13 row_style_2 css3_grid_row_13_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Shortcode Wizard</span><span
															class="css3_grid_tooltip"><span>Shortcode Wizards to
																	easily insert maps to any Page/Post.</span>Shortcode
																Wizard</span></span></span></span></li>
											<li
												class="css3_grid_row_14 row_style_4 css3_grid_row_14_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Location</span><span
															class="css3_grid_tooltip"><span>You can easily manage
																	location like edit or delete using Manage Locations in
																	Google Maps Bank.</span>Manage Location</span></span></span></span></li>
											<li
												class="css3_grid_row_15 row_style_2 css3_grid_row_15_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Marker</span><span
															class="css3_grid_tooltip"><span>Allows you to manage the
																	existing Markers by editing or deleting them as per
																	your requirement using Manage Markers in Google Maps
																	Bank.</span>Manage Marker</span></span></span></span></li>
											<li
												class="css3_grid_row_16 row_style_4 css3_grid_row_16_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polygons</span><span
															class="css3_grid_tooltip"><span>Allows you to edit and
																	delete the existing Polygons as per your requirement.</span>Manage
																Polygons</span></span></span></span></li>
											<li
												class="css3_grid_row_17 row_style_2 css3_grid_row_17_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Height/Width</span><span
															class="css3_grid_tooltip"><span>You can set Height and
																	Width for Map.</span>Map Height/Width</span></span></span></span></li>
											<li
												class="css3_grid_row_18 row_style_4 css3_grid_row_18_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polylines</span><span
															class="css3_grid_tooltip"><span>Allows you to manage the
																	existing Polylines by editing or deleting them as per
																	your requirement.</span>Manage Polylines</span></span></span></span></li>
											<li
												class="css3_grid_row_19 row_style_2 css3_grid_row_19_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Zoom Level</span><span
															class="css3_grid_tooltip"><span>Make you map user
																	friendly by using zoom level feature for you map.</span>Zoom
																Level</span></span></span></span></li>
											<li
												class="css3_grid_row_20 row_style_4 css3_grid_row_20_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Controls</span><span
															class="css3_grid_tooltip"><span>It allows you to set
																	different settings for the map like Pan-Control,
																	Draggable, Over-View-Map etc.</span>Map Controls</span></span></span></span></li>
											<li
												class="css3_grid_row_21 row_style_2 css3_grid_row_21_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Widgets Map</span><span
															class="css3_grid_tooltip"><span>Widgets allows map to be
																	show in your sidebar, footer, header etc.</span>Widgets
																Map</span></span></span></span></li>
											<li
												class="css3_grid_row_22 row_style_4 css3_grid_row_22_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Themes</span><span
															class="css3_grid_tooltip"><span>You can implement 113
																	different layouts for your map using Map Themes like
																	Old Map, Red Alert, Pink and Blue, Purple Rain and much
																	more.</span>Map Themes</span></span></span></span></li>
											<li
												class="css3_grid_row_23 row_style_2 css3_grid_row_23_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Info Window</span><span
															class="css3_grid_tooltip"><span>Info window is a popup
																	which is used to display all your information regarding
																	your location on the map.</span>Info Window</span></span></span></span></li>
											<li
												class="css3_grid_row_24 row_style_4 css3_grid_row_24_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Animation</span><span
															class="css3_grid_tooltip"><span>Add Animation like drop
																	and bounce to you marker on the map.</span>Marker
																Animation</span></span></span></span></li>
											<li
												class="css3_grid_row_25 row_style_2 css3_grid_row_25_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">KML Layer</span><span
															class="css3_grid_tooltip"><span>KML Layers allows you to
																	display the Geographic Information given by the KML
																	Link.</span>KML Layer</span></span></span></span></li>
											<li
												class="css3_grid_row_26 row_style_4 css3_grid_row_26_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Fusion Table Layer</span><span
															class="css3_grid_tooltip"><span>The Fusion Tables layer
																	renders data contained in Google Fusion Tables and
																	allows you to display your Map with its corresponding
																	Locations and their detailed Information.</span>Fusion
																Table Layer</span></span></span></span></li>
											<li
												class="css3_grid_row_27 row_style_2 css3_grid_row_27_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Weather Layer</span><span
															class="css3_grid_tooltip"><span>It allows you to
																	represent Weather Conditions and add weather forecasts
																	and cloud imagery to your map including Temperature and
																	Wind Speed of your Location on the Map. </span>Weather
																Layer</span></span></span></span></li>
											<li
												class="css3_grid_row_28 row_style_4 css3_grid_row_28_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Traffic Layer</span><span
															class="css3_grid_tooltip"><span>Allows you to display
																	Real Time Traffic Conditions of supported Locations on
																	the Map.</span>Traffic Layer</span></span></span></span></li>
											<li
												class="css3_grid_row_29 row_style_2 css3_grid_row_29_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Transit Layer</span><span
															class="css3_grid_tooltip"><span>Allows you to show Public
																	Transit Network of Locations supported by Transit
																	Information on the Map.</span>Transit Layer</span></span></span></span></li>
											<li
												class="css3_grid_row_30 row_style_4 css3_grid_row_30_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bicycling Layer</span><span
															class="css3_grid_tooltip"><span>It allows you to find any
																	Bicycle, Bike Paths or other Bicycling specific
																	Overlays on the Map. </span>Bicycling Layer</span></span></span></span></li>
											<li
												class="css3_grid_row_31 row_style_2 css3_grid_row_31_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Settings</span><span
															class="css3_grid_tooltip"><span>It allow you to control
																	the capabilities of plugin among different roles of
																	WordPress users.</span>Plugin Settings</span></span></span></span></li>
											<li
												class="css3_grid_row_32 row_style_4 css3_grid_row_32_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Scrolling Wheel</span><span
															class="css3_grid_tooltip"><span>Make you map user
																	friendly by using scroll wheel feature for you map.</span>Scrolling
																Wheel</span></span></span></span></li>
											<li
												class="css3_grid_row_33 row_style_2 css3_grid_row_33_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Border</span><span
															class="css3_grid_tooltip"><span>Easily Configuration
																	settings for Map Border like Map Border Width,Map
																	Border Style etc for customizing as per your website’s
																	look &amp; feel.</span>Map Border</span></span></span></span></li>
											<li
												class="css3_grid_row_34 row_style_4 css3_grid_row_34_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Responsive Map</span><span
															class="css3_grid_tooltip"><span>Optimal Viewing
																	Experience across a wide range of devices.</span>Responsive
																Map</span></span></span></span></li>
											<li
												class="css3_grid_row_35 row_style_2 css3_grid_row_35_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Layers</span><span
															class="css3_grid_tooltip"><span>Allows you to manage the
																	existing Layers Settings like KML Layer,Weather Layer
																	etc.</span>Manage Layers</span></span></span></span></li>
											<li
												class="css3_grid_row_36 row_style_4 css3_grid_row_36_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Advance Settings</span><span
															class="css3_grid_tooltip"><span>Allows you to manage the
																	exiting Advance Settings like Control Settings, Street
																	View etc.</span>Manage Advance Settings</span></span></span></span></li>
											<li
												class="css3_grid_row_37 row_style_2 css3_grid_row_37_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Engine Layer</span><span
															class="css3_grid_tooltip"><span>Google Maps Engine for
																	use by developers in their maps or data visualization
																	applications.</span>Map Engine Layer</span></span></span></span></li>
											<li
												class="css3_grid_row_38 row_style_4 css3_grid_row_38_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Panorama Layer</span><span
															class="css3_grid_tooltip"><span>Allows you to display a
																	Layer of Geo tagged photos in the form of Photos Icons
																	on Map.</span>Panorama Layer</span></span></span></span></li>
											<li
												class="css3_grid_row_39 row_style_2 css3_grid_row_39_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Street View</span><span
															class="css3_grid_tooltip"><span>Marker Cluster is a
																	client side grid-based clustering to a collection of
																	markers.</span>Street View</span></span></span></span></li>
											<li
												class="css3_grid_row_40 row_style_4 css3_grid_row_40_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Cluster</span><span
															class="css3_grid_tooltip"><span>This option allows you to
																	specify the area (in miles) to cover around the
																	specific location.</span>Marker Cluster</span></span></span></span></li>
											<li
												class="css3_grid_row_41 row_style_2 css3_grid_row_41_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Directions</span><span
															class="css3_grid_tooltip"><span>You can easily add
																	direction to your Map by specifying the Starting
																	(Source) and the Ending (Destination) directions.</span>Directions</span></span></span></span></li>
											<li
												class="css3_grid_row_42 row_style_4 css3_grid_row_42_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bulk Deletion</span><span
															class="css3_grid_tooltip"><span>It allow to delete bulk
																	deleation of maps on a single click.</span>Bulk
																Deletion</span></span></span></span></li>
											<li
												class="css3_grid_row_43 row_style_2 css3_grid_row_43_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Circle Overlay</span><span
															class="css3_grid_tooltip"><span>This option allows you to
																	specify the area (in miles) to cover around the
																	specific location.</span>Circle Overlay</span></span></span></span></li>
											<li
												class="css3_grid_row_44 footer_row css3_grid_row_44_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"></span></span></li>
										</ul>
									</div>
									<div class="column_1 column_1_responsive" style="width: 15.5%;">
										<div class="column_ribbon ribbon_style2_free"></div>
										<ul>
											<li
												class="css3_grid_row_0 header_row_1 align_center css3_grid_row_0_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><h2 class="col1">Lite</h2></span></span></li>
											<li
												class="css3_grid_row_1 header_row_2 css3_grid_row_1_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><h1 class="col1">FREE</h1></span></span></li>
											<li
												class="css3_grid_row_2 row_style_3 css3_grid_row_2_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Domains per License</span>1</span></span></span></li>
											<li
												class="css3_grid_row_3 row_style_1 css3_grid_row_3_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Multisite Compatibility*</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_4 row_style_3 css3_grid_row_4_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Technical Support</span>None</span></span></span></li>
											<li
												class="css3_grid_row_5 row_style_1 css3_grid_row_5_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Updates</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_6 row_style_3 css3_grid_row_6_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Number of Maps</span>2</span></span></span></li>
											<li
												class="css3_grid_row_7 row_style_1 css3_grid_row_7_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Markers</span>5</span></span></span></li>
											<li
												class="css3_grid_row_8 row_style_3 css3_grid_row_8_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polygons</span>1</span></span></span></li>
											<li
												class="css3_grid_row_9 row_style_1 css3_grid_row_9_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polylines</span>1</span></span></span></li>
											<li
												class="css3_grid_row_10 row_style_3 css3_grid_row_10_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Different Maps Type</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_11 row_style_1 css3_grid_row_11_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Locations</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_12 row_style_3 css3_grid_row_12_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Icons</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_13 row_style_1 css3_grid_row_13_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Shortcode Wizard</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_14 row_style_3 css3_grid_row_14_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Location</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_15 row_style_1 css3_grid_row_15_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Marker</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_16 row_style_3 css3_grid_row_16_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polygons</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_17 row_style_1 css3_grid_row_17_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Height/Width</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_18 row_style_3 css3_grid_row_18_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polylines</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_19 row_style_1 css3_grid_row_19_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Zoom Level</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_20 row_style_3 css3_grid_row_20_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Controls</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_21 row_style_1 css3_grid_row_21_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Widgets Map</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_22 row_style_3 css3_grid_row_22_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Themes</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_23 row_style_1 css3_grid_row_23_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Info Window</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_24 row_style_3 css3_grid_row_24_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Animation</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_25 row_style_1 css3_grid_row_25_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">KML Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_26 row_style_3 css3_grid_row_26_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Fusion Table Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_27 row_style_1 css3_grid_row_27_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Weather Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_28 row_style_3 css3_grid_row_28_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Traffic Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_29 row_style_1 css3_grid_row_29_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Transit Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_30 row_style_3 css3_grid_row_30_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bicycling Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_31 row_style_1 css3_grid_row_31_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Settings</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_32 row_style_3 css3_grid_row_32_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Scrolling Wheel</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_33 row_style_1 css3_grid_row_33_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Border</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_34 row_style_3 css3_grid_row_34_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Responsive Map</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_35 row_style_1 css3_grid_row_35_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Layers</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_36 row_style_3 css3_grid_row_36_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Advance Settings</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_37 row_style_1 css3_grid_row_37_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Engine Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_38 row_style_3 css3_grid_row_38_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Panorama Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_39 row_style_1 css3_grid_row_39_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Street View</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_40 row_style_3 css3_grid_row_40_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Cluster</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_41 row_style_1 css3_grid_row_41_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Directions</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_42 row_style_3 css3_grid_row_42_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bulk Deletion</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_43 row_style_1 css3_grid_row_43_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Circle Overlay</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_44 footer_row css3_grid_row_44_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><a
														href="https://wordpress.org/plugins/google-maps-bank/"
														class="sign_up sign_up_orange radius3">Download!</a></span></span></li>
										</ul>
									</div>
									<div class="column_2 column_2_responsive" style="width: 15.5%;">
										<div class="column_ribbon ribbon_style2_heart"></div>
										<ul>
											<li
												class="css3_grid_row_0 header_row_1 align_center css3_grid_row_0_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><h2 class="col1">Eco</h2></span></span></li>
											<li
												class="css3_grid_row_1 header_row_2 css3_grid_row_1_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span
														class="css3_grid_tooltip"><span>You just need to pay for
																once for life time.</span>
														<h1 class="col1">
																&pound;<span>14</span>
															</h1>
															<h3 class="col1">one time</h3></span></span></span></li>
											<li
												class="css3_grid_row_2 row_style_4 css3_grid_row_2_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Domains per License</span>1</span></span></span></li>
											<li
												class="css3_grid_row_3 row_style_2 css3_grid_row_3_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Multisite Compatibility*</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_4 row_style_4 css3_grid_row_4_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Technical Support</span>1
															Week</span></span></span></li>
											<li
												class="css3_grid_row_5 row_style_2 css3_grid_row_5_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Updates</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_6 row_style_4 css3_grid_row_6_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Number of Maps</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_7 row_style_2 css3_grid_row_7_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Markers</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_8 row_style_4 css3_grid_row_8_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polygons</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_9 row_style_2 css3_grid_row_9_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polylines</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_10 row_style_4 css3_grid_row_10_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Different Maps Type</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_11 row_style_2 css3_grid_row_11_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Locations</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_12 row_style_4 css3_grid_row_12_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Icons</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_13 row_style_2 css3_grid_row_13_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Shortcode Wizard</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_14 row_style_4 css3_grid_row_14_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Location</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_15 row_style_2 css3_grid_row_15_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Marker</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_16 row_style_4 css3_grid_row_16_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polygons</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_17 row_style_2 css3_grid_row_17_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Height/Width</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_18 row_style_4 css3_grid_row_18_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polylines</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_19 row_style_2 css3_grid_row_19_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Zoom Level</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_20 row_style_4 css3_grid_row_20_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Controls</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_21 row_style_2 css3_grid_row_21_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Widgets Map</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_22 row_style_4 css3_grid_row_22_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Themes</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_23 row_style_2 css3_grid_row_23_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Info Window</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_24 row_style_4 css3_grid_row_24_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Animation</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_25 row_style_2 css3_grid_row_25_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">KML Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_26 row_style_4 css3_grid_row_26_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Fusion Table Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_27 row_style_2 css3_grid_row_27_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Weather Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_28 row_style_4 css3_grid_row_28_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Traffic Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_29 row_style_2 css3_grid_row_29_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Transit Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_30 row_style_4 css3_grid_row_30_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bicycling Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_31 row_style_2 css3_grid_row_31_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Settings</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_32 row_style_4 css3_grid_row_32_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Scrolling Wheel</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_33 row_style_2 css3_grid_row_33_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Border</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_34 row_style_4 css3_grid_row_34_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Responsive Map</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_35 row_style_2 css3_grid_row_35_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Layers</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_36 row_style_4 css3_grid_row_36_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Advance Settings</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_37 row_style_2 css3_grid_row_37_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Engine Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_38 row_style_4 css3_grid_row_38_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Panorama Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_39 row_style_2 css3_grid_row_39_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Street View</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_40 row_style_4 css3_grid_row_40_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Cluster</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_41 row_style_2 css3_grid_row_41_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Directions</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_42 row_style_4 css3_grid_row_42_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bulk Deletion</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_43 row_style_2 css3_grid_row_43_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Circle Overlay</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/cross_04.png"
															alt="no"></span></span></span></li>
											<li
												class="css3_grid_row_44 footer_row css3_grid_row_44_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><a
														href="/shop/wp-google-maps-bank/wp-google-maps-bank-eco-edition/"
														class="sign_up sign_up_orange radius3">Order Now!</a></span></span></li>
										</ul>
									</div>
									<div class="column_3 active_column column_3_responsive"
										style="width: 15.5%;">
										<div class="column_ribbon ribbon_style2_best"></div>
										<ul>
											<li
												class="css3_grid_row_0 header_row_1 align_center css3_grid_row_0_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><h2 class="col2">Pro</h2></span></span></li>
											<li
												class="css3_grid_row_1 header_row_2 css3_grid_row_1_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span
														class="css3_grid_tooltip"><span>You just need to pay for
																once for life time.</span>
														<h1 class="col1">
																&pound;<span>22</span>
															</h1>
															<h3 class="col1">one time</h3></span></span></span></li>
											<li
												class="css3_grid_row_2 row_style_3 css3_grid_row_2_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Domains per License</span>1</span></span></span></li>
											<li
												class="css3_grid_row_3 row_style_1 css3_grid_row_3_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Multisite Compatibility*</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_4 row_style_3 css3_grid_row_4_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Technical Support</span>1
															Month</span></span></span></li>
											<li
												class="css3_grid_row_5 row_style_1 css3_grid_row_5_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Updates</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_6 row_style_3 css3_grid_row_6_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Number of Maps</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_7 row_style_1 css3_grid_row_7_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Markers</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_8 row_style_3 css3_grid_row_8_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polygons</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_9 row_style_1 css3_grid_row_9_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polylines</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_10 row_style_3 css3_grid_row_10_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Different Maps Type</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_11 row_style_1 css3_grid_row_11_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Locations</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_12 row_style_3 css3_grid_row_12_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Icons</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_13 row_style_1 css3_grid_row_13_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Shortcode Wizard</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_14 row_style_3 css3_grid_row_14_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Location</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_15 row_style_1 css3_grid_row_15_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Marker</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_16 row_style_3 css3_grid_row_16_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polygons</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_17 row_style_1 css3_grid_row_17_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Height/Width</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_18 row_style_3 css3_grid_row_18_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polylines</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_19 row_style_1 css3_grid_row_19_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Zoom Level</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_20 row_style_3 css3_grid_row_20_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Controls</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_21 row_style_1 css3_grid_row_21_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Widgets Map</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_22 row_style_3 css3_grid_row_22_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Themes</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_23 row_style_1 css3_grid_row_23_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Info Window</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_24 row_style_3 css3_grid_row_24_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Animation</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_25 row_style_1 css3_grid_row_25_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">KML Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_26 row_style_3 css3_grid_row_26_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Fusion Table Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_27 row_style_1 css3_grid_row_27_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Weather Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_28 row_style_3 css3_grid_row_28_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Traffic Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_29 row_style_1 css3_grid_row_29_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Transit Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_30 row_style_3 css3_grid_row_30_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bicycling Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_31 row_style_1 css3_grid_row_31_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Settings</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_32 row_style_3 css3_grid_row_32_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Scrolling Wheel</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_33 row_style_1 css3_grid_row_33_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Border</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_34 row_style_3 css3_grid_row_34_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Responsive Map</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_35 row_style_1 css3_grid_row_35_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Layers</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_36 row_style_3 css3_grid_row_36_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Advance Settings</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_37 row_style_1 css3_grid_row_37_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Engine Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_38 row_style_3 css3_grid_row_38_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Panorama Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_39 row_style_1 css3_grid_row_39_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Street View</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_40 row_style_3 css3_grid_row_40_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Cluster</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_41 row_style_1 css3_grid_row_41_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Directions</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_42 row_style_3 css3_grid_row_42_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bulk Deletion</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_43 row_style_1 css3_grid_row_43_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Circle Overlay</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_44 footer_row css3_grid_row_44_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><a
														href="/shop/wp-google-maps-bank/wp-google-maps-bank-pro-edition/"
														class="sign_up sign_up_orange radius3">Order Now!</a></span></span></li>
										</ul>
									</div>
									<div class="column_4 column_4_responsive" style="width: 15.5%;">
										<div class="column_ribbon ribbon_style2_hot"></div>
										<ul>
											<li
												class="css3_grid_row_0 header_row_1 align_center css3_grid_row_0_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><h2 class="col1">Developer</h2></span></span></li>
											<li
												class="css3_grid_row_1 header_row_2 css3_grid_row_1_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span
														class="css3_grid_tooltip"><span>You just need to pay for
																once for life time.</span>
														<h1 class="col1">
																&pound;<span>66</span>
															</h1>
															<h3 class="col1">one time</h3></span></span></span></li>
											<li
												class="css3_grid_row_2 row_style_4 css3_grid_row_2_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Domains per License</span>5</span></span></span></li>
											<li
												class="css3_grid_row_3 row_style_2 css3_grid_row_3_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Multisite Compatibility*</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_4 row_style_4 css3_grid_row_4_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Technical Support</span>1
															Year</span></span></span></li>
											<li
												class="css3_grid_row_5 row_style_2 css3_grid_row_5_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Updates</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_6 row_style_4 css3_grid_row_6_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Number of Maps</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_7 row_style_2 css3_grid_row_7_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Markers</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_8 row_style_4 css3_grid_row_8_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polygons</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_9 row_style_2 css3_grid_row_9_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polylines</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_10 row_style_4 css3_grid_row_10_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Different Maps Type</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_11 row_style_2 css3_grid_row_11_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Locations</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_12 row_style_4 css3_grid_row_12_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Icons</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_13 row_style_2 css3_grid_row_13_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Shortcode Wizard</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_14 row_style_4 css3_grid_row_14_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Location</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_15 row_style_2 css3_grid_row_15_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Marker</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_16 row_style_4 css3_grid_row_16_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polygons</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_17 row_style_2 css3_grid_row_17_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Height/Width</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_18 row_style_4 css3_grid_row_18_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polylines</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_19 row_style_2 css3_grid_row_19_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Zoom Level</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_20 row_style_4 css3_grid_row_20_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Controls</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_21 row_style_2 css3_grid_row_21_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Widgets Map</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_22 row_style_4 css3_grid_row_22_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Themes</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_23 row_style_2 css3_grid_row_23_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Info Window</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_24 row_style_4 css3_grid_row_24_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Animation</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_25 row_style_2 css3_grid_row_25_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">KML Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_26 row_style_4 css3_grid_row_26_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Fusion Table Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_27 row_style_2 css3_grid_row_27_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Weather Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_28 row_style_4 css3_grid_row_28_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Traffic Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_29 row_style_2 css3_grid_row_29_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Transit Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_30 row_style_4 css3_grid_row_30_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bicycling Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_31 row_style_2 css3_grid_row_31_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Settings</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_32 row_style_4 css3_grid_row_32_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Scrolling Wheel</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_33 row_style_2 css3_grid_row_33_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Border</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_34 row_style_4 css3_grid_row_34_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Responsive Map</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_35 row_style_2 css3_grid_row_35_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Layers</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_36 row_style_4 css3_grid_row_36_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Advance Settings</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_37 row_style_2 css3_grid_row_37_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Engine Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_38 row_style_4 css3_grid_row_38_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Panorama Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_39 row_style_2 css3_grid_row_39_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Street View</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_40 row_style_4 css3_grid_row_40_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Cluster</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_41 row_style_2 css3_grid_row_41_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Directions</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_42 row_style_4 css3_grid_row_42_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bulk Deletion</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_43 row_style_2 css3_grid_row_43_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Circle Overlay</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_44 footer_row css3_grid_row_44_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><a
														href="/shop/wp-google-maps-bank/wp-google-maps-bank-developer-edition/"
														class="sign_up sign_up_orange radius3">Order Now!</a></span></span></li>
										</ul>
									</div>
									<div class="column_1 column_5_responsive" style="width: 15.5%;">
										<div class="column_ribbon ribbon_style2_save"></div>
										<ul>
											<li
												class="css3_grid_row_0 header_row_1 align_center css3_grid_row_0_responsive radius5_topright"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><h2 class="col1">Extended</h2></span></span></li>
											<li
												class="css3_grid_row_1 header_row_2 css3_grid_row_1_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span
														class="css3_grid_tooltip"><span>You just need to pay for
																once for life time.</span>
														<h1 class="col1">
																&pound;<span>577</span>
															</h1>
															<h3 class="col1">one time</h3></span></span></span></li>
											<li
												class="css3_grid_row_2 row_style_3 css3_grid_row_2_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Domains per License</span>50</span></span></span></li>
											<li
												class="css3_grid_row_3 row_style_1 css3_grid_row_3_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Multisite Compatibility*</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_4 row_style_3 css3_grid_row_4_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Technical Support</span>1
															Year</span></span></span></li>
											<li
												class="css3_grid_row_5 row_style_1 css3_grid_row_5_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Updates</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_6 row_style_3 css3_grid_row_6_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Number of Maps</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_7 row_style_1 css3_grid_row_7_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Markers</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_8 row_style_3 css3_grid_row_8_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polygons</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_9 row_style_1 css3_grid_row_9_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Polylines</span>Unlimited</span></span></span></li>
											<li
												class="css3_grid_row_10 row_style_3 css3_grid_row_10_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Different Maps Type</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_11 row_style_1 css3_grid_row_11_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Locations</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_12 row_style_3 css3_grid_row_12_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Icons</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_13 row_style_1 css3_grid_row_13_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Shortcode Wizard</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_14 row_style_3 css3_grid_row_14_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Location</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_15 row_style_1 css3_grid_row_15_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Marker</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_16 row_style_3 css3_grid_row_16_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polygons</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_17 row_style_1 css3_grid_row_17_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Height/Width</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_18 row_style_3 css3_grid_row_18_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Polylines</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_19 row_style_1 css3_grid_row_19_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Zoom Level</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_20 row_style_3 css3_grid_row_20_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Controls</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_21 row_style_1 css3_grid_row_21_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Widgets Map</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_22 row_style_3 css3_grid_row_22_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Themes</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_23 row_style_1 css3_grid_row_23_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Info Window</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_24 row_style_3 css3_grid_row_24_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Animation</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_25 row_style_1 css3_grid_row_25_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">KML Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_26 row_style_3 css3_grid_row_26_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Fusion Table Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_27 row_style_1 css3_grid_row_27_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Weather Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_28 row_style_3 css3_grid_row_28_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Traffic Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_29 row_style_1 css3_grid_row_29_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Transit Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_30 row_style_3 css3_grid_row_30_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bicycling Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_31 row_style_1 css3_grid_row_31_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Plugin Settings</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_32 row_style_3 css3_grid_row_32_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Scrolling Wheel</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_33 row_style_1 css3_grid_row_33_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Border</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_34 row_style_3 css3_grid_row_34_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Responsive Map</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_35 row_style_1 css3_grid_row_35_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Layers</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_36 row_style_3 css3_grid_row_36_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Manage Advance Settings</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_37 row_style_1 css3_grid_row_37_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Map Engine Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_38 row_style_3 css3_grid_row_38_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Panorama Layer</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_39 row_style_1 css3_grid_row_39_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Street View</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_40 row_style_3 css3_grid_row_40_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Marker Cluster</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_41 row_style_1 css3_grid_row_41_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Directions</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_42 row_style_3 css3_grid_row_42_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Bulk Deletion</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_43 row_style_1 css3_grid_row_43_responsive align_center"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><span><span
															class="css3_hidden_caption">Circle Overlay</span><img
															src="http://tech-banker.com/wp-content/plugins/css3_web_pricing_tables_grids/img/tick_10.png"
															alt="yes"></span></span></span></li>
											<li
												class="css3_grid_row_44 footer_row css3_grid_row_44_responsive"><span
												class="css3_grid_vertical_align_table"><span
													class="css3_grid_vertical_align"><a
														href="/shop/wp-google-maps-bank/wp-google-maps-bank-extended-edition/"
														class="sign_up sign_up_orange radius3">Order Now!</a></span></span></li>
										</ul>
									</div>
								</div>
								<div class="gap" style="line-height: 20px; height: 20px;"></div>
								<div class="wpb_text_column wpb_content_element ">
									<div class="wpb_wrapper">
										<strong><u>NOTE FOR MULTISITE* :</u></strong> Allows you to use this
										Plugin with network of sites / Multisites WordPress. But you
										need to have separate license for each Installation.
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
<?php
	}
}
?>
