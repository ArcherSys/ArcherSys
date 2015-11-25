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

require_once (__DIR__ . '/../basetestcase.php');

class ScheduledBackupJobTest extends \OCA\EasyBackup\BaseTestCase {
	
	/**
	 *
	 * @var \OCA\EasyBackup\ScheduledBackupJob
	 */
	private $cut;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ScheduleService
	 */
	private $scheduleServiceMock;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ConfigService
	 */
	private $configServiceMock;

	protected function setUp() {
		parent::setUp();
		
		$this->scheduleServiceMock = $scheduleServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\ScheduleService')->disableOriginalConstructor()->getMock();
		$this->container->registerService('ScheduleService', 
				function ($c) use($scheduleServiceMock) {
					return $scheduleServiceMock;
				});
		
		$this->configServiceMock = $configServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\ConfigService')->disableOriginalConstructor()->getMock();
		$this->container->registerService('ConfigService', 
				function ($c) use($configServiceMock) {
					return $configServiceMock;
				});
		
		$this->cut = new ScheduledBackupJob();
	}

	public function testExecute() {
	}
}