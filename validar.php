<?php
if (isset($_POST['usuEmail'])){
	
	#die('Valor do checkbox: '. $_POST['remember_me']); 
	// Conectando com o banco (veja o arquivo bd_conexao.php)
	// Agora existe o obj $con conectado com o BD
	require_once('bd_conexao.php');

	// Pegando as informações do formulário.
	$email  = $_POST['usuEmail'];
	$senha  = $_POST['usuSenha'];

	// Criando a minha string com o código SQL de consulta
	$sql = "
	SELECT *
	FROM cliente
	WHERE email = '$email' AND senha = '$senha'
	";

	// Mando a SQL para o banco através do método query da 
	//    classe de conexão mysqli() expressa pelo obj $con
	$resultado = $con->query($sql);


	// Transformando a estrutura do $resultado em um obj.
	//    com as informações dos campos da tabela no BD.
	$infoUsuario = mysqli_fetch_object($resultado);
	if (empty($infoUsuario)) {
		header("Location: login.php");
	} else { 
		if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'on' ){
			
			# Criar cookies com email e senha do cara. Pra que da próxima vez que ele acesse o site ele não precise digitar o e-mail e senha.
			setcookie('usu', '', time() + 60*60*24);
			
			
		}
		
		session_start();
		$_SESSION["cliente_logado"] = $email;
		header("Location: minhaConta.php");
		
		// Fechando a conexção
		fecharConexao($con);		
		//header("Location: minhaConta.php");
	}
	
} else {
	header("Location: login.php");
	
}

?>