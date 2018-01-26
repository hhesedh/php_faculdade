<?php 
// Para utilizar assagem de valor por referencia
// na função, basta adicionar o & na frente do argumento
function trocaValor(&$b){
	$b += 50;
}

$a = 10;

echo "O valor da variavel \$a sem estar modificado é: $a.";
echo "<br>";

trocaValor($a);

echo "O valor da variavel \$a modificado pela funcao trocaValor é: $a";
?>
