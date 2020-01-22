<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Delete Datat</title>

<link href="phpstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">

  <p><img src="deletedata.JPG"></p>
  <p>&nbsp;
    
    </p>
  <div id="PHPOutput">
<?php
include('MyDBFunctions.php');

$query = 

"DELETE FROM Persons WHERE LastName='Dubs'";

$result = mysqli_query($dbc, $query);

	if ($result) {
	    print ("<h1> Data has been Deleted </h1> <br>");
	} else {
		print ("<h1> Table has NOT been Deleted</h1> <br>");
		echo '<p>' . mysqli_error($dbc) . '</p>';

	};
	
?>

</div>
<p>&nbsp;</p>
</div>
<p><a href="main.htm">Back Home </a></p>
<p>&nbsp;</p>
</body>
</html>
