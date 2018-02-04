<!DOCTYPE html>
<html>
<head>
	<title>Datas e horarios</title>
</head>
<body>
<?php

$timestamp = date( "d/m/Y");
echo "$timestamp";
echo "<br>";
// formatos
$timestamp = strtotime("today");
echo "$timestamp";
echo "<br>";

$timestamp = strtotime("now+24hours");
echo "<br>";

// Outros formatos
$data = strtotime("last saturday");
echo "$data";
echo "<br>";

$data = strtotime("8pm + 3 days");
echo "$data";
echo "<br>";

$data = strtotime("next year gmt");
echo "$data";
echo "<br>";

$data = strtotime("this 4am");
echo "$data";
echo "<br>";

$data = strtotime("2 weeks ago");
echo "$data";
echo "<br>";
?>
</body>
</html>