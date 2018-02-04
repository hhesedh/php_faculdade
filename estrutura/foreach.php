<?php 


$meses = array(
	"Janeiro", "Fevereiro", "Marco",
	"Abril", "Maio", "Junho",
	"Julho", "Agosto", "Setembro",
	"Outubro", "Novembro", "Dezembro"
);
// O primeiro parametro é o nome do array
// o segundo é o indice (opcional)
// o terceiro é a variavel local
// que vai alocar o nome do elemento
foreach ($meses as $index => $mes) {
	echo "Indice: $index <br>";
	echo "O mes é $mes <br><br>";
}
 ?>