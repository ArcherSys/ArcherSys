$(function(){
    

        window.navigator.getBattery().then(function(battery){
         
            $("#battery").progressbar({value:battery.level * 100});
            battery.onlevelchange = function(){
              $("#battery").progressbar({value:battery.level * 100});

            };
        });
});