<?
$ps=($_GET[ps]+1)-1;
$page=($_GET[page]+1)-1;
$words=$_GET[words];
$Response=file_get_contents("http://www.clker.com/apis/tinymce.html?ps=$ps&page=$page&words=$words");
echo $Response;
?>