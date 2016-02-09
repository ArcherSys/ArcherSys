<!DOCTYPE HTML>
<html>
    <head>
        <title>Mapsly</title>
        <script src="blockly/blockly_compressed.js"></script>
<script src="blockly/blocks_compressed.js"></script>

<script src="blockly/javascript_compressed.js"></script>
<script src="blockly/msg/js/en.js"></script>

        <script src="js/mapsly-lang.js"></script>
         <script src="js/mapsly_oop.js"></script>
        
        <script>
            $(function(){
                var code = '';
                var initMap = new Function(code);
                
                 
      
    
            });
        </script>
         <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgP3D8F1KAMlhRRoQIKA4gICiyA5jfHdo&callback=initMap"></script>
    </head>
    <body>
        <h1>Mapsly</h1>
        <div id="blocklyDiv" style="height: 480px; width: 600px;"></div>
        <xml id="toolbox" style="display: none">
  <block type="controls_if"></block>
  <block type="controls_repeat_ext"></block>
  <block type="logic_compare"></block>
  <block type="math_number"></block>
  <block type="math_arithmetic"></block>
  <block type="text"></block>
  <block type="text_print"></block>
  <block type="document_gebid"></block>
</xml>
<button id="update">Create Map</button>
        <script>
  var workspace = Blockly.inject('blocklyDiv',
      {toolbox: window.document.getElementById('toolbox')});
</script>
    </body>
</html>