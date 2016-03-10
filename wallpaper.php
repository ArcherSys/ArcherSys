<?php
require_once "includes/WallpaperManager.php";
use ArcherSys\Wallpaper\WallpaperManager;
if (isset($_POST["id"])){
    echo WallpaperManager::GetWallpaper($_POST["id"]);
        
    }
?>