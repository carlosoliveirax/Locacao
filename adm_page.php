<?php
    session_start();
    if(empty($_SESSION)){
        print "<script>location.href='index.php'</script>";
    
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Administrador</title>
</head>
    <style>
    .nav-btn{
        width: 12vw;
    }

    </style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="adm_page.php">Home</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
  data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
  aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span></button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
      
      <a class="nav-link" href="?page=novo">Cadastrar equipamentos</a>
      <a class="nav-link" href="?page=consultar">Consultar equipamentos</a>
      <a class="nav-link" href="?page=listar">Listar equipamentos</a>
      <a class="nav-link" href="?page=cadastrar_user">Cadastrar usuários</a>
      <a class="nav-link" href="?page=consultar_user">Consultar usuários</a>
      <a class="nav-link" href="?page=listar_user">Listar usuários</a>
      <a class="nav-btn"> <?php print "<a href='logout.php' class='btn btn-danger'>Sair </a>  ";?> </a>
        </div>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col mt-5">
 
    <?php
   
    include('config.php');
        switch(@$_REQUEST["page"]){
            case "novo":
                include("cadastrar/novo-equipamento.php");
            break;
        
            case "listar":
                include("listar/listar-equipamento.php");
            break;
    
            case "salvar":
                include("salvar/salvar-equipamento.php");
            break;

            case "editar":
                include("editar/editar-equipamento.php");
            break;
    
            case "consultar":
                include("consultar/consultar-equipamento.php");
            break;
    
            case "cadastrar_user":
                include("cadastrar/cadastrar_user.php");
            break;
        
            case "listar_user":
                include("listar/listar-usuario.php");
            break;
            
            case "salvar_user":
                include("salvar/salvar-usuario.php");
            break;

            case "editar_user":
                include("editar/editar-usuario.php");
            break;
            
            case "consultar_user":
                include("consultar/consultar-usuario.php");
            break;
        default:
     
            print "<h1>Olá, ".$_SESSION["user_name"]."!</h1>";
            print "<h1>Não se esqueça que você é um administrador ;)</h1>";
         
}
    
?>

        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>