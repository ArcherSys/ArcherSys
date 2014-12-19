<!--
 * ownCloud - EasyBackup
 *
 * @author Sebastian Kanzow
 * @copyright 2014 System k2 GmbH  info@systemk2.de
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
-->

<div id="app">
	<div id="app-navigation">
		<ul class="with-icon">
			<li class="<?php print_unescaped($_['subTemplate'] == 'configuration.inc' ? 'active' : ''); ?>"><a href="<?php print_unescaped($_['configurationUrl']);?>"><?php p($l->t('Configuration')); ?> </a></li>
			<li class="<?php print_unescaped($_['subTemplate'] == 'backup.inc' ? 'active' : ''); ?>"><a href="<?php print_unescaped($_['backupUrl']);?>"><?php p($l->t('Backup')); ?> </a></li>
			<li class="<?php print_unescaped($_['subTemplate'] == 'restore.inc' ? 'active' : ''); ?>"><a href="<?php print_unescaped($_['restoreUrl']);?>"><?php p($l->t('Recovery')); ?> </a></li>
		</ul>
	</div>
	<div id="app-content">
		<div id="easybackup_content">
			<div id="easybackup_partner">
				<span class="easybackup_logo">&nbsp;</span> free! partner edition with <a class="easybackup_agitos_logo" href="http://www.trustedspace.de" target="_new">&nbsp;</a>
			</div>
			<div>
				<?php print_unescaped($this->inc($_['subTemplate'])); ?>
			</div>
		</div>
		<div id="easybackup_status">
			<div id="easybackup_preconditions">
				<?php if($_['subTemplate'] == 'configuration.inc') print_unescaped($this->inc('preconditions.inc')); ?>
			</div>
			<div id="easybackup_lastbackup">
				<?php if($_['subTemplate'] != 'configuration.inc') print_unescaped($this->inc('lastbackup.inc')); ?>
			</div>
			<div>
				<?php if($_['subTemplate'] != 'configuration.inc') print_unescaped($this->inc('logfile.inc')); ?>
			</div>
			<div id="easybackup_credits">
				Icon design:&nbsp;<a target="_new" href="http://www.fatcow.com/free-icons">www.fatcow.com</a>
			</div>
		</div>
	</div>
</div>

