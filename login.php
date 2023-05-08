<?php
   session_start();
      if(empty($_POST) or (empty($_POST["user_name"]) or (empty($_POST["senha"])))){
         print "<script>location.href='index.php';</script>";

      }

   include("config.php");

      $user_name = $_POST["user_name"];
      $senha = $_POST["senha"];
      $user_type = $_POST["user_type"];

      $sql = " SELECT * FROM usuarios WHERE user_name = '{$user_name}' AND senha = '{$senha}' AND user_type ='{$user_type}'";

      $res = $conn->query($sql) or die($conn->error);
      $row = $res->fetch_object();
      $qtd = $res->num_rows;

   
            if($qtd > 0){
               $_SESSION["user_name"] = $user_name;
               $_SESSION["senha"] = $row->senha;
                  
                  if(($_SESSION["user_type"] = $row->user_type)=='admin'){
                     print "<script>location.href='adm_page.php';</script>";
            }
      
                  else if(($_SESSION["user_type"] = $row->user_type)=='prof'){
                     print "<script>location.href='prof_page.php';</script>";
      
            }
                  else{
                     print "<script>alert('Usuário e/ou senha incorreto(s).');</script>";
                     print "<script>location.href='index.php';</script>";

            }

   }



   
      







