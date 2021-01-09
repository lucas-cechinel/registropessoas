<?php

namespace App\Controllers;

class IndexController {

	public function index() {
		require_once "../App/Views/index.phtml";
	}

	public function admininicio() {
		require_once "../App/Views/admininicio.phtml";
	}

	public function controlelogin() {
		require_once "../App/Models/controlelogin.php";
	}

	public function controlecadastro() {
		require_once "../App/Models/controlecadastro.php";
	}

	public function loginerror() {
		require_once "../App/Views/loginerror.phtml";
	}

	public function logoff() {
		require_once "../App/Models/logoff.php";
	}

	public function cadastro() {
		require_once "../App/Views/cadastro.phtml";
	}

	public function listausuarios() {
		require_once "../App/Views/listausuarios.phtml";
	}

	public function edituser() {
		require_once "../App/Views/edituser.phtml";
	}

	public function editform() {
		require_once "../App/Views/editform.phtml";
	}

	public function edituser_db() {
		require_once "../App/Models/edituser_db.php";
	}

	public function deleteuser() {
		require_once "../App/Views/deleteuser.phtml";
	}
	
	public function deleteuser_db() {
		require_once "../App/Models/deleteuser_db.php";
	}
}