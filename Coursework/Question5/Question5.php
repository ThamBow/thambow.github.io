<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Question 5</title>
</head>

<body>
<?php

if (!empty($_POST['fact']) && ($_POST['fact'] <= 20)){
//Program to display factorial of numbers
$total = 1;

       if(!is_numeric($_POST['fact']) ){echo"Please enter numbers only";} else {//Note this is a nested conditional if else

          for ($factorial = $_POST['fact']; $factorial > 0; $factorial--){  //Whatever is input is greater than zero, and is reduced by one every time.

                  print"$factorial <br/>"; //Displays process ie The break tag counting down.
				  
                  $total = $factorial * $total;  //The total is whatever is input multiplied by a lesser than one number every time.
                                                }//End for loop
                print"The total value is $total <br/>";  // This displays the result.
	       
		   }//End Nested Else
		   
         }//End Nested if.
		 
      else if ($_POST['fact'] > 20){
	
	echo"Please enter number less than 20";}

else{
	echo"Please enter number!";
	}
	
?>

</body>
</html>