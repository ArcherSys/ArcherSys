<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?>
<div class="license">
    <a class="licenseicon" href="<?php echo (is_string($tmp=$this->scope["licenseurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
    <img alt="<?php echo Dwoo_Plugin_str($this, 'alttext', 'blocktype.creativecommons', null, null, null, null, null);?>" style="border-width:0" src="<?php echo (is_string($tmp=$this->scope["licenselogo"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" /></a>

    <div class="detail" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/">
        <p><?php echo (isset($this->scope["licensestatement"]) ? $this->scope["licensestatement"] : null);?></p>
        <p><?php echo (isset($this->scope["otherpermissions"]) ? $this->scope["otherpermissions"] : null);?></p>
    </div>

    <div class="cb"></div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>