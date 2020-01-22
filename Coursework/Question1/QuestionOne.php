<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Question One</title>

<body>
<?php

if (!empty($_POST['num1']) ){
	
	$num1 =  $_POST['num1'];
	print "First Number: ". $num1." - ";
	
	if (!is_numeric($num1) ){
		$num1 = NULL; 
		echo'<strong>Please enter numeric value!</strong><br>';
		/* echo '<script type="text/javascript">history.back();</script>';  */
		}
	}
	else
	{
		$num1 = NULL; echo'<strong>Please enter value for first number!</strong><br>';
		}
		
		if (!empty($_POST['num2']) ){
	
	$num2 =  $_POST['num2'];
	print "Second Number: ". $num2." - ";
	
	if (!is_numeric($num2) ){
		
		$num2 = NULL;
		 echo'<strong>Please enter numeric value!</strong><br>';
		}
	}
	else
	{
		$num2 = NULL; echo'<strong>Please enter value for second number!</strong><br>';
		}
		
		
		function sum($var1, $var2)
    {
           $sum =  $var1 + $var2;
           return $sum;
       }
	   
	 

       $result = sum($num1,$num2);
	
		
		if(($num1 != NULL)&&($num2 != NULL)){
			
			
			
			echo "The total of the two numbers is ". $result."<br>";
			if($num1 > $num2){
				echo "Number ". $num1." is bigger<br>";
				}else{
					echo "Number ". $num2." is bigger<br>";
					}
			
				
			}
			
	?>
</body>
</html>
