<!DOCTYPE HTML>
<html>
<head>
 <title>ArcherIRC</title>
 
  <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
   <script>
  $(function() {
    var tabs = $( "#tabs" ).tabs();
    tabs.find( ".ui-tabs-nav" ).sortable({
      axis: "x",
      stop: function() {
        tabs.tabs( "refresh" );
      }
    });
  });
  </script>
</head>
<body>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">ArcherSys</a></li>
    <li><a href="#tabs-2">TogetherJS</a></li>
  </ul>
  <div id="tabs-1">
    <iframe src="https://kiwiirc.com/client?settings=4c2af8e0fd3891554c2f677357b493af" style="border:0; width:100%; height:450px;"></iframe>
  </div>
  <div id="tabs-2"><iframe src="https://kiwiirc.com/client?settings=8ce427938f62c27e41d5743f06d8933e" style="border:0; width:100%; height:450px;"></iframe>
  </div>
</div>
</body>
</html>