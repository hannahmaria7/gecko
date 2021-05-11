<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
// define variables and set to empty values
$valid= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid = test_input($_POST["valid"]);
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  
  
}
?>
<?php
// define variables and set to empty values
$validErr =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["valid"])) {
    $validErr = "Student Number is required";
  } else {
    $valid = test_input($_POST["valid"]);
   if (!preg_match("/^[0-9]*$/",$valid)) {
  $validErr = "Only numbers allowed";
}
  }
  }
  ?>
</body>

</html>
