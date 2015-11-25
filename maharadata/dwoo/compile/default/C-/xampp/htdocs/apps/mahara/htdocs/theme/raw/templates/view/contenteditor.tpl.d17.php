<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?><div id="content-editor">
    <div id="content-editor-header"><div><?php echo Dwoo_Plugin_str($this, 'addcontent', 'view', null, null, null, null, null);?></div></div>
    <div id="content-editor-foldable">
        <div id="blocktype-common" class="blocktype-list">
            <div class="blocktype">
                <a class="blocktypelink" href="#">
                    <input type="radio" class="blocktype-radio" id="blocktype-radio-text" name="blocktype" value="text">
                    <img width="24" height="24" title="<?php echo Dwoo_Plugin_str($this, 'description', 'blocktype.text', null, null, null, null, null);?>" alt="<?php echo Dwoo_Plugin_str($this, 'description', 'blocktype.text', null, null, null, null, null);?>" src="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>thumb.php?type=blocktype&bt=text">
                    <label for="blocktype-radio-text" class="blocktypetitle"><?php echo Dwoo_Plugin_str($this, 'title', 'blocktype.text', null, null, null, null, null);?></label>
                </a>
            </div>
            <div class="blocktype lastrow">
                <a class="blocktypelink" href="#">
                    <input type="radio" id="blocktype-radio-image" class="blocktype-radio" name="blocktype" value="image">
                    <img width="24" height="24" title="<?php echo Dwoo_Plugin_str($this, 'description', 'blocktype.file/image', null, null, null, null, null);?>" alt="<?php echo Dwoo_Plugin_str($this, 'description', 'blocktype.file/image', null, null, null, null, null);?>" src="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>thumb.php?type=blocktype&bt=image&ap=file">
                    <label for="blocktype-radio-image" class="blocktypetitle"><?php echo Dwoo_Plugin_str($this, 'image', 'view', null, null, null, null, null);?></label>
                </a>
            </div>
        </div>
        <div id="accordion">
            <?php echo (isset($this->scope["category_list"]) ? $this->scope["category_list"] : null);?>

        </div>
    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>