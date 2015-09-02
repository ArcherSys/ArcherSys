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

use \OCA\EasyBackup\BaseTestCase;
use \OCA\EasyBackup\StatusContainer;

require_once (__DIR__ . '/../basetestcase.php');

class PageControllerTest extends \OCA\EasyBackup\BaseTestCase {

	/**
	 *
	 * @var \OCA\EasyBackup\Controller\PageController
	 */
	private $cut;

	/**
	 *
	 * @var \OCA\EasyBackup\Service\BackupService
	 */
	private $backupServiceMock;

	/**
	 *
	 * @var \OC\AppFramework\DependencyInjection\DiContainer
	 */
	private $containerMock;

	protected function setUp() {
		parent::setUp();

		$configServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\ConfigService')->disableOriginalConstructor()->getMock();
		$this->container->registerService('ConfigService',
				function ($c) use($configServiceMock) {
					return $configServiceMock;
				});

		$this->backupServiceMock = $backupServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\BackupService')->disableOriginalConstructor()->getMock();
		$this->container->registerService('BackupService',
				function ($c) use($backupServiceMock) {
					return $backupServiceMock;
				});

		$urlGeneratorMock = $this->getMock('\OCP\IURLGenerator');
		$this->container->registerService('URLGenerator', function ($c) use($urlGeneratorMock) {
			return $urlGeneratorMock;
		});

		$this->containerMock = $containerMock = $this->getMockBuilder('\OC\AppFramework\DependencyInjection\DiContainer')->disableOriginalConstructor()->getMock();
		$this->container->registerService('Container', function ($c) use($containerMock) {
			return $containerMock;
		});

		$this->cut = $this->container->query('PageController');
	}

	public function testConfiguration() {
		$this->responseFactoryMock->expects($this->once())->method('createTemplateResponse')->with($this->equalTo('easybackup'),
				$this->equalTo('index'),
				$this->callback(function ($params) {
					return $params ['subTemplate'] == 'configuration.inc';
				}));
		$retVal = $this->cut->configuration();
	}

	public function testBackup() {
		$this->responseFactoryMock->expects($this->once())->method('createTemplateResponse')->with($this->equalTo('easybackup'),
				$this->equalTo('index'),
				$this->callback(function ($params) {
					return $params ['subTemplate'] == 'backup.inc';
				}));
		$retVal = $this->cut->backup();
	}

	public function testRestore() {
		$this->responseFactoryMock->expects($this->once())->method('createTemplateResponse')->with($this->equalTo('easybackup'),
				$this->equalTo('index'),
				$this->callback(function ($params) {
					return $params ['subTemplate'] == 'restore.inc';
				}));
		$retVal = $this->cut->restore();
	}

	public function testIndexConfigurationOkBackupOk() {
		$statusContainer = new StatusContainer();
		$statusContainer->addStatus('mockStatus', StatusContainer::OK, '');

		$this->backupServiceMock->expects($this->once())->method('createStatusInformation')->will(
				$this->returnValue($statusContainer));

		$this->backupServiceMock->expects($this->atLeastOnce())->method('isLastBackupSuccessful')->will($this->returnValue(true));

		$this->containerMock->expects($this->once())->method('isAdminUser')->will($this->returnValue(true));

		$this->responseFactoryMock->expects($this->once())->method('createTemplateResponse')->with($this->equalTo('easybackup'),
				$this->equalTo('index'),
				$this->callback(function ($params) {
					return $params ['subTemplate'] == 'restore.inc';
				}));
		$retVal = $this->cut->index();
	}

	public function testIndexNoAdmin() {
		$this->responseFactoryMock->expects($this->once())->method('createTemplateResponse')->with($this->equalTo('easybackup'),
				$this->equalTo('forbidden'), $this->equalTo(array ()));
		$retVal = $this->cut->index();
	}
}