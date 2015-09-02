<script src="/core/js/jquery.js"></script>
<script>function setTime(ts) {
  var date = new Date(ts);
  $('.time').text(date.toLocaleString(navigator.language, {
    hour: '2-digit',
    minute: '2-digit'
  })).attr('datetime', date.getHours() + ':' + date.getMinutes());
  $('.date').text(date.toLocaleString(navigator.language, {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  })).attr('datetime', date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate());
  setTimeout(function () {
    setTime(Date.now());
  }, 1000);
}
$(function(){
setTime(Date.now());

$('.screensaver').on('click', function () {
  $(this).fadeOut(500);
});

$('#menu').hide();

$('#header-menu').on('click', function () {
  $('#menu').fadeIn(500);
});

$('.menu-item').on('click', function () {
  $('#menu').fadeOut(500);
});

function Window(settings) {

  // ATTRIBUTES

  this.id = Date.now();
  this.top = settings.top || 50;
  this.left = settings.left || 20;
  this.title = settings.title || 'New Window';
  this.close = settings.close !== undefined ? settings.close : true;
  this.draggable = settings.draggable !== undefined ? settings.draggable : true;
  this.content = settings.content || null;

  // METHODS

  this.setContent = function (content) {
    this.content = content || null;
    var $content = $('#' + this.id).find('.content');
    if (this.content) {
      this.content.forEach(function (item, index, array) {
        var fileitem = '' +
          '<div class="file-item">' +
            '<div class="icon ' + (item.type || '') + '"><i class="fa fa-4x fa-' + (item.icon || 'question') + '"></i></div>' +
            '<div class="label">' + (item.text || 'unknown') + '</div>' +
          '</div>';
        $content.append(fileitem);
      });
    }
  };

  // CONSTRUCTOR

  var html = '' +
    '<div id="' + this.id + '" class="window" style="top: ' + this.top + 'px; left: ' + this.left + 'px">' +
      '<div class="header">' +
        '<h1>' + this.title + '</h1>' +
        (this.close ? '<div class="close"><i class="fa fa-times"></i></div>' : '') +
      '</div>' +
      '<div class="content"></div>' +
    '</div>';

  $('main').append(html);
  this.setContent(this.content);
  
  var windowID = this.id;
  $('#' + this.id).find('.close').on('click', function () {
    $('#' + windowID).fadeOut(200, function () {
      $('#' + windowID).remove();
    });
  });

  if (this.draggable) {
    $('#' + this.id).draggable({
      handle: '.header'
    });
  }
}

var w = new Window({
  top: 50,
  left: 20,
  title: 'Home',
  close: true,
  draggable: true,
  content: [
    { type: 'folder', icon: 'file', text: 'Documents' },
    { type: 'folder', icon: 'music', text: 'Music' },
    { type: 'folder', icon: 'camera', text: 'Pictures' },
    { type: 'folder', icon: 'video-camera', text: 'Videos' }
  ]
});

var w = new Window({
  top: 300,
  left: 250,
  title: 'Project Pillow',
  close: true,
  draggable: true,
  content: [
    { type: 'file', icon: 'file-pdf-o', text: 'specs.pdf' },
    { type: 'file', icon: 'file-excel-o', text: 'plan.xls' },
    { type: 'file', icon: 'file-archive-o', text: 'stuff.zip' },
    { type: 'file', icon: 'file-code-o', text: 'project.js' }
  ]
});
});
</script><style>
    @import url(http://fonts.googleapis.com/css?family=Raleway:300,400);
@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css);
*, *:after, *:before {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html, body {
  width: 100%;
  height: 100%;
  background: #333;
  overflow: hidden;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-text-size-adjust: auto;
  -moz-text-size-adjust: 100%;
  text-rendering: optimizelegibility;
  color: whitesmoke;
  font: 400 normal 16px/20px 'Raleway', 'Quicksand', 'Open Sans', 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', 'Helvetica', 'Arial', 'Lucida Grande', sans-serif;
}

header {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 300;
  width: 100%;
  height: 30px;
  line-height: 30px;
  box-shadow: 0 0 15px 2px rgba(0, 0, 0, 0.1);
  color: whitesmoke;
  background: rgba(255, 255, 255, 0.3);
}
header > * {
  margin: 0 0.5rem;
}
header > span {
  display: inline-block;
  cursor: pointer;
}
header > span:hover {
  color: gold;
}

#menu {
  display: block;
  position: fixed;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  min-width: 280px;
  width: 70%;
  min-height: 300px;
  height: 70%;
  background: rgba(255, 255, 255, 0.3);
  overflow: hidden;
  z-index: 300;
}
#menu .menu-item {
  display: inline-block;
  width: 64px;
  height: 64px;
  color: black;
  text-align: center;
  cursor: pointer;
  margin: 1rem;
  outline: 1px dotted red;
}
#menu .menu-content {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: calc(100% - 100px);
  overflow: auto;
  padding: 1rem;
}
#menu .menu-footer {
  display: block;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100px;
  background: rgba(255, 255, 255, 0.3);
  overflow: hidden;
  padding: 1rem;
  text-align: center;
}
#menu .menu-footer .menu-item {
  margin: 0 1rem;
}

main {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 100;
  width: 100%;
  height: 100%;
  padding: 30px 0 0 0;
  background: -webkit-linear-gradient(left bottom, #8e44ad, #3498db);
  background: linear-gradient(to right top, #8e44ad, #3498db);
}

.screensaver {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 400;
  width: 100%;
  height: 100%;
  background: -webkit-linear-gradient(#24C6DC 10%, #514A9D 90%) whitesmoke;
  background: linear-gradient(#24C6DC 10%, #514A9D 90%) whitesmoke;
  text-align: center;
  color: whitesmoke;
  font-weight: 300;
}
.screensaver > .content {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.screensaver > .content time {
  display: block;
  font-size: 1.5rem;
  line-height: 1.875rem;
}
.screensaver > .content time:first-of-type {
  font-size: 5rem;
  line-height: 6.25rem;
}
.screensaver > .unlock {
  position: absolute;
  top: 75%;
  left: 50%;
  -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
          transform: translateX(-50%);
  text-shadow: 0 0 5px whitesmoke;
  color: rgba(255, 255, 255, 0.5);
  -webkit-animation: flash 1500ms ease infinite alternate;
          animation: flash 1500ms ease infinite alternate;
}

@-webkit-keyframes flash {
  0% {
    opacity: 0;
  }
  75% {
    opacity: 1;
  }
}

@keyframes flash {
  0% {
    opacity: 0;
  }
  75% {
    opacity: 1;
  }
}
button {
  color: inherit;
  font: inherit;
  padding: 0.5rem;
  margin: 1rem 0 0 0;
  background: none;
  border: 1px solid rgba(255, 255, 255, 0.2);
  cursor: pointer;
}
button:hover {
  background: rgba(255, 255, 255, 0.1);
}
button:active {
  background: rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2) inset;
}

a {
  text-decoration: none;
  color: #666;
}

.window {
  position: absolute;
  z-index: 200;
  min-width: 200px;
  max-width: 100%;
  max-height: 100%;
  background: rgba(255, 255, 255, 0.3);
  box-shadow: 0 0 15px 2px rgba(0, 0, 0, 0.1);
  color: whitesmoke;
  font-size: 14px;
  resize: both;
  overflow: auto;
}
.window .header {
  position: absolute;
  width: 100%;
  padding: 0.5rem;
  cursor: move;
  background: rgba(255, 255, 255, 0.1);
}
.window .header h1 {
  text-align: center;
  font-size: 1.2rem;
  font-weight: 400;
}
.window .header > .close {
  position: absolute;
  right: 1rem;
  top: 0.5rem;
  cursor: pointer;
}
.window .sub-header {
  background: rgba(255, 255, 255, 0.1);
  padding: 0.5rem;
}
.window .content {
  padding: 2.5rem 0 0 0;
  overflow: auto;
}
.window .content .file-item {
  display: inline-block;
  position: relative;
  width: 100px;
  margin: 1rem;
  text-align: center;
  cursor: pointer;
  resize: none;
}
.window .content .file-item > .icon {
  display: block;
  position: relative;
  width: 100px;
  height: 100px;
  text-align: center;
}
.window .content .file-item > .icon:hover {
  background: rgba(255, 255, 255, 0.1);
}
.window .content .file-item > .icon:active {
  background: rgba(255, 255, 255, 0.2);
}
.window .content .file-item > .icon.folder {
  background: -webkit-linear-gradient(rgba(34, 201, 232, 0.5), rgba(20, 85, 219, 0.5));
  background: linear-gradient(rgba(34, 201, 232, 0.5), rgba(20, 85, 219, 0.5));
  border-radius: 0 0 4px 4px;
}
.window .content .file-item > .icon.folder:before {
  content: '';
  display: block;
  position: absolute;
  top: -3px;
  left: 3px;
  background: rgba(255, 255, 255, 0.5);
  width: 94px;
  height: 3px;
}
.window .content .file-item > .icon.folder > * {
  color: rgba(0, 0, 0, 0.1);
}
.window .content .file-item > .icon > * {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.window .content .file-item > .label {
  display: inline-block;
  color: whitesmoke;
  padding: 0.2rem 0.5rem;
  min-width: 5rem;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 50px;
  text-align: center;
  font-size: 0.63rem;
  margin: 0.3rem 0 0 0;
  overflow: hidden;
}

</style>
<script src="/core/js/archersysos.desktops.modo.js"></script>
<header><span id="header-menu">Menu</span><span id="header-settings">Settings</span>
  <time style="float: right" class="time">time</time>
  <time style="float: right" class="date">date</time>
</header>
<div id="menu">
  <div class="menu-content">
    <div class="menu-item"><i class="fa fa-cube"></i>
      <p>Item</p>
    </div>
    <div class="menu-item"><i class="fa fa-cube"></i>
      <p>Item</p>
    </div>
    <div class="menu-item"><i class="fa fa-cube"></i>
      <p>Item</p>
    </div>
    <div class="menu-item"><i class="fa fa-cube"></i>
      <p>Item</p>
    </div>
  </div>
  <div class="menu-footer">
    <div class="menu-item"><i class="fa fa-cube"></i>
      <p>Item</p>
    </div>
    <div class="menu-item"><i class="fa fa-cube"></i>
      <p>Item</p>
    </div>
    <div class="menu-item"><i class="fa fa-cube"></i>
      <p>Item</p>
    </div>
    <div class="menu-item"><i class="fa fa-cube"></i>
      <p>Item</p>
    </div>
  </div>
</div>
<main></main>
<div class="screensaver">
  <div class="content">
    <time class="time">time</time>
    <time class="date">date</time>
  </div>
  <div class="unlock">click to unlock</div>
</div>