<!DOCTYPE html>
<html>
<head>
	<title>Arrray iniciado em um indice qualquer</title>
</head>
<body>
<?php 
// Criando um array com um indice qualquer
// o indice de um array tbm pode ser uma string
$numeros = array(1=>"um", "dois", "tres", "quatro");

foreach ($numeros as $key => $value) {
	echo "$key\n";
	echo "$value<br>";
}
print_r($numeros);
?>
</body>
</html>