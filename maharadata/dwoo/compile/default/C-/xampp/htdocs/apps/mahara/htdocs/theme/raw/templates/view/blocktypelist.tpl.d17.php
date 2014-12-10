<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((is_string($tmp=(isset($this->scope["blocktypes"]) ? $this->scope["blocktypes"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
<div class="blocktype-list">
<?php 
$_fh1_data = (is_string($tmp=(isset($this->scope["blocktypes"]) ? $this->scope["blocktypes"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh1_data) === true)
{
	foreach ($_fh1_data as $this->scope['blocktype'])
	{
/* -- foreach start output */
?>
    <div class="blocktype">
        <a class="blocktypelink" href="#">
            <input type="radio" id="blocktype-list-radio-<?php echo (is_string($tmp=$this->scope["blocktype"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="blocktype-radio" name="blocktype" value="<?php echo (is_string($tmp=$this->scope["blocktype"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <img src="<?php echo (is_string($tmp=$this->scope["blocktype"]["thumbnail_path"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo (is_string($tmp=$this->scope["blocktype"]["description"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo (is_string($tmp=$this->scope["blocktype"]["description"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" width="24" height="24">
            <label for="blocktype-list-radio-<?php echo (is_string($tmp=$this->scope["blocktype"]["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="blocktypetitle"><?php echo (is_string($tmp=$this->scope["blocktype"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></label>
        </a>
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
<div id="noblocks"><?php echo Dwoo_Plugin_str($this, 'noblocks', 'view', null, null, null, null, null);?></div>
<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>