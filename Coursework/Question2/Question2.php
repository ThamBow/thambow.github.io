<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Question 2</title>
</head>

<body>



Your first number was <?php echo $_POST["num1"]; if ($_POST['num1'] == ""){$_POST['num1'] = filter_var($_POST['num1'], FILTER_SANITIZE_STRING);exit( " <strong> - Please enter first number</strong>");}else if(!is_numeric($_POST['num1'])){exit(" <strong> -Enter first number in number form!</strong>");}?>.<br />

Your second number was <?php echo $_POST["num2"];if ($_POST['num2'] == ""){$_POST['num2'] = filter_var($_POST['num2'], FILTER_SANITIZE_STRING);exit(" <strong> - Please enter second number</strong>");}else if(!is_numeric($_POST['num2'])){exit(" <strong> - Enter second number in number form!</strong>");}?>.<br />

Your third number was <?php echo $_POST["num3"]; if ($_POST['num3'] == ""){$_POST['num3'] = filter_var($_POST['num3'], FILTER_SANITIZE_STRING);exit (" <strong> - Please enter number</strong>");}else if(!is_numeric($_POST['num3'])){exit(" <strong> - Enter third number in number form!</strong>");}?>.<br />

<?php

if (!empty ($_POST["num1"]) && !empty ($_POST["num2"]) && !empty ($_POST["num3"])){

if ($_POST["num1"] > $_POST["num2"])
{
	
	$temp = $_POST["num2"];       
	
	$_POST["num2"] = $_POST["num1"];
	
	$_POST["num1"] = $temp;
}
	
if ($_POST["num2"] > $_POST["num3"])
{

    $temp = $_POST["num3"];
	
	$_POST["num3"] = $_POST["num2"];
	
	$_POST["num2"] = $temp;
}

if ($_POST["num1"] > $_POST["num2"])
{
	
	$temp = $_POST["num2"];
	
	$_POST["num2"] = $_POST["num1"];
	
	$_POST["num1"] = $temp;
}

}

else 

{
	echo "<h2>Please enter numeric details</h2>";}
	?>

</br></br>



The smallest number was <?php echo $_POST["num1"]; ?>.<br />

The middle number was <?php echo $_POST["num2"]; ?>.<br />

The largest number was <?php echo $_POST["num3"]; ?>.<br />







</body>
</html>