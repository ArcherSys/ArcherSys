window.navigator.getUserMedia = window.navigator.getUserMedia ||
                         navigator.webkitGetUserMedia ||
                         navigator.mozGetUserMedia;

if (window.navigator.getUserMedia) {
   window.navigator.getUserMedia({ audio: true, video: { width: 1280, height: 720 } },
      function(stream) {
           var localMediaStream = true;
         var video = window.document.querySelector('video');
         video.src = window.URL.createObjectURL(stream);
         video.onloadedmetadata = function(e) {
           video.play();
         };
         
          var canvas = window.document.querySelector('canvas');
  var ctx = canvas.getContext('2d');
         var snapper = window.document.getElementById("snapper");
         snapper.addEventListener('click',function(){
              if (localMediaStream) {
                  ctx.drawImage(video, 0, 0);
                  // "image/webp" works in Chrome.
                  // Other browsers will fall back to image/png.
                  window.document.querySelector('img').src = canvas.toDataURL('image/webp');
              }
         },false)
      },
      function(err) {
         console.log("A0-0005: ArcherSysOSJS has crashed.");
      }
   );
} else {
   console.log("getUserMedia not supported");
}