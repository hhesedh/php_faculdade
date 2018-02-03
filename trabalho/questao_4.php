<?php 
function calculaExpressoesEmString($expressao) {
	// Verifica se a expressao e valida
	$padrao =  '/^(\d+[-+\/x])+\d+$/';
	$resultado = preg_match($padrao, $expressao);

	if (! $resultado) {
		return "Expressão invalida foi encontrada na execução";
	}
	// Separa os numeros e os sinais em um array
	preg_match_all("/\d+|-|\+|\/|x/", $expressao, $equacao);
	$equacao = $equacao[0];

	// Efetua os calculos
	$soma = intval($equacao[0]);
	foreach ($equacao as $key => $value) {
		if ($key % 2 == 0) {
			continue;
		}
		switch ($equacao[$key]) {
			case '-':
				$soma -= $equacao[$key+1];
				break;
			case 'x':
				$soma *= $equacao[$key+1];
				break;
			case '/':
				$soma /= $equacao[$key+1];
				break;
			case '+':
				$soma += $equacao[$key+1];
				break;
		}
	}
	return $soma;
}
echo calculaExpressoesEmString("1+2x4");
?>