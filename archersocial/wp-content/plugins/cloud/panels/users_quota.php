<?php

add_filter('manage_users_columns', 'wpcloud_add_user_quota_column');
function wpcloud_add_user_quota_column($columns) {
    $columns['user_quota'] = 'Cloud Usage';
    return $columns;
}
 
add_action('manage_users_custom_column',  'wpcloud_show_user_quota_column_content', 10, 3);
function wpcloud_show_user_quota_column_content($value, $column_name, $user_id) {
    $user = get_userdata( $user_id );
	if ( 'user_quota' == $column_name ) {
		if (directory_exist($user_id)) {
			return '<strong>' . wpcloud_calc_used_percentage($user_id) . '%</strong> of ' . wpcloud_calc_user_space($user_id) . ' MB';
		} else {
			return '<strong><acronym title="Inactive (directory hasn\'t been created yet)">Inactive</acronym></strong> of ' . wpcloud_calc_user_space($user_id) . ' MB';
		}
	}
    return $value;
}
?>