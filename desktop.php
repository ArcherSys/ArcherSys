



<?php

 
$conn = ftp_connect("localhost");
ftp_login($conn,"root","");


  require_once $_SERVER["DOCUMENT_ROOT"]."/config.php";
  require_once $_SERVER["DOCUMENT_ROOT"]."/includes/component-functions.php";

 // Connects to your Database
@ini_set("max_execution_time", 300);
 mysql_connect($config["dbhost"], $config["dbuser"], $config["dbpass"]) or die(mysql_error());

 mysql_select_db("acoserver_acoserver") or die(mysql_error());

 
 //checks cookies to make sure they are logged in



 
if(isset($_COOKIE['ID_ARCHERVMCASHEW']))

 {

 	$username = $_COOKIE['ID_ARCHERVMCASHEW'];

 	$pass = $_COOKIE['Key_ARCHERVMCASHEW'];

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

 	while($info = mysql_fetch_array( $check ))

 		{

 

 //if the cookie has the wrong password, they are taken to the login page

 		if ($pass != $info['password'])

 			{ 			header("Location: login.php");

 			}

 

 //otherwise they are shown the admin area

 	else

 			{


  
?>
<!DOCTYPE HTML>
<html>
<head>
   <link rel="stylesheet" href="/core/css/desktop.css">
<script src="/core/js/jquery.js"></script>
<script src="/core/js/jquery-ui.js"></script>
<script src="/core/js/plugins/jquery.masonry.min.js"></script>
<script src="/core/js/plugins/jquery.jscrollpane.min.js"></script>
<script src="/core/js/archersysos.desktop.js">
<script src="https://togetherjs.com/togetherjs-min.js"></script>
</script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="desktop">
    <ul>
      <li class="desktop-icon"><span class="folder"></span><span class="folder-tab"></span><span class="folder-name">CodePen</span></li>
      <li class="desktop-icon"><span class="folder"></span><span class="folder-tab"></span><span class="folder-name">Portfolio</span></li>
      <li class="desktop-icon"><span class="folder"></span><span class="folder-tab"></span><span class="folder-name">Contact</span></li>
      <li class="desktop-icon"><span class="folder"></span><span class="folder-tab"></span><span class="folder-name">MyJamz</span></li>
      <li class="desktop-icon"><span class="folder"></span><span class="folder-tab"></span><span class="folder-name">Pics</span></li>
      <li class="desktop-icon"><span class="folder"></span><span class="folder-tab"></span><span class="folder-name">Junk</span></li>
    </ul>
  <div class="start-menu-fade"></div>
  <div class="start-menu">
    <div class="start-menu__list">
      <div class="media">
        <a class="user-info menu-toggle" href="#" data-menu="user">
          <img class="user-info__img media__img" src="http://i.imgur.com/KkCqvK9.png" alt="User image">
          <div class="user-info__name media__body">
           <?php echo $_COOKIE["ScreenName_ARCHERVMCASHEW"]; ?>
          </div>
        </a>
        <div class="menu" data-menu="user">
          <a href="#">Change account picture</a>
          <a href="#">Lock</a>
          <a href="#">Sign out</a>
        </div>
        <a class="user-info__power menu-toggle" href="#" data-menu="power">
          <i class="fa fa-power-off"></i>

        </a>
      </div>

      <div class="menu" data-menu="power">
        <a href="#">Sleep</a>
        <a href="#">Power off</a>
        <a href="#">Restart</a>
      </div>


      <ul class="start-menu__recent">
        <li class="start-menu__explorer">
          <a href="#" data-window="explorer">
            <i class="fa fa-folder"></i> File Explorer
          </a>
        </li>
        <li class="start-menu__mail">
          <a href="#" data-window="mail">
            <i class="fa fa-envelope"></i> Mail
          </a>
        </li>
        <li class="start-menu__notepad">
          <a href="#" data-window="notepad">
            <i class="fa fa-pencil"></i>
            Notepad
          </a>
        </li>
        <li class="start-menu__explorer">
          <a href="#">
            <i class="fa fa-folder"></i>
            File Explorer
          </a>
        </li>
        <li class="start-menu__mail">
          <a href="#">
            <i class="fa fa-envelope"></i>
            Mail
          </a>
        </li>
        <li class="start-menu__notepad">
          <a href="#">
            <i class="fa fa-pencil"></i>
            Notepad
          </a>
        </li>
      </ul>
      
      <a class="all-apps" href="#">
        All apps
        <i class="fa fa-arrow-right"></i>
      </a>
      <form class="search">
      <input type="text" class="search__input" placeholder="Ask me anything">
      <button class="search__btn">
        </button>
      </form>
    </div>
    <div class="start-screen-scroll">
    <div class="start-screen">
      <a class="start-screen__tile start-screen__tile--explorer masonry-item" href="#" data-window="explorer">
        <i class="fa fa-folder"></i>
        <span>File Explorer</span>
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--wide masonry-item" href="#"  data-ss-colspan="2">
      </a>
      <div class="start-screen__smallgroup masonry-item">
      <a class="start-screen__tile start-screen__tile--small" href="#"></a>
        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
      </div>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--notepad masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--large start-screen__tile--mail masonry-item" href="#" data-ss-colspan="2">
        <i class="fa fa-envelope"></i>
        <span>Mail</span>
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
    </div>
    </div>
  </div>
  
  <div class="taskbar">
    <a class="taskbar__item taskbar__item--start" href="#" data-window="start">
      <i class="fa fa-windows"></i>
    </a>
    <a class="taskbar__item taskbar__item--explorer" href="#" data-window="explorer">
      <i class="fa fa-folder"></i>
    </a>
    <a class="taskbar__item taskbar__item--mail" href="#" data-window="mail">
      <i class="fa fa-envelope"></i>
    </a>
    <a class="taskbar__item taskbar__item--notepad" href="#" data-window="notepad">
      <i class="fa fa-pencil"></i>
    </a>
    <a class="taskbar__item taskbar__item--cplive" href="#" data-window="cplive">
        <i class="fa fa-gamepad"></i>
    </a>
    
    <a class="taskbar__item taskbar__item--pdfl" href="#" data-window="pdfl">
        <i class="fa fa-edit"></i>
    </a>
    
    
    <div class="taskbar__tray">
      <span class="time">
        <script>
          
         </script>
      </span>
    </div>
  </div>
  
  <div class="window window--cplive window--minimized" data-window="cplive" width:670px;height:400px;top:5%;left:10%;>
      <div class="window__titlebar">
          
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-gamepad"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      <span class="window__title">
          Capital Pursuit Live
      </span>
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
      
      
      </div>
      <ul class="window__menu">
          <li>
              <a href="#">
                  <i class="menu_icon fa fa-gamepad"></i>
                  Open Games
              </a>
          </li>
      </ul>
      <div class="window__body">
          <div class="window__main">Welcome To CPLive</div>
      </div>
  </div>
  <div class="window window--explorer window--minimized" data-window="explorer" style="width:670px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        File Explorer
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
      </div>
    
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__actions">
      <a class="window__back" href="#">
        <i class="fa fa-arrow-left"></i>
      </a>
      <a class="window__forward" href="#">
        <i class="fa fa-arrow-right"></i>
      </a>
      <div class="window__path">
        <a href="#">
        <i class="fa fa-desktop"></i>
        Desktop
        </a>
      </div>
      <form class="search">
        <input type="text" class="search__input" placeholder="Search files and folders">
        <button class="search__btn">
        </button>
      </form>
    </div>
    
    <div class="window__body">
      
      <div class="window__side">
        
        <ul class="side__list">
          <li><a href="#">Home</a></li>
          <li>
            <a href="#">Favorites</a>
            <ul>
              <li><a href="#">Desktop</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Recent Places</a></li>
          </ul>
        </li>
          <li>
            <a href="#">This Device</a>
            <ul style="display:none">
              <li><a href="#">Desktop</a>
                <ul style="display:none">
                  <li>
                    <a href="#">Folder 1</a>
                  </li>
                </ul>
              </li>
              <li><a href="#">Documents</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Local Disk  (C:)</a></li>
        </ul>
      </div>
      
      <div class="window__main">
        <div class="folders">
            <?php foreach(ftp_nlist($conn,".") as $item){
                echo "<a href='${item}'>";
                if(is_dir($item)){
                    ?>
                
         
            <i class="fa fa-folder"></i>
           
        
         <?php
                }else{
                    
                ?>
            <i class="fa fa-file"></i>
           
         
          <?php
                }
                ?>
                 <span><?php echo $item; ?></span>
                 </a>
                 <?php
            }
                ?>
        </div>
      </div>
    </div>
    
  </div>
    
     <div class="window window--mail" data-window="mail" style="display:none;width:400px;height:300px;top:40%;left:40%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-envelope"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        Mail
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__body">
      <div class="window__side">
        
      </div>
      <div class="window__main">
        
      </div>
    </div>
    
  </div>
    <div class="window window--pdfl" data-window="pdfl" style="display:none;width:600px;height:300px;top:10%;left:30%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-pencil"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
         PDFLint
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        
        <li>
          <a href="#">
            <i class="menu__icon fa fa-folder-open"></i>
            Open
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-print"></i>
            Print
          </a>
        </li>
      <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
      
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-file"></i>
            Format
          </a>
      </li>
      <li>
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
        </a>
      </li>
   </ul>
    
    <div class="window__body">
      <div class="window__main">
        <iframe width="100%" height="800" src="/Producktiviti/PDFLint/"></iframe>
      </div>
    </div>
    
  </div>
    
 <div class="window window--notepad" data-window="notepad" style="display:none;width:600px;height:300px;top:10%;left:30%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-pencil"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        Notepad
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#" id="note-save">
            <i class="menu__icon fa fa-download"></i>
            Save
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-folder-open"></i>
            Open
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-print"></i>
            Print
          </a>
        </li>
      <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
      
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-file"></i>
            Format
          </a>
      </li>
      <li>
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
        </a>
      </li>
   </ul>
    
    <div class="window__body">
      <div class="window__main">
        <textarea class="full-textarea"></textarea>
      </div>
    </div>
    
  </div>

    
    
</div>

  


</body>
</html>

<?php
  
 			}

 		}

 		}

else {
  
header("Location: http://localhost/login.php?redirect_uri=http://localhost".$_SERVER["PHP_SELF"]);

 }

  

		
		?>