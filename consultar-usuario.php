<h1>Consultar professores</h1>
<?php
  include_once('config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <style>
    body{
      background-color: #F2f2f2;
    }
  </style>

<body>
    
    <form action="?page=salvar_user" method="POST">
      <input type="hidden" name="acao" value="consultar_user">


      <div class="mb-3">
        <label>Nome:</label>
          <input type="text" name="user_name" class="form-control" required> 
      </div>
  

      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Consultar</button>
      </div>


    </form>
</body>
</html>