<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($freiar);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo {
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


$carro = new Civic();
$carro->trocarMarcha(3);
?>