<?php
switch(@$_REQUEST["acao"]){
    case 'cadastrar':

        $nome = $_POST["nome"];
        $status = $_POST["estado"];
        $horarioR = $_POST["horarioR"];
        $horarioD = $_POST["horarioD"];
     
        $sql = "INSERT INTO equipamentos(nome,estado,horarioR,horarioD)
        VALUES('{$nome}','{$status}','{$horario}','{$horarioD}')";
        
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastro de equipamento concluido com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";

        }
        else{
            print "<script>alert('Não foi possível cadastrar.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        break;



    case 'editar':

        $nome = $_POST["nome"];
        $status = $_POST["estado"];
        $horarioR = $_POST["horarioR"];
        $horarioD = $_POST["horarioD"];
    
        $sql = "UPDATE equipamentos SET nome='{$nome}', estado='{$status}', 
        horarioR='{$horarioR}', horarioD='{$horarioD}'
        WHERE id=".$_REQUEST["id"];
        
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Editado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        else{
            print "<script>alert('Não foi possível editar.');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
        
        break;

    case 'excluir':

        $sql = "DELETE FROM equipamentos WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        
        if($res==true){
            print "<script>alert('Excluido com sucesso!');</script>";
            print "<script>location.href='?page=listar';</script>";

        }else{
            print "<script>alert('Não foi possível excluir');</script>";
            print "<script>location.href='?page=listar';</script>";

        }
        break;

    case 'consultar':
    
        $nome = $_REQUEST["nome"];
    
        $sql = "SELECT * FROM equipamentos WHERE nome LIKE '$nome%'";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;
      

    if($qtd > 0){
        print "<table class = 'table table-hover table-striped table-bordered'>";
    
        print "<tr>";
        print "<th>#ID</th>";
        print "<th>Nome</th>";
        print "<th>Status</th>";
        print "<th>Retirada</th>";
        print "<th>Devolução</th>";
        print "<th>Ações</th>";
        
        print "</tr>";
    
    while($row = $res->fetch_object()){
    
        print "<tr>";
        print "<td>".$row->id.  "</td>";
        print "<td>".$row->nome.  "</td>";
        print "<td>".$row->estado. "</td>";
        print "<td>".$row->horarioR. "</td>";
        print "<td>".$row->horarioD. "</td>";

        
        print "<td>
        <button onclick=\"location='?page=editar&id=".$row->id."';\"
        class='btn btn-success'>Editar</button>
        
        <button onclick=\"if(confirm('Tem certeza disso?')){location.href=
        '?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"
        class='btn btn-danger '>Excluir</button>
        </td>";
        print "</tr>";
    }
        print "</table>";
    
    }
    else{
        print "<script>alert('Não foram encontrados resultados! Sendo redirecionado para a lista completa.');</script>";
        print "<script>location.href='?page=listar';</script>";
    }

    break;
}







    
 





    

