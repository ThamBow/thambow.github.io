<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Program to display square of numbers</title>
</head>

<body>
<?php
//Program to display square of numbers
$square = 0;
$num1 = $_POST["num1"];

if (!empty($_POST["num1"])){
	
	if(!is_numeric($num1) ){
		$num1 = NULL; echo'<strong>Please enter numeric value!</strong><br>';
		}
  for ($num = 1; $num <= $num1; $num++){

    $square = $num * $num;
    print"The square of $num is $square <br/>";
    }
}

else {
	echo "Please enter number";
	}
?>

</body>
</html>