<?php 

// Criando array multidimensionais
// de uma outra forma

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Glaucio',
	'idade'=>2
));

print_r($pessoas);
echo "<br>";
print_r($pessoas[0]['nome']);
echo "<br>";

?>