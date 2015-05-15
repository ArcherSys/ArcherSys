<?php
 namespace ArcherSys\Viewer\UI\Facebook;
 require_once "AbstractComponent.php";
 use ArcherSys\Viewer\AbstractComponent;
 class FacebookLikeButton{
 	public $href;
 	public $width;
 	public $layout;
 	public $action;
 	public $show_faces;
 	public $share;
 	static function addFacebookSDK(){
 		echo '<div id="fb-root"></div><script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3\";fjs.parentNode.insertBefore(js, fjs);}(document, "script", "facebook-jssdk"));</script>';
 	}
 	function __construct($href,$width,$layout,$action,$show_faces,$share){
 		$this->action = $action;
 		$this->href = $href;
 		$this->width = width;
 		$this->show_faces = show_faces;
 		$this->share = share;
 		$this->layout = $layout;
 	}
 	function __call(){
 		
 		echo "<div class=\"fb-like\" data-href=\"".$this->href."\" data-width=\"".$this->width."\" data-layout=\"".$this->layout."\" data-action=\"".$this->action."\" data-show-faces=\"".$this->show_faces."\" data-share=\"".$this->share."\></div>";
 	}
 }