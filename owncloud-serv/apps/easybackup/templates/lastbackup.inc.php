<?php
/**
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
 */
if ($_ ['lastBackupTime'] === null) {
	$checkClass = 'easybackup_yellowcheck';
	$text = $l->t('No backup was executed so far');
} elseif ($_ ['lastBackupSuccessful']) {
	$checkClass = 'easybackup_greencheck';
	$text = $l->t('Last backup completed successfully at') . ' ' . $_ ['lastBackupTime'];
} else {
	$checkClass = 'easybackup_redcheck';
	$text = $l->t('Last backup failed at') . ' ' . $_ ['lastBackupTime'] . ' (' . $l->t('Check logfile for details') . ')';
}
?>

<span id="easybackup_lastbackup_text" class="<?php print_unescaped($checkClass); ?>">
	<?php
	p($text);
	?>
</span>
