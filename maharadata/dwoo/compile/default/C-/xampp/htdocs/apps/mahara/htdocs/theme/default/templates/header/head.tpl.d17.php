<?php
/* template head */
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
/* end template head */ ob_start(); /* template body */ ?><head>
    <meta name="generator" content="Mahara <?php echo (is_string($tmp=$this->scope["SERIES"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> (https://mahara.org)" />
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8; IE=9; IE=10" />
    <meta property="og:title" content="<?php echo (is_string($tmp=$this->scope["PAGETITLE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
    <meta property="og:description" content="<?php echo (is_string($tmp=$this->scope["sitedescription4facebook"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
    <meta property="og:image" content="<?php echo (is_string($tmp=$this->scope["sitelogo4facebook"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
    <?php if (((is_string($tmp=(isset($this->scope["PAGEAUTHOR"]) ? $this->scope["PAGEAUTHOR"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?><meta name="author" content="<?php echo (is_string($tmp=$this->scope["PAGEAUTHOR"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php 
}?>

    <title><?php echo (is_string($tmp=$this->scope["PAGETITLE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></title>
    <script type="text/javascript">
    var config = {
        'theme': <?php echo (isset($this->scope["THEMELIST"]) ? $this->scope["THEMELIST"] : null);?>,
        'sesskey' : '<?php echo (is_string($tmp=$this->scope["SESSKEY"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>',
        'wwwroot': '<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>',
        'loggedin': <?php echo intval((is_string($tmp=$this->scope["USER"]->is_logged_in()) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>,
        'userid': <?php echo (is_string($tmp=$this->scope["USER"]->get('id')) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>,
        'mobile': <?php if ((is_string($tmp=(isset($this->scope["MOBILE"]) ? $this->scope["MOBILE"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>1<?php 
}
else {
?>0<?php 
}?>,
        'handheld_device': <?php if ((is_string($tmp=(isset($this->scope["HANDHELD_DEVICE"]) ? $this->scope["HANDHELD_DEVICE"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>1<?php 
}
else {
?>0<?php 
}?>,
        'cc_enabled': <?php echo intval((is_string($tmp=(isset($this->scope["CC_ENABLED"]) ? $this->scope["CC_ENABLED"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>

    };
    </script>
    <?php echo (isset($this->scope["STRINGJS"]) ? $this->scope["STRINGJS"] : null);?>

<?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["JAVASCRIPT"]) ? $this->scope["JAVASCRIPT"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['script'])
	{
/* -- foreach start output */
?>
    <script type="text/javascript" src="<?php echo (is_string($tmp=$this->scope["script"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
<?php 
/* -- foreach end output */
	}
}?>

<?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["HEADERS"]) ? $this->scope["HEADERS"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh3_data) === true)
{
	foreach ($_fh3_data as $this->scope['header'])
	{
/* -- foreach start output */
?>
    <?php echo (isset($this->scope["header"]) ? $this->scope["header"] : null);?>

<?php 
/* -- foreach end output */
	}
}?>

<?php if (((is_string($tmp=(isset($this->scope["INLINEJAVASCRIPT"]) ? $this->scope["INLINEJAVASCRIPT"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?>
    <script type="text/javascript">
<?php echo (isset($this->scope["INLINEJAVASCRIPT"]) ? $this->scope["INLINEJAVASCRIPT"] : null);?>

    </script>
<?php 
}?>

<?php 
$_fh4_data = (is_string($tmp=(isset($this->scope["STYLESHEETLIST"]) ? $this->scope["STYLESHEETLIST"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh4_data) === true)
{
	foreach ($_fh4_data as $this->scope['cssurl'])
	{
/* -- foreach start output */
?>
    <link rel="stylesheet" type="text/css" href="<?php echo (is_string($tmp=$this->scope["cssurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
<?php 
/* -- foreach end output */
	}
}?>

    <link rel="stylesheet" type="text/css" href="<?php echo Dwoo_Plugin_theme_url($this, 'style/print.css', null);?>?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" media="print">
    <script type="text/javascript" src="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>js/css.js?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <link rel="shortcut icon" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>favicon.ico?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" type="image/vnd.microsoft.icon">
    <link rel="image_src" href="<?php echo (is_string($tmp=$this->scope["sitelogo"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
  <!-- Responsive design -->
        <script type="text/javascript" src="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>js/rd-nav.js?v=<?php echo (is_string($tmp=$this->scope["CACHEVERSION"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ((is_string($tmp=(isset($this->scope["ADDITIONALHTMLHEAD"]) ? $this->scope["ADDITIONALHTMLHEAD"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo (isset($this->scope["ADDITIONALHTMLHEAD"]) ? $this->scope["ADDITIONALHTMLHEAD"] : null);

}?>

<?php if ((is_string($tmp=(isset($this->scope["COOKIECONSENTCODE"]) ? $this->scope["COOKIECONSENTCODE"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo (isset($this->scope["COOKIECONSENTCODE"]) ? $this->scope["COOKIECONSENTCODE"] : null);

}?>

</head>
<?php if($doCache) {
	echo '<dwoo:dynamic_'.$dynamicId.'><?php echo flush();?></dwoo:dynamic_'.$dynamicId.'>';
} else {
	echo flush();
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>