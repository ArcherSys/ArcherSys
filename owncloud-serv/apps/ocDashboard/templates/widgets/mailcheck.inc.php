<div class="ocDashboard mailCheck items">
	<table width="100%">
		<tr>
			<td><b><?php p($l->t('From')); ?></b></td>
			<td><b><?php  p($l->t('About')); ?></b></td>
		</tr>
			
		<?php 
		
		for($i = 0; $i < count($additionalparams['mails']); $i++){
		?>
		
			<tr>
				<td><?php p($additionalparams['mails'][$i]['from']); ?></td>
				<td><?php p($additionalparams['mails'][$i]['subject']); ?></td>
			</tr>
		
		<?php 
		}

		if($additionalparams['numberAllMails'] != "") {
		?>
		
			<tr><td colspan='2'><span><?php p($l->t("There are %d new mails...", $additionalparams['numberAllMails'])); ?></span></td></tr>
		
		<?php 
		}
		?>
	</table>
</div>
