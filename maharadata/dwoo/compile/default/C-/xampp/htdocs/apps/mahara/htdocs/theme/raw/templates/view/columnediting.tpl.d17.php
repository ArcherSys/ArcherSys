<?php
/* template head */
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div id="row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_column_<?php echo (is_string($tmp=$this->scope["column"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="column columns<?php echo (is_string($tmp=$this->scope["numcolumns"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["column"]) ? $this->scope["column"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 1) {
?> firstcolumn<?php 
}
if ((is_string($tmp=(isset($this->scope["column"]) ? $this->scope["column"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == (is_string($tmp=(isset($this->scope["numcolumns"]) ? $this->scope["numcolumns"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> lastcolumn<?php 
}?>"<?php if ((is_string($tmp=(isset($this->scope["width"]) ? $this->scope["width"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> style="width: <?php echo (is_string($tmp=($this->scope["width"] - 2)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>%;"<?php 
}?>>
<?php if ((is_string($tmp=(isset($this->scope["addremovecolumns"]) ? $this->scope["addremovecolumns"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <div class="column-header">
    <?php if ((is_string($tmp=(isset($this->scope["column"]) ? $this->scope["column"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 1) {
?>
        <div class="add-column-left">
            <input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_addcolumnleft.png', null);?>" class="addcolumn" name="action_addcolumn_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_before_1" alt="<?php echo Dwoo_Plugin_str($this, 'add', 'view', null, null, null, null, null);?>" title="<?php echo Dwoo_Plugin_str($this, 'addcolumn', 'view', null, null, null, null, null);?>">
        </div>
    <?php 
}?>

        <div class="remove-column">
            <input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_removecolumn.png', null);?>" class="removecolumn" name="action_removecolumn_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_column_<?php echo (is_string($tmp=$this->scope["column"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'remove', 'view', null, null, null, null, null);?>" title="<?php echo Dwoo_Plugin_str($this, 'removecolumn', 'view', null, null, null, null, null);?>">
        </div>
    <?php if ((is_string($tmp=(isset($this->scope["column"]) ? $this->scope["column"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == (is_string($tmp=(isset($this->scope["numcolumns"]) ? $this->scope["numcolumns"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
        <div class="add-column-right">
            <input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_addcolumnright.png', null);?>" class="addcolumn" name="action_addcolumn_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_before_<?php echo (is_string($tmp=($this->scope["column"] + 1)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'add', 'view', null, null, null, null, null);?>" title="<?php echo Dwoo_Plugin_str($this, 'addcolumn', 'view', null, null, null, null, null);?>">
        </div>
    <?php 
}
else {
?>
        <div class="add-column-center">
            <input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_addcolumnright.png', null);?>" class="addcolumn" name="action_addcolumn_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_before_<?php echo (is_string($tmp=($this->scope["column"] + 1)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'add', 'view', null, null, null, null, null);?>" title="<?php echo Dwoo_Plugin_str($this, 'addcolumn', 'view', null, null, null, null, null);?>">
        </div>
    <?php 
}?>

    </div>
<?php 
}
else {
?>
    <div class="column-header-empty"></div>
<?php 
}?>

    <div class="column-content">
    <?php if (! (is_string($tmp=(isset($this->scope["javascript"]) ? $this->scope["javascript"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
        <div class="add-button">
            <input type="submit" class="submit newblockhere" name="action_addblocktype_row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_column_<?php echo (is_string($tmp=$this->scope["column"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_order_1" value="<?php echo Dwoo_Plugin_str($this, 'addnewblockhere', 'view', null, null, null, null, null);?>">
        </div>
    <?php 
}?> 
    <?php echo (isset($this->scope["blockcontent"]) ? $this->scope["blockcontent"] : null);?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>