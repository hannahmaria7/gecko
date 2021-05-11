<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style4 {
	border-style: solid;
	border-width: 1px;
	text-align: left;
}
.auto-style5 {
	border-width: 0px;
}
.auto-style6 {
	border-style: solid;
	border-width: 1px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: x-large;
	text-align: left;
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

<img alt="Image not Found" height="96" src="hiphopdance.png" width="136" /></div>
<br></br>


<body>
<h1>Registered Students</h1>
<table style="width: 90%" id="table" class="auto-style5">
<tr>
<th style="height: 24px" class="auto-style4">ID</th>
<th style="height: 24px" class="auto-style6">Student Number</th>
<th class="auto-style6" style="height: 24px">Name</th>
<th class="auto-style6" style="height: 24px">Year in College</th>
<th class="auto-style6" style="height: 24px">Faculty</th>
<th class="auto-style6" style="height: 24px">Email</th>
</tr>
<?php
include("detail.php");
$sql = "select * from Register";
$result = $db->query($sql);

$num_results = mysqli_num_rows($result);

for($i=0; $i < $num_results; $i++)
{
$row = mysqli_fetch_assoc($result);
echo "<tr>";
echo "<td>".$row[id]."</td>";
echo "<td>".$row[student_no]."</td>";
echo "<td>".$row[name]."</td>";
echo "<td>".$row[year]."</td>";
echo "<td>".$row[faculty]."</td>";
echo "<td>".$row[email]."</td>";
echo "</tr>";
}
mysqli_close($db);
?>

</table>

<h1>Class Sign-Ups</h1>
<table style="width: 90%" id="table" class="auto-style5">
<tr>
<th style="height: 24px" class="auto-style6">Class Name</th>
<th style="height: 24px" class="auto-style6">Semester</th>
<th class="auto-style6" style="height: 24px">Student Number</th>
</tr>
<?php
include("detail.php");
$sql = "select * from Classreg";
$result = $db->query($sql);

$num_results = mysqli_num_rows($result);

for($i=0; $i < $num_results; $i++)
{
$row = mysqli_fetch_assoc($result);
echo "<tr>";
echo "<td>".$row[class_name]."</td>";
echo "<td>".$row[semester]."</td>";
echo "<td>".$row[member_id]."</td>";
echo "</tr>";
}
mysqli_close($db);
?>

</table>


<h1>Classes Available</h1>
<table style="width: 90%" id="table" class="auto-style5">
<tr>
<th style="height: 24px" class="auto-style6">Class ID</th>
<th style="height: 24px" class="auto-style6">Class_Name</th>
<th style="height: 24px" class="auto-style6">Instructor</th>

</tr>
<?php
include("detail.php");
$sql = "select * from events";
$result = $db->query($sql);

$num_results = mysqli_num_rows($result);

for($i=0; $i < $num_results; $i++)
{
$row = mysqli_fetch_assoc($result);
echo "<tr>";
echo "<td>".$row[event_id]."</td>";
echo "<td>".$row[class_name]."</td>";
echo "<td>".$row[instructor]."</td>";

echo "</tr>";
}
mysqli_close($db);
?>
</table>
<h1>Class Sizes</h1>
<table style="width: 90%" id="table" class="auto-style5">
<tr>
<th style="height: 24px; width: 362px;" class="auto-style4">Class Size</th>
<th style="height: 24px" class="auto-style6">Class Name</th>


</tr>
<?php
include("detail.php");
$sql = "select distinct COUNT(member_id) as size, class_name from Classreg group by class_name";
$result = $db->query($sql);

$num_results = mysqli_num_rows($result);

for($i=0; $i < $num_results; $i++)
{
$row = mysqli_fetch_assoc($result);
echo "<tr>";
echo "<td>".$row[size]."</td>";
echo "<td>".$row[class_name]."</td>";

echo "</tr>";
}
mysqli_close($db);
?>

</table>
<h1>Registered Students who have signed up for a Class</h1>
<table style="width: 90%" id="table" class="auto-style5">
<tr>
<th style="height: 24px; width: 362px;" class="auto-style4">Name</th>
<th style="height: 24px" class="auto-style6">Faculty</th>


</tr>
<?php
include("detail.php");
$sql = "select name,faculty from Register RIGHT JOIN Classreg on student_no=member_id;";
$result = $db->query($sql);

$num_results = mysqli_num_rows($result);

for($i=0; $i < $num_results; $i++)
{
$row = mysqli_fetch_assoc($result);
echo "<tr>";
echo "<td>".$row[name]."</td>";
echo "<td>".$row[faculty]."</td>";

echo "</tr>";
}
mysqli_close($db);
?>

</table>

<h1>Registered Students who have signed up for Jazz 15</h1>
<table style="width: 90%" id="table" class="auto-style5">
<tr>
<th style="height: 24px; width: 362px;" class="auto-style4">Name</th>


</tr>
<?php
include("detail.php");
$sql = "SELECT name from Register where student_no=(select member_id from Classreg where class_name='Jazz15');";
$result = $db->query($sql);

$num_results = mysqli_num_rows($result);

for($i=0; $i < $num_results; $i++)
{
$row = mysqli_fetch_assoc($result);
echo "<tr>";
echo "<td>".$row[name]."</td>";

echo "</tr>";
}
mysqli_close($db);
?>

</table>


<p>&nbsp;</p>
<p>&nbsp;</p>

</body>

</html>
