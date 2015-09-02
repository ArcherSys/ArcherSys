<?php

/**
 * ownCloud - EasyBackup
 *
 * @author Sebastian Kanzow
 * @copyright 2014 System k2 GmbH  info@systemk2.de
 * Based on http://tekkie.flashbit.net/php/tail-functionality-in-php
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

use \OCA\EasyBackup\ResponseFactory;
use \OCA\EasyBackup\Service\ConfigService;
use \OCP\ILogger;
use \OCP\IRequest;
use OCA\EasyBackup\Service\BackupService;

class LogfileviewController extends BaseController {
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\ConfigService
	 */
	protected $configService;
	
	/**
	 *
	 * @var \OCA\EasyBackup\Service\BackupService
	 */
	protected $backupService;

	public function __construct($appName, IRequest $request, ILogger $logger, ConfigService $configService, 
			BackupService $backupService, ResponseFactory $responseFactory) {
		parent::__construct($appName, $request, $logger, $responseFactory);
		$this->configService = $configService;
		$this->backupService = $backupService;
	}

	protected function tailFile() {
		$file = $this->configService->getLogfileName();
		$lines = $this->configService->getNumberOfLinesToDisplay();
		if (! file_exists($file)) {
			return array ();
		}
		$handle = fopen($file, 'r');
		if ($handle == false) {
			return array ();
		}
		$linecounter = $lines;
		$pos = - 2;
		$beginning = false;
		$text = array ();
		while ( $linecounter > 0 ) {
			$t = ' ';
			while ( $t != "\n" ) {
				if (fseek($handle, $pos, SEEK_END) == - 1) {
					$beginning = true;
					break;
				}
				$t = fgetc($handle);
				if ($t === false) {
					break;
				}
				$pos --;
			}
			$linecounter --;
			if ($beginning) {
				rewind($handle);
			}
			$readLine = fgets($handle);
			if ($readLine === false) {
				break;
			}
			$text [$lines - $linecounter - 1] = trim($readLine, "\n");
			if ($beginning) {
				break;
			}
		}
		fclose($handle);
		return $text;
	}

	/**
	 * @ControllerManaged
	 */
	protected function getLogFileContent() {
		$lines = $this->tailFile();
		$wrappedLines = array ();
		$maxWidth = $this->configService->getDisplayWidth();
		
		foreach ( $lines as $line ) {
			// Get rid of "Could not create directory '/var/www/.ssh'."
			if (preg_match("/\.ssh'\./", $line)) {
				continue;
			}
			while ( strlen($line) > $maxWidth ) {
				$wrappedLines [] = substr($line, 0, $maxWidth) . "\n";
				$line = substr($line, $maxWidth);
			}
			$wrappedLines [] = $line . "\n";
		}
		$data = '';
		$linesToDisplay = array_slice($wrappedLines, 0, $this->configService->getNumberOfLinesToDisplay());
		$increment = count($linesToDisplay) > 0 ? intval(200 / count($linesToDisplay)) : 0;
		$colorCode = 0;
		foreach ( $linesToDisplay as $line ) {
			$colorCodeHex = dechex($colorCode);
			if (strlen($colorCodeHex) == 1) {
				$colorCodeHex = "0" . $colorCodeHex;
			}
			$data .= "<font color=\"#$colorCodeHex$colorCodeHex$colorCodeHex\">" . str_replace("\n", '<br>', htmlentities($line)) .
					 '</font>';
			$colorCode += $increment;
		}
		return array (
				'html' => $data,
				'backupExecutingOrWaitingForRun' => $this->backupService->isExecutingOrWaitingForRun(),
				'lastBackupHtml' => $this->renderHtml('lastbackup.inc', 
						array (
								'lastBackupSuccessful' => $this->backupService->isLastBackupSuccessful(),
								'lastBackupTime' => $this->backupService->getLastBackupTime() 
						)) 
		);
	}

	/**
	 * @ControllerManaged
	 * @NoCSRFRequired
	 */
	protected function getCompleteLogfile() {
		$file = $this->configService->getLogfileName();
		$data = file_get_contents($file);
		return $this->responseFactory->createPlainTextResponse($data);
	}
}