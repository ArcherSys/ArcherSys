<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<style>
*{margin:0;padding:0}
html, body {height:100%;width:100%;overflow:hidden}
table {height:100%;width:100%;table-layout:static;border-collapse:collapse}
iframe {height:100%;width:100%}
.content {height:100%}
</style>
</head>
<body>
<table>
  <tr><td class="content">
      <iframe src="<?php echo substr_replace('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], "", -6);?>wp-admin/admin.php?page=wpclod_iframe" frameborder="0"></iframe></td></tr>
</table>
</body>
</html>