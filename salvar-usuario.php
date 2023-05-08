<?php
    @include('config.php');
        switch(@$_REQUEST["acao"]){
            case 'cadastrar_user':

                $cpf = $_POST["cpf"];
                $user_name = $_POST["user_name"];
                $data_nasc = $_POST["data_nasc"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $user_type = $_POST["user_type"];
            
        
                $sql = "INSERT INTO usuarios(cpf,user_name,data_nasc,email,senha,user_type)
                VALUES('{$cpf}','{$user_name}','{$data_nasc}', '{$email}', '{$senha}','{$user_type}')";
                
                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Cadastro de usuário concluido com sucesso!');</script>";
                    print "<script>location.href='?page=listar_user';</script>";
                }
                
                else{
                    print "<script>alert('Não foi possível cadastrar usuário.');</script>";
                    print "<script>location.href='?page=listar_user';</script>";
                }
                
                break;

            case 'editar_user':

                $cpf = $_POST["cpf"];
                $user_name = $_POST["user_name"];
                $data_nasc = $_POST["dat"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                $user_type = $_POST["tipo"];
            
        
                $sql = " UPDATE usuarios SET 
                cpf='{$cpf}',
                user_name='{$user_name}',
                data_nasc ='{$data_nasc}',
                email='{$email}', 
                senha= '{$senha}',
                user_type='{$user_type}' 
                WHERE 
                matricula=".$_REQUEST["matricula"];
            
                $res = $conn->query($sql);

                if($res==true){
                    print "<script>alert('Usuário editado com sucesso!');</script>";
                    print "<script>location.href='?page=listar_user';</script>";
                }else{
                    print "<script>alert('Não foi possível editar usuário.');</script>";
                    print "<script>location.href='?page=listar_user';</script>";
                }

            break;

            case 'excluir_user':

                $sql = "DELETE FROM usuarios WHERE matricula=".$_REQUEST["matricula"];
                $res = $conn->query($sql);
                
                if($res==true){
                    print "<script>alert('Excluido com sucesso!');</script>";
                    print "<script>location.href='?page=listar_user';</script>";
                }else{
                    print "<script>alert('Não foi possível excluir');</script>";
                    print "<script>location.href='?page=listar_user';</script>";
                }
 
            break;

            case 'consultar_user':
    
                $user_name = $_REQUEST["user_name"];
                $sql = "SELECT * FROM usuarios WHERE user_name LIKE '$user_name%'";
                $res = $conn->query($sql);
                $qtd = $res->num_rows;
                
                if($qtd > 0){
                    print "<table class = 'table table-hover table-striped table-bordered'>";
                    print "<tr>";
                    print "<th>#Matrícula</th>";
                    print "<th>Tipo de Usuário</th>";
                    print "<th>CPF</th>";
                    print "<th>Nome</th>";
                    print "<th>Email</th>";
                    print "<th>Data de Nascimento</th>";
                    print "<th>Senha</th>";
                    print "<th>Ações</th>"; 
                    print "</tr>";
                
                while($row = $res->fetch_object()){
                
                    print "<tr>";
                    print "<td>".$row->matricula.  "</td>";
                    print "<td>".$row->user_type.  "</td>";
                    print "<td>".$row->cpf.  "</td>";
                    print "<td>".$row->user_name.  "</td>";
                    print "<td>".$row->data_nasc.  "</td>";
                    print "<td>".$row->email. "</td>";
                    print "<td>".$row->senha. "</td>";

                    
                    print "<td>
                    <button onclick=\"location='?page=editar_user&matricula=".$row->matricula."';\"
                    class='btn btn-success'>Editar</button>
                    
                    <button onclick=\"if(confirm('Tem certeza disso?')){location.href=
                    '?page=salvar_user&acao=excluir_user&matricula=".$row->matricula."';}else{false;}\"
                    class='btn btn-danger '>Excluir</button>
                    </td>";
                    print "</tr>";
                }
                    print "</table>";
                }else{
                    print "<script>alert('Não foram encontrados resultados! Sendo redirecionado para a lista completa.');</script>";
                    print "<script>location.href='?page=listar_user';</script>";
                }

            break;

        }
