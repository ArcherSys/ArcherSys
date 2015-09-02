<!DOCTYPE HTML>
<<<<<<< HEAD
<html>
    <head>
        <title>Produckiviti 3.8</title>
        <link rel="stylesheet" href="stylesheet.css">
		<script src="/core/js/jquery.js"></script>
		<script src="/core/js/archersysos.js"></script>
		<script src="/Malaika/mespeak.js"></script>
		<script src="/Malaika/malaika.js"></script>
		<script src="malaika.juicyboard.js"></script>
   <script>
		ArcherSysOS.$(function(){
		 Malaika.speak(["I'll "],[2],["en/en-us"],140);
Malaika.speakTime(1000,["give you"],[2],["en/en-us"],90);
			Malaika.speakTime(2000,["some instructions "],[2],["en/en-us"],100);
				Malaika.speakTime(3000,[" on how to make a board "],[2],["en/en-us"],89);
			Malaika.speakTime(5000,["Ready?"],[2],["en/en-us"],100);
			window.setTimeout(function(){
              var ready = confirm("Allow me (Malaika) to access your daily juicyboard?");
			},6000);
						Malaika.speakTime(7000,["First,..."],[2],["en/en-us"],100);
			Malaika.JuicyBoard.focusSpeakTime(["Type a board name in the jbname field"],["en/en-us"],[2],80,".jbname",9000);
		});
		</script>
	</head>
    <body>
        <div class="producktiviti-container">
			<div class="producktiviti-header"><h1>Welcome to Producktiviti</h1>
			
			</div>
			<div class="producktiviti-apps-installed">
				<ul class="apps-list-installed">
					<li><a href="PDFLint">PDFLint</a></li>
					<li>SilverTick</li>
					<li>CyberLexWeb</li>
					<li>CanvasShoppe</li>
				</ul>
			</div>
			<div class="producktiviti-content">
				
				
						<form name="juicyboardgen" spellcheck="true">
				<input type="text" class="jbname" name="jbname" onfocus="console.log('[ArcherSysOS]:Juicy Board Name = Subject');" placeholder="Juicy Board Name Here" class="boardname" required autocomplete="on">
							<input type="week" class="weekfor">
							
				</form>
			
				<div class="juiceboard"></div>
				<blockquote>My Favorite Quote Here</blockquote></div>
		</div>
        
        

        
        
        
        

        
        
    </body>
</html>

]
=======

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
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
