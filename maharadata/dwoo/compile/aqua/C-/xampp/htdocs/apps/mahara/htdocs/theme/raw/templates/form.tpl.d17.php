<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

<?php if ((is_string($tmp=(isset($this->scope["pagedescription"]) ? $this->scope["pagedescription"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
  <p class="intro"><?php echo (is_string($tmp=$this->scope["pagedescription"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></p>
<?php 
}
elseif ((is_string($tmp=(isset($this->scope["pagedescriptionhtml"]) ? $this->scope["pagedescriptionhtml"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
  <?php echo (isset($this->scope["pagedescriptionhtml"]) ? $this->scope["pagedescriptionhtml"] : null);?>

<?php 
}?>

<?php echo (isset($this->scope["form"]) ? $this->scope["form"] : null);?>

<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);
 /* end template body */
return $this->buffer . ob_get_clean();
?>