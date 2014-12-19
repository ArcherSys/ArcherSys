<?php

/**
 * ownCloud - EasyBackup
 *
 * @author Sebastian Kanzow
 * @copyright 2014 System k2 GmbH  info@systemk2.de
 * Based on http://tekkie.flashbit.net/php/tail-functionality-in-php
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
use \OCA\EasyBackup\AppInfo\Application;

require_once (__DIR__ . '/../basetestcase.php');

class BackupControllerTest extends \OCA\EasyBackup\BaseTestCase {
	
	/**
	 *
	 * @var \OCA\EasyBackup\Controller\BackupController
	 */
	private $cut;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\BackupService
	 */
	private $backupServiceMock;
	
	/**
	 *
	 * @var \OCA\EasyBackup\StatusContainer
	 */
	private $statusContainerMock;

	protected function setUp() {
		parent::setUp();
		
		$this->backupServiceMock = $backupServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\BackupService')->setMethods(
				array (
						'executeBackup',
						'createStatusInformation' 
				))->disableOriginalConstructor()->getMock();
		$this->container->registerService('BackupService', 
				function ($c) use($backupServiceMock) {
					return $backupServiceMock;
				});
		
		$configMock = $this->getMock('\OCP\IConfig');
		$this->container->registerService('OwncloudConfig', function ($c) use($configMock) {
			return $configMock;
		});
		
		$configServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\ConfigService')->disableOriginalConstructor()->getMock();
		$this->container->registerService('ConfigService', 
				function ($c) use($configServiceMock) {
					return $configServiceMock;
				});
		
		$this->statusContainerMock = $this->getMockBuilder('\OCA\EasyBackup\StatusContainer')->disableOriginalConstructor()->getMock();
		
		$this->cut = $this->container->query('BackupController');
	}

	public function testScheduleBackupOk() {
		$this->backupServiceMock->expects($this->once())->method('executeBackup');
		$this->statusContainerMock->expects($this->once())->method('getOverallStatus')->will(
				$this->returnValue(\OCA\EasyBackup\StatusContainer::OK));
		$this->backupServiceMock->expects($this->once())->method('createStatusInformation')->will(
				$this->returnValue($this->statusContainerMock));
		$this->cut->scheduleBackup();
	}

	public function testScheduleBackupPreconditionsNok() {
		$this->backupServiceMock->expects($this->never())->method('executeBackup');
		$this->statusContainerMock->expects($this->once())->method('getOverallStatus')->will(
				$this->returnValue(\OCA\EasyBackup\StatusContainer::ERROR));
		$this->backupServiceMock->expects($this->once())->method('createStatusInformation')->will(
				$this->returnValue($this->statusContainerMock));
		$this->responseFactoryMock->expects($this->once())->method('createJSONBadRequestResponse');
		$this->cut->scheduleBackup();
	}
}