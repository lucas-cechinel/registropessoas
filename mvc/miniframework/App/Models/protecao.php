<?php
	session_start();
	if ($_SESSION['autenticado'] != true) {
		header("Location: /loginerror");
	}