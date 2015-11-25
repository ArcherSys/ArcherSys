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

use OCA\EasyBackup\EasyBackupException;
use \OCP\IL10N;

class ScheduleService {
	
	/**
	 *
	 * @var string
	 */
	private $currentScheduleKey = null;
	
	/**
	 *
	 * @var \OCP\IL10N
	 */
	private $trans;
	private $configService;

	/**
	 *
	 * @param $currentScheduleKey string        	
	 * @param $trans \OCP\IL10N        	
	 */
	public function __construct(ConfigService $configService, IL10N $trans) {
		$this->configService = $configService;
		$this->trans = $trans;
	}

	private function getCurrentScheduleKey() {
		if ($this->currentScheduleKey === null) {
			$this->currentScheduleKey = $this->configService->getAppValue('SCHEDULED', false);
		}
		return $this->currentScheduleKey;
	}

	public function getScheduleParamsForHours() {
		$options = array ();
		$selected = false;
		for($i = 1; $i < 24; $i ++) {
			$key = sprintf('hours_%02d', $i);
			if ($this->getCurrentScheduleKey() === $key) {
				$selected = $key;
			}
			$options [$key] = $i;
		}
		
		$scheduleParams = array (
				'id' => 'hours',
				'options' => $options,
				'selected' => $selected,
				'label' => $this->trans->t('Number of hours between execution') 
		);
		return $scheduleParams;
	}

	public function getScheduleParamsForDays() {
		$options = array ();
		$selected = false;
		for($i = 1; $i <= 31; $i ++) {
			$key = sprintf('days_%02d', $i);
			if ($this->getCurrentScheduleKey() === $key) {
				$selected = $key;
			}
			$options [$key] = $i;
		}
		
		$scheduleParams = array (
				'id' => 'days',
				'options' => $options,
				'selected' => $selected,
				'label' => $this->trans->t('Number of days between execution') 
		);
		return $scheduleParams;
	}

	public function getScheduleParamsForDayOfWeek() {
		$options = array ();
		$selected = false;
		$options ['dayofweek_0'] = $this->trans->t('Sunday');
		$options ['dayofweek_1'] = $this->trans->t('Monday');
		$options ['dayofweek_2'] = $this->trans->t('Tuesday');
		$options ['dayofweek_3'] = $this->trans->t('Wednesday');
		$options ['dayofweek_4'] = $this->trans->t('Thursday');
		$options ['dayofweek_5'] = $this->trans->t('Friday');
		$options ['dayofweek_6'] = $this->trans->t('Saturday');
		if (strpos($this->getCurrentScheduleKey(), 'dayofweek_') === 0) {
			$selected = $this->getCurrentScheduleKey();
		}
		
		$scheduleParams = array (
				'id' => 'dayofweek',
				'options' => $options,
				'selected' => $selected,
				'label' => $this->trans->t('Day of week') 
		);
		return $scheduleParams;
	}

	public function getScheduleParamsForDayOfMonth() {
		$options = array ();
		$selected = false;
		for($i = 1; $i <= 31; $i ++) {
			$key = sprintf('dayofmonth_%02d', $i);
			if ($this->getCurrentScheduleKey() === $key) {
				$selected = $key;
			}
			$options [$key] = $i;
		}
		
		$scheduleParams = array (
				'id' => 'dayofmonth',
				'options' => $options,
				'selected' => $selected,
				'label' => $this->trans->t('Day of month') 
		);
		return $scheduleParams;
	}

	public function getScheduleParams() {
		return array (
				$this->getScheduleParamsForHours(),
				$this->getScheduleParamsForDays(),
				$this->getScheduleParamsForDayOfWeek(),
				$this->getScheduleParamsForDayOfMonth() 
		);
	}

	/**
	 *
	 * @param int $firstRunAtHour        	
	 * @param \DateTime[optional] $lastRun        	
	 *
	 * @return boolean
	 */
	public function isToBeExecutedNow($firstRunAtHour, \DateTime $lastRun = null) {
		if (! $this->getCurrentScheduleKey()) {
			return false;
		}
		$now = new \DateTime(null, new \DateTimeZone('UTC'));
		
		$absoluteScheduleIsDue = false;
		if (strpos($this->getCurrentScheduleKey(), 'dayofweek_') === 0) {
			if ($now->format('w') == substr($this->getCurrentScheduleKey(), - 1)) {
				$absoluteScheduleIsDue = true;
			} else {
				return false;
			}
		} elseif (strpos($this->getCurrentScheduleKey(), 'dayofmonth_') === 0) {
			if ($now->format('m') == substr($this->getCurrentScheduleKey(), - 2)) {
				$absoluteScheduleIsDue = true;
			} else {
				return false;
			}
		}
		if (! $lastRun || $absoluteScheduleIsDue) {
			$currentHour = intval($now->format('H'));
			// For the very first run or for runs at a fixed day of week or month,
			// we wait for the defined hour of the day
			return $currentHour >= $firstRunAtHour;
		} else {
			// Otherwise we just check if enough time has passed since last run
			$lastRunDateAndHour = \DateTime::createFromFormat('Y-m-d H|', $lastRun->format('Y-m-d H'));
			
			if (strpos($this->getCurrentScheduleKey(), 'days_') === 0) {
				$dateInterval = new \DateInterval('P' . substr($this->getCurrentScheduleKey(), - 2) . 'D');
				$nextRun = $lastRunDateAndHour->add($dateInterval);
				// next run is on next day, at the specified start time (hour of day)
				$nextRun->setTime($firstRunAtHour, 00);
			} elseif (strpos($this->getCurrentScheduleKey(), 'hours_') === 0) {
				$dateInterval = new \DateInterval('PT' . substr($this->getCurrentScheduleKey(), - 2) . 'H');
				$nextRun = $lastRunDateAndHour->add($dateInterval);
			} else {
				throw new EasyBackupException('Schedule key ' . $this->getCurrentScheduleKey() . ' cannot be interpreted');
			}
			// Check if the specified interval has passed between last run and now
			return $now >= $nextRun;
		}
	}
}
