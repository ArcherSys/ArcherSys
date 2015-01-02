<html>
<head> 
  <title>YiiTube</title>
  <link type="text/css" rel="stylesheet" href="css/styles.css">
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
<div class="yiitube-container">
  <script type="text/x-handlebars" data-template-name="channels">
  <header><h1>YiiTube ASOS Streaming</h1></header>
 <div class="yiitube-content">{{#each in channel itemController="channel"}}
  <h2>{{name}}</h2>
{{/each}}</div>
</div>
</script>


<script src="js/libs/jquery-1.10.2.js"></script>
<script src="js/libs/handlebars-v2.0.0.js"></script>
<script src="js/libs/ember-1.9.1.js"></script>
<script src="js/libs/ember-data.min.js"></script>
<script src="js/app.js"></script>
<script src="js/model/channel.js"></script>
<script src="js/controllers/channel_controller.js"></script>
</body>
</html>
