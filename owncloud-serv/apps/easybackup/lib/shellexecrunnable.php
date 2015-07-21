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

use \OCA\EasyBackup\Service\ShellExecService;
use \OCP\BackgroundJob;

class ShellExecRunnable implements IRunnable {
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ShellExecService
	 */
	private $shellExecService;

	public function __construct(ShellExecService $shellExecService) {
		$this->shellExecService = $shellExecService;
	}
	
	/*
	 * (non-PHPdoc)
	 * @see OCA\EasyBackup.IRunnable::run()
	 */
	public function run($commandHandlerString) {
		$commandHandler = new $commandHandlerString();
		if ($commandHandler->preExec()) {
			$result = $this->shellExecService->shellExec($commandHandler->getCommand());
			$commandHandler->postExec($result->isOk());
			return $result->isOk();
		}
		return false;
	}
}