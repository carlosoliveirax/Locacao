<h1>Listar professores</h1>
<?php

$sql = "SELECT * FROM usuarios";
$res = $conn->query($sql);
$qtd = $res->num_rows;
 
    if($qtd > 0){
    
    print "<table class = 'table table-hover table-striped table-bordered'>";

    print "<tr>";
    print "<th>#Matrícula</th>";
    print "<th>CPF</th>";
    print "<th>Tipo</th>";
    print "<th>Nome</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Email</th>";
    print "<th>Senha</th>";
    print "<th>Ações</th>";
    
    print "</tr>";

    while($row = $res->fetch_object()){

    print "<tr>";
    print "<td>".$row->matricula.  "</td>";
    print "<td>".$row->cpf.  "</td>";
    print "<td>".$row->user_type.  "</td>";
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
    print "<p class = 'alert alert-danger' Não
    encontrou resultados!</p>";
}





?>