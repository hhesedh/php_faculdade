<!DOCTYPE html>
<html>
<head>
	<title>Intervalo de Tempo</title>
</head>
<body>
<?php

$hoje = date("today");
$data = date("last saturday");
@$intervalo = (int) (($hoje - $data)/60)/60;
echo "O intervalo é: $intervalo";

?>
</body>
</html>