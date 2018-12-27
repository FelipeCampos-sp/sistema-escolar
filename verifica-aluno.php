<?php

//arquivo para verificar e validar o formulário de cadastro dos alunos

//capturar os valores que o usuário digitou e guardar em variáveis para usar depois:
//matricula, nome, cpf, fone, email, end, curso
$matriculaAluno = $_POST['matricula'];
$nomeAluno = $_POST['nome'];
$cpfAluno = $_POST['cpf-aluno'];
$foneAluno = $_POST['tel-aluno'];
$emailAluno = $_POST['email'];
$endAluno = $_POST['end-aluno'];
$cursoAluno = $_POST['curso'];


//variável para guardar a mensagem de erro ou de sucesso:
$erro = 0;

//funções para validar os campos:

//campo nome vazio:
if ( empty($nomeAluno) OR strstr($nomeAluno, ' ') == FALSE ){
	echo('Digite seu nome completo. <br>');
	$erro = 1;
}

// TESTAR SE O ESPAÇO EM BRANCO É PERCEBIDO PELO PHP COMO UM CARACTER VÁLIDO

//campo de email menor que 8 caracteres:
if ( strlen($emailAluno) < 8) {
	echo('Preencha com um e-mail válido. <br>');
	$erro = 1;
}
//campo cpf vazio:
if ( empty($cpfAluno)) {
	echo('Digite seu CPF completo. <br>');
	$erro = 1;
} 

//campo endereço vazio ou sem espaços em branco:
if ( empty($endAluno) OR strstr($endAluno, ' ') == FALSE ){
	echo('Digite seu endereço completo. <br>');
	$erro = 1;
}

//verifica se há erro:
if ( $erro == 0 ){
	echo('Tudo deu certo, o form passou!<br>');
	//chamar a página de inserção dos dados
	include ('insere-aluno.php');
}


?>