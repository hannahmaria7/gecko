<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?PHP


include ("detail.php"); 
session_start();
$dance = $_POST['dance'];
$semester = $_POST['semester'];
$member=$_SESSION['sess_var'];
#$class_no=$_SESSION['sess_var2'];
$q  = "INSERT INTO Classreg (";
$q .= "class_name,semester,member_id";
$q .= ") VALUES (";
$q .= "'$dance','$semester','$member')";

$result = $db->query($q);
echo $q;

?>


</body>

</html>
