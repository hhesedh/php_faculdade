<?php 
function aproximacaoQuadradada($n) {
	$soma = 1;
	$incremento = 1;
	$raiz = 1;

	while ($soma < $n) {
		$incremento += 2;
		$raiz += 1;
		$soma += $incremento;
	}

	return $raiz;
}

echo aproximacaoQuadradada(16);

?>