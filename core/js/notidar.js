<<<<<<< HEAD

ArcherSysOS.Notidar  = {};
ArcherSysOS.Notidar.Notidex = new Array();
ArcherSysOS.Notidar.pushOnlineNotification = function(){
ArcherSysOS.Notidar.Notidex.push(new Notification("Online!",{icon: "http://localhost:80/core/media/img/notidar.ico",body: "You're now connected! Enjoy your stay in wifi paradise now before you do anything else"}));
};
ArcherSysOS.Notidar.pushOfflineNotification = function(){
 ArcherSysOS.Notidar.Notidex.push(new Notification("Offline!",{icon: "/core/media/img/notidar.ico", body: "You're disconnected - officially. "}));
};
=======
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
>>>>>>> 8397be993f712a69fd140c9d50efe65c53a23815
