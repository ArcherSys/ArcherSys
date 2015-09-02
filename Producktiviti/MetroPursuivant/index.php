<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/jQueryManager.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\Viewer\jQueryManager;
$mph = new View("MetroPursuivant",function(){
jQueryManager::addjQuery();
?>
<style>
*{
font-family: Segoe UI;
}
li{
list-style-type: none;
background-color: #e4effa;
margin-top: -10px;
}
.MetroPursuivantHeaderShow{
background-color: green;
}
.MetroPursuivantHeader{
   position: fixed;
    margin-bottom: -10px; 
   top: -20px;
background-color: crimson;
 width: 1000px;
}
#traintimes td{
background-color: lightgreen;
color: white;
border: 1px solid blue;

}
</style>
<?php
}, function(){
?>
<script type="text/javascript">
   $(function() {
      $(".MetroPursuivantHeader").dblclick(function(){
$(".MetroPursuivantHeader").hide();

$(".MetroPursuivantHeaderShow").show();
});

$("#MetroPursuivantHeaderShow").click(function(){

      var params = {
         // Specify your subscription key
         'api_key': '3bd3f9fe9c0d4c9087ff7438fe507aa7',
         // Specify values for the following required parameters
         'StopID': $("#busstopid").val()
      };
$.ajax({
         url: 'https://api.wmata.com/Incidents.svc/json/BusIncidents?' + $.param({
         // Specify your subscription key
         'api_key': '3bd3f9fe9c0d4c9087ff7438fe507aa7',
         // Specify values for the following required parameters
         'StopID': $("#busstopid").val()
      }),
         type: 'GET',
      })
      .done(function(data) {
    
         

         window.Notification.requestPermission(function(status){
         for(var ij = 0; ij < data.BusIncidents.length; ij++){
         console.info(data.BusIncidents[ij]);
         var note =  new window.Notification(data.BusIncidents[ij].IncidentType + " Detected",{"body": data.BusIncidents[ij].Description});

}
});

      
      $.ajax({
         url: 'https://api.wmata.com/Incidents.svc/json/ElevatorIncidents?' + $.param({
         // Specify your subscription key
         'api_key': '3bd3f9fe9c0d4c9087ff7438fe507aa7',
         // Specify values for optional parameters, as needed
         // StationCode: "",
      }),
         type: 'GET',
      })
      .done(function(data) {
         
         window.Notification.requestPermission(function(status){
         for(var e = 0;  e < data.BusIncidents.length; e++){
         note =  new window.Notification(data.ElevatorIncidents[e].UnitType + " Outage",{"body": data.ElevatorIncidents[e].Description});
}
});
      })
      .fail(function() {
         alert("error");
      });
  })
      .fail(function() {
         alert("error");
      });
      
      $.ajax({
         url: 'https://api.wmata.com/NextBusService.svc/json/jPredictions?' + $.param(params),
         type: 'GET',
      })
      .done(function(data) {
         
         $("#MPH1").text("Bus Times for " + data.StopName);
          for( var i = 0; i < data.Predictions.length; i++){
             console.log(data.Predictions[i]);
            $("#bustimes").append("<li class='prediction'><h2 class='route-header'>" + data.Predictions[i].RouteID + ":</h2><div class='direction'><span class='range-header-range'>Range:</span>&nbsp;<span class='range-data'>" + data.Predictions[i].DirectionText + "</span><span ><div class='route-id'>"+ data.Predictions[i].VehicleID +"</div><span class='minutes'>Minutes: " + data.Predictions[i].Minutes + "</div></li>" );
}
      })
      .fail(function() {
$("#businfo").html("<div class='MetroPursuivantError'>Error</div>");
      });
    
   });
window.setInterval(function(){
$.ajax({
         url: 'https://api.wmata.com/NextBusService.svc/json/jPredictions?' + $.param({
         // Specify your subscription key
         'api_key': '3bd3f9fe9c0d4c9087ff7438fe507aa7',
         // Specify values for the following required parameters
         'StopID': $("#busstopid").val()
      }),
         type: 'GET',
      })
      .done(function(data) {
         
         $("#MPH1").text("Bus Times for " + data.StopName);
          for( var i = 0; i < data.Predictions.length; i++){
             console.log(data.Predictions[i]);
            window.document.getElementsByClassName("route-header")[i].innerHTML = data.Predictions[i].RouteID;
            window.document.getElementsByClassName("range-data")[i].innerHTML = data.Predictions[i].DirectionText;
            window.document.getElementsByClassName('route-id')[i].innerHTML = data.Predictions[i].VehicleID;
            
            window.document.getElementsByClassName("minutes")[i].innerHTML = data.Predictions[i].Minutes;
}
      })
      .fail(function() {
$("#businfo").html("<div class='MetroPursuivantError'>Error</div>");
      });
}, 60000);
  $.ajax({
         url: 'https://api.wmata.com/StationPrediction.svc/json/GetPrediction/B03?' + $.param( {
         // Specify your subscription key
         'api_key': '3bd3f9fe9c0d4c9087ff7438fe507aa7',
      }),
         type: 'GET',
      })
      .done(function(data) {
          $("#traintimes").append("<thead><tr></tr><tr></tr><th>Number of RailCars</th><th>Line Color</th><th>Minutes till arrival</th></tr></thead>");
          for( var k = 0; k < data.Trains.length; k++){
            console.log(data.Trains[k]);
            $("#traintimes").append('<tr><td class="trains-destination">' + data.Trains[k].DestinationName + '</td><td class="trains-car">' + data.Trains[k].Car + " </td>" +"<td class='trains-line'> " +  data.Trains[k].Line + ' </td><td class="trains-minutes">' + data.Trains[k].Min + "</td></tr>");
          }
window.setInterval(function(){
           $.ajax({
         url: 'https://api.wmata.com/StationPrediction.svc/json/GetPrediction/B03?' + $.param( {
         // Specify your subscription key
         'api_key': '3bd3f9fe9c0d4c9087ff7438fe507aa7',
      }),
         type: 'GET',
      })
      .done(function(data) {
for( var r = 0; r < data.Trains.length; r++){
            window.document.GetElementsByClassName("trains-destination")[r].innerHTML = data.Trains[k].DestinationName;
            window.document.GetElementsByClassName("trains-car")[r].innerHTML = data.Trains[k].Car;
            

            window.document.GetElementsByClassName("trains-line")[r].innerHTML = data.Trains[k].Line;
            
            window.document.GetElementsByClassName("trains-minutes")[r].innerHTML = data.Trains[k].Min;
}
     }).fail(function(){
        alert("No Data");
});
   
},60000);
 }).fail(function(){
        alert("No Data");
});
});
</script>
<div class="MetroPursuivantHeader"><h1 id="MPH1"></h1></div>
<input type="number" name="stopid" id="busstopid">
<div id="businfo"><ul id="bustimes"></ul></div>

<div id="traininfo"><table id="traintimes"></ul></div>
<button id="MetroPursuivantHeaderShow"><h1>Show</h1></button>
<div id="busincidents"></div>
<?php
});
?>