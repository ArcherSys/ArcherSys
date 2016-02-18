<!DOCTYPE HTML>
<html>
    <head>
        <title>Mapsly</title>
        <script src="blockly/blockly_compressed.js"></script>
            <script src="components/webcomponentsjs/webcomponents-lite.min.js"></script>
            <link rel="import" href="components/polymer/polymer.html">
            <link rel="import" href="components/paper-styles/paper-styles.html">
<link rel="import" href="components/paper-header-panel/paper-header-panel.html">
<link rel="import" href="components/paper-toolbar/paper-toolbar.html">
<link rel="import" href="components/font-roboto/roboto.html">
<link rel="import" href="components/iron-flex-layout/iron-flex-layout.html">
<script src="blockly/blocks_compressed.js"></script>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<script src="blockly/javascript_compressed.js"></script>
<script src="blockly/msg/js/en.js"></script>
         <script src="js/mapsly_oop.js"></script>
         
<style type="text/css">
  html, body { height: 100%; margin: 0; padding: 0; }
  #map { height: 100%; }
  div{
      font-size: 30px;
      font-family: Roboto;
  }
</style>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="js/mapsly-lang.js"></script>

         <script>
         var code = '';
            function initMap(code){
                  var code = window.localStorage["code"];
                
                      eval(code);
                       }
                  
               
              $(function(){
                                

           
                
                 $("#mapu").click(function(){
                     code =  Blockly.JavaScript.workspaceToCode(workspace);
                    window.localStorage.setItem("code",code);
                       eval(code);
                 })
      
    
            });
         </script>
         <script async defer
      src="https://maps.googleapis.com/maps/api/js?signed_in=true&key=AIzaSyDgP3D8F1KAMlhRRoQIKA4gICiyA5jfHdo&callback=initMap">
    </script>
    </head>
    <body class="fullbleed layout vertical">
          <paper-header-panel class="flex">
              <paper-toolbar>
                  <div flex>Mapsly</div>
              </paper-toolbar>
        
        <div id="blocklyDiv" style="height: 480px; width: 600px;"></div>
        <xml id="toolbox" style="display: none">
            <category name="Colors">
                <block type="colour_picker"></block>
            </category>
            <category name="Control Statements">
                  <block type="controls_if"></block>
  <block type="controls_repeat_ext"></block>
            </category>
            <category name="Logic">     <block type="logic_boolean"></block><block type="logic_compare"></block></category>
<category name="Math">
    
  <block type="math_number"></block>
  <block type="math_arithmetic"></block>
</category>
<category name="Text">
      <block type="text"></block>
  <block type="text_print"></block>
</category>

<category name="Lists">
    <category name="Create a List">
    <block type="lists_create_empty"></block>
    
    <block type="lists_create_with"></block>
    <block type="lists_repeat"></block>
    </category>
    <category name="Check a List">
    <block type="lists_isEmpty"></block>
    <block type="lists_length"></block>
    </category>
    <category name="Retrieve a/some List Item(s)">
        <block type="lists_getIndex"></block>
        <block type="lists_getSublist"></block>
    </category>
    <category name="Add to a list">
         <block type="lists_setIndex"></block>
          <block type="lists_split"></block>
    </category>
    
</category>
 <category name="Procedures" custom="PROCEDURE"></category>
 <category name="Variables" custom="VARIABLE"></category>
<category name="HTML5">
    <block type="mapsly_contentbucket"></block>
    <block type="document_gebid"></block>
</category>
  <category name ="Mapsly">
      <category name="Cartographics"><category name="Map Creation">
                  <block type="mapsly_mapstats"></block>
        <block type="new_map"></block>
      </category>
      <category name="Map Utilities">
           <block type ="mapsly_geopoint"></block>
      </category>
       <category name="Marker Tools">
           <block type="create_marker"></block>
           <category name="Marker Methods">
                  <block type ="marker_addlistener"></block>
           </category>
   
<block type ="mapsly_markerinfo"></block>

       </category></category>
      <category name="Pen">
          <block type="mapsly_polyline_settings"></block>
          <block type="new_polyline"></block>
      </category>
      <category name="Infographics">
             <category name="Infographic Methods">
                 <block type="infowindow_open"></block>
             </category>
                          <block type ="new_infowindow"></block>

    </category>
  </category>
</xml>
<div id="map"></div><div id="pano"></div>
<button id="mapu">Update Map</button>
<button onclick="BlocklyStorage.link()">Save Blocks</button>
</paper-header-panel>
        <script>
        
  var workspace = Blockly.inject('blocklyDiv',
      {toolbox: window.document.getElementById('toolbox')});
      
</script>
    </body>
</html>