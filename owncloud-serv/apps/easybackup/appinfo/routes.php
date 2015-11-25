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
namespace OCA\EasyBackup\AppInfo;

$application = new Application();

$application->registerRoutes($this, 
		array (
				'routes' => array (
						
						// "/" -> PageController::index()
						array (
								'name' => 'page#index',
								'url' => '/',
								'verb' => 'GET' 
						),
						
						// "/configuration" -> PageController::configuration()
						array (
								'name' => 'page#configuration',
								'url' => '/configuration',
								'verb' => 'GET' 
						),
						
						// "/backup" -> PageController::backup()
						array (
								'name' => 'page#backup',
								'url' => '/backup',
								'verb' => 'GET' 
						),
						
						// "/restore" -> PageController::restore()
						array (
								'name' => 'page#restore',
								'url' => '/restore',
								'verb' => 'GET' 
						),
						
						// /createsshkey -> ConfigController::createSshKey()
						array (
								'name' => 'config#createSshKey',
								'url' => '/createsshkey',
								'verb' => 'PUT' 
						),
						
						// /username -> ConfigController::updateHostUserName(string $oldUserName, string $newUserName)
						array (
								'name' => 'config#updateHostUserName',
								'url' => '/username',
								'verb' => 'PUT' 
						),
						
						// /uploadkey -> ConfigController::uploadSshKey()
						array (
								'name' => 'config#uploadSshKey',
								'url' => '/uploadkey',
								'verb' => 'POST' 
						),
						
						// /logfileview => LogfileviewController#getLogFileContent()
						array (
								'name' => 'logfileview#getLogFileContent',
								'url' => '/logfileview',
								'verb' => 'GET' 
						),
						
						// /logfile => LogfileviewController#getCompleteLogfile()
						array (
								'name' => 'logfileview#getCompleteLogfile',
								'url' => '/logfile',
								'verb' => 'GET' 
						),
						
						// /schedulebackup => BackupController#scheduleBackup()
						array (
								'name' => 'backup#scheduleBackup',
								'url' => '/schedulebackup',
								'verb' => 'PUT' 
						),
						
						// /restoreaction => BackupController#restoreAction(string $restoreConfig)
						array (
								'name' => 'backup#restoreAction',
								'url' => '/restoreaction',
								'verb' => 'PUT' 
						),
						
						// /setBackupSchedule -> ConfigController::setBackupSchedule(string $schedule)
						array (
								'name' => 'config#setBackupSchedule',
								'url' => '/setBackupSchedule',
								'verb' => 'PUT' 
						),
						
						// /setScheduleTime -> ConfigController::setScheduleTime(int $scheduleTime)
						array (
								'name' => 'config#setScheduleTime',
								'url' => '/setScheduleTime',
								'verb' => 'PUT' 
						),
						
						// /setScheduleTime -> BackupController::setBackupScheduled(boolean $scheduled)
						array (
								'name' => 'backup#setBackupScheduled',
								'url' => '/setBackupScheduled',
								'verb' => 'PUT' 
						) 
				) 
		));