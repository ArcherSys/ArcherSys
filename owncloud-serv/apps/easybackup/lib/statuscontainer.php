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

class StatusContainer {
	private $statusMap = array ();
	private $localizedMessageMap = array ();
	const OK = 'OK';
	const WARN = 'WARN';
	const ERROR = 'ERROR';
	private static $allowedStatus = array (
			self::OK,
			self::WARN,
			self::ERROR 
	);

	/**
	 *
	 * @param string $statusType        	
	 * @param string $status
	 *        	OK|WARN|ERROR
	 */
	public function addStatus($statusType, $status, $localizedStatusMessage) {
		if (! in_array($status, self::$allowedStatus, true)) {
			throw new EasyBackupException("StatusContainer: Unknown status $status");
		}
		$this->statusMap [$statusType] = $status;
		$this->localizedMessageMap [$statusType] = $localizedStatusMessage;
	}

	/**
	 *
	 * @param string $statusType        	
	 * @throws EasyBackupException
	 * @return boolean;
	 */
	public function getStatus($statusType) {
		if (! array_key_exists($statusType, $this->statusMap)) {
			throw new EasyBackupException("Key $statusType not found in status map");
		}
		return $this->statusMap [$statusType];
	}

	/**
	 *
	 * @return boolean
	 */
	public function getOverallStatus() {
		if (in_array(self::ERROR, $this->statusMap)) {
			return self::ERROR;
		}
		if (in_array(self::WARN, $this->statusMap)) {
			return self::WARN;
		}
		return self::OK;
	}

	/**
	 *
	 * @param string $statusType        	
	 * @return string
	 */
	public function getStatusAsText($statusType) {
		if (! array_key_exists($statusType, $this->localizedMessageMap)) {
			throw new EasyBackupException("Key $statusType not found in localized message map map");
		}
		return $this->localizedMessageMap [$statusType];
	}

	/**
	 *
	 * @return array:array:string
	 */
	public function getAllStatus() {
		$allStatus = array ();
		foreach ( $this->statusMap as $statusType => $status ) {
			$singleStatus = array (
					'status' => $status,
					'statusType' => $statusType,
					'localized' => $this->getStatusAsText($statusType) 
			);
			$allStatus [] = $singleStatus;
		}
		return $allStatus;
	}
}
