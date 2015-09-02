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

use \OCP\AppFramework\Http\Response;

/**
 * Return unformatted text
 */
class PlainTextResponse extends Response {
	private $data;

	/**
	 * Creates a response that serves unmodified text to the client
	 *
	 * @param string $data
	 *        	the data to be served
	 */
	public function __construct($data) {
		$this->data = $data;
		$this->addHeader('Content-Type', 'text/plain');
	}

	/**
	 * Returns the plain text content
	 *
	 * @return string the file
	 */
	public function render() {
		return $this->data;
	}
}
