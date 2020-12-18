<!DOCTYPE html>

	<?php

		 require "../../app_login/all_users.php";

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
		<title>Lista de usuários</title>

		<!--JS-->
		<script type="text/javascript">

			function remover(id) {
				location.href = "lista_usuarios.php?action=remove&id="+id;
			}

			function editar(id, nome_u, email_u){

				//create form
				let form = document.createElement('form')
				form.className = 'form-group grid grid-template-columns'
				form.action = "lista_usuarios.php?action=edit&id="+id
				form.method = 'post'

				//create input for text entering
				let inputName = document.createElement('input')
				inputName.type = 'text'
				inputName.name = 'nome'
				inputName.className = 'form-control bg-light item'
				inputName.value = nome_u

				let inputEmail = document.createElement('input')
				inputEmail.type = 'email'
				inputEmail.name = 'email'
				inputEmail.className = 'form-control bg-light item'
				inputEmail.value = email_u

				//create button to submit the form
				let button = document.createElement('button')				
				button.type = 'submit'
				button.className = 'btn btn-success item'
				button.innerHTML = 'Atualizar'

				//Hierarchy
				form.appendChild(inputName)
				form.appendChild(inputEmail)
				form.appendChild(button)

				//selecting div
				let name = document.getElementById('nome_'+id)
				let email = document.getElementById('email_'+id)

				//clean register informations
				email.innerHTML = ''
				name.innerHTML = ''

				//include form on the browser
				email.insertBefore(form, email[0])
				name.insertBefore(form, name[0])

			}

		</script>
	</head>

	<body>



		<div class="container my-5" >

			<a href="admin_inicio.php">
				<button type="button" class="btn btn-outline-secondary">
					Voltar ao menu
				</button>
			</a>

				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Nome</th>
				      <th scope="col">Email</th>
				    </tr>
				  </thead>
				  <tbody>

			<?php foreach($all_users as $key => $usuario){ ?>

				<tr>
				    <th><?= $usuario['id'] ?></th>

					<div>			    	
					    <td id="nome_<?= $usuario['id'] ?>"><?= $usuario['nome'] ?></td>
					    <td id="email_<?= $usuario['id'] ?>"><?= $usuario['email'] ?></td>
					</div>

				    <td>	
				    <i class="far fa-trash-alt fa-lg text-danger" role="button" onclick="remover(<?= $usuario['id'] ?>)"></i>
				    <i class="far fa-edit fa-lg text-warning" role="button" onclick="editar(<?= $usuario['id'] ?>, '<?= $usuario['nome'] ?>', '<?= $usuario['email'] ?>')"></i>
				    </td>
				</tr>

			<?php } ?>
				
				  </tbody>
				</table>

		</div>

	</body>

</html>