<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-ie" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Registration</title>
<style type="text/css">
.auto-style1 {
	margin-left: 50px;
}
.auto-style2 {
	margin-left: 101px;
}
</style>
</head>
<body>
<body>
<?php
// define variables and set to empty values
$nameErr = "";
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
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

<div class = "topnav">
	<img alt="Image not found!" height="103" src="jazz-dancer.jpg" width="149" /><a class="active" href = "homepage.html">Home</a>
    <a  href = "Register.html">Registration</a>
    <a  href = "classreg.php">Sign up for a class</a>
    <a  href = "create_event.html">Create an Event</a>
    <a  href = "table_display.php">Show Reports</a>
 <a  href = "sale.htm">Dancing Shoes for Sale</a>


<img alt="Image not Found" height="96" src="hiphopdance.png" width="136" /></div>
<br></br>



<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>

       


	Registration
	<table style="width: 100%">
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Year</td>
			<td><select name="year">
			<option>First Year</option>
			<option>Second Year</option>
			<option>Third Year</option>
			<option>Fourth Year</option>
			<option>Masters</option>
			<option>PHD</option>
			</select></td>
		</tr>
		<tr>
			<td>Faculty</td>
			<td><select name="faculty">
			<option>Engineering Maths and Science</option>
			<option>Arts, Humaities and Social Sciences</option>
			<option>Health Sciences</option>
			</select></td>
			
		</tr>
		<tr>
			<td>Email Address</td>
			<td><input name="email" type="text" /></td>
		</tr>
	</table>
	<input class="auto-style2" name="reset1" style="width: 121px" type="reset" value="reset" /><input class="auto-style1" name="submit1" style="width: 124px" type="submit" value="submit" /><br />
</form>
<?PHP
session_start();

include ("detail.php"); 

$name = $_POST['name'];
$no = $_SESSION['sess_var'];
$year = $_POST['year'];
$faculty = $_POST['faculty'];
$email = $_POST['email'];

 if  (!preg_match("/^[a-zA-Z ]*$/",$name)) {

$q  = "INSERT INTO Register (";
$q .= "name,student_no,year,email,faculty";
$q .= ") VALUES (";
$q .= "'$name','$no','$year','$email','$faculty')";

$result = $db->query($q);
echo $q;

}
?>


</body>

</html>
