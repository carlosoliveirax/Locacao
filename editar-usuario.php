<h1>Editar usuário</h1>

<?php

    $sql = "SELECT * FROM usuarios WHERE matricula=".$_REQUEST["matricula"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
 
?>

    <form action="?page=salvar_user" method="POST">
        <input type="hidden" name="acao" value="editar_user">
        <input type="hidden" name="matricula" value="<?php print $row->matricula; ?>">


        <div class="mb-3">
            <label>CPF:</label>
                <input type="text" name="cpf" 
                value="<?php print $row->cpf; ?>" class="form-control" required>
        </div>


        <div class="mb-3">
            <label>Tipo:</label>
                <select name="tipo" value="<?php print $row->user_type; ?>" required>
                    <option value="prof">Professor</option>
                    <option value="admin">Administrador</option>
                </select>
        </div>


        <div class="mb-3">
            <label>Nome:</label>
                <input type="text" name="user_name" 
                value="<?php print $row->user_name; ?>" class="form-control" required>
        </div>
    

        <div class="mb-3">
            <label>Data de Nascimento:</label>
                <input type="date" name="dat" 
                value="<?php print $row->data_nasc; ?>" class="form-control" required>
        </div>
    

        <div class="mb-3">
            <label>Email:</label>
                <input type="email" name="email" 
                value="<?php print $row->email; ?>" class="form-control" required>
        </div>


        <div class="mb-3">
            <label>Senha:</label>
                <input type="password" name="senha" 
                value="<?php print $row->senha; ?>" class="form-control" required>
        </div>
    

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>


</form>