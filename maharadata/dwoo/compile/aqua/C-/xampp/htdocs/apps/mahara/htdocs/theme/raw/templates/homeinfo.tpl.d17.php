<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
/* end template head */ ob_start(); /* template body */ ?><div id="home-info-container">
    <?php if ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
        <div id="hideinfo" class="nojs-hidden-block">
            <a href="#" title="<?php echo Dwoo_Plugin_str($this, 'Hide2', 'mahara', null, null, null, null, null);?>">
                <img src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_close.png', null);?>" alt="<?php echo Dwoo_Plugin_str($this, 'Close', 'mahara', null, null, null, null, null);?>" />
            </a>
        </div>
    <?php 
}?>

    <table class="home-info-boxes<?php if ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> loggedin<?php 
}?> fullwidth">
    <tr>
        <td><?php if ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><a href="<?php echo (is_string($tmp=$this->scope["url"]["views"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" title="<?php echo Dwoo_Plugin_str($this, 'create', 'mahara', null, null, null, null, null);?>"><?php 
}?><div id="home-info-create" class="home-info-box">
            <h2 class="title"><?php echo Dwoo_Plugin_str($this, 'create', 'mahara', null, null, null, null, null);?></h2>
            <p><?php echo Dwoo_Plugin_str($this, 'createsubtitle', 'mahara', null, null, null, null, null);?></p>
            <div class="mask"><div class="detail"><?php echo Dwoo_Plugin_str($this, 'createdetail', 'mahara', null, null, null, null, null);?></div></div>
            </div><?php if ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?></a><?php 
}?>

        </td>
        <td><?php if ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><a href="<?php echo (is_string($tmp=$this->scope["url"]["share"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php 
}?><div id="home-info-share" class="home-info-box">
            <h2 class="title"><?php echo Dwoo_Plugin_str($this, 'share', 'mahara', null, null, null, null, null);?></h2>
            <p><?php echo Dwoo_Plugin_str($this, 'sharesubtitle', 'mahara', null, null, null, null, null);?></p>
            <div class="mask"><div class="detail"><?php echo Dwoo_Plugin_str($this, 'sharedetail', 'mahara', null, null, null, null, null);?></div></div>
            </div><?php if ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?></a><?php 
}?>

        </td>
        <td><?php if ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><a href="<?php echo (is_string($tmp=$this->scope["url"]["groups"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php 
}?><div id="home-info-engage" class="home-info-box">
            <h2 class="title"><?php echo Dwoo_Plugin_str($this, 'engage', 'mahara', null, null, null, null, null);?></h2>
            <p><?php echo Dwoo_Plugin_str($this, 'engagesubtitle', 'mahara', null, null, null, null, null);?></p>
            <div class="mask"><div class="detail"><?php echo Dwoo_Plugin_str($this, 'engagedetail', 'mahara', null, null, null, null, null);?></div></div>
            </div><?php if ((is_string($tmp=(($tmp = (isset($this->scope["USER"]) ? $this->scope["USER"] : null)) ? $tmp->is_logged_in() : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?></a><?php 
}?>

        </td>
    </tr>
    </table>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>