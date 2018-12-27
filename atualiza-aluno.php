<?php 
//chamar conexão com banco 

include('conexao.php');


//buscar as informações do formulário de edição
$codigo =$_POST['codigo-aluno'];
$nome = $_POST['nome-aluno'];
$cpf = $_POST['cpf-aluno'];
$email = $_POST['email-aluno'];
$fone = $_POST['fone-aluno'];
$end = $_POST['endereco-aluno'];
$curso = $_POST['curso-aluno'];
$matricula = $_POST['matricula-aluno'];

//variavael para armazenar a consulta sql:

$sql = "UPDATE aluno SET 
nome='$nome', 
cpf_aluno='$cpf',
email='$email', 
fone='$fone', 
endereco ='$end', 
curso='$curso', 
matricula='$matricula' 
WHERE '$codigo'=id_aluno";



mysqli_query($conexao,$sql);

//avisar o usuário que a consulta foi feita:
echo ('<script>alert("Registro alterado com sucesso"); window.location.href="lista-aluno.php"</script>');


mysqli_close($conexao);

?>