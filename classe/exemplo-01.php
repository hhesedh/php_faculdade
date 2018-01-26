<?php 
// Criando uma classe

class Pessoa {
	public $nome; //Atributo

	public function falar(){// Método
		return "O meu nome é ". $this->nome;
	}
}
$fabio = new Pessoa();
$fabio->nome = "Fábio de Oliveira";
echo $fabio->falar();
?>