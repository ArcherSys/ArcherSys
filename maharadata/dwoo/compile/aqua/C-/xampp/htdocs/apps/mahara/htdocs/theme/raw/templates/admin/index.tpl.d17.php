<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, 'header.tpl', null, null, null, '_root', null);?>


<?php if ((is_string($tmp=(isset($this->scope["warnings"]) ? $this->scope["warnings"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
<div class="admin-warning-box">
<h3><?php echo Dwoo_Plugin_str($this, "warnings", 'admin', null, null, null, null, null);?></h3>
<ul>
<?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["warnings"]) ? $this->scope["warnings"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['key']=>$this->scope['warning'])
	{
/* -- foreach start output */
?>
    <li><?php echo (isset($this->scope["warning"]) ? $this->scope["warning"] : null);?></li>
<?php 
/* -- foreach end output */
	}
}?>

</ul>
</div>
<?php 
}?>


<?php if ((is_string($tmp=(isset($this->scope["upgrades"]['settings']['toupgradecount']) ? $this->scope["upgrades"]['settings']['toupgradecount']:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
<div class="message" id="runupgrade">
<h3><?php echo Dwoo_Plugin_str($this, "upgrades", 'admin', null, null, null, null, null);?></h3>
<div class="fr"><span class="upgrade"><a class="btn" href="upgrade.php"><?php echo Dwoo_Plugin_str($this, 'runupgrade', 'admin', null, null, null, null, null);?></a></span></div>
<h4><?php echo Dwoo_Plugin_str($this, 'thefollowingupgradesareready', 'admin', null, null, null, null, null);?></h4>
<table id="upgradestable" class="fullwidth">
    <thead>
    <tr>
        <th><?php echo Dwoo_Plugin_str($this, 'Plugin', 'admin', null, null, null, null, null);?></th>
        <th><?php echo Dwoo_Plugin_str($this, 'From', 'mahara', null, null, null, null, null);?></th>
        <th><?php echo Dwoo_Plugin_str($this, 'To', 'mahara', null, null, null, null, null);?></th>
    </tr>
    </thead>
    <tbody>
<?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["upgrades"]) ? $this->scope["upgrades"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['key']=>$this->scope['upgrade'])
	{
/* -- foreach start output */
?>
<?php if ((is_string($tmp=(isset($this->scope["key"]) ? $this->scope["key"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) != 'settings' && (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'upgrade',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["upgrade"]) ? $this->scope["upgrade"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <tr>
        <td><strong><?php echo (is_string($tmp=$this->scope["key"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></strong></td>
        <td><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fromrelease',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["upgrade"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> (<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'from',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["upgrade"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)</td>
        <td><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'torelease',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["upgrade"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> (<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'to',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["upgrade"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)</td>
    </tr>
<?php 
}?>

<?php 
/* -- foreach end output */
	}
}?>

    </tbody>
</table>
</div>
<?php 
}?>


<?php if ((is_string($tmp=(isset($this->scope["upgrades"]['settings']['newinstallcount']) ? $this->scope["upgrades"]['settings']['newinstallcount']:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
<div class="warning" id="runinstall">
<h3><?php echo Dwoo_Plugin_str($this, "newplugins", 'admin', null, null, null, null, null);?></h3>
<div class="fr"><span class="upgrade"><a class="btn" href="extensions/plugins.php"><?php echo Dwoo_Plugin_str($this, 'gotoinstallpage', 'admin', null, null, null, null, null);?></a></span></div>
<h4><?php echo Dwoo_Plugin_str($this, 'thefollowingpluginsareready', 'admin', null, null, null, null, null);?></h4>
<table id="upgradestable" class="fullwidth">
    <thead>
    <tr>
        <th><?php echo Dwoo_Plugin_str($this, 'Plugin', 'admin', null, null, null, null, null);?></th>
        <th><?php echo Dwoo_Plugin_str($this, 'From', 'mahara', null, null, null, null, null);?></th>
        <th><?php echo Dwoo_Plugin_str($this, 'To', 'mahara', null, null, null, null, null);?></th>
    </tr>
    </thead>
    <tbody>
<?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["upgrades"]['settings']['newinstalls']) ? $this->scope["upgrades"]['settings']['newinstalls']:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['key']=>$this->scope['upgrade'])
	{
/* -- foreach start output */
?>
<tr>
    <td><strong><?php echo (is_string($tmp=$this->scope["key"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></strong></td>
    <td><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fromrelease',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["upgrade"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></td>
    <td><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'torelease',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["upgrade"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> (<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'to',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["upgrade"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>)</td>
</tr>
<?php 
/* -- foreach end output */
	}
}?>

    </tbody>
</table>
</div>
<?php 
}?>


<div id="adminhome">
<?php if ((is_string($tmp=(isset($this->scope["register"]) ? $this->scope["register"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
<div class="message" id="register-site">
    <h3><?php echo Dwoo_Plugin_str($this, 'registeryourmaharasite', 'admin', null, null, null, null, null);?></h3>
    <?php echo Dwoo_Plugin_str($this, 'registeryourmaharasitesummary', 'admin', (is_string($tmp=(isset($this->scope["WWWROOT"]) ? $this->scope["WWWROOT"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);?>

</div>
<?php 
}?>


<?php if ((is_string($tmp=(isset($this->scope["sitedata"]) ? $this->scope["sitedata"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
<div class="message" id="site-stats">
  <div><h3><?php echo (is_string($tmp=$this->scope["sitedata"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>: <?php echo Dwoo_Plugin_str($this, 'siteinformation', 'admin', null, null, null, null, null);?></h3></div>
  <div><a class="icon-sitestats" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/statistics.php"><?php echo Dwoo_Plugin_str($this, 'viewfullsitestatistics', 'admin', null, null, null, null, null);?></a></div>
  <div class="cb"></div>
  <?php echo Dwoo_Plugin_include($this, 'admin/stats.tpl', null, null, null, '_root', null, array('full' => 0));?>

</div>
<?php 
}?>


<div class="message" id="close-site">
<?php if ((is_string($tmp=(isset($this->scope["closed"]) ? $this->scope["closed"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <h3><?php echo Dwoo_Plugin_str($this, 'reopensite', 'admin', null, null, null, null, null);?></h3>
    <?php echo Dwoo_Plugin_str($this, 'reopensitedetail', 'admin', null, null, null, null, null);?>

<?php 
}
else {
?>
    <h3><?php echo Dwoo_Plugin_str($this, 'closesite', 'admin', null, null, null, null, null);?></h3>
    <?php echo Dwoo_Plugin_str($this, 'closesitedetail', 'admin', null, null, null, null, null);?>

<?php 
}?>

    <?php echo (isset($this->scope["closeform"]) ? $this->scope["closeform"] : null);?>

</div>

</div>


<div class="cb"></div>

<div class="admin-home-column fl">

<h3><?php echo Dwoo_Plugin_str($this, 'configsite', 'admin', null, null, null, null, null);?></h3>
    <ul>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/site/options.php"><?php echo Dwoo_Plugin_str($this, 'siteoptions', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'siteoptionsdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/site/pages.php"><?php echo Dwoo_Plugin_str($this, 'staticpages', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'staticpagesdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/site/licenses.php"><?php echo Dwoo_Plugin_str($this, 'sitelicenses', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'sitelicensesdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/site/menu.php"><?php echo Dwoo_Plugin_str($this, 'menus', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'menusdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/site/networking.php"><?php echo Dwoo_Plugin_str($this, 'networking', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'networkingdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/site/views.php"><?php echo Dwoo_Plugin_str($this, 'siteviews', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'siteviewsdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/file/sitefiles.php"><?php echo Dwoo_Plugin_str($this, 'sitefiles', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'sitefilesdescription', 'admin', null, null, null, null, null);?></li>
        <?php if (get_config('skins') == true) {
?><li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/site/skins.php"><?php echo Dwoo_Plugin_str($this, 'siteskins', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'siteskinsdescription', 'admin', null, null, null, null, null);?></li><?php 
}?>

        <?php if (get_config('skins') == true) {
?><li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/site/fonts.php"><?php echo Dwoo_Plugin_str($this, 'sitefonts', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'sitefontsdescription', 'admin', null, null, null, null, null);?></li><?php 
}?>

        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/site/cookieconsent.php"><?php echo Dwoo_Plugin_str($this, 'cookieconsent', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'cookieconsentdescription', 'admin', null, null, null, null, null);?></li>
    </ul>

<h3><?php echo Dwoo_Plugin_str($this, 'configusers', 'admin', null, null, null, null, null);?></h3>
    <ul>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/search.php"><?php echo Dwoo_Plugin_str($this, 'usersearch', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'usersearchdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/suspended.php"><?php echo Dwoo_Plugin_str($this, 'suspendedusers', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'suspendedusersdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/staff.php"><?php echo Dwoo_Plugin_str($this, 'sitestaff', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'staffusersdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/admins.php"><?php echo Dwoo_Plugin_str($this, 'siteadmins', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'adminusersdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/notifications.php"><?php echo Dwoo_Plugin_str($this, 'adminnotifications', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'adminnotificationsdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/add.php"><?php echo Dwoo_Plugin_str($this, 'adduser', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'adduserdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/uploadcsv.php"><?php echo Dwoo_Plugin_str($this, 'uploadcsv', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'uploadcsvdescription', 'admin', null, null, null, null, null);?></li>
    </ul>

</div>

<div class="admin-home-column fr">

<h3><?php echo Dwoo_Plugin_str($this, 'managegroups', 'admin', null, null, null, null, null);?></h3>
    <ul>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/groups/groups.php"><?php echo Dwoo_Plugin_str($this, 'administergroups', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'administergroupsdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/groups/groupcategories.php"><?php echo Dwoo_Plugin_str($this, 'groupcategories', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'groupcategoriesdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/groups/uploadcsv.php"><?php echo Dwoo_Plugin_str($this, 'uploadgroupcsv', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'uploadgroupcsvdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/groups/uploadmemberscsv.php"><?php echo Dwoo_Plugin_str($this, 'uploadgroupmemberscsv', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'uploadgroupmemberscsvdescription', 'admin', null, null, null, null, null);?></li>
    </ul>

<h3><?php echo Dwoo_Plugin_str($this, 'manageinstitutions', 'admin', null, null, null, null, null);?></h3>
    <ul>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/institutions.php"><?php echo Dwoo_Plugin_str($this, 'Institutions', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'institutionsdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/institutionusers.php"><?php echo Dwoo_Plugin_str($this, 'institutionmembers', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'institutionmembersdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/institutionstaff.php"><?php echo Dwoo_Plugin_str($this, 'institutionstaff', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'institutionstaffdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/users/institutionadmins.php"><?php echo Dwoo_Plugin_str($this, 'institutionadmins', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'institutionadminsdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/institutionviews.php"><?php echo Dwoo_Plugin_str($this, 'institutionviews', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'institutionviewsdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>artefact/file/institutionfiles.php"><?php echo Dwoo_Plugin_str($this, 'institutionfiles', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'institutionfilesdescription', 'admin', null, null, null, null, null);?></li>
    </ul>

<h3><?php echo Dwoo_Plugin_str($this, 'configextensions', 'admin', null, null, null, null, null);?></h3>
    <ul>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/extensions/plugins.php"><?php echo Dwoo_Plugin_str($this, 'pluginadmin', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'pluginadmindescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/extensions/filter.php"><?php echo Dwoo_Plugin_str($this, 'htmlfilters', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'htmlfiltersdescription', 'admin', null, null, null, null, null);?></li>
        <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/extensions/iframesites.php"><?php echo Dwoo_Plugin_str($this, 'allowediframesites', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'allowediframesitesdescriptionshort', 'admin', null, null, null, null, null);?></li>
       <li><strong><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/extensions/cleanurls.php"><?php echo Dwoo_Plugin_str($this, 'cleanurls', 'admin', null, null, null, null, null);?></a></strong> - <?php echo Dwoo_Plugin_str($this, 'cleanurlsdescriptionshort', 'admin', null, null, null, null, null);?></li>
    </ul>
</div>

<div class="cb"></div>
<?php echo Dwoo_Plugin_include($this, 'footer.tpl', null, null, null, '_root', null);?>


<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>