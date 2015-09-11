$(function(){
    

<<<<<<< HEAD
     window.navigator.getBattery().then(function(battery){
=======
        window.navigator.getBattery().then(function(battery){
>>>>>>> 8397be993f712a69fd140c9d50efe65c53a23815
         
            $("#battery").progressbar({value:battery.level * 100});
            battery.onlevelchange = function(){
              $("#battery").progressbar({value:battery.level * 100});

            };
        });
});