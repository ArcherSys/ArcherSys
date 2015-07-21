<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (class_exists('Dwoo_Plugin_cycle', false)===false)
	$this->getLoader()->loadPlugin('cycle');
/* end template head */ ob_start(); /* template body */ ;
echo Dwoo_Plugin_include($this, 'header.tpl', null, null, null, '_root', null, array('nosearch' => 'true'));?>

            <h2 class="center"><?php echo (is_string($tmp=$this->scope["upgradeheading"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></h2>
            <div class="center js-hidden" id="jsrequiredforupgrade"><?php echo Dwoo_Plugin_str($this, 'jsrequiredforupgrade', 'admin', null, null, null, null, null);?></div>
            <table id="installer" class="nojs-hidden-table">
                <thead>
                    <tr>
                        <th><?php echo Dwoo_Plugin_str($this, 'component', 'admin', null, null, null, null, null);?></th>
                        <th><?php echo Dwoo_Plugin_str($this, 'fromversion', 'admin', null, null, null, null, null);?></th>
                        <th><?php echo Dwoo_Plugin_str($this, 'toversion', 'admin', null, null, null, null, null);?></th>
                        <th id="msgscol"><?php echo Dwoo_Plugin_str($this, 'information', 'admin', null, null, null, null, null);?></th>
                    </tr>
                </thead>
                <tbody>
                <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["upgrades"]) ? $this->scope["upgrades"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['name']=>$this->scope['upgrade'])
	{
/* -- foreach start output */
?>
                    <tr class="<?php echo $this->classCall('cycle', array('rows', 'r0,r1', true, true, ',', null, false));?>">
                        <td><?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></td>
                        <?php if ((is_string($tmp=(isset($this->scope["name"]) ? $this->scope["name"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'firstcoredata' || (is_string($tmp=(isset($this->scope["name"]) ? $this->scope["name"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'lastcoredata') {
?> 
                        <td></td>
                        <td></td>
                        <?php 
}
else {
?>
                        <td><?php if ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'install',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["upgrade"]) ? $this->scope["upgrade"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> <?php echo Dwoo_Plugin_str($this, 'notinstalled', 'admin', null, null, null, null, null);?> <?php 
}
else {
?> <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'fromrelease',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["upgrade"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> <?php 
}?> </td>
                        <td><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'torelease',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["upgrade"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></td>
                        <?php 
}?>

                        <td id="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="msgscol">&nbsp;</td>
                    </tr>
                <?php 
/* -- foreach end output */
	}
}?>

                </tbody>
            </table>
            <div id="finished" class="nojs-hidden-block"><?php echo Dwoo_Plugin_str($this, 'successfullyinstalled', 'admin', null, null, null, null, null);?> <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/upgrade.php?finished=1"><?php echo Dwoo_Plugin_str($this, 'continue', 'admin', null, null, null, null, null);?></a></div>

<?php echo Dwoo_Plugin_include($this, 'admin/upgradefooter.tpl', null, null, null, '_root', null);?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>