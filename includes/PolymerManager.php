<?php
namespace ArcherSys\Polymer;
require_once 'ViewManager.php';
use ArcherSys\Viewer\ViewManager;
class PolymerJSAssetManager extends ViewManager{
	/**
	 * The Official ViewManager of ArcherSys OS Polymer Applications
	 * 
	 */
	const POLYMERWEBCOMPONENTSJS = "/core/components/webcomponentsjs/webcomponents.js";
	const POLYMERROOT = "/core/components/";
	static function getWebComponentsJS(){
		/**
		 * Returns the path to the Polymer Webcomponents JS Folder
		 */
		return POLYMERWEBCOMPONENTSJS;
	}
	static function initializePolymer(){
		/**
		 * Adds the Web Component Script to the Application View
		 */
		echo "<script src=\"".getWebComponentsJS()."\"></script>";
	    PolymerJSAssetManager::importPolymerModule("polymer","polymer");
	}
	static function importPolymerModule($module,$element){
		/**
		 * Imports a Polymer Component
		 * @param $module - string The Folder for the Components
		 */
		echo "<link rel='import' href='".POLYMERROOT."/".$module."/".$element."'>";
	}
	static function addCoreHeaderPanels(){
		PolymerJSAssetManager::importPolymerModule("core-header-panel", "core-header-panel");
	}
	
}