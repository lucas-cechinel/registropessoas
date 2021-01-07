<?php
	require_once "conexao.php";
	require_once "protecao.php";
	$conexao = new Conexao();

	class Cadastro
	{
		private $conexao;
		private $nomecadastro;
		private $senhacadastro;
		
		function __construct(Conexao $conexao, $nomecadastro, $emailcadastro)
		{
			$this->conexao = $conexao->conectar();
			$this->nomecadastro = $nomecadastro;
			$this->emailcadastro = $emailcadastro;
		}

		function cadastrar() 
		{
			$query = "insert into tb_usuarios(nome, email) values('$this->nomecadastro','$this->emailcadastro')";
			$this->conexao->prepare($query);
			$this->conexao->exec($query);
			header("Location: /admininicio");
		}
	}


	$nome = $_POST['nome'];
	$email = $_POST['email'];

	$cadastrar = new Cadastro($conexao, $nome, $email);
	$cadastrar->cadastrar();
