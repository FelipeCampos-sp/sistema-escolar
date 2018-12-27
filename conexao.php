

<?php 

//Arquivo para conexão com o banco de dados

//definir  uma variavel para conexao
//(as variavéis em PHP começam com $)


$conexao = mysqli_connect('localhost','root','root','escola');


//testar se a conexão foi feita , com uma estritura de seleção


if ($conexao == TRUE) {
  //instruções se verdadeiros 
  echo('<script>alert("Sucesso! Conexão OK!!!")</script>');
  mysqli_query($conexao,"SET NAMES 'utf-8'");
  mysqli_query($conexao,'SET character_set_connection=utf8');
  mysqli_query($conexao,'SET character_set_client=utf8');
  mysqli_query($conexao,'SET character_set_results=utf8');


}else{
	//instruções se for falso 
    echo '<script>alert("A conexão falhou!")</script>';
}



?>