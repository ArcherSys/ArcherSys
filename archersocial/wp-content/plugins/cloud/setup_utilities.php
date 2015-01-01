<?php

function wpcloud_generate_users_meta() {

	$blogusers = get_users();

	foreach ( $blogusers as $user ) {
		$has_meta = get_user_meta($blogusers->ID,'wpcloud_user_quota',true);
		if (!($hasmeta)) {
			add_user_meta( $blogusers->ID, 'wpcloud_user_quota', '2');
		}
	}
	
}

function get_directory_from_id($user_id) {
	return ABSPATH . 'cloud/' . $user_id;
}

function directory_exist($user_id) {
	return file_exists(get_directory_from_id($user_id));
}
function wpcloud_format_size($file, $only_MB) {

	$bytes = filesize($file);
	if ($only_MB) {
		return round($bytes / 1048576, 2);
	}
	if ($bytes < 1024) return $bytes.' B';
	elseif ($bytes < 1048576) return round($bytes / 1024, 2).' KB';
	elseif ($bytes < 1073741824) return round($bytes / 1048576, 2).' MB';
	elseif ($bytes < 1099511627776) return round($bytes / 1073741824, 2).' GB';
	else return round($bytes / 1099511627776, 2).' TB';
}

function wpcloud_calc_total($potential) { //$potential = true -> Calc potential space allocated for all users. False -> Calcolate used space
	
	$blogusers = get_users('orderby=ID' ) ;
	
	$used_total = 0;
	$potential_total = 0;
	foreach ( $blogusers as $user ) {
		$used_total += wpcloud_calc_used_space($user->ID);
		$potential_total += wpcloud_calc_user_space($user->ID);
	}
	
	if ($potential) {
		return $potential_total;
	} else {
		return $used_total;	
	}
	
}

function wpcloud_calc_used_space($user_id) {

	if (!file_exists(get_directory_from_id($user_id))) { return '0';}
	
	$used_MB = 0;
	$dir = ABSPATH . 'cloud/' . $user_id;
	
	if ($handle = opendir($dir)) {

    while (false !== ($entry = readdir($handle))) {
		
        if ($entry != "." && $entry != "..") {
			$file = $dir . '/' . $entry;
			$used_MB = $used_MB + wpcloud_format_size($file, true);			
        }
    }

    closedir($handle);
	return $used_MB;

	}
}

function wpcloud_calc_used_percentage($user_id) {
	if (get_option('wpcloud_default_quota')==0) { return '0'; } else if (get_option('wpcloud_default_quota')==1) { return '∞'; }
	$used_MB = wpcloud_calc_used_space($user_id);
	$total_MB = wpcloud_calc_user_space($user_id);
	$percentage = (100 * $used_MB) / $total_MB;
        $percentage = substr($percentage, 0, 4);  
	return $percentage;
	
}

function wpcloud_calc_user_space($user_id) { // Prende in entrata un ID utente e ritorna lo spazio disponibile, in (int)
	$quota = get_user_meta($user_id,'wpcloud_user_quota',true);
	switch ($quota) {
		case null:
			return get_option('wpcloud_default_quota');
			break;
		case 0:
			return '0';
			break;
		case 1:
			return '10000';
			break;
		default:
			return $quota;
			break;
	}
}

function wpcloud_can_upload($filesize, $user_id) {
    $spazio_utilizzato = wpcloud_calc_used_space($user_id);
    $spazio_totale = wpcloud_calc_user_space($user_id);
    if ($spazio_totale == 0) { die('Account not enabled'); }
    
    if ($spazio_utilizzato > $spazio_totale) { return false; }
        
    $quota_eccesso_perc = (100 + get_option( 'wpcloud_default_overlap' )) / 100;

    $quota_eccesso_perc = $spazio_totale * $quota_eccesso_perc;
    
    if ($spazio_utilizzato + $filesize < $quota_eccesso_perc) {
        return true;
    }
    return false;
}

function getMimeType( $filename ) {
        $realpath = realpath( $filename );
        if ( $realpath
                && function_exists( 'finfo_file' )
                && function_exists( 'finfo_open' )
                && defined( 'FILEINFO_MIME_TYPE' )
        ) {
                // Use the Fileinfo PECL extension (PHP 5.3+)
                return finfo_file( finfo_open( FILEINFO_MIME_TYPE ), $realpath );
        }
        if ( function_exists( 'mime_content_type' ) ) {
                // Deprecated in PHP 5.3
                return mime_content_type( $realpath );
        }
        return false;
}

function getAllowedExtensions() {
	$allowedExts = array(
			     "gif", "jpeg", "jpg", "png",
			     "doc", "docx",
			     "pdf",
			     "odt", "ods",
			     "zip"
			     );
	return $allowedExts;
}
?>