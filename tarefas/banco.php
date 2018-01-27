<?php 

$bdServidor = 'localhost';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'tarefas';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ($conexao->connect_errno) {
	echo "Problemas para conectar no banco. Verifique dados!";
	die();
}

function buscar_tarefas($conexao) {
	$sqlBusca = 'SELECT * FROM tarefas';
	$resultado = mysqli_query($conexao, $sqlBusca);
	$tarefas = array();

	while ($tarefa = mysqli_fetch_assoc($resultado)) {
		$tarefas[] = $tarefa;
	}
	return $tarefas;
}

function gravar_tarefa($conexao, $tarefa) {
	$sqlGravar = "
	INSERT INTO tarefas
	(nome, descricao, prioridade)
	VALUES 
	(
		'{$tarefa['nome']}',
		'{$tarefa['descricao']}',
		{$tarefa['prioridade']}
	)
	";

	mysqli_query($conexao, $sqlGravar);
}
