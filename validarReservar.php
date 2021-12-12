<?php
if (isset($_POST['dataHE']) && isset($_POST['dataHS'])) {
	session_start();
	if (isset($_SESSION["cliente_logado"]) == true){
		// Conectando com o banco (veja o arquivo bd_conexao.php)
		// Agora existe o obj $con conectado com o BD
		require_once('bd_conexao.php');
		// Recebendo as informações do form-inserir.php
		// Criando a minha string com o código SQL de inserção
		$categoria = $_GET['cat'];
	  
		$dataE = $_POST['dataHE'];
		$dataEF = date("Y-m-d",strtotime(str_replace('/','-',$dataE)));
		
		$dataS = $_POST['dataHS'];
		$dataSF = date("Y-m-d",strtotime(str_replace('/','-',$dataS)));
		
		$emailS = $_SESSION["cliente_logado"];
		
		$pes = "
		SELECT *
		FROM cliente WHERE email = '$emailS'
		";
		$resultado = $con->query($pes);
		$infoUsuario = mysqli_fetch_object($resultado);
		$idCli = $infoUsuario->idCliente;
		
		$sql = "
		INSERT INTO reservaquarto(idReserva, dataEntrada, dataSaida, fk_idCategoria, fk_idCliente) 
		VALUES ('','$dataEF','$dataSF','$categoria','$idCli')
		";
		// Mandando a Query para o banco!
		if ($con->query($sql) === TRUE) {
			$flag = 1;
		} else {
			$flag = 0;
		}
		// Fechando a conexão
		fecharConexao($con);
		header("Location: minhaConta.php?t=$flag");
	}else{
		header("Location: login.php");
	}
} else {
	header("Location: acomodacoes.php");
}