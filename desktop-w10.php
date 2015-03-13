<!DOCTYPE HTML>
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>

<script src="/core/js/jquery.js"></script>

      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="/core/js/libs/jquery.min.js"></script>
<style>
  *, *:before, *:after {
  box-sizing: border-box;
}

body {
  overflow: hidden;
  font-family: 'Segoe UI', sans-serif;
}

a {
  text-decoration: none;
  cursor: default;
}

.media {
  display: flex;
}

.media__img,
.media__body {
  flex: 0 1 auto;
}

.media__body {
  padding-left: 10px;
}

.desktop {
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  transform: translate3d(0, 0, 0);
}

.desktop,
.window__titlebar:after {
  background-image: url(http://i.imgur.com/K7ZTvoQ.png);
  background-size: cover;
  background-position: 50%;
  background-attachment: fixed;
}

.window {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border-top: 0;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5), 0 1px 1px rgba(0, 0, 0, 0.1);
  filter: contrast(0.7) grayscale(0.5) brightness(1.3);
  transform: scale(0.995);
  transition: all 250ms, z-index 1ms;
  z-index: 0;
}
.window.ui-draggable-dragging, .window.ui-resizable-resizing {
  transition: none;
}

.window--minimized {
  top: 100% !important;
  left: 0 !important;
  transform: scale(0) translate(-100%, 0) !important;
  opacity: 0;
}

.window--active {
  filter: none;
  transform: none;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25), 0 0 1px rgba(0, 0, 0, 0.1);
  z-index: 1000;
}

.window--closing {
  transform: scale(0.9);
  opacity: 0;
}

.window--opening {
  transform: scale(1.25);
  opacity: 0;
}

.window--explorer .window__body {
  padding-top: 64px;
}

.window__titlebar {
  position: absolute;
  overflow: hidden;
  text-align: center;
  top: 0;
  left: 0;
  right: 0;
  height: 32px;
  cursor: default;
  background-color: #7bb6ef;
}
.window__titlebar:after {
  position: absolute;
  top: -10px;
  left: -10px;
  right: -10px;
  bottom: -10px;
  filter: grayscale(100%);
  opacity: 0.5;
}

.window__title {
  position: relative;
  line-height: 32px;
  z-index: 10;
  color: rgba(0, 0, 0, 0.75);
}

.window__controls {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 10;
}
.window__controls > a {
  display: block;
  float: left;
  height: 32px;
  width: 32px;
  line-height: 32px;
  font-size: 12px;
  transition: all 100ms;
  cursor: default;
  color: rgba(0, 0, 0, 0.5);
}
.window__controls > a:hover {
  background-color: rgba(255, 255, 255, 0.25);
}
.window__controls > .window__close {
  color: white;
  background-color: #398ada;
}
.window__controls > .window__close:hover {
  background-color: #e53935;
}

.window__controls--left {
  left: 0;
}

.window__controls--right {
  right: 0;
}

.window__maximize {
  position: relative;
}
.window__maximize > i {
  box-sizing: content-box;
  width: 6px;
  height: 6px;
  border-radius: 2px;
  border: 2px solid rgba(0, 0, 0, 0.6);
}
.window--maximized .window__maximize > i {
  margin-bottom: -1px;
  margin-left: -4px;
  width: 5px;
  height: 5px;
  transition: all 100ms 350ms;
}
.window--maximized .window__maximize > i:after {
  box-sizing: content-box;
  content: '';
  display: block;
  position: absolute;
  right: 10px;
  top: 10px;
  width: 6px;
  height: 6px;
  border: inherit;
  border-radius: inherit;
  border-left: 0;
  border-bottom: 0;
  transition: all 100ms 350ms;
}

.window__icon,
.window__icon:hover,
.window__menu {
  color: white !important;
}
.window--explorer .window__icon, .window--explorer
.window__icon:hover, .window--explorer
.window__menu {
  background-color: #0097A7;
}
.window--mail .window__icon, .window--mail
.window__icon:hover, .window--mail
.window__menu {
  background-color: #5C6BC0;
}
.window--notepad .window__icon, .window--notepad
.window__icon:hover, .window--notepad
.window__menu {
  background-color: #EC407A;
}

.window__menutoggle--open,
.window__menutoggle--open:hover {
  color: white !important;
  background-color: #5C6BC0;
}
.window--explorer .window__menutoggle--open, .window--explorer
.window__menutoggle--open:hover {
  background-color: #0097A7;
}
.window--mail .window__menutoggle--open, .window--mail
.window__menutoggle--open:hover {
  background-color: #5C6BC0;
}
.window--notepad .window__menutoggle--open, .window--notepad
.window__menutoggle--open:hover {
  background-color: #EC407A;
}

.window__menu {
  overflow: hidden;
  display: none;
  position: absolute;
  top: 31px;
  width: 25%;
  min-width: 200px;
  min-height: calc(100% - 31px);
  margin: 0;
  padding: 10px 0;
  color: white;
  background-color: #5C6BC0;
  z-index: 100;
}
.window--explorer .window__menu {
  background-color: #0097A7;
}
.window__menu > li {
  list-style: none;
  transform: translate(-50%, 0);
  transition: transform 500ms 100ms;
}
.window__menu > li > a {
  opacity: 0;
  position: relative;
  display: block;
  padding: 10px;
  padding-left: 45px;
  color: white;
  font-weight: 200;
  text-decoration: none;
  transition: all 100ms, opacity 750ms 150ms;
}
.window__menu > li > a:hover {
  background-color: rgba(255, 255, 255, 0.1);
}
.window__menu > li.divided > a {
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

.window__menu--open li {
  transform: none;
}
.window__menu--open li > a {
  opacity: 1;
}

.menu__icon.menu__icon {
  position: absolute;
  left: 20px;
  top: 50%;
  transform: translate(0, -50%);
  font-size: 16px;
}

.window__body {
  display: flex;
  padding-top: 32px;
  height: 100%;
  font-size: 14px;
}

.window__side,
.window__main {
  flex: 0 1 auto;
  overflow: auto;
}

.window__side {
  overflow: auto;
  width: 25%;
  min-width: 200px;
  padding: 10px;
  background-color: #ECEFF1;
}

.window__main {
  padding: 10px;
  width: 100%;
  background-color: white;
}

.window__actions {
  position: absolute;
  top: 32px;
  display: flex;
  align-items: center;
  width: 100%;
  height: 32px;
  padding: 0;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  background-color: #fbfbfc;
}
.window__actions .search {
  position: relative;
  height: 32px;
  width: 33%;
  max-width: 248px;
  min-width: 170px;
  margin-left: auto;
  border-left: 1px solid rgba(0, 0, 0, 0.1);
  background-color: transparent;
}
.window__actions .search__input {
  padding: 0 10px;
  line-height: 32px;
}
.window__actions .search__btn {
  height: 32px;
  width: 32px;
}

.window__back,
.window__forward {
  flex: 0 1 auto;
  width: 32px;
  height: 32px;
  line-height: 32px;
  text-align: center;
  font-size: 12px;
  color: rgba(0, 0, 0, 0.45);
}
.window__back:hover,
.window__forward:hover {
  color: #1976D2;
}

.window__path {
  white-space: nowrap;
  padding: 0 5px;
  border-left: 1px solid rgba(0, 0, 0, 0.1);
}
.window__path > a {
  display: inline-block;
  padding: 0 5px;
  line-height: 32px;
  font-size: 12px;
  cursor: pointer;
  color: #607D8B;
}
.window__path > a:after {
  display: inline-block;
  margin-left: 5px;
  content: '\f0da';
  font-family: 'FontAwesome';
  opacity: 0.5;
}

.side__list {
  margin: 0;
  padding: 0;
  font-size: 18px;
  font-weight: 200;
}
.side__list > li {
  margin-bottom: 10px;
}
.side__list li {
  list-style: none;
}
.side__list li a {
  position: relative;
  display: block;
  padding: 3px 5px 3px 32px;
  border: 1px solid transparent;
  color: #546E7A;
  transition: all 100ms;
}
.side__list li a:hover {
  color: #263238;
  border-color: rgba(0, 0, 0, 0.1);
  background-color: rgba(0, 0, 0, 0.05);
}
.side__list ul {
  padding: 0;
  font-size: 14px;
}
.side__list ul li > a {
  padding-left: 42px;
}
.side__list ul li li > a {
  padding-left: 52px;
}

.list__toggle {
  display: block;
  position: absolute;
  left: 0;
  top: 0;
  height: 32px;
  width: 32px;
  display: block;
  line-height: 32px;
  text-align: center;
}
.list__toggle:hover {
  color: #1565C0;
}
.list__toggle:before {
  display: block;
  content: '\f105';
  font-family: 'FontAwesome';
  margin-top: 1px;
  transform: none;
  transition: all 250ms;
}
.side__list--open > a .list__toggle:before {
  transform: rotate(90deg);
}
li li .list__toggle {
  width: 42px;
  height: 26px;
  line-height: 26px;
}
li li .list__toggle:before {
  margin-top: 2px;
}

.taskbar {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 48px;
  box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.15);
  background-color: #1c2429;
  z-index: 9998;
}

.taskbar__item {
  display: inline-block;
  margin-right: 4px;
  text-align: center;
  width: 48px;
  height: 48px;
  font-size: 22px;
  color: white;
  border: 1px solid transparent;
  transition: all 100ms;
}
.taskbar__item:hover {
  background-color: rgba(120, 144, 156, 0.15);
}
.taskbar__item > i {
  display: inline-block;
  vertical-align: middle;
  margin-top: 6px;
  width: 32px;
  height: 32px;
  line-height: 32px;
}

.taskbar__item--active.taskbar__item--explorer {
  background-color: #0097A7;
}
.taskbar__item--active.taskbar__item--mail {
  background-color: #5C6BC0;
}
.taskbar__item--active.taskbar__item--notepad {
  background-color: #EC407A;
}

.taskbar__item--open {
  box-shadow: inset 0 -2px 0 rgba(255, 255, 255, 0.35);
}

.taskbar__item--start {
  color: #378fe7;
  transition: background-color 250ms;
}
.taskbar__item--start.start--open {
  color: white;
}

.taskbar__tray {
  color: white;
  padding: 0 10px;
  float: right;
  line-height: 48px;
}
.taskbar__tray .time {
  cursor: default;
  padding: 5px;
}
.taskbar__tray .time:hover {
  background-color: rgba(255, 255, 255, 0.1);
}

.start-menu-fade {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9998;
  background-color: rgba(0, 0, 0, 0.5);
}

.start-menu {
  display: flex;
  opacity: 0;
  position: absolute;
  left: 0;
  bottom: 48px;
  padding: 10px;
  height: 85vh;
  min-height: 512px;
  z-index: 9999;
  color: white;
  background-color: #1976D2;
}

.start--open {
  background-color: #1976D2 !important;
}

.start-menu__list,
.start-screen {
  flex: 0 1 auto;
}

.start-menu__list {
  position: relative;
  width: 248px;
  transform: translate(-100%, 0);
  opacity: 0;
  transition: all 500ms;
}
.start-menu--open .start-menu__list {
  transform: none;
  opacity: 1;
}

.user-info {
  display: flex;
  margin-bottom: 10px;
  padding: 10px;
  color: white;
  transition: all 100ms, transform 500ms;
}
.user-info:hover {
  background-color: rgba(255, 255, 255, 0.15);
}
.start-menu--open .user-info {
  transform: none;
}

.user-info__img {
  display: block;
  width: 40px;
  height: 40px;
}

.user-info__name {
  font-size: 20px;
  font-weight: 200;
  align-self: center;
}

.user-info__power {
  margin-left: auto;
  width: 60px;
  height: 60px;
  line-height: 60px;
  text-align: center;
  font-size: 20px;
  color: white;
}
.user-info__power:hover {
  background-color: rgba(255, 255, 255, 0.15);
}

.start-menu__label {
  display: block;
  padding: 10px 20px;
  font-size: 20px;
}

.start-menu__recent {
  overflow: hidden;
  max-height: 65%;
  padding: 0;
  margin: 0;
  transform: translate(-100%, 0);
  opacity: 0;
  transition: all 500ms 100ms, opacity 1000ms 250ms;
}
.start-menu--open .start-menu__recent {
  transform: none;
  opacity: 1;
}
.start-menu__recent li {
  list-style: none;
}
.start-menu__recent li a {
  display: block;
  padding: 10px;
  color: white;
  transition: all 100ms;
}
.start-menu__recent li a:hover {
  background-color: rgba(255, 255, 255, 0.15);
}
.start-menu__recent li a > i {
  display: inline-block;
  width: 32px;
  height: 32px;
  margin-right: 6px;
  font-size: 20px;
  line-height: 32px;
  text-align: center;
  box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.15);
}
.start-menu__recent li.start-menu__explorer a > i {
  background-color: #0097A7;
}
.start-menu__recent li.start-menu__mail a > i {
  background-color: #5C6BC0;
}
.start-menu__recent li.start-menu__notepad a > i {
  background-color: #EC407A;
}

.all-apps {
  position: absolute;
  right: 0;
  bottom: 40px;
  display: block;
  margin-bottom: 10px;
  color: white;
  transition: all 100ms;
}
.all-apps > i {
  margin-left: 5px;
  margin-right: 5px;
  border: 2px solid white;
  border-radius: 100px;
  width: 32px;
  height: 32px;
  line-height: 26px;
  text-align: center;
}
.all-apps:hover > i {
  background-color: #37474F;
}

.search {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 36px;
  background-color: white;
}

.search__input {
  display: block;
  width: 100%;
  padding: 10px;
  height: 32px;
  border: 0;
  font-size: 12px;
  color: #607D8B;
  background-color: transparent;
  z-index: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.search__btn {
  position: absolute;
  right: 0;
  top: 0;
  width: 36px;
  height: 36px;
  border: 0;
  z-index: 1;
  background: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}
.search__btn:before {
  display: block;
  content: '\f002';
  font-family: 'FontAwesome';
  font-size: 12px;
  color: #607D8B;
}

.start-screen-scroll {
  max-height: 85vh;
  min-height: calc(128px * 3 - 8px);
  overflow-y: auto;
  overflow-x: hidden;
  margin: -8px;
  padding: 4px;
  margin-left: 4px;
  transform: translate(-100%, 0);
  transition: transform 500ms, opacity 1000ms;
  opacity: 0;
}
.start-menu--open .start-screen-scroll {
  transform: none;
  opacity: 1;
}

.start-screen {
  position: relative;
  width: 256px;
  word-spacing: -1em;
}
@media screen and (min-width: 700px) {
  .start-screen {
    min-width: 384px;
  }
}
@media screen and (min-width: 800px) {
  .start-screen {
    min-width: 512px;
  }
}
@media screen and (min-width: 960px) {
  .start-screen {
    min-width: 640px;
  }
}

.start-screen__tile {
  position: relative;
  display: block;
  float: left;
  width: 120px;
  height: 120px;
  word-spacing: normal;
  margin: 4px;
  color: white;
  background-color: #D81B60;
  border: 2px solid rgba(255, 255, 255, 0.1);
  transform: scale(0.5);
  transition: all 250ms, transform 0s;
}
.start-menu--open .start-screen__tile {
  transform: none;
}
.start-screen__tile.ui-sortable-helper {
  transform: scale(1.1);
  transition: none;
}
.start-screen__tile:hover {
  border-color: rgba(255, 255, 255, 0.5);
}
.start-screen__tile:active {
  transform: scale(0.9);
}
.start-screen__tile > i {
  font-size: 48px;
  position: absolute;
  top: calc(50% - 12px);
  left: 50%;
  margin-top: -24px;
  margin-left: -24px;
}
.start-screen__tile > span {
  position: absolute;
  left: 12px;
  bottom: 4px;
  font-size: 12px;
}

.start-screen__tile--wide,
.start-screen__tile--large {
  width: 248px;
}

.start-screen__tile--large {
  height: 248px;
}

.start-screen__tile--small {
  width: 56px;
  height: 56px;
}

.start-screen__smallgroup {
  width: 120px;
  height: 120px;
  margin: 4px;
}
.start-screen__smallgroup > .start-screen__tile {
  margin: 0;
}
.start-screen__smallgroup > .start-screen__tile:nth-child(odd) {
  margin-right: 8px;
  margin-bottom: 8px;
}

.start-screen__tile--explorer {
  background-color: #0097A7;
}

.start-screen__tile--mail {
  background-color: #5C6BC0;
}

.start-screen__tile--notepad {
  background-color: #EC407A;
}

.full-textarea {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  resize: none;
  border: 0;
  width: 100%;
  height: 100%;
}

.ui-resizable-se {
  background-image: url("");
}

.menu-toggle {
  position: relative;
}

.menu-toggle--open {
  background-color: rgba(0, 0, 0, 0.1);
}

.menu {
  position: absolute;
  z-index: 10000;
  background: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
  transition: all 250ms;
}
.menu > a {
  display: block;
  width: 200px;
  padding: 10px 15px;
  font-size: 16px;
  color: #455A64;
  transition: all 100ms;
}
.menu > a:hover {
  background-color: #ECEFF1;
}

.folders > a {
  display: inline-block;
  padding: 10px;
  margin: 5px;
  width: 72px;
  height: 72px;
  text-align: center;
  border: 1px solid transparent;
  color: #607D8B;
  cursor: pointer;
}
.folders > a:hover {
  color: #1976D2;
  border-color: rgba(0, 0, 0, 0.1);
  background-color: rgba(236, 239, 241, 0.5);
}
.folders > a > i {
  display: block;
  font-size: 32px;
}
.folders > a > span {
  display: block;
}

</style>
<script>
 $(window).load(function() {
  var $container = $('.start-screen');

  $container.masonry({
    itemSelector: '.masonry-item',
    columnWidth: 128
  });
  
  $container.sortable({
    items: '.start-screen__tile',
    start: function(e, ui) {
      ui.item.removeClass('masonry-item');
      $container.masonry('reloadItems');
      
      console.log('start drag');
    },
    change: function(e, ui) {
     $container.masonry('reload');
    },
    stop: function(e, ui) {
      ui.item.addClass('masonry-item');
      $container.masonry('reload');
      
      console.log('stop drag');
    }
  });
  $container.disableSelection();
  
  
  $('.start-menu').hide().css('opacity', 1);
});

$(function() {
  // $('.start-screen-scroll').jScrollPane();


function resizeStart() {
    var startWidth = $('.start-screen').outerWidth();
    var startRound = Math.ceil(startWidth / 128.0) * 128;
  
  console.log('original: ' + startWidth);
  console.log('rounded: ' + startRound);
    
    $('.start-screen').css({
      'width' : startRound
    });
}

//$(window).load(resizeStart);
//$(window).resize(resizeStart);



$(function() {
  var zIndex = 1;

  var fullHeight = $(window).height() - 48,
      fullWidth  = $(window).width();
 
  
  $(window).resize(function() {
    fullHeight = $(window).height() - 48;
    fullWidth = $(window).width();
  });
  
  $(function() {
    $('.window:visible').each(function() {
      var appName = $(this).data('window');
      
      $('.taskbar__item[data-window="' + appName + '"]').addClass('taskbar__item--open');
    });
    
    $('.window:hidden').each(function() {
      $(this).addClass('window--opening');
    });
  });
  
  $(function() {
    var initialActive = $('.window:visible').not('.window--minimized').first();
    var appName = $(initialActive).data('window');
    
   $(initialActive).addClass('window--active').css({'z-index' : zIndex++});
   $('.taskbar__item[data-window="' + appName + '"]').addClass('taskbar__item--active');
  });

  
  $('.window').click(function(e) {
    if ( !$(this).is('.window--active')) {
      $('.window').removeClass('window--active');
    }
    
    $(this).addClass('window--active');
    $(this).css({'z-index' : zIndex++});
    
    var appName = $(this).data('window');
    var targetTaskbar = $('.taskbar__item[data-window="' + appName + '"]');
   
    if ( !$('.window__close').is(e.target) && $('.window__close').has(e.target).length === 0 && !$('.window__minimize').is(e.target) && $('.window__minimize').has(e.target).length === 0 ) {
      $('.taskbar__item').removeClass('taskbar__item--active'); $(targetTaskbar).addClass('taskbar__item--active');
      
    }
  });
  
  $('.window').resizable({
    handles: 'n,ne,e,se,s,sw,w,nw',
    stop: function() {
     var initialHeight = $(this).height(),
     initialWidth = $(this).width(),
     initialTop = $(this).position().top,
     initialLeft = $(this).position().left; }
   });

  $('.window').draggable({
    handle: '.window__titlebar',
    stop: function() {
    var initialHeight = $(this).height(),
        initialWidth = $(this).width(),
        initialTop = $(this).position().top,
        initialLeft = $(this).position().left;
    },
    start: function(event, ui) {
      var mouseX = event.pageX + 'px';
      console.log(mouseX);
      
      $('.window').removeClass('window--active');
      
      $(this).addClass('window--active');
      $(this).css({'z-index' : zIndex++});

      if ( $(this).hasClass('window--maximized') ) {
       
        //alert(mouseX);
        $(this).removeClass('window--maximized').css({ 'height' : initialHeight,
                      'width'  : initialWidth,
                      'top'    : 0,
                      'left'   : mouseX });
      }
      
      var appName = $(this).data('window');
    var targetTaskbar = $('.taskbar__item[data-window="' + appName + '"]')
    $('.taskbar__item').removeClass('taskbar__item--active'); $(targetTaskbar).addClass('taskbar__item--active');
    }
  });

  function openApp(e) {
    var appName = $(this).data('window');
    var targetWindow = $('.window[data-window="' + appName + '"]');
    var targetTaskbar = $('.taskbar__item[data-window="' + appName + '"]');
    
    e.preventDefault();
    $('.taskbar__item').removeClass('taskbar__item--active');
    
    if ( targetWindow.is(':visible') ) {
      if ( targetWindow.hasClass('window--active') ) {
        $(targetWindow).toggleClass('window--minimized');

        if ( !targetWindow.hasClass('window--minimized') ) {
          var initialHeight = $(targetWindow).height(),
               initialWidth = $(targetWindow).width(),
               initialTop = $(targetWindow).position().top,
               initialLeft = $(targetWindow).position().left;
          
          $('.window').removeClass('window--active');

         $(targetWindow).addClass('window--active').css({
            'z-index' : zIndex++
          });
          
         $(targetTaskbar).addClass('taskbar__item--active');
        }
      } else {
        $('.window').removeClass('window--active');
        $(targetWindow).addClass('window--active').removeClass('window--minimized').css({'z-index' : zIndex++});
        
        $(targetTaskbar).addClass('taskbar__item--active');
      }
    } else {
      $('.window').removeClass('window--active');
      
      $('.window[data-window="' + appName + '"]').css({ 'z-index' : zIndex++ }).addClass('window--active').show();
      
      setTimeout(function() {
        $('.window[data-window="' + appName + '"]').removeClass('window--opening');
      }, 500);
      
      $(targetTaskbar).addClass('taskbar__item--active').addClass('taskbar__item--open');
    }
  }
  
  $('.taskbar__item').click(openApp);
  $('.start-menu__recent li a').click(openApp);
  $('.start-screen__tile').click(openApp);

  
  
  
  
  
  $('.window__titlebar').each(function() {
    var parentWindow = $(this).closest('.window');
    
    $(this).find('a').click(function(e) {
      e.preventDefault();
    });
    
    $(this).find('.window__icon').click(function(e) {
      $(this).siblings('.window__menutoggle').trigger('click');
    });
    
    $(this).find('.window__menutoggle').click(function(e) {
      $(parentWindow).find('.window__menu').fadeToggle(100).toggleClass('window__menu--open');
      $(this).toggleClass('window__menutoggle--open');
    });
    
    $(this).find('.window__close').click(function(e) {
      $(parentWindow).addClass('window--closing');
      
      setTimeout(function() {             $(parentWindow).hide().removeClass('window--closing').addClass('window--opening');
      }, 500);
      
      var appName = $(parentWindow).data('window');
      
      $('.taskbar__item[data-window="' + appName + '"]').removeClass('taskbar__item--open').removeClass('taskbar__item--active');
      
      var closest = $('.window').not('.window--minimized, .window--closing, .window--opening').filter(function() {
        return $(this).css('z-index') < zIndex
      }).first();
      
      $(closest).addClass('window--active');
    });
    
    $(this).find('.window__minimize').click(function(e) {
      $(parentWindow).addClass('window--minimized');
      
     var appName = $(parentWindow).data('window');
    var targetTaskbar = $('.taskbar__item[data-window="' + appName + '"]');
      
     //alert(targetTaskbar.attr('class'));
      $(targetTaskbar).removeClass('taskbar__item--active');
      
    });
    
    $(this).find('.window__maximize').click(function(e) {

      $(parentWindow).toggleClass('window--maximized');

      if ( !$(parentWindow).hasClass('window--maximized') ) {
        $(parentWindow).css({ 'height' : initialHeight,
                              'width'  : initialWidth,
                              'top'    : initialTop,
                              'left'   : initialLeft });
      } else {
        initialHeight = $(parentWindow).height();
        initialWidth = $(parentWindow).width();
        initialTop = $(parentWindow).position().top;
        initialLeft = $(parentWindow).position().left;

        $(parentWindow).css({ 'height' : fullHeight,
                              'width'  : fullWidth,
                              'top'    : 0,
                              'left'   : 0 });
      }
    });
  });

  $('.window__titlebar').mouseup(function(e) {
  var parentWindow = $(this).closest('.window');
  var pos = $(parentWindow).offset().top;
    
    if ( pos < -5 ) {
      //alert('at top')
      $(parentWindow).addClass('window--maximized');
      
      initialHeight = $(parentWindow).height();
        initialWidth = $(parentWindow).width();
        initialTop = $(parentWindow).position().top;
        initialLeft = $(parentWindow).position().left;

        $(parentWindow).css({ 'height' : fullHeight,
                              'width'  : fullWidth,
                              'top'    : 0,
                              'left'   : 0 });
    }
  
});
});



// Unfocus windows when desktop is clicked
$('.desktop').click(function(e) {
  if ( $('.desktop').has(e.target).length === 0 ) {
    $('.window').removeClass('window--active');
    $('.taskbar__item').removeClass('taskbar__item--active');
  }
});





$(function() {
  $('.side__list ul').each(function() {
    if ( $(this).find('ul').is(':visible') ) {
      $(this).children('li').addClass('side__list--open');
    }
  });
});



$(function() {
  $('.side__list li').each(function() {
    if ( $(this).children('ul').length ) {
      //$(this).addClass('list__sublist');
      $(this).children('a').append('<span class="list__toggle"></span>');
      
      
    }
    
    if ( $(this).children('ul').is(':visible') ) {
      $(this).addClass('side__list--open');
    }
  });
});

$(document).on('click', '.list__toggle',  function() {

 $(this).closest('li').children('ul').animate({
  'height' : 'toggle',
  'opacity' : 'toggle'
}, 250);

 $(this).closest('li').toggleClass('side__list--open');


});




function toggleStart(e) {
  $('.start-menu-fade').fadeToggle(500);
  $('.start-menu').fadeToggle(250).toggleClass('start-menu--open');
  $('.taskbar__item--start').toggleClass('start--open');
}
$('.taskbar__item--start').click(toggleStart);
$('.start-menu__recent li a').click(toggleStart);
$('.start-screen__tile').click(toggleStart);

// Prevent "open" class on start
$(function() {
  $('.taskbar__item--start').click(function() {
    $(this).removeClass('taskbar__item--open taskbar__item--active');
  });
});


$(document).mouseup(function(e) {
    var start = $('.start-menu');
    var startToggle = $('.taskbar__item--start');


    if (start.is(':visible') && !startToggle.is(e.target) && startToggle.has(e.target).length === 0 && !start.is(e.target) && start.has(e.target).length === 0 ) {
      toggleStart();
      //alert('clicked outside start');
    }
  
  

});




// Current time
$(function() {
  var a_p = "";
  var d = new Date();

  var curr_hour = d.getHours();

  if (curr_hour < 12)
     {
     a_p = "AM";
     }
  else
     {
     a_p = "PM";
     }
  if (curr_hour == 0)
     {
     curr_hour = 12;
     }
  if (curr_hour > 12)
     {
     curr_hour = curr_hour - 12;
     }

  var curr_min = d.getMinutes();
  
  if ( curr_min < 10 ) {
    curr_min = '0' + curr_min;
  }

  $('.time').html(curr_hour + ':' + curr_min + ' ' + a_p);
});



$('.menu-toggle').each(function() {
  var menuName = $(this).data('menu');
  var menu = $('.menu[data-menu="' + menuName + '"]');
  var pos = $(this).position();
  var height = $(this).outerHeight();
  
  if ( !$(menu).hasClass('menu--bottom') ) {
    $(menu).position({
      my: 'left top',
      at: 'left bottom',
      of: this,
      collision: 'none'
    });
  } else {
   
  }
  
  $(menu).hide();
  
  $(this).click(function(e) {
    e.preventDefault();
    $('.menu').not(menu).hide();
    $(menu).toggle();
  });
});




$(document).mouseup(function(e) {
  if ( $('.menu').has(e.target).length === 0 && !$('.menu-toggle').is(e.target) && $('.menu-toggle').has(e.target).length === 0 ) {
    $('.menu').hide();
  }
});







function toggleStart(e) {
  $('.start-menu-fade').fadeToggle(500);
  $('.start-menu').fadeToggle(250).toggleClass('start-menu--open');
  $('.taskbar__item--start').toggleClass('start--open');
}
$('.taskbar__item--start').click(toggleStart);
$('.start-menu__recent li a').click(toggleStart);
$('.start-screen__tile').click(toggleStart);
$(function() {
  $('.start-screen-scroll').jScrollPane();
});
// Prevent "open" class on start
$(function() {
  $('.taskbar__item--start').click(function() {
    $(this).removeClass('taskbar__item--open taskbar__item--active');
  });
});
});

$(document).mouseup(function(e) {
    var start = $('.start-menu');
    var startToggle = $('.taskbar__item--start');


    if (start.is(':visible') && !startToggle.is(e.target) && startToggle.has(e.target).length === 0 && !start.is(e.target) && start.has(e.target).length === 0 ) {
      toggleStart();
      //alert('clicked outside start');
    }
  
  

});




// Current time
$(function() {
  var a_p = "";
  var d = new Date();

  var curr_hour = d.getHours();

  if (curr_hour < 12)
     {
     a_p = "AM";
     }
  else
     {
     a_p = "PM";
     }
  if (curr_hour == 0)
     {
     curr_hour = 12;
     }
  if (curr_hour > 12)
     {
     curr_hour = curr_hour - 12;
     }

  var curr_min = d.getMinutes();
  
  if ( curr_min < 10 ) {
    curr_min = '0' + curr_min;
  }

  $('.time').html(curr_hour + ':' + curr_min + ' ' + a_p);
});



$('.menu-toggle').each(function() {
  var menuName = $(this).data('menu');
  var menu = $('.menu[data-menu="' + menuName + '"]');
  var pos = $(this).position();
  var height = $(this).outerHeight();
  
  if ( !$(menu).hasClass('menu--bottom') ) {
    $(menu).position({
      my: 'left top',
      at: 'left bottom',
      of: this,
      collision: 'none'
    });
  } else {
   
  }
  
  $(menu).hide();
  
  $(this).click(function(e) {
    e.preventDefault();
    $('.menu').not(menu).hide();
    $(menu).toggle();
  });
});




$(document).mouseup(function(e) {
  if ( $('.menu').has(e.target).length === 0 && !$('.menu-toggle').is(e.target) && $('.menu-toggle').has(e.target).length === 0 ) {
    $('.menu').hide();
  }
});




</script>
</head>
<body>
<div class="desktop">
  <div class="start-menu-fade"></div>
  <div class="start-menu">
    <div class="start-menu__list">
      <div class="media">
        <a class="user-info menu-toggle" href="#" data-menu="user">
        <img class="user-info__img media__img" src="http://i.imgur.com/KkCqvK9.png" alt="User image">
        <div class="user-info__name media__body">
          User Name
        </div>
        </a>
        <div class="menu" data-menu="user">
          <a href="#">Change account picture</a>
          <a href="#">Lock</a>
          <a href="#">Sign out</a>
        </div>
        <a class="user-info__power menu-toggle" href="#" data-menu="power">
          <i class="fa fa-power-off"></i>
          
        </a>
      </div>
      
      <div class="menu" data-menu="power">
            <a href="#">Sleep</a>
            <a href="#">Power off</a>
            <a href="#">Restart</a>
          </div>
      

      <ul class="start-menu__recent">
        <li class="start-menu__explorer">
          <a href="#" data-window="explorer">
            <i class="fa fa-folder"></i>
            File Explorer
          </a>
        </li>
        <li class="start-menu__mail">
          <a href="#" data-window="mail">
            <i class="fa fa-envelope"></i>
            Mail
          </a>
        </li>
        <li class="start-menu__notepad">
          <a href="#" data-window="notepad">
            <i class="fa fa-pencil"></i>
            Notepad
          </a>
        </li>
        <li class="start-menu__explorer">
          <a href="#">
            <i class="fa fa-folder"></i>
            File Explorer
          </a>
        </li>
        <li class="start-menu__mail">
          <a href="#">
            <i class="fa fa-envelope"></i>
            Mail
          </a>
        </li>
        <li class="start-menu__notepad">
          <a href="#">
            <i class="fa fa-pencil"></i>
            Notepad
          </a>
        </li>
      </ul>
      
      <a class="all-apps" href="#">
        All apps
        <i class="fa fa-arrow-right"></i>
      </a>
      <form class="search">
      <input type="text" class="search__input" placeholder="Ask me anything">
      <button class="search__btn">
        </button>
      </form>
    </div>
    <div class="start-screen-scroll">
    <div class="start-screen">
      <a class="start-screen__tile start-screen__tile--explorer masonry-item" href="#" data-window="explorer">
        <i class="fa fa-folder"></i>
        <span>File Explorer</span>
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--wide masonry-item" href="#"  data-ss-colspan="2">
      </a>
      <div class="start-screen__smallgroup masonry-item">
      <a class="start-screen__tile start-screen__tile--small" href="#"></a>
        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
        <a class="start-screen__tile start-screen__tile--small" href="#"></a>
      </div>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--notepad masonry-item" href="#">
      </a>
      <a class="start-screen__tile start-screen__tile--large start-screen__tile--mail masonry-item" href="#" data-ss-colspan="2">
        <i class="fa fa-envelope"></i>
        <span>Mail</span>
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
      <a class="start-screen__tile masonry-item" href="#">
      </a>
    </div>
    </div>
  </div>
  
  <div class="taskbar">
    <a class="taskbar__item taskbar__item--start" href="#" data-window="start">
      <i class="fa fa-windows"></i>
    </a>
    <a class="taskbar__item taskbar__item--explorer" href="#" data-window="explorer">
      <i class="fa fa-folder"></i>
    </a>
    <a class="taskbar__item taskbar__item--mail" href="#" data-window="mail">
      <i class="fa fa-envelope"></i>
    </a>
    <a class="taskbar__item taskbar__item--notepad" href="#" data-window="notepad">
      <i class="fa fa-pencil"></i>
    </a>
    
    <div class="taskbar__tray">
      <span class="time">
        <script>
          
         </script>
      </span>
    </div>
  </div>
  
  
  <div class="window window--explorer window--minimized" data-window="explorer" style="width:670px;height:400px;top:5%;left:10%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-folder"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        File Explorer
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__actions">
      <a class="window__back" href="#">
        <i class="fa fa-arrow-left"></i>
      </a>
      <a class="window__forward" href="#">
        <i class="fa fa-arrow-right"></i>
      </a>
      <div class="window__path">
        <a href="#">
        <i class="fa fa-desktop"></i>
        Desktop
        </a>
      </div>
      <form class="search">
        <input type="text" class="search__input" placeholder="Search files and folders">
        <button class="search__btn">
        </button>
      </form>
    </div>
    
    <div class="window__body">
      
      <div class="window__side">
        
        <ul class="side__list">
          <li><a href="#">Home</a></li>
          <li>
            <a href="#">Favorites</a>
            <ul>
              <li><a href="#">Desktop</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Recent Places</a></li>
          </ul>
        </li>
          <li>
            <a href="#">This Device</a>
            <ul style="display:none">
              <li><a href="#">Desktop</a>
                <ul style="display:none">
                  <li>
                    <a href="#">Folder 1</a>
                  </li>
                </ul>
              </li>
              <li><a href="#">Documents</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Local Disk  (C:)</a></li>
        </ul>
      </div>
      <div class="window__main">
        <div class="folders">
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 1</span>
          </a>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 2</span>
          </a>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 3</span>
          </a>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 4</span>
          </a>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 5</span>
          </a>
          <a href="#">
            <i class="fa fa-folder"></i>
            <span>Folder 6</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
          <a href="#">
            <i class="fa fa-file"></i>
            <span>File</span>
          </a>
        </div>
      </div>
    </div>
    
  </div>
    
     <div class="window window--mail" data-window="mail" style="display:none;width:400px;height:300px;top:40%;left:40%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-envelope"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        Mail
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-search"></i>
            Search
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-plug"></i>
            Devices
          </a>
        </li>
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    
    <div class="window__body">
      <div class="window__side">
        
      </div>
      <div class="window__main">
        
      </div>
    </div>
    
  </div>
    
    
 <div class="window window--notepad" data-window="notepad" style="display:none;width:600px;height:300px;top:10%;left:30%;">
    <div class="window__titlebar">
      <div class="window__controls window__controls--left">
        <a class="window__icon" href="#"><i class="fa fa-pencil"></i></a>
        <a class="window__menutoggle" href="#"><i class="fa fa-bars"></i></a>
      </div>
      
      
      
      <span class="window__title">
        Notepad
      </span>
      
      <div class="window__controls window__controls--right">
        <a class="window__minimize" href="#"><i class="fa fa-minus"></i></a>
        <a class="window__maximize" href="#"><i class="fa"></i></a>
        <a class="window__close" href="#"><i class="fa fa-close"></i></a>
      </div>
    </div>
    
    <ul class="window__menu">
        <li>
          <a href="#">
            <i class="menu__icon fa fa-download"></i>
            Save
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-folder-open"></i>
            Open
          </a>
        </li>
        <li>
          <a href="#">
            <i class="menu__icon fa fa-print"></i>
            Print
          </a>
        </li>
      <li>
          <a href="#">
            <i class="menu__icon fa fa-share-alt"></i>
            Share
          </a>
        </li>
      
        <li class="divided">
          <a href="#">
            <i class="menu__icon fa fa-file"></i>
            Format
          </a>
      </li>
      <li>
          <a href="#">
            <i class="menu__icon fa fa-cog"></i>
            Settings
        </a>
      </li>
   </ul>
    
    <div class="window__body">
      <div class="window__main">
        <textarea class="full-textarea"></textarea>
      </div>
    </div>
    
  </div>

    
    
</div>
</body>
</html>


  