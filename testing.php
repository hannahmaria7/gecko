<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>


<style> table, th, td {
    border: 1px solid black;
}</style>
</head>
<body>
<?php
include ("detail.php"); 

$sql = "select event_id from event";
$result=$db->query($q);
$num_results = mysqli_num_rows($result);
echo "$num_results";

?>
<?php
include("detail.php");
$sql = "select event_id from event";
$result = $db->query($sql);

$num_results = mysqli_num_rows($result);

for($i=0; $i < $num_results; $i++)
{
$row = mysqli_fetch_assoc($result);
echo "<tr>";
echo "<td>".$row[size]."</td>";
echo "<td>".$row[class_name]."</td>";

</body>


</html>
