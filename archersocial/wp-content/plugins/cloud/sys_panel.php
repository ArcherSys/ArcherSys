<?php

	function wpcloud_sys_panel() {
	
		echo '<div class="wrap"><h2>Cloud System Debug</h2>';

		echo 'Getting php.ini<br/>';
		echo 'max_upload: ' . (int)(ini_get('upload_max_filesize')) . '<br/>';
		echo 'max_post: ' . (int)(ini_get('post_max_size')) . '<br/>';
		echo 'memory_limit: ' . (int)(ini_get('memory_limit')) . '<br/>';
		echo 'upload_mb: ' . min($max_upload, $max_post, $memory_limit) . '<hr>';
		
		echo 'Starting System Checkup...<br/>';
		

		$dir = ABSPATH . 'cloud';
		$file = $dir . '/index.php';

		echo 'folder_exist /cloud --> ';
		if(is_dir($dir)) {
			echo '<font style="color:green;font-weight:bold;">YES</font>';
		} else {
			echo '<font style="color:red;font-weight:bold;">ERROR</font>';
		}
		echo '<br/>';
		
		echo 'folder_writeable /cloud --> ';
		if (is_writeable($dir)) {
			echo '<font style="color:green;font-weight:bold;">YES</font>';
		} else {
			echo '<font style="color:red;font-weight:bold;">ERROR</font>';
		}
		echo '<br/>';

		echo 'file_exist /index.php --> ';
		if (file_exists($dir . '/index.php')) {
			echo '<font style="color:green;font-weight:bold;">YES</font>';
		} else {
			echo '<font style="color:red;font-weight:bold;">ERROR</font>';
		}
		echo '<br/>';
	
		echo 'is_reachable /cloud/index.php --> ';
		$urlcheck = get_site_url() . '/cloud/index.php';
		$agent = "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; pt-pt) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27";
		if(is_callable('curl_init')){
			$ch=curl_init();
			curl_setopt ($ch, CURLOPT_URL,$urlcheck );
			curl_setopt($ch, CURLOPT_USERAGENT, $agent);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt ($ch,CURLOPT_VERBOSE,false);
			curl_setopt($ch, CURLOPT_TIMEOUT, 5);
			curl_exec($ch);
			$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
		 
			if($httpcode==200) {
				echo '<font style="color:green;font-weight:bold;">YES [200]</font>';
			} else if($httpcode==500) {
				echo '<font style="color:red;font-weight:bold;">ERROR 500</font>';
				$headers = get_headers($urlcheck);
				echo ' - ' . $headers[0];
			} else {
				echo '<font style="color:red;font-weight:bold;">ERROR' . $httpcode . '</font>';
				$headers = get_headers($urlcheck);
				echo ' - ' . $headers[0];
			}
		} else {
			echo '<font style="color:red;font-weight:bold;">(curl_init_missing) - check skip! warning...</font>';
		}
		echo '<br/>';
		
		echo '<hr>';
		echo 'Starting Users folders diagnostic...<br/><hr>';
		
		$blogusers = get_users('orderby=ID' ) ;
		
	foreach ( $blogusers as $user ) {
		echo '<strong>' . $user->ID . '</strong> - ' . $user->display_name . ' (' . $user->user_login . ')<br/>';
		echo 'metavalue: >' . get_user_meta($user->ID,'wpcloud_user_quota',true) . '< || folder_exist ';
		if (directory_exist($user->ID)) {
			echo 'true';
		} else {
			echo 'false';
		}
		echo '<br/>';
		echo 'used space: ' . wpcloud_calc_used_space($user->ID) . ' || user space: ' . wpcloud_calc_user_space($user->ID) . ' || percentage: ' . wpcloud_calc_used_percentage($user->ID) . '%';
		echo '<hr>';
	}
		
		echo '<hr>TOTAL USED SPACE: <strong>' . wpcloud_calc_total(false) . '</strong><br/>';
		echo 'POTENTIAL USABLE SPACE: <strong>' . wpcloud_calc_total(true) . '</strong><br/>';
		echo 'TOTAL SPACE: <strong>' . (int)(disk_total_space("/")/1000000000) . 'GB</strong></br/>';
	}

?>