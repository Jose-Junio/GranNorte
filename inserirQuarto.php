<?php
if (isset($_POST['botao'])) {
  // Conectando com o banco (veja o arquivo bd_conexao.php)
  // Agora existe o obj $con conectado com o BD
  require_once('bd_conexao.php');
  // Recebendo as informações do form-inserir.php
  $varNum = $_POST['numero'];
  $varCat = $_POST['categoria'];
  // Criando a minha string com o código SQL de inserção
  $sql = "
  INSERT INTO quarto (numeroQuarto, categoriaQuarto_idCategoria)
  VALUES ('$varNum', '$varCat')
  ";
  // Mandando a Query para o banco!
  if ($con->query($sql) === TRUE) {
    $flag = 1;
  } else {
    $flag = 0;
  }
  // Fechando a conexão
  fecharConexao($con);
  header("Location: cadastrarQuarto.php?result=$flag");
} else {
  header("Location: cadastrarQuarto.php");
}