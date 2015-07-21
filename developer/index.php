<!DOCTYPE HTML>
<html>

<head>
<title>Intellide</title>

<link rel="stylesheet" type="text/css" href="css/stylesheet.css">



</head>
<body>
<div id="editor"></div>
<div class="intellide-controlset"><select id="intellide-mode"></div></div>
<script src="ace-builds/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script>
var textEditor = ace.edit("editor");
textEditor.setTheme("ace/theme/monokai");
    
textEditor.getSession().setMode("ace/mode/javascript");
</script>
</body>
</html>