//////./
///////
//////   Click on the Google Glass
/////    in the demo to toggle...
////
///
//



// Just a little javascript to get your time...
function startTime(){
var time = new Date();
var h = time.getHours();
if (h > 12) {
    h -= 12;
} else if (h === 0) {
  h = 12;
}
var m =time.getMinutes();
var s = time.getSeconds();
   m = checkTime(m);
s = checkTime(s);
var t = setTimeout(function(){startTime()},500);
  $("time").text(h + ":" + m + ":" + s);
}
function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}