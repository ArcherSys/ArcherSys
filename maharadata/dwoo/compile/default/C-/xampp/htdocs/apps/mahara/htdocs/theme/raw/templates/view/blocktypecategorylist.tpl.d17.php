<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;

$_fh2_data = (is_string($tmp=(isset($this->scope["categories"]) ? $this->scope["categories"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh2_data) === true)
{
	foreach ($_fh2_data as $this->scope['name']=>$this->scope['category'])
	{
/* -- foreach start output */
?>
    <div id="block-category-<?php echo (is_string($tmp=$this->scope["category"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="block-category-title collapsed">
        <div class="withjs" style="display: none" title="<?php echo (is_string($tmp=$this->scope["category"]["description"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["category"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></div>
        <a class="nonjs" href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>view/blocks.php?id=<?php echo (is_string($tmp=$this->scope["viewid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&c=<?php echo (is_string($tmp=$this->scope["category"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>&new=1" title="<?php echo (is_string($tmp=$this->scope["category"]["description"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["category"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a>
    </div>
    <?php if ((is_string($tmp=(isset($this->scope["selectedcategory"]) ? $this->scope["selectedcategory"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == (is_string($tmp=(isset($this->scope["category"]["name"]) ? $this->scope["category"]["name"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
        <div id="<?php echo (is_string($tmp=$this->scope["category"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <?php echo (isset($this->scope["blocktypelist"]) ? $this->scope["blocktypelist"] : null);?>

        </div>
    <?php 
}
else {
?>
        <div id="<?php echo (is_string($tmp=$this->scope["category"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="hidden"><?php echo Dwoo_Plugin_str($this, 'loading', 'mahara', null, null, null, null, null);?></div>
    <?php 
}?>

<?php 
/* -- foreach end output */
	}
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>