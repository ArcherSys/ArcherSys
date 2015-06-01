<?php
  namespace ArcherSys\Viewer;
  /*@package ArcherSysOS 
   * 
   * 
   * */
 class LogicManager {
    static function addJSModule($module){
    	echo '<script src="'.$module.'.js"></script>';
    }
 	static function addjQuery(){
 		echo '<script src="/core/js/jquery.js"></script>';
 	}
 	
   static function addReCAPTCHA(){
     echo "<script src='https://www.google.com/recaptcha/api.js?fallback=true'></script>";
 }
 static function addGPlus(){
   echo '<script type="text/javascript">(function() {
    var po = document.createElement(\'script\'); po.type = \'text/javascript\'; po.async = true; po.src = \'https://apis.google.com/js/platform.js\';var s = document.getElementsByTagName(\'script\')[0]; .parentNode.insertBefore(po, s);})();</script>';
 }
 static function addSearchCapabilities(){
   echo '<link title="ArcherSys OS" href="http://localhost/opensearch.xml"
 type="application/opensearchdescription+xml" rel="search">';
 }
  static function addTracking(){
    echo '<script type="text/javascript">var _paq = _paq || [];_paq.push(["trackPageView"]);_paq.push(["enableLinkTracking"]);(function() {var u=(("https:" == document.location.protocol) ? "https" : "http") + "://localhost/admin/piwik/";_paq.push(["setTrackerUrl", u+"piwik.php"]); _paq.push(["setSiteId", 1]); var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);})();</script><noscript><p><img src="http://localhost/admin/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>';
 }
 static function addPolymerWebComponentsScript(){
   echo '<script src="/settings/components/webcomponentsjs/webcomponents.js"></script>
';
 }
 static function addScrollbackIO(){
 	echo '<script>window.scrollback = {"room":"archersysos","titlebarColor":"#ff8040","form":"toast","minimize":true};(function(d,s,h,e){e=d.createElement(s);e.async=1;e.src=(location.protocol === "https:" ? "https:" : "http:") + "//scrollback.io/client.min.js";d.getElementsByTagName(s)[0].parentNode.appendChild(e);}(document,"script"));</script>';
 	
 }
 static function runStartScreen(){

 
  exec("start startscreen.py");
 }
 
 static function addPubNub(){
 	echo '<script src="http://cdn.pubnub.com/pubnub.min.js"></script>';
 }
}