<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?>

<?php if ((is_string($tmp=(isset($this->scope["MAINNAV"]) ? $this->scope["MAINNAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
        <div id="main-nav" class="<?php if ((is_string($tmp=(isset($this->scope["ADMIN"]) ? $this->scope["ADMIN"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["INSTITUTIONALADMIN"]) ? $this->scope["INSTITUTIONALADMIN"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["STAFF"]) ? $this->scope["STAFF"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["INSTITUTIONALSTAFF"]) ? $this->scope["INSTITUTIONALSTAFF"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

if ((is_string($tmp=(isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>dropdown-adminnav <?php 
}
else {
?>adminnav <?php 
}

}?>main-nav">
            <ul id="<?php if ((is_string($tmp=(isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>dropdown-nav<?php 
}
else {
?>nav<?php 
}?>">
<?php $_fh7_data = (is_string($tmp=(isset($this->scope["MAINNAV"]) ? $this->scope["MAINNAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isArray($_fh7_data) === true){foreach ($_fh7_data as $this->scope['item']){/* -- foreach start output */?><li class="<?php if ((is_string($tmp=(isset($this->scope["item"]["path"]) ? $this->scope["item"]["path"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
echo (is_string($tmp=$this->scope["item"]["path"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}
else {?>dashboard<?php }
if ((is_string($tmp=(isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?> selected<?php }
if ((is_string($tmp=(isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?> dropdown-nav-home<?php }?>"><span><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((is_string($tmp=(isset($this->scope["item"]["accesskey"]) ? $this->scope["item"]["accesskey"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?> accesskey="<?php echo (is_string($tmp=$this->scope["item"]["accesskey"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php }?> class="<?php if ((is_string($tmp=(isset($this->scope["item"]["path"]) ? $this->scope["item"]["path"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
echo (is_string($tmp=$this->scope["item"]["path"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
}
else {?>dashboard<?php }?>"><?php if ((is_string($tmp=(isset($this->scope["item"]["accessibletitle"]) ? $this->scope["item"]["accessibletitle"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && ! (is_string($tmp=(isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?><span aria-hidden="true" role="presentation"><?php }
echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["item"]["accessibletitle"]) ? $this->scope["item"]["accessibletitle"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && ! (is_string($tmp=(isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?></span> <span class="accessible-hidden">(<?php echo (is_string($tmp=$this->scope["item"]["accessibletitle"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)</span><?php }
if ((is_string($tmp=(isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && (is_string($tmp=(isset($this->scope["item"]["submenu"]) ? $this->scope["item"]["submenu"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?> <span class="accessible-hidden">(<?php echo Dwoo_Plugin_str($this, 'dropdownmenu', 'mahara', null, null, null, null, null);?>)</span><?php }?></a></span><?php if ((is_string($tmp=(isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
if ((is_string($tmp=(isset($this->scope["item"]["submenu"]) ? $this->scope["item"]["submenu"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?><ul class="dropdown-sub"><?php $_fh6_data = (is_string($tmp=(isset($this->scope["item"]["submenu"]) ? $this->scope["item"]["submenu"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isArray($_fh6_data) === true){foreach ($_fh6_data as $this->scope['subitem']){/* -- foreach start output */?><li<?php if ((is_string($tmp=(isset($this->scope["subitem"]["selected"]) ? $this->scope["subitem"]["selected"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?> class="selected"<?php }?>><span><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["subitem"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((is_string($tmp=(isset($this->scope["subitem"]["accesskey"]) ? $this->scope["subitem"]["accesskey"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?> accesskey="<?php echo (is_string($tmp=$this->scope["subitem"]["accesskey"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php }?>><?php echo (is_string($tmp=$this->scope["subitem"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></span></li><?php /* -- foreach end output */}}?><div class="cl"></div></ul><?php }
}?></li><?php /* -- foreach end output */}}
if ((is_string($tmp=(isset($this->scope["ADMIN"]) ? $this->scope["ADMIN"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["INSTITUTIONALADMIN"]) ? $this->scope["INSTITUTIONALADMIN"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["STAFF"]) ? $this->scope["STAFF"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["INSTITUTIONALSTAFF"]) ? $this->scope["INSTITUTIONALSTAFF"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?><li class="returntosite"><span><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" accesskey="h" class="return-site"><?php echo Dwoo_Plugin_str($this, "returntosite", 'mahara', null, null, null, null, null);?></a></span></li><?php }
elseif ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->get('admin') : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?><li class="siteadmin"><span><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/" accesskey="a" class="admin-site"><?php echo Dwoo_Plugin_str($this, "administration", 'mahara', null, null, null, null, null);?></a></span></li><?php }
elseif ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_institutional_admin() : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?><li class="instituteadmin"><span><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/search.php" accesskey="a" class="admin-user"><?php echo Dwoo_Plugin_str($this, "administration", 'mahara', null, null, null, null, null);?></a></span></li><?php }
elseif ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->get('staff') : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?><li class="siteinfo"><span><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/search.php" accesskey="a" class="admin-user"><?php echo Dwoo_Plugin_str($this, "siteinformation", 'mahara', null, null, null, null, null);?></a></span></li><?php }
elseif ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_institutional_staff() : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?><li class="instituteinfo"><span><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/search.php" accesskey="a" class="admin-user"><?php echo Dwoo_Plugin_str($this, "institutioninformation", 'mahara', null, null, null, null, null);?></a></span></li><?php }?></ul>

        </div>
<?php if ((is_string($tmp=(isset($this->scope["DROPDOWNMENU"]) ? $this->scope["DROPDOWNMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
<?php 
}
else {
?>
        <div id="sub-nav">
<?php if ((is_string($tmp=(isset($this->scope["SELECTEDSUBNAV"]) ? $this->scope["SELECTEDSUBNAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <ul>
<?php $_fh8_data = (is_string($tmp=(isset($this->scope["SELECTEDSUBNAV"]) ? $this->scope["SELECTEDSUBNAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);if ($this->isArray($_fh8_data) === true){foreach ($_fh8_data as $this->scope['item']){/* -- foreach start output */?><li<?php if ((is_string($tmp=(isset($this->scope["item"]["selected"]) ? $this->scope["item"]["selected"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?> class="selected"<?php }?>><span><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((is_string($tmp=(isset($this->scope["item"]["accesskey"]) ? $this->scope["item"]["accesskey"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {?> accesskey="<?php echo (is_string($tmp=$this->scope["item"]["accesskey"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php }?>><?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></span></li><?php /* -- foreach end output */}}?></ul>
<?php 
}?>

            <div class="cb"></div>
        </div>
<?php 
}?>

<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>