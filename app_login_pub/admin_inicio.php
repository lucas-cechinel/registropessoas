<!DOCTYPE html>

<?php
	require "../../app_login/protecao.php";
?>

<html class="bg-light">

	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/562bcac936.js" crossorigin="anonymous"></script>
		<title>Início</title>
	</head>

	<body>


		<div class="wrapper fadeInDown">

		          <div id="formContent">
		            <!-- Tabs Titles -->
		            		<br>
		            		<p class="w-100 d-block h6">Bem vindo administrador</p><br>

		            		<a href="admin_inicio.php" class="w-100 d-block pb-2 text-decoration-none text-secondary h6">Início</a>
		            		<a href="cadastro.php" class="w-100 d-block pb-2 text-decoration-none text-secondary h6">Cadastro</a>
		            		<a href="lista_usuarios.php" class="w-100 d-block pb-2 text-decoration-none text-secondary h6">Lista de Usuários</a>
		             		
							<a href="logoff.php"  class="w-100 d-block pb-2 text-danger text-decoration-none h6">
									Sair							
							</a>




		          </div>

		</div>

	</body>

</html>