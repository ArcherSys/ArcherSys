$(function(){

  $("span.number").text(Notidar.Notidex.length);
  $("title").text("VM Home - "+localStorage.getItem("os-name"));
       
 
  var sliderUL = $('div.slider').children('ul'),
  	screens = sliderUL.find('li'),
		screenWidth = screens.width(),
		screenLength = screens.length,
		current = 1,
		totalScreenWidth = screenLength * screenWidth;
   $("#silverdrive-starter").click(function(){
      var sd = ActivityManager.SilverDriveActivity();
      sd.start();
   });
	var h1 = $('div.header').children('h1');

	$('#screen-nav').find('button').on('click', function() {
		var direction = $(this).data('dir'),
			loc = screenWidth;

		(direction === 'next') ? ++current : --current;

		if(current === 0) {
			current = screenLength;
			loc = totalScreenWidth - screenWidth;
			direction = 'next';
		} else if (current - 1 === screenLength) {
			current = 1;
			loc = 0;
		}
               		transition(sliderUL, loc, direction);

	});
     $(".header h1").click(function(){
           window.location.assign("http://localhost/settings");
           });
});
       
      
	function transition(container, loc, direction) {
		var unit;

		if(direction && loc !== 0) {
			unit = (direction === 'next') ? '-=' : '+=';
		}

		container.animate({

			'margin-left': unit ? (unit + loc) : loc
		});
       }
       
    window.Notification.requestPermission(function(status) {
        var istatus = $("#status");

        var condition = (window.navigator.onLine) ? "online" : "offline";
        if (condition === "online") {
            istatus.removeClass("offline");

        }
        else if (condition === "online") {
            istatus.removeClass("online");
        }

        $(window).bind('online', function() {
            condition = "online";
            $("span.number").text(Notidar.Notidex.length);
            Notidar.pushOnlineNotification();
            console.info("[CafeSync]: Internet Access Detected");
        });
        $(window).bind('offline', function() {
            $("span.number").text(Notidar.Notidex.length);

            Notidar.pushOfflineNotification();
            console.info("[CafeSync]: Disconnected from the Internet.");
        });

    });
    