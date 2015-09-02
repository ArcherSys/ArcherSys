<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>


<?php if ((is_string($tmp=(isset($this->scope["changepassword"]) ? $this->scope["changepassword"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
  <?php if ((is_string($tmp=(isset($this->scope["changeusername"]) ? $this->scope["changeusername"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <h1><?php echo Dwoo_Plugin_str($this, "chooseusernamepassword", 'mahara', null, null, null, null, null);?></h1>
            <p><?php echo Dwoo_Plugin_str($this, "chooseusernamepasswordinfo", 'mahara', null, (is_string($tmp=(isset($this->scope["sitename"]) ? $this->scope["sitename"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null);?></p>
  <?php 
}
else {
?>
            <h1><?php echo Dwoo_Plugin_str($this, "changepassword", 'mahara', null, null, null, null, null);?></h1>
            <p><?php echo Dwoo_Plugin_str($this, "changepasswordinfo", 'mahara', null, null, null, null, null);?></p>
  <?php 
}?>

            <?php if ((is_string($tmp=(isset($this->scope["loginasoverridepasswordchange"]) ? $this->scope["loginasoverridepasswordchange"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><div class="message"><?php echo (isset($this->scope["loginasoverridepasswordchange"]) ? $this->scope["loginasoverridepasswordchange"] : null);?></div><?php 
}?>

<?php 
}
else {
?>
			<h1><?php echo Dwoo_Plugin_str($this, 'requiredfields', 'auth', null, null, null, null, null);?></h1>
<?php 
}?>


			<?php echo (isset($this->scope["form"]) ? $this->scope["form"] : null);?>


<?php echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);?>


<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>