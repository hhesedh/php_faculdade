<?php

class Documento {
	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}
}

class CPF extends Documento {

	public function validar():bool {
		$numeroCPF = $this->getNumero();
		//Validação do cpf
		return true;
	}
}

$doc = new CPF();
$doc->setNumero("11111222333");
var_dump($doc->validar());
?>