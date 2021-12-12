 <?php
if (isset($_POST['admEmail'])) {
  // Conectando com o banco (veja o arquivo bd_conexao.php)
  // Agora existe o obj $con conectado com o BD
  require_once('bd_conexao.php');
  // Recebendo as informações do form-inserir.php
  $varEmail = $_POST['admEmail'];
  $varSenha = $_POST['admSenha'];
  // Criando a minha string com o código SQL de inserção
  $sql = "
  SELECT *
	FROM admin
	WHERE email = '$varEmail' AND senha = '$varSenha'
	";
	// Mando a SQL para o banco através do método query da 
	//    classe de conexão mysqli() expressa pelo obj $con
	$resultado = $con->query($sql);


	// Transformando a estrutura do $resultado em um obj.
	//    com as informações dos campos da tabela no BD.
	$infoUsuario = mysqli_fetch_object($resultado);
	if (empty($infoUsuario)) {
		header("Location: admin.php");
	} else { 
				
		session_start();
		$_SESSION["admin_logado"] = $varEmail;
		header("Location: hubAdmin.php");
		
		// Fechando a conexção
		fecharConexao($con);		
		//header("Location: minhaConta.php");
	}
	
} else {
	header("Location: admin.php");
	
}
?>