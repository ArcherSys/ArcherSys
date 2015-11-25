<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
if (function_exists('Dwoo_Plugin_mahara_performance_info')===false)
	$this->getLoader()->loadPlugin('mahara_performance_info');
if (function_exists('Dwoo_Plugin_mahara_version')===false)
	$this->getLoader()->loadPlugin('mahara_version');
/* end template head */ ob_start(); /* template body */ ;
if ((is_string($tmp=(isset($this->scope["SUBPAGENAV"]) ? $this->scope["SUBPAGENAV"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                        </div><!--end subpage rel-->
<?php 
}?>

                    </div><!-- end main-column-container -->
                    <div class="cl"></div>
                </div><!-- end main-column -->
<?php if ((is_string($tmp=(isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && (is_string($tmp=(isset($this->scope["SIDEBLOCKS"]["right"]) ? $this->scope["SIDEBLOCKS"]["right"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                <div id="right-column" class="sidebar">
<?php echo Dwoo_Plugin_include($this, "sidebar.tpl", null, null, null, '_root', null, array('blocks' => (is_string($tmp=(isset($this->scope["SIDEBLOCKS"]["right"]) ? $this->scope["SIDEBLOCKS"]["right"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

                </div>
<?php 
}?>

<?php if ((is_string($tmp=(isset($this->scope["SIDEBARS"]) ? $this->scope["SIDEBARS"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) && (is_string($tmp=(isset($this->scope["SIDEBLOCKS"]["left"]) ? $this->scope["SIDEBLOCKS"]["left"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                <div id="left-column" class="sidebar">
<?php echo Dwoo_Plugin_include($this, "sidebar.tpl", null, null, null, '_root', null, array('blocks' => (is_string($tmp=(isset($this->scope["SIDEBLOCKS"]["left"]) ? $this->scope["SIDEBLOCKS"]["left"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

                </div>
<?php 
}?>

				<div class="cb"></div>
        </div><!-- main-wrapper -->
    </div><!-- mainmiddle -->
    </div><!-- mainmiddlewrap -->
    <div id="footer-wrap" <?php if ((is_string($tmp=(isset($this->scope["editing"]) ? $this->scope["editing"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == true) {
?>class="editcontent"<?php 
}?>>
      <div id="footer">
        <div id="powered-by"><a href="http://mahara.org/"><img src="<?php echo Dwoo_Plugin_theme_url($this, 'images/powered_by_mahara.png', null);?>" border="0" alt="Powered by Mahara"></a></div>
        <!-- This site is powered by Mahara, an Open Source
             ePortfolio system. See http://mahara.org/ for more
             details.
             NOTE: this image and link are a way that you can
             support the Mahara project. Please consider
             displaying them on your site to spread the word! -->
        <div id="footer-nav">
        <?php 
$_fh0_data = (is_string($tmp=(isset($this->scope["FOOTERMENU"]) ? $this->scope["FOOTERMENU"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
$this->globals["foreach"]['footermenu'] = array
(
	"index"		=> 0,
	"first"		=> null,
);
$_fh0_glob =& $this->globals["foreach"]['footermenu'];
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['item'])
	{
		$_fh0_glob["first"] = (string) ($_fh0_glob["index"] === 0);
/* -- foreach start output */
?>
          <?php if (! (is_string($tmp=(isset($this->globals["foreach"]["footermenu"]["first"]) ? $this->globals["foreach"]["footermenu"]["first"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><span class="bar-before"><?php 
}?><a href="<?php echo (is_string($tmp=$this->scope["item"]["url"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["item"]["title"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></a><?php if (! (is_string($tmp=(isset($this->globals["foreach"]["footermenu"]["first"]) ? $this->globals["foreach"]["footermenu"]["first"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?></span><?php 
}?>

        <?php 
/* -- foreach end output */
		$_fh0_glob["index"]+=1;
	}
}?>

        </div>
        <!-- there is a div id="performance-info" wrapping this --><?php echo Dwoo_Plugin_mahara_performance_info($this);?>

		<div id="version"><?php echo Dwoo_Plugin_mahara_version($this);?></div>
		<div class="cb"></div>
      </div><!-- footer -->
    </div><!-- footer-wrap -->
</div><!-- container -->
<?php if ((is_string($tmp=(isset($this->scope["ADDITIONALHTMLFOOTER"]) ? $this->scope["ADDITIONALHTMLFOOTER"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo (isset($this->scope["ADDITIONALHTMLFOOTER"]) ? $this->scope["ADDITIONALHTMLFOOTER"] : null);

}?>

</body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>