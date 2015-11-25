<?php $this->_tpl_include('overall_header.html'); if ($this->_rootref['WARNING2']) {  ?>
	<div class="errorbox">
		Mods you selected are incompatible! Please select different MODs combination.
	</div>
	<?php } if ($this->_rootref['WARNING']) {  ?>
	<form action="" method="POST">
	<?php $_mods_count = (isset($this->_tpldata['mods'])) ? sizeof($this->_tpldata['mods']) : 0;if ($_mods_count) {for ($_mods_i = 0; $_mods_i < $_mods_count; ++$_mods_i){$_mods_val = &$this->_tpldata['mods'][$_mods_i]; ?>
		<input type="hidden" name="mod[]" value="<?php echo $_mods_val['NAME']; ?>" />
	<?php }} ?>
	<input type="hidden" name="action" value="installModsAndStyle" />
		<div class="errorbox">
			Sorry but you current style is not supported by installed mods!<br>Please install one of the supported styles in administration control panel!<br>The suppotted themes are :<br>
			<table class="errorbox">
                <?php $_dependence_count = (isset($this->_tpldata['dependence'])) ? sizeof($this->_tpldata['dependence']) : 0;if ($_dependence_count) {for ($_dependence_i = 0; $_dependence_i < $_dependence_count; ++$_dependence_i){$_dependence_val = &$this->_tpldata['dependence'][$_dependence_i]; ?>
                  <tr>
                  	<td><input type="radio" name="styleName" value="<?php echo $_dependence_val['NAME']; ?>"/>&nbsp;<b><?php echo $_dependence_val['NAME']; ?></b><br></td>
                  </tr>
				<?php }} ?>
			</table>
			<input type="submit" value="install style and mods" />
		</div>
	</form>
	<?php } else { if ($this->_rootref['SUCCESS']) {  ?>
		<div class="successbox">
			MODs installed successfully!
		</div>
	<?php } ?>
	<form action="" method="POST">
	<input type="hidden" name="action" value="installMods" />
	<table cellspacing="1">
		<caption>Select MODS</caption>
		<col class="col1"/>
		<col class="col2"/>
		<col class="col1"/>
	
		<thead>
			<tr>
				<th>Selection</th>
				<th>MOD name</th>
				<th>Description</th>
			</tr>
		</thead>
		<?php $_result_count = (isset($this->_tpldata['result'])) ? sizeof($this->_tpldata['result']) : 0;if ($_result_count) {for ($_result_i = 0; $_result_i < $_result_count; ++$_result_i){$_result_val = &$this->_tpldata['result'][$_result_i]; ?>
	<tbody>
	<tr>
		<td width="10" align="center">
			<input type="checkbox" name="mod[]" value="<?php echo $_result_val['NAME']; ?>" <?php echo $_result_val['CHECKED']; ?>/>
		</td>
		<td>
			<?php echo $_result_val['NAME']; ?>
		</td>
		<td>
			<?php echo $_result_val['DESC']; ?>			
		</td>
	</tr>
	<?php }} ?>
	<tr>
		<td colspan="3"><input type="submit" value="InstallMe"/></td>
	</tr>
	</tbody>
	</table>
	
	</form>
<?php } $this->_tpl_include('overall_footer.html'); ?>