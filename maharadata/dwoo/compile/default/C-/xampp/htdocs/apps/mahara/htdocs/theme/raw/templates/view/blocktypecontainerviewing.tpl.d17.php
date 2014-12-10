<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
/* end template head */ ob_start(); /* template body */ ?>    <div class="blockinstance cb bt-<?php echo (is_string($tmp=$this->scope["blocktype"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> retractable<?php 
}?>" id="blockinstance_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
        <?php if ((is_string($tmp=(isset($this->scope["title"]) ? $this->scope["title"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><div class="blockinstance-header<?php if ((is_string($tmp=(isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && (is_string($tmp=(isset($this->scope["retractedonload"]) ? $this->scope["retractedonload"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> retracted<?php 
}?>">
            <?php if ((is_string($tmp=(isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                <span class="arrow retractor"></span>
            <?php 
}?>

            <h2 class="title"><!-- (Adding some newlines within HTML comments to improve formatting without adding rendered whitespace)
              --><?php if ((is_string($tmp=(isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><span class="retractor"><?php 
}?><!--
              --><?php echo (is_string($tmp=$this->scope["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?><!--
              --><?php if ((is_string($tmp=(isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?></span><?php 
}?><!--
              --><?php if ((is_string($tmp=(isset($this->scope["viewartefacturl"]) ? $this->scope["viewartefacturl"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> <a href="<?php echo (is_string($tmp=$this->scope["viewartefacturl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, 'clickformoreinformation', 'view', null, null, null, null, null);?>"><!--
                --><img alt="<?php echo Dwoo_Plugin_str($this, 'detailslinkalt', 'view', null, null, null, null, null);?>" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/detail_small.png', null);?>" /><!--
              --></a><?php 
}?><!--
              --><?php if ((is_string($tmp=(isset($this->scope["feedlink"]) ? $this->scope["feedlink"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> <a href="<?php echo (is_string($tmp=$this->scope["feedlink"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><!--
                --><img class="feedicon" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/feed.png', null);?>"><!--
              --></a><?php 
}?><!--
            --></h2>
            <span class="cb"></span>
        </div><?php 
}?>

        <div class="blockinstance-content<?php if ((is_string($tmp=(isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && (is_string($tmp=(isset($this->scope["retractedonload"]) ? $this->scope["retractedonload"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> js-hidden<?php 
}?>">
            <?php echo (isset($this->scope["content"]) ? $this->scope["content"] : null);?>

        </div>
    </div>
    <?php if ((is_string($tmp=(isset($this->scope["retractable"]) ? $this->scope["retractable"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
        <script>
            <?php echo Dwoo_Plugin_include($this, "view/retractablejs.tpl", null, null, null, '_root', null, array('id' => (is_string($tmp=(isset($this->scope["id"]) ? $this->scope["id"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

        </script>
    <?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>