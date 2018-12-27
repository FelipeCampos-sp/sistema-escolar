<?php

//chamar arquivo que estabelece a conexão com o banco:
include ('conexao.php');

$matriculaAluno = $_POST['matricula'];
$nomeAluno = $_POST['nome'];
$cpfAluno = $_POST['cpf-aluno'];
$foneAluno = $_POST['tel-aluno'];
$emailAluno = $_POST['email'];
$endAluno = $_POST['end-aluno'];
$cursoAluno = $_POST['curso'];

//inserir os valores na tabela do banco:
$sql = "INSERT INTO aluno( matricula, nome, cpf_aluno, fone, email, endereco, curso ) VALUES ('$matriculaAluno', '$nomeAluno','$cpfAluno','$foneAluno','$emailAluno','$endAluno','$cursoAluno')";

//enviar a consulta para o banco:
mysqli_query($conexao, $sql);

//avisar o usuário que a consulta foi feita com sucesso:
echo('<script>alert("Aluno inserido com sucesso!"); window.location.href="cadastrar-aluno.php";</script>');

//encerrar (fechar) a conexão com o banco:
mysqli_close($conexao);


?>
