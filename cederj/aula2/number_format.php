<!DOCTYPE html>
<html>
<head>
	<title>Formatação de precos</title>
</head>
<body>
<?php 

$preco = 25000;
$fpreco = number_format($preco);
echo "$fpreco<br>";
?>
</body>
</html>