<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Retrieve Guestbook Data to Table</title>

<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
Comments from the Guestbook:
  
    
    </p>
  <div id="PHPOutput">

<?php
include('MyDBFunctions.php');

$query = 
"SELECT * FROM Guestbook ";

	$result = mysqli_query($dbc, $query);
	
	if ($result) {
	    print ("<h1> Data has been retrieved </h1> <br>");
	} else {
		print ("<h1> Data could NOT be retrieved </h1> <br>");

	};
?>

<?php
if ($result) {
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Comments</th>
</tr>";

while($row = mysqli_fetch_array($result, 1))
  {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Comment'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
}//end if
?>
</div>



<p>&nbsp;</p>
</div>
<p><a href="main.htm">Back Home </a>
    

    

    

</p>
</body>
</html>
