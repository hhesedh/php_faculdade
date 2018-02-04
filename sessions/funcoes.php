<?php 

require_once("config.php");

// Mostra o caminho onde fica salvo
// as informações da session
echo session_save_path();
echo "<br>";
var_dump(session_status());
echo "<br>";

// O valor dos status vai de 0 à 2
// as constantes superglobais abaixo
// guardam estes valores e tornam
// o codigo mais inteligivel
switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "As sessões estão desabilitadas";
		break;
	
	case PHP_SESSION_NONE:
		echo "As sessões estão habilitadas, mas não existem nenhuma";
		break;
	case PHP_SESSION_ACTIVE:
		echo "As sessões estão habilitadas e uma sessão existe";
		break;
}
 ?>