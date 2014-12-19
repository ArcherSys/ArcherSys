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
if (! substr(__DIR__, - strlen('easybackup/tests')) == 'easybackup/tests') {
	die('Unit tests for easybackup are located in .../easybackup/tests, e.g. $ phpunit /path/to/apps/easybackup/tests');
}

// You have to create a File with the OC_ROOT_PATH definition,
// if the app is not inside OC's apps directory.
// Create a file bootstrap.php with e.g. : <?php define('OC_ROOT_PATH', '/home/user/workspace/owncloud/');
//
// This file needs to be executed before the test suite with
// phpunit's --bootstrap option
// e.g. phpunit --bootstrap /path/to/bootstrap.php /path/to/easybackup/tests

if (! defined('OC_ROOT_PATH')) {
	// We suppose we're in .../owncloud/apps/easybackup/tests
	// so move up three directories from here
	define('OC_ROOT_PATH', dirname(dirname(dirname(__DIR__))) . DIRECTORY_SEPARATOR);
}

/**
 * Fake \OC class for unit tests
 */
class OC {
	public static $server;
	public static $session;
}

/**
 * To execute without owncloud, we need our own classloader
 *
 * If the app is located inside the owncloud folder, the test can be run like this:
 * foo@bar:/ownclouddir/app/easybackup$ phpunit test
 * otherwise it needs to be executed from inside the owncloud folder, by specifying an absolute
 * path to the test folder, like that:
 * foo@bar:/ownclouddir$ phpunit /appdir/easybackup/test
 */
spl_autoload_register(
		function ($className) {
			$relPath = false;
			$triedPaths = array ();
			if ($className == 'Pimple') {
				require_once OC_ROOT_PATH . '3rdparty/Pimple/Pimple.php';
				return;
			}
			
			if (strpos($className, 'OC_') === 0) {
				$filename = strtolower(str_replace('_', '/', substr($className, 3)) . '.php');
			} else {
				$filename = strtolower(str_replace('\\', '/', substr($className, 3)) . '.php');
			}
			
			if (strpos($className, 'OCA\\EasyBackup') === 0) {
				// Move up two directories from ../easybackup/tests
				$triedPaths [] = $relPath = dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . $filename;
				if (! file_exists($relPath)) {
					// If not found in the root of the app directory, insert '/lib' after app id and try again
					$parts = split('/easybackup/', $relPath);
					if (count($parts) == 2) {
						$triedPaths [] = $relPath = $parts [0] . '/easybackup/lib/' . $parts [1];
					}
				}
			} else if (strpos($className, 'OCP\\') === 0) {
				$triedPaths [] = $relPath = OC_ROOT_PATH . 'lib/public/' . $filename;
			} else if (! file_exists($relPath)) {
				$triedPaths [] = $relPath = OC_ROOT_PATH . 'lib/private/' . $filename;
				// File does not exist, try legacy folder
				if (! file_exists($relPath)) {
					$triedPaths [] = $relPath = OC_ROOT_PATH . 'lib/private/legacy/' . $filename;
				}
			}
			
			if (file_exists($relPath)) {
				require_once $relPath;
			} else {
				die(
						"FATAL: Class $className could not be loaded, because file does not exist in paths: " .
								 print_r($triedPaths, true) . " \n");
			}
		});
