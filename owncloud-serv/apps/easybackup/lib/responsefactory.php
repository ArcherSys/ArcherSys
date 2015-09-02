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
namespace OCA\EasyBackup;

use OCP\AppFramework\Http;
use \OCP\AppFramework\Http\JSONResponse;
use \OCP\AppFramework\Http\Response;
use \OCP\AppFramework\Http\TemplateResponse;

class ResponseFactory {

	/**
	 *
	 * @param multitype $message        	
	 * @return \OCP\AppFramework\Http\JSONResponse
	 */
	public function createJSONSuccessResponse($result) {
		return new JSONResponse(array (
				'data' => $result,
				'status' => 'success' 
		));
	}

	/**
	 *
	 * @param multitype $message        	
	 * @return \OCP\AppFramework\Http\JSONResponse
	 */
	public function createJSONBadRequestResponse($message) {
		return new JSONResponse(array (
				'message' => $message,
				'status' => 'error' 
		), Http::STATUS_BAD_REQUEST);
	}

	/**
	 *
	 * @param multitype $message        	
	 * @return \OCP\AppFramework\Http\JSONResponse
	 */
	public function createJSONInternalServerErrorResponse($message) {
		return new JSONResponse(array (
				'message' => $message,
				'status' => 'error' 
		), Http::STATUS_INTERNAL_SERVER_ERROR);
	}

	/**
	 *
	 * @param string $data        	
	 * @return PlainTextResponse
	 */
	public function createPlainTextResponse($data) {
		return new PlainTextResponse($data);
	}

	/**
	 *
	 * @param string $appName        	
	 * @param string $template        	
	 * @param array::unknown $params        	
	 * @return \OCP\AppFramework\Http\TemplateResponse;
	 */
	public function createTemplateResponse($appName, $template, $params) {
		return new TemplateResponse($appName, $template, $params);
	}
}
