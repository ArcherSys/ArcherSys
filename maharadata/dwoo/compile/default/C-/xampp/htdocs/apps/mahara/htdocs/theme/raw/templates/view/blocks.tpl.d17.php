<?php
/* template head */
if (function_exists('Dwoo_Plugin_include')===false)
	$this->getLoader()->loadPlugin('include');
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
if (function_exists('Dwoo_Plugin_theme_url')===false)
	$this->getLoader()->loadPlugin('theme_url');
/* end template head */ ob_start(); /* template body */ ;
if ((is_string($tmp=(isset($this->scope["microheaders"]) ? $this->scope["microheaders"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
  <?php echo Dwoo_Plugin_include($this, "viewmicroheader.tpl", null, null, null, '_root', null);?>

<?php 
}
else {
?>
  <?php echo Dwoo_Plugin_include($this, "header.tpl", null, null, null, '_root', null);?>

  <h1><?php echo (is_string($tmp=$this->scope["viewtitle"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></h1>
<?php 
}?>


<?php echo Dwoo_Plugin_include($this, "view/editviewtabs.tpl", null, null, null, '_root', null, array('selected' => 'content', 'new' => (is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 'issiteview' => (is_string($tmp=(isset($this->scope["issiteview"]) ? $this->scope["issiteview"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

<div class="subpage rel cl" id="tabcontent" selected='content'>

  <form action="<?php echo (is_string($tmp=$this->scope["formurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" method="post">
  <input type="submit" name="<?php echo (is_string($tmp=$this->scope["action_name"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" id="action-dummy" class="hidden">
  <input type="hidden" id="viewid" name="id" value="<?php echo (is_string($tmp=$this->scope["view"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
  <input type="hidden" name="change" value="1">
  <input type="hidden" id="category" name="c" value="<?php echo (is_string($tmp=$this->scope["category"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
  <input type="hidden" name="sesskey" value="<?php echo (is_string($tmp=$this->scope["SESSKEY"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
  <?php if ((is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><input type="hidden" name="new" value="1"><?php 
}?>

  <div id="editcontent-sidebar-wrapper">
    <div id="editcontent-sidebar">
    <?php echo Dwoo_Plugin_include($this, "view/contenteditor.tpl", null, null, null, '_root', null, array('selected' => 'content', 'new' => (is_string($tmp=(isset($this->scope["new"]) ? $this->scope["new"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)));?>

    <?php if ((is_string($tmp=(isset($this->scope["viewthemes"]) ? $this->scope["viewthemes"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
        <div id="select-theme">
            <div id="select-theme-header"><?php echo Dwoo_Plugin_str($this, 'theme', 'view', null, null, null, null, null);?></div>
            <select id="viewtheme-select" name="viewtheme">
            <?php 
$_fh3_data = (is_string($tmp=(isset($this->scope["viewthemes"]) ? $this->scope["viewthemes"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh3_data) === true)
{
	foreach ($_fh3_data as $this->scope['themeid']=>$this->scope['themename'])
	{
/* -- foreach start output */
?>
                <option value="<?php echo (is_string($tmp=$this->scope["themeid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((is_string($tmp=(isset($this->scope["themeid"]) ? $this->scope["themeid"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == (is_string($tmp=(isset($this->scope["viewtheme"]) ? $this->scope["viewtheme"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> selected="selected" style="font-weight: bold;"<?php 
}?>><?php echo (is_string($tmp=$this->scope["themename"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></option>
            <?php 
/* -- foreach end output */
	}
}?>

            </select>
        </div>
    <?php 
}?>

    </div>
  </div>

<?php if ((is_string($tmp=(isset($this->scope["columns"]) ? $this->scope["columns"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
        <div id="page">
            <div id="bottom-pane">
                <div id="column-container">
                    <div id="blocksinstruction" class="center">
                        <?php echo Dwoo_Plugin_str($this, 'blocksintructionnoajax', 'view', null, null, null, null, null);?>

                    </div>
                        <?php echo (isset($this->scope["columns"]) ? $this->scope["columns"] : null);?>

                    <div class="cb"></div>
                </div>
            </div>
            <script type="text/javascript">
            
            insertSiblingNodesAfter('bottom-pane', DIV({'id': 'views-loading'}, IMG({'src': config.theme['images/loading.gif'], 'alt': ''}), ' ', get_string('loading')));
            
            </script>
        </div>
    </form>

    <div id="view-wizard-controls" class="center">
        <?php if ((is_string($tmp=(isset($this->scope["issitetemplate"]) ? $this->scope["issitetemplate"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
            <form action="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>admin/site/views.php" method="GET">
                <input class="submit" type="submit" value="<?php echo Dwoo_Plugin_str($this, 'done', 'mahara', null, null, null, null, null);?>">
            </form>
        <?php 
}
else {
?>
            <form action="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ((is_string($tmp=(isset($this->scope["groupid"]) ? $this->scope["groupid"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

if ((is_string($tmp=(isset($this->scope["viewtype"]) ? $this->scope["viewtype"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'grouphomepage') {

echo (is_string($tmp=$this->scope["groupurl"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);

}
else {
?>view/groupviews.php<?php 
}?>

                    <?php 
}
elseif ((is_string($tmp=(isset($this->scope["institution"]) ? $this->scope["institution"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>view/institutionviews.php<?php 
}
elseif ((is_string($tmp=(isset($this->scope["viewtype"]) ? $this->scope["viewtype"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'dashboard') {
?>index.php<?php 
}
else {
?>view/index.php<?php 
}?>" method="GET">
            <?php if ((is_string($tmp=(isset($this->scope["groupid"]) ? $this->scope["groupid"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                <?php if ((is_string($tmp=(isset($this->scope["viewtype"]) ? $this->scope["viewtype"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 'grouphomepage') {
?>
                <input type="hidden" name="id" value="<?php echo (is_string($tmp=$this->scope["groupid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <?php 
}
else {
?>
                <input type="hidden" name="group" value="<?php echo (is_string($tmp=$this->scope["groupid"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
                <?php 
}?>

            <?php 
}
elseif ((is_string($tmp=(isset($this->scope["institution"]) ? $this->scope["institution"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
                <input type="hidden" name="institution" value="<?php echo (is_string($tmp=$this->scope["institution"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>">
            <?php 
}?>

                <input class="submit" type="submit" value="<?php echo Dwoo_Plugin_str($this, 'done', 'mahara', null, null, null, null, null);?>">
            </form>
        <?php 
}?>

    </div>

<?php 
}
elseif ((is_string($tmp=(isset($this->scope["block"]) ? $this->scope["block"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <div class="blockconfig-background">
        <div class="blockconfig-container">
            <?php echo (isset($this->scope["block"]["html"]) ? $this->scope["block"]["html"]:null);?>

        </div>
    </div>
    <?php if ((is_string($tmp=(isset($this->scope["block"]["javascript"]) ? $this->scope["block"]["javascript"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><script type="text/javascript"><?php echo (isset($this->scope["block"]["javascript"]) ? $this->scope["block"]["javascript"]:null);?></script><?php 
}?>

<?php 
}?>

</div>
<div id="addblock" class="blockinstance cb configure hidden" role="dialog" aria-labelledby="addblock-heading" tabindex="-1">
    <div class="blockinstance-controls">
        <input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_close.png', null);?>" class="deletebutton" name="action_removeblockinstance_id_<?php echo (is_string($tmp=$this->scope["id"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" alt="<?php echo Dwoo_Plugin_str($this, 'Close', 'mahara', null, null, null, null, null);?>">
    </div>
    <div class="blockinstance-header">
        <h2 id="addblock-heading" class="title"></h2>
    </div>
    <div class="blockinstance-content">
        <?php echo (isset($this->scope["addform"]) ? $this->scope["addform"] : null);?>

    </div>
</div>
<div id="configureblock" class="blockinstance cb configure hidden" role="dialog">
    <div class="blockinstance-controls">
        <input type="image" src="<?php echo Dwoo_Plugin_theme_url($this, 'images/btn_close.png', null);?>" class="deletebutton" name="close_configuration" alt="<?php echo Dwoo_Plugin_str($this, 'closeconfiguration', 'view', null, null, null, null, null);?>">
    </div>
    <div class="blockinstance-header">
    </div>
    <div class="blockinstance-content">
    </div>
</div>
<?php if ((is_string($tmp=(isset($this->scope["microheaders"]) ? $this->scope["microheaders"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo Dwoo_Plugin_include($this, "microfooter.tpl", null, null, null, '_root', null);

}
else {

echo Dwoo_Plugin_include($this, "footer.tpl", null, null, null, '_root', null);

}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>