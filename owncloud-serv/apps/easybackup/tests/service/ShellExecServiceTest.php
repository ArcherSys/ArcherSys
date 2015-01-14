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

use \OCA\EasyBackup\BaseTestCase;

require_once (__DIR__ . '/../basetestcase.php');

class TestCommandHandler implements ICommandHandler {
	public static $test = 999;

	public function preExec() {
		return true;
	}

	public function postExec($arg) {
		self::$test = $arg;
	}

	public function getCommand() {
		return 'which which';
	}
}

class TestCommandHandlerFailure implements ICommandHandler {
	public static $test = 999;

	public function preExec() {
		return true;
	}

	public function postExec($arg) {
		self::$test = $arg;
	}

	public function getCommand() {
		return 'which non_existent_function';
	}
}

class ShellExecServiceTest extends \OCA\EasyBackup\BaseTestCase {
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ShellExecService
	 */
	private $cut;

	protected function setUp() {
		parent::setUp();
		$this->cut = $this->container->query('ShellExecRunnable');
	}

	public function testRunSuccessCallback() {
		TestCommandHandler::$test = 0;
		$retVal = $this->cut->run('OCA\EasyBackup\TestCommandHandler');
		$this->assertEquals(true, $retVal);
		$this->assertEquals(true, TestCommandHandler::$test);
	}

	public function testRunFailureCallback() {
		TestCommandHandlerFailure::$test = 1;
		$retVal = $this->cut->run('OCA\EasyBackup\TestCommandHandlerFailure');
		$this->assertEquals(false, TestCommandHandlerFailure::$test);
	}
}