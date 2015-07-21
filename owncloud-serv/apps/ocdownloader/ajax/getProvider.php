<?php

/**
* ownCloud - ocDownloader plugin
*
* @author Xavier Beurois
* @copyright 2012 Xavier Beurois www.djazz-lab.net
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
* You should have received a copy of the GNU Lesser General Public 
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
* 
*/

$pr = $_POST['p'];

OCP\JSON::checkAppEnabled('ocdownloader');
OCP\JSON::checkLoggedIn();

$k = Array('e' => TRUE);
if(preg_match('/^pr_([0-9]{1,4})$/', $pr, $m)){
	$p = OC_ocDownloader::getProvider($m[1]);
	if(isset($p['pr_name'])){
		$k['e'] = FALSE;
		$k['n'] = strtolower($p['pr_name']);
	}
}

OCP\JSON::encodedPrint($k);
