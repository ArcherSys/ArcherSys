<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_profile_icon_url')===false)
	$this->getLoader()->loadPlugin('profile_icon_url');
/* end template head */ ob_start(); /* template body */ ?>    <div class="sidebar-header">
      <h3><a href="<?php echo (is_string($tmp=$this->scope["sbdata"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["sbdata"]["myname"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></h3>
      <div id="user-profileicon">
        <a href="<?php echo (is_string($tmp=$this->scope["sbdata"]["profileiconurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, "editprofileicon", "artefact.file", null, null, null, null, null);?>"><img src="<?php echo Dwoo_Plugin_profile_icon_url($this, (is_string($tmp=(isset($this->scope["sbdata"]["id"]) ? $this->scope["sbdata"]["id"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 50, 50);?>" alt="<?php echo Dwoo_Plugin_str($this, "editprofileicon", "artefact.file", null, null, null, null, null);?>"></a>
      </div>
    </div>
    <div class="sidebar-content">
<?php if ((is_string($tmp=(isset($this->scope["sbdata"]["mnetloggedinfrom"]) ? $this->scope["sbdata"]["mnetloggedinfrom"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>        <p><?php echo clean_html((isset($this->scope["sbdata"]["mnetloggedinfrom"]) ? $this->scope["sbdata"]["mnetloggedinfrom"]:null));?></p>
<?php 
}?>

        <ul>
<?php if ((is_string($tmp=(isset($this->scope["sbdata"]["invitedgroups"]) ? $this->scope["sbdata"]["invitedgroups"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <li id="invitedgroups"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>group/mygroups.php?filter=invite" class="btn-group">
                <span id="invitedgroupscount"><?php echo (is_string($tmp=$this->scope["sbdata"]["invitedgroups"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                <span id="invitedgroupsmessage"><?php echo (is_string($tmp=$this->scope["sbdata"]["invitedgroupsmessage"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
            </a></li>
<?php 
}?>

<?php if ((is_string($tmp=(isset($this->scope["sbdata"]["pendingfriends"]) ? $this->scope["sbdata"]["pendingfriends"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <li id="pendingfriends"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>user/myfriends.php?filter=pending" class="btn-friend">
                <span id="pendingfriendscount"><?php echo (is_string($tmp=$this->scope["sbdata"]["pendingfriends"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                <span id="pendingfriendsmessage"><?php echo (is_string($tmp=$this->scope["sbdata"]["pendingfriendsmessage"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
            </a></li>
<?php 
}?>

<?php if ((is_string($tmp=(isset($this->scope["sbdata"]["groups"]) ? $this->scope["sbdata"]["groups"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <li id="groups"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>group/mygroups.php"><?php echo Dwoo_Plugin_str($this, "mygroups", 'mahara', null, null, null, null, null);?>:</a>
                <ul>
<?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["sbdata"]["groups"]) ? $this->scope["sbdata"]["groups"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['group'])
	{
/* -- foreach start output */
?>
                    <li><a href="<?php echo group_homepage_url((is_string($tmp=(isset($this->scope["group"]) ? $this->scope["group"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'name',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["group"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a><?php if ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'role',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["group"]) ? $this->scope["group"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'admin') {
?> (<?php echo Dwoo_Plugin_str($this, 'Admin', 'group', null, null, null, null, null);?>)<?php 
}?></li>
<?php 
/* -- foreach end output */
	}
}?>

                </ul>
                <span class="tiny"><?php echo (is_string($tmp=$this->scope["sbdata"]["grouplimitstr"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                </li>
<?php 
}?>

<?php if ((is_string($tmp=(isset($this->scope["sbdata"]["views"]) ? $this->scope["sbdata"]["views"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <li id="views"><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/"><?php echo Dwoo_Plugin_str($this, "views", 'mahara', null, null, null, null, null);?>:</a>
                <ul>
<?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["sbdata"]["views"]) ? $this->scope["sbdata"]["views"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh3_data) === true)
{
	foreach ($_fh3_data as $this->scope['view'])
	{
/* -- foreach start output */
?>
                    <li><a href="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fullurl',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["view"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li>
<?php 
/* -- foreach end output */
	}
}?>

                </ul>
            </li>
<?php 
}?>

<?php if ((is_string($tmp=(isset($this->scope["sbdata"]["artefacts"]) ? $this->scope["sbdata"]["artefacts"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <li class="artefacts">
                <?php echo Dwoo_Plugin_str($this, "Artefacts", 'mahara', null, null, null, null, null);?>:
                <ul>
<?php 
$_fh4_data = (is_string($tmp=(isset($this->scope["sbdata"]["artefacts"]) ? $this->scope["sbdata"]["artefacts"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh4_data) === true)
{
	foreach ($_fh4_data as $this->scope['artefact'])
	{
/* -- foreach start output */
?>
<?php if ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'blog') {
?>
                    <li><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/blog/view/index.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li>
<?php 
}
elseif ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'blogpost') {
?>
                    <li><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/blog/view/index.php?id=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'blogid',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li>
<?php 
}
elseif ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'file' || (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'image' || (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'profileicon' || (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'archive') {
?>
                    <li><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/file/download.php?file=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li>
<?php 
}
elseif ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'artefacttype',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["artefact"]) ? $this->scope["artefact"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'folder') {
?>
                    <li><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/file/index.php?folder=<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["artefact"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></li>
<?php 
}?>

<?php 
/* -- foreach end output */
	}
}?>

                </ul>
            </li>
<?php 
}?>

        </ul>
<?php if ((is_string($tmp=(isset($this->scope["sbdata"]["peer"]) ? $this->scope["sbdata"]["peer"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>                <div id="sbdatapeer"><a href="<?php echo (is_string($tmp=$this->scope["sbdata"]["peer"]["wwwroot"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["sbdata"]["peer"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></div>
<?php 
}?>

<?php if ((is_string($tmp=(isset($this->scope["USERMASQUERADING"]) ? $this->scope["USERMASQUERADING"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>        <div id="changeuser"><?php echo (isset($this->scope["becomeyouagain"]) ? $this->scope["becomeyouagain"] : null);?></div>
<?php 
}?>

    </div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>