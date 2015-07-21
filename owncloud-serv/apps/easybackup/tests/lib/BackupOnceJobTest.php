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

class RunOnceJobTest extends \OCA\EasyBackup\BaseTestCase {
	
	/**
	 *
	 * @var \OCA\EasyBackup\RunOnceJob
	 */
	private $cut;
	
	/**
	 *
	 * @var \OCA\EasyBackup\ShellExecRunnable
	 */
	private $shellExecRunnableMock;

	protected function setUp() {
		parent::setUp();
		
		$this->shellExecRunnableMock = $shellExecRunnableMock = $this->getMockBuilder('\OCA\EasyBackup\ShellExecRunnable')->disableOriginalConstructor()->getMock();
		$this->container->registerService('ShellExecRunnable', 
				function ($c) use($shellExecRunnableMock) {
					return $shellExecRunnableMock;
				});
		
		$this->cut = new RunOnceJob();
		$reflection = new \ReflectionObject($this->cut);
		$container = $reflection->getProperty('runnable');
		$container->setAccessible(true);
		$container->setValue($this->cut, $this->shellExecRunnableMock);
	}

	public function testGetRunnable() {
		$this->shellExecRunnableMock->expects($this->once())->method('run')->with($this->equalTo('test'));
		$this->cut->run('test');
	}
}