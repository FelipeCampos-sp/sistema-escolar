<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gestão Escolar</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<link rel="icon" type="image/png" href="img/php.png"/>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
  
<?php include('conexao.php')?>

<!-- aqui virá o menu, por include do PHP -->
<?php include('menu.php')?>
<main>
<h2>Lista de Alunos</h2>

 <div class="row">
    <form class="col s12" action="" method="get">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">fingerprint</i>
          <input id="edita-codigo-aluno" name="codigo" type="text" class="validate">
          <label for="edita-codigo-aluno">Código</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_box</i>
          <input id="edita-nome-aluno" name="nome" type="tel" class="validate">
          <label for="edita-nome-aluno">Nome</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons center">BUSCAR ALUNO</i></button>
    </form>
  </div>

<table class="striped responsive-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>CPF</th>
      <th>EMAIL</th>
      <th>TELEFONE</th>
      <th>ENDEREÇO</th>
      <th>CURSO</th>
      <th>MATRICULA</th>
      <th>botão para salvar</th>
    </tr>
  </thead>
  <tbody>

<?php
//Recursos para não exibir o erro da falta de valor na url 
ini_set('display_erros',0);
error_reporting(0);

//Variáveis para guardar os valores dos campos do form de busca:
$codigo = $_GET['codigo'];
$nome = $_GET['nome'];

//Seleção do valor que foi preenchido na pesquisa ou está na url:

if (empty($codigo) && empty($nome)) {
  echo("<script>alert('Preencha apenas um dos campos de pesquisa !')</script>");

}elseif (empty($nome) && strstr($codigo,' ') == false) {
  //Variável para fazer a consulta ao banco 
  $query = "SELECT * FROM  aluno WHERE id_aluno = '$codigo' ";

}elseif (empty($codigo) && strstr($nome,' ') == false) {
  //Variável para fazer a consulta ao banco 
  $query = "SELECT * FROM  aluno WHERE nome LIKE '%$nome%'";
}

//fazer a conexão com o banco de dados e armazenar  os dados do array:

$listar = mysqli_query($conexao, $query);

//Loop para preencher alguns paragráfos  com os valores do array 
while ($campo = mysqli_fetch_array($listar)){


?>
<tr>
  <form action="atualiza-aluno.php" method="post" accept="charset="UTF-8">
  <td><input type="text" id="codigo-aluno"name="codigo-aluno" value="<?php echo $campo['id_aluno']; ?>"></td>
  <td><input type="text" id="nome-aluno"name="nome-aluno" value="<?php echo $campo['nome']; ?>"></td>
  <td><input type="text" id="cpf-aluno"name="cpf-aluno" value="<?php echo $campo['cpf_aluno']; ?>"></td>
  <td><input type="text" id="email-aluno"name="email-aluno" value="<?php echo $campo['email']; ?>"></td>
  <td><input type="text" id="fone-aluno" name="fone-aluno" value="<?php echo $campo['fone']; ?>"></td>
  <td><input type="text" id="endereco-aluno" name="endereco-aluno" value="<?php echo $campo['endereco'];?>"></td>
  <td><input type="text" id="curso-aluno" name="curso-aluno" value="<?php echo $campo['curso'];?>"></td>
  <td><input type="text" id="matricula-aluno" name="matricula-aluno" value="<?php echo $campo['matricula']; ?>"></td>
  <td><button type="submit">CADASTRAR</button></td>
  </form>
</tr>

<?php
}
?>

</tbody><!--fim da tbody-->
</table><!--fim da table-->

</main><!--end main-->
<footer>
  <h5>Senac Lapa Tito - 2018</h5>
</footer>
<!--scripts -- cdn-->
<script src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="js/script.js"></script>  
 <!--scripts-- cdn--> 
</body>
</html>
