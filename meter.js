 $(function(){
     if (window.navigator.battery) {
 
         $("#battery").progress({
             value: (window.navigator.battery.level) * 100
         });
     }
     else {
         window.navigator.getBattery().then(function(battery){
            $("#battery").progressbar({value: battery.level * 100});
            battery.onlevelchange = function(){
                console.info("[CafeSurge]: The battery level is now "+battery.level * 100 + "%");
                            $("#battery").progressbar({value: battery.level * 100});

            }
         });
     
        }
        });