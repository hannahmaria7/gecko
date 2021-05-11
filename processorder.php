<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	font-size: x-large;
}
</style>
</head>

<body>
<p>
<img alt="can't find it!" height="131" src="cheese.jpg" width="172" /><span class="auto-style1"> 
Lloyd Cheese Company</span></p>
<p>Order Results</p>
<?php
	echo '<p> Order processed. </p>';
	//create short variable names
$cheddarqty = $_POST['cheddarqty'];
$cashelqty= $_POST['cashelqty'];
$gubeenqty=$_POST['gubeenqty'];
$durrusqty=$_POST['durrusqty'];
define('cheddarprice',23.50);
define('cashelprice',45.75);
define('gubeenprice',36.50);
define('durrusprice',53.00);
if ($totalqty == 0)
{
echo '<font color = red>';
echo'You did not order anything on the previous page!<br/>;
echo '</font>';
}
else
{
echo '<p> Your order is as follows:'.
$cheddarqty. ' Montgomery Cheddar '.
$cashelqty.' Cashel Blue '.
$gubeenqty. ' Gubeen '.
$durrusqty.' Durrus <p>';
}
	?>
	
<?php
// Prints the day
echo date("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
?> 
</body>

</html>
