<?php
	session_start();

	require_once "conexao.php";
	$conexao = new Conexao();

    class ValidaLogin
    {
    	private $conexao;

    	private $pulled_email;
    	
    	private $pulled_passwrd;

    	public function __construct(Conexao $conexao, $pulled_email, $pulled_passwrd){
    		$this->conexao = $conexao->conectar();
    		$this->pulled_email = $pulled_email;
    		$this->pulled_passwrd = $pulled_passwrd;
    	}
    	function logar()
    	{
    		echo $pulled_email;

			$info_stmt = "select * from tb_admin";
			$stmt_i = $this->conexao->query($info_stmt);
			$info_valida = $stmt_i->fetchAll(PDO::FETCH_ASSOC);
			foreach ($info_valida as $key => $value) {
				$email_valido = $value['email'];
				$senha_valida = $value['senha'];
				if ($this->pulled_email == $email_valido && $this->pulled_passwrd == $senha_valida) {
					$usuario_autenticado = true;
				}
			}
			if ($usuario_autenticado) {
				$_SESSION['autenticado'] = true;
				header("Location: /admininicio");
				} else {
			 		$_SESSION['autenticado'] = false;
					header("Location: /loginerror");
				}
		    		
    	}
    	  // function info()
    	  //  {
    	  //  	var_dump($this->pulled_email);
    	  //  }
    }

	$email = $_POST['email']; 
	$password = $_POST['senha'];

	$validalogin = new ValidaLogin($conexao, $email, $password);
	$validalogin->logar();

	
	

	// $validalogin->info();