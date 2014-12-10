<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<p><?php echo Dwoo_Plugin_str($this, 'siteoptionspagedescription', 'admin', null, null, null, null, null);?></p>
<?php echo (isset($this->scope["siteoptionform"]) ? $this->scope["siteoptionform"] : null);?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>


<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>