<?php
    add_action('init', 'wpcloud_handler');
    
    function wpcloud_handler() {
    
        //Formats:
        // /?cloud=upload&redirect=$url
        // /?cloud=delete&file=$name&redirect=$url
        if (!isset($_GET['cloud'])) {
            return;
        } else if ($_GET['cloud'] == 'upload') {
            wpcloud_upload();
            wpcloud_redirect($_GET['redirect']);
        } else if ($_GET['cloud'] == 'delete') {
            wpcloud_delete($_GET['file']);
            wpcloud_redirect($_GET['redirect']);
        } else {
            die('Plugin error - WPCLOUD');
        }
        
    }
    
    function wpcloud_upload() {
        $upload_directory = ABSPATH . 'cloud/' . get_current_user_id() . '/';
        
        if (!(file_exists($upload_directory))) {
            mkdir(ABSPATH . 'cloud/' . get_current_user_id(), 0775, true);
	}
		
	//Check for allowed extension
	$temp1 = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp1);
	if (!in_array($extension, getAllowedExtensions())) {
            die('File extension not supported');
	}
        
        $temp = explode(".", $_FILES["file"]["name"]);

	$size_MB = $_FILES["file"]["size"] / 1000000;
	$size_MB = substr($size_MB, 0, 4);  
	$can_UPLOAD = wpcloud_can_upload($size_MB, get_current_user_id());
		
	if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	} else if ($can_UPLOAD==false) {
            echo 'Allowed space terminated for this account';
	} else {
            if (file_exists($upload_directory . $_FILES["file"]["name"])) {
		echo $_FILES["file"]["name"] . " already exists.";
            } else {
		move_uploaded_file($_FILES["file"]["tmp_name"], $upload_directory . $_FILES["file"]["name"]);
	    }
	}
    }
    
    function wpcloud_delete($fileNameToDelete) {
	unlink(ABSPATH . 'cloud/' . get_current_user_id() . '/' . $fileNameToDelete);
    }
    
    function wpcloud_redirect($redirectTo) {
        echo '<script type="text/javascript">';
        echo 'window.location.href="http://'.$redirectTo.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
?>