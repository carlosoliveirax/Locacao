<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: #F2f2F2">

    <h1>Novo equipamento</h1>
        
        <div class="card">
            <div class="card-body">
    
               
        
                <form action="?page=salvar" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
        
                    <div class="mb-3">
                        <label>Nome:</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div> 

                    <div class="mb-3">
                        <label>Estado:</label>
                        <br>
                            <input type="radio" id="disponivel" name="estado" value="disponível" required>
                            <label for="disponivel">Disponível</label>
                        <br>
                            <input type="radio" id="naodisponivel" name="estado" value="não disponível" required>
                            <label for="naodisponivel">Não disponível</label>
                    </div>
        

                    <div class="col-4 col-s-12">
                        <label>Retirada: </label>
                            <h6>Por favor, informe 00:00 caso não tenha retirado</h6>
                                <input type="time" name="horarioR" id="txtHora" class="form-control" required>        
                    </div>
        
                    <div class="col-4 col-s-12">
                        <label>Devolução: </label>
                            <input type="time" name="horarioD" id="txtHora" class="form-control" required>
                    </div>
                    <br>
        


                    <div class="col-4 col-s-12">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
        
                </form>
            </div>
        </div>

   
</body>
</html>