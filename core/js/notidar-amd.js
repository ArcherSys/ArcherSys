
<<<<<<< HEAD

=======
<<<<<<< HEAD
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
ArcherSysOS.Notidar  = {};
ArcherSysOS.Notidar.Notidex = new Array();
ArcherSysOS.Notidar.pushOnlineNotification = function(){
ArcherSysOS.Notidar.Notidex.push(new Notification("Online!",{icon: "http://localhost:80/core/media/img/notidar.ico",body: "You're now connected! Enjoy your stay in wifi paradise now before you do anything else"}));
};
ArcherSysOS.Notidar.pushOfflineNotification = function(){
<<<<<<< HEAD
    ArcherSysOS.Notidar.Notidex.push(new Notification("Offline!", {
        icon: "/core/media/img/notidar.ico",
        body: "You're disconnected - officially. "
    }));
};
=======
 ArcherSysOS.Notidar.Notidex.push(new Notification("Offline!",{icon: "/core/media/img/notidar.ico", body: "You're disconnected - officially. "}));
=======
var Notidar  = {};
Notidar.Notidex = new Array();
Notidar.pushOnlineNotification = function(){
Notidar.Notidex.push(new Notification("Online!",{icon: "http://localhost:80/core/media/img/notidar.ico",body: "You're now connected! Enjoy your stay in wifi paradise now before you do anything else"}));
};
Notidar.pushOfflineNotification = function(){
 Notidar.Notidex.push(new Notification("Offline!",{icon: "/core/media/img/notidar.ico", body: "You're disconnected - officially. "}));
>>>>>>> 8397be993f712a69fd140c9d50efe65c53a23815
};
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
