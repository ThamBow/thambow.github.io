 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Retrieve Persons Data</title>

<link href="phpstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
List of Comments from the Persons Table

<div id="PHPOutput">

<?php
include('MyDBFunctions.php');

$query = 
"SELECT * FROM Persons";

	$result = mysqli_query($dbc, $query);
	
	if ($result) {
	    print ("<h1> Persons Data has been retrieved </h1> <br>");
		/*OR INSERT BELOW PHP DATA HERE*/
	} else {
		print ("<h1> Persons Data could NOT be retrieved, try table creation first! </h1> <br>");

	};
?>

<?php
                                  /*                                 OR                                            */
    if ($result) {
		
	for ($i = 0; $i < mysqli_num_rows ($result); $i++) {
		
		$row = mysqli_fetch_row($result);
		 
		for($j = 0 ; $j < mysqli_num_fields($result); $j++) {
			
			echo($row[$j]);
			echo(" |  ");
		};
		echo("<br>");
	  }
	}//END IF
?>


</div>



<p>&nbsp;</p>
<p><a href="RetrievePersonsDatatoTable.php">Display this data in a table.</a>
</p>
<p>&nbsp;</p>
</div>
<p><a href="main.htm">Back Home </a></p>
</body>
</html>
