<h1>Editar equipamento</h1>
<?php

    $sql = "SELECT * FROM equipamentos WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
 
?>

    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id"   value="<?php print $row->id; ?>">

            <div class="mb-3">
                <label>Nome:</label>
                    <input type="text" name="nome" 
                    value="<?php print $row->nome; ?>" class="form-control">
            </div>

            <div class="mb-3">
                <p>Estado:</p>
                    <input type="radio" id="disponivel" name="estado" value="disponível" required>
                    <label for="disponivel">Disponível</label>
                    <br>
                    <input type="radio" id="naodisponivel" name="estado" value="não disponível" required>
                    <label for="naodisponivel">Não disponível</label>
            </div>
            
            <div class="mb-3">
                <p>Retirada e Devolução: </p>
                    <input type="time" name="horarioR" id="txtHora" class="form-control" value="<?php print $row->horario; ?>"> <br>
                    <input type="time" name="horarioD" id="txtHora" class="form-control"  value="<?php print $row->$horarioD; ?>" required>
            </div>
    

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

</form>