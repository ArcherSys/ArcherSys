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
use OCA\EasyBackup\StatusContainer;

require_once (__DIR__ . '/../basetestcase.php');

class ConfigControllerTest extends \OCA\EasyBackup\BaseTestCase {
	
	/**
	 *
	 * @var \OCA\EasyBackup\Controller\ConfigController
	 */
	private $cut;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ConfigService
	 */
	private $configServiceMock;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\BackupService
	 */
	private $backupServiceMock;
	
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
		
		$this->backupServiceMock = $backupServiceMock = $this->getMockBuilder('\OCA\EasyBackup\Service\BackupService')->disableOriginalConstructor()->getMock();
		$this->container->registerService('BackupService', 
				function ($c) use($backupServiceMock) {
					return $backupServiceMock;
				});
		
		$this->templateResponseMock = $templateResponseMock = $this->getMockBuilder('\OCP\AppFramework\Http\TemplateResponse')->disableOriginalConstructor()->getMock();
		
		$this->cut = $this->container->query('ConfigController');
	}

	public function testUpdateBackupHostHostNameValid() {
		$this->configServiceMock->expects($this->once())->method('setHostUserName')->with($this->equalTo('newHost'));
		$this->backupServiceMock->expects($this->once())->method('isHostUserNameValid')->will($this->returnValue(true));
		$this->responseFactoryMock->expects($this->once())->method('createJSONSuccessResponse')->with(
				$this->equalTo(array (
						'newUserName' => 'newHost',
						'preconditionsHtml' => null 
				)));
		$this->responseFactoryMock->expects($this->once())->method('createTemplateResponse')->will(
				$this->returnValue($this->templateResponseMock));
		
		$this->cut->updateHostUserName('oldHost', 'newHost');
	}

	public function testUploadSshKeyOk() {
		$keyFileName = __DIR__ . '/../resource/private_key.txt';
		$uploadedFileName = '/tmp/test_keyfile';
		$this->requestMock->expects($this->once())->method('getUploadedFile')->with($this->equalTo('easybackup_sshKeyFile'))->will(
				$this->returnValue(array (
						'tmp_name' => $keyFileName 
				)));
		
		$this->configServiceMock->expects($this->once())->method('getPrivateKeyFilename')->will(
				$this->returnValue($uploadedFileName));
		
		$this->configServiceMock->expects($this->once())->method('getPublicKey')->will($this->returnValue('***MockKey***'));
		$this->backupServiceMock->expects($this->once())->method('validatePrivateSshKey')->will($this->returnValue(true));
		
		$statusContainer = new StatusContainer();
		$statusContainer->addStatus('privateKeyPresent', StatusContainer::OK, '');
		$this->backupServiceMock->expects($this->any())->method('createStatusInformation')->will(
				$this->returnValue($statusContainer));
		
		$this->responseFactoryMock->expects($this->exactly(2))->method('createTemplateResponse')->will(
				$this->returnValue($this->templateResponseMock));
		
		$this->responseFactoryMock->expects($this->at(0))->method('createTemplateResponse')->with($this->equalTo('easybackup'), 
				$this->equalTo('preconditions.inc'), $this->equalTo(array (
						'statusContainer' => $statusContainer 
				)))->will($this->returnValue($this->templateResponseMock));
		
		$this->responseFactoryMock->expects($this->at(1))->method('createTemplateResponse')->with($this->equalTo('easybackup'), 
				$this->equalTo('publickey.inc'), 
				$this->equalTo(array (
						'statusContainer' => $statusContainer,
						'publicKey' => '***MockKey***' 
				)))->will($this->returnValue($this->templateResponseMock));
		
		$this->responseFactoryMock->expects($this->once())->method('createJSONSuccessResponse')->with(
				$this->equalTo(array (
						'preconditionsHtml' => null,
						'publicKeyHtml' => null 
				)));
		
		$this->cut->uploadSshKey();
		
		$this->assertEquals(file_get_contents($keyFileName), file_get_contents($uploadedFileName));
		
		$stat = stat($uploadedFileName);
		$this->assertEquals("0600", sprintf("%o", ($stat ['mode'] & 000777))); // Only the read/write bit for the owner are set (-rw-------)
		
		unlink($uploadedFileName);
	}

	public function testUploadSshKeyFileNotFound() {
		$keyFileName = __DIR__ . '/../resource/does_not_exist.txt';
		$this->requestMock->expects($this->once())->method('getUploadedFile')->with($this->equalTo('easybackup_sshKeyFile'))->will(
				$this->returnValue(array (
						'tmp_name' => $keyFileName 
				)));
		
		$this->responseFactoryMock->expects($this->once())->method('createJSONBadRequestResponse')->with(
				$this->equalTo('Uploaded file not found'));
		
		$this->cut->uploadSshKey();
	}

	public function testUploadSshKeyFileEmpty() {
		$keyFileName = __DIR__ . '/../resource/empty_file.txt';
		$this->requestMock->expects($this->once())->method('getUploadedFile')->with($this->equalTo('easybackup_sshKeyFile'))->will(
				$this->returnValue(array (
						'tmp_name' => $keyFileName 
				)));
		
		$this->responseFactoryMock->expects($this->once())->method('createJSONBadRequestResponse')->with(
				$this->equalTo('Uploaded file is empty'));
		
		$this->cut->uploadSshKey();
	}

	public function testUploadSshKeyMalFormed() {
		$keyFileName = __DIR__ . '/../resource/private_key.txt';
		$uploadedFileName = '/tmp/test_keyfile';
		$this->requestMock->expects($this->once())->method('getUploadedFile')->with($this->equalTo('easybackup_sshKeyFile'))->will(
				$this->returnValue(array (
						'tmp_name' => $keyFileName 
				)));
		
		$this->backupServiceMock->expects($this->once())->method('validatePrivateSshKey')->will($this->returnValue(false));
		
		$this->responseFactoryMock->expects($this->once())->method('createJSONBadRequestResponse')->with(
				$this->equalTo('Key is not well-formed'));
		
		$this->cut->uploadSshKey();
	}
}