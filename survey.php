<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 2</title>
</head>

<body>
<?PHP
session_start();

include ("detail.php"); 

$name = $_POST['name'];
$no = $_SESSION['sess_var'];
$year = $_POST['year'];
$faculty = $_POST['faculty'];
$email = $_POST['email'];


$q  = "INSERT INTO Register (";
$q .= "name,student_no,year,email,faculty";
$q .= ") VALUES (";
$q .= "'$name','$no','$year','$email','$faculty')";

$result = $db->query($q);
echo $q;


?>

<script language="javascript">

document.location.replace("classreg.php");

</script>

<!--<script language="javascript">	

	document.location.replace("thankYou.htm");

</script>
-->
</body>

</html>
