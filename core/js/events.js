$(function(){
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
      $("span.number").text(Notidar.Notidex.length);

    status.html(condition);
    status.removeClass("offline");
    status.addClass(condition);
    Notidar.pushOnlineNotification();
    console.info("[CafeSync]: Internet Access Detected")
});
 $(window).bind('offline', function(){
       $("span.number").text(Notidar.Notidex.length);

   condition = "offline";
    status.html(condition);
    status.removeClass("online");
    status.addClass(condition);
    Notidar.pushOfflineNotification();
    console.info("[CafeSync]: Disconnected from the Internet.")
});
$(".asos-pdflint").click(function(){
  $("iframe").attr("src", "http://localhost/Producktiviti/PDFLint");
});
$(".asos-owncloud").click(function(){
  $("iframe").attr("src", "http://localhost/owncloud-serv");
});
});
});