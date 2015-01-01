<?php
	
	$dir = get_directory_from_id(get_current_user_id());
	if (!directory_exist(get_current_user_id())) {
		echo 'Cloud space not activated yet.<br/><small>Please upload a file to generate your webspace...</small>';
	} else {
		if ($handle = opendir($dir)) {

		echo '<table style="width:100%">
			<table style="width:100%">
			<tr>
			  <th>File name</th>
			  <th>Size</th> 
			  <th>Last edit</th>
			  <th></th>
			</tr>';
		
		while (false !== ($entry = readdir($handle))) {
			
			if ($entry != "." && $entry != "..") {
				//Check file extension ==
				$temp = explode(".", $entry);
				$extension = end($temp);
				if (!in_array($extension, getAllowedExtensions())) {
					continue;
				}
				// ====
				
				$file = $dir . '/' . $entry;
				$file_url = get_site_url() . '/cloud/' . get_current_user_id() . '/' . $entry;
				
				echo '<tr>';
				echo '<td><a ';

				echo 'class="wpcloud-file mime-' . getMimeType($file) . '" ';
				echo 'href="' . $file_url . '" title="' . $entry . '">' . $entry . '</a></td>';
				echo '<td><small>' . wpcloud_format_size($file, false) . '</small></td>';
				echo '<td><small>' . date("j M Y", filemtime($file)) . '</small></td>';
				
				echo '<td><a onclick="if (!confirm(\'Are you sure?\')) return false;" href="' . get_site_url() . '/?cloud=delete&file=' . $entry . '&redirect=http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . '">';
				echo '<img src="' . WP_PLUGIN_URL . '/cloud/includes/delete.png' . '" />';
				echo '</a></td>';
				
				echo '</tr>';
			}
		}

		closedir($handle);
	}
}
?>
</table>