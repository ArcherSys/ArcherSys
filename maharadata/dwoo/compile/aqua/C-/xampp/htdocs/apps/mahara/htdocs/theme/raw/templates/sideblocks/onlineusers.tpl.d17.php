<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_display_default_name')===false)
	$this->getLoader()->loadPlugin('display_default_name');
if (function_exists('Dwoo_Plugin_display_name')===false)
	$this->getLoader()->loadPlugin('display_name');
/* end template head */ ob_start(); /* template body */ ?><div class="sidebar-header">
    <h3><?php echo Dwoo_Plugin_str($this, "onlineusers", 'mahara', (is_string($tmp=(isset($this->scope["sbdata"]["count"]) ? $this->scope["sbdata"]["count"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);?></h3>
    <p id="lastminutes">(<?php echo Dwoo_Plugin_str($this, "lastminutes", 'mahara', (is_string($tmp=(isset($this->scope["sbdata"]["lastminutes"]) ? $this->scope["sbdata"]["lastminutes"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);?>)</p>
</div>
    <div class="sidebar-content">
        <ul class="cr">
<?php 
$_fh7_data = (is_string($tmp=(isset($this->scope["sbdata"]["users"]) ? $this->scope["sbdata"]["users"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh7_data) === true)
{
	foreach ($_fh7_data as $this->scope['user'])
	{
/* -- foreach start output */
?>
            <li><a href="<?php echo profile_url((is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>"><img src="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'profileiconurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["user"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'profileimagetext', 'mahara', null, Dwoo_Plugin_display_default_name($this, (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), null, null, null);?>" class="profile-icon-container"> <?php echo Dwoo_Plugin_display_name($this, (is_string($tmp=(isset($this->scope["user"]) ? $this->scope["user"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, false, false);?></a><?php if ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'loggedinfrom',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["user"]) ? $this->scope["user"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> (<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'loggedinfrom',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["user"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)<?php 
}?></li>
<?php 
/* -- foreach end output */
	}
}?>

        </ul>
    <p id="allonline"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>user/online.php"><?php echo Dwoo_Plugin_str($this, "allonline", 'mahara', null, null, null, null, null);?></a></p>
    </div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>