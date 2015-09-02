var desktops = document.querySelectorAll('.desktop');

function hide(element) {
  element.style.setProperty('left', '-100%', element.style.getPropertyPriority('left'));
}

function hideAll() {
  for (var i = 0; i < desktops.length; i++) {
    hide(desktops[i]);
  }
}

function show(element) {
  element.style.setProperty('left', '0', element.style.getPropertyPriority('left'));
}

document.getElementById('link-one').addEventListener('click', function () {
  hideAll();
  show(document.getElementById('one'));
}, false);

document.getElementById('link-two').addEventListener('click', function () {
  hideAll();
  show(document.getElementById('two'));
}, false);

document.getElementById('link-three').addEventListener('click', function () {
  hideAll();
  show(document.getElementById('three'));
}, false);

document.getElementById('link-four').addEventListener('click', function () {
  hideAll();
  show(document.getElementById('four'));
}, false);

document.getElementById('link-five').addEventListener('click', function () {
  hideAll();
  show(document.getElementById('five'));
}, false);

show(document.getElementById('one'));