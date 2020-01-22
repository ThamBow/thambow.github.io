<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$marks = array(1,5, 12, 45, 32, 2, 32);
$total = 0;

for($i=0; $i < 7; $i++)
{
echo "$marks[$i]<br/>";
$total = $total + $marks[$i];
}

$average = $total / 7;
echo "$average<br/>";
?>

</body>
</html>