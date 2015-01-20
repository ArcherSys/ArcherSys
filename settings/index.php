<!DOCTYPE HTML>

<html>

<head>

   

    <title>ArcherSys Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
 <script src="components/webcomponentsjs/webcomponents.js"></script>


</head>
<body fullbleed layout vertical>


<link rel="import" href="components/polymer/polymer.html" />

<link rel="import" href="components/core-icons/core-icons.html">

<link rel="import" href="components/core-header-panel/core-header-panel.html">

    <link rel="import" href="components/core-toolbar/core-toolbar.html">
 <link rel="import" href="components/core-icon-button/core-icon-button.html">

    <link rel="import" href="components/core-drawer-panel/core-drawer-panel.html">
 <link rel="import" href="components/paper-input/paper-input.html">
<style>
   body{
    font-family: Segoe UI, Tahoma;
color: #ffc223;
        margin: 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
 }

      [drawer] {
        background-color: #B99588;
        border-right: 1px solid #ccc;
      }
      
      [main] {
        background-color: #4F7DC9;
      }
      
      button {
        width: 160px;
        height: 40px;
        font-size: 16px;
        margin: 8px;
      }
</style>
  
<core-header-panel flex>
 

 <core-toolbar><core-icon-button icon="menu" on-tap="{{menuAction}}"></core-icon-button>
  

 <div flex>Settings</div></core-toolbar>
  <section id="ui"><paper-input></paper-input>
      </section>


</core-header-panel></body>
</html>