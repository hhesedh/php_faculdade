<?php 
// forma de definir uma constante
// também existe o argumento
// para sinalizar se a constante
// será case sensitive (true)
// mas pro convenção as constantes
// são todas em UPPER CASE.
define("SERVIDOR", "127.0.0.1");
echo SERVIDOR."<br>";


/* Arrays constantes */

define("BANCO_DE_DADOS", [
	'127.0.0.1',
	'root',
	'password',
	'test'
]);

print_r(BANCO_DE_DADOS);
?>