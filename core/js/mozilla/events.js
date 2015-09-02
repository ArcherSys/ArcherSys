define(["js/jquery","js/notidar"],function($,Notidar){
$(document).ready(function() {
  window.Notification.requestPermission(function(status){
  var status = $("#status");

    var condition = (window.navigator.onLine) ? "online" : "offline";
     if(condition === "online"){
       status.removeClass("offline");
      
     }else if(condition === "online"){
       status.removeClass("online");
     }
     status.addClass(condition);
    status.html(condition.toUpperCase());


 $(window).bind('online', function(){
    condition = "online";
    status.html(condition);
    status.removeClass("offline");
    status.addClass(condition);
    Notidar.pushOnlineNotification();
    window.setTimeout(function(){

},5000);
});
 $(window).bind('offline', function(){
   condition = "offline";
    status.html(condition);
    status.removeClass("online");
    status.addClass(condition);
    Notidar.pushOfflineNotification();
});
$(".asos-pdflint").click(function(){
  $("iframe").attr("src", "http://localhost/Producktiviti/PDFLint");
});
$(".asos-owncloud").click(function(){
  $("iframe").attr("src", "http://localhost/owncloud-serv");
});
});
});
});