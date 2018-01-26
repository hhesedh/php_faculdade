<?php
include "soma.php";

class ContGarrafas extends Contador{

		// Construtor
	function __construct($inicio){
		$this->cont = $inicio;
	}

	// Adiciona 12 garrafas ao contador
	function adicionaCaixa(){
		$this->cont += 12;
	}

	function numeroDeCaixas(){
		return ceil($this->cont / 12);
	}
}

$temp = new contGarrafas(12);
$temp->adicionaCaixa();
$var = $temp->numeroDeCaixas();
echo $var;
?>