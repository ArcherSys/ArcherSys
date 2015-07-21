/*/*
 * This is the ArcherSys OS Object Model.
 
*
 This deals with selectors and events
*/


var ArcherSys = new Object();
ArcherSys.jQ = $.noConflict(); 
ArcherSys.notifyOnline = function(e){
     alert("You are online!");
};

ArcherSys.liFi = localforage;
ArcherSys.liFi.config({
  name: "ArcherSys OS DB",
  description: "ArcherSys LocalStorage",
  version: "1.0"
});

ArcherSys.liFi.setDriver([localforage.WEBSQL,localforage.INDEXEDDB]);
ArcherSys.BeximalJS = BeximalJS;
ArcherSys.Menu = {

      toggleSM: function(){
        ArcherSys.jQ(".submenu").toggle();
     }
};
ArcherSys.asyncFi = window.asyncStorage;
ArcherSys.asyncFi._initStorage().then(function(){
   alert("AsyncStorage");
});
ArcherSys.asyncFi.setItem("connected", (window.navigator.onLine) ? true : false);
ArcherSys.workspace = ArcherSys.jQ("iframe.window");
ArcherSys.toggleBIRD = function(){
$("iframe").animate({
             width: "900px"
});
       TogetherJS(this);
  
};


ArcherSys.openMozVideo = function(){
$(".window").prepend();
$("<video height=\"180\" width=\"300\" id=\"PopCorn\" controls>"+
      "<source src=\"http://videos.mozilla.org/serv/webmademovies/popcornplug.mp4\">"+
     " <source src=\"http://videos.mozilla.org/serv/webmademovies/popcornplug.ogv\">" +
      "<source src=\"http://videos.mozilla.org/serv/webmademovies/popcornplug.webm\">"+
    "</video>").appendTo(".desktop");


};
ArcherSys.Notidar = Notidar;
ArcherSys.OSAuth = {};
ArcherSys.OSAuth.authenticate = function(){
   
       window.navigator.id.get();


};
ArcherSys.wifi = window.navigator.mozWifiManager || window.navigator.WifiManager;

ArcherSys.wifi.onconnectionInfoUpdate = function (event) {
  console.log('Update information for: ' + event.network.ssid);
  console.log('IP: ' + event.ipAddress);
  console.log('Speed: ' + event.linkSpeed.toFixed(2) + 'Mb/s');
  ArcherSys.Notidar.Notidex.push(new Notification('Signal strength update: ',{body: event.signalStrength.toFixed(2) + 'dBm (' + event.relSignalStrength.toFixed(0) + '%)'}));
}
