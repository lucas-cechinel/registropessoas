
<?php


	require_once 'conexao.php';
	
	require "protecao.php";

	$users_stmt = "select * from tb_usuarios";
	$stmt_u = $conexao->prepare($users_stmt);
	$stmt_u->execute();
	$all_users = $stmt_u->fetchAll(PDO::FETCH_ASSOC);


	if (isset($_GET['action'])) {

		if($_SESSION['autenticado']) {

			$acao = $_GET['action'];
			$id = $_GET['id'];

			if ($acao == 'remove') {
				$query = "delete from tb_usuarios where id = $id";
				$conexao->exec($query);
				header("Location: lista_usuarios.php");

			} else if ($acao == 'edit') {

				/*test
				echo "<pre>";
				print_r($_POST);
				echo "</pre>";
				*/
				$updated_name = $_POST['nome'];
				$updated_email = $_POST['email'];

				$query = "update tb_usuarios set nome = '$updated_name', email = '$updated_email' where id = $id";
				$conexao->exec($query);
				header("Location: lista_usuarios.php");

			}

		} else {
			header("Location: login_error.html?error=acess_denied");
		}
	}

?>
