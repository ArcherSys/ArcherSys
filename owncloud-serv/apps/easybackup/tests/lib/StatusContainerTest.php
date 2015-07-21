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
use OCA\EasyBackup\BackupCompletedCallbackHandler;
use \OCA\EasyBackup\AppInfo\Application;

require_once (__DIR__ . '/../basetestcase.php');

class StatusContainerTest extends \PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var \OCA\EasyBackup\StatusContainer
	 */
	private $cut;

	protected function setUp() {
		$this->cut = new StatusContainer();
	}

	public function testGetStatusOk() {
		$this->cut->addStatus('test', \OCA\EasyBackup\StatusContainer::OK, 'loc_test');
		$retVal = $this->cut->getStatus('test');
		$this->assertEquals(\OCA\EasyBackup\StatusContainer::OK, $retVal);
	}

	public function testGetStatusNok() {
		$this->cut->addStatus('test', \OCA\EasyBackup\StatusContainer::ERROR, 'loc_test');
		$retVal = $this->cut->getStatus('test');
		$this->assertEquals(\OCA\EasyBackup\StatusContainer::ERROR, $retVal);
	}

	public function testGetStatusException() {
		$this->setExpectedException('\OCA\EasyBackup\EasyBackupException');
		$this->cut->getStatus('test');
	}

	public function testGetStatusAsText() {
		$this->cut->addStatus('test', \OCA\EasyBackup\StatusContainer::OK, 'loc_test');
		$retVal = $this->cut->getStatusAsText('test');
		$this->assertEquals('loc_test', $retVal);
	}

	public function testIsAllOkPositive() {
		$this->cut->addStatus('test1', \OCA\EasyBackup\StatusContainer::OK, 'loc_test1');
		$this->cut->addStatus('test2', \OCA\EasyBackup\StatusContainer::OK, 'loc_test2');
		$retVal = $this->cut->getOverallStatus();
		$this->assertEquals(\OCA\EasyBackup\StatusContainer::OK, $retVal);
	}

	public function testIsAllOkWarn() {
		$this->cut->addStatus('test1', \OCA\EasyBackup\StatusContainer::OK, 'loc_test1');
		$this->cut->addStatus('test2', \OCA\EasyBackup\StatusContainer::WARN, 'loc_test2');
		$this->cut->addStatus('test3', \OCA\EasyBackup\StatusContainer::OK, 'loc_test3');
		$retVal = $this->cut->getOverallStatus();
		$this->assertEquals(\OCA\EasyBackup\StatusContainer::WARN, $retVal);
	}

	public function testIsAllOkError() {
		$this->cut->addStatus('test1', \OCA\EasyBackup\StatusContainer::OK, 'loc_test1');
		$this->cut->addStatus('test2', \OCA\EasyBackup\StatusContainer::WARN, 'loc_test2');
		$this->cut->addStatus('test3', \OCA\EasyBackup\StatusContainer::ERROR, 'loc_test3');
		$retVal = $this->cut->getOverallStatus();
		$this->assertEquals(\OCA\EasyBackup\StatusContainer::ERROR, $retVal);
	}
}