<?php
/* template head */
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ?>                    </div>
                </div>
		<div class="cb"></div>
    </div>
    <div id="footer-wrap">
		<div class="cb"></div>
    	<div id="powered-by"><a href="http://mahara.org/"><img src="<?php echo Dwoo_Plugin_theme_url($this, 'images/powered_by_mahara.png', null);?>" border="0" alt=""></a></div>
        <div id="release"><a href="http://mahara.org/">Mahara</a> <?php if ((is_string($tmp=(isset($this->scope["releaseargs"]) ? $this->scope["releaseargs"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo Dwoo_Plugin_str($this, 'release', 'admin', (is_string($tmp=(isset($this->scope["releaseargs"]) ? $this->scope["releaseargs"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), null, null, null, null);

}?>, <?php echo Dwoo_Plugin_str($this, 'copyright', 'admin', null, null, null, null, null);?></div>
		<div class="cb"></div>
    </div>
</div>
</body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>