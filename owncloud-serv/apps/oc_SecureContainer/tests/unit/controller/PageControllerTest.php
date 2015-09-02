<?php
/**
 * ownCloud - Secure Container
 *
 * @author Lukas Zurschmiede
 * @copyright 2014 Lukas Zurschmiede <l.zurschmiede@ranta.ch>
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
 */

namespace OCA\secure_container\Controller;

use \OCP\IRequest;
use \OCP\AppFramework\Http\TemplateResponse;
use \OCP\AppFramework\Http\JSONResponse;
use \OCA\secure_container\AppInfo\Application;

class PageControllerTest extends \PHPUnit_Framework_TestCase {
	private $container;

	public function setUp () {
		$app = new Application();
		$this->container = $app->getContainer();
	}

	public function testIndex () {
		// swap out request
		$this->container['Request'] = $this->getMockBuilder('\OCP\IRequest')->getMock();
		$this->container['UserId'] = 'john';

		$result = $this->container['PageController']->index();

		$this->assertEquals(array('user' => 'john'), $result->getParams());
		$this->assertEquals('main', $result->getTemplateName());
		$this->assertTrue($result instanceof TemplateResponse);
	}


	public function testEcho () {
		$result = $this->container['PageController']->doEcho('hi');
		$this->assertEquals(array('echo' => 'hi'), $result);
	}


}