<!DOCTYPE html>
<html>
<head>
	<title>Concatenacao de string</title>
</head>
<body>
<?php
// Primeira forma de concatenacao
$string1 = "Hello";
$string2 = "World";
$string = $string1. " " ."$string2<br>";
echo $string;
?>


<?php
// Segunda forma de concatenacao
$string = "Hello";
$string .= " world";
echo $string;
?>
</body>
</html>