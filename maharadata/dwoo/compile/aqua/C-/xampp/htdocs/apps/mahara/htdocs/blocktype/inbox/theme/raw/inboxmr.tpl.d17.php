<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (class_exists('Dwoo_Plugin_cycle', false)===false)
	$this->getLoader()->loadPlugin('cycle');
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
if (function_exists('Dwoo_Plugin_truncate')===false)
	$this->getLoader()->loadPlugin('truncate');
/* end template head */ ob_start(); /* template body */ ;
if (! (is_string($tmp=(isset($this->scope["items"]) ? $this->scope["items"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
<?php echo Dwoo_Plugin_str($this, 'nomessages', 'blocktype.inbox', null, null, null, null, null);?>

<?php 
}
else {
?>
<table id="inboxblock" class="fullwidth fixwidth">
<?php 
$_fh2_data = (is_string($tmp=(isset($this->scope["items"]) ? $this->scope["items"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['i'])
	{
/* -- foreach start output */
?>
<tr class="<?php echo $this->classCall('cycle', array('default', 'r0,r1', true, true, ',', null, false));?>">
    <td class="icon-container">
  <?php if ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'read',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
      <img src="<?php echo Dwoo_Plugin_theme_url($this, ('images/').((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)).('.png'), null);?>" alt="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'strtype',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
  <?php 
}
else {
?>
      <img src="<?php echo Dwoo_Plugin_theme_url($this, ('images/').((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)).('.png'), null);?>" class="unreadmessage" alt="<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'strtype',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" />
  <?php 
}?>

    </td>
    <td>
  <?php if ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'message',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
      <a href="<?php if ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}
else {

echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>account/activity/index.php<?php 
}?>" class="inbox-showmessage<?php if (! (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'read',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> unread<?php 
}?>">
      <?php if (! (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'read',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><span class="accessible-hidden"><?php echo Dwoo_Plugin_str($this, 'unread', 'activity', null, null, null, null, null);?>: </span><?php 
}
echo Dwoo_Plugin_truncate($this, (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'subject',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 50, '...', false, false);?>

      </a>
      <div class="inbox-message hidden messagebody-<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'type',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" id="inbox-message-<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'msgtable',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>-<?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'message',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true);?>

      <?php if ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><br><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php if ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'urltext',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'urltext',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?> &raquo;<?php 
}
else {

echo Dwoo_Plugin_str($this, "more...", 'mahara', null, null, null, null, null);

}?></a><?php 
}?>

      </div>
  <?php 
}
elseif ((is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["i"]) ? $this->scope["i"]:null), true)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
      <a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'url',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'subject',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
  <?php 
}
else {
?>
      <?php echo (is_string($tmp=$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'subject',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["i"], false)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

  <?php 
}?>

    </td>
</tr>
<?php 
/* -- foreach end output */
	}
}?>

</table>
<?php if ((is_string($tmp=(isset($this->scope["desiredtypes"]) ? $this->scope["desiredtypes"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
<div class="morelinkwrap"><a class="morelink" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>account/activity/index.php?type=<?php echo (is_string($tmp=$this->scope["desiredtypes"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo Dwoo_Plugin_str($this, 'More', 'blocktype.inbox', null, null, null, null, null);?> &raquo;</a></div>
<div class="cb"></div>
<?php 
}?>

<script>

addLoadEvent(function() {
    forEach(

        getElementsByTagAndClassName('a', 'inbox-showmessage', '<?php echo (is_string($tmp=$this->scope["blockid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>'),

        function(element) {
        connect(element, 'onclick', function(e) {
            e.stop();
            var message = getFirstElementByTagAndClassName('div', 'inbox-message', element.parentNode);
            var unreadText = getFirstElementByTagAndClassName(null, 'accessible-hidden', element);
            toggleElementClass('hidden', message);
            if (hasElementClass(element, 'unread')) {
                var tableid = getNodeAttribute(message, 'id').replace(/inbox-message-(.+)$/, '$1');
                var delimiterposition = tableid.indexOf("-");
                var table = tableid.substr(0, delimiterposition);
                var id = tableid.substr(delimiterposition + 1);
                var pd = {'readone':id, 'table':table};
                sendjsonrequest(config.wwwroot + 'artefact/multirecipientnotification/indexin.json.php', pd, 'GET', function(data) {
                    removeElementClass(element, 'unread');
                    removeElement(unreadText);
                    updateUnreadCount(data);
                });
            }
        });
    });
});

</script>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>