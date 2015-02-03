
var Notidar  = {};
Notidar.Notidex = new Array();
Notidar.pushOnlineNotification = function(){
Notidar.Notidex.push(new Notification("Online!",{icon: "http://localhost:80/core/media/img/notidar.ico",body: "You're now connected! Enjoy your stay in wifi paradise now before you do anything else"}));
};
Notidar.pushOfflineNotification = function(){
 Notidar.Notidex.push(new Notification("Offline!",{icon: "/core/media/img/notidar.ico", body: "You're disconnected - officially. "}));
};
