<!DOCTYPE html>
<html>
<head>
	<title>Evitando Notices</title>
</head>
<body>
<?php 
$idade = 47;
unset($idade);
// @ evita notices
echo @$idade;
$idade2 = $idade;
?>
</body>
</html>