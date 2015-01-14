$(function(){
  $.load("http://localhost/Producktiviti/PDFLint/new.php",function(data){
      $("#pdflint-viewer-app").append(data);
      });
});