<!DOCTYPE html>

<?php
  require "../app_login/protecao.php";
?>
  
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

	    <title>Cadastro</title>
	    
    </head>
    
    <body>

        <div class="wrapper fadeInDown">

          <div id="formContent">
            <!-- Tabs Titles -->
        
            <!-- Icon -->
            <div>
              <img src="imagens/user-icon.png" id="icon" alt="User Icon" />
            </div><br>
        
            <!-- Login Form -->
            <form class="form-group" action="controle-cadastro.php" method="post">

              <input type="text" class="form-control" name="nome" placeholder="Nome completo" required="">

              <input type="email" class="form-control" name="email" placeholder="Insira seu email" required=""><br>

              <button type="submit" class="btn btn-success mb-3" >
                  <span id="botao-entrar">Cadastrar</span>
              </button>

              <a href="admin_inicio.php">
                <button type="button" class="btn btn-outline-secondary mb-3" >
                  <span id="botao-entrar">Voltar ao menu</span>
                </button>
              </a>

            </form>

          </div>

        </div>

    </body>
    
</html>