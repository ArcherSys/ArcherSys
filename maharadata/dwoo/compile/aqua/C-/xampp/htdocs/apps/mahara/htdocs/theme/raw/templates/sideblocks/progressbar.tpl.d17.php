<?php
/* template head */
if (function_exists('Dwoo_Plugin_str')===false)
	$this->getLoader()->loadPlugin('str');
/* end template head */ ob_start(); /* template body */ ;
if ((is_string($tmp=(isset($this->scope["sbdata"]["data"]) ? $this->scope["sbdata"]["data"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["sbdata"]["preview"]) ? $this->scope["sbdata"]["preview"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["sbdata"]["count"]) ? $this->scope["sbdata"]["count"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) > 1) {
?>
    <div class="sidebar-header">
        <h3><?php if ((is_string($tmp=(isset($this->scope["sbdata"]["preview"]) ? $this->scope["sbdata"]["preview"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {

echo Dwoo_Plugin_str($this, "profilecompletenesspreview", 'mahara', null, null, null, null, null);

}
else {

echo Dwoo_Plugin_str($this, "profilecompleteness", 'mahara', null, null, null, null, null);

}?></h3>
        <?php if ((is_string($tmp=(isset($this->scope["sbdata"]["count"]) ? $this->scope["sbdata"]["count"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) > 1) {
?>
        <script language="javascript">
        function reloadSideBar() {
            window.location.href = window.location.href.split('?')[0]+'?i='+$('progresssidebarselect_institution').value;
        }
        addLoadEvent(function() {
            connect($('progresssidebarselect_institution'), 'onchange', reloadSideBar);
        });
        </script>
        <form class="pieform" name="progresssidebarselect" method="post" action="" id="progresssidebarselect">
        <table cellspacing="0"><tbody>
            <tr id="progresssidebarselect_institution_container" class="select">
                <th><label for="progresssidebarselect_institution"><?php echo Dwoo_Plugin_str($this, 'profilecompletionforwhichinstitution', 'mahara', null, null, null, null, null);?></label></th>
                <td><select class="select autofocus" id="progresssidebarselect_institution" name="institution" tabindex="1" style="">
                <?php 
$_fh8_data = (is_string($tmp=(isset($this->scope["sbdata"]["institutions"]) ? $this->scope["sbdata"]["institutions"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh8_data) === true)
{
	foreach ($_fh8_data as $this->scope['inst']=>$this->scope['displayname'])
	{
/* -- foreach start output */
?>
                    <option value="<?php echo (is_string($tmp=$this->scope["inst"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"<?php if ((is_string($tmp=(isset($this->scope["inst"]) ? $this->scope["inst"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == (is_string($tmp=(isset($this->scope["sbdata"]["institution"]) ? $this->scope["sbdata"]["institution"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?> selected="selected"<?php 
}?>><?php echo str_shorten_html((is_string($tmp=(isset($this->scope["displayname"]) ? $this->scope["displayname"] : null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp), 25, true);?></option>
                <?php 
/* -- foreach end output */
	}
}?>

                </select></td>
            </tr>
        </tbody></table>
        </form>
        <?php 
}?>

    </div>
<?php 
}?>

<?php if ((is_string($tmp=(isset($this->scope["sbdata"]["data"]) ? $this->scope["sbdata"]["data"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) || (is_string($tmp=(isset($this->scope["sbdata"]["preview"]) ? $this->scope["sbdata"]["preview"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?>
    <div class="sidebar-content">
        <div id="progressbarwrap">
        <?php if ((is_string($tmp=(isset($this->scope["sbdata"]["percent"]) ? $this->scope["sbdata"]["percent"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) < 100) {
?>
            <div id="progress_bar_fill" style="width: <?php echo (is_string($tmp=($this->scope["sbdata"]["percent"] * 2)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>px;">&nbsp;</div>
            <p id="progress_bar">
                <span id="progress_bar_percentage"><?php echo (is_string($tmp=$this->scope["sbdata"]["percent"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>%</span>
            </p>
            <div id="profile_completeness_tips">
                <span class="hidden" id="progress_counting_total"><?php echo (is_string($tmp=$this->scope["sbdata"]["totalcounting"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                <span class="hidden" id="progress_completed_total"><?php echo (is_string($tmp=$this->scope["sbdata"]["totalcompleted"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                <strong><?php echo Dwoo_Plugin_str($this, 'profilecompletenesstips', 'mahara', null, null, null, null, null);?></strong>
                <ul>
                <?php 
$_fh9_data = (is_string($tmp=(isset($this->scope["sbdata"]["data"]) ? $this->scope["sbdata"]["data"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
if ($this->isArray($_fh9_data) === true)
{
	foreach ($_fh9_data as $this->scope['item'])
	{
/* -- foreach start output */
?>
                <li<?php if ((is_string($tmp=(isset($this->scope["item"]["display"]) ? $this->scope["item"]["display"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) <= 0) {
?> class="hidden"<?php 
}?>>
                    <span id="progress_counting_<?php echo (is_string($tmp=$this->scope["item"]["artefact"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="hidden"><?php echo (is_string($tmp=$this->scope["item"]["counting"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                    <span id="progress_completed_<?php echo (is_string($tmp=$this->scope["item"]["artefact"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>" class="hidden"><?php echo (is_string($tmp=$this->scope["item"]["completed"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span>
                    <?php if ((is_string($tmp=(isset($this->scope["item"]["link"]) ? $this->scope["item"]["link"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?><a href="<?php echo (is_string($tmp=$this->scope["WWWROOT"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);
echo (is_string($tmp=$this->scope["item"]["link"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php 
}?><span id="progress_item_<?php echo (is_string($tmp=$this->scope["item"]["artefact"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>"><?php echo (is_string($tmp=$this->scope["item"]["label"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?></span><?php if ((is_string($tmp=(isset($this->scope["item"]["link"]) ? $this->scope["item"]["link"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp)) {
?></a><?php 
}?>

                </li>
                <?php 
/* -- foreach end output */
	}
}?>

                </ul>
            </div>
        <?php 
}
else {
?>
            <div id="progress_bar_fill" style="display: none; width: <?php echo (is_string($tmp=($this->scope["sbdata"]["percent"] * 2)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>px;">&nbsp;</div>
            <p id="progress_bar_100">
                <span id="progress_bar_percentage"><?php echo (is_string($tmp=$this->scope["sbdata"]["percent"]) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp);?>%</span>
            </p>
        <?php 
}?>

        </div>
    </div>
<?php 
}
else {
?>
    <?php if ((is_string($tmp=(isset($this->scope["sbdata"]["totalcounting"]) ? $this->scope["sbdata"]["totalcounting"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) == 0 && (is_string($tmp=(isset($this->scope["sbdata"]["count"]) ? $this->scope["sbdata"]["count"]:null)) ? htmlspecialchars($tmp, ENT_QUOTES, $this->charset) : $tmp) > 1) {
?>
    <div class="sidebar-content"><?php echo Dwoo_Plugin_str($this, "noprogressitems", 'mahara', null, null, null, null, null);?></div>
    <?php 
}?>

<?php 
}?>

<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>