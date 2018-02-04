<?php

include_once "config.php";
include_once "banco.php";

remover_tarefa($conexao, $_GET['id']);

header('Location: tarefas.php');