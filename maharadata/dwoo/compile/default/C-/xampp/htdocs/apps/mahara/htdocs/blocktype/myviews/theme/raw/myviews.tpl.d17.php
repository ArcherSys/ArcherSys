<?php
/* template head */
if (class_exists('Dwoo_Plugin_cycle', false)===false)
	$this->getLoader()->loadPlugin('cycle');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_list_tags')===false)
	$this->getLoader()->loadPlugin('list_tags');
/* end template head */ ob_start(); /* template body */ ;
if ((is_string($tmp=(isset($this->scope["VIEWS"]) ? $this->scope["VIEWS"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <div id="userviewstable" class="viewlist fullwidth listing">
    <?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["VIEWS"]) ? $this->scope["VIEWS"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['item'])
	{
/* -- foreach start output */
?>
            <div class="<?php echo $this->classCall('cycle', array('default', 'r0,r1', true, true, ',', null, false));?> listrow">
                <h3 class="title"><a href="<?php echo (is_string($tmp=$this->scope["item"]["fullurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a></h3>
                <?php if ((is_string($tmp=(isset($this->scope["item"]["description"]) ? $this->scope["item"]["description"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                  <div class="detail"><?php echo preg_replace('#<[^>]*>#', ' ', str_shorten_html((isset($this->scope["item"]["description"]) ? $this->scope["item"]["description"]:null), 100, true));?></div>
                <?php 
}?>

                <?php if ((is_string($tmp=(isset($this->scope["item"]["tags"]) ? $this->scope["item"]["tags"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                  <div class="tags"><strong><?php echo Dwoo_Plugin_str($this, 'tags', 'mahara', null, null, null, null, null);?>:</strong> <?php echo Dwoo_Plugin_list_tags($this, (is_string($tmp=(isset($this->scope["item"]["tags"]) ? $this->scope["item"]["tags"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), (is_string($tmp=(isset($this->scope["item"]["owner"]) ? $this->scope["item"]["owner"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp));?></div>
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
    <?php echo Dwoo_Plugin_str($this, 'noviewstosee', 'group', null, null, null, null, null);?>

<?php 
}?>


<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>