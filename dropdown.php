<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
include ("detail.php"); 

$classname = $_POST['classname'];

 $q = "select class_name from Event";
  $result=$db->query($q);
$num_results=mysqli_num_rows ($result);

?>


<form>
  <select>
     <?php
       while ($row = $num_results->fetch_assoc()) 
       {
         echo '<option value=" '.$row['class_name'].' ">' </option>';
       }
    ?>
  </select>
  </form>
</body>

</html>
