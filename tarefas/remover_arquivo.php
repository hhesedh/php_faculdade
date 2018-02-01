<?php

include_once("banco.php");
remover_anexo($conexao, $_GET['id']);
header("Location: tarefa.php?id={$_GET['tarefa_id']}");