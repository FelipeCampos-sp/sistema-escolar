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

<table class="striped responsive-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>CPF</th>
      <th>EMAIL</th>
      <th>FONE</th>
      <th>ENDEREÇO</th>
      <th>CURSO</th>
      <th>MATRICULA</th>
      <th>EDITAR</th>
      <th>DELETAR</th>
    </tr>
  </thead>
  <tbody>

<?php  
//Variavel para fazer consulta no banco 
$query = "SELECT * FROM aluno";


$listar =  mysqli_query($conexao,$query);

//Loop que para preencher as linhas da tabela com  campo os valores que estão no array 
 
 while($campo = mysqli_fetch_array($listar)){

?>
    <tr>
      <td><?php  echo $campo ['id_aluno']; ?></td>
      <td><?php  echo $campo ['nome']; ?></td>
      <td><?php  echo $campo ['cpf_aluno'];?></td>
      <td><?php  echo $campo ['email'];?></td>
      <td><?php  echo $campo ['fone'];?></td>
      <td><?php  echo $campo ['endereco'];?></td>
      <td><?php  echo $campo ['curso'];?></td>
      <td><?php  echo $campo ['matricula'];?></td>
      <td><a href="edita-aluno.php?codigo=<?php echo( $campo['id_aluno']); ?>" title="EDITAR CAMPOS"><i class="material-icons">create</i></a></td>
       <td><a href="deleta-aluno.php?codigo=<?php echo( $campo['id_aluno']); ?>" title="DELETAR CAMPOS"><i class="material-icons">delete</i></a></td>  
   </tr>
    
 

    <?php 
 } //fecha o metodo da  ?>
    
  </tbody>
</table><!--end table-->






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
