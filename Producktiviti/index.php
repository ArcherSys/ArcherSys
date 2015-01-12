<!DOCTYPE HTML>

<html>
<head>
  
<script src="//cdnjs.cloudflare.com/ajax/libs/dropbox.js/0.10.2/dropbox.min.js">
</script>

  <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
  
<script src="/core/js/jquery.js"></script>
 
<script src="/core/js/dropzone.js"></script>
 <link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>

  
<script>
 
  var client = new Dropbox.Client({ key: "brwekpcno93vtpz" });

  client.authenticate(function(error, client) {
 
 client.getAccountInfo(function(error, accountInfo) {
  

   $(".dropbox-app").append("<li class=\"prop\">"+ accountInfo.name + "</li>");
  
 $(".dropbox-app").append("<li class=\"prop\">"+ accountInfo.email + "</li>");
   
$(".dropbox-app").append("<li class=\"prop\">"+ accountInfo.countryCode + "</li>");
 
  client.readdir("/", function(error, entries) {
     
 
 $(".filebar").append("Your Dropbox contains " + entries.join(", "));
});
});
});


Dropzone.options.fileLoader = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  accept: function(file, done) {
    
  }
};</script>
</head>
<body>
  <ul class="dropbox-app"></ul>
  <div class="filebar"></div><div class="dropbox-main"><form action="/file-upload" id="fileloader" class="dropzone">
  <div class="fallback">
    <input name="file" type="file" multiple />
  </div>
</form></div>
</body>
</html>