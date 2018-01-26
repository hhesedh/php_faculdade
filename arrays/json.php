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
echo json_encode($pessoas);

 ?>