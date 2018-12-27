<?php 

include('conexao.php');



//recuperar o valor vem na url a partir do botao de apagar:

$codigoRecibido = $_GET['codigo'];

//variavel para guardar a consulta:

//variável para guardar a consulta  sql :

$apaga = "DELETE FROM aluno WHERE id_aluno = '$codigoRecibido'"; 

mysqli_query($conexao, $apaga);

//Fazer estrutura de seleção para dar opção de não apagar o registro 

echo('<script>alert("Registro apagado !!"); window.location.href="lista-aluno.php";</script>');




?>