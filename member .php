<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
include ("detail.php"); 
$valid = $_POST['valid'];
$q="SELECT student_no FROM Register WHERE student_no = '$valid'";
$result=$db->query($q);
$num_results=mysqli_num_rows ($result);
if($num_results>0){
echo '
<script language="javascript">

document.location.replace("classreg.html");

</script>';
}
else {echo '<script language="javascript">

document.location.replace("Register.html");

</script>';
}
?>
</body>

</html>
