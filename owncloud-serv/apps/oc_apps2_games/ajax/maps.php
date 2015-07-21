<?php
/**
* @brief ownCloud Games Integration
*
* @author	Pierre Fauconnier
* @copyright	2014 Pierre Fauconnier
* @license	CeCILL v2.1 - http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.txt
* @site		http://oc-apps2.sourceforge.net/
*/
switch ( $myArr['f'] ) {
case 10:
//	Get authors of maps for this game
	$myQuery = OCP\DB::prepare('SELECT distinct author a FROM *PREFIX*apps2_games_map WHERE game_id=?');
	$myResult = $myQuery->execute(Array($myArr['g']))->fetchAll();
	if ( $myResult ) {
//	Record(s) found
		echo json_encode($myResult);
	} else {
		echo '{}';
	}
	break;
case 11:
//	Get id of maps (levels) by this author for this game
	$myQuery = OCP\DB::prepare('SELECT map_id l FROM *PREFIX*apps2_games_map WHERE game_id=? and author=?');
	$myResult = $myQuery->execute(Array($myArr['g'],$myArr['a']))->fetchAll();
	if ( $myResult ) {
//	Record(s) found
		echo json_encode($myResult);
	} else {
		echo '{}';
	}
	break;
case 12:
//	Get map contents for this map_id (level) by this author for this game
	$myQuery = OCP\DB::prepare('SELECT json j FROM *PREFIX*apps2_games_map WHERE game_id=? and author=? and map_id=?');
	$myResult = $myQuery->execute(Array($myArr['g'],$myArr['a'],$myArr['l']))->fetchRow();
	if ( $myResult ) {
//	Record found
		echo json_encode($myResult);
	} else {
		echo '{}';
	}
	break;
}