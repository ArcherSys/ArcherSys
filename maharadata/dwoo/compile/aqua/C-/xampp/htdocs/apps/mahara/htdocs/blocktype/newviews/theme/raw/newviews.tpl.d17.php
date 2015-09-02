<?php
/* template head */
if (class_exists('Dwoo_Plugin_cycle', false)===false)
	$this->getLoader()->loadPlugin('cycle');
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((is_string($tmp=(isset($this->scope["views"]) ? $this->scope["views"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
  <div class="viewlist fullwidth listing">
  <?php echo $this->assignInScope(1, 'author_link_index');?>

  <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["views"]) ? $this->scope["views"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['view'])
	{
/* -- foreach start output */
?>
    <div class="<?php echo $this->classCall('cycle', array('default', 'r0,r1', true, true, ',', null, false));?> listrow">
            <h3 class="title"><a href="<?php echo (is_string($tmp=$this->scope["view"]["fullurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["view"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></h3>
            <div class="detail"><?php echo preg_replace('#<[^>]*>#', ' ', str_shorten_html((isset($this->scope["view"]["description"]) ? $this->scope["view"]["description"]:null), 100, true));?></div>
            <?php if ((is_string($tmp=(isset($this->scope["view"]["sharedby"]) ? $this->scope["view"]["sharedby"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <div class="groupuserdate">
                <?php if ((is_string($tmp=(isset($this->scope["view"]["group"]) ? $this->scope["view"]["group"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && (is_string($tmp=(isset($this->scope["loggedin"]) ? $this->scope["loggedin"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                  <a href="<?php echo group_homepage_url((is_string($tmp=(isset($this->scope["view"]["groupdata"]) ? $this->scope["view"]["groupdata"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>"><?php echo (is_string($tmp=$this->scope["view"]["sharedby"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
                <?php 
}
elseif ((is_string($tmp=(isset($this->scope["view"]["owner"]) ? $this->scope["view"]["owner"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && (is_string($tmp=(isset($this->scope["loggedin"]) ? $this->scope["loggedin"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                  <?php if ((is_string($tmp=(isset($this->scope["view"]["anonymous"]) ? $this->scope["view"]["anonymous"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                    <?php if ((is_string($tmp=(isset($this->scope["view"]["staff_or_admin"]) ? $this->scope["view"]["staff_or_admin"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                      <?php echo $this->assignInScope((is_string($tmp=(isset($this->scope["view"]["sharedby"]) ? $this->scope["view"]["sharedby"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'realauthor');?>

                      <?php echo $this->assignInScope(profile_url((is_string($tmp=(isset($this->scope["view"]["user"]) ? $this->scope["view"]["user"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'realauthorlink');?>

                    <?php 
}?>

                    <?php echo $this->assignInScope(get_string('anonymoususer'), 'author');?>

                    <?php echo Dwoo_Plugin_include($this, 'author.tpl', null, null, null, '_root', null);?>

                    <?php if ((is_string($tmp=(isset($this->scope["view"]["staff_or_admin"]) ? $this->scope["view"]["staff_or_admin"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                      <?php echo $this->assignInScope(''.(is_string($tmp=((isset($this->scope["author_link_index"]) ? $this->scope["author_link_index"] : null) + 1)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp).'', 'author_link_index');?>

                    <?php 
}?>

                  <?php 
}
else {
?>
                    <a href="<?php echo profile_url((is_string($tmp=(isset($this->scope["view"]["user"]) ? $this->scope["view"]["user"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?>"><?php echo (is_string($tmp=$this->scope["view"]["sharedby"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
                  <?php 
}?>

                <?php 
}
else {
?>
                  <?php echo (is_string($tmp=$this->scope["view"]["sharedby"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>

                <?php 
}?>

             	<span class="postedon">
                  - <?php if ((is_string($tmp=(isset($this->scope["view"]["mtime"]) ? $this->scope["view"]["mtime"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == (is_string($tmp=(isset($this->scope["view"]["ctime"]) ? $this->scope["view"]["ctime"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo Dwoo_Plugin_str($this, 'Created', 'mahara', null, null, null, null, null);

}
else {

echo Dwoo_Plugin_str($this, 'Updated', 'mahara', null, null, null, null, null);

}?>

                  <?php echo format_date(strtotime((is_string($tmp=(isset($this->scope["view"]["mtime"]) ? $this->scope["view"]["mtime"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)), 'strftimedate');?></span>
            </div>
            <?php 
}?>

        </div>
  <?php 
/* -- foreach end output */
	}
}?>

  </div>
<?php 
}
else {
?>
  <?php echo Dwoo_Plugin_str($this, 'noviews', 'view', null, null, null, null, null);?>

<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>