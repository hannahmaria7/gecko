<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-ie" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Dance Society</title>
<style type="text/css">
.auto-style1 {
	margin-top: 1px;
}
.auto-style2 {
	margin-left: 143px;
}
.auto-style3 {
	margin-left: 192px;
}
</style>
</head>

<body>
<?php
// define variables and set to empty values
$valid ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $valid = test_input($_POST["valid"]);}
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class = "topnav">
	<img alt="Image not found!" height="103" src="jazz-dancer.jpg" width="149" /><a class="active" href = "homepage.html">Home</a>
    <a  href = "Register.html">Registration</a>
    <a  href = "classreg.php">Sign up for a class</a>
    <a  href = "create_event.html">Create an Event</a>
    <a  href = "table_display.php">Show Reports</a>
 <a  href = "merch2.html">Merchandise</a>

<img alt="Image not Found" height="96" src="hiphopdance.png" width="136" /></div>
<br></br>

<h1>Dance Society</h1>
<p>
<img alt="Image not found!" class="auto-style1" height="144" src="dancer.jpg" width="110" /> 
Welcome to the dance society!</p>
<form action="member.php" method="post">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

	<table style="width: 100%">
		<tr>
			<td style="height: 26px">Could you please enter your student number 
			here?</td>
			<td style="height: 26px"><input name="valid" type="text" /><span class="error">* <?php echo $nameErr;?></span>
</td>
		</tr>
	</table>
	<input class="auto-style3" name="resethome" style="width: 225px" type="reset" value="reset" /><input class="auto-style2" name="submithome" style="width: 138px" type="submit" value="submit" /><br />
	</form>
	</form>

	</body>


</html>
