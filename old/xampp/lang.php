<?php
	include("lang/languages.php");
	while (list($key, $value) = each($languages))
	{
		if ($_SERVER['QUERY_STRING'] == $key)
		{
			$fp=fopen("lang.tmp","w");
			fwrite($fp,basename($key));
			fclose($fp);
			header("Location: index.php");
		}
	}
?>
