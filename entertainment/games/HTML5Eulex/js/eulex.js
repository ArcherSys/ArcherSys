
 var Eulex = new Object();
$(function(){
 Eulex.gamespace = $("canvas")[0];
 Eulex.context = Eulex.gamespace.getContext("2d");
 Eulex.Sprites = new Object();
 Eulex.Sprites.tank = new Image();
Eulex.Sprites.tank_x = 0;
Eulex.Sprites.tank_y = 0;
Eulex.Sprites.tank.addEventListener("load", function() {
  Eulex.context.drawImage(this,Eulex.Sprites.tank_x,Eulex.Sprites.tank_y);
}, false);
 Eulex.Sprites.tank.src="media/img/tank.png";
 $(document).keypress(function(){
   if(event.which === 40){
     
        Eulex.Sprites.tank_x += 0;
         Eulex.Sprites.tank_y += 1;
 Eulex.context.drawImage(Eulex.Sprites.tank,Eulex.Sprites.tank_x,Eulex.Sprites.tank_y);
  }
});
 });
