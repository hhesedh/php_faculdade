<!DOCTYPE html>
<html>
<head>
	<title>Inicializando arrays</title>
</head>
<body>
<?php

function impressao($vetor){
	echo "<pre>";
	print_r($vetor);
	echo "</pre>";
}
// exemplo de inicializacao e atribuição de arrays 
$animal[] = "tigre";
$animal[] = "girafa";
$animal[] = "elefante";
array_push($animal, "gorila");
impressao($animal);

$moeda = array("BR"=>"Real", "EUA"=>"dolar");
impressao($moeda);
// na indexação de array, eu uso apostrofe
$moeda['BR'] = "bitcoin";

impressao($moeda);
echo "<br>";
echo "A unidade monetaria brasileira é o {$moeda['BR']}";

sort($animal);
asort($moeda);
impressao($animal);
impressao($moeda);

$animal = array();
$animal[] = "tigre";
$animal[] = "girafa";
$animal[] = "elefante";
array_push($animal, "gorila");
echo "Asort com indices numericos: <br>";
asort($animal);
impressao($animal);

?>
</body>
</html>