<?php
/* template head */
if (function_exists('Dwoo_Plugin_display_default_name')===false)
	$this->getLoader()->loadPlugin('display_default_name');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div id="header-right">
        <div id="right-nav">
            <ul><?php if ((is_string($tmp=(isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?>      <li class="identity"><a href="<?php echo profile_url((is_string($tmp=(isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>"><?php echo Dwoo_Plugin_display_default_name($this, (is_string($tmp=(isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?></a></li><?php }
if ((is_string($tmp=(isset($this->scope["RIGHTNAV"]) ? $this->scope["RIGHTNAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
$_fh5_data = (is_string($tmp=(isset($this->scope["RIGHTNAV"]) ? $this->scope["RIGHTNAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isArray($_fh5_data) === true){foreach ($_fh5_data as $this->scope['item']){/* -- foreach start output */?><li class="<?php echo (is_string($tmp=$this->scope["item"]["path"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
echo $this->assignInScope((is_string($tmp=(isset($this->scope["item"]) ? $this->scope["item"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'MAINNAVSELECTED');?> selected<?php }
if ((is_string($tmp=(isset($this->scope["item"]["class"]) ? $this->scope["item"]["class"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?> <?php echo (is_string($tmp=$this->scope["item"]["class"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}?> bar-before"><a <?php if ((is_string($tmp=(isset($this->scope["item"]["accesskey"]) ? $this->scope["item"]["accesskey"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?>accesskey="<?php echo (is_string($tmp=$this->scope["item"]["accesskey"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" <?php }
if ((is_string($tmp=(isset($this->scope["item"]["aria"]) ? $this->scope["item"]["aria"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
$_fh4_data = (is_string($tmp=(isset($this->scope["item"]["aria"]) ? $this->scope["item"]["aria"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isArray($_fh4_data) === true){foreach ($_fh4_data as $this->scope['key']=>$this->scope['value']){/* -- foreach start output */?>aria-<?php echo (is_string($tmp=$this->scope["key"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>="<?php echo (is_string($tmp=$this->scope["value"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" <?php /* -- foreach end output */}}
}?>href="<?php if ((is_string($tmp=(isset($this->scope["item"]["wwwroot"]) ? $this->scope["item"]["wwwroot"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
echo (is_string($tmp=$this->scope["item"]["wwwroot"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}
else {
echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}
echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php if ((is_string($tmp=(isset($this->scope["item"]["title"]) ? $this->scope["item"]["title"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}
if ((is_string($tmp=(isset($this->scope["item"]["icon"]) ? $this->scope["item"]["icon"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?><img src="<?php echo (is_string($tmp=$this->scope["item"]["icon"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["item"]["alt"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php }
if (((is_string($tmp=(isset($this->scope["item"]["count"]) ? $this->scope["item"]["count"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) !== null)) {?><span class="navcount<?php if ((is_string($tmp=(isset($this->scope["item"]["countclass"]) ? $this->scope["item"]["countclass"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?> <?php echo (is_string($tmp=$this->scope["item"]["countclass"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}?>"><?php echo (is_string($tmp=$this->scope["item"]["count"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span><?php }?></a></li><?php /* -- foreach end output */}}?><li class="btn-logout bar-before"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>?logout" accesskey="l"><?php echo Dwoo_Plugin_str($this, "logout", 'mahara', null, null, null, null, null);?></a></li><?php }?>

<?php if (! (is_string($tmp=(isset($this->scope["nosearch"]) ? $this->scope["nosearch"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && ! (is_string($tmp=(isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && (is_string($tmp=(isset($this->scope["languageform"]) ? $this->scope["languageform"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                <li id="language">
                    <?php echo (isset($this->scope["languageform"]) ? $this->scope["languageform"] : null);?>

                </li>
<?php 
}?>

<?php if (! (is_string($tmp=(isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && ! (is_string($tmp=(isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && ! (is_string($tmp=(isset($this->scope["LOGINPAGE"]) ? $this->scope["LOGINPAGE"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>        <li id="loginlink"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>?login" accesskey="l"><?php echo Dwoo_Plugin_str($this, "login", 'mahara', null, null, null, null, null);?></a></li> <?php 
}?>

            </ul>
        </div>


<?php if (! (is_string($tmp=(isset($this->scope["nosearch"]) ? $this->scope["nosearch"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && ( (is_string($tmp=(isset($this->scope["LOGGEDIN"]) ? $this->scope["LOGGEDIN"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["publicsearchallowed"]) ? $this->scope["publicsearchallowed"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) )) {
?>        <?php echo header_search_form();

}?>


</div>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>