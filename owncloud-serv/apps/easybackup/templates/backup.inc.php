<?php
/**
 * ownCloud - EasyBackup
 *
 * @author Sebastian Kanzow
 * @copyright 2014 System k2 GmbH info@systemk2.de
 *
 *            This library is free software; you can redistribute it and/or
 *            modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 *            License as published by the Free Software Foundation; either
 *            version 3 of the License, or any later version.
 *
 *            This library is distributed in the hope that it will be useful,
 *            but WITHOUT ANY WARRANTY; without even the implied warranty of
 *            MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *            GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 *            You should have received a copy of the GNU Affero General Public
 *            License along with this library. If not, see <http://www.gnu.org/licenses/>.
 *
 */
use \OCA\EasyBackup\StatusContainer;
?>


<div class="bold">
		<?php p($l->t('Configure your individual backup schedule here'));?>
	</div>
<div id="easybackup_schedule">
	<input type="checkbox" id="easybackup_schedule_check" <?php if($_['isScheduled']) print_unescaped('checked="true"'); ?> />
	<?php p($l->t('Execute automatic backups at specified time intervals')); ?>
	<div id="easybackup_schedules" <?php if(!$_['isScheduled']) print_unescaped('style="display: none"'); ?>>
		<div>
			<?php p($l->t('Execution start time') . ':'); ?>
			&nbsp; <select id="easybackup_starthour">
				<?php
				for($i = 0; $i < 24; $i ++) {
					$selected = $_ ['scheduleTime'] === $i ? 'selected="true"' : '';
					print_unescaped(sprintf('<option value="starthour_%02d" %s>', $i, $selected));
					print_unescaped(sprintf('%02dh00</option>\n', $i));
				}
				?>
			</select>
		</div>
		<?php
		foreach ( $_ ['schedule']->getScheduleParams() as $params ) {
			print_unescaped($this->inc('schedule.inc', $params) . '<br>');
		}
		?>
	</div>
</div>
<div class="bold">
	-
	<?php p($l->t('or')); ?>
	-
</div>
<div>
	<button id="easyBackup_startBackup">
		<?php p($l->t('Start backup manually')); ?>
	</button>
	<span id="easybackup_waitbar_span" <?php if($_['isExecuting']) print_unescaped('class="easybackup_waitbar"'); ?>>&nbsp;</span>
</div>