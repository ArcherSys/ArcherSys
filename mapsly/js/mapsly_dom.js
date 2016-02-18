var Mapsly = Mapsly || {};
Mapsly.detectBrowser = function() {
  var useragent = window.navigator.userAgent;
  var mapdiv = window.document.getElementById("map");

  if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
    mapdiv.style.width = '100%';
    mapdiv.style.height = '100%';
  } else {
    mapdiv.style.width = '600px';
    mapdiv.style.height = '800px';
  }
}