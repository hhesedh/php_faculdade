<?php


function enviar_email($tarefa, $anexos) {

	include "bibliotecas/PHPMailer/PHPMailerAutoload.php";
	$corpo = preparar_corpo_email($tarefa, $anexos);

	// Acessar o sistema de e-mails;
	// Fazer a autenticação com usuário e senha;
	// Usar a opção para escrever um e-mail;
	echo $anexos;
	$email = new PHPMailer();

	$email->isSMTP();
	$email->Host = "smtp.gmail.com";
	$email->Port = 587;
	$email->SMTPSecure = 'tls';
	$email->SMTPAuth = true;
	$email->Username = "meuemail@mail.com";
	$email->Password = "minhasenha";
	$email->setFrom("meuemail@mail.com", "Avisor de Tarefas");
	// Digitar o e-mail do destinatário;
	$email->addAddress(EMAIL_NOTIFICACAO);
	// Digitar o assunto do e-mail;
	$email->Subject = "Aviso de tarefa: {$tarefa['nome']}:";
	// Escrever o corpo do e-mail;
	$email->msgHTML($corpo);
	// Adicionar os anexos quando necessário;
	foreach ($anexos as $anexo) {
		$email->addAttachment("anexos/{$anexo['arquivo']}");
	}
	// Usar a opção de enviar e-mail.
	$email->send();
}

function preparar_corpo_email($tarefa, $anexos){
	// Aqui vamos pegar o conteúdo processado do template_email.php

	// Falar para o PHP que não é para enviar o processamento para o
	// navegador:
	ob_start();

	// Incluir o arquivo template_email.php:
	include "template_email.php";

	// Guardar o conteúdo do arquivo em uma variável;
	$corpo = ob_get_contents();

	// Falar para o PHP que ele pode voltar a mandar conteúdos para o 
	// navegador.
	ob_end_clean();

	return $corpo;
} 

function traduz_prioridade($codigo){
	$prioridade = '';
	switch ($codigo) {
		case 1:
			$prioridade = 'Baixa';
			break;
		
		case 2:
			$prioridade = 'Media';
			break;

		case 3:
			$prioridade = 'Alta';
	}

	return $prioridade;
}

function traduz_data_para_banco($data){

	if ($data == "") {
		return "";
	}

	$dados = explode("/", $data);

	if (count($dados) != 3) {
		return $data;
	} 

	$data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";

	return $data_mysql;
}

function traduz_data_para_exibir($data){
	if ($data == "" OR $data == "0000-00-00"){
		return "";
	}

	$dados = explode("-", $data);

	if (count($dados) != 3) {
		return $data;
	} 
	
	$data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

	return $data_exibir;
}

function traduz_concluida($concluida){

	if ($concluida == 1) {
		return 'Sim';
	}

	return 'Não';
}

function tem_post() {

	if (count($_POST) > 0) {
		return true;
	}

	return false;
}

function validar_data($data){
	$padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
	$resultado = preg_match($padrao, $data);

	if (! $resultado) {
		return false;
	}

	$dados = explode('/', $data);

	$dia = $dados[0];
	$mes = $dados[1];
	$ano = $dados[2];

	$resultado = checkdate($mes, $dia, $ano);
	return $resultado;
}

function tratar_anexo($anexo) {
	$padrao = '/^.+(\.pdf|\.zip)$/';
	$resultado = preg_match($padrao, $anexo['name']);

	if (! $resultado) {
		return false;
	}

	move_uploaded_file($anexo['tmp_name'], "anexos/{$anexo['name']}");

	return true;
}