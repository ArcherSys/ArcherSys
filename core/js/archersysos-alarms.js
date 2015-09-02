ArcherSysOS.Alarms = {};
ArcherSysOS.Alarms.Alarmsdb = ArcherSysOS.ArcherVMDB.createDatabase("ArcherSysOS.Alarms",1);
ArcherSysOS.Alarms.Alarmsdb.onerror = function(event) {  console.err("[ArcherSysOS]: Error ASOS-0005: ArcherVMDB Has Crashed."); };
ArcherSysOS.Alarms.Alarmsdb.onsuccess = function(){
    
   
        console.log("[ArcherSysOS]: Success!");
        ArcherSysOS.Alarms.AlarmData = event.target.result;
        ArcherSysOS.Alarms.AlarmData.onerror = function(event) {
    ArcherSysOS.Notidar.pushNotification("ArcherSysOS"," Error ASOS-0005: ArcherVMDB Has Crashed.");
 console.err("[ArcherSysOS]: Error ASOS-0005: ArcherVMDB Has Crashed.");
};

};

window.setInterval(function(){
   console.log(window.document.forms.alarms.elements.time.value);

},1000);
ArcherSysOS.$(function(){
    ArcherSysOS.$("#alarmsetter").click(function () {
        localStorage.setItem("time", window.document.forms.alarms.elements.time.value);
        var AlarmD = Date.parse(localStorage.getItem("time"));
        window.setInterval(
            function () {
                
                var isNow = (Date.parse(localStorage.getItem("time")) == Date.now());
                if (isNow) {
                    ArcherSysOS.Notidar.pushNotification("Wake UP!", AlarmD.toString());
                    ArcherSysOS.$("<audio src='entertainment/gheddobox/2016_Symfony.mp3'></audio>");
                }
            }, 1000);
    });
});