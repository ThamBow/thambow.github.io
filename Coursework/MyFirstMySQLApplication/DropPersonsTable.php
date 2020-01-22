<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Drop Persons Table</title>

<link href="phpstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">

  <p><img src="drop.JPG"></p>
  <p>&nbsp;  </p>
  <div id="PHPOutput">
<?php
include('MyDBFunctions.php');

$query = 
"DROP TABLE Persons";

$result = mysqli_query($dbc, $query);

	if ($result) {
	    print ("<h1>Persons Table has been Dropped </h1> <br>");
	} else {
		print ("<h1>Persons Table has NOT been Dropped </h1> <br>");

	};
	
?>
</div>
<p>&nbsp;</p>
</div>
<p><a href="main.htm">Back Home </a></p>
</body>
</html>
