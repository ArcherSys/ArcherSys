<?php
/**
* @brief ownCloud Games Integration
*
* @author	Pierre Fauconnier
* @copyright	2014 Pierre Fauconnier
* @license	CeCILL v2.1 - http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.txt
* @site		http://oc-apps2.sourceforge.net/
*/
// Fired thru XHR by ../g/_shared/ajax.js
// Warning: checkLoggedIn could return a json error msg {"data":{"message":"Authentication error"},"status":"error"}
OCP\JSON::checkLoggedIn();
// Warning: checkAppEnabled could return a json error msg {"data":{"message":"Application is not enabled"},"status":"error"}
OCP\JSON::checkAppEnabled('oc_apps2_games');
$myUserID	= OCP\User::getUser();
// Everything is going well. Now, what is the matter?
$myPost	= file_get_contents('php://input');
$myArr	= json_decode($myPost, true);
//echo 'F='.$myArr['f'].'=';
//echo ' G='.$myArr['g'].'=';
//echo ' L='.$myArr['l'].'=';
switch ( $myArr['f'] ) {
case  1:case  2:case  3:case  4:case  5:case  6:
	include 'scores.php';
	break;
case 10:case 11:case 12:case 13:case 14:
	include 'maps.php';
	break;
}
