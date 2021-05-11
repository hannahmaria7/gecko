<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$validErr = "";
$valid = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["valid"])) {
    $validErr = "Name is required";
  } else {
    $valid = test_input($_POST["valid"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[0-9]*$/',$valid)) {
      $validErr = "Only letters and white space allowed";
    }
  }
  
 
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="valid">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
     <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $valid;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
<script language="javascript">	

	document.location.replace("thankYou.htm");

</script>

</body>

</html>
