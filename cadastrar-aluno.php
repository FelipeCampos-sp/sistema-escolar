<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gestão Escolar</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<link rel="icon" type="image/png" href="img/php.png"/>
</head>

<body>
<!-- aqui virá o menu, por include do PHP -->
<?php include('menu.php')?>
<main>
  <h2>Cadastro de Aluno</h2>
  <small>campos obrigatórios*</small>
  <div class="row">
    <form class="col s12" id="cadastro-aluno" action="verifica-aluno.php" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input id="matricula" name="matricula" type="text" class="validate" required maxlength="8" placeholder="digite os 8 números...">
          <label for="matricula">Matrícula*</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="nome" name="nome" type="text" class="validate" required>
          <label for="nome">Nome Completo*</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="cpf-aluno" name="cpf-aluno" type="text" class="validate" required placeholder="digite apenas números..." maxlength="11">
          <label for="cpf-aluno">CPF*</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="tel-aluno" name="tel-aluno" type="tel" class="validate" maxlength="11">
          <label for="tel-aluno">Telefone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate" required>
          <label for="email">Email*</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="end-aluno" name="end-aluno" type="text" class="validate">
          <label for="end-aluno">Endereço</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="curso" name="curso" type="text" class="validate">
          <label for="curso">Curso*</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons right">CADASTRAR</i> </button>
    </form>
  </div>
</main>
<footer>
  <h5>Senac Lapa Tito - 2018</h5>[=]
</footer>
<script src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="js/script.js"></script>  
  
</body>
</html>
