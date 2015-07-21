<?php

function jwl_export_group1() {
	if ( isset($_POST['jwl_utmce_export']) ) {
		$url = jwl_create_export_file_group1();
		if ($url) {
			define('PSURL', $url);
			function jwl_utmce_footer() {
				$export =  '<script type="text/javascript">
								document.location = \''.PSURL.'\';
							</script>';
				echo $export;
			}
			add_action('admin_footer', 'jwl_utmce_footer', 10000);

		} else {
			$export .= 'Error: '.$url;
		}
	} else {
		// Check if there is any old export files to delete
		$dir = wp_upload_dir();
		$upload_dir = $dir['basedir'] . '/';
		chdir($upload_dir);
		if (file_exists ( './jwl-utmce-export.zip' ) )
			unlink('./jwl-utmce-export.zip');
	}
}

function jwl_create_export_file_group1() {
	$snippets = serialize(get_option( 'jwl_options_group1' ));
	//$snippets = apply_filters( 'post_snippets_export', $snippets );
	$dir = wp_upload_dir();
	$upload_dir = $dir['basedir'] . '/';
	$upload_url = $dir['baseurl'] . '/';
	
	// Open a file stream and write the serialized options to it.
	if ( !$handle = fopen( $upload_dir.'jwl-utmce-export.cfg', 'w' ) )
		die();
	if ( !fwrite($handle, $snippets) ) 
		die();
	fclose($handle);

	// Create a zip archive
	require_once (ABSPATH . 'wp-admin/includes/class-pclzip.php');
	chdir($upload_dir);
	$zip = new PclZip('./jwl-utmce-export.zip');
	$zipped = $zip->create('./jwl-utmce-export.cfg');

	// Delete the snippet file
	unlink('./jwl-utmce-export.cfg');

	if (!$zipped)
		return false;
	
	return $upload_url.'jwl-utmce-export.zip'; 
}

function jwl_import_group1() {
	$import = '<br /><strong>'.__( 'Import', 'jwl-ultimate-tinymce' ).'</strong>';
	if ( !isset($_FILES['jwl_utmce_import_file']) || empty($_FILES['jwl_utmce_import_file']) ) {
		$import .= '<br />'.__( 'Import Buttons Group One Settings', 'jwl-ultimate-tinymce' ).'';
		$import .= '<form method="post" enctype="multipart/form-data">';
		$import .= '<input type="file" name="jwl_utmce_import_file"/>';
		$import .= '<input type="hidden" name="action" value="wp_handle_upload"/>';
		$import .= '<input type="submit" class="button" value="'.__( 'Import Settings', 'jwl-ultimate-tinymce' ).'"/>';
		$import .= '</form>';
		$import .= '<em>'.__('(Note: Reload page after import for settings to take affect)', 'jwl-ultimate-tinymce' ).'</em>';
	} else {
		$file = wp_handle_upload( $_FILES['jwl_utmce_import_file'] );
		
		if ( isset( $file['file'] ) && !is_wp_error($file) ) {
			require_once (ABSPATH . 'wp-admin/includes/class-pclzip.php');
			$zip = new PclZip( $file['file'] );
			$dir = wp_upload_dir();
			$upload_dir = $dir['basedir'] . '/';
			chdir($upload_dir);
			$unzipped = $zip->extract();

			if ( $unzipped[0]['stored_filename'] == 'jwl-utmce-export.cfg' && $unzipped[0]['status'] == 'ok') {
				// Delete the uploaded archive
				unlink($file['file']);

				$snippets = file_get_contents( $upload_dir.'jwl-utmce-export.cfg' );		// Returns false on failure, else the contents
				if ($snippets) {
					//$snippets = apply_filters( 'post_snippets_import', $snippets );
					update_option( 'jwl_options_group1', unserialize($snippets));
				}

				// Delete the snippet file
				unlink('./jwl-utmce-export.cfg');

				$import .= '<p><strong><span style="color:#009900;">'.__( 'Settings successfully imported.<br />Refresh page to see changes.').'</span></strong></p>';
			} else {
				$import .= '<p><strong><span style="color:#FF0000;">'.__( 'Settings could not be imported:').' '.__('Unzipping failed.').'</span></strong></p>';
			}
		} else {
			if ( $file['error'] || is_wp_error( $file ) )
				$import .= '<p><strong><span style="color:#FF0000;">'.__( 'Settings could not be imported:').' '.$file['error'].'</span></strong></p>';
			else
				$import .= '<p><strong><span style="color:#FF0000;">'.__( 'Settings could not be imported:').' '.__('Upload failed.').'</span></strong></p>';
		}
	} 
	return $import;
}


function jwl_export_group2() {
	if ( isset($_POST['jwl_utmce_export2']) ) {
		$url = jwl_create_export_file_group2();
		if ($url) {
			define('PSURL', $url);
			function jwl_utmce_footer2() {
				$export =  '<script type="text/javascript">
								document.location = \''.PSURL.'\';
							</script>';
				echo $export;
			}
			add_action('admin_footer', 'jwl_utmce_footer2', 10000);

		} else {
			$export .= 'Error: '.$url;
		}
	} else {
		// Check if there is any old export files to delete
		$dir = wp_upload_dir();
		$upload_dir = $dir['basedir'] . '/';
		chdir($upload_dir);
		if (file_exists ( './jwl-utmce-export2.zip' ) )
			unlink('./jwl-utmce-export2.zip');
	}
}

function jwl_create_export_file_group2() {
	$snippets = serialize(get_option( 'jwl_options_group2' ));
	//$snippets = apply_filters( 'post_snippets_export', $snippets );
	$dir = wp_upload_dir();
	$upload_dir = $dir['basedir'] . '/';
	$upload_url = $dir['baseurl'] . '/';
	
	// Open a file stream and write the serialized options to it.
	if ( !$handle = fopen( $upload_dir.'jwl-utmce-export2.cfg', 'w' ) )
		die();
	if ( !fwrite($handle, $snippets) ) 
		die();
	fclose($handle);

	// Create a zip archive
	require_once (ABSPATH . 'wp-admin/includes/class-pclzip.php');
	chdir($upload_dir);
	$zip = new PclZip('./jwl-utmce-export2.zip');
	$zipped = $zip->create('./jwl-utmce-export2.cfg');

	// Delete the snippet file
	unlink('./jwl-utmce-export2.cfg');

	if (!$zipped)
		return false;
	
	return $upload_url.'jwl-utmce-export2.zip'; 
}

function jwl_import_group2() {
	$import = '<br /><strong>'.__( 'Import', 'jwl-ultimate-tinymce' ).'</strong>';
	if ( !isset($_FILES['jwl_utmce_import_file2']) || empty($_FILES['jwl_utmce_import_file2']) ) {
		$import .= '<br />'.__( 'Import Buttons Group Two Settings', 'jwl-ultimate-tinymce' ).'';
		$import .= '<form method="post" enctype="multipart/form-data">';
		$import .= '<input type="file" name="jwl_utmce_import_file2"/>';
		$import .= '<input type="hidden" name="action" value="wp_handle_upload"/>';
		$import .= '<input type="submit" class="button" value="'.__( 'Import Settings', 'jwl-ultimate-tinymce' ).'"/>';
		$import .= '</form>';
		$import .= '<em>'.__('(Note: Reload page after import for settings to take affect)', 'jwl-ultimate-tinymce' ).'</em>';
	} else {
		$file = wp_handle_upload( $_FILES['jwl_utmce_import_file2'] );
		
		if ( isset( $file['file'] ) && !is_wp_error($file) ) {
			require_once (ABSPATH . 'wp-admin/includes/class-pclzip.php');
			$zip = new PclZip( $file['file'] );
			$dir = wp_upload_dir();
			$upload_dir = $dir['basedir'] . '/';
			chdir($upload_dir);
			$unzipped = $zip->extract();

			if ( $unzipped[0]['stored_filename'] == 'jwl-utmce-export2.cfg' && $unzipped[0]['status'] == 'ok') {
				// Delete the uploaded archive
				unlink($file['file']);

				$snippets = file_get_contents( $upload_dir.'jwl-utmce-export2.cfg' );		// Returns false on failure, else the contents
				if ($snippets) {
					//$snippets = apply_filters( 'post_snippets_import', $snippets );
					update_option( 'jwl_options_group2', unserialize($snippets));
				}

				// Delete the snippet file
				unlink('./jwl-utmce-export2.cfg');

				$import .= '<p><strong><span style="color:#009900;">'.__( 'Settings successfully imported.<br />Refresh page to see changes.').'</span></strong></p>';
			} else {
				$import .= '<p><strong><span style="color:#FF0000;">'.__( 'Settings could not be imported:').' '.__('Unzipping failed.').'</span></strong></p>';
			}
		} else {
			if ( $file['error'] || is_wp_error( $file ) )
				$import .= '<p><strong><span style="color:#FF0000;">'.__( 'Settings could not be imported:').' '.$file['error'].'</span></strong></p>';
			else
				$import .= '<p><strong><span style="color:#FF0000;">'.__( 'Settings could not be imported:').' '.__('Upload failed.').'</span></strong></p>';
		}
	}
	return $import;
}

?>