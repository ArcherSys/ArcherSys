<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!--[if IE 8 ]><html<?php if ((is_string($tmp=(isset($this->scope["LANGDIRECTION"]) ? $this->scope["LANGDIRECTION"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'rtl') {
?> dir="rtl"<?php 
}?> lang="<?php echo (is_string($tmp=$this->scope["LANGUAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="ie ie8"><![endif]-->
<!--[if IE 9 ]><html<?php if ((is_string($tmp=(isset($this->scope["LANGDIRECTION"]) ? $this->scope["LANGDIRECTION"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'rtl') {
?> dir="rtl"<?php 
}?> lang="<?php echo (is_string($tmp=$this->scope["LANGUAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="ie ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html<?php if ((is_string($tmp=(isset($this->scope["LANGDIRECTION"]) ? $this->scope["LANGDIRECTION"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'rtl') {
?> dir="rtl"<?php 
}?> lang="<?php echo (is_string($tmp=$this->scope["LANGUAGE"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><!--<![endif]-->
<?php echo Dwoo_Plugin_include($this, "header/head.tpl", null, null, null, '_root', null);?>

<body class="no-js">
<?php if ((is_string($tmp=(isset($this->scope["ADDITIONALHTMLTOPOFBODY"]) ? $this->scope["ADDITIONALHTMLTOPOFBODY"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo (isset($this->scope["ADDITIONALHTMLTOPOFBODY"]) ? $this->scope["ADDITIONALHTMLTOPOFBODY"] : null);

}?>

<?php if ((is_string($tmp=(isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || ! (is_string($tmp=(isset($this->scope["PRODUCTIONMODE"]) ? $this->scope["PRODUCTIONMODE"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><div class="sitemessages"><?php 
}?>

    <?php if ((is_string($tmp=(isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><div class="sitemessage"><img src="<?php echo Dwoo_Plugin_theme_url($this, 'images/failure.png', null);?>" alt=""><?php echo (is_string($tmp=$this->scope["masqueradedetails"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> <?php echo (isset($this->scope["becomeyouagain"]) ? $this->scope["becomeyouagain"] : null);?></div><?php 
}?>

    <?php if (! (is_string($tmp=(isset($this->scope["PRODUCTIONMODE"]) ? $this->scope["PRODUCTIONMODE"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><div class="sitemessage center"><?php echo Dwoo_Plugin_str($this, 'notproductionsite', 'error', null, null, null, null, null);?></div><?php 
}?>

    <?php if ((is_string($tmp=(isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><div class="sitemessage center"><?php if ((is_string($tmp=(isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'logindisabled') {

echo Dwoo_Plugin_str($this, 'siteclosedlogindisabled', 'mahara', null, "".(is_string($tmp=(isset($this->scope["WWWROOT"]) ? $this->scope["WWWROOT"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)."admin/upgrade.php", null, null, null);

}
else {

echo Dwoo_Plugin_str($this, 'siteclosed', 'mahara', null, null, null, null, null);

}?></div><?php 
}?>

    <?php if ((is_string($tmp=(isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><div id="switchwrap"><?php echo (isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null);?></div><?php 
}?>

<?php if ((is_string($tmp=(isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || ! (is_string($tmp=(isset($this->scope["PRODUCTIONMODE"]) ? $this->scope["PRODUCTIONMODE"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["SITECLOSED"]) ? $this->scope["SITECLOSED"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["SITETOP"]) ? $this->scope["SITETOP"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?></div><?php 
}?>

<div id="container">
    <div class="center"><a class="skiplink" href="#mainmiddle"><?php echo Dwoo_Plugin_str($this, 'skipmenu', 'mahara', null, null, null, null, null);?></a></div>
    <div id="loading-box"></div>
    <div id="top-wrapper">
        <div id="header"><h1 id="site-logo"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><img src="<?php echo (is_string($tmp=$this->scope["sitelogo"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["sitename"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"></a></h1>
<?php echo Dwoo_Plugin_include($this, "header/topright.tpl", null, null, null, '_root', null);?>

        </div>
<?php echo Dwoo_Plugin_include($this, "header/navigation.tpl", null, null, null, '_root', null);?>

        <div class="cb"></div>
    </div>
    <div id="mainmiddlewrap">
        <div id="mainmiddle">
            <div id="<?php if ((is_string($tmp=(isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

if ((is_string($tmp=(isset($this->scope["SIDEBLOCKS"]["right"]) ? $this->scope["SIDEBLOCKS"]["right"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>main-wrapper-narrow-right<?php 
}
else {
?>main-wrapper-narrow-left<?php 
}

}
else {
?>main-wrapper<?php 
}?>">
                    <div id="main-column" class="main-column<?php if ((is_string($tmp=(isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> main-column-narrow<?php 
}
if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'content') {
?> editcontent<?php 
}?>">
                    <div id="main-column-container">
                        <?php if($doCache) {
	echo '<dwoo:dynamic_'.$dynamicId.'><?php echo insert_messages();?></dwoo:dynamic_'.$dynamicId.'>';
} else {
	echo insert_messages();
}?>

<?php if (((is_string($tmp=(isset($this->scope["PAGEHEADING"]) ? $this->scope["PAGEHEADING"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {
?>
                       <h1><?php echo (is_string($tmp=$this->scope["PAGEHEADING"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["PAGEHELPNAME"]) ? $this->scope["PAGEHELPNAME"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><span class="page-help-icon"><?php echo (isset($this->scope["PAGEHELPICON"]) ? $this->scope["PAGEHELPICON"] : null);?></span><?php 
}?></h1>
<?php 
}?>


<?php if ((is_string($tmp=(isset($this->scope["SUBPAGENAV"]) ? $this->scope["SUBPAGENAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

if ((is_string($tmp=(isset($this->scope["SUBPAGETOP"]) ? $this->scope["SUBPAGETOP"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                       <?php echo Dwoo_Plugin_include($this, (is_string($tmp=(isset($this->scope["SUBPAGETOP"]) ? $this->scope["SUBPAGETOP"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, '_root', null);?>

<?php 
}?>

                       <div class="tabswrap">
                           <ul class="in-page-tabs">
<?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["SUBPAGENAV"]) ? $this->scope["SUBPAGENAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['item'])
	{
/* -- foreach start output */
?>
                               <li <?php if ((is_string($tmp=(isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>class="current-tab"<?php 
}?>><a <?php if ((is_string($tmp=(isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>class="current-tab" <?php 
}?>href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?><span class="accessible-hidden">(<?php echo Dwoo_Plugin_str($this, 'tab', 'mahara', null, null, null, null, null);
if ((is_string($tmp=(isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> <?php echo Dwoo_Plugin_str($this, 'selected', 'mahara', null, null, null, null, null);

}?>)</span></a></li>
<?php 
/* -- foreach end output */
	}
}?>

                           </ul>
                       </div>
                        <div class="subpage">
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>