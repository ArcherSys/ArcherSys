<?php
/**
 * ownCloud - Secure Container
 *
 * @author Lukas Zurschmiede
 * @copyright 2014 Lukas Zurschmiede <l.zurschmiede@ranta.ch>
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
 */

// Set the content type to Javascript
header("Content-type: text/javascript");

// Check for access and enabled app
\OCP\JSON::checkLoggedIn();
if (!\OCP\App::isEnabled('secure_container')) {
	\OCP\JSON::error('Application "secure_container" is not enabled.');
}

// Get data
$app_dir = \OC_App::getInstallPath() . DIRECTORY_SEPARATOR . 'secure_container' . DIRECTORY_SEPARATOR . 'js' . DIRECTORY_SEPARATOR . '3rdparty' . DIRECTORY_SEPARATOR;
$content = '';
$wrapper_function = 'js_wrapper';
$wrapper_code = '';

switch (strtolower(stripslashes($_REQUEST['app']))) {
	case 'sjcl':
		$file = $app_dir . 'sjcl' . DIRECTORY_SEPARATOR . 'sjcl.js';
		$content = file_get_contents($file);
		$wrapper_function = 'OC_SJCL';
		$wrapper_code = 'this.sjcl = sjcl;';
		break;
	default:
		$content = '';
}

?>
function __<?php print $wrapper_function; ?>() {
	<?php print($content); ?>
	<?php print($wrapper_code); ?>
}
var <?php print $wrapper_function; ?> = new __<?php print $wrapper_function; ?>();