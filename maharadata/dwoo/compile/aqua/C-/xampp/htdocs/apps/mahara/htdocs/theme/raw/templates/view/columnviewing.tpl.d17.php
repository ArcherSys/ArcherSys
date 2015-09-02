<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div id="row_<?php echo (is_string($tmp=$this->scope["row"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_column_<?php echo (is_string($tmp=$this->scope["column"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="column columns<?php echo (is_string($tmp=$this->scope["numcolumns"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["column"]) ? $this->scope["column"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 1) {
?> firstcolumn<?php 
}
if ((is_string($tmp=(isset($this->scope["column"]) ? $this->scope["column"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == (is_string($tmp=(isset($this->scope["numcolumns"]) ? $this->scope["numcolumns"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> lastcolumn<?php 
}?>"<?php if ((is_string($tmp=(isset($this->scope["width"]) ? $this->scope["width"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> style="width: <?php echo (is_string($tmp=($this->scope["width"] - 2)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>%;"<?php 
}?>>
    <div class="column-content">
    <?php echo (isset($this->scope["blockcontent"]) ? $this->scope["blockcontent"] : null);?>

    </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>