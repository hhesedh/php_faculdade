<?php 
$nome = "Fábio";
echo $nome."</br>";

// Verfica o tipo da variavel
var_dump($nome);

//Limpando a variavel:
// o método unset também aceita
// varias variaveis como argumento.
unset($nome);

// o método isset verifica
// se uma variavel existe
if (isset($nome1)) {
	echo $nome1;
} else{
	echo "</br>A variavel não mais existe";
}

?>