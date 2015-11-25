<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<?php if ((is_string($tmp=(isset($this->scope["candeleteself"]) ? $this->scope["candeleteself"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><div class="message deletemessage"><div class="deletebuttonwrap"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>account/delete.php" class="btn delete"><?php echo Dwoo_Plugin_str($this, 'deleteaccount', 'account', null, null, null, null, null);?></a></div></div><?php 
}?>

			<?php echo (isset($this->scope["form"]) ? $this->scope["form"] : null);?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>