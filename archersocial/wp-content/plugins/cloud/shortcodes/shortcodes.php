<?php

	function wpcloud_cloud_func($atts) {
		extract(shortcode_atts(array('anno' => 'all'), $atts));
		ob_start();
		include(plugin_dir_path(__FILE__) . 'user_files_table.php');
		$atshortcode = ob_get_clean();
		return $atshortcode;
	}
	
	add_shortcode('cloud', 'wpcloud_cloud_func');
	
	function wpcloud_upload_func($atts) {
		ob_start();
		include(plugin_dir_path(__FILE__) . 'user_files_upload.php');
		$atshortcode = ob_get_clean();
		return $atshortcode;
	}
	
	add_shortcode('cloud_upload', 'wpcloud_upload_func');

?>