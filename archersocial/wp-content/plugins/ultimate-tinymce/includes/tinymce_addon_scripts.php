<?php
	
	$file = dirname(__FILE__);
	$file = substr($file, 0, stripos($file, "ultimate-tinymce") );
	require( $file . "../../wp-load.php");
	

	$url = includes_url();
	echo '<script type="text/javascript" src="'.$url.'js/tinymce/tiny_mce_popup.js'.'"></script>';
	echo '<script type="text/javascript" src="'.$url.'js/tinymce/utils/mctabs.js'.'"></script>';
	echo '<script type="text/javascript" src="'.$url.'js/tinymce/utils/form_utils.js'.'"></script>';
	echo '<script type="text/javascript" src="'.$url.'js/tinymce/utils/validate.js'.'"></script>';
	echo '<script type="text/javascript" src="'.$url.'js/tinymce/utils/editable_selects.js'.'"></script>';


// Get root path or url
/*
function jwl_get_root_lite($mode, $break) {
   if ($mode === "url") {
      $out = 'http';
      if ($_SERVER["HTTPS"] === "on")
          $out .= "s";
      $out .= "://";
      if ($_SERVER["SERVER_PORT"] !== "80") {
         $out .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
      } else {
         $out .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
      }
   }
   elseif ($mode === "path") {
      $out = dirname(__FILE__);
   }
   $out = explode($break, $out);
   return $out[0];
}

$basedir = jwl_get_root_lite( "url", "wp-content")."wp-includes/js/tinymce/";
$urls = array('tiny_mce_popup', 'utils/mctabs', 'utils/form_utils', 'utils/validate', 'utils/editable_selects');
foreach ( $urls as $url ) {
	echo '<script type="text/javascript" src="'.$basedir.$url.'.js'.'"></script><br/>';
}
*/

?>