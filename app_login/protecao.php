<?php
	session_start();

	if ($_SESSION['autenticado'] != true) {
		header("Location: login_error.html?error=access_denied");
	}
?>