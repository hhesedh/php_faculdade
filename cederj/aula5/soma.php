<?php
class Contador{
	// variaveis
	var $cont = 0;
	var $inicio = 0;

	// Métodos
	function iniciaContadoEm($i){
		$this->cont = $i;
		$this->inicio = $i;
	}

	function incrementa(){
		$this->cont++;
	}

	function reset(){
		$this->cont = $this->inicio;
	}

	function escrevaValor(){
		print $this->cont;
		echo "<br>";
	}
}
?>