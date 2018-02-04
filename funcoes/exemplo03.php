<?php 

// Outro exemplo de passagem de valor 
// Por referencia, agora utilizando
// um array e o foreach

$pessoa = array(
	'nome'=> 'Fábio',
	'idade'=>36
);
echo "<hr>";
echo "Modifica apenas o valor dentro foreach: <br>";
foreach ($pessoa as $value) {
	// a função gettype retorna 
	// o tipo do valor que é passado
	// para ela como argumento
	if (gettype($value) === 'integer') $value += 10;
	echo "$value <br>";
}

print_r($pessoa);
echo "<hr>";
echo "Modifica o valor dentro do array:<br>";
foreach ($pessoa as &$value) {
	
	if (gettype($value) === 'integer') $value += 10;
	echo "$value <br>";
}
print_r($pessoa);
echo "<hr>";





?>