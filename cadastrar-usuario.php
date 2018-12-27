<!DOCTYPE html>
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
<?php include ('nav.php');?>

<main>
	<div class="row">
    <form class="col s12" method="POST" action="verifica-sistema.php">
      
      <div class="row">
        <div class="input-field col s6">
          <input  id="primeiro-nome" type="text" class="validate">
          <label for="primeiro nome">Primeiro nome</label>
        </div>
      
      <div class="input-field col s6">
          <input id="sobrenome" type="text" class="validate">
          <label for="sobrenome">Sobrenome</label>
        </div>
      </div>
      
     
     <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
      

      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="tel" class="validate">
          <label for="telefone">Telefone</label>
        </div>
      </div>

<div class="file-field input-field">
      <div class="btn">
        <span>File</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>

    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
    </button>
      
    
    </form>
  </div>
</main>
<script src="js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script src="js/script.js"></script>  
</body>
</html>