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
case 1:
//	Get scores for this level of this author  for this game by current user
	$myQuery = OCP\DB::prepare('SELECT json FROM *PREFIX*apps2_games_score WHERE uid=? AND game_id=? AND author=? AND level=?');
	$myResult = $myQuery->execute(Array($myUserID,$myArr['g'],$myArr['a'],$myArr['l']))->fetchRow();
	if ( $myResult ) {
//	Record found
		echo $myResult['json'];
	} else {
		$myQuery = OCP\DB::prepare('INSERT into *PREFIX*apps2_games_score (uid,game_id,author,level,json) values(?,?,?,?,?)');
		$myResult = $myQuery->execute(Array($myUserID,$myArr['g'],$myArr['a'],$myArr['l'],'{}'));
		echo '{}';
	}
	break;
case 2:
//	Put scores for this level of this author for this game by current user
	$myJSON=json_encode($myArr['j']);
	$myQuery = OCP\DB::prepare('UPDATE *PREFIX*apps2_games_score set json=? where uid=? AND game_id=? AND author=? AND level=?');
	$myResult = $myQuery->execute(Array($myJSON,$myUserID,$myArr['g'],$myArr['a'],$myArr['l']));
	break;
case 3:
//	Get All scores for this game of this author for all levels by current user
	$myQuery = OCP\DB::prepare('SELECT level l,json j FROM *PREFIX*apps2_games_score WHERE uid=? AND game_id=? AND author=?');
	$myResult = $myQuery->execute(Array($myUserID,$myArr['g'],$myArr['a']))->fetchAll();
	if ( $myResult ) {
		echo json_encode($myResult);
	} else {
		echo '{}';
	}
	break;
case 4:
//	Get All scores for this game for this level by current user
	$myQuery = OCP\DB::prepare('select JSON j from *PREFIX*apps2_games_score where UID=? and GAME_ID=? AND author=? and LEVEL=?');
	$myResult = $myQuery->execute(Array($myUserID,$myArr['g'],$myArr['a'],$myArr['l']))->fetchAll();
	if ( $myResult ) {
		echo json_encode($myResult);
	} else {
		echo '{}';
	}
	break;
case 5:
//	Get All scores for this game for this level
	$myQuery = OCP\DB::prepare('SELECT U.displayname n,S.json j FROM *PREFIX*users U,*PREFIX*apps2_games_score S WHERE game_id=? AND author=? AND level=? AND U.uid=S.uid');
	$myResult = $myQuery->execute(Array($myArr['g'],$myArr['a'],$myArr['l']))->fetchAll();
	if ( $myResult ) {
		echo json_encode($myResult);
	} else {
		echo '{}';
	}
	break;
case 6:
//	Delete all scores for this game by the current user
	$myQuery = OCP\DB::prepare('delete from *PREFIX*apps2_games_score where UID=? and GAME_ID=?');
	$myResult = $myQuery->execute(Array($myUserID,$myArr['g']));
	break;
}
?>