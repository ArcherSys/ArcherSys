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
namespace OCA\EasyBackup;

use OCA\EasyBackup\AppInfo\Application;

class BackupCommandHandler implements ICommandHandler {
	
	/**
	 *
	 * @var \OCP\IContainer
	 */
	private $container;

	public function getCommand() {
		return $this->getContainer()->query('ConfigService')->getBackupCommand();
	}

	public function preExec() {
		$logfileName = $this->getContainer()->query('ConfigService')->getLogfileName();
		$date = date('Y-m-d H:i:s e');
		file_put_contents($logfileName, "[$date] Starting backup...\n", FILE_APPEND);
		if ($this->getContainer()->query('BackupService')->isBackupExecuting()) {
			file_put_contents($logfileName, "\n[$date] Backup already running, skipping backup execution\n", FILE_APPEND);
			return false;
		}
		$this->getContainer()->query('BackupService')->setBackupRunning(true);
		return true;
	}
	
	/*
	 * (non-PHPdoc)
	 * @see \OCA\EasyBackup\ICommandHandler::postExec()
	 */
	public function postExec($arg) {
		$backupService = $this->getContainer()->query('BackupService');
		$backupService->finishBackup($arg);
	}

	private function getContainer() {
		if (! $this->container) {
			$app = new Application();
			$this->container = $app->getContainer();
		}
		return $this->container;
	}
}