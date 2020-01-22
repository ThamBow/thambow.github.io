<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
 <title>Age Application</title>
 <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<form action="age1.php" method="get"> 
<p>Please enter your date of birth in the following format:</p>
<p>Enter day number: <input name="day" type="text" /></p>
<p>Enter month number: <input name="month" type="text" /></p>
<p>Enter four digit year: <input name="year" type="text" /></p>
<input  type="submit" value="Send" />
</form>

<?

$day = $_GET["day"];
$month = $_GET["month"];
$year = $_GET["year"];

if($day!="" && $month!="" && year!="" && is_numeric($day) && is_numeric($month) && is_numeric($year))
{

if($month < date("n")){
  $age = (date("Y") - $year);
}else if($month == date("n") && $day <= date("j")){
  $age = (date("Y") - $year);
  }else{
    $age = (date("Y") - $year) - 1;
  }
	
print('<p style="font-family: Arial, Helvetica, sans-serif;font-size: 18px;font-weight: bold;color: #000000;background-color: #9999FF;width: 350px"><br />Congratulations! You are: '.$age.' years old.</p>');
}

?>

</body>
</html>


