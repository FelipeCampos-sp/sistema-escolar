<!DOCTYPE html>
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
<?php include ('nav.php');?>

<main>
	 <form method="POST" action="esqueceu.php">
            <h2>Esqueceu sua senha</h2>
            <label>Digite seu Email</label>
            <input type="email" name="email" placeholder="Email" required autofocus>
            <button type="submit">Enviar</button>
        </form>

      
</main>



</body>
</html>