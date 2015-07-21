<?php

function wpcloud_settings_panel() {
	if( get_option( 'wpcloud_default_quota' ) == null ) {
		register_setting( 'wpcloud_options_group', 'wpcloud_default_quota', 'intval');
		update_option( 'wpcloud_default_quota', '10');
	}
	if( get_option( 'wpcloud_default_overlap' ) == null ) {
		register_setting( 'wpcloud_options_group', 'wpcloud_default_overlap', 'intval');
		update_option( 'wpcloud_default_overlap', '10');
	}

	if( get_option( 'wpcloud_custom_logo_url' ) == null ) {
		register_setting( 'wpcloud_options_group', 'wpcloud_custom_logo_url');
	}
	
	if(isset($_POST['Submit'])) {

		$get_wpcloud_default_quota = $_POST["wpcloud_default_quota_n"];
        update_option( 'wpcloud_default_quota', $get_wpcloud_default_quota);
		
		$get_wpcloud_default_overlap = $_POST["wpcloud_default_overlap_n"];
        update_option( 'wpcloud_default_overlap', $get_wpcloud_default_overlap);
        
            $get_wpcloud_custom_logo_url = $_POST["wpcloud_custom_logo_url_n"];
        update_option( 'wpcloud_custom_logo_url', $get_wpcloud_custom_logo_url);
	}
	
	echo '<div class="wrap">';
	
	include(plugin_dir_path(__FILE__) . 'includes/htmlsettings.php');
			
	echo '<form style="float:left;width: 65%;" method="post" name="options" target="_self">';
	settings_fields( 'wpcloud_option_group' );
	
	echo '<table class="form-table"><tbody>';
	
	echo '<tr>';
	echo '<th><label>Default User Quota</label></th>';
	echo '<td><input type="number" min="0" name="wpcloud_default_quota_n" value="';
	echo get_option('wpcloud_default_quota');
	echo '" class="regular-text">';
	echo '<br/><span class="description"> Default cloud quota for new users. Accepting int (>= 0)</span></td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<th><label>Default Overlaps Percentage</label></th>';
	echo '<td><input type="number" min="0" max="100" name="wpcloud_default_overlap_n" value="';
	echo get_option('wpcloud_default_overlap');
	echo '" class="regular-text">';
	echo '<br/><span class="description"> Default overlap percentage (default 10). Accepting int (0 to 100)</span></td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<th><label>Front-end logo</label></th>';
	echo '<td><input type="text" name="wpcloud_custom_logo_url_n" value="';
	echo get_option('wpcloud_custom_logo_url');
	echo '" class="regular-text">';
	echo '<br/><span class="description"> Custom Logo for front-end panel</span></td>';
	echo '</tr>';
	
	echo '</tbody></table>';
	
	echo '<p class="submit"><input type="submit"  class="button-primary" name="Submit" value="Update" /></p>
		</form>';
		
	echo '</div>';
}
?>