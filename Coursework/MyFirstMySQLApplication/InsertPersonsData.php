<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Insert Persons Data</title>

<link href="phpstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">

  <p><img src="Insert.JPG"></p>

    
    </p>
  <div id="PHPOutput">
<?php
include('MyDBFunctions.php');

$query = 
"INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

   $result = mysqli_query($dbc, $query);

	if ( $result) {
	    print ("<h1> Data has been inserted </h1> <br>");
	} else {
		print ("<h1> Table has NOT been inserted </h1> <br>");

	};
	
?>

</div>

</div>
<p><a href="main.htm">Back Home </a></p>
</body>
</html>
