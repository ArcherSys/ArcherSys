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
namespace OCA\EasyBackup\Service;

use \OCA\EasyBackup\EasyBackupException;
use \OCA\EasyBackup\ICommandHandler;
use \OCP\BackgroundJob;
use \OCP\BackgroundJob\IJob;
use \OCP\IConfig;

class ConfigService {
	
	/**
	 *
	 * @var \OCP\IConfig
	 */
	protected $owncloudConfig;
	
	/**
	 *
	 * @var string
	 */
	protected $appName;

	public function __construct($appName, IConfig $owncloudConfig) {
		$this->appName = $appName;
		$this->owncloudConfig = $owncloudConfig;
	}

	/**
	 *
	 * @return string
	 */
	public function getLogfileName() {
		return $this->getDataDir() . '/backup.log';
	}

	/**
	 *
	 * @return int
	 */
	public function getNumberOfLinesToDisplay() {
		return 25;
	}

	/**
	 *
	 * @return int
	 */
	public function getDisplayWidth() {
		return 45;
	}

	/**
	 *
	 * @param string $updateHost        	
	 */
	public function setHostUserName($updateHost) {
		$this->setAppValue('HOST_USER_NAME', $updateHost);
	}

	/**
	 *
	 * @return string
	 */
	public function getHostUserName() {
		return $this->getAppValue('HOST_USER_NAME');
	}

	public function getHost() {
		$user = $this->getAppValue('HOST_USER_NAME');
		return "$user@$user.trustedspace.de";
	}

	/**
	 *
	 * @return string
	 */
	public function getPrivateKeyFilename() {
		return $this->getDataDir() . '/id_rsa';
	}

	/**
	 *
	 * @return string
	 */
	public function getKnownHostsFileName() {
		return $this->getDataDir() . '/known_hosts';
	}

	/**
	 *
	 * @param string $key        	
	 * @param string[optional] $default        	
	 * @return string
	 */
	public function getAppValue($key, $default = null) {
		return $this->owncloudConfig->getAppValue($this->appName, $key, $default);
	}

	/**
	 *
	 * @param string $key        	
	 * @param string $value        	
	 */
	public function setAppValue($key, $value) {
		$this->owncloudConfig->setAppValue($this->appName, $key, $value);
	}

	/**
	 *
	 * @return string
	 */
	public function getDataDir() {
		return \OC_Config::getValue("datadirectory", \OC::$SERVERROOT . '/data');
	}

	/**
	 *
	 * @return boolean
	 */
	public function isCronEnabled() {
		return \OC_BackgroundJob::getExecutionType() == 'cron';
	}

	/**
	 *
	 * @param string $schedule        	
	 */
	public function setBackupSchedule($schedule) {
		$this->setAppValue('SCHEDULED', $schedule);
	}

	/**
	 *
	 * @param int $scheduleTime
	 *        	in current Timezone
	 */
	public function setScheduleTime($scheduleTime) {
		$timezoneOffset = \OC::$session->get('timezone');
		if ($timezoneOffset) {
			$scheduleTime -= $timezoneOffset;
			if ($scheduleTime < 0) {
				$scheduleTime += 24;
			} elseif ($scheduleTime > 23) {
				$scheduleTime -= 24;
			}
		}
		$this->setAppValue('SCHEDULE_TIME', $scheduleTime);
	}

	/**
	 *
	 * @return integer schedule time in local timezone
	 */
	public function getScheduleTime() {
		$scheduleTime = intval($this->getAppValue('SCHEDULE_TIME', 0));
		$timezoneOffset = \OC::$session->get('timezone');
		if ($timezoneOffset && $scheduleTime >= 0) {
			$scheduleTime += $timezoneOffset;
			if ($scheduleTime < 0) {
				$scheduleTime += 24;
			} elseif ($scheduleTime > 23) {
				$scheduleTime -= 24;
			}
		}
		return $scheduleTime;
	}

	/**
	 *
	 * @return integer schedule time in UTC
	 */
	public function getScheduleTimeUTC() {
		return intval($this->getAppValue('SCHEDULE_TIME', 0));
	}

	/**
	 *
	 * @return boolean
	 */
	public function isBackupScheduled() {
		return $this->getAppValue('SCHEDULE_ACTIVE', false);
	}

	/**
	 *
	 * @param $scheduled boolean        	
	 */
	public function setBackupScheduled($scheduled) {
		return $this->setAppValue('SCHEDULE_ACTIVE', $scheduled);
	}

	/**
	 *
	 * @return string
	 */
	public function getBackupCommand() {
		return $this->getAppValue('BACKUP_COMMAND');
	}

	/**
	 *
	 * @param string $command        	
	 */
	public function setBackupCommand($command) {
		$this->setAppValue('BACKUP_COMMAND', $command);
	}

	/**
	 *
	 * @return string
	 */
	public function getRestoreCommand() {
		return $this->getAppValue('RESTORE_COMMAND');
	}

	/**
	 *
	 * @param string $command        	
	 */
	public function setRestoreCommand($command) {
		$this->setAppValue('RESTORE_COMMAND', $command);
	}

	/**
	 * Schedule a job for delayed / regular execution
	 *
	 * @param \OCP\BackgroundJob\IJob $job        	
	 * @param string $commandHandlerString
	 *        	a string representing a \OCA\EasyBackup\ICommandHandler instance
	 *        	
	 * @throws \OCA\EasyBackup\EasyBackupException when the provided commandHandlerString
	 *         designates not a type \OCA\EasyBackup\ICommandHandler
	 */
	public function register(IJob $job, $commandHandlerString) {
		if (! class_exists($commandHandlerString)) {
			throw new EasyBackupException("Class '$commandHandlerString' does not exist");
		}
		$executor = new $commandHandlerString();
		if (! ($executor instanceof ICommandHandler)) {
			throw new EasyBackupException("'$commandHandlerString' is not of type \OCA\EasyBackup\ICommandHandler");
		}
		$jobList = \OC::$server->getJobList();
		if (! $jobList->has($job, $commandHandlerString)) {
			BackgroundJob::registerJob($job, $commandHandlerString);
		}
	}

	/**
	 * Remove a job from the execution queue
	 */
	public function unregister(IJob $job) {
		$jobList = \OC::$server->getJobList();
		$jobList->remove($job);
	}

	/**
	 * Is a job of this class on the execution queue?
	 * Only equality of class is relevant, arguments are not considered
	 *
	 * @return boolean
	 */
	public function isRegistered(IJob $job) {
		$jobList = \OC::$server->getJobList();
		
		foreach ( $jobList->getAll() as $registeredJob ) {
			if (get_class($job) === get_class($registeredJob)) {
				return true;
			}
		}
		
		return false;
	}

	/**
	 *
	 * @param string $publicKey        	
	 */
	public function setPublicKey($publicKey) {
		$this->setAppValue('PUBLIC_KEY', $publicKey);
	}

	/**
	 *
	 * @return string
	 */
	public function getPublicKey() {
		return $this->getAppValue('PUBLIC_KEY');
	}
}