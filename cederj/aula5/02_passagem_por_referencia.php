<!DOCTYPE html>
<html>
<head>
	<title>Passagem de Parametros por referencia</title>
</head>
<body>
<?php
function dobro(&$var){
	$var = $var * 2;
}
$var1 = 5;
dobro($var1);
echo $var1. "<br>";

// funções para conversão:
// strval(nomeDaVariavel)
// intval(nomeDaVariavel)
// floatval(nomeDaVariavel)
// outro exemplo
$variavel = "4tro";
settype($variavel, "Integer");
var_dump($variavel);

?>
</body>
</html>