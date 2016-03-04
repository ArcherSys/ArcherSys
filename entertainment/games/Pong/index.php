<?php
 require_once $_SERVER["DOCUMENT_ROOT"]."\includes\DriverManager.php";
 use ArcherSys\Drivers\DriverManager;
 
 ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Pong</title>
    <meta charset=utf-8>
    <?php
     DriverManager::loadDriver("three.min");
     ?>

    <style>
			body { margin: 0; }
			canvas { width: 100%; height: 100% }
		</style>

</head>
<body>
    <?php
      
    DriverManager::loadDriver("jquery.min");
 
    ?>
        <script>$(document).ready(function(){ var scene = new THREE.Scene();
			var camera = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );

			var renderer = new THREE.WebGLRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );
			$("body").append( renderer.domElement );

			var geometry = new THREE.BoxGeometry( 1, 1, 1 );
			var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
			var cube = new THREE.Mesh( geometry, material );
			scene.add( cube );

			camera.position.z = 5;
			cube.position.x = -3;

			var render = function () {
				requestAnimationFrame( render );

	
			
	
				renderer.render(scene, camera);
			};
			$(document).keypress(function(e){
if(event.which == 87){
   
	cube.position.y += 0.1;
 
}else if(event.which == 83){
    
   cube.position.y += -0.1;
   
}
			});
        	render();
        });
		
    </script>
</body>
</html>