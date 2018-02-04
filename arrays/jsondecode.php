<?php 

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":2}]';

// para que o json_decode transforme
// o arquivo json em array precisamos
// passar como segundo argumento
// o booleano true
$data = json_decode($json, true);

var_dump($data);


 ?>