<?php
header("Content-Type: text/javascript");
echo "$(function(){";

 
  echo (isset($_GET["annotative-selector"])) ? "var ". $_GET["xannotator-variable"]." = $(\"".$_GET["annotative-selector"]."\").annotator();" : "var annotingham = $(\"#content\").annotator();";
 

echo ($_GET["xannotator-filters"] == "true") ? $_GET["xannotator-variable"].".annotator(\"addPlugin\", \"Filter\", {});" : null;


 

echo ($_GET["xannotator-tags"] == "true") ? $_GET["xannotator-variable"].".annotator(\"addPlugin\", \"Tags\", {});" : null;

echo ($_GET["xannotator-permissions"] == "true") ? $_GET["xannotator-variable"].".annotator(\"addPlugin\", \"Permissions\", {});" : null;

echo ($_GET["xannotator-documents"] == "true") ? $_GET["xannotator-variable"].".annotator(\"addPlugin\", \"Document\", {});" : null;
echo "});";


?>
