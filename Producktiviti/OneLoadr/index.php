<?php
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";
use ArcherSys\Viewer\Contrib\View;
$oneloadr = new View("OneLoadr",function(){
 ?>
<script type="text/javascript" src="https://js.live.net/v5.0/OneDrive.js" id="onedrive-js" client-id="000000004015B328"></script>

<?php
},function(){
?>

<script type="text/javascript">
window.onload = function() {
    var saverOptions = {
  file: "inputFile",
  fileName: 'file.txt',

  success: function(files) {
    // Handle returned file object(s)
    alert("You picked " + file.values[0].fileName);
  },

  progress: function(p) {
    // upload is progressing
  },
  cancel: function(){
    // upload was cancelled
  },
  error: function(e) {
    // an error occured
  }
};
 var pickerOptions = {
  success: function(files) {
    // Handle returned file object(s)
    alert("You picked " + file.values[0].fileName);
  },

  cancel: function() {
      // handle when the user cancels picking a file
  },

  linkType: "webViewLink", // or "downloadLink",
  multiSelect: false // or true
};
    var pickerButton = OneDrive.createOpenButton(pickerOptions);
    document.getElementById("picker").appendChild(pickerButton);
    var saverButton = OneDrive.createSaveButton(saverOptions);
    document.getElementById("save").appendChild(saverButton);
}
</script>

<input id="inputFile" name="file" type="file" />
<div id="save"></div>

<div id="picker"></div>
<?php

});