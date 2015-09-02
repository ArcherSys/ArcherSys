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

require_once (__DIR__ . '/classloader.php');

abstract class BaseTestCase extends \PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var \OCP\AppFramework\IAppContainer
	 */
	protected $container;
	
	/**
	 *
	 * @var \OCP\IRequest
	 */
	protected $requestMock;
	
	/**
	 *
	 * @var \OCP\ILogger
	 */
	protected $loggerMock;
	
	/**
	 *
	 * @var \OCP\IL10N
	 */
	protected $translationMock;
	
	/**
	 *
	 * @var \OCA\EasyBackup\ResponseFactory
	 */
	protected $responseFactoryMock;

	protected function setUp() {
		$app = new Application();
		$this->container = $app->getContainer();
		
		$this->requestMock = $requestMock = $this->getMock('\OCP\IRequest');
		$this->container->registerService('Request', function ($c) use($requestMock) {
			return $requestMock;
		});
		
		$this->loggerMock = $loggerMock = $this->getMock('\OCP\ILogger');
		$this->container->registerService('Logger', function ($c) use($loggerMock) {
			return $loggerMock;
		});
		
		$this->translationMock = $translationMock = $this->getMock('\OCP\IL10N');
		$this->container->registerService('TranslationService', 
				function ($c) use($translationMock) {
					return $translationMock;
				});
		
		$this->responseFactoryMock = $responseFactoryMock = $this->getMock('\OCA\EasyBackup\ResponseFactory');
		$this->container->registerService('ResponseFactory', 
				function ($c) use($responseFactoryMock) {
					return $responseFactoryMock;
				});
	}
}