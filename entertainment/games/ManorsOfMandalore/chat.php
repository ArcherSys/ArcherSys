<!DOCTYPE HTML>
<html>
    <head>
        
  
<title>Saberfront Server Rooms</title>

<script src="//cdn.temasys.com.sg/skylink/skylinkjs/0.6.x/skylink.complete.min.js"></script>
   <link rel="stylesheet" href="/core/css/foundation.min.css">
     </head>
<script>
    var skylink = new Skylink();
    function setName() {
var input = document.getElementById('name');
skylink.setUserData({
name: input.value
});
}
function joinRoom() {
skylink.joinRoom();
}
function leaveRoom() {
skylink.leaveRoom();
}
function sendMessage() {
var input = document.getElementById('message');
skylink.sendP2PMessage(input.value);
input.value = '';
}
function addMessage(message, className) {
var chatbox = document.getElementById('chatbox'),
div = document.createElement('div');
div.className = className;
div.textContent = message;
chatbox.appendChild(div);
}
skylink.on('peerJoined', function(peerId, peerInfo, isSelf) {
var user = 'You';
if(!isSelf) {
user = peerInfo.userData.name || peerId;
}
addMessage(user + ' joined the room', 'action');
});
skylink.on('peerUpdated', function(peerId, peerInfo, isSelf) {
if(isSelf) {
user = peerInfo.userData.name || peerId;
addMessage('You\'re now known as ' + user, 'action');
}
});
skylink.on('peerLeft', function(peerId, peerInfo, isSelf) {
var user = 'You';
if(!isSelf) {
user = peerInfo.userData.name || peerId;
}
addMessage(user + ' left the room', 'action');
});
skylink.on('incomingMessage', function(message, peerId, peerInfo, isSelf) {
var user = 'You',
className = 'you';
if(!isSelf) {
user = peerInfo.userData.name || peerId;
className = 'message';
}
addMessage(user + ': ' + message.content, className);
});
skylink.init('c1330478-1160-4761-b218-79d548c69a55');

</script>
<body>
<header><input id="name" type="text" autofocus="" placeholder="My name" />
<button>Set my name</button>
<button>Join room</button>
<button>Leave room</button>

<input id="message" type="text" placeholder="My message" />
<button>Send message</button></header>
<div id="container"></div>
</body>
</html>