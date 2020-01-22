 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Thamina</title>

<?php

require '../connect_db.php';

	$DBHOST="localhost";
	$DBUSER ="root";
	$DBPASSWORD ="";
	$DBDATABASE="site_db";

	$dbc = mysqli_connect($DBHOST , $DBUSER , $DBPASSWORD, $DBDATABASE)
		or die("cant talk to mysql");
	mysqli_select_db($dbc , $DBDATABASE)
		or die("cant connect to the database");

?>

</head>

<body>

</body>
</html>
