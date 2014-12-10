<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((is_string($tmp=(isset($this->scope["sitedata"]["weekly"]) ? $this->scope["sitedata"]["weekly"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <div id="site-stats-graph">
      <img src="<?php echo (is_string($tmp=$this->scope["sitedata"]["weekly"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="" />
    </div>
<?php 
}?>

  <div class="site-stats-table">
    <div><strong><?php echo Dwoo_Plugin_str($this, 'siteinstalled', 'admin', null, null, null, null, null);?>:</strong> <?php echo (is_string($tmp=$this->scope["sitedata"]["installdate"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></div>
    <?php if ((is_string($tmp=(isset($this->scope["sitedata"]["users"]) ? $this->scope["sitedata"]["users"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <div><strong><?php echo Dwoo_Plugin_str($this, 'users', 'mahara', null, null, null, null, null);?>:</strong> <?php echo (is_string($tmp=$this->scope["sitedata"]["users"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?><br />
    <?php echo Dwoo_Plugin_str($this, 'activeusers', 'admin', null, null, null, null, null);?>: <?php echo (is_string($tmp=$this->scope["sitedata"]["usersloggedin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></div>
    <?php 
}?>

    <?php if ((is_string($tmp=(isset($this->scope["sitedata"]["groups"]) ? $this->scope["sitedata"]["groups"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <div><strong><?php echo Dwoo_Plugin_str($this, 'groups', 'mahara', null, null, null, null, null);?>:</strong> <?php echo (is_string($tmp=$this->scope["sitedata"]["groups"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></br />
    <?php echo (is_string($tmp=$this->scope["sitedata"]["strgroupmemberaverage"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></div>
    <?php 
}?>

    <?php if ((is_string($tmp=(isset($this->scope["sitedata"]["views"]) ? $this->scope["sitedata"]["views"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <div><strong><?php echo Dwoo_Plugin_str($this, 'Views', 'view', null, null, null, null, null);?>:</strong> <?php echo (is_string($tmp=$this->scope["sitedata"]["views"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?><br />
    <?php echo (is_string($tmp=$this->scope["sitedata"]["strviewsperuser"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></div>
    <?php 
}?>

    <div><strong><?php echo Dwoo_Plugin_str($this, 'databasesize', 'admin', null, null, null, null, null);?>:</strong> <?php echo display_size((is_string($tmp=(isset($this->scope["sitedata"]["dbsize"]) ? $this->scope["sitedata"]["dbsize"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?></div>
    <?php if ((is_string($tmp=(isset($this->scope["sitedata"]["diskusage"]) ? $this->scope["sitedata"]["diskusage"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <div><strong><?php echo Dwoo_Plugin_str($this, 'diskusage', 'admin', null, null, null, null, null);?>:</strong> <?php echo display_size((is_string($tmp=(isset($this->scope["sitedata"]["diskusage"]) ? $this->scope["sitedata"]["diskusage"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?></div>
    <?php 
}?>

    <div><strong><?php echo Dwoo_Plugin_str($this, 'maharaversion', 'admin', null, null, null, null, null);?>:</strong> <?php echo (is_string($tmp=$this->scope["sitedata"]["release"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["sitedata"]["strlatestversion"]) ? $this->scope["sitedata"]["strlatestversion"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> (<?php echo clean_html((isset($this->scope["sitedata"]["strlatestversion"]) ? $this->scope["sitedata"]["strlatestversion"]:null));?>)<?php 
}?></div>
    <div><strong><?php echo Dwoo_Plugin_str($this, 'Cron', 'admin', null, null, null, null, null);?>:</strong> <?php if ((is_string($tmp=(isset($this->scope["sitedata"]["cronrunning"]) ? $this->scope["sitedata"]["cronrunning"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo Dwoo_Plugin_str($this, 'runningnormally', 'admin', null, null, null, null, null);

}
else {

echo Dwoo_Plugin_str($this, 'cronnotrunning1', 'admin', null, null, null, null, null);

}?></div>
  </div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>