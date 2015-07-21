<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><script type="text/javascript">
    var <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_current = <?php echo (is_string($tmp=$this->scope["next"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>;
    var <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput;
    var <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newref;

    function <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_new() {
        <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_current++;
        <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput = INPUT({'type': 'text', 'name': '<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>[' + <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_current + ']'});
        var <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newref = DIV(null, <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput);

        appendChildNodes('<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_list', <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newref);

        <?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_newrefinput.focus();
    }
</script>
<div id="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_list">
<?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["value"]) ? $this->scope["value"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['k']=>$this->scope['v'])
	{
/* -- foreach start output */
?>
  <div>
    <input type="text" name="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>[<?php echo (is_string($tmp=$this->scope["k"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>]" value="<?php echo (is_string($tmp=$this->scope["v"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
    <a href="" onclick="removeElement(this.parentNode); return false;">[x]</a>
  </div>
<?php 
/* -- foreach end output */
	}
}?>

  <div>
    <input type="text" name="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>[<?php echo (is_string($tmp=$this->scope["next"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>]" value="">
    <a href="" onclick="<?php echo (is_string($tmp=$this->scope["name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>_new(); return false;">[+]</a>
  </div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>