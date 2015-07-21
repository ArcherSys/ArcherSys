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

use \OCA\EasyBackup\AppInfo\Application;
use \OCP\BackgroundJob\IJobList;

class ScheduledBackupJob extends \OC\BackgroundJob\Job {
	
	/**
	 *
	 * @var \OCA\EasyBackup\IRunnable
	 */
	private $runnable = null;
	
	/**
	 *
	 * @var \OCP\IContainer
	 */
	private $container;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ScheduleService
	 */
	private $scheduleService;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ConfigService
	 */
	private $configService;

	/**
	 *
	 * @return \OCP\IContainer
	 */
	private function getContainer() {
		if (! $this->container) {
			$app = new Application();
			$this->container = $app->getContainer();
		}
		return $this->container;
	}

	/**
	 *
	 * @return \OCA\EasyBackup\IRunnable
	 */
	private function getRunnable() {
		if (! $this->runnable) {
			$this->runnable = $this->getContainer()->query('ShellExecRunnable');
		}
		return $this->runnable;
	}

	/**
	 *
	 * @return \OCA\EasyBackup\Service\ScheduleService
	 */
	private function getScheduleService() {
		if (! $this->scheduleService) {
			$this->scheduleService = $this->getContainer()->query('ScheduleService');
		}
		return $this->scheduleService;
	}

	/**
	 *
	 * @return \OCA\EasyBackup\Service\ConfigService
	 */
	private function getConfigService() {
		if (! $this->configService) {
			$this->configService = $this->getContainer()->query('ConfigService');
		}
		return $this->configService;
	}

	/**
	 * Run the job if the scheduling conditions are met
	 *
	 * @param \OCP\BackgroundJob\IJobList $jobList        	
	 * @param \OC\Log $logger        	
	 */
	public function execute($jobList, $logger = null) {
		$firstRunAtHour = $this->getConfigService()->getScheduleTimeUTC();
		if ($this->getLastRun()) {
			$lastRun = new \DateTime();
			$lastRun->setTimestamp($this->getLastRun());
			$shouldExecute = $this->getScheduleService()->isToBeExecutedNow($firstRunAtHour, $lastRun);
		} else {
			$shouldExecute = $this->getScheduleService()->isToBeExecutedNow($firstRunAtHour);
		}
		if ($shouldExecute) {
			parent::execute($jobList, $logger);
		}
	}
	
	/*
	 * (non-PHPdoc)
	 * @see OC\BackgroundJob.Job::run()
	 */
	public function run($commandHandlerString) {
		$this->getRunnable()->run($commandHandlerString);
	}
}