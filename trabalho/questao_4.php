<?php 


function calculaExpressoesEmString($expressao) {
	$padrao =  '/^(\d+[-+\/x])+\d+$/';
	$resultado = preg_match($padrao, $expressao);

	if (! $resultado) {
		return "Expressão invalida foi encontrada na execução";
	}

	preg_match_all("/\d+|-|\+|\/|x/", $expressao, $equacao);
	$equacao = $equacao[0];
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