<?php 

// valor default para 
// o parametro $texto
// Os paremetros obrigatorios
// devem estar sempre ao lado esquerdo
function ola($texto="mundo"){
	echo "Olá $texto";
}

// func_get_args retorna os parametros
// caso haja algum, na forma de array.
function teste(){
	$argumentos = func_get_args();
	return $argumentos;
}


ola();
echo "<br>";


var_dump(teste("Olá Mundo", "Teste"))
?>