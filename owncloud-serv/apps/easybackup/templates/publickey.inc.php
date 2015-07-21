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
use \OCA\EasyBackup\StatusContainer;
?>
$this->getStatusContainer()
<span id="easybackup_publicKeyHint" <?php
if ($_ ['statusContainer']->getStatus('privateKeyPresent') != StatusContainer::OK)
	print_unescaped('style="visibility: hidden"');
?>>
		<?php
		p($l->t('In the TrustedSpace config wizard you are asked for a SSH public key.') . ' ');
		if ($_ ['publicKey']) {
			p($l->t('Copy the following key to enable your Owncloud server to access the backup account'));
			print_unescaped('<textarea readonly>');
			print_unescaped($_ ['publicKey']);
			print_unescaped('</textarea>');
		} else {
			p(
					$l->t(
							'Copy the public key corresponding to the private key that you have uploaded to enable your Owncloud server to access the backup account'));
		}
		?>
</span>

