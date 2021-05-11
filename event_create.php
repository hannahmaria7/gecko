<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?PHP


include ("detail.php"); 

$classname = $_POST['classname'];
$instructor=$_POST['instructor'];

$q  = "INSERT INTO events (";
$q .= "class_name,instructor";
$q .= ") VALUES (";
$q .= "'$classname','$instructor')";

$result = $db->query($q);
echo $q;


?>

</body>

</html>
