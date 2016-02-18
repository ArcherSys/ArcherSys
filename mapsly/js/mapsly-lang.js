
Blockly.Blocks['document_gebid'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Get Element By ID");
    this.setOutput(true, "HTMLDivElement");
    this.setColour(65);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.Blocks['new_polyline'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Create a line");
    this.appendValueInput("LSpecs")
        .setCheck("Mapsly.LineProperties")
        .appendField("Line Specifications");
    this.setOutput(true, "google.maps.Polyline");
    this.setColour(20);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.JavaScript['new_polyline'] = function(block) {
  var value_lspecs = Blockly.JavaScript.valueToCode(block, 'LSpecs', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = 'new google.maps.Polyline('+value_lspecs+')';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NEW];
};
Blockly.Blocks['mapsly_polyline_settings'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Prep a Line");
    this.appendValueInput("path")
        .setCheck("Array")
        .appendField("Path List");
    this.appendValueInput("geodesic")
        .setCheck("Boolean")
        .appendField("Geodesic?");
    this.appendValueInput("strokeColor")
        .setCheck("Colour")
        .appendField("Stroke Color");
    this.appendValueInput("strokeOpacity")
        .setCheck("Number")
        .appendField("Opacity");
    this.appendValueInput("strokeWeight")
        .setCheck("Number")
        .appendField("Stroke Weight");
    this.setInputsInline(true);
    this.setColour(20);
    this.setOutput(true,'Mapsly.LineProperties')
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.JavaScript['mapsly_polyline_settings'] = function(block) {
  var value_path = Blockly.JavaScript.valueToCode(block, 'path', Blockly.JavaScript.ORDER_ATOMIC);
  var value_geodesic = Blockly.JavaScript.valueToCode(block, 'geodesic', Blockly.JavaScript.ORDER_ATOMIC);
  var value_strokecolor = Blockly.JavaScript.valueToCode(block, 'strokeColor', Blockly.JavaScript.ORDER_ATOMIC);
  var value_strokeopacity = Blockly.JavaScript.valueToCode(block, 'strokeOpacity', Blockly.JavaScript.ORDER_ATOMIC);
  var value_strokeweight = Blockly.JavaScript.valueToCode(block, 'strokeWeight', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = 'new Mapsly.LineProperties('+value_path+','+value_geodesic+','+value_strokecolor+','+value_strokeopacity+','+value_strokeweight+')';
  return code;
};
Blockly.Blocks['infowindow_open'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Open ")
        .appendField(new Blockly.FieldVariable("infowindow"), "INFOWINDOW");
    this.appendValueInput("Map")
        .setCheck("google.maps.Map")
        .appendField("Google Map");
    this.appendValueInput("MARKER")
        .setCheck("google.maps.Marker")
        .appendField("Marker");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(120);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.JavaScript['infowindow_open'] = function(block) {
  var variable_infowindow = Blockly.JavaScript.variableDB_.getName(block.getFieldValue('INFOWINDOW'), Blockly.Variables.NAME_TYPE);
  var value_map = Blockly.JavaScript.valueToCode(block, 'Map', Blockly.JavaScript.ORDER_ATOMIC);
  var value_marker = Blockly.JavaScript.valueToCode(block, 'MARKER', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = variable_infowindow+'.open('+value_map+','+value_marker+')';
  return code;
};
Blockly.Blocks['mapsly_contentbucket'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("HTML Content");
    this.appendValueInput("content")
        .setCheck("String")
        .appendField("HTML Content");
    this.setOutput(true, "Mapsly.ContentBucket");
    this.setColour(20);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.Blocks['new_infowindow'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Create Info Window");
    this.appendValueInput("CB")
        .setCheck("Mapsly.ContentBucket")
        .appendField("ContentBucket");
    this.setTooltip('');
    this.setOutput(true,"google.maps.InfoWindow");
    this.setColour(285);
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.JavaScript['new_infowindow'] = function(block) {
  var value_cb = Blockly.JavaScript.valueToCode(block, 'CB', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = 'new google.maps.InfoWindow('+value_cb+')';
  return code;
};
Blockly.JavaScript['mapsly_contentbucket'] = function(block) {
  var value_content = Blockly.JavaScript.valueToCode(block, 'content', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = 'new Mapsly.ContentBucket('+value_content+')';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NEW];
};

Blockly.JavaScript['document_gebid'] = function(block) {
  // TODO: Assemble JavaScript into code variable.
  var code = 'window.document.getElementById("map")';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NONE];
};
Blockly.Blocks['mapsly_geopoint'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("new GeoPoint");
    this.appendValueInput("LAT")
        .setCheck("Number")
        .appendField("Latitude:");
    this.appendValueInput("LNG")
        .setCheck("Number")
        .appendField("Longitude:");
    this.setOutput(true, "Mapsly.GeoPoint");
    this.setColour(160);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.Blocks['marker_addlistener'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Add Event Handler for Marker");
    this.appendValueInput("Marker")
        .setCheck("google.maps.Marker")
        .appendField("Marker");
    this.appendDummyInput()
        .appendField(new Blockly.FieldDropdown([["click", "click"],["dblclick","dblclick"],["mouseup","mouseup"],["mousedown","mousedown"],["mouseover","mouseover"],["mouseout","mouseout"]]), "EventType");
    this.appendStatementInput("code")
        .appendField("Code for Marker Event");
    this.setPreviousStatement(true);
    this.setNextStatement(true);
    this.setColour(120);
    this.setTooltip('');
    this.setHelpUrl('http://www.example.com/');
  }
};
Blockly.JavaScript['marker_addlistener'] = function(block) {
  var value_marker = Blockly.JavaScript.valueToCode(block, 'Marker', Blockly.JavaScript.ORDER_ATOMIC);
  var dropdown_eventtype = block.getFieldValue('EventType');
  var statements_code = Blockly.JavaScript.statementToCode(block, 'code');
  // TODO: Assemble JavaScript into code variable.
  var code = value_marker+'.addListener("'+dropdown_eventtype+'",function(){'+statements_code+'})';
  return code;
};

Blockly.JavaScript['mapsly_geopoint'] = function(block) {
  var value_lat = Blockly.JavaScript.valueToCode(block, 'LAT', Blockly.JavaScript.ORDER_ATOMIC);
  var value_lng = Blockly.JavaScript.valueToCode(block, 'LNG', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
 var code = 'new Mapsly.GeoPoint('+value_lat+','+value_lng+')';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NEW];
};
Blockly.Blocks['create_marker'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Create Map Marker");
    this.appendValueInput("MARKERINFO")
        .setCheck("Mapsly.MarkerSettings")
        .appendField("Marker Information");
    this.setOutput(true, "google.maps.Marker");
    this.setColour(255);
    this.setTooltip('Creates a new Marker');
    this.setHelpUrl('https://developers.google.com/maps/documentation/javascript/markers#add');
  }
};
Blockly.JavaScript['create_marker'] = function(block) {
  var value_markerinfo = Blockly.JavaScript.valueToCode(block, 'MARKERINFO', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = 'new google.maps.Marker('+value_markerinfo+')';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NEW];
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
  var code = 'new Mapsly.MapStats('+value_lat+','+value_lng+','+value_zoom+')';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NEW];
};
Blockly.Blocks['new_map'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Create Map");
    this.appendValueInput("document")
        .setCheck("HTMLDivElement")
        .appendField("Map Element");
    this.appendValueInput("mapstats")
        .setCheck("Mapsly.MapStats")
        .appendField("Map Information");
    this.setOutput(true, "google.maps.Map");
    this.setColour(290);
    this.itemCount_ = 0;
    this.setTooltip('Creates a Google map on the screen provided');
    this.setHelpUrl('https://developers.google.com/maps/documentation/javascript/3.exp/reference#Map');
  },
  mutationToDom: function(){
    var container = window.document.createElement("mutation");
  }
};
Blockly.JavaScript['new_map'] = function(block) {
  var value_document = Blockly.JavaScript.valueToCode(block, 'document', Blockly.JavaScript.ORDER_ATOMIC);
  var value_mapstats = Blockly.JavaScript.valueToCode(block, 'mapstats', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = 'new google.maps.Map('+value_document +','+value_mapstats+')';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NEW];
};
Blockly.Blocks['mapsly_markerinfo'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Marker Information");
    this.appendValueInput("map")
        .setCheck("google.maps.Map")
        .appendField("Map");
    this.appendValueInput("position")
        .setCheck("Mapsly.GeoPoint")
        .appendField("Coordinates");
    this.appendValueInput("title")
        .setCheck("String")
        .appendField("Title");
    this.setOutput(true, "Mapsly.MarkerSettings");
    this.setColour(210);
    this.setTooltip('Creates an object using a constructor that configures the markers on the map.');
    this.setHelpUrl('https://developers.google.com/maps/documentation/javascript/markers#add');
  }
};
Blockly.JavaScript['mapsly_markerinfo'] = function(block) {
  var value_map = Blockly.JavaScript.valueToCode(block, 'map', Blockly.JavaScript.ORDER_ATOMIC);
  var value_position = Blockly.JavaScript.valueToCode(block, 'position', Blockly.JavaScript.ORDER_ATOMIC);
  var value_title = Blockly.JavaScript.valueToCode(block, 'title', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = 'new Mapsly.MarkerSettings('+value_map+','+value_position+','+value_title+')';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NEW];
};
Blockly.Blocks['mapsly_markerinfodraggable'] = {
  init: function() {
    this.appendDummyInput()
        .appendField("Marker Information");
    this.appendValueInput("map")
        .setCheck("google.maps.Map")
        .appendField("Map");
    this.appendValueInput("position")
        .setCheck("Mapsly.GeoPoint")
        .appendField("Coordinates");
    this.appendValueInput("title")
        .setCheck("String")
        .appendField("Title");
    this.setOutput(true, "Mapsly.MarkerSettingsDraggable");
    this.setColour(210);
    this.setTooltip('Creates an object using a constructor that configures the markers on the map.');
    this.setHelpUrl('https://developers.google.com/maps/documentation/javascript/markers#add');
  }
};
Blockly.JavaScript['mapsly_markerinfodraggable'] = function(block) {
  var value_map = Blockly.JavaScript.valueToCode(block, 'map', Blockly.JavaScript.ORDER_ATOMIC);
  var value_position = Blockly.JavaScript.valueToCode(block, 'position', Blockly.JavaScript.ORDER_ATOMIC);
  var value_title = Blockly.JavaScript.valueToCode(block, 'title', Blockly.JavaScript.ORDER_ATOMIC);
  // TODO: Assemble JavaScript into code variable.
  var code = 'new Mapsly.MarkerSettingsDraggable('+value_map+','+value_position+','+value_title+')';
  // TODO: Change ORDER_NONE to the correct strength.
  return [code, Blockly.JavaScript.ORDER_NEW];
};