<?php 

$nome = "Fábio";

$sobrenome = 'Oliveira';

// Interpolação de variaveis 
// dentro de uma string
// só funciona com aspas duplas.
echo "Olá, meu nome é $nome $sobrenome";
echo "<br>";

/* Funções para Strings em php */


$nome = "fabio de Oliveira";

// Deixa todos os caracteres maiusculos
echo strtoupper($nome);
echo "<br>";
// Deixa todos os caractes minusculos;
echo strtolower($nome);
echo "<br>";
// Deixa as primeiras letras de cada
// palavra na string em maiusculo
echo ucwords($nome);
echo "<br>";
// Deixa apenas o primeiro caractere
// da string em maiusculo e mantem
// o resto intacto
echo ucfirst($nome);
echo "<br>";

// Substitui elementos em uma string
$empresa = "Hcode";
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo $empresa;
echo "<br>";
// Encontra a posição do
// elemento na String
$frase = "A repetição é a mãe da retenção";
$q = strpos($frase, "mãe");
var_dump($q);
echo "<br>";

// Seleciona uma substring
$texto = substr($frase, 0, $q);
echo $texto;
echo "<br>";

// strlen conta o tamanho da string
$texto2 = substr($frase, $q+strlen("mãe"), strlen($frase));
echo $texto2;
echo "<br>";
 ?>

