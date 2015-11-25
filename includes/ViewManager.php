<?php
namespace ArcherSys\Viewer;
class ViewManager{
<<<<<<< HEAD
=======
static  function displayLoginInfo($info){
         echo "<div class=\"header\">";
		echo "<h1>Start</h1>";
                

		echo " <div class=\"profile\">";
				echo"	<p class=\"name\">".$_COOKIE['ScreenName_ARCHERVMCASHEW']."</p>";

				echo "<div class='photo'><img src='".$_COOKIE["ProfilePicture_ARCHERVMCASHEW"]."'/></div>";
					echo "<p class=\"status\">Hello :)</p>";
					

					echo "<p class=\"status\">Hello :)</p>";


					echo "<p class=\"status\">Hello :)</p>";

				echo"</div>";
echo "</div>";
}
>>>>>>> 5e7b2c757565054acf1b6acdbff6480e574a8d68
    static function addMSAppConfig(){
        include "/includes/viewssi/msappconfig.php";
    }
    static function addAppleAppConfig(){
      include "/includes/viewssi/appleappconfig.php";
    }
    static function addGame($link,$name){
      echo " <div class=\"module red single img birds\">
<a href=\"$link\"><p class=\"title\">$name</p></a>
					</div>";
    }
    static function setupFavicons(){
      include "/includes/viewssi/faviconconfig.php";
    }
    static function addNg(){
      echo "<script src='/core/js/angularjs/angular.min.js'></script>";
    }
    static function addReCAPTCHA(){
        echo '<div class="g-recaptcha" data-sitekey="6Le2XAMTAAAAAAikuUTjtmxheTdJxn0cebzQ2MQI"></div>';
    }
    
    static function addProductForum($forum){
      switch($forum):
        case "main":
          echo '<iframe id="forum_embed" src=https://groups.google.com/forum/embed/?place=forum/archersys-os-forum&showsearch=true&showpopout=true&showtabs=false" scrolling="no" frameborder="0" width="900" height="700"></iframe>';
        break;
    endswitch;
    }
  
  

    
    static function addHeaderPanels(){
      echo '<link rel="import" href="/settings/components/core-header-panel/core-header-panel.html">
';
}
static function addPolymer(){
  echo '<link rel="import" href="/settings/components/polymer/polymer.html">
';
}
static function addToolbar(){
  echo '<link rel="import" href="/settings/components/core-toolbar/core-toolbar.html">';
}
static function addCoreButtons(){
 echo '<link rel="import" href="/settings/components/core-icon-button/core-icon-button.html">';

    }
    static function addTabs(){
      echo '<link rel="import" href="/settings/components/paper-tabs/paper-tabs.html">';
        echo '<link rel="import" href="/settings/components/paper-tabs/paper-tab.html">';
    }
    static function setTitle($title){
      echo "<title>".$title."</title>";
    }
}
class BootstrapViewManager extends ViewManager{

static function addXwordSearch(){
?>
	<form class="navbar-form navbar-left" action="<?php echo $_SERVER["PHP_SELF"]; ?>" role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search">
</div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
}
}
?>
