<?
	session_start();
	$_SESSION['login']="failed";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Authentication Using Session Variables</title>
</head>

<body>

<form action="login.php" method="post">
<p>Please enter password:</p>
<p><input name="enter" type="text" /></p>
<input  type="submit" value="Send" />
</form>

<p>
  <?

    if($_POST['enter']=="mypassword"){
    	
    	$_SESSION[login]="ok";
    	
    }
	
	else{
 		$_SESSION[login]="wrong";}
  
 
?>
</p>
<p><a href="logintest.php">Test Page</a></p>
</body>
</html>
