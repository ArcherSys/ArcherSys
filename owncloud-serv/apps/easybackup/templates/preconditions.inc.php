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
if ($_ ['statusContainer']->getOverallStatus() == \OCA\EasyBackup\StatusContainer::ERROR) {
	$checkClass = 'easybackup_redcheck';
} elseif ($_ ['statusContainer']->getOverallStatus() == \OCA\EasyBackup\StatusContainer::WARN) {
	$checkClass = 'easybackup_yellowcheck';
} else {
	$checkClass = 'easybackup_greencheck';
}
?>

<span id="easybackup_toggle_status_details">
<?php
if ($_ ['statusContainer']->getOverallStatus() == \OCA\EasyBackup\StatusContainer::OK) {
	p($l->t('All operating conditions were successfully verified'));
} elseif ($_ ['statusContainer']->getOverallStatus() == \OCA\EasyBackup\StatusContainer::WARN) {
	p($l->t('Imperfect operating conditions'));
} else {
	p($l->t('Verification of operating conditions failed'));
}
?>
</span>
<div id="easybackup_status_details">
	<ul>
		<?php
		foreach ( $_ ['statusContainer']->getAllStatus() as $singleStatus ) {
			if ($singleStatus ['status'] == \OCA\EasyBackup\StatusContainer::ERROR) {
				$checkClass = 'easybackup_redcheck';
			} elseif ($singleStatus ['status'] == \OCA\EasyBackup\StatusContainer::WARN) {
				$checkClass = 'easybackup_yellowcheck';
			} else {
				$checkClass = 'easybackup_greencheck';
			}
			print_unescaped("<li class=\"$checkClass\">" . $singleStatus ['localized'] . '</li>');
		}
		?>
	</ul>
</div>
