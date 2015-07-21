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

require_once (__DIR__ . '/../basetestcase.php');

class ScheduleServiceTest extends \OCA\EasyBackup\BaseTestCase {
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ScheduleService
	 */
	private $cut;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ConfigService
	 */
	private $configServiceMock;

	protected function setUp() {
		parent::setUp();
		
		$this->configServiceMock = $configServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\ConfigService')->disableOriginalConstructor()->getMock();
		$this->container->registerService('ConfigService', 
				function ($c) use($configServiceMock) {
					return $configServiceMock;
				});
		
		$this->cut = $this->container->query('ScheduleService');
	}

	public function testIsToBeExecutedNow() {
		// Not scheduled
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue(false));
		
		$retVal = $this->cut->isToBeExecutedNow(0);
		$this->assertFalse($retVal);
	}

	public function testIsToBeExecutedNow1() {
		// Never executed before, hour NOK
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('hours_01'));
		
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		$firstRunAtHour = intval($now->add(new \DateInterval('PT2H'))->format('H'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour);
		$this->assertFalse($retVal);
	}

	public function testIsToBeExecutedNow2() {
		// Never executed before, hour OK
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('hours_01'));
		
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		$firstRunAtHour = intval($now->format('H'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour);
		$this->assertTrue($retVal);
	}

	public function testIsToBeExecutedNow3() {
		// Executed the day before, scheduled to run every day
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('days_01'));
		
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		$firstRunAtHour = intval($now->format('H'));
		
		$yesterday = $now->sub(new \DateInterval('P1D'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour, $yesterday);
		$this->assertTrue($retVal);
	}

	public function testIsToBeExecutedNow4() {
		// Executed 12h before, scheduled to run every day
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('days_01'));
		
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		$firstRunAtHour = intval($now->format('H')) + 1;
		
		$twelveHoursAgo = $now->sub(new \DateInterval('PT12H'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour, $twelveHoursAgo);
		$this->assertFalse($retVal);
	}

	public function testIsToBeExecutedNow5() {
		// Executed 12h before, scheduled to run every 2 hours
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('hours_02'));
		
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		$firstRunAtHour = intval($now->add(new \DateInterval('PT2H'))->format('H'));
		
		$twelveHoursAgo = $now->sub(new \DateInterval('PT12H'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour, $twelveHoursAgo);
		$this->assertTrue($retVal);
	}

	public function testIsToBeExecutedNow6() {
		// Executed 1h before, scheduled to run every 2 hours
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('hours_02'));
		
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		$firstRunAtHour = intval($now->add(new \DateInterval('PT2H'))->format('H'));
		
		$twelveHoursAgo = $now->sub(new \DateInterval('PT1H'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour, $twelveHoursAgo);
		$this->assertFalse($retVal);
	}

	public function testIsToBeExecutedNow7() {
		// Executed 12h before, scheduled to run the current day of week, time is due
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('dayofweek_' . $now->format('w')));
		
		$firstRunAtHour = intval($now->format('H'));
		
		$twelveHoursAgo = $now->sub(new \DateInterval('PT12H'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour, $twelveHoursAgo);
		$this->assertTrue($retVal);
	}

	public function testIsToBeExecutedNow8() {
		// Executed 12h before, scheduled to run the current day of week, time is not due
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('dayofweek_' . $now->format('w')));
		
		$firstRunAtHour = intval($now->add(new \DateInterval('PT2H'))->format('H'));
		
		$twelveHoursAgo = $now->sub(new \DateInterval('PT12H'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour, $twelveHoursAgo);
		$this->assertFalse($retVal);
	}

	public function testIsToBeExecutedNow9() {
		// Executed 12h before, scheduled to run the current day of month, time is due
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('dayofmonth_' . $now->format('m')));
		
		$firstRunAtHour = intval($now->format('H'));
		
		$twelveHoursAgo = $now->sub(new \DateInterval('PT12H'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour, $twelveHoursAgo);
		$this->assertTrue($retVal);
	}

	public function testIsToBeExecutedNow10() {
		// Executed 12h before, scheduled to run another day of month time is due
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('dayofmonth_' . $now->add(new \DateInterval('P1D'))->format('m')));
		
		$firstRunAtHour = intval($now->add(new \DateInterval('PT2H'))->format('H'));
		
		$twelveHoursAgo = $now->sub(new \DateInterval('PT12H'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour, $twelveHoursAgo);
		$this->assertFalse($retVal);
	}

	public function testIsToBeExecutedNow11() {
		// Wrong schedule parameter
		$this->setExpectedException('\OCA\EasyBackup\EasyBackupException');
		
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		
		$this->configServiceMock->expects($this->once())->method('getAppValue')->with($this->equalTo('SCHEDULED'))->will(
				$this->returnValue('invalidformat'));
		
		$firstRunAtHour = intval($now->format('H'));
		
		$twelveHoursAgo = $now->sub(new \DateInterval('PT12H'));
		$retVal = $this->cut->isToBeExecutedNow($firstRunAtHour, $twelveHoursAgo);
	}
}