console.info("Inititializing networking capabilities....");
ArcherSysOS.Networking = {

    isOnline: function(){
        return window.navigator.onLine;
    },
    onOnline: function(){
        $(".status").text("Online");
        $(".status").addClass("online");
    },
    
    initStatus: function(){
         var stat = "";
       if(window.navigator.onLine){
          stat = "Online";
           ArcherSysOS.$(".status").text(stat);
            ArcherSysOS.$(".status").addClass("online");
             }else {
           stat = "Offline";
      ArcherSysOS.$(".status").text(stat);
     ArcherSysOS.$(".status").addClass("offline");
       }
        
    },
    name: "Net"
};