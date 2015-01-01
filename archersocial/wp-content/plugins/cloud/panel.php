<?php

	function wp_cloud_panel() {

	echo '<div class="wrap">
	<h2>Dashboard</h2>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<a class="welcome-panel-close" href="admin.php?page=wpcloud_settings">Settings</a>
			<h3>Welcome to WP Cloud</h3>
			<p class="about-description">Here are some statistics of the entire website for you:</p>
			<div class="welcome-panel-column-container">
				<div class="welcome-panel-column">
					<h4>Overral usage</h4>
		<div id="canvas-holder" style="width:150px;height:150px;">
			<canvas id="chart-area" width="150" height="150"></canvas>
			<canvas id="legend-area" width="150" height="150"></canvas>
		</div>
				</div>
				<div class="welcome-panel-column">
					<h4>Nerdy Statistics</h4>
						<p>Coming soon...</p>
				</div>
				<div class="welcome-panel-column welcome-panel-last">
					<h4>Most Active Users</h4>
						<p>Coming soon...</p>
				</div>
			</div>
			<hr>
			<p>You can manage your files from <a href="' . get_site_url() . '/cloud" title="Cloud"><strong>' . get_site_url() . '/cloud</strong></a></p>
		</div>
	</div>';
		
		echo do_shortcode('[cloud]');
				echo do_shortcode('[cloud_upload]');
			
		echo '<script src="'. WP_PLUGIN_URL . '/cloud/includes/Chart.js"></script>


	<script>

		var doughnutData = [
				{
					value:' . wpcloud_calc_total(false) . ',
					color:"#F7464A",
					highlight: "#FF5A5E",
					label: "Used space"
				},
				{
					value:'. (wpcloud_calc_total(true)-wpcloud_calc_total(false)) . ',
					color: "#46BFBD",
					highlight: "#5AD3D1",
					label: "Allocable cloud space"
				}

			];

			window.onload = function(){
				var ctx = document.getElementById("chart-area").getContext("2d");
				window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {responsive : true});
				var ctx = document.getElementById("legend-area");
				window.myDoughnut = new Chart(ctx).generateLegend();
			};



	</script>';
		
		echo '</div>';
	}

?>