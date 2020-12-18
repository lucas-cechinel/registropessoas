<!DOCTYPE html>
<html>
    <head>

      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="estilos.css">
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <!--Font Awesome-->
      <script src="https://kit.fontawesome.com/562bcac936.js" crossorigin="anonymous"></script>

	    <title>Login</title>
	    
    </head>
    
    <body>
        <div class="wrapper fadeInDown">
          <div id="formContent">
            <!-- Tabs Titles -->
        
            <!-- Icon -->
            <div class="mb-2">
              <img src="imagens/user-icon.png" id="icon" alt="User Icon" />
            </div><br>
        
            <!-- Login Form -->
            <form class="form-group" method="post" action="controle-login.php">
              <input type="email" class="form-control mb-3" name="email" placeholder="Insira seu email"><br>

              <input type="password" class="form-control mb-2" name="senha" placeholder="Insira sua senha"><br>

              <button type="submit" class="btn btn-success mb-3" >
                  <span id="botao-entrar">Entrar</span>
              </button>

            </form>
        
          </div>
        </div>
    </body>
    
</html>