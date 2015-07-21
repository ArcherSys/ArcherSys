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

use OCA\EasyBackup\EasyBackupException;
use OCP\AppFramework\Http;
use OCA\EasyBackup\PlainTextResponse;
use \OCP\AppFramework\Http\JSONResponse;
use \OCA\EasyBackup\AppInfo\Application;

require_once (__DIR__ . '/../basetestcase.php');

class BaseControllerInstance extends \OCA\EasyBackup\Controller\BaseController {

	/**
	 * @ControllerManaged
	 */
	protected function withAnnotationReturnsNothing() {
	}

	/**
	 * @ControllerManaged
	 */
	protected function withAnnotationReturnsText() {
		return "Text1";
	}

	/**
	 * @ControllerManaged
	 */
	protected function withAnnotationReturnsResponse() {
		return new PlainTextResponse('Text2');
	}

	/**
	 * @ControllerManaged
	 */
	protected function withAnnotationThrowsException() {
		throw new \Exception('Text3');
	}

	/**
	 * @ControllerManaged
	 */
	protected function withAnnotationThrowsEasyBackupException() {
		throw new EasyBackupException('Easy');
	}

	protected function withoutAnnotationReturnsNothing() {
	}

	protected function withoutAnnotationReturnsText() {
		return 'Text4';
	}

	protected function withoutAnnotationReturnsResponse() {
		return new PlainTextResponse('Text5');
	}

	protected function withoutAnnotationThrowsException() {
		throw new \BadFunctionCallException('Text3');
	}
}

class BaseControllerTest extends \OCA\EasyBackup\BaseTestCase {
	
	/**
	 *
	 * @var \OCA\EasyBackup\Controller\BaseControllerInstance
	 */
	private $cut;

	protected function setUp() {
		parent::setUp();
		$this->cut = new BaseControllerInstance('appName', $this->requestMock, $this->loggerMock, $this->responseFactoryMock);
	}

	public function testWithAnnotationReturnsNothing() {
		$this->responseFactoryMock->expects($this->once())->method('createJSONSuccessResponse')->with($this->equalTo(null));
		$this->cut->withAnnotationReturnsNothing();
	}

	public function testWithAnnotationReturnsText() {
		$this->responseFactoryMock->expects($this->once())->method('createJSONSuccessResponse')->with($this->equalTo('Text1'))->will(
				$this->returnValue('JSONSuccess'));
		$retVal = $this->cut->withAnnotationReturnsText();
		$this->assertEquals('JSONSuccess', $retVal);
	}

	public function testWithAnnotationReturnsResponse() {
		$retVal = $this->cut->withAnnotationReturnsResponse();
		$expected = new PlainTextResponse('Text2');
		$this->assertEquals($expected, $retVal);
	}

	public function testWithAnnotationThrowsException() {
		$this->responseFactoryMock->expects($this->once())->method('createJSONInternalServerErrorResponse')->with(
				$this->equalTo('Text3'))->will($this->returnValue('JSONError'));
		$retVal = $this->cut->withAnnotationThrowsException();
		$this->assertEquals('JSONError', $retVal);
	}

	public function testwithAnnotationThrowsEasyBackupException() {
		$this->responseFactoryMock->expects($this->once())->method('createJSONBadRequestResponse')->with($this->equalTo('Easy'))->will(
				$this->returnValue('JSONError'));
		$retVal = $this->cut->withAnnotationThrowsEasyBackupException();
		$this->assertEquals('JSONError', $retVal);
	}

	public function testWithoutAnnotationReturnsNothing() {
		$retVal = $this->cut->withoutAnnotationReturnsNothing();
		$expected = null;
		$this->assertEquals($expected, $retVal);
	}

	public function testWithoutAnnotationReturnsText() {
		$retVal = $this->cut->withoutAnnotationReturnsText();
		$expected = 'Text4';
		$this->assertEquals($expected, $retVal);
	}

	public function testWithoutAnnotationReturnsResponse() {
		$retVal = $this->cut->withoutAnnotationReturnsResponse();
		$expected = new PlainTextResponse('Text5');
		$this->assertEquals($expected, $retVal);
	}

	public function testWithoutAnnotationThrowsException() {
		$this->setExpectedException('BadFunctionCallException');
		$retVal = $this->cut->withoutAnnotationThrowsException();
	}

	public function testUnknownMethodThrowsException() {
		$this->setExpectedException('BadMethodCallException');
		$retVal = $this->cut->unknownMethod();
	}
}