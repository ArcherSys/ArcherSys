<div class="bold">
	<?php p($l->t('2 easy steps to recover files from previous snapshots'));?>
</div>
<div class="easybackup_explanation easybackup_bullet">
	1)
	<?php p($l->t('Choose the snapshot and the files to recover at'));?>
	<a href="https://trustedspace.agitos.de/webgui/pages/main.jsf" target="_new">www.trustedspace.de</a>
</div>
<div class="easybackup_explanation easybackup_bullet">
	2)
	<?php p($l->t('Copy/paste your recovery config here') . ':');?>
</div>
<div>
	<textarea id="easybackup_restore_input" data-default="<?php $default = $l->t('Put your config here...'); p($default); ?>">
		<?php p($default); ?>
	</textarea>

</div>
<div>
	<button id="easybackup_restore" disabled>
		<?php
		p($l->t('Recover files'));
		?>
	</button>
</div>
