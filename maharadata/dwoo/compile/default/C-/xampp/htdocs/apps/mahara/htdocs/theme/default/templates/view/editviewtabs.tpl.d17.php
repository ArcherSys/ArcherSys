<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div class="tabswrap">
    <h3 class="rd-tab-title"><a href="#"><?php echo Dwoo_Plugin_str($this, 'tabs', 'mahara', null, null, null, null, null);?><span class="rd-tab"></span></a></h3>
    <ul class="in-page-tabs">
        <?php if ((is_string($tmp=(isset($this->scope["edittitle"]) ? $this->scope["edittitle"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
        <li <?php if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'title') {
?> class="current-tab"<?php 
}?>>
            <a<?php if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'title') {
?> class="current-tab"<?php 
}?> href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/edit.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>&new=1<?php 
}?>">
                <?php echo Dwoo_Plugin_str($this, 'edittitleanddescription', 'view', null, null, null, null, null);?><span class="accessible-hidden">(<?php echo Dwoo_Plugin_str($this, 'tab', 'mahara', null, null, null, null, null);
if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'title') {
?> <?php echo Dwoo_Plugin_str($this, 'selected', 'mahara', null, null, null, null, null);

}?>)</span>
            </a>
        </li>
        <?php 
}?>

        <li <?php if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'layout') {
?> class="current-tab"<?php 
}?>>
            <a<?php if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'layout') {
?> class="current-tab"<?php 
}?> href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/layout.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>&new=1<?php 
}?>">
                <?php echo Dwoo_Plugin_str($this, 'editlayout', 'view', null, null, null, null, null);?><span class="accessible-hidden">(<?php echo Dwoo_Plugin_str($this, 'tab', 'mahara', null, null, null, null, null);
if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'layout') {
?> <?php echo Dwoo_Plugin_str($this, 'selected', 'mahara', null, null, null, null, null);

}?>)</span>
            </a>
        </li>
        <li <?php if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'content') {
?> class="current-tab"<?php 
}?>>
            <a<?php if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'content') {
?> class="current-tab"<?php 
}?> href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/blocks.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>&new=1<?php 
}?>">
                <?php echo Dwoo_Plugin_str($this, 'editcontent', 'view', null, null, null, null, null);?><span class="accessible-hidden">(<?php echo Dwoo_Plugin_str($this, 'tab', 'mahara', null, null, null, null, null);
if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'content') {
?> <?php echo Dwoo_Plugin_str($this, 'selected', 'mahara', null, null, null, null, null);

}?>)</span>
            </a>
        </li>
        <?php if (! (is_string($tmp=(isset($this->scope["issitetemplate"]) ? $this->scope["issitetemplate"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <?php if (can_use_skins(null, false, (is_string($tmp=(isset($this->scope["issiteview"]) ? $this->scope["issiteview"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))) {
?>
                <li <?php if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'skin') {
?> class="current-tab"<?php 
}?>>
                    <a<?php if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'skin') {
?> class="current-tab"<?php 
}?> href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/skin.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>&new=1<?php 
}?>">
                        <?php echo Dwoo_Plugin_str($this, 'chooseskin', 'skin', null, null, null, null, null);?><span class="accessible-hidden">(<?php echo Dwoo_Plugin_str($this, 'tab', 'mahara', null, null, null, null, null);
if ((is_string($tmp=(isset($this->scope["selected"]) ? $this->scope["selected"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'skin') {
?> <?php echo Dwoo_Plugin_str($this, 'selected', 'mahara', null, null, null, null, null);

}?>)</span>
                    </a>
                </li>
            <?php 
}?>

            <li class="displaypage">
                <a href="<?php echo (is_string($tmp=$this->scope["displaylink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo Dwoo_Plugin_str($this, 'displayview', 'view', null, null, null, null, null);?> &raquo;</a>
            </li>
            <?php if ((is_string($tmp=(isset($this->scope["edittitle"]) ? $this->scope["edittitle"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["viewtype"]) ? $this->scope["viewtype"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'profile') {
?>
            <li class="sharepage">
                <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/access.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>&new=1<?php 
}?>"><?php echo Dwoo_Plugin_str($this, 'shareview', 'view', null, null, null, null, null);?> &raquo;</a>
            </li>
            <?php 
}?>

        <?php 
}?>

    </ul>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>