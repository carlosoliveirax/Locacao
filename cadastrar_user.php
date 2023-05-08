<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <title>Página de cadastro</title>
</head>
<style>
   body{
   background-color: #F2f2f2;
   }

   .login{
   width: 100%;
   height: 125vh;
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



   <div class="login">
      <div class="container">
         <div class="row">
              <div class="col-lg-4 offset-lg-4">
                 <div class="card">
                    <div class="card-body">
                       <div class="card-body">
                       <h3>Cadastrar</h3>
                       </div>

                  <form action="?page=salvar_user" method="POST">
                  <input type="hidden" name="acao" value="cadastrar_user">
                  
                  
                 
                  <div class="mb-3">
                  <label>CPF: </label>
                  <input type="text" class="form-control"  
                  name="cpf" required placeholder="Inserir cpf">
                  </div>
      
      
                  <div class="mb-3">
                  <label>Nome: </label>
                  <input type="text" class="form-control"  
                  name="user_name" required placeholder="Inserir nome">              
                  </div>
      
      
                  <div class="mb-3">
                  <label>Data de Nascimento:</label>
                  <input type="date" class="form-control"
                  name="data_nasc" placeholder="Inserir data">
                  </div>

      
                  <div class="mb-3">
                  <label>Email:</label>
                  <input type="email" class="form-control"
                  name="email" required placeholder="Inserir email">
                  </div>


                  <div class="mb-3">
                  <label>Senha:</label>
                  <input type="password" class="form-control"  
                  name="senha" required placeholder="Inserir senha">
                  </div>
      
      
      
                  <div class="mb-3">
                  <label>Opções:</label>
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

