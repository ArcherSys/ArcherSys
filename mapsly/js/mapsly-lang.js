
Blockly.Blocks['document_gebid'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Get Element By ID");
    this.setOutput(true, "HTMLDIvElement");
    this.setColour(65);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.JavaScript['document_gebid'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'window.document.getElementById("map")';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};
Blockly.Blocks['mapsly_mapstats'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Create Map Information");
    this.appendValueInput("lat")
        .setCheck("Number")
        .appendField("Latitude");
    this.appendValueInput("lng")
        .setCheck("Number")
        .appendField("Longitude");
    this.appendValueInput("zoom")
        .setCheck("Number")
        .appendField("Zoom");
    this.setOutput(true, "Mapsly.MapStats");
    this.setColour(120);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.JavaScript['mapsly_mapstats'] = function(block) {
  var value_lat = Blockly.JavaScript.valueToCode(block, 'lat', Blockly.JavaScript.ORDER_ATOMIC);
  var value_lng = Blockly.JavaScript.valueToCode(block, 'lng', Blockly.JavaScript.ORDER_ATOMIC);
  var value_zoom = Blockly.JavaScript.valueToCode(block, 'zoom', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = 'new Mapsly.MapStats('+');';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};