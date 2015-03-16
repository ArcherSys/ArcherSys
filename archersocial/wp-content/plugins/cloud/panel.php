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
		<div id="gauge_div" style="width:280px; height: 140px; margin: 20px 50px;"></div>
				</div>
                <div class="welcome-panel-column">
		  <div id="columnchart_stacked" style="width: 600px; height: 200px;"></div>
				</div>
				<div class="welcome-panel-column welcome-panel-last">
        
				</div>
			</div>
			<hr>
			<p>You can manage your files from <a href="' . get_site_url() . '/cloud" title="Cloud"><strong>' . get_site_url() . '/cloud</strong></a></p>
		</div>
	</div>';
		
		echo do_shortcode('[cloud]');
				echo do_shortcode('[cloud_upload]');
			
		echo '<script type="text/javascript" src="https://www.google.com/jsapi"></script>';
            
        $engine1 = (int)((wpcloud_calc_total(false)/wpcloud_calc_total(true))*100);
            
        $spazio_libero = (int)(wpcloud_calc_free_hosting_space("/")/1000000000);
        $spazio_totale = (int)(disk_total_space("/")/1000000000);
        $spazio_usato = $spazio_totale - $spazio_libero;
        $engine2 = (int)(($spazio_usato/$spazio_totale)*100);
        
    echo '<script type="text/javascript"
        src="https://www.google.com/jsapi?autoload={"modules":[{"name":"visualization","version":"1","packages":["gauge"]}]}">
  </script>
  <script type="text/javascript">
  google.load("visualization", "1", {packages: ["gauge"]});
  google.setOnLoadCallback(drawGauge);

  var gaugeOptions = {min: 0, max: 100, yellowFrom: 50, yellowTo: 80,
    redFrom: 80, redTo: 100, minorTicks: 5};
  var gauge;

  function drawGauge() {
    gaugeData = new google.visualization.DataTable();
    gaugeData.addColumn("number", "cloud/a");
    gaugeData.addColumn("number", "hosting/a");
    gaugeData.addRows(2);
    gaugeData.setCell(0, 0, '.$engine1.');
    gaugeData.setCell(0, 1, '.$engine2.');

    gauge = new google.visualization.Gauge(document.getElementById("gauge_div"));
    gauge.draw(gaugeData, gaugeOptions);
  }
  </script>
  
  <script src="https://www.google.com/uds/api/visualization/1.1/b286575f41699923b257980af3c9fe9d/format+it,default+it,ui+it,corechart+it.I.js" type="text/javascript"></script>
  <script type="text/javascript">
    google.load("visualization", "1.1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ["Genre", "Used", "Free", "Over"],';
        
        $blogusers = get_users('orderby=ID' ) ;
		
        foreach ( $blogusers as $user )
        {
            if ( wpcloud_calc_used_space($user->ID) >= wpcloud_calc_user_space($user->ID) )
            {
                $used = 0;
                $free = 0;
                $over = wpcloud_calc_used_space($user->ID);
            } else {
                $used = wpcloud_calc_used_space($user->ID);
                $free = wpcloud_calc_user_space($user->ID) - $used;
                $over = 0;
            }
            echo '["'.$user->display_name.' ('.$user->ID.')", '.$used.', '.$free.', '.$over.'],';
        }
            echo '
      ]);

      var options = {
        bar: {groupWidth: "75%"},
        isStacked: true,
        colors: ["yellow", "green", "red"],
      };

      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_stacked"));
      chart.draw(data, options);
  }
  </script>
    ';
		
		echo '</div>';
	}

?>