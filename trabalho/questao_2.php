<?php 

function percentual_pessoas_ricas($lista_pessoas) { 
	$metade = array_sum($lista_pessoas) / 2;
	$somatorio = 0;
	$num_habitantes = 0;

	for ($i=0; $i < sizeof($lista_pessoas); $i++) {
		$somatorio += $lista_pessoas[$i];
		if ($somatorio >= $metade) {
			$num_habitantes = $i + 1;
			break;
		}
	}

	$porcentagem =  ($num_habitantes * 100)  / sizeof($lista_pessoas);
	return $porcentagem;
}

$numeros = array(15000, 9000, 8234, 2155, 1200, 900, 800, 800, 800, 150, 1, 2, 3, 4);
echo "Soma é = ". array_sum($numeros) / 2 . ". <br>";
echo percentual_pessoas_ricas($numeros);
?>