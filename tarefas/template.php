<!DOCTYPE html>
<html>
<head>
	<title>Gerenciador de Tarefas</title>
	<link rel="stylesheet" type="text/css" href="tarefas.css">
</head>
<body>
<h1>Gerenciador de Tarefas</h1>

<?php include_once('formulario.php') ?>
<?php if ($exibir_tabela): ?>
	<?php include_once('tabela.php') ?>
<?php endif; ?>
</body>
</html>