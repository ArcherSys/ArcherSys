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

use \OCA\EasyBackup\ResponseFactory;
use \OCA\EasyBackup\Service\BackupService;
use \OCA\EasyBackup\Service\ConfigService;
use \OCA\EasyBackup\Service\ScheduleService;
use \OCA\EasyBackup\StatusContainer;
use \OC\AppFramework\DependencyInjection\DIContainer;
use \OCP\AppFramework\Http\TemplateResponse;
use \OCP\IL10N;
use \OCP\ILogger;
use \OCP\IRequest;
use \OCP\IURLGenerator;

class PageController extends BaseController {

	/**
	 *
	 * @var \OCA\EasyBackup\Service\BackupService
	 */
	protected $backupService;

	/**
	 *
	 * @var \OCP\IURLGenerator
	 */
	protected $urlGenerator;

	/**
	 *
	 * @var \OCA\EasyBackup\Service\ConfigService
	 */
	protected $configService;

	/**
	 *
	 * @var \OCA\EasyBackup\Service\ScheduleService
	 */
	private $scheduleService;

	/**
	 *
	 * @var \OCA\EasyBackup\StatusContainer
	 */
	private $statusContainer;

	/**
	 *
	 * @var boolean
	 */
	private $isAdmin;

	/**
	 * @var \OC\AppFramework\DependencyInjection\DIContainer
	 */
	private $container;

	public function __construct($appName, IRequest $request, ILogger $logger, BackupService $backupService,
			ConfigService $configService, ScheduleService $scheduleService, IURLGenerator $urlGenerator,
			ResponseFactory $responseFactory, DIContainer $container) {
		parent::__construct($appName, $request, $logger, $responseFactory);
		$this->backupService = $backupService;
		$this->configService = $configService;
		$this->scheduleService = $scheduleService;
		$this->urlGenerator = $urlGenerator;
		$this->container = $container;
	}

	/**
	 * @NoAdminRequired // This is necessary, because otherwise OC redirects endlessly
	 * @NoCSRFRequired
	 */
	public function index() {
		if(!$this->container->isAdminUser()) {
			return $this->responseFactory->createTemplateResponse($this->appName, 'forbidden', array());
		}
		if ($this->getStatusContainer()->getOverallStatus() == \OCA\EasyBackup\StatusContainer::OK) {
			if ($this->backupService->isLastBackupSuccessful()) {
				return $this->restore();
			}
			return $this->backup();
		}
		return $this->configuration();
	}

	/**
	 * @NoCSRFRequired
	 */
	public function configuration() {
		$parameters = $this->createParameters('configuration.inc');
		return $this->responseFactory->createTemplateResponse($this->appName, 'index', $parameters);
	}

	/**
	 * @NoCSRFRequired
	 */
	public function backup() {
		$parameters = $this->createParameters('backup.inc');
		return $this->responseFactory->createTemplateResponse($this->appName, 'index', $parameters);
	}

	/**
	 * @NoCSRFRequired
	 */
	public function restore() {
		$parameters = $this->createParameters('restore.inc');
		return $this->responseFactory->createTemplateResponse($this->appName, 'index', $parameters);
	}

	private function createParameters($subTemplate) {
		$parameters = array (
				'statusContainer' => $this->getStatusContainer(),
				'userName' => $this->configService->getHostUserName(),
				'keyUploadUrl' => $this->urlGenerator->linkToRoute('easybackup.config.uploadSshKey'),
				'schedule' => $this->scheduleService,
				'scheduleTime' => $this->configService->getScheduleTime(),
				'isScheduled' => $this->configService->isBackupScheduled(),
				'configurationUrl' => $this->urlGenerator->linkToRoute('easybackup.page.configuration'),
				'backupUrl' => $this->urlGenerator->linkToRoute('easybackup.page.backup'),
				'restoreUrl' => $this->urlGenerator->linkToRoute('easybackup.page.restore'),
				'logfileUrl' => $this->urlGenerator->linkToRoute('easybackup.logfileview.getCompleteLogfile'),
				'subTemplate' => $subTemplate,
				'publicKey' => $this->configService->getPublicKey(),
				'isExecuting' => $this->backupService->isExecutingOrWaitingForRun(),
				'lastBackupSuccessful' => $this->backupService->isLastBackupSuccessful(),
				'lastBackupTime' => $this->backupService->getLastBackupTime()
		);

		return $parameters;
	}

	private function getStatusContainer() {
		if ($this->statusContainer == null) {
			$this->statusContainer = $this->backupService->createStatusInformation();
		}
		return $this->statusContainer;
	}
}
