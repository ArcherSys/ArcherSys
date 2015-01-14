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
use \OCA\EasyBackup\RunOnceJob;
use \OCA\EasyBackup\ScheduledBackupJob;
use \OCA\EasyBackup\StatusContainer;
use \OCP\IL10N;

class BackupService {
	const MAX_TIME_INTERVAL = 'PT15M'; // 15 Minutes
	
	/**
	 *
	 * @var \OCA\EasyBackup\RunOnceJob
	 */
	protected $runOnceJob;
	
	/**
	 *
	 * @var \OCA\EasyBackup\ScheduledBackupJob
	 */
	protected $scheduledBackupJob;
	
	/**
	 *
	 * @var \OCA\EasyBackup\ScheduledRestoreJob
	 */
	protected $scheduledRestoreJob;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ConfigService
	 */
	protected $configService;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ShellExecService
	 */
	protected $shellExecService;
	
	/**
	 *
	 * @var \OCP\IL10N
	 */
	protected $trans;

	public function __construct(RunOnceJob $runOnceJob, ScheduledBackupJob $scheduledBackupJob, ConfigService $configService, 
			ShellExecService $shellExecService, IL10N $trans) {
		$this->runOnceJob = $runOnceJob;
		$this->scheduledBackupJob = $scheduledBackupJob;
		$this->configService = $configService;
		$this->shellExecService = $shellExecService;
		$this->trans = $trans;
	}

	public function checkSafeModeNotEnabled() {
		return ini_get('safe_mode') != true;
	}

	public function checkRsyncPresent() {
		$result = $this->shellExecService->shellExec('which rsync');
		return $result->isOk();
	}

	public function checkRsyncExecutable() {
		$result = $this->shellExecService->shellExec('rsync --version 2>&1 > /dev/null');
		return $result->isOk();
	}
	/*
	 * public function checkMysqldumpPresent() {
	 * $result = $this->shellExecService->shellExec('which mysqldump');
	 * return $result->isOk();
	 * }
	 *
	 * public function checkMysqldumpExecutable() {
	 * $result = $this->shellExecService->shellExec('mysqldump --version 2>&1 > /dev/null');
	 * return $result->isOk();
	 * }
	 */
	public function isHostUserNameValid() {
		$userName = $this->configService->getHostUserName();
		return $this->matchUserNameRegexp($userName);
	}

	private function matchUserNameRegexp($username) {
		return preg_match('/^[a-z]+[0-9]+$/', $username) === 1;
	}

	public function isSshKeygenPresent() {
		$result = $this->shellExecService->shellExec('which ssh-keygen');
		return $result->isOk();
	}

	public function createSshKey($privateKeyFileName) {
		$message = $this->trans->t('Private/public key pair could not be generated') . ': ';
		if (! $this->isSshKeygenPresent()) {
			$message .= $this->trans->t('The shell command "ssh-keygen" is not available');
			throw new EasyBackupException($message);
		}
		$keyFilename = $this->configService->getPrivateKeyFilename();
		unlink($keyFilename);
		$result = $this->shellExecService->shellExec("ssh-keygen -P '' -q -t rsa -b 2048 -f '$keyFilename'");
		if (! $result->isOk()) {
			$message .= $this->trans->t('The shell command "ssh-keygen" yielded an error') . ': ' .
					 implode(' ', $result->getOutput());
			throw new EasyBackupException($message);
		}
		$publicKey = file_get_contents("$keyFilename.pub");
		unlink("$keyFilename.pub");
		chmod($keyFilename, 0600);
		return $publicKey;
	}

	public function getPublicSshKeyFromPrivateKey() {
		if (! $this->isSshKeygenPresent()) {
			return null;
		}
		$keyFilename = $this->configService->getPrivateKeyFilename();
		if (! file_exists($keyFilename)) {
			return null;
		}
		$result = $this->shellExecService->shellExec("ssh-keygen -P '' -q -y -f '$keyFilename'");
		if (! $result->isOk()) {
			return null;
		}
		$output = $result->getOutput();
		return $output [0];
	}

	public function updateBackupCommand() {
		$dataDir = $this->configService->getDataDir();
		$dataDirFolder = basename($dataDir);
		$logfileName = $this->configService->getLogfileName();
		$host = $this->configService->getHost();
		$keyFileName = $this->configService->getPrivateKeyFilename();
		$knownHostsFileName = $this->configService->getKnownHostsFileName();
		$backupFolder = $this->configService->getDataDir();
		$sshCommand = "ssh -i \"$keyFileName\" -o StrictHostKeyChecking=no -o UserKnownHostsFile=$knownHostsFileName";
		$rsyncOptions = "-rtgov -e '$sshCommand' --include='$dataDirFolder' --include='$dataDirFolder/*/' --include='$dataDirFolder/*/files/***' --exclude=* --numeric-ids --delete --delete-excluded";
		$rsyncCommand = "rsync $rsyncOptions $dataDir $host:";
		$command = "$rsyncCommand >> $logfileName 2>&1";
		
		$this->configService->setBackupCommand($command);
	}

	/**
	 * Execute a backup with the next CRON job execution
	 *
	 * @return int
	 */
	public function executeBackup() {
		$logfileName = $this->configService->getLogfileName();
		
		$date = date('Y-m-d H:i:s e');
		if ($this->configService->isRegistered($this->runOnceJob)) {
			file_put_contents($logfileName, "[$date] " . $this->trans->t('Job already waiting for next CRON execution...') . "\n", 
					FILE_APPEND);
			return;
		}
		$this->configService->register($this->runOnceJob, '\OCA\EasyBackup\BackupCommandHandler');
		file_put_contents($logfileName, "[$date] " . $this->trans->t('Executing backup at next CRON execution...') . "\n", 
				FILE_APPEND);
	}

	public function scheduleBackupJob() {
		$logfileName = $this->configService->getLogfileName();
		$date = date('Y-m-d H:i:s e');
		$this->configService->register($this->scheduledBackupJob, '\OCA\EasyBackup\BackupCommandHandler');
		file_put_contents($logfileName, "[$date] " . $this->trans->t('Backup job scheduled') . "\n", FILE_APPEND);
	}

	public function unScheduleBackupJob() {
		$logfileName = $this->configService->getLogfileName();
		$date = date('Y-m-d H:i:s e');
		$this->configService->unregister($this->scheduledBackupJob);
		file_put_contents($logfileName, "[$date] " . $this->trans->t('Backup job removed') . "\n", FILE_APPEND);
	}

	public function validatePrivateSshKey($key) {
		// TODO: Add more sanity checks
		return strpos($key, '-----BEGIN RSA PRIVATE KEY-----') === 0;
	}

	/**
	 *
	 * @param boolean $success        	
	 */
	public function finishBackup($success) {
		$this->configService->setAppValue('BACKUP_RUNNING', 'false');
		$this->configService->setAppValue('LAST_BACKUP_SUCCESSFUL', $success ? 'true' : 'false');
		$date = date('Y-m-d H:i:s e');
		$this->configService->setAppValue('LAST_BACKUP_TIME', $date);
		$logfileName = $this->configService->getLogfileName();
		if ($success) {
			$message = "[$date] " . $this->trans->t('Backup finished successfully' . "\n");
		} else {
			$message = "[$date] " . $this->trans->t('Backup finished with errors' . "\n");
		}
		file_put_contents($logfileName, "\n$message", FILE_APPEND);
	}

	public function isLastBackupSuccessful() {
		return $this->configService->getAppValue('LAST_BACKUP_SUCCESSFUL') === 'true';
	}

	public function getLastBackupTime() {
		return $this->configService->getAppValue('LAST_BACKUP_TIME');
	}

	/**
	 *
	 * @param boolean $success        	
	 */
	public function finishRestore($success) {
		$logfileName = $this->configService->getLogfileName();
		$date = date('Y-m-d H:i:s e');
		if ($success) {
			$message = "[$date] " . $this->trans->t('Restore finished successfully' . "\n");
		} else {
			$message = "[$date] " . $this->trans->t('Restore finished with errors' . "\n");
		}
		file_put_contents($logfileName, "\n$message", FILE_APPEND);
	}

	/**
	 *
	 * @param boolean $running        	
	 */
	public function setBackupRunning($running) {
		$this->configService->setAppValue('BACKUP_RUNNING', $running ? 'true' : 'false');
	}

	/**
	 *
	 * @return boolean
	 */
	public function isBackupExecuting() {
		$running = $this->configService->getAppValue('BACKUP_RUNNING', 'false');
		if ($running == 'false') {
			return false;
		}
		$filename = $this->configService->getLogfileName();
		if (file_exists($filename)) {
			$ts = filemtime($filename);
		} else {
			return false;
		}
		$lastLogfileEntry = new \DateTime('@' . $ts);
		if ($lastLogfileEntry->add(new \DateInterval(self::MAX_TIME_INTERVAL)) < new \DateTime()) {
			// More than MAX_TIME_INTERVAL since the last logfile entry => we suppose the job is hung
			$this->configService->setAppValue('BACKUP_RUNNING', 'false');
			return false;
		}
		return true;
	}

	/**
	 *
	 * @return \OCA\EasyBackup\StatusContainer
	 */
	public function createStatusInformation() {
		$statusContainer = new StatusContainer();
		
		$statusContainer->addStatus('safeMode', $this->checkSafeModeNotEnabled() ? StatusContainer::OK : StatusContainer::ERROR, 
				$this->trans->t('safe mode may not be enabled'));
		$statusContainer->addStatus('rsyncPresent', $this->checkRsyncPresent() ? StatusContainer::OK : StatusContainer::ERROR, 
				$this->trans->t('rsync must be present in execution path'));
		$statusContainer->addStatus('rsyncExecutable', 
				$this->checkRsyncExecutable() ? StatusContainer::OK : StatusContainer::ERROR, 
				$this->trans->t('rsync binary needs to be executable'));
		// $statusContainer->addStatus('mysqldumpPresent', $this->checkMysqldumpPresent() ? StatusContainer::OK : StatusContainer::WARN, $this->trans->t('mysqldump binary is present in execution path'));
		// $statusContainer->addStatus('mysqldumpExecutable', $this->checkMysqldumpExecutable() ? StatusContainer::OK : StatusContainer::WARN, $this->trans->t('mysqldump binary may be executed'));
		$statusContainer->addStatus('osIsLinux', php_uname('s') == 'Linux' ? StatusContainer::OK : StatusContainer::ERROR, 
				$this->trans->t('operating system must be Linux'));
		$statusContainer->addStatus('cronAvailable', 
				$this->configService->isCronEnabled() ? StatusContainer::OK : StatusContainer::WARN, 
				$this->trans->t('scheduled tasks should be executed via CRON'));
		$statusContainer->addStatus('privateKeyPresent', 
				file_exists($this->configService->getPrivateKeyFilename()) ? StatusContainer::OK : StatusContainer::ERROR, 
				$this->trans->t('private key for backup authentication'));
		$statusContainer->addStatus('hostNameValid', $this->isHostUserNameValid() ? StatusContainer::OK : StatusContainer::ERROR, 
				$this->trans->t('host user name validation'));
		
		return $statusContainer;
	}

	/**
	 *
	 * @param string $restoreConfig
	 *        	JSON-Encoded
	 */
	public function scheduleRestoreJob($restoreConfig) {
		$c = json_decode($restoreConfig, true);
		$dataDir = $this->configService->getDataDir();
		// Get the parent of data directory
		$dataDir = substr($dataDir, 0, strrpos($dataDir, DIRECTORY_SEPARATOR));
		$logfileName = $this->configService->getLogfileName();
		$restoreHostName = $c ['backupuser'] . '@' . $c ['backupserver'];
		$keyFileName = $this->configService->getPrivateKeyFilename();
		$knownHostsFileName = $this->configService->getKnownHostsFileName();
		$restoreTargetFolder = $this->configService->getDataDir();
		$sshCommand = "ssh -q -i \"$keyFileName\" -o StrictHostKeyChecking=no -o UserKnownHostsFile=$knownHostsFileName";
		$rsyncOptions = "-rtgov -e '$sshCommand' --numeric-ids --omit-dir-times";
		
		foreach ( $c ['include'] as $include ) {
			$rsyncOptions .= " --include='$include'";
		}
		
		foreach ( $c ['exclude'] as $exclude ) {
			$rsyncOptions .= " --exclude='$exclude'";
		}
		$rsyncCommand = "rsync $rsyncOptions $restoreHostName:" . $c ['restorebase'] . "  $dataDir ";
		$command = "$rsyncCommand >> $logfileName 2>&1";
		
		$this->configService->setRestoreCommand($command);
		
		$this->configService->register($this->runOnceJob, '\OCA\EasyBackup\RestoreCommandHandler');
		
		$date = date('Y-m-d H:i:s e');
		file_put_contents($logfileName, "[$date] " . $this->trans->t('Restore job will be executed with next CRON') . "\n", 
				FILE_APPEND);
	}

	/**
	 *
	 * @return boolean
	 */
	public function isExecutingOrWaitingForRun() {
		if ($this->isBackupExecuting()) {
			return true;
		}
		if ($this->configService->isRegistered($this->runOnceJob)) {
			return true;
		}
		return false;
	}
}