

ArcherSysOS.Notidar  = {};
ArcherSysOS.Notidar.Notidex = new Array();
ArcherSysOS.Notidar.pushOnlineNotification = function(){
ArcherSysOS.Notidar.Notidex.push(new Notification("Online!",{icon: "http://localhost:80/core/media/img/notidar.ico",body: "You're now connected! Enjoy your stay in wifi paradise now before you do anything else"}));
};
ArcherSysOS.Notidar.pushOfflineNotification = function(){
 ArcherSysOS.Notidar.Notidex.push(new Notification("Offline!",{icon: "/core/media/img/notidar.ico", body: "You're disconnected - officially. "}));
};
ArcherSysOS.Notidar.pushNotification = function(title,body){
ArcherSysOS.Notidar.Notidex.push(new Notification(title,{icon:'/core/media/img/notidar.ico',body: body}));
};