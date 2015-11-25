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

use \OCA\EasyBackup\RunOnceJob;
use \OCA\EasyBackup\ResponseFactory;
use \OCA\EasyBackup\ScheduledBackupJob;
use \OCA\EasyBackup\ShellExecRunnable;
use \OCA\EasyBackup\Controller\BackupController;
use \OCA\EasyBackup\Controller\ConfigController;
use \OCA\EasyBackup\Controller\LogfileviewController;
use \OCA\EasyBackup\Controller\PageController;
use \OCA\EasyBackup\Service\BackupService;
use \OCA\EasyBackup\Service\ConfigService;
use \OCA\EasyBackup\Service\ScheduleService;
use \OCA\EasyBackup\Service\ShellExecService;
use \OCP\AppFramework\App;
use \OCP\IL10N;

class Application extends App {

	public function __construct(array $urlParams = array()) {
		parent::__construct('easybackup', $urlParams);

		/**
		 * Controllers
		 */
		$this->getContainer()->registerService('PageController',
				function ($c) {
					return new PageController($c->query('AppName'), $c->query('Request'), $c->query('Logger'),
							$c->query('BackupService'), $c->query('ConfigService'), $c->query('ScheduleService'),
							$c->query('URLGenerator'), $c->query('ResponseFactory'), $c->query('Container'));
				});

		$this->getContainer()->registerService('ConfigController',
				function ($c) {
					return new ConfigController($c->query('AppName'), $c->query('Request'), $c->query('Logger'),
							$c->query('BackupService'), $c->query('ConfigService'), $c->query('ResponseFactory'));
				});

		$this->getContainer()->registerService('BackupController',
				function ($c) {
					return new BackupController($c->query('AppName'), $c->query('Request'), $c->query('Logger'),
							$c->query('BackupService'), $c->query('ConfigService'), $c->query('ResponseFactory'),
							$c->query('TranslationService'));
				});

		$this->getContainer()->registerService('LogfileviewController',
				function ($c) {
					return new LogfileviewController($c->query('AppName'), $c->query('Request'), $c->query('Logger'),
							$c->query('ConfigService'), $c->query('BackupService'), $c->query('ResponseFactory'));
				});

		/**
		 * Services
		 */
		$this->getContainer()->registerService('BackupService',
				function ($c) {
					return new BackupService($c->query('RunOnceJob'), $c->query('ScheduledBackupJob'), $c->query('ConfigService'),
							$c->query('ShellExecService'), $c->query('TranslationService'));
				});

		$this->getContainer()->registerService('RunOnceJob', function ($c) {
			return new RunOnceJob();
		});

		$this->getContainer()->registerService('ScheduledBackupJob', function ($c) {
			return new ScheduledBackupJob();
		});

		$this->getContainer()->registerService('TranslationService',
				function ($c) {
					return $c->query('ServerContainer')->getL10N($c->query('AppName'));
				});

		$this->getContainer()->registerService('ShellExecRunnable',
				function ($c) {
					return new ShellExecRunnable($c->query('ShellExecService'));
				});

		$this->getContainer()->registerService('ShellExecService', function ($c) {
			return new ShellExecService();
		});

		$this->getContainer()->registerService('ConfigService',
				function ($c) {
					return new ConfigService($c->query('AppName'), $c->query('OwncloudConfig'));
				});

		$this->getContainer()->registerService('Logger',
				function ($c) {
					return $c->query('ServerContainer')->getLogger();
				});

		$this->getContainer()->registerService('OwncloudConfig',
				function ($c) {
					return $c->query('ServerContainer')->getConfig();
				});

		$this->getContainer()->registerService('URLGenerator',
				function ($c) {
					return $c->query('ServerContainer')->getURLGenerator();
				});

		$this->getContainer()->registerService('ScheduleService',
				function ($c) {
					return new ScheduleService($c->query('ConfigService'), $c->query('TranslationService'));
				});
		$this->getContainer()->registerService('ResponseFactory', function ($c) {
			return new ResponseFactory();
		});
		$this->getContainer()->registerService('Container', function ($c) {
			return $c;
		});
	}
}


