<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="en-ie" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Class Registration</title>
<style type="text/css">
.auto-style1 {
	margin-left: 247px;
}
.auto-style2 {
	margin-left: 149px;
}
</style>
</head>

<body>
<div class = "topnav">
	<img alt="Image not found!" height="103" src="jazz-dancer.jpg" width="149" /><a class="active" href = "homepage.html">Home</a>
    <a  href = "Register.html">Registration</a>
    <a  href = "classreg.php">Sign up for a class</a>
     <a  href = "create_event.html">Create an Event</a>
    <a  href = "table_display.php">Show Reports</a>
 <a  href = "sale.htm">Dancing Shoes for Sale</a>


	<img alt="Image not Found" height="97" src="hiphopdance.png" width="157" /></div>
<br></br>

<h1>Class Registration</h1>
<form action="class.php" method="post">
<?PHP
include ("detail.php");
$q="SELECT DISTINCT class_name,event_id FROM events";
$result=mysqli_query($db, $q) or die ("query didn't work");
?>


	<table style="width: 100%">
		<tr>
			<td>Class</td>
			<td><select name="dance" style="width: 97px">
			<?PHP
			while($row = mysqli_fetch_assoc($result))
			{
			extract($row);
			echo "<option value='$class_name$event_id'&>$class_name$event_id</option>\n";
			}
			?>
			</select></td>
		</tr>
		<tr>
			<td style="height: 23px">Semester</td>
			<td style="height: 23px">
			<select name="semester" style="width: 96px">
			<option>Semester 1</option>
			<option>Semester 2</option>
			</select></td>
		</tr>
		</table>
	<br />
	<input class="auto-style2" name="resetclass" style="width: 163px" type="reset" value="reset" /><input class="auto-style1" name="submitclass" style="width: 189px" type="submit" value="submit" /></form>

</body>

</html>
