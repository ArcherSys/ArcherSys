<?php
namespace ArcherSys\Wallpaper;
require_once 'DataManager.php';
require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
use ArcherSys\Data\DataManager;
DataManager::ConnectFull($config, "acoserver_acoserver");
class WallpaperManager{
	static function GetWallpaper($wallpaperid){
		$wallpaper = DataManager::QueryRegistry("SELECT url FROM login_wallpapers WHERE id IN ( SELECT wallpaper_id FROM login_wallpapers WHERE wallpaper_id = ${wallpaperid});");
		$wallpaper_result = null;
		while($wp = mysql_fetch_assoc($wallpaper)){
			if ($wp["id"] = $wallpaperid){
				$wallpaper_result = $wp["url"];
				break;
			}
			
		}
		return $wallpaper_result;
	}
}