<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {

	echo "Error: ", $conn->connect_error;
	exit;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// converter para json
$data = array();
// caso o array esteja vazio, o php entende como false
while ($row = $result->fetch_assoc()) {
	array_push($data, $row);
}
echo "<pre>";
echo json_encode($data);
echo "</pre>";

?>