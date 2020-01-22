<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Question 3</title>
</head>

<body>

Your name is <?php echo $_POST["name"]; if ($_POST['name'] == ""){$_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);exit (" <strong> - Please enter name</strong>");}else if(is_numeric($_POST['name'])){exit(" <strong> - That cannot be a name, no numbers!</strong>");}?>.<br />

Your surname is <?php echo $_POST["sur"]; if ($_POST['sur'] == ""){$_POST['sur'] = filter_var($_POST['sur'], FILTER_SANITIZE_STRING);exit(" <strong> - Please enter surname</strong>");}else if(is_numeric($_POST['sur'])){exit(" <strong> - That is not be a surname, no numbers!</strong>");}?>.<br />

Your Age is <?php echo $_POST["age"]; if ($_POST['age'] == ""){$_POST['age'] = filter_var($_POST['age'], FILTER_SANITIZE_STRING);exit (" <strong> - Please enter your age</strong>");}else if(!is_numeric($_POST['age'])){exit(" <strong> - Age should be in number format!</strong>");}?>.<br />


<?php

if (!empty ($_POST["name"]) && !empty ($_POST["sur"]) && !empty ($_POST["age"])){
	
if (($_POST["age"] >= 18) && ($_POST["age"] <= 30))
{
print  "You <strong>may</strong> proceed - Sign in for this holiday.";
}
else 
{
	print "You are <strong>Not</strong> eligible - Only 18 - 30 year olds.";	
}

}

else 

{
	echo "<h2>Please enter correct details</h2>";}
	?>

</body>
</html>