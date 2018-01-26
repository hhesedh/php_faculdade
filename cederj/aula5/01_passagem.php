<!DOCTYPE html>
<html>
<head>
	<title>Passagem de parametros</title>
</head>
<body>
<?php
function soma($array){

	$soma = 0;
	
	for ($i=0; $i < sizeof($array); $i++) { 
		$soma += $array[$i];
	}

	echo $soma;
}

$numeros = array(10, 20, 30, 40, 50);
soma($numeros);

?>
</body>
</html>