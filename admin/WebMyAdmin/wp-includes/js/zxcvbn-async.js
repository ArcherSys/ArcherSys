<<<<<<< HEAD
/* global _zxcvbnSettings */
(function() {
  var async_load = function() {
    var first, s;
    s = document.createElement('script');
    s.src = _zxcvbnSettings.src;
    s.type = 'text/javascript';
    s.async = true;
    first = document.getElementsByTagName('script')[0];
    return first.parentNode.insertBefore(s, first);
  };

  if (window.attachEvent != null) {
    window.attachEvent('onload', async_load);
  } else {
    window.addEventListener('load', async_load, false);
  }
}).call(this);
=======
/* global _zxcvbnSettings */
(function() {
  var async_load = function() {
    var first, s;
    s = document.createElement('script');
    s.src = _zxcvbnSettings.src;
    s.type = 'text/javascript';
    s.async = true;
    first = document.getElementsByTagName('script')[0];
    return first.parentNode.insertBefore(s, first);
  };

  if (window.attachEvent != null) {
    window.attachEvent('onload', async_load);
  } else {
    window.addEventListener('load', async_load, false);
  }
}).call(this);
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
