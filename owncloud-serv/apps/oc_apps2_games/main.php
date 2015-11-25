<?php namespace apps2_games;
/**
* @brief ownCloud Games Integration
* @site		http://oc-apps2.sourceforge.net/
*
* @author	Pierre Fauconnier
* @copyright	2014 Pierre Fauconnier
* @license	CeCILL v2.1 - http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.txt
*/
// Main -> fired by ownCloud via appinfo/app.php
\OCP\User::checkLoggedIn();
\OCP\App::checkAppEnabled(K_APP_NAME);
\OCP\App::setActiveNavigationEntry(K_APP_NAME);
//
$myJSON =<<<EOJ
[
	{"id":"minesweeper"
		,"js":"g/jsminesweeper/JsMinesweeper.html"
		,"caption":"Mine Sweeper"
		,"ico":"img/minesweeper.png"
		,"title":"Minesweeper is a small naval warship designed to engage in minesweeping.<br>By using various mechanisms intended to counter the threat posed by naval mines, minesweepers keep waterways clear for shipping."
	},{"id":"titactoe"
		,"js":"g/tictactoe/tictactoe.html"
		,"caption":"Tic-Tac-Toe"
		,"ico":"img/tictactoe.png"
		,"title":"Tic-tac-toe (or Noughts and crosses, Xs and Os, Terni Lapilli) is a paper-and-pencil game for two players, X and O, who take turns marking the spaces in a 3\u00d73 grid.<br>The player who succeeds in placing three respective marks in a horizontal, vertical, or diagonal row wins the game."
	},{"id":"fiveInRow"
		,"js":"g/fiveInRow/fir.html"
		,"caption":"Five in Row"
		,"ico":"img/FiR.jpg"
		,"title":"Traditionally played with Go pieces (black and white stones) on a go board with 19\u00d719 intersections.<br>User plays first, then players alternate in placing a mark of their own on an empty place. The winner is the first player to get an unbroken row of five marks horizontally, vertically, or diagonally."
	},{"id":"theTotalIsRight"
		,"js":"g/theTotalIsRight/ttir.html"
		,"caption":"The total is right"
		,"ico":"img/ttir.jpg"
		,"title":"A random three-digit target is generated, then six numbers are randomly chosen. You have thirty seconds to get as near to the target as possible by combining the six numbers, and using addition, subtraction, multiplication and division."
	},{"id":"jsSudoku"
		,"js":"g/duSouk/jsSudoku.html"
		,"caption":"Number Place"
		,"ico":"img/jsSudoku.jpg"
		,"title":"Howard Garns (1905-1989) is the creator of Number Place - aka Sudoku.<br>The objective is to fill a 9\u00d79 grid with digits so that each column, each row, and each of the nine 3\u00d73 sub-grids that compose the grid contains all of the digits from 1 to 9. The puzzle is a grid partially completed with \"givens\", and must have a unique solution."
	},{"id":"sokogo"
		,"js":"g/sokogo/sokogo.html"
		,"caption":"Sokogo"
		,"ico":"img/sokogo.jpg"
		,"title":"Sokoban ('warehouse keeper' in japanese) was created in 1981 by Hiroyuki Imabayashi. This is a type of transport puzzle, in which the player pushes (but never pulls - except in reverse mode) one box or crate at a time, around in a warehouse, trying to get them to storage locations."
	}
]
EOJ;

$myArr = json_decode($myJSON);
if ( $myArr ) {
//	Display the list of games
	$myTemplate = new \OCP\Template(K_APP_NAME, 'listGames.tpl', 'user');
	$myTemplate->assign('mainList', $myArr);
} else {
	$myTemplate = new \OCP\Template(K_APP_NAME, 'Err0201.tpl', 'user');
}
$myTemplate->printPage();
?>