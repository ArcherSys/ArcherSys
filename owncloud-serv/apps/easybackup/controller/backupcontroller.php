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
namespace OCA\EasyBackup\Controller;

use OCA\EasyBackup\StatusContainer;
use \OCA\EasyBackup\EasyBackupException;
use \OCA\EasyBackup\ResponseFactory;
use \OCA\EasyBackup\Service\BackupService;
use \OCA\EasyBackup\Service\ConfigService;
use \OCP\IL10N;
use \OCP\ILogger;
use \OCP\IRequest;

class BackupController extends BaseController {
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\BackupService
	 */
	protected $backupService;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ConfigService
	 */
	protected $configService;
	
	/**
	 *
	 * @var \OCP\IL10N
	 */
	protected $trans;

	public function __construct($appName, IRequest $request, ILogger $logger, BackupService $backupService, 
			ConfigService $configService, ResponseFactory $responseFactory, IL10N $trans) {
		parent::__construct($appName, $request, $logger, $responseFactory);
		$this->backupService = $backupService;
		$this->configService = $configService;
		$this->trans = $trans;
	}

	/**
	 * @ControllerManaged
	 */
	protected function scheduleBackup() {
		$statusContainer = $this->backupService->createStatusInformation();
		if ($statusContainer->getOverallStatus() == StatusContainer::ERROR) {
			throw new EasyBackupException($this->trans->t('Not all preconditions are met, backup cannot be scheduled'));
		}
		$this->backupService->executeBackup();
	}

	/**
	 * @ControllerManaged
	 *
	 * @param boolean $scheduled        	
	 */
	protected function setBackupScheduled($scheduled) {
		$statusContainer = $this->backupService->createStatusInformation();
		if ($statusContainer->getOverallStatus() == StatusContainer::ERROR) {
			throw new EasyBackupException($this->trans->t('Not all preconditions are met, backup cannot be scheduled'));
		}
		$this->configService->setBackupScheduled($scheduled);
		if ($scheduled) {
			$this->backupService->scheduleBackupJob();
		} else {
			$this->backupService->unScheduleBackupJob();
		}
	}

	/**
	 * @ControllerManaged
	 *
	 * @param string $config        	
	 */
	protected function restoreAction($restoreConfig) {
		$this->backupService->scheduleRestoreJob($restoreConfig);
	}
}
