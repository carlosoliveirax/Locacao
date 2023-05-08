<h1>Consultar equipamentos</h1>
<?php

  include_once("config.php");

?>

  <form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="consultar">
  
      <div class="mb-3">
        <label>Nome:</label>
          <input type="text" name="nome" class="form-control" required> 
      </div>
  
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Consultar</button>
      </div>

  </form>





