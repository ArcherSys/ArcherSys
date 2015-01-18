<!DOCTYPE HTML>
<html>
<head>

    <script src="components/webcomponentsjs/webcomponents.js"></script>

</head>
<body fullbleed layout vertical>

<link rel="import" href="components/polymer/polymer.html" />
<link rel="import" href="components/core-icons/core-icons.html">
<link rel="import" href="components/core-header-panel/core-header-panel.html">
    <link rel="import" href="components/core-toolbar/core-toolbar.html">
     
<core-header-panel flex>
  <core-toolbar><core-icon-button icon="menu" on-tap="{{menuAction}}"></core-icon-button>
  
  <core-icon-button icon="more" on-tap="{{moreAction}}"></core-icon-button>
  <div flex>Title</div></core-toolbar>
  <section id="ui"></section>
</core-header-panel>
</body>
</html>