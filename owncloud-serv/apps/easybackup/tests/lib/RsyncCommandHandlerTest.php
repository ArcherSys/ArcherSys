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
namespace OCA\EasyBackup;

use \OCA\EasyBackup\AppInfo\Application;

require_once (__DIR__ . '/../basetestcase.php');

class BackupCommandHandlerTest extends \OCA\EasyBackup\BaseTestCase {
	
	/**
	 *
	 * @var \OCA\EasyBackup\BackupCommandHandler
	 */
	private $cut;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\BackupService
	 */
	private $backupServiceMock;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ConfigService
	 */
	private $configServiceMock;

	protected function setUp() {
		parent::setUp();
		
		$this->backupServiceMock = $backupServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\BackupService')->disableOriginalConstructor()->getMock();
		$this->container->registerService('BackupService', 
				function ($c) use($backupServiceMock) {
					return $backupServiceMock;
				});
		
		$this->configServiceMock = $configServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\ConfigService')->disableOriginalConstructor()->getMock();
		$this->container->registerService('ConfigService', 
				function ($c) use($configServiceMock) {
					return $configServiceMock;
				});
		
		$this->cut = new BackupCommandHandler();
		$reflection = new \ReflectionObject($this->cut);
		$container = $reflection->getProperty('container');
		$container->setAccessible(true);
		$container->setValue($this->cut, $this->container);
	}

	public function testCallbackSuccess() {
		$this->backupServiceMock->expects($this->once())->method('finishBackup')->with($this->equalTo(true));
		$this->cut->postExec(true);
	}

	public function testCallbackFailure() {
		$this->backupServiceMock->expects($this->once())->method('finishBackup')->with($this->equalTo(false));
		$this->cut->postExec(false);
	}

	public function testPreExecFailure() {
		$this->backupServiceMock->expects($this->once())->method('isBackupExecuting')->will($this->returnValue(true));
		$this->configServiceMock->expects($this->once())->method('getLogfileName')->will($this->returnValue('/dev/null'));
		$retVal = $this->cut->preExec();
		$this->assertFalse($retVal);
	}

	public function testPreExecSuccess() {
		$this->backupServiceMock->expects($this->once())->method('isBackupExecuting')->will($this->returnValue(false));
		$this->backupServiceMock->expects($this->once())->method('setBackupRunning')->with($this->equalTo(true));
		$this->configServiceMock->expects($this->once())->method('getLogfileName')->will($this->returnValue('/dev/null'));
		$retVal = $this->cut->preExec();
		$this->assertTrue($retVal);
	}
}