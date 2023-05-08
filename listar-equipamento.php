<h1>Listar equipamentos</h1>
<?php

    $sql = "SELECT * FROM equipamentos";
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
    print "<p class = 'alert alert-danger' Não
    encontrou resultados!</p>";
    }

?>