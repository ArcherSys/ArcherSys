/*
 * PROJECT:	JsMinesweeper
 * VERSION:	0.1.5
 * LICENSE:	BSD (revised)
 * AUTHOR:	(c) 2004 Radek Zak
 * LINK:	http://www.radekzak.com/jsminesweeper/
 * UPDATED:	2004-08-03
 *
 * This script can be used freely as long as all
 * copyright messages are intact.
 *
<!----------------------------------------------------------------\
|  ownCloud Games Integration (c) 2014 Pierre Fauconnier          |
|  see http://oc-apps2.sourceforge.net/                           |
\----------------------------------------------------------------->
*/
var G_oc = {	 id:'jsminesweeper'
		,caption:'JsMinesweeper'
		,author:''
		,lvl:0, levels:['Beginner','Intermediate','Expert']
		,topN:5
	};
/*
 *
 * class JsMinesweeper
 * -------------------
 * void init()
 * void resetGame()
 * void startGame()
 * void winGame()
 * void loseGame()
 * void prepareGame()
 * void mouseDown()
 * void mouseUp()
 * void mouseOut()
 * void mouseLeftClick()
 * void mouseRightClick()
 * void levelBeginner()
 * void levelIntermediate()
 * void levelExpert()
 * void levelCustom()
 * void questionMarks()
 *
 * class preLoadImages
 * -------------------
 *
 * class boardCell
 * ---------------
 * void resetCell()
 *
 * class Settings
 * --------------
 * void setElements()
 * void load()
 * void changeLevel()
 * void showCustom()
 *
 * class Timer
 * -----------
 * void start()
 * void stop()
 * void reset()
 * void incTime()
 *
 * class HTML
 * ----------
 * void create()
 * void destroy()
 * void addUnit()
 * void addRow()
 * void addTable()
 * void addElement()
 *
 * class gameFlow
 * --------------
 * void reset()
 *
 * class Board
 * -----------
 * void setArray()
 * void resetArray()
 * void updateFaces()
 * void updateMineCounter()
 * void updateTimeCounter()
 * void splitCounter()
 * void setMine()
 * void setMines()
 * void setNumbers()
 * void findFriends()
 * void uncover()
 * void uncoverFriends()
 * void uncoverNotFlagged()
 * void coverAll()
 * void flagMine()
 * void flagAllMines()
 * void uncoverAllMines()
 * void checkIfWon()
 *
 * class Cookies
 * -------------
 * void getValue()
 * void cookieExists()
 * void expire()
 * void set()
 * void get()
 *
 * class Highscores
 * ----------------
 * void load()
 * void save()
 * void reset()
 * void check()
 * void show()
 *
 *
 *
 * TODO:
 ** Best times
 ** Custom level
 ** Improve speed
 ** Check version for update


 */
function JsMinesweeper() {

	var self = this;

	this.project = {
		name:		'JsMinesweeper',		// Name of project
		version:	'0.1.5'				// Project version
	}
	/**
	 * @Settings()
	 * This module is in charge of loading/saving/changing game settings.
	 *
	 * @return void
	 * @access public
	 */
	var Settings = function () {

		this.cookies = new Cookies(self.project.name + self.project.version + '_settings', 365);	// Cookies module
		
		this.mineNumber		= 10;		// number of mines
		this.areaY		= 9;		// height in units
		this.areaX		= 9;		// width in units
		this.cellWidth		= 16;		// width of the cell
		this.cellHeight		= 17;		// height of the cell
		this.level		= 'beginner';	// starting level
		this.questionMarks	= 1;		// show / hide question marks

		this.rules = {				// game rules
			minMines:	10,		// minimum number of mines
			minAreaY:	9,		// minimum height in units
			minAreaX:	9,		// minimum width in units
			maxAreaY:	30,		// maximum height in units
			maxAreaX:	24,		// maximum width in units
			maxTimeCounter: 999		// maximum time limit
		}


		/**
		 * Stores element ids
		 *
		 * @return void
		 * @access public event
		 */
		this.setElements = function () {
			this.el = {
				'minesweeper':			document.getElementById('minesweeper'),
				'minesweeper_board':		document.getElementById('minesweeper-board'),
				'minesweeper_button':		document.getElementById('minesweeper-button'),
				'minesweeper_mine_counter_1':	document.getElementById('minesweeper-mine-counter-1'),
				'minesweeper_mine_counter_2':	document.getElementById('minesweeper-mine-counter-2'),
				'minesweeper_mine_counter_3':	document.getElementById('minesweeper-mine-counter-3'),
				'minesweeper_score_counter_1':	document.getElementById('minesweeper-score-counter-1'),
				'minesweeper_score_counter_2':	document.getElementById('minesweeper-score-counter-2'),
				'minesweeper_score_counter_3':	document.getElementById('minesweeper-score-counter-3'),
			}
		}


		/**
		 * Loads settings from cookies
		 *
		 * @return void
		 * @access public event
		 */
		this.load = function () {
			var level = this.cookies.get('level');
			if (level != null) {
				this.changeLevel(level);
			}
			var questionMarks = 1;
		}


		/**
		 * Changes difficulty level
		 *
		 * @param str level
		 * @return void
		 * @access public event
		 */
		this.changeLevel = function(level) {
			switch (level) {
				case 'beginner':
					this.level = 'beginner';
					this.mineNumber = 10;
					this.areaY = 9;
					this.areaX = 9;
					G_oc.lvl=0;
					break;
				case 'intermediate':
					this.level = 'intermediate';
					this.mineNumber = 40;
					this.areaY = 16;
					this.areaX = 16;
					G_oc.lvl=1;
					break;
				case 'expert':
					this.level = 'expert';
					this.mineNumber = 99;
					this.areaY = 16;
					this.areaX = 30;
					G_oc.lvl=2;
					break;
				case 'custom':
					this.level = 'custom';
					break;
			}
		}


		/**
		 * Opens window with custom settings
		 *
		 * @return void
		 * @access public event
		 */
		this.showCustom = function () {
			clearInterval(self.action);
			window.showModalDialog("JsMinesweeper_dialog_custom.html",self,"dialogHeight: 150px; dialogWidth: 260px; center: Yes; help: No; resizable: No; status: No;");
		}

	} // @Settings()
/*********************************************************************************************************************/

	this.imgs = new preLoadImages();	// Images module
	this.settings = new Settings();		// Settings module
	this.timer = new Timer();		// Timer module
	this.html = new HTML();			// HTML module
	this.board = new Board();		// Board module
	this.game = new gameFlow();		// Game flow module
	this.highscores = new Highscores();	// Highscores module

	this.gameCell = [];			// Board cells
	this.action = null;



	/**
	 * Initialize game
	 *
	 * @return void
	 * @access public
	 */
	this.init = function () {
document.getElementById('apps2_games_begin').children[0].textContent=G_oc.levels[0];
document.getElementById('apps2_games_normal').children[0].textContent=G_oc.levels[1];
document.getElementById('apps2_games_expert').children[0].textContent=G_oc.levels[2];
		self.settings.load();
		self.settings.setElements();
		self.highscores.load();
		self.prepareGame();
		self.board.updateMineCounter();
		self.board.updateTimeCounter();
		function buttonClick( e ) {
			switch ( e.currentTarget.id ) {
			case 'apps2_games_begin':
				self.levelBeginner();
				break;
			case 'apps2_games_normal':
				self.levelIntermediate();
				break;
			case 'apps2_games_expert':
				self.levelExpert();
				break;
			case 'apps2_games_stats':
				oc_apps2_statistics('me', G_oc.lvl)
				break;
			case 'apps2_games_statsA':
				oc_apps2_statistics('all', G_oc.lvl)
				break;
			case 'apps2_games_statsB':
				oc_apps2_statistics('me')
				break;
			}
		}
		var	myList = document.getElementsByClassName('button'),
			i;
		for ( i=0; i < myList.length; i++ ) {
			myList[i].onclick = buttonClick;
		}
		
	}



	/**
	 * Reset game
	 *
	 * @return void
	 * @access public
	 */
	this.resetGame = function () {
		this.game.reset();
		this.board.resetArray();
		this.timer.reset();
		this.board.coverAll();
		this.board.updateFace('button-smile');
		this.board.updateMineCounter();
		this.board.updateTimeCounter();
	}


	/**
	 * Start game
	 *
	 * @return void
	 * @access public
	 */
	this.startGame = function () {
		this.board.setMines();
		this.board.setNumbers();
		this.timer.start();
		this.game.isPlaying = true;
	}


	/**
	 * Win game
	 *
	 * @return void
	 * @access public
	 */
	this.winGame = function () {
		this.timer.stop();
		this.game.isPlaying = false;
		this.board.updateFace('button-finished');
		this.board.flagAllMines();
		this.game.isWinner = true;
		this.highscores.check();
	}


	/**
	 * Lose game
	 *
	 * @return void
	 * @access public
	 */
	this.loseGame = function () {
		this.timer.stop();
		this.game.isPlaying = false;
		this.board.updateFace('button-failed');
		this.board.uncoverAllMines();
		this.game.isLoser = true;
	}


	/**
	 * Prepare game settings, board, images
	 *
	 * @return void
	 * @access public
	 */
	this.prepareGame = function() {
		this.settings.el.minesweeper.style.width = (this.settings.areaX * (this.settings.cellWidth + 4) + 17);
		window.resizeTo( (this.settings.areaX * this.settings.cellWidth + 22 + 6)
				,(this.settings.areaY * this.settings.cellHeight + 106));
		this.board.setArray();
		this.html.create();
	}

	/**
	 * Mouse down event handler
	 *
	 * @return void
	 * @access public
	 */
	this.mouseDown = function(event) {
		if ( event.button == 3 ) {
			this.board.uncoverNotFlagged(event.srcElement.minesweeper_posY, event.srcElement.minesweeper_posX);
		}
		if (!this.game.isWinner && !this.game.isLoser ) {
			this.board.updateFace('button-ooh');
		}
	}


	/**
	 * Mouse up event handler
	 *
	 * @return void
	 * @access public
	 */
	this.mouseUp = function() {
		if (!this.game.isWinner && !this.game.isLoser ) {
			this.board.updateFace('button-smile');
		}
	}


	/**
	 * Mouse out event handler
	 *
	 * @return void
	 * @access public
	 */
	this.mouseOut = function() {
		if (!this.game.isWinner && !this.game.isLoser ) {
			this.board.updateFace('button-smile');
		}
	}


	/**
	 * Mouse left click event handler
	 *
	 * @param int posY
	 * @param int posX
	 * @return void
	 * @access public
	 */
	this.mouseLeftClick = function ( posY, posX ) {
		if (!this.game.isWinner && !this.game.isLoser) {
			this.board.uncover(posY, posX);
		}
	}


	/**
	 * Mouse right click event handler
	 *
	 * @param int posY
	 * @param int posX
	 * @return false
	 * @access public
	 */
	this.mouseRightClick = function ( posY, posX ) {
		if (!this.game.isWinner && !this.game.isLoser) {
			this.board.flagMine(posY, posX);
		}
		return false;
	}


	/**
	 * Change level to beginner
	 *
	 * @return void
	 * @access public
	 */
	this.levelBeginner = function () {
		this.settings.changeLevel('beginner');
		this.html.destroy();
		this.prepareGame();
		this.resetGame();
		this.board.updateMineCounter();
		this.board.updateTimeCounter();
	}


	/**
	 * Change level to intermediate
	 *
	 * @return void
	 * @access public
	 */
	this.levelIntermediate = function () {
		this.settings.changeLevel('intermediate');
		this.html.destroy();
		this.prepareGame();
		this.resetGame();
		this.board.updateMineCounter();
		this.board.updateTimeCounter();
	}


	/**
	 * Change level to expert
	 *
	 * @return void
	 * @access public
	 */
	this.levelExpert = function () {
		this.settings.changeLevel('expert');
		this.html.destroy();
		this.prepareGame();
		this.resetGame();
		this.board.updateMineCounter();
		this.board.updateTimeCounter();
	}


	/**
	 * Change level to custom
	 *
	 * @return void
	 * @access public
	 */
	this.levelCustom = function() {
		this.action = setInterval(this.settings.showCustom, 1000);
//		alert('to be done');
	}

















	/**
	 * @preLoadImages()
	 * This module is in charge of pre loading the images.
	 *
	 * @return void
	 * @access public
	 */
	function preLoadImages() {

		this.Counter = [];		// Time counter images
		this.Faces = [];		// Face images
		this.Checks = [];		// Checks images
		
		// loading counter digits
		for (var i = 0; i <= 9; i++) {
			this.Counter[i] = new Image(23, 13);
			this.Counter[i].src = 'images/time' + i + '.gif';
		}
		this.Counter['-'] = new Image(23, 13);
		this.Counter['-'].src = 'images/time-.gif';

		// loading faces
		for (var i = 1; i <= 4; i++) {
			this.Faces[i] = new Image(17, 17);
			this.Faces[i].src = 'images/face' + i + '.png';
		}

		// loading check marks
		this.Checks[0] = new Image(7, 7);
		this.Checks[0].src = 'images/notchecked.png';
		this.Checks[1] = new Image(7, 7);
		this.Checks[1].src = 'images/checked.png';

	} // @preLoadImages()
/*********************************************************************************************************************/










	/**
	 * @boardCell()
	 * This module is in charge of board cells.
	 *
	 * @return void
	 * @access public
	 */
	function boardCell() {

		this.isMine = false;		// cell is a mine
		this.isCovered = true;		// cell is covered
		this.isFlagged = false;		// cell is flagged
		this.isQuestion = false;	// cell is marked with quesiton
		this.isFirstClick = false;	// cell is first click (can't be a mine)

		this.hasNumber = 0;		// cell has number of mine friends
		this.el = null;			// cell's html element


		/**
		 * Reset cell to default values
		 *
		 * @return void
		 * @access public event
		 */
		this.resetCell = function() {
			this.isMine = false;
			this.isCovered = true;
			this.isFlagged = false;
			this.isQuestion = false;
			this.isFirstClick = false;

			this.hasNumber = 0;
		}

	} // @boardCell()
/*********************************************************************************************************************/




















	/**
	 * @Timer()
	 * This module is in charge of time keeping.
	 *
	 * @return void
	 * @access public
	 */
	function Timer() {

		selfTimer = this;

		this.time = 0;		// timer in seconds
		this.timerId = null;	// timer id


		/**
		 * Start timer
		 *
		 * @return void
		 * @access public event
		 */
		this.start = function() {
			this.reset();
			this.timerId = setInterval(this.incTime, 1000);
		}


		/**
		 * Stop timer
		 *
		 * @return void
		 * @access public event
		 */
		this.stop = function() {
			if (this.timerId) {
				clearInterval(this.timerId);
			}
		}


		/**
		 * Reset timer
		 *
		 * @return void
		 * @access public event
		 */
		this.reset = function() {
			this.stop();
			this.time = 0;
		}


		/**
		 * Increase time and update counter.
		 * This func is called by setInterval().
		 *
		 * @return void
		 * @access public event
		 */
		this.incTime = function() {
			if (self.game.isPlaying) {
				if (selfTimer.time < self.settings.rules.maxTimeCounter) {
					selfTimer.time++;
					self.board.updateTimeCounter();
				}
			} else {
				selfTimer.stop();
				selfTimer.reset();
			}
		}
	} // @Timer()
/*********************************************************************************************************************/










	/**
	 * @HTML()
	 * This module is in charge of creating and destroying HTML elements.
	 *
	 * @return void
	 * @access public
	 */
	function HTML() {

		
		/**
		 * Creates game board by appending HTML elements
		 *
		 * @return void
		 * @access public event
		 */
		this.create = function() {
			for (var y = 0; y < self.settings.areaY; y++) {
				for (var x = 0; x < self.settings.areaX; x++) {
					this.addUnit(y, x);
				}
			}
		}


		/**
		 * Destroys game board by removing HTML elements
		 *
		 * @return void
		 * @access public event
		 */
		this.destroy = function() {
			document.getElementById('minesweeper-board').removeChild(document.getElementById('minesweeper-board-table'));
		}


		/**
		 * Creates HTML element for a board cell
		 *
		 * @param int posY
		 * @param int posX
		 * @return void
		 * @access public event
		 */
		this.addUnit = function(posY, posX) {
			var el = document.createElement('div');
			el.className = 'unit';
			el.id = 'minesweeper-unit-' + posY + '-' + posX;
			el.minesweeper_posY = posY;
			el.minesweeper_posX = posX;
			el.onclick = function() {
				self.mouseLeftClick(this.minesweeper_posY, this.minesweeper_posX);
			}
			el.oncontextmenu = function() {
				self.mouseRightClick(this.minesweeper_posY, this.minesweeper_posX);
			}
			el.onmousedown = function(event) {
				self.mouseDown(event);
			}
			el.onmouseup = function() {
				self.mouseUp();
			}
			el.onmouseout = function() {
				self.mouseOut();
			}
			this.addRow(posY);
			this.addElement(el, 'minesweeper-row-' + posY);
			self.gameCell[posY][posX].el = el;
		}


		/**
		 * Creates HTML element for a board row
		 *
		 * @param int posY
		 * @return void
		 * @access public event
		 */
		this.addRow = function(posY) {
			if (!document.getElementById('minesweeper-row-' + posY)) {
				var el = document.createElement('div');
				el.id = 'minesweeper-row-' + posY;
				el.minesweeper_posY = posY;
				this.addTable();
				this.addElement(el, 'minesweeper-board-table');
			}
		}


		/**
		 * Creates HTML element for a board table
		 *
		 * @return void
		 * @access public event
		 */
		this.addTable = function() {
			if (!document.getElementById('minesweeper-board-table')) {
				var el = document.createElement('div');
				el.id = 'minesweeper-board-table';
				this.addElement(el, 'minesweeper-board');
			}
		}


		/**
		 * Adds the element
		 *
		 * @param obj el
		 * @param str to
		 * @return void
		 * @access public event
		 */
		this.addElement = function(el, to) {
			to = document.getElementById(to);
			to.appendChild(el);
		}
	} // @HTML()
/*********************************************************************************************************************/










	/**
	 * @gameFlow()
	 * This module is in charge of keeping the game status.
	 *
	 * @return void
	 * @access public
	 */
	function gameFlow() {
		this.isPlaying = false;		// is someone playing
		this.isWinner = false;		// did someone win
		this.isLoser = false;		// did someone lose
		this.flagsPlaced = 0;		// number of flags placed
		this.cellsUncovered = 0;	// number of cells uncovered
		this.minesSet = 0;		// number of mines set on a board
		this.firstY = null;		// first click - y coordinates
		this.firstX = null;		// first click - x coordinates


		/**
		 * Resets game status
		 *
		 * @return void
		 * @access public event
		 */
		this.reset = function() {
			this.isPlaying = false;
			this.isWinner = false;
			this.isLoser = false;
			this.flagsPlaced = 0;
			this.cellsUncovered = 0;
			this.minesSet = 0;
			this.firstY = null;
			this.firstX = null;
		}
	} // @gameFlow()
/*********************************************************************************************************************/










	/**
	 * @Board()
	 * This module is in charge of maintaining game board.
	 *
	 * @return void
	 * @access public
	 */
	function Board() {


		/**
		 * Sets array for game board
		 *
		 * @return void
		 * @access public
		 */
		this.setArray = function() {
			for (var y = 0; y < self.settings.areaY; y++) {
				self.gameCell[y] = new Array();
				for (var x = 0; x < self.settings.areaX; x++) {
					self.gameCell[y][x] = new boardCell();
				}
			}
		}


		/**
		 * Resets array for game board
		 *
		 * @return void
		 * @access public
		 */
		this.resetArray = function() {
			for (var y = 0; y < self.settings.areaY; y++) {
				for (var x = 0; x < self.settings.areaX; x++) {
					self.gameCell[y][x].resetCell();
				}
			}
		}


		/**
		 * Updates face image on restart button
		 *
		 * @param str position
		 * @return void
		 * @access public event
		 */
		this.updateFace = function(position) {
			self.settings.el.minesweeper_button.className = position;
		}


		/**
		 * Updates mine counter
		 *
		 * @return void
		 * @access public event
		 */
		this.updateMineCounter = function() {
			var holder = new Array();
			holder = this.splitCounter((self.settings.mineNumber - self.game.flagsPlaced));
			self.settings.el.minesweeper_mine_counter_1.src = self.imgs.Counter[holder[0]].src;
			self.settings.el.minesweeper_mine_counter_2.src = self.imgs.Counter[holder[1]].src;
			self.settings.el.minesweeper_mine_counter_3.src = self.imgs.Counter[holder[2]].src;
		}


		/**
		 * Updates time counter
		 *
		 * @return void
		 * @access public event
		 */
		this.updateTimeCounter = function() {
			var holder = new Array();
			holder = this.splitCounter((self.timer.time));
			self.settings.el.minesweeper_score_counter_1.src = self.imgs.Counter[holder[0]].src;
			self.settings.el.minesweeper_score_counter_2.src = self.imgs.Counter[holder[1]].src;
			self.settings.el.minesweeper_score_counter_3.src = self.imgs.Counter[holder[2]].src;
		}


		/**
		 * Splits number into 3 separate digits
		 *
		 * @param int number
		 * @return array
		 * @access public event
		 */
		this.splitCounter = function(number) {
			var myArray = new Array();
			myArray[0] = 0;
			myArray[1] = 0;
			myArray[2] = 0;
			var negative = false;
			if (number < 0) {
				number = (number * (-1));
				negative = true;
			}
			myArray[0] = (number % 10);
			myArray[1] = Math.floor(number / 10 % 10);
			myArray[2] = Math.floor(number / 100 % 10);
			if (negative) {
				myArray[2] = '-';
			}
			return myArray;
		}


		/**
		 * Places a single mine on the field
		 *
		 * @return void
		 * @access public
		 */
		this.setMine = function() {
			var newMine;
			var newMineY;
			var newMineX;

			newMine = Math.ceil(Math.random() * (self.settings.areaX * self.settings.areaY - self.game.minesSet - 1));
			newMineY = Math.floor(newMine / self.settings.areaX);
			newMineX = newMine % self.settings.areaX;

			var tmpCounter = 0;
			for (var y = 0; y < self.settings.areaY; y++) {
				for (var x = 0; x < self.settings.areaX; x++) {
					if ((!self.gameCell[y][x].isMine) && (!self.gameCell[y][x].isFirstClick)) {
						tmpCounter++;
						if (newMine == tmpCounter) {
							self.gameCell[y][x].isMine = true;
							self.game.minesSet++;
						}
					}
				}
			}
		}


		/**
		 * Places all mines on the field
		 *
		 * @return void
		 * @access public
		 */
		this.setMines = function() {
			for (var i = 0; i < self.settings.mineNumber; i++) {
				this.setMine();
			}
		}


		/**
		 * Sets appropriate numbers on the mine field
		 *
		 * @return void
		 * @access public
		 */
		this.setNumbers = function() {
			var myMinesCount = 0;
			var friends = [];
			var el;

			for (var y = 0; y < self.settings.areaY; y++) {
				for (var x = 0; x < self.settings.areaX; x++) {
					if (self.gameCell[y][x].isMine == false) {
						myMinesCount = 0;
						friends = [];

						friends = this.findFriends(y, x);
						for (var i = 0; i < friends.length; i++) {
							if (self.gameCell[friends[i][0]][friends[i][1]].isMine) {
								myMinesCount++;
							}
						}
						self.gameCell[y][x].hasNumber = myMinesCount;
					} else {
						self.gameCell[y][x].hasNumber = 0;
					}
				}
			}
		}


		/**
		 * Finds and returns all neighbor cells
		 *
		 * @param int posY
		 * @param int posX
		 * @return array
		 * @access public
		 */
		this.findFriends = function(posY, posX) {
			var friends = [];

			if (posY > 0) {
				if (posX > 0) {
					friends.push(new Array(posY-1, posX-1));
				}
				friends.push(new Array(posY-1, posX));
				if (posX < (self.settings.areaX-1)) {
					friends.push(new Array(posY-1, posX+1));
				}
			}
			if (posX > 0) {
				friends.push(new Array(posY, posX-1));
			}
			friends.push(new Array(posY, posX));
			if (posX < (self.settings.areaX-1)) {
				friends.push(new Array(posY, posX+1));
			}
			if (posY < (self.settings.areaY-1)) {
				if (posX > 0) {
					friends.push(new Array(posY+1, posX-1));
				}
				friends.push(new Array(posY+1, posX));
				if (posX < (self.settings.areaX-1)) {
					friends.push(new Array(posY+1, posX+1));
				}
			}

			return friends;
		}
	

		/**
		 * Uncovers a single cell on the board
		 *
		 * @param int posY
		 * @param int posX
		 * @return void
		 * @access public
		 */
		this.uncover = function(posY, posX) {
			if (self.game.isPlaying) {
				if ((self.gameCell[posY][posX].isCovered) && (!self.gameCell[posY][posX].isFlagged)) {
					self.gameCell[posY][posX].isCovered = false;
					if (self.gameCell[posY][posX].isMine) {
						self.loseGame();
						self.gameCell[posY][posX].el.className = 'unit_uncover_mine';
					} else if (self.gameCell[posY][posX].hasNumber == 0) {
						self.gameCell[posY][posX].el.className = 'unit_uncover_blank';
						this.uncoverFriends(posY, posX);
						self.game.cellsUncovered++;
						self.board.checkIfWon();
					} else {
						self.gameCell[posY][posX].el.className = 'unit_uncover_' + self.gameCell[posY][posX].hasNumber;
						self.game.cellsUncovered++;
						self.board.checkIfWon();
					}
				}
			} else {
				if (!self.game.isWinner && !self.game.isLoser) {
					self.gameCell[posY][posX].isFirstClick = true;
					self.game.firstY = posY;
					self.game.firstX = posX;
					self.startGame();
					this.uncover(posY, posX);
				}
			}
		}


		/**
		 * Uncovers friend cells on the board
		 *
		 * @param int posY
		 * @param int posX
		 * @return void
		 * @access public
		 */
		this.uncoverFriends = function(posY, posX) {
			if (self.game.isPlaying) {
				var friends = [];
				friends = this.findFriends(posY, posX);
				for (var i = 0; i < friends.length; i++) {
					this.uncover(friends[i][0], friends[i][1]);
				}
			}
		}


		/**
		 * Uncovers all mines that are not flagged
		 *
		 * @param int posY
		 * @param int posX
		 * @return void
		 * @access public
		 */
		this.uncoverNotFlagged = function(posY, posX) {
			if (self.game.isPlaying) {
				var flaggedFriends = 0;
				var friends = [];
				friends = this.findFriends(posY, posX);
				for (var i = 0; i < friends.length; i++) {
					if (self.gameCell[friends[i][0]][friends[i][1]].isFlagged) {
						flaggedFriends++;
					}
				}
				if (self.gameCell[posY][posX].hasNumber == flaggedFriends) {
					for (var i = 0; i < friends.length; i++) {
						if (!self.gameCell[posY][posX].isFlagged) {
							this.uncover(friends[i][0], friends[i][1]);
						}
					}
				}
			}
		}


		/**
		 * Covers all cells on the board
		 *
		 * @return void
		 * @access public
		 */
		this.coverAll = function() {
			for (var y = 0; y < self.settings.areaY; y++) {
				for (var x = 0; x < self.settings.areaX; x++) {
					self.gameCell[y][x].el.className = 'unit';
				}
			}
		}


		/**
		 * Flags a single mine
		 *
		 * @param int posY
		 * @param int posX
		 * @return void
		 * @access public
		 */
		this.flagMine = function(posY, posX) {
			if (self.game.isPlaying) {
				if (self.gameCell[posY][posX].isCovered) {
					if (self.settings.questionMarks == 1) {
						if (self.gameCell[posY][posX].isFlagged) {
							self.gameCell[posY][posX].isFlagged = false;
							self.gameCell[posY][posX].isQuestion = true;
							self.game.flagsPlaced--;
							self.gameCell[posY][posX].el.className = 'unit_question';
							this.updateMineCounter();
						} else if (self.gameCell[posY][posX].isQuestion) {
							self.gameCell[posY][posX].isQuestion = false;
							self.gameCell[posY][posX].el.className = 'unit';
						} else {
							self.gameCell[posY][posX].isFlagged = true;
							self.game.flagsPlaced++;
							self.gameCell[posY][posX].el.className = 'unit_marked';
							this.updateMineCounter();
						}
					} else {
						if (!self.gameCell[posY][posX].isFlagged) {
							self.gameCell[posY][posX].isFlagged = true;
							self.game.flagsPlaced++;
							self.gameCell[posY][posX].el.className = 'unit_marked';
							this.updateMineCounter();
						} else {
							self.gameCell[posY][posX].isFlagged = false;
							self.game.flagsPlaced--;
							self.gameCell[posY][posX].el.className = 'unit';
							this.updateMineCounter();
						}
					}
				}
			}
		}


		/**
		 * Flags all unflagged mines on the board
		 *
		 * @return void
		 * @access public
		 */
		this.flagAllMines = function() {
			if (self.game.isPlaying) {
				for (var y = 0; y < self.settings.areaY; y++) {
					for (var x = 0; x < self.settings.areaX; x++) {
						if (self.gameCell[y][x].isMine && !self.gameCell[y][x].isFlagged) {
							this.flagMine(y, x);
						}
					}
				}
			}
		}


		/**
		 * Uncovers all mines on the board
		 *
		 * @return void
		 * @access public
		 */
		this.uncoverAllMines = function() {
			for (var y = 0; y < self.settings.areaY; y++) {
				for (var x = 0; x < self.settings.areaX; x++) {
					if ((self.gameCell[y][x].isFlagged) && (!self.gameCell[y][x].isMine)) {
						self.gameCell[y][x].el.className = 'unit_uncover_misflagged';
					} else if ((!self.gameCell[y][x].isFlagged) && (self.gameCell[y][x].isMine) && (self.gameCell[y][x].isCovered)) {
						self.gameCell[y][x].el.className = 'unit_uncover_show_mine';
					}
				}
			}
		}


		/**
		 * Checks if all cells are uncovered to win the game
		 *
		 * @param int posY
		 * @param int posX
		 * @return array
		 * @access public
		 */
		this.checkIfWon = function() {
			if (self.game.isPlaying) {
				if ((self.settings.areaY * self.settings.areaX - self.settings.mineNumber - self.game.cellsUncovered) == 0) {
					self.winGame();
				}
			}
		}


	} // end Board()
/*********************************************************************************************************************/










	/**
	 * @Cookies()
	 * This module is in charge of cookies.
	 *
	 * @return void
	 * @access public
	 */
	function Cookies(name, duration, path, domain, secure) {
		this.affix = "";

		if (duration) {   	  
			var date = new Date();
			var curTime = new Date().getTime();
			date.setTime(curTime + (1000 * 60 * duration));
			this.affix = '; expires=' + date.toGMTString();
		}

		if (path) {
			this.affix += '; path=' + path;
		}

		if (domain) {
			this.affix += '; domain=' + domain;
		}

		if (secure) {
			this.affix += '; secure=' + secure;
		}


		/**
		 * Matches the cookie
		 *
		 * @return void
		 * @access public
		 */
		this.getValue = function() {
			var m = document.cookie.match(new RegExp('(' + name + '=[^;]*)(;|$)'));
			return m ? m[1] : null;   
		}


		/**
		 * Checks if cookie exists
		 *
		 * @return boolean
		 * @access public
		 */
		this.cookieExists = function() {
			return this.getValue() ? true : false;
		}


		/**
		 * Cookie expiration date
		 *
		 * @return void
		 * @access public
		 */
		this.expire = function() {
			var date = new Date();
			date.setFullYear(date.getYear() - 1);
			document.cookie=name + '=noop; expires=' + date.toGMTString(); 
		}


		/**
		 * Stores a cookie value
		 *
		 * @param str key
		 * @param str value
		 * @return void
		 * @access public
		 */
		this.set = function(key, value) {
			var ck = this.getValue();
			if (/[;, ]/.test(value)) {
				value = window.encodeURI ? encodeURI(value) : escape(value);
			}
			if (value != null) {
				var attrPair = '@' + key + value;
				if (ck) {
					if (new RegExp('@' + key).test(ck)) {
						document.cookie = ck.replace(new RegExp('@' + key + '[^@;]*'), attrPair) + this.affix;
					} else {
						document.cookie = ck.replace(new RegExp('(' + name + '=[^;]*)(;|$)'), '$1' + attrPair) + this.affix;
					}
				} else {
					document.cookie = name + '=' + attrPair + this.affix;
				}
			} else {
				if (new RegExp('@' + key).test(ck)) {
					document.cookie = ck.replace(new RegExp('@' + key + '[^@;]*'), '') + this.affix;
				}
			}
		}


		/**
		 * Retrieves a cookie value
		 *
		 * @param str key
		 * @return void
		 * @access public
		 */
		this.get = function(key) {
			var ck = this.getValue();
			if (ck != null) {
				var m = ck.match(new RegExp('@' + key + '([^@;]*)'));
				if (m) {
					var value = m[1];
					if (value) { 
						return window.decodeURI ? decodeURI(value) : unescape(value);
					}
				}
			}
		}
	} // @Cookies()
/*********************************************************************************************************************/










	/**
	 * @Highscores()
	 * This module is in charge of high scores.
	 *
	 * @return void
	 * @access public
	 */
	function Highscores() {

		this.cookies = new Cookies(self.project.name + self.project.version + '_highscores', 365);	// Cookies module

		this.level = {
			'beginner': {
				'name':		'Anonymous',
				'score':	self.settings.rules.maxTimeCounter
			},
			'intermediate': {
				'name':		'Anonymous',
				'score':	self.settings.rules.maxTimeCounter
			},
			'expert': {
				'name':		'Anonymous',
				'score':	self.settings.rules.maxTimeCounter
			}
		}


		/**
		 * Loads highscores from cookies
		 *
		 * @return void
		 * @access public event
		 */
		this.load = function() {
			var beginner_name = this.cookies.get('beginner_name');
			var beginner_score = this.cookies.get('beginner_score');
			var intermediate_name = this.cookies.get('intermediate_name');
			var intermediate_score = this.cookies.get('intermediate_score');
			var expert_name = this.cookies.get('expert_name');
			var expert_score = this.cookies.get('expert_score');
			this.level.beginner.name = (beginner_name != null)? beginner_name : this.level.beginner.name;
			this.level.beginner.score = (beginner_score != null)? beginner_score : this.level.beginner.score;
			this.level.intermediate.name = (intermediate_name != null)? intermediate_name : this.level.beginner.name;
			this.level.intermediate.score = (intermediate_score != null)? intermediate_score : this.level.beginner.score;
			this.level.expert.name = (expert_name != null)? expert_name : this.level.beginner.name;
			this.level.expert.score = (expert_score != null)? expert_score : this.level.beginner.score;
		}


		/**
		 * Saves highscores to cookies
		 *
		 * @return void
		 * @access public event
		 */
		this.save = function() {
			this.cookies.set('beginner_name', this.level.beginner.name);
			this.cookies.set('beginner_score', this.level.beginner.score);
			this.cookies.set('intermediate_name', this.level.intermediate.name);
			this.cookies.set('intermediate_score', this.level.intermediate.score);
			this.cookies.set('expert_name', this.level.expert.name);
			this.cookies.set('expert_score', this.level.expert.score);
		}


		/**
		 * Resets highscores
		 *
		 * @return void
		 * @access public event
		 */
		this.reset = function() {
			this.level.beginner.name = 'Anonymous';
			this.level.beginner.score = self.settings.rules.maxTimeCounter;
			this.level.intermediate.name = 'Anonymous';
			this.level.intermediate.score = self.settings.rules.maxTimeCounter;
			this.level.expert.name = 'Anonymous';
			this.level.expert.score = self.settings.rules.maxTimeCounter;
			this.save();
		}


		/**
		 * Checks if winner has highest score
		 *
		 * @return void
		 * @access public event
		 */
		this.check = function() {
			if (self.game.isWinner) {
				oc_apps2_getUGAL( G_oc.id, G_oc.author, G_oc.lvl, function ( r ) {
									var myDate = new Date();
									if ( r.won === undefined )	r.won = 0;
									++r.won;
									r.lastDate = myDate - 0;
									oc_apps2_topN(r, self.timer.time, true);
									if ( r.topN[0][1] == self.timer.time ) {
										msgbox(	 G_oc.caption
											,'<p class="center bold">Congratulations!<p class="center">'+self.timer.time+' is your best score for the '+G_oc.levels[G_oc.lvl]+' level!'
											,260
											,{} );
									}
									oc_apps2_putUGAL( G_oc.id, G_oc.author, G_oc.lvl, r );
								}
						);
			}
		}


		/**
		 * Opens window with highscores
		 *
		 * @return void
		 * @access public event
		 */
		this.show = function() {
			clearInterval(self.action);
			msgbox(	 G_oc.caption
				,'<p>Fastest Mine Sweepers<table>'+
				'<tr><td>Beginner<td class="right">'+self.highscores.level.beginner.score+
				'<tr><td>Normal<td class="right">'+self.highscores.level.intermediate.score+
				'<tr><td>Expert<td class="right">'+self.highscores.level.expert.score+
				'</tr></table>'+
				'<p class="right">Click the Reset button to reset these scores.'
				,260
				,[	{
					c:'Reset',fn:function () {
							self.highscores.reset();
						}
					},{
					c:'OK',dflt:true
					}
				]
			);
//			window.showModalDialog("JsMinesweeper_dialog_highscores.html",self,"dialogHeight: 150px; dialogWidth: 260px; center: Yes; help: No; resizable: No; status: No;");
		}


	}
/*********************************************************************************************************************/

  if ( window.addEventListener ) { 
     window.addEventListener('load', self.init, false );
  }
  else 
     if ( window.attachEvent ) { 
        window.attachEvent('onload', self.init );
  } else 
        if ( window.onLoad ) {
           window.onload = self.init;
  }
} // @Minesweeper()

var minesweeper = new JsMinesweeper();