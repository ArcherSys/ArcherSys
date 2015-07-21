<?php namespace apps2_games;
/**
* @brief ownCloud Games Integration
* @site		http://oc-apps2.sourceforge.net/
*
* @author	Pierre Fauconnier
* @copyright	2014 Pierre Fauconnier
* @license	CeCILL v2.1 - http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.txt
*/
// ownCloud calls appinfo/app.php every time it runs. This is the place to
// Register navigation entries, and connect signals and slots

define(__NAMESPACE__.'\K_APP_NAME',	'oc_apps2_games');

\OCP\App::register(Array(
	'id'	=> K_APP_NAME,
	'order'	=> 60,
	'name'	=> 'Games2 +'
));

\OCP\App::addNavigationEntry(Array(
	'id'	=> namespace\K_APP_NAME,
	'order'	=> 60,
	'href'	=> \OCP\Util::linkTo(K_APP_NAME, 'main.php'),
	'icon'	=> \OCP\Util::imagePath(K_APP_NAME, 'games-card_game.png'),
	'name'	=> 'Games2 +'
));
//\OC_Hook::connect('OC_DB','install',	'installer');
//\OC_Hook::connect('OC_DB','update',	'updater');
/*
$myFile = \OC_App::getAppPath('oc_apps2_games').'/appinfo/apps2_game_map.csv';
if ( @is_readable($myFile) ) {
	$myHandle = @fopen($myFile,'r');
	if ( $myHandle ) {
		\OCP\DB::beginTransaction();
		$mySQL = <<<EOR
INSERT	INTO *PREFIX*apps2_games_map(game_id,author,map_id,json,jsol)
VALUES	(?,?,?,?,?)
EOR;
		$myQuery	= \OCP\DB::prepare($mySQL);
		try {
			$myLine	= 0;
			while ( ($myBuffer = fgets($myHandle, 4096)) !== false ) {
				$myLine++;
				$myArr		= explode("\t", $myBuffer);
				if ( count($myArr) == 5 ) {
					$myResult	= $myQuery->execute($myArr);
				} else {
					fclose($myHandle);
//					\OCP\DB::rollback();
//				Log the error message into owncloud.log - with a (E70) marker
					\OCP\Util::writeLog('games','(E70) Wrong number of values in '.$myFile.'#'.$myLine, \OCP\Util::ERROR);
					return false;
				}
			}
		} catch ( \Doctrine\DBAL\DBALException $e ) {
			fclose($myHandle);
//			\OCP\DB::rollback();
//		Log the error message into owncloud.log - with a (E70) marker
			\OCP\Util::writeLog('games','(E70) '.$e->getMessage(), \OCP\Util::ERROR);
			return false;
		}
		fclose($myHandle);
		\OCP\DB::commit();
		return true;
	}
}
*/
?>