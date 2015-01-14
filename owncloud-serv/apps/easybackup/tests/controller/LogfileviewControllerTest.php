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

class LogfileviewControllerTest extends \OCA\EasyBackup\BaseTestCase {
	
	/**
	 *
	 * @var \OCA\EasyBackup\Controller\LogfileviewController
	 */
	private $cut;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ConfigService
	 */
	private $configServiceMock;
	
	/**
	 *
	 * @var \OCP\AppFramework\Http\TemplateResponse
	 */
	private $templateResponseMock;

	protected function setUp() {
		parent::setUp();
		$this->configServiceMock = $configServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\ConfigService')->disableOriginalConstructor()->getMock();
		$this->container->registerService('ConfigService', 
				function ($c) use($configServiceMock) {
					return $configServiceMock;
				});
		$this->templateResponseMock = $templateResponseMock = $this->getMockBuilder('\OCP\AppFramework\Http\TemplateResponse')->disableOriginalConstructor()->getMock();
		$this->cut = $this->container->query('LogfileviewController');
	}

	public function testTailFile6Lines() {
		$this->configServiceMock->expects($this->once())->method('getLogfileName')->will(
				$this->returnValue(__DIR__ . '/../resource/tailfiletest_6_lines.txt'));
		
		$this->configServiceMock->expects($this->atLeastOnce())->method('getNumberOfLinesToDisplay')->will($this->returnValue(4));
		
		$retVal = $this->cut->tailFile();
		$expected = array (
				"Line 6",
				"Line 5",
				"Line 4",
				"Line 3" 
		);
		$this->assertEquals($expected, $retVal);
	}

	public function testTailFile3Lines() {
		$this->configServiceMock->expects($this->once())->method('getLogfileName')->will(
				$this->returnValue(__DIR__ . '/../resource/tailfiletest_3_lines.txt'));
		
		$this->configServiceMock->expects($this->atLeastOnce())->method('getNumberOfLinesToDisplay')->will($this->returnValue(4));
		
		$retVal = $this->cut->tailFile();
		$expected = array (
				"Line 3",
				"Line 2",
				"Line 1" 
		);
		$this->assertEquals($expected, $retVal);
	}

	public function testTailFileLastLine() {
		$this->configServiceMock->expects($this->once())->method('getLogfileName')->will(
				$this->returnValue(__DIR__ . '/../resource/tailfiletest_3_lines.txt'));
		
		$this->configServiceMock->expects($this->atLeastOnce())->method('getNumberOfLinesToDisplay')->will($this->returnValue(1));
		
		$retVal = $this->cut->tailFile();
		$expected = array (
				"Line 3" 
		);
		$this->assertEquals($expected, $retVal);
	}

	public function testTailFileOneLine() {
		$this->configServiceMock->expects($this->once())->method('getLogfileName')->will(
				$this->returnValue(__DIR__ . '/../resource/tailfiletest_1_line.txt'));
		
		$this->configServiceMock->expects($this->atLeastOnce())->method('getNumberOfLinesToDisplay')->will($this->returnValue(10));
		
		$retVal = $this->cut->tailFile();
		$expected = array (
				"Line 1" 
		);
		$this->assertEquals($expected, $retVal);
	}

	public function testTailEmptyFile() {
		$this->configServiceMock->expects($this->once())->method('getLogfileName')->will(
				$this->returnValue(__DIR__ . '/../resource/empty_file.txt'));
		
		$this->configServiceMock->expects($this->once())->method('getNumberOfLinesToDisplay')->will($this->returnValue(10));
		
		$retVal = $this->cut->tailFile();
		$expected = array ();
		$this->assertEquals($expected, $retVal);
	}

	public function testTailFileDoeNotExist() {
		$this->configServiceMock->expects($this->once())->method('getLogfileName')->will(
				$this->returnValue(__DIR__ . '/../resource/does_not_exist'));
		
		$this->configServiceMock->expects($this->atLeastOnce())->method('getNumberOfLinesToDisplay')->will($this->returnValue(1));
		
		$retVal = $this->cut->tailFile();
		$expected = array ();
		$this->assertEquals($expected, $retVal);
	}

	public function testSpecialCharsEscaped() {
		$this->configServiceMock->expects($this->atLeastOnce())->method('getLogfileName')->will(
				$this->returnValue(__DIR__ . '/../resource/specialchars.txt'));
		
		$this->configServiceMock->expects($this->atLeastOnce())->method('getNumberOfLinesToDisplay')->will($this->returnValue(5));
		
		$this->configServiceMock->expects($this->once())->method('getDisplayWidth')->will($this->returnValue(30));
		
		$this->responseFactoryMock->expects($this->once())->method('createTemplateResponse')->with($this->equalTo('easybackup'), 
				$this->equalTo('lastbackup.inc'), 
				$this->equalTo(array (
						'lastBackupSuccessful' => null,
						'lastBackupTime' => null 
				)))->will($this->returnValue($this->templateResponseMock));
		
		$expected = '<font color="#000000">xxxx<br></font><font color="#646464">&lt;&gt;&ouml;&uuml;<br></font>';
		$this->responseFactoryMock->expects($this->once())->method('createJSONSuccessResponse')->with(
				$this->equalTo(
						array (
								'html' => $expected,
								'backupExecutingOrWaitingForRun' => null,
								'lastBackupHtml' => null 
						)))->will($this->returnValue($this->templateResponseMock));
		$this->cut->getLogFileContent();
	}

	public function testTailFileLongLine() {
		$this->configServiceMock->expects($this->atLeastOnce())->method('getLogfileName')->will(
				$this->returnValue(__DIR__ . '/../resource/longlines.txt'));
		
		$this->configServiceMock->expects($this->atLeastOnce())->method('getNumberOfLinesToDisplay')->will($this->returnValue(6));
		
		$this->configServiceMock->expects($this->once())->method('getDisplayWidth')->will($this->returnValue(30));
		
		$this->responseFactoryMock->expects($this->once())->method('createTemplateResponse')->with($this->equalTo('easybackup'), 
				$this->equalTo('lastbackup.inc'), 
				$this->equalTo(array (
						'lastBackupSuccessful' => null,
						'lastBackupTime' => null 
				)))->will($this->returnValue($this->templateResponseMock));
		
		$expected = '<font color="#000000">4. This is a very long line, i<br></font>';
		$expected .= '<font color="#212121">t has even more than 60 charac<br></font>';
		$expected .= '<font color="#424242">ters<br></font>';
		$expected .= '<font color="#636363">3. This is a short line again<br></font>';
		$expected .= '<font color="#848484">2. This is a very long line, i<br></font>';
		$expected .= '<font color="#a5a5a5">t has more than 30 characters<br></font>';
		$this->responseFactoryMock->expects($this->once())->method('createJSONSuccessResponse')->with(
				$this->equalTo(
						array (
								'html' => $expected,
								'backupExecutingOrWaitingForRun' => null,
								'lastBackupHtml' => null 
						)))->will($this->returnValue($this->templateResponseMock));
		$this->cut->getLogFileContent();
	}
}