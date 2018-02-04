<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($freiar);
	public function trocarMarcha($marcha);
}

Abstract class Automovel implements Veiculo {
	public function acelerar($velocidade){
		echo "O veículo acelerou até $velocidade km/h";
	}

	public function frenar($velocidade){
		echo "O veículo frenou até $velocidade km/h";
	}

	public function trocarMarcha($marcha){
		echo "O Veiculo engatou a marcha $marcha";
	}
}

class DelRey extends Automovel {
	public function empurrar(){
		echo "Empurrando Del Rey...";
	}
}

$carro = new DelRey();
$carro->acelerar(200);
$carro->empurrar();

?>