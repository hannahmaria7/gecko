<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
session_start();
$_SESSION['sess_var']="Hello World";
echo 'The content of the $_SESSION[\'sess_var\'] is
'.$_SESSION['sess_var'].'<br/>';
?>
<a href="page2.php">Next Page </a>"
</body>

</html>
