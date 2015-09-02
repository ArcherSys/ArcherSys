<?php
/* template head */
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?>    <div class="blockinstance cb<?php if ((is_string($tmp=(isset($this->scope["configure"]) ? $this->scope["configure"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> configure<?php 
}
elseif ((is_string($tmp=(isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> retractable<?php 
}?>" id="blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["configure"]) ? $this->scope["configure"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>_configure<?php 
}?>">
        <div class="blockinstance-controls">
        <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["movecontrols"]) ? $this->scope["movecontrols"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['item'])
	{
/* -- foreach start output */
?>
            <input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_move'.(is_string($tmp=(isset($this->scope["item"]["dir"]) ? $this->scope["item"]["dir"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp).'.png', null);?>" class="movebutton" name="action_moveblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_column_<?php echo (is_string($tmp=$this->scope["item"]["column"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_order_<?php echo (is_string($tmp=$this->scope["item"]["order"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["item"]["arrow"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <?php 
/* -- foreach end output */
	}
}?>

        <input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_move.png', null);?>" class="keyboardmovebutton nojs-hidden-inline" name="action_moveblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["strmovetitletext"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <?php if ((is_string($tmp=(isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && ! (is_string($tmp=(isset($this->scope["configure"]) ? $this->scope["configure"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <img src="<?php echo Dwoo_Plugin_theme_url($this, 'images/retractable.png', null);?>" alt="<?php echo Dwoo_Plugin_str($this, 'retractable', 'view', null, null, null, null, null);?>" title="<?php echo Dwoo_Plugin_str($this, 'retractable', 'view', null, null, null, null, null);?>" class="retractablebtn">
        <?php 
}?>

        <?php if ((is_string($tmp=(isset($this->scope["configurable"]) ? $this->scope["configurable"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && ! (is_string($tmp=(isset($this->scope["configure"]) ? $this->scope["configure"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>    <input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_configure.png', null);?>" class="configurebutton" name="action_configureblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["strconfigtitletext"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php 
}?>

            <?php if ((is_string($tmp=(isset($this->scope["configure"]) ? $this->scope["configure"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_close.png', null);?>" class="deletebutton" name="action_removeblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'Close', 'mahara', null, null, null, null, null);?>"><?php 
}
else {
?><input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_deleteremove.png', null);?>" class="deletebutton" name="action_removeblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["strremovetitletext"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php 
}?>

        </div>
        <div class="blockinstance-header">
            <h2 class="title"><?php if ((is_string($tmp=(isset($this->scope["configure"]) ? $this->scope["configure"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo (is_string($tmp=$this->scope["configtitle"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>: <?php echo Dwoo_Plugin_str($this, 'Configure', 'view', null, null, null, null, null);

}
else {

echo (($tmp = (is_string($tmp=(isset($this->scope["title"]) ? $this->scope["title"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp))===null||$tmp==='' ? "[".(is_string($tmp=(isset($this->scope["strnotitle"]) ? $this->scope["strnotitle"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)."]" : $tmp);

}?></h2>
        </div>
        <div class="blockinstance-content">
            <?php echo (isset($this->scope["content"]) ? $this->scope["content"] : null);?>

        </div>
    </div>
    <?php if (! (is_string($tmp=(isset($this->scope["javascript"]) ? $this->scope["javascript"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && ! (is_string($tmp=(isset($this->scope["configure"]) ? $this->scope["configure"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
        <div class="add-button">
            <input type="submit" class="submit newblockhere" name="action_addblocktype_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_column_<?php echo (is_string($tmp=$this->scope["column"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_order_<?php echo (is_string($tmp=($this->scope["order"] + 1)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" value="<?php echo Dwoo_Plugin_str($this, 'addnewblockhere', 'view', null, null, null, null, null);?>">
        </div>
    <?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>