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

use \OCA\EasyBackup\EasyBackupException;
use \OCA\EasyBackup\ResponseFactory;
use \OCP\AppFramework\Controller;
use \OCP\AppFramework\Http\Response;
use \OCP\ILogger;
use \OCP\IRequest;

abstract class BaseController extends Controller {
	
	/**
	 *
	 * @var \OCP\ILogger
	 */
	protected $logger;
	
	/**
	 *
	 * @var \OCA\EasyBackup\ResponseFactory
	 */
	protected $responseFactory;

	public function __construct($appName, IRequest $request, ILogger $logger, ResponseFactory $responseFactory) {
		parent::__construct($appName, $request);
		$this->logger = $logger;
		$this->responseFactory = $responseFactory;
		$reflectionClass = new \ReflectionClass($this);
		foreach ( $reflectionClass->getMethods(\ReflectionMethod::IS_PUBLIC) as $method ) {
			$docs = $method->getDocComment();
			if (strstr($docs, '@ControllerManaged') !== false) {
				throw new \OCA\EasyBackup\EasyBackupException(
						'ContollerManaged method "' . $method->getName() . '" in class  ' . $reflectionClass->getName() .
								 ' is not allowed to be public');
			}
		}
	}

	public function __call($method, $args) {
		if (! method_exists($this, $method)) {
			throw new \BadMethodCallException("Unknown method $method in class" . get_class($this));
		}
		$reflection = new \ReflectionMethod($this, $method);
		$docs = $reflection->getDocComment();
		if (strstr($docs, '@ControllerManaged') === false) {
			return call_user_func_array(array (
					$this,
					$method 
			), $args);
		}
		try {
			$result = call_user_func_array(array (
					$this,
					$method 
			), $args);
			if ($result instanceof Response) {
				return $result;
			}
			return $this->responseFactory->createJSONSuccessResponse($result);
		} catch(EasyBackupException $e) {
			$this->logException($e);
			return $this->responseFactory->createJSONBadRequestResponse($e->getMessage());
		} catch(\Exception $e) {
			$this->logException($e);
			return $this->responseFactory->createJSONInternalServerErrorResponse($e->getMessage());
		}
	}

	public function renderHtml($template, $params = array()) {
		$templateResponse = $this->responseFactory->createTemplateResponse($this->appName, $template, $params);
		$templateResponse->renderAs('');
		return $templateResponse->render();
	}

	protected function logException(\Exception $e) {
		$this->logger->error($e->getMessage(), array (
				'app' => $this->appName 
		));
		$this->logger->debug($e->getTraceAsString(), array (
				'app' => $this->appName 
		));
	}
}