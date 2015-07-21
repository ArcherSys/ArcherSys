<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, 'header.tpl', null, null, null, '_root', null);?>


<div id="adminplugin">
    <b><?php echo Dwoo_Plugin_str($this, 'pluginexplainaddremove', 'mahara', null, null, null, null, null);?>

    <br/><br/><?php echo Dwoo_Plugin_str($this, 'pluginexplainartefactblocktypes', 'mahara', null, null, null, null, null);?><br/><br/></b>
    <ul class="adminpluginstypes">
    <?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["plugins"]) ? $this->scope["plugins"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh3_data) === true)
{
	foreach ($_fh3_data as $this->scope['plugintype']=>$this->scope['plugins'])
	{
/* -- foreach start output */
?>
        <li><h4><?php echo Dwoo_Plugin_str($this, 'plugintype', 'mahara', null, null, null, null, null);?>: <?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></h4>
        <?php echo $this->assignInScope((is_string($tmp=(isset($this->scope["plugins"]["installed"]) ? $this->scope["plugins"]["installed"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), "installed");?>

        <?php echo $this->assignInScope((is_string($tmp=(isset($this->scope["plugins"]["notinstalled"]) ? $this->scope["plugins"]["notinstalled"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), "notinstalled");?>

            <ul>
                <?php if ((is_string($tmp=(isset($this->scope["notinstalled"]) ? $this->scope["notinstalled"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                <li class="notinstalled"><b><?php echo Dwoo_Plugin_str($this, 'notinstalledplugins', 'mahara', null, null, null, null, null);?></b>
                    <ul id="<?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>.notinstalled">
                    <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["notinstalled"]) ? $this->scope["notinstalled"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['plugin']=>$this->scope['data'])
	{
/* -- foreach start output */
?>
                        <li id="<?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>.<?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                        <?php if ((is_string($tmp=(isset($this->scope["data"]["notinstallable"]) ? $this->scope["data"]["notinstallable"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                            <?php echo Dwoo_Plugin_str($this, 'notinstallable', 'mahara', null, null, null, null, null);?>: <?php echo (is_string($tmp=$this->scope["data"]["notinstallable"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                        <?php 
}
else {
?>
                            <span id="<?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>.<?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>.install">(<a href="" onClick="<?php echo (is_string($tmp=$this->scope["installlink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>('<?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>.<?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>'); return false;"><?php echo Dwoo_Plugin_str($this, 'install', 'admin', null, null, null, null, null);?> <span class="accessible-hidden "><?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> <?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span></a>)</span>
                        <?php 
}?>

                        <span id="<?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>.<?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>.message"></span>
                        </li>
                    <?php 
/* -- foreach end output */
	}
}?>

                    </ul>
                </li>
                <?php 
}?>

            
                <li><b><?php echo Dwoo_Plugin_str($this, 'installedplugins', 'mahara', null, null, null, null, null);?></b>
                    <ul id="<?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>.installed">
                    <?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["installed"]) ? $this->scope["installed"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['plugin']=>$this->scope['data'])
	{
/* -- foreach start output */
?>
                        <li id="<?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>.<?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                        <?php if ((is_string($tmp=(isset($this->scope["data"]["activateform"]) ? $this->scope["data"]["activateform"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                            [ <?php echo (isset($this->scope["data"]["activateform"]) ? $this->scope["data"]["activateform"]:null);?>

                        <?php 
}?>

                        <?php if ((is_string($tmp=(isset($this->scope["data"]["config"]) ? $this->scope["data"]["config"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                            <?php if (! (is_string($tmp=(isset($this->scope["data"]["activateform"]) ? $this->scope["data"]["activateform"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> [ <?php 
}
else {
?> | <?php 
}?>

                            <a href="pluginconfig.php?plugintype=<?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&amp;pluginname=<?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo Dwoo_Plugin_str($this, 'config', 'mahara', null, null, null, null, null);?> <span class="accessible-hidden "><?php echo Dwoo_Plugin_str($this, 'configfor', 'mahara', null, null, null, null, null);?> <?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> <?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span></a>
                        <?php 
}?>

                        <?php if ((is_string($tmp=(isset($this->scope["data"]["config"]) ? $this->scope["data"]["config"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["data"]["activateform"]) ? $this->scope["data"]["activateform"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> ] <?php 
}?>

                        </li>
                        <?php if ((is_string($tmp=(isset($this->scope["data"]["types"]) ? $this->scope["data"]["types"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                        <li>
                            <ul>
                            <?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["data"]["types"]) ? $this->scope["data"]["types"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['type']=>$this->scope['config'])
	{
/* -- foreach start output */
?>
                                <li><?php echo (is_string($tmp=$this->scope["type"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                                <?php if ((is_string($tmp=(isset($this->scope["config"]) ? $this->scope["config"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> [ <a href="pluginconfig.php?plugintype=<?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&amp;pluginname=<?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&amp;type=<?php echo (is_string($tmp=$this->scope["type"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo Dwoo_Plugin_str($this, 'config', 'mahara', null, null, null, null, null);?> <span class="accessible-hidden "><?php echo Dwoo_Plugin_str($this, 'configfor', 'mahara', null, null, null, null, null);?> <?php echo (is_string($tmp=$this->scope["plugintype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> <?php echo (is_string($tmp=$this->scope["plugin"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span></a> ]<?php 
}?></li>
                            <?php 
/* -- foreach end output */
	}
}?>

                            </ul>
                        </li>
                        <?php 
}?>

                    <?php 
/* -- foreach end output */
	}
}?>

                    </ul>
                </li>
            </ul>
        </li>
    <?php 
/* -- foreach end output */
	}
}?>

    </ul>
    <div class="cb"></div>
</div>

<?php echo Dwoo_Plugin_include($this, 'footer.tpl', null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>