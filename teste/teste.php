<!DOCTYPE html>
<html>
<head>
	<title>metodo Post</title>
</head>
<body>
	<form method="post">
		
		<input type="text" name="nome" placeholder="nome">
		<input type="text" name="sobrenome" placeholder="sobrenome">
		<input type="submit" name="ok">
	</form>
<?php 
	echo "<hr>";
	if (isset($_POST)){
		foreach ($_POST as $key => $value) {
			echo "Valor: $value <br>";
			echo "indice: $key <hr>";
		}
	}
 ?>
</body>
</html>