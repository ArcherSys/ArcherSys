<!DOCTYPE HTML>
<html>
<head>
<title>ArcherCal</title>
  <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
 <link rel='stylesheet' type="text/css" href='fullcalendar/fullcalendar.css' />
<script src='fullcalendar/lib/jquery.min.js'></script>
<script src='fullcalendar/lib/moment.min.js'></script>
<script src='fullcalendar/fullcalendar.js'></script>
<link rel="stylesheet" type="text/css" href="archersys-ui.css"/>
<script type='text/javascript' src='fullcalendar/gcal.js'></script>
<script>
$(function(){
  $('#calendar').fullCalendar({
header: {
    left:   'title',
    center: 'agendaDay,agendaWeek,month',
    right:  'today prev,next'
},
              googleCalendarApiKey: 'AIzaSyDjYpnvY4VwLowJ5KH6j_aGr7E4prvka84',
events: {
      googleCalendarId: 'g7q3mgaann8t7r19mjo58j8kmk@group.calendar.google.com',
       className: 'gcal-event'
},
allDaySlot: true,
dayClick: function(){
   $("#calendar").fullCalendar('changeView','agendaDay');
}
    });
});
</script>
</head>
<body>
<div id='calendar' class="archercal-container"></div>
</body>
</html>