NKdefine(function(){
var Notidar  = {};
var notidexl = 0;
Notidar.Notidex = [];
Notidar.pushOnlineNotification = function(){
Notidar.Notidex.push(new Notification("Online!",{icon: "http://localhost:80/core/media/img/notidar.ico",body: "You're now connected! Enjoy your stay in wifi paradise now before you do anything else"}));
notidexl+=1;
$(".number").text(Notidar.Notidex.length);
};
Notidar.pushOfflineNotification = function(){
 Notidar.Notidex.push(new Notification("Offline!",{icon: "/core/media/img/notidar.ico", body: "You're disconnected - officially. "}));
  $(".not").prepend();
                        $(".number").text(Notidar.Notidex.length);

            console.info("[CafeSync]: Disconnected from the Internet.");
};
return Notidar;
});