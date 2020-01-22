<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Create Person Table</title>

<link href="phpstyle.css" rel="stylesheet" type="text/css">
</head>

<body> 
<div id="container">
Create a Persons Table
 
  <div id="PHPOutput">
<?php
include('MyDBFunctions.php');
#require '../connect_db.php';

$query = 
"CREATE TABLE Persons 
(
personID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(personID),
FirstName varchar(15),
LastName varchar(15),
Age int (4)
)";

  
    $result = mysqli_query($dbc, $query);


	if ($result) {
	    print ("<h1> Persons Table Creation Successful </h1> <br>");
	} else {
	    print ("<h1>Creation of Persons Table Failed </h1> <br>");
	};
	
?>

</div>
<p>&nbsp;</p>
</div>

<p><a href="main.htm">Back Home </a></p>
</body>
</html>
