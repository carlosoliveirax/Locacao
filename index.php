<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <title>Área de acesso</title>
</head>

   <style>
      body{
         background-color: #F2f2f2;
      }

      .login{
         width: 100%;
         height: 100vh;
         align-items: center;
         justify-content: center;
         display: flex;
      }

      .btn{
         align-items: center;
         justify-content: center;   
      }

   </style>

<body>

<?php
   include("config.php");
?>

<div class="login">
      <div class="container">
         <div class="row">
              <div class="col-lg-4 offset-lg-4">
                 <div class="card">
                    <div class="card-body">
                       <div class="card-body">
                       <h3>Página de Acesso</h3>
                       </div>

                  <form action="login.php" method="POST">
                 
                     <div class="mb-3">
                        <label>Nome: </label>
                           <input type="text" class="form-control"  
                           name="user_name" required placeholder="Insira seu nome de usuário">
                     </div>
      
      
                     <div class="mb-3">
                        <label>Senha: </label>
                           <input type="text" class="form-control"  
                           name="senha" required placeholder="Insira sua senha">              
                     </div>  

                     <div class="mb-3">
                        <label>Você é: </label>
                           <select name="user_type">
                              <option value="prof">Professor</option>
                              <option value="admin">Administrador</option>
                           </select>            
                     </div> 

                     <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
                  
                  </form>

 
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

</body>
</html>